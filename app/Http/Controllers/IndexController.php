<?php

namespace App\Http\Controllers;

use App\Services\MovieApi;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;

class IndexController extends Controller
{
    /**
     * @param MovieApi $api
     */
    public function __construct (
        private readonly MovieApi $api
    ) {}

    /**
     * @return View
     */
    public function index(): View
    {
        $persons = $this->api->getPopularPeoples();
        $genres = $this->api->getGenres();
        $playingNow = $this->api->getPlayingNow();
        $popular = $this->api->getPopular();

        return view('index')->with([
            'popular' => array_values(array_filter(Arr::get($popular,'results', []), fn(array $item) => !empty($item['overview']))),
            'playingNow' => Arr::get($playingNow, 'results', []),
            'genres' => Arr::get($genres, 'genres', []),
            'actors' => Arr::get($persons, 'results', [])
        ]);
    }
}
