<?php

namespace App\Http\Controllers;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

class Blog extends Controller
{
    public function index()
    {
        $path = resource_path('content/blogs');
        $blogs = [];

        if (File::isDirectory($path)) {
            $files = File::files($path);
            
            foreach ($files as $file) {
                if ($file->getExtension() === 'md') {
                    $fileContents = File::get($file->getPathname());
                    $document = YamlFrontMatter::parse($fileContents);
                    
                    $blogs[] = [
                        'slug' => $file->getFilenameWithoutExtension(),
                        'title' => $document->title ?? 'Untitled',
                        'author' => $document->author ?? 'Unknown',
                        'date' => $document->date ?? null,
                        'tags' => $document->tags ?? [],
                        'syndication' => $document->syndication ?? [], // Add syndication field
                        'excerpt' => \Illuminate\Support\Str::limit(strip_tags(\Illuminate\Support\Str::markdown($document->body())), 150),
                    ];
                }
            }
            
            // Sort by date (newest first)
            usort($blogs, function($a, $b) {
                return strtotime($b['date'] ?? '2000-01-01') - strtotime($a['date'] ?? '2000-01-01');
            });
        }

        // Get unique tags for filter - make sure it's a collection
        $allTags = collect($blogs)->pluck('tags')->flatten()->unique()->sort()->values();

        // Filter by tag if provided
        $selectedTag = request('tag');
        if ($selectedTag) {
            $blogs = array_filter($blogs, function($blog) use ($selectedTag) {
                return in_array($selectedTag, $blog['tags']);
            });
        }

        return view('blog', compact('blogs', 'allTags', 'selectedTag'));
    }

    public function show($slug)
    {
        $filePath = resource_path("content/blogs/{$slug}.md");

        if (!File::exists($filePath)) {
            abort(404);
        }

        $fileContents = File::get($filePath);
        $document = YamlFrontMatter::parse($fileContents);

        $blog = [
            'title' => $document->title,
            'author' => $document->author,
            'date' => $document->date,
            'tags' => $document->tags ?? [],
            'syndication' => $document->syndication ?? [], // Add syndication field
            'excerpt' => $document->excerpt,
            'body' => $document->body(),
        ];

        return view('blog.show', compact('blog'));
    }
}