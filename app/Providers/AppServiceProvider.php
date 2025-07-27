<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use App\Helpers\LogoHelper;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share main services globally
        View::composer('*', function ($view) {
            $main_services = config('main_services');
            $view->with('main_services', $main_services);
        });

        // Share default meta description from README
        View::composer('*', function ($view) {
            $readmePath = base_path('README.md');
            $defaultMetaDescription = 'Default website description';

            if (file_exists($readmePath)) {
                $content = file_get_contents($readmePath);
                $defaultMetaDescription = Str::limit(strip_tags($content), 160);
            }

            $view->with('metaDescription', $defaultMetaDescription);
        });

        // ✅ Share contact info from contact.md globally
        $contact = $this->loadContact();
        View::share('contact', $contact);

        View::share('base64Logo', LogoHelper::getBase64Logo());
    }

    protected function loadContact()
    {
        $path = base_path('resources/content/pages/contact.md');
        $document = YamlFrontMatter::parseFile($path);

        $phoneNumbers = $document->matter('phone_numbers') ?? [];
        $mainRawPhone = $phoneNumbers[0] ?? '';
        $salesRawPhone = $phoneNumbers[1] ?? '';
        $mainCleanPhone = preg_replace('/[^\d+]/', '', $mainRawPhone);
        $salesCleanPhone = preg_replace('/[^\d+]/', '', $salesRawPhone);

        return [
            'hook'              => $document->matter('hook') ?? '',
            'est_year'              => $document->matter('est_year') ?? '',
            'intro_title'       => $document->matter('intro_title') ?? '',
            'intro_description' => $document->matter('intro_description') ?? '',
            'phone_numbers'     => $phoneNumbers,
            'main_clean_phone'  => $mainCleanPhone,
            'sales_clean_phone'  => $salesCleanPhone,
            'email'             => $document->matter('email') ?? '',
            'addresses'         => $document->matter('addresses') ?? [],
            'social_media'      => $document->matter('social_media') ?? '',
        ];
    }

}
