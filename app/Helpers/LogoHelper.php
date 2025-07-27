<?php

namespace App\Helpers;

class LogoHelper
{
    public static function getBase64Logo()
    {
        $logoPath = public_path('img/logo2.png');

        if (file_exists($logoPath)) {
            return 'data:image/png;base64,' . base64_encode(file_get_contents($logoPath));
        }

        return null;
    }
}
