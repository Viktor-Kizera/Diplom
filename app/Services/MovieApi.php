<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Exception;
class MovieApi
{
    /**
     * @var string $key
     */
    private string $key;

    /**
     * @var string $uri
     */
    private string $uri;

    /**
     * @var string $language
     */
    private string $language = 'uk-UA';

    public function __construct ()
    {
        $this->key = config('movie.key');
        $this->uri = config('movie.uri');
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getPopularPeoples (int $page = 1): array
    {
        return $this->request('/person/popular', 'GET', [
            'language' => $this->language,
            'page' => $page
        ]);
    }

    public function getMoviesWithFilters (int $page = 1, array $filters = [])
    {
        return $this->request('/discover/movie', 'GET', [
            'language' => $this->language,
            'page' => $page,
            ...$filters,
        ]);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getGenres (): array
    {
        return $this->request('/genre/movie/list', 'GET', [
            'language' => $this->language
        ]);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getPlayingNow (): array
    {
        return $this->request('/movie/now_playing', 'GET', [
            'language' => $this->language
        ]);
    }

    public function getPopular (): array
    {
        return $this->request('/movie/popular', 'GET', [
            'language' => $this->language,
            'page' => 1
        ]);
    }

    /**
     * @param int $movieId
     * @return array|null
     */
    public function getMovie (int $movieId): ?array
    {
        try {
            return $this->request('/movie/' . $movieId, 'GET', [
                'language' => $this->language,
                'page' => 1
            ]);
        } catch (\Throwable $throwable) {
            return null;
        }
    }

    /**
     * @param int $movieId
     * @return array|null
     */
    public function getMovieReviews (int $movieId): ?array
    {
        try {
            return $this->request('/movie/' . $movieId . '/reviews', 'GET', [
                'page' => 1
            ]);
        } catch (\Throwable $throwable) {
            return null;
        }
    }

    /**
     * @param int $movieId
     * @return array|null
     */
    public function getMovieSimilars (int $movieId): ?array
    {
        return $this->request('/movie/' . $movieId . '/similar', 'GET', [
            'page' => 1,
            'language' => $this->language
        ]);
    }

    /**
     * @param int $movieId
     * @return array
     * @throws Exception
     */
    public function getMovieImages (int $movieId): array
    {
        return $this->request('/movie/' . $movieId . '/images', 'GET', [
            'page' => 1,
        ]);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getCountries (): array
    {
        return $this->request('/configuration/countries', 'GET', [
            'language' => $this->language,
        ]);
    }

    /**
     * @param string $uri
     * @param $method
     * @param array $data
     * @return array
     * @throws Exception
     */
    private function request(string $uri = '/', $method = 'GET', array $data = []): array
    {
        $request = Http::withToken($this->key)->{mb_strtolower($method)}($this->uri . $uri, $data);

        if (!$request->successful()) {
            throw new Exception('Movie api is not available.');
        }

        return $request->json();
    }
}
