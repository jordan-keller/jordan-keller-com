<?php

namespace App\Http\Controllers;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

class Lyrics extends Controller
{
    public function index()
    {
        $path = resource_path('content/lyrics');
        $lyrics = [];

        if (File::isDirectory($path)) {
            $files = File::files($path);
            
            foreach ($files as $file) {
                if ($file->getExtension() === 'md') {
                    $fileContents = File::get($file->getPathname());
                    $document = YamlFrontMatter::parse($fileContents);
                    
                    $lyrics[] = [
                        'slug' => $file->getFilenameWithoutExtension(),
                        'title' => $document->title ?? 'Untitled',
                        'album' => $document->album ?? 'Unknown Album',
                        'image' => $document->image ?? null,
                        'track' => $document->track ?? 999, // Default to high number if no track
                        'body' => $document->body(),
                    ];
                }
            }
        }

        // Sort by track number (ascending) - NEW CODE ADDED
        usort($lyrics, function($a, $b) {
            return $a['track'] <=> $b['track'];
        });

        $allTags = [];
        $selectedTag = null;

        return view('lyrics', compact('lyrics'));
    }

    public function show($slug)
    {
        $filePath = resource_path("content/lyrics/{$slug}.md");

        if (!File::exists($filePath)) {
            abort(404);
        }

        $fileContents = File::get($filePath);
        $document = YamlFrontMatter::parse($fileContents);

        $lyric = [
            'title' => $document->title,
            'album' => $document->album,
            'image' => $document->image,
            'track' => $document->track ?? null,
            'body' => $document->body(),
        ];

        return view('lyrics.show', compact('lyric'));
    }
}