<?php

namespace App\Services;

use Illuminate\Support\Arr;

class FilmHelper
{
    public static function getYear (string $year): string
    {
        if (!$year) return '';

        $explode = explode('-', $year);

        if (count($explode) === 0) {
            return $year;
        }

        return $explode[0];
    }

    public static function getCountry (array $production_countries = []): string
    {
        if (empty($production_countries)) {
           return '';
        }

        return Arr::get($production_countries, '0.iso_3166_1', '');
    }
}
