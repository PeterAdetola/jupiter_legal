<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use League\CommonMark\CommonMarkConverter;


class ServiceController extends Controller
{
    public function mainService($main_service)
    {
        $services = config('main_services');

        \Log::info('Requested main_service: ' . $main_service);
        \Log::info('Available keys: ' . implode(', ', array_keys($services)));

        if (!isset($services[$main_service])) {
            abort(404);
        }

        // Load the main service Markdown file
        $path = base_path("resources/content/pages/services/{$main_service}.md");

        if (!file_exists($path)) {
            abort(404, "Main service content file not found.");
        }

        $document = YamlFrontMatter::parseFile($path);
        $converter = new CommonMarkConverter();

//        $content = $document->matter('criteria') ?? $document->matter('main_description') ?? '';

        $service = [
            'title' => $document->matter('title'),
            'intro' => $document->matter('intro'),
            'image' => $document->matter('image') ?? null,
            'image_bg' => $document->matter('image_bg') ?? null,
            'main_description' => $document->matter('main_description'),
            'criteria' => $document->matter('criteria') ?? null,
            'process' => $document->matter('process') ?? null,
            'packages' => $document->matter('packages') ?? null,
            'faq' => $document->matter('faq') ?? null,
            'services' => $document->matter('services') ?? [],
        ];

        return view('services.main_service', compact('service', 'main_service'));
    }

    public function subService($main_service, $slug)
    {
        $path = "resources/content/pages/services/{$main_service}/{$slug}.md";

        if (!file_exists(base_path($path))) {
            abort(404);
        }

        $document = YamlFrontMatter::parseFile(base_path($path));
        $converter = new CommonMarkConverter();

        $sub_service = [
            'title' => $document->matter('title') ?? '',
            'intro' => $document->matter('intro') ?? '',
            'main_service' => $main_service,

            // Optional sections
            'main_description' => $document->matter('main_description')
                ? $converter->convert($document->matter('main_description'))->getContent()
                : null,
            'description_list' => $document->matter('description_list') ?? null,
            'benefits' => $document->matter('benefits') ?? null,
            'process' => $document->matter('process') ?? null,
            'why' => $document->matter('why') ?? null,
            'steps' => $document->matter('steps') ?? null,
            'criteria' => $document->matter('criteria') ?? null,
            'packages_intro' => $document->matter('packages_intro') ?? null,
            'packages' => $document->matter('packages') ?? null,
            'consult_packages' => $document->matter('consult_packages') ?? null,
            'faqs' => $document->matter('faqs') ?? [],
            'content' => $converter->convert($document->body())->getContent(),
        ];

        return view('services.service', compact('sub_service', 'main_service'));
    }


}
