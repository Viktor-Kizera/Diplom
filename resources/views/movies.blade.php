@extends('parts.layout')

@section('content')

    <section class="all__filml">
        <h2 class="bd-48">Фільми</h2>
        <div class="container">
            <div class="tittle__advanced__wrapper">
                <div class="title__advance">
                    <h4 class="bd-20">Розширений пошук</h4>
                </div>
            </div>
            <div class="advance__search">
                <form action="/movies" method="GET" class="advance__content">
                    <div class="first__block">
                        <div class="left__block">
                            <img src="../images/img__camera.svg">
                        </div>
                        <div class="right__block">
                            <div>
                                <div class="block__up">
                                    <div class="block__up-item">
                                        <span class="mm-14">Рік</span>
                                        <select name="year">
                                            <option value="" @if(!isset($_GET['year'])) selected @endif>Не вибрано</option>
                                            <option value="2024" @if(isset($_GET['year']) && $_GET['year'] === '2024') selected @endif>2024</option>
                                            <option value="2023" @if(isset($_GET['year']) && $_GET['year'] === '2023') selected @endif>2023</option>
                                            <option value="2022" @if(isset($_GET['year']) && $_GET['year'] === '2022') selected @endif>2022</option>
                                            <option value="2021" @if(isset($_GET['year']) && $_GET['year'] === '2021') selected @endif>2021</option>
                                            <option value="2020" @if(isset($_GET['year']) && $_GET['year'] === '2020') selected @endif>2020</option>
                                            <option value="2019" @if(isset($_GET['year']) && $_GET['year'] === '2019') selected @endif>2019</option>
                                            <option value="2018" @if(isset($_GET['year']) && $_GET['year'] === '2018') selected @endif>2018</option>
                                            <option value="2017" @if(isset($_GET['year']) && $_GET['year'] === '2017') selected @endif>2017</option>
                                            <option value="2016" @if(isset($_GET['year']) && $_GET['year'] === '2016') selected @endif>2016</option>
                                            <option value="2015" @if(isset($_GET['year']) && $_GET['year'] === '2015') selected @endif>2015</option>
                                            <option value="2014" @if(isset($_GET['year']) && $_GET['year'] === '2014') selected @endif>2014</option>
                                            <option value="2013" @if(isset($_GET['year']) && $_GET['year'] === '2013') selected @endif>2013</option>
                                            <option value="2012" @if(isset($_GET['year']) && $_GET['year'] === '2012') selected @endif>2012</option>
                                            <option value="2011" @if(isset($_GET['year']) && $_GET['year'] === '2011') selected @endif>2011</option>
                                            <option value="2010" @if(isset($_GET['year']) && $_GET['year'] === '2010') selected @endif>2010</option>
                                        </select>
                                    </div>
                                    <div class="block__up-item">
                                        <span class="mm-14">Країна</span>
                                        <select name="country" style="padding: 20px;">
                                            <option value="" @if(!isset($_GET['country'])) selected @endif>Не вибрано</option>
                                            @foreach ($countries as $country)
                                            <option value="{{ $country['iso_3166_1'] }}" @if(isset($_GET['country']) && $_GET['country'] == $country['iso_3166_1']) selected @endif>{{ $country['native_name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="block__up-item">
                                        <span class="mm-14">Актор</span>
                                        <select name="actor">
                                            <option value="" @if(!isset($_GET['actor'])) selected @endif>Не вибрано</option>
                                            @foreach ($actors as $actor)
                                            <option value="{{ $actor['id'] }}" @if(isset($_GET['actor']) && $_GET['actor'] == $actor['id']) selected @endif>{{ $actor['name'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="last__block">
                        <div class="nav__block">
                            <div class="nav__movie">
                                <div class="prev__arrow3" id="arrow-prev3">
                                    <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.228822 8.94757C-0.0762749 9.25267 -0.0762749 9.74733 0.228822 10.0524L8.04132 17.8649C8.34642 18.17 8.84108 18.17 9.14618 17.8649C9.45127 17.5598 9.45127 17.0652 9.14618 16.7601L1.8861 9.5L9.14618 2.23993C9.45127 1.93483 9.45127 1.44017 9.14618 1.13507C8.84108 0.829976 8.34642 0.829976 8.04132 1.13507L0.228822 8.94757Z" fill="#EBFAFF"/>
                                    </svg>
                                </div>
                                <ul class="nav3__slider__all">
                                    <?php $genresFilter = $_GET['genres'] ?? []; ?>
                                    @foreach ($genres as $genre)
                                    <li>
                                        <input value="{{$genre['id']}}" @if(in_array($genre['id'], $genresFilter)) checked @endif name="genres[]" type="checkbox" style="display: none;" id="cat{{$genre['id']}}">
                                            <button type="button" @if(in_array($genre['id'], $genresFilter)) class="selected" @endif>
                                                <label for="cat{{ $genre['id'] }}">
                                                    {{ $genre['name'] }}
                                                </label>
                                            </button>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="next__arrow3" id="arrow-next3">
                                    <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.228822 8.94757C-0.0762749 9.25267 -0.0762749 9.74733 0.228822 10.0524L8.04132 17.8649C8.34642 18.17 8.84108 18.17 9.14618 17.8649C9.45127 17.5598 9.45127 17.0652 9.14618 16.7601L1.8861 9.5L9.14618 2.23993C9.45127 1.93483 9.45127 1.44017 9.14618 1.13507C8.84108 0.829976 8.34642 0.829976 8.04132 1.13507L0.228822 8.94757Z" fill="#EBFAFF"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="search-btn">Шукати</button>
                </form>
            </div>
            <div class="block__all__movie-search">
                @foreach ($movies as $movie)
                <div class="item__movie">
                    <div class="add__button-movie">
                    </div>
                    <a href="/movie/{{$movie['id']}}">
                        <img src="https://image.tmdb.org/t/p/original{{$movie['poster_path']}}" alt="Napoleon">
                    </a>
                </div>
                @endforeach
            </div>

            <div class="pagination">
                @php
                    $url = request()->fullUrl(); // Получаем текущий URL
                    $separator = (parse_url($url, PHP_URL_QUERY) == null) ? '?' : '&'; // Определяем разделитель
                @endphp

                @if($page > 1)
                    @if(strpos($url, 'page=') !== false)
                        <button onclick="window.location.href = '{{ $url }}&page={{ $page - 1 }}'">< Попередня сторінка</button>
                    @else
                        <button onclick="window.location.href = '{{ $url }}{{ $separator }}page={{ $page - 1 }}'">< Попередня сторінка</button>
                    @endif
                @endif
                @if($total_pages > $page)
                    <button onclick="window.location.href = '{{ $url }}{{ $separator }}page={{ $page + 1 }}'">Наступна сторінка ></button>
                @endif
            </div>

        </div>
    </section>

@endsection

<style>
    .pagination {
        display: flex;
        grid-gap: 20px;
        margin-top: 60px;
        justify-content: center;
    }
    .pagination button {
        padding: 15px 40px;
        color: #fff;
        background: #228EE5;
        transition: 0.2s;
        border-radius: 10px;
        font-size: 18px;
        cursor: pointer;
    }
    .pagination button:hover {
        opacity: 0.8;
    }
</style>
