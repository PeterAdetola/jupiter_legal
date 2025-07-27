<?php
namespace App\Http\Controllers;
use League\CommonMark\CommonMarkConverter;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class HomeController extends Controller
{
    public function index()
    {
        $converter = new CommonMarkConverter();

        $sections = [
            'home'     => $this->parseMarkdown('resources/content/pages/home/home.md', $converter, 'home'),
            'about'    => $this->parseMarkdown('resources/content/pages/about/about_us.md', $converter),
            'why_us'   => $this->parseMarkdown('resources/content/pages/about/why_us.md', $converter, 'why_us'),
            'realty'   => $this->parseMarkdown('resources/content/pages/services/real-estate-law.md', $converter, 'service'),
            'business' => $this->parseMarkdown('resources/content/pages/services/business-law.md', $converter, 'service'),
        ];

        return view('index', compact('sections'));
    }

    /**
     * General Markdown parser for different types of content.
     *
     * @param string $path
     * @param CommonMarkConverter $converter
     * @param string|null $type
     * @return array
     */
    private function parseMarkdown($path, $converter, $type = null)
    {
        $document = YamlFrontMatter::parseFile(base_path($path));
        $data = [];

        switch ($type) {
            case 'home':
                $data['slides'] = $document->matter('slides') ?? [];
                $data['ad']     = $document->matter('ad') ?? [];
                $data['faq']    = $document->matter('faq') ?? [];
                $data['testimonials']  = $document->matter('testimonials') ?? [];
                $data['content'] = $converter->convert($document->body())->getContent();
                break;

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

