<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use League\CommonMark\CommonMarkConverter;


class MainServiceController extends Controller
{
    public function show($slug)
    {
        $path = "resources/content/service_details/{$slug}.md";

        if (!file_exists(base_path($path))) {
            abort(404);
        }

        $converter = new CommonMarkConverter();
        $document = YamlFrontMatter::parseFile(base_path($path));

        $main_service = [
            'title' => $document->matter('title') ?? '',
            'intro' => $document->matter('intro') ?? '',
            'image' => $document->matter('image') ?? '',
            'content' => $converter->convert($document->body())->getContent(),
        ];

        return view('services.main_services', compact('main_service'));
    }

}

