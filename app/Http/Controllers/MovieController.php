<?php

namespace App\Http\Controllers;

use App\Services\MovieApi;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class MovieController extends Controller
{
    /**
     * @param MovieApi $api
     */
    public function __construct (
        private readonly MovieApi $api
    ) {}

    public function index ()
    {
        $countries = $this->api->getCountries();
        $genres = $this->api->getGenres();
        $pages = 5;
        $i = 0;
        $actors = [];
        while ($i < $pages) {
            $actors = array_merge($actors, Arr::get($this->api->getPopularPeoples($i + 1), 'results', []));
            $i++;
        }

        $page = Arr::get($_GET, 'page', 1);

        $filterGenres = Arr::get($_GET, 'genres', []);

        $movies = $this->api->getMoviesWithFilters($page, [
            'with_genres' => implode(',', $filterGenres),
            'with_people' => $_GET['actor'] ?? '',
            'with_origin_country' => $_GET['country'] ?? '',
            'year' => $_GET['year'] ?? ''
        ]);
        return view('movies')->with([
            'genres' => Arr::get($genres, 'genres', []),
            'countries' => $countries,
            'actors' => $actors,
            'movies' => Arr::get($movies, 'results', []),
            'page' => $page,
            'total_pages' => Arr::get($movies, 'total_pages', 1)
        ]);
    }

    public function show (int $movieId)
    {
        $movie = $this->api->getMovie($movieId);
        $movieReviews = $this->api->getMovieReviews($movieId);
        abort_if(!$movie || !$movieReviews, 404);

        $similars = $this->api->getMovieSimilars($movieId);
        $images = $this->api->getMovieImages($movieId);
        return view('movie')->with([
            'movie' => $movie,
            'images' => Arr::get($images, 'backdrops', []),
            'similars' => Arr::get($similars, 'results', []),
            'reviews' => array_filter(Arr::get($movieReviews, 'results', []), fn (array $item) => !empty($item['author'] && !empty($item['content'])))
        ]);
    }

    public function forChild ()
    {
        return view('for-child');
    }
}
