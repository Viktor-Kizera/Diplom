@extends('parts/layout')

@section('content')
    <div class="first__pageSlider slider_all">
        <div class="first__section first__section1">
            @if(isset($popular[0]))
                <img class="bg__FS bg__FS4" src="https://image.tmdb.org/t/p/original{{$popular[0]['backdrop_path']}}" />
            @endif
            <div class="container">
                <div class="content__firstS__all">
                    <div class="content__firstS" id="left">
                        <div class="info__content">
                            @if(isset($popular[0]))
                            <h2 class="bd-48">{{ $popular[0]['title'] }}</h2>
                            @endif

                            @if(isset($popular[0]))
                            <p class="mm-16">
                                {{ $popular[0]['overview'] }}
                            </p>
                            @endif
                            <div class="info__rating__block">
                                <div class="stars__block">
                                        @if ($popular[0]['vote_average'] >= 1)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                        @endif
                                        @if ($popular[0]['vote_average'] >= 2)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[0]['vote_average'] >= 3)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[0]['vote_average'] >= 4)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[0]['vote_average'] >= 5)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                            @if ($popular[0]['vote_average'] >= 6)
                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                                </svg>
                                            @endif
                                            @if ($popular[0]['vote_average'] >= 7)
                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                                </svg>
                                            @endif
                                            @if ($popular[0]['vote_average'] >= 8)
                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                                </svg>
                                            @endif
                                            @if ($popular[0]['vote_average'] >= 9)
                                                <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                                </svg>
                                            @endif
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"></path>
                                            </svg>
                                </div>
                                <div class="block__rating">
                                    <img src="../images/imbd.png" alt="IMDb">
                                    <span class="mm-16">{{ number_format($popular[0]['vote_average'], 1, ',') }}</span>
                                </div>
                                <div class="last__block__rating">
                                </div>
                            </div>
                            <div class="butoon__block">
                                <a class="watch__movie mm-16" href="/movie/{{ $popular[0]['id'] }}">
                                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.76838C0 0.817628 1.01933 0.214926 1.8524 0.673112L9.54612 4.90466C10.4096 5.37957 10.4096 6.62029 9.54612 7.0952L1.8524 11.3267C1.01933 11.7849 0 11.1822 0 10.2315V1.76838Z" fill="#EBFAFF"/>
                                    </svg>
                                    Дивитися зараз
                                </a>
                                <a class="more mm-16" href="/movie/{{ $popular[0]['id'] }}">
                                    Більше
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.00391 11.0039L13.0039 6.00391M13.0039 6.00391L8.00391 1.00391M13.0039 6.00391L1.00391 6.0039" stroke="#EBFAFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content__img-movie slider-nav" id="right">
                        @foreach ($popular as $key => $item)
                        @if ($key === 4) @break;
                        @endif
                        <div>
                            <img @if($key === 0) class="active" @else class="closes" @endif src="https://image.tmdb.org/t/p/original/{{ $item['poster_path'] }}" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="first__section first__section2">
            @if(isset($popular[1]))
                <img class="bg__FS bg__FS4" src="https://image.tmdb.org/t/p/original{{$popular[1]['backdrop_path']}}" />
            @endif
            <div class="container">
                <div class="content__firstS__all">
                    <div class="content__firstS" id="left">
                        <div class="info__content">
                            @if(isset($popular[1]))
                                <h2 class="bd-48">{{ $popular[1]['title'] }}</h2>
                            @endif

                            @if(isset($popular[1]))
                                <p class="mm-16">
                                    {{ $popular[1]['overview'] }}
                                </p>
                            @endif
                            <div class="info__rating__block">
                                <div class="stars__block">
                                    @if ($popular[1]['vote_average'] >= 0)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[1]['vote_average'] >= 1)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[1]['vote_average'] >= 2)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[1]['vote_average'] >= 3)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[1]['vote_average'] >= 4)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[1]['vote_average'] >= 5)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                    @endif
                                    @if ($popular[1]['vote_average'] >= 6)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[1]['vote_average'] >= 7)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                    @endif
                                    @if ($popular[1]['vote_average'] >= 8)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                    @endif
                                        @if ($popular[1]['vote_average'] >= 9)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"></path>
                                    </svg>
                                </div>

                                <div class="block__rating">
                                    <img src="../images/imbd.png" alt="IMDb">
                                    <span class="mm-16">8.8</span>
                                </div>
                                <div class="last__block__rating">
                                </div>
                            </div>
                            <div class="butoon__block">
                                <a class="watch__movie mm-16" href="/movie/{{ $popular[1]['id'] }}">
                                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.76838C0 0.817628 1.01933 0.214926 1.8524 0.673112L9.54612 4.90466C10.4096 5.37957 10.4096 6.62029 9.54612 7.0952L1.8524 11.3267C1.01933 11.7849 0 11.1822 0 10.2315V1.76838Z" fill="#EBFAFF"/>
                                    </svg>
                                    Дивитися зараз
                                </a>
                                <a class="more mm-16" href="/movie/{{ $popular[1]['id'] }}">
                                    Більше
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.00391 11.0039L13.0039 6.00391M13.0039 6.00391L8.00391 1.00391M13.0039 6.00391L1.00391 6.0039" stroke="#EBFAFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content__img-movie slider-nav" id="right">
                        @foreach ($popular as $key => $item)
                            @if ($key === 4) @break;
                            @endif
                            <div>
                                <img @if($key === 1) class="active" @else class="closes" @endif src="https://image.tmdb.org/t/p/original/{{ $item['poster_path'] }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="first__section first__section3">
            @if(isset($popular[2]))
                <img class="bg__FS bg__FS4" src="https://image.tmdb.org/t/p/original{{$popular[2]['backdrop_path']}}" />
            @endif
            <div class="container">
                <div class="content__firstS__all">
                    <div class="content__firstS" id="left">
                        <div class="info__content">
                            @if(isset($popular[2]))
                                <h2 class="bd-48">{{ $popular[2]['title'] }}</h2>
                            @endif

                            @if(isset($popular[2]))
                                <p class="mm-16">
                                    {{ $popular[2]['overview'] }}
                                </p>
                            @endif <div class="info__rating__block">
                                    <div class="stars__block">
                                        @if ($popular[2]['vote_average'] >= 0)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[2]['vote_average'] >= 1)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[2]['vote_average'] >= 2)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[2]['vote_average'] >= 3)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[2]['vote_average'] >= 4)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[2]['vote_average'] >= 5)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[2]['vote_average'] >= 6)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[2]['vote_average'] >= 7)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[2]['vote_average'] >= 8)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        @if ($popular[2]['vote_average'] >= 9)
                                            <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                            </svg>
                                        @endif
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"></path>
                                        </svg>
                                    </div>

                                <div class="block__rating">
                                    <img src="../images/imbd.png" alt="IMDb">
                                    <span class="mm-16">8.6</span>
                                </div>
                                <div class="last__block__rating">
                                </div>
                            </div>
                            <div class="butoon__block">
                                <a class="watch__movie mm-16" href="/movie/{{ $popular[2]['id'] }}">
                                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.76838C0 0.817628 1.01933 0.214926 1.8524 0.673112L9.54612 4.90466C10.4096 5.37957 10.4096 6.62029 9.54612 7.0952L1.8524 11.3267C1.01933 11.7849 0 11.1822 0 10.2315V1.76838Z" fill="#EBFAFF"/>
                                    </svg>
                                    Дивитися зараз
                                </a>
                                <a class="more mm-16" href="/movie/{{ $popular[2]['id'] }}">
                                    Більше
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.00391 11.0039L13.0039 6.00391M13.0039 6.00391L8.00391 1.00391M13.0039 6.00391L1.00391 6.0039" stroke="#EBFAFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content__img-movie slider-nav" id="right">
                        @foreach ($popular as $key => $item)
                            @if ($key === 4) @break;
                            @endif
                            <div>
                                <img @if($key === 2) class="active" @else class="closes" @endif src="https://image.tmdb.org/t/p/original/{{ $item['poster_path'] }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

        <div class="first__section first__section4">
            @if(isset($popular[3]))
                <img class="bg__FS bg__FS4" src="https://image.tmdb.org/t/p/original{{$popular[3]['backdrop_path']}}" />
            @endif
            <div class="container">
                <div class="content__firstS__all">
                    <div class="content__firstS" id="left">
                        <div class="info__content">
                            @if(isset($popular[3]))
                                <h2 class="bd-48">{{ $popular[3]['title'] }}</h2>
                            @endif

                            @if(isset($popular[3]))
                                <p class="mm-16">
                                    {{ $popular[3]['overview'] }}
                                </p>
                            @endif
                            <div class="info__rating__block">
                                <div class="stars__block">
                                    @if ($popular[3]['vote_average'] >= 0)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[3]['vote_average'] >= 1)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[3]['vote_average'] >= 2)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[3]['vote_average'] >= 3)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[3]['vote_average'] >= 4)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[3]['vote_average'] >= 5)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[3]['vote_average'] >= 6)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[3]['vote_average'] >= 7)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[3]['vote_average'] >= 8)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    @if ($popular[3]['vote_average'] >= 9)
                                        <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"/>
                                        </svg>
                                    @endif
                                    <svg width="18" height="16" viewBox="0 0 18 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99044 0.67567C8.36406 -0.222619 9.63658 -0.222619 10.0102 0.67567L11.7452 4.8471L16.2486 5.20813C17.2184 5.28588 17.6116 6.49612 16.8727 7.12904L13.4416 10.0682L14.4899 14.4627C14.7156 15.4091 13.6861 16.157 12.8559 15.6499L9.00032 13.295L5.14477 15.6499C4.31451 16.157 3.28501 15.4091 3.51075 14.4627L4.55901 10.0682L1.12789 7.12904C0.389025 6.49612 0.782253 5.28588 1.75203 5.20813L6.25544 4.8471L7.99044 0.67567Z" fill="#E5DB22" fill-opacity="0.84"></path>
                                    </svg>
                                </div>

                                <div class="block__rating">
                                    <img src="../images/imbd.png" alt="IMDb">
                                    <span class="mm-16">8.4</span>
                                </div>
                                <div class="last__block__rating">
                                </div>
                            </div>
                            <div class="butoon__block">
                                <a class="watch__movie mm-16" href="/movie/{{ $popular[3]['id'] }}">
                                    <svg width="11" height="12" viewBox="0 0 11 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0 1.76838C0 0.817628 1.01933 0.214926 1.8524 0.673112L9.54612 4.90466C10.4096 5.37957 10.4096 6.62029 9.54612 7.0952L1.8524 11.3267C1.01933 11.7849 0 11.1822 0 10.2315V1.76838Z" fill="#EBFAFF"/>
                                    </svg>
                                    Дивитися зараз
                                </a>
                                <a class="more mm-16" href="/movie/{{ $popular[3]['id'] }}">
                                    Більше
                                    <svg width="14" height="12" viewBox="0 0 14 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.00391 11.0039L13.0039 6.00391M13.0039 6.00391L8.00391 1.00391M13.0039 6.00391L1.00391 6.0039" stroke="#EBFAFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="content__img-movie slider-nav" id="right">
                        @foreach ($popular as $key => $item)
                            @if ($key === 4) @break;
                            @endif
                            <div>
                                <img @if($key === 3) class="active" @else class="closes" @endif src="https://image.tmdb.org/t/p/original/{{ $item['poster_path'] }}" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="movie__galery">
        <div class="container">
            <div class="title-and-button">
                <h4 class="bd-48">
                    Дивляться зараз
                </h4>
                <div class="title-and-button-button__block">
                    <a href="/movies" class="bd-blue-24">
                        Більше
                    </a>
                    <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5282 20.1339L22.1644 12.5054M22.1644 12.5054L14.5359 4.86917M22.1644 12.5054L3.84673 12.4961" stroke="#228EE5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="all__movie__slider">
                @foreach ($playingNow as $item)
                <div class="item__movie">
                    <div class="add__button-movie">
                        <!-- <div class="plus">
                            <span id="s1"></span>
                            <span id="s2"></span>
                        </div> -->
                    </div>
                    <a href="#">
                        <img src="https://image.tmdb.org/t/p/original{{ $item['poster_path'] }}" alt="Napoleon">
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="movie__galery">
        <div class="container">
            <div class="title-and-button">
                <h4 class="bd-48">
                    Жанри
                </h4>

            </div>
            <div class="nav__movie">
                <div class="prev__arrow" id="arrow-prev">
                    <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.228822 8.94757C-0.0762749 9.25267 -0.0762749 9.74733 0.228822 10.0524L8.04132 17.8649C8.34642 18.17 8.84108 18.17 9.14618 17.8649C9.45127 17.5598 9.45127 17.0652 9.14618 16.7601L1.8861 9.5L9.14618 2.23993C9.45127 1.93483 9.45127 1.44017 9.14618 1.13507C8.84108 0.829976 8.34642 0.829976 8.04132 1.13507L0.228822 8.94757Z" fill="#EBFAFF"/>
                    </svg>
                </div>
                <ul class="nav__slider__all">
                    @foreach ($genres as $genre)
                        <li>
                            <button onclick="window.location.href = '/movies/?genres[]={{$genre['id']}}&page=1'">{{ $genre['name'] }}</button>
                        </li>
                    @endforeach
                </ul>
                <div class="next__arrow" id="arrow-next">
                    <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.228822 8.94757C-0.0762749 9.25267 -0.0762749 9.74733 0.228822 10.0524L8.04132 17.8649C8.34642 18.17 8.84108 18.17 9.14618 17.8649C9.45127 17.5598 9.45127 17.0652 9.14618 16.7601L1.8861 9.5L9.14618 2.23993C9.45127 1.93483 9.45127 1.44017 9.14618 1.13507C8.84108 0.829976 8.34642 0.829976 8.04132 1.13507L0.228822 8.94757Z" fill="#EBFAFF"/>
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <section class="fourth__section">
        <div class="container">
            <div class="content__all">
                <div class="bg__img">
                    <img src="/images/golden_global_awards.png" alt="Golden Global Awards">
                    <img src="/images/poster_gold_section.png" alt="Poster Movie">
                </div>
                <div class="block__button__gold">
                    <a class="bd-48" href="#">Golden globe Awards</a>
                </div>
            </div>
        </div>
    </section>
    <section class="movie__galery">
        <div class="container">
            <div class="title-and-button">
                <h4 class="bd-48">
                    Серіали
                </h4>
                <div class="title-and-button-button__block">
                    <a href="#" class="bd-blue-24">
                        Більше
                    </a>
                    <svg width="26" height="25" viewBox="0 0 26 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.5282 20.1339L22.1644 12.5054M22.1644 12.5054L14.5359 4.86917M22.1644 12.5054L3.84673 12.4961" stroke="#228EE5" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
            </div>
            <div class="nav__movie">
                <div class="prev__arrow2" id="arrow-prev2">
                    <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.228822 8.94757C-0.0762749 9.25267 -0.0762749 9.74733 0.228822 10.0524L8.04132 17.8649C8.34642 18.17 8.84108 18.17 9.14618 17.8649C9.45127 17.5598 9.45127 17.0652 9.14618 16.7601L1.8861 9.5L9.14618 2.23993C9.45127 1.93483 9.45127 1.44017 9.14618 1.13507C8.84108 0.829976 8.34642 0.829976 8.04132 1.13507L0.228822 8.94757Z" fill="#EBFAFF"/>
                    </svg>
                </div>
                <ul class="nav2__slider__all" id="slider_2">
                    <li>
                        <button>Драма</button>
                    </li>
                    <li>
                        <button>Бойовик</button>
                    </li>
                    <li>
                        <button>Пригоди</button>
                    </li>
                    <li>
                        <button>Романтина</button>
                    </li>
                    <li>
                        <button>Фантастика</button>
                    </li>
                    <li>
                        <button>Комедія</button>
                    </li>
                    <li>
                        <button>Мультфільми</button>
                    </li>
                    <li>
                        <button>Триллер</button>
                    </li>
                    <li>
                        <button>Жахи</button>
                    </li>
                    <li>
                        <button>Детектив</button>
                    </li>
                    <li>
                        <button>Аніме</a>
                    </li>
                    <li>
                        <button>Кримінал</button>
                    </li>
                    <li>
                        <button>Документальні</button>
                    </li>
                </ul>
                <div class="next__arrow2" id="arrow-next2">
                    <svg width="10" height="19" viewBox="0 0 10 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.228822 8.94757C-0.0762749 9.25267 -0.0762749 9.74733 0.228822 10.0524L8.04132 17.8649C8.34642 18.17 8.84108 18.17 9.14618 17.8649C9.45127 17.5598 9.45127 17.0652 9.14618 16.7601L1.8861 9.5L9.14618 2.23993C9.45127 1.93483 9.45127 1.44017 9.14618 1.13507C8.84108 0.829976 8.34642 0.829976 8.04132 1.13507L0.228822 8.94757Z" fill="#EBFAFF"/>
                    </svg>
                </div>
            </div>
            <div class="all__movie__slider">
                <div class="item__movie">
                    <div class="add__button-movie">
                        <!-- <div class="plus">
                            <span id="s1"></span>
                            <span id="s2"></span>
                        </div> -->
                    </div>
                    <a href="#">
                        <img src="/images/movie2.png" alt="Napoleon">
                    </a>
                </div>

                <div class="item__movie">
                    <div class="add__button-movie">
                        <!-- <div class="plus">
                            <span id="s1"></span>
                            <span id="s2"></span>
                        </div> -->
                    </div>
                    <a href="#">
                        <img src="/images/movie1.png" alt="Napoleon">
                    </a>
                </div>


                <div class="item__movie">
                    <div class="add__button-movie">
                        <!-- <div class="plus">
                            <span id="s1"></span>
                            <span id="s2"></span>
                        </div> -->
                    </div>
                    <a href="#">
                        <img src="/images/movie3.png" alt="Napoleon">
                    </a>
                </div>

                <div class="item__movie">
                    <div class="add__button-movie">
                        <!-- <div class="plus">
                            <span id="s1"></span>
                            <span id="s2"></span>
                        </div> -->
                    </div>
                    <a href="#">
                        <img src="/images/movie1.png" alt="Napoleon">
                    </a>
                </div>

                <div class="item__movie">
                    <div class="add__button-movie">
                        <!-- <div class="plus">
                            <span id="s1"></span>
                            <span id="s2"></span>
                        </div> -->
                    </div>
                    <a href="#">
                        <img src="/images/movie1.png" alt="Napoleon">
                    </a>
                </div>

                <div class="item__movie">
                    <div class="add__button-movie">
                        <!-- <div class="plus">
                            <span id="s1"></span>
                            <span id="s2"></span>
                        </div> -->
                    </div>
                    <a href="#">
                        <img src="/images/movie1.png" alt="Napoleon">
                    </a>
                </div>

                <div class="item__movie">
                    <div class="add__button-movie">
                        <!-- <div class="plus">
                            <span id="s1"></span>
                            <span id="s2"></span>
                        </div> -->
                    </div>
                    <a href="#">
                        <img src="/images/movie1.png" alt="Napoleon">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="tarif__section" id="block_tarif">
        <div class="container">
            <div class="content__tarif-all">
                <div class="first__card">
                    <div class="contant__FC">
                        <h5 class="bd-blue-36">Основна</h5>
                        <p class="mm-blue-24">3 місяці</p>
                        <h3 class="bd-blue-48">200 грн</h3>
                        <span class="lt-black-16">Скасувати в будь який час</span>
                        <span class="lt-black-16">Перегляд без реклами</span>
                        <a class="rg-16" href="#">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.24976 5V5.625H4.59382C3.79419 5.625 3.12361 6.2287 3.0399 7.02393L1.98727 17.0239C1.89016 17.9465 2.61352 18.75 3.54118 18.75H16.4585C17.3861 18.75 18.1095 17.9465 18.0124 17.0239L16.9597 7.02393C16.876 6.2287 16.2054 5.625 15.4058 5.625H13.7498V5C13.7498 2.92893 12.0708 1.25 9.99976 1.25C7.92869 1.25 6.24976 2.92893 6.24976 5ZM9.99976 2.5C8.61905 2.5 7.49976 3.61929 7.49976 5V5.625H12.4998V5C12.4998 3.61929 11.3805 2.5 9.99976 2.5ZM7.49976 9.375C7.49976 10.7557 8.61905 11.875 9.99976 11.875C11.3805 11.875 12.4998 10.7557 12.4998 9.375V8.75C12.4998 8.40482 12.7796 8.125 13.1248 8.125C13.4699 8.125 13.7498 8.40482 13.7498 8.75V9.375C13.7498 11.4461 12.0708 13.125 9.99976 13.125C7.92869 13.125 6.24976 11.4461 6.24976 9.375V8.75C6.24976 8.40482 6.52958 8.125 6.87476 8.125C7.21994 8.125 7.49976 8.40482 7.49976 8.75V9.375Z" fill="#EBFAFF"/>
                            </svg>
                            Купити
                        </a>
                    </div>
                    <figure></figure>
                </div>
                <div class="second__card">
                    <figure class="figure__custom1"></figure>
                    <figure class="figure__custom1_2"></figure>
                    <figure class="figure__custom2"></figure>
                    <figure class="figure__custom3"></figure>
                    <div class="contant__FC">
                        <h5 class="bd-36">Рекомендовано</h5>
                        <p class="mm-24">6 місяців</p>
                        <h3 class="bd-48">600 грн</h3>
                        <h4 class="bd-48">450 грн</h4>
                        <span class="lt-black-16">Скасувати в будь який час</span>
                        <span class="lt-black-16">Перегляд офлайн</span>
                        <a class="rg-blue-16" href="#">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.24976 5V5.625H4.59382C3.79419 5.625 3.12361 6.2287 3.0399 7.02393L1.98727 17.0239C1.89016 17.9465 2.61352 18.75 3.54118 18.75H16.4585C17.3861 18.75 18.1095 17.9465 18.0124 17.0239L16.9597 7.02393C16.876 6.2287 16.2054 5.625 15.4058 5.625H13.7498V5C13.7498 2.92893 12.0708 1.25 9.99976 1.25C7.92869 1.25 6.24976 2.92893 6.24976 5ZM9.99976 2.5C8.61905 2.5 7.49976 3.61929 7.49976 5V5.625H12.4998V5C12.4998 3.61929 11.3805 2.5 9.99976 2.5ZM7.49976 9.375C7.49976 10.7557 8.61905 11.875 9.99976 11.875C11.3805 11.875 12.4998 10.7557 12.4998 9.375V8.75C12.4998 8.40482 12.7796 8.125 13.1248 8.125C13.4699 8.125 13.7498 8.40482 13.7498 8.75V9.375C13.7498 11.4461 12.0708 13.125 9.99976 13.125C7.92869 13.125 6.24976 11.4461 6.24976 9.375V8.75C6.24976 8.40482 6.52958 8.125 6.87476 8.125C7.21994 8.125 7.49976 8.40482 7.49976 8.75V9.375Z" fill="#228EE5"/>
                            </svg>
                            Купити
                        </a>
                    </div>
                    <figure class="figure"></figure>
                    <figure class="figure__custom4"></figure>
                    <figure class="figure__custom4_2"></figure>
                    <figure class="figure__custom5"></figure>
                    <figure class="figure__custom6"></figure>
                </div>
                <div class="third__card">
                    <div class="contant__FC">
                        <h5 class="bd-blue-36">Преміум</h5>
                        <p class="mm-blue-24">1 рік</p>
                        <h3 class="bd-blue-48">1000 грн</h3>
                        <span class="lt-black-16">Скасувати в будь який час</span>
                        <span class="lt-black-16">Перегляд офлайн</span>
                        <a class="rg-16" href="#">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.24976 5V5.625H4.59382C3.79419 5.625 3.12361 6.2287 3.0399 7.02393L1.98727 17.0239C1.89016 17.9465 2.61352 18.75 3.54118 18.75H16.4585C17.3861 18.75 18.1095 17.9465 18.0124 17.0239L16.9597 7.02393C16.876 6.2287 16.2054 5.625 15.4058 5.625H13.7498V5C13.7498 2.92893 12.0708 1.25 9.99976 1.25C7.92869 1.25 6.24976 2.92893 6.24976 5ZM9.99976 2.5C8.61905 2.5 7.49976 3.61929 7.49976 5V5.625H12.4998V5C12.4998 3.61929 11.3805 2.5 9.99976 2.5ZM7.49976 9.375C7.49976 10.7557 8.61905 11.875 9.99976 11.875C11.3805 11.875 12.4998 10.7557 12.4998 9.375V8.75C12.4998 8.40482 12.7796 8.125 13.1248 8.125C13.4699 8.125 13.7498 8.40482 13.7498 8.75V9.375C13.7498 11.4461 12.0708 13.125 9.99976 13.125C7.92869 13.125 6.24976 11.4461 6.24976 9.375V8.75C6.24976 8.40482 6.52958 8.125 6.87476 8.125C7.21994 8.125 7.49976 8.40482 7.49976 8.75V9.375Z" fill="#EBFAFF"/>
                            </svg>
                            Купити
                        </a>
                    </div>
                    <figure></figure>
                </div>
            </div>
        </div>
    </section>
    <section class="undercuts undercuts-index">
        <div class="container">
            <div class="title-and-button-checked">
                <h4 class="bd-48">
                    Підбірки
                </h4>
                <div class="block__button">
                    <button class="b2 active">Фільми</button>
                </div>
            </div>
            <div class="undercuts_S_all1 disabled">
                <div class="undercuts__all__Slider">
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">Мюзикли</a>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                    </div>
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">Marvel</a>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                    </div>
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">DC</a>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                    </div>
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">Джон Уік</a>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                    </div>
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">Годзіла</a>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                    </div>
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">Insidious</a>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                    </div>
                </div>
            </div>
            <div class="undercuts_S_all2 active">
                <div class="undercuts__all__Slider">
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">Мюзикли</a>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                    </div>
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">Marvel</a>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                    </div>
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">DC</a>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                    </div>
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">Джон Уік</a>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                    </div>
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">Годзіла</a>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                    </div>
                    <div class="undercuts__card">
                        <img class="opacity__img" src="/images/undercuts__card1.png">
                        <a href="#" class="bck-48">Insidious</a>
                        <div><img class="img" src="/images/undercuts__card3.png"></div>
                        <div><img class="img" src="/images/undercuts__card1.png"></div>
                        <div><img class="img" src="/images/undercuts__card2.png"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="acteurs__and__regisseurs">
        <div class="container">
            <div class="title-and-button-checked">
                <h4 class="bd-48">
                    Актори
                </h4>
                <div class="block__button">
                    <button class="b4 active">Актори</button>
                </div>
            </div>
            <div class="acteurs_S_all1 disabled">
                <div class="acteurs__all__Slider">
                    @foreach ($actors as $actor)
                        <img src="https://image.tmdb.org/t/p/original{{ $actor['profile_path'] }}">
                    @endforeach
                </div>
            </div>
            <div class="acteurs_S_all2 active">
                <div class="acteurs__all__Slider">
                    @foreach (array_reverse($actors) as $actor)
                        <img src="https://image.tmdb.org/t/p/original{{ $actor['profile_path'] }}">
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <section class="family__section">
        <div class="container">
            <div class="family__section-content">
                <div class="text__block">
                    <h3 class="bd-48">Сімейний стрімінговий сервіс</h3>
                    <p class="bd-24">переглядайте безпечний контент, створені підбірки для дітей різного віку</p>
                </div>
                <div class="block__img">
                    <img src="/images/family1.png">
                    <img src="/images/family2.png">
                    <img src="/images/family3.png">
                </div>
                <div class="block__btn">
                    <a class="bd-24" href="/for-child">Дивитися дітям</a>
                </div>
            </div>
        </div>
    </section>
    <section class="movie__company">
        <div class="container">
            <div class="movie__company-content">
                <h3 class="bd-48">Переглядайте контент з улюбених студій</h3>
                <div class="company__all">
                    <div class="company">
                        <a href="#">
                            <img src="/images/company1.png">
                        </a>
                    </div>
                    <div class="company">
                        <a href="#">
                            <img src="/images/company2.png">
                        </a>
                    </div>
                    <div class="company">
                        <a href="#">
                            <img src="/images/company3.png">
                        </a>
                    </div>
                    <div class="company">
                        <a href="#">
                            <img src="/images/company4.png">
                        </a>
                    </div>
                    <div class="company">
                        <a href="#">
                            <img src="/images/company5.png">
                        </a>
                    </div>
                    <div class="company">
                        <a href="#">
                            <img src="/images/company6.png">
                        </a>
                    </div>
                    <div class="company">
                        <a href="#">
                            <img src="/images/company7.png">
                        </a>
                    </div>
                    <div class="company">
                        <a href="#">
                            <img src="/images/company8.png">
                        </a>
                    </div>
                    <div class="company">
                        <a href="#">
                            <img src="/images/company9.png">
                        </a>
                    </div>
                    <div class="company">
                        <a href="#">
                            <img src="/images/company10.png">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="footer" id="footer">

@endsection
