<?php

namespace App\Http\Controllers;

use Spatie\YamlFrontMatter\YamlFrontMatter;
use Illuminate\Support\Facades\File;

class Videos extends Controller
{
    public function index()
    {
        $path = resource_path('content/videos');
        $videos = [];

        if (File::isDirectory($path)) {
            $files = File::files($path);
            
            foreach ($files as $file) {
                if ($file->getExtension() === 'md') {
                    $fileContents = File::get($file->getPathname());
                    $document = YamlFrontMatter::parse($fileContents);
                    
                    $videos[] = [
                        'title' => $document->title ?? 'Untitled',
                        'youtube_id' => $document->youtube_id ?? null,
                        'date' => $document->date ?? now()->format('Y-m-d'),
                        'description' => $document->description ?? null,
                        'body' => $document->body(),
                    ];
                }
            }
        }

        // Sort by date (newest first)
        usort($videos, function($a, $b) {
            return strtotime($b['date']) <=> strtotime($a['date']);
        });

        return view('videos', compact('videos'));
    }
}