<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\CommonMark\CommonMarkConverter;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class AboutController extends Controller
{
    public function index()
    {
        $converter = new CommonMarkConverter();

        $sections = [
            'about_us' => $this->parseMarkdown('resources/content/pages/about/about_us.md', $converter),
            'mission' => $this->parseMarkdown('resources/content/pages/about/mission.md', $converter),
            'vision' => $this->parseMarkdown('resources/content/pages/about/vision.md', $converter),
            'core_values' => $this->parseMarkdown('resources/content/pages/about/core_values.md', $converter),
            'why_us' => $this->parseMarkdown('resources/content/pages/about/why_us.md', $converter, 'why_us'),

            // 🔥 Add these so your Blade doesn't error
            'realty' => $this->parseMarkdown('resources/content/pages/services/real-estate-law.md', $converter, 'service'),
            'business' => $this->parseMarkdown('resources/content/pages/services/business-law.md', $converter, 'service'),
        ];

        return view('about', compact('sections'));
    }

    private function parseMarkdown($path, $converter, $type = null)
    {
        $document = YamlFrontMatter::parseFile(base_path($path));
        $data = [];

        switch ($type) {
            case 'why_us':
                $data['title'] = $document->matter('title') ?? '';
                $data['intro'] = $document->matter('intro') ?? '';
                $data['items'] = $document->matter('items') ?? [];
                $data['content'] = $converter->convert($document->body())->getContent();
                break;

            case 'service':
                $data['title'] = $document->matter('title') ?? '';
                $data['intro'] = $document->matter('intro') ?? '';
                $data['services'] = $document->matter('services') ?? [];
                $data['content'] = $converter->convert($document->body())->getContent();
                break;

            default:
                $data['title'] = $document->matter('title') ?? '';
                $data['content'] = $converter->convert($document->body())->getContent();
                break;
        }

        return $data;
    }
}

