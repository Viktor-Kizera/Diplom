<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie | MoviMag</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/movie.css">
    <link rel="shortcut icon" href="/images/logo.svg" type="image/x-icon">
    <link rel="stylesheet" href="../slick/slick-theme.css">
    <link rel="stylesheet" href="../slick/slick.css">
    <link rel="stylesheet" href="../css/cartoon.css">

    <link rel="stylesheet" href="../css/page-movie-and-series.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
<main class="wrapper wrapper-movie">
    <div class="container">
        <header class="header" id="header">
            <nav class="navigation">
                <div class="nav__content">
                    <div class="nav__left">
                        <a href="/" class="logotipe">
                            <svg width="45" height="50" viewBox="0 0 45 50" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <rect width="45" height="50" fill="url(#pattern0)"/>
                                <defs>
                                    <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                                        <use xlink:href="#image0_14_6086" transform="matrix(0.00549582 0 0 0.00494624 -0.633453 -0.42)"/>
                                    </pattern>
                                    <image id="image0_14_6086" width="368" height="372" xlink:href="data:image/png;base64,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"/>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <div class="nav__center">
                        <ul>
                            <li>
                                <a class="mm-24" href="/">Головна</a>
                            </li>
                            <li>
                                <a class="mm-24" href="#block_tarif">Підписка</a>
                            </li>
                            <li>
                                <a class="mm-24" href="/movies">Фільми</a>
                            </li>
                            <li>
                                <a class="mm-24" href="#">Серіали</a>
                            </li>
                            <li>
                                <a class="mm-24" href="/collections">Підбірки</a>
                            </li>
                            <li>
                                <a class="mm-24" href="#footer">Запитання</a>
                            </li>
                        </ul>
                    </div>
                    <div class="nav__right">
                        <div class="block__icons">
                            <ul>
                                <li>
                                    <a href="/movies">
                                        <svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M25 25L18.0711 18.0711M18.0711 18.0711C19.8807 16.2614 21 13.7614 21 11C21 5.47715 16.5228 1 11 1C5.47715 1 1 5.47715 1 11C1 16.5228 5.47715 21 11 21C13.7614 21 16.2614 19.8807 18.0711 18.0711Z" stroke="#EBFAFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_14_6069)">
                                                <path d="M16 32C18.2075 32 19.9982 30.2094 19.9982 28H12.0019C12.0019 30.2094 13.7925 32 16 32ZM29.4619 22.6431C28.2544 21.3456 25.995 19.3937 25.995 13C25.995 8.14375 22.59 4.25625 17.9988 3.3025V2C17.9988 0.895625 17.1038 0 16 0C14.8963 0 14.0013 0.895625 14.0013 2V3.3025C9.41004 4.25625 6.00504 8.14375 6.00504 13C6.00504 19.3937 3.74567 21.3456 2.53817 22.6431C2.16317 23.0463 1.99692 23.5281 2.00004 24C2.00692 25.025 2.81129 26 4.00629 26H27.9938C29.1888 26 29.9938 25.025 30 24C30.0032 23.5281 29.8369 23.0456 29.4619 22.6431Z" fill="#EBFAFF"/>
                                                <circle cx="26.6668" cy="25.3333" r="5.33333" fill="#E5228D"/>
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_14_6069">
                                                    <rect width="32" height="32" fill="white"/>
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    @if (\Illuminate\Support\Facades\Auth::check())
                                        <a href="/home">
                                            <svg width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.99995 6C4.99995 2.68629 7.68624 0 11 0C14.3137 0 17 2.68629 17 6C17 9.31371 14.3137 12 11 12C7.68624 12 4.99995 9.31371 4.99995 6Z" fill="#EBFAFF"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00161409 24.8071C0.104734 18.8208 4.98927 14 11 14C17.0108 14 21.8954 18.821 21.9983 24.8075C22.0051 25.2046 21.7764 25.568 21.4155 25.7336C18.2436 27.1891 14.7153 28 11.0004 28C7.2851 28 3.75653 27.1889 0.584382 25.7332C0.223488 25.5676 -0.00522501 25.2041 0.00161409 24.8071Z" fill="#EBFAFF"/>
                                            </svg>
                                        </a>
                                    @else
                                        <a href="/authorization">
                                            <svg width="22" height="28" viewBox="0 0 22 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4.99995 6C4.99995 2.68629 7.68624 0 11 0C14.3137 0 17 2.68629 17 6C17 9.31371 14.3137 12 11 12C7.68624 12 4.99995 9.31371 4.99995 6Z" fill="#EBFAFF"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.00161409 24.8071C0.104734 18.8208 4.98927 14 11 14C17.0108 14 21.8954 18.821 21.9983 24.8075C22.0051 25.2046 21.7764 25.568 21.4155 25.7336C18.2436 27.1891 14.7153 28 11.0004 28C7.2851 28 3.75653 27.1889 0.584382 25.7332C0.223488 25.5676 -0.00522501 25.2041 0.00161409 24.8071Z" fill="#EBFAFF"/>
                                            </svg>
                                        </a>
                                    @endif
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
    </div>
@yield('content')

    <footer class="footer" id="footer">
        <div class="container">
            <div class="footer__content">
                <nav class="footer__nav">
                    <div class="first__block-nav">
                        <div class="item__nav">
                            <a class="bd-24" href="#">
                                Допомога
                            </a>
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.28033 8.46967C9.57323 8.76256 9.57323 9.23744 9.28033 9.53033L1.78033 17.0303C1.48744 17.3232 1.01256 17.3232 0.71967 17.0303C0.426777 16.7374 0.426777 16.2626 0.71967 15.9697L7.68934 9L0.719671 2.03033C0.426777 1.73744 0.426777 1.26256 0.719671 0.96967C1.01256 0.676777 1.48744 0.676777 1.78033 0.96967L9.28033 8.46967Z" fill="#C4CED1"/>
                            </svg>
                        </div>
                        <div class="item__nav">
                            <a class="bd-24" href="#">
                                Карта сайту
                            </a>
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.28033 8.46967C9.57323 8.76256 9.57323 9.23744 9.28033 9.53033L1.78033 17.0303C1.48744 17.3232 1.01256 17.3232 0.71967 17.0303C0.426777 16.7374 0.426777 16.2626 0.71967 15.9697L7.68934 9L0.719671 2.03033C0.426777 1.73744 0.426777 1.26256 0.719671 0.96967C1.01256 0.676777 1.48744 0.676777 1.78033 0.96967L9.28033 8.46967Z" fill="#C4CED1"/>
                            </svg>
                        </div>
                        <div class="item__nav">
                            <a class="bd-24" href="#">
                                Додаткові відомості
                            </a>
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.28033 8.46967C9.57323 8.76256 9.57323 9.23744 9.28033 9.53033L1.78033 17.0303C1.48744 17.3232 1.01256 17.3232 0.71967 17.0303C0.426777 16.7374 0.426777 16.2626 0.71967 15.9697L7.68934 9L0.719671 2.03033C0.426777 1.73744 0.426777 1.26256 0.719671 0.96967C1.01256 0.676777 1.48744 0.676777 1.78033 0.96967L9.28033 8.46967Z" fill="#C4CED1"/>
                            </svg>
                        </div>
                        <div class="item__nav">
                            <a class="bd-24" href="#">
                                Реклама
                            </a>
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.28033 8.46967C9.57323 8.76256 9.57323 9.23744 9.28033 9.53033L1.78033 17.0303C1.48744 17.3232 1.01256 17.3232 0.71967 17.0303C0.426777 16.7374 0.426777 16.2626 0.71967 15.9697L7.68934 9L0.719671 2.03033C0.426777 1.73744 0.426777 1.26256 0.719671 0.96967C1.01256 0.676777 1.48744 0.676777 1.78033 0.96967L9.28033 8.46967Z" fill="#C4CED1"/>
                            </svg>
                        </div>
                    </div>
                    <div class="second__block-nav">
                        <div class="item__nav">
                            <a class="bd-24" href="#">
                                Підтримка
                            </a>
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.28033 8.46967C9.57323 8.76256 9.57323 9.23744 9.28033 9.53033L1.78033 17.0303C1.48744 17.3232 1.01256 17.3232 0.71967 17.0303C0.426777 16.7374 0.426777 16.2626 0.71967 15.9697L7.68934 9L0.719671 2.03033C0.426777 1.73744 0.426777 1.26256 0.719671 0.96967C1.01256 0.676777 1.48744 0.676777 1.78033 0.96967L9.28033 8.46967Z" fill="#C4CED1"/>
                            </svg>
                        </div>
                        <div class="item__nav">
                            <a class="bd-24" href="#">
                                Вакансії
                            </a>
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.28033 8.46967C9.57323 8.76256 9.57323 9.23744 9.28033 9.53033L1.78033 17.0303C1.48744 17.3232 1.01256 17.3232 0.71967 17.0303C0.426777 16.7374 0.426777 16.2626 0.71967 15.9697L7.68934 9L0.719671 2.03033C0.426777 1.73744 0.426777 1.26256 0.719671 0.96967C1.01256 0.676777 1.48744 0.676777 1.78033 0.96967L9.28033 8.46967Z" fill="#C4CED1"/>
                            </svg>
                        </div>
                        <div class="item__nav">
                            <a class="bd-24" href="#">
                                Політика конфіденційності
                            </a>
                            <svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.28033 8.46967C9.57323 8.76256 9.57323 9.23744 9.28033 9.53033L1.78033 17.0303C1.48744 17.3232 1.01256 17.3232 0.71967 17.0303C0.426777 16.7374 0.426777 16.2626 0.71967 15.9697L7.68934 9L0.719671 2.03033C0.426777 1.73744 0.426777 1.26256 0.719671 0.96967C1.01256 0.676777 1.48744 0.676777 1.78033 0.96967L9.28033 8.46967Z" fill="#C4CED1"/>
                            </svg>
                        </div>
                    </div>
                </nav>
                <div class="icons__footer">
                    <div class="item__icon">
                        <a href="#" target="_blank">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.48524 5.39026C0.359375 7.55764 0.359375 10.4051 0.359375 16.1V31.9C0.359375 37.5949 0.359375 40.4424 1.48524 42.6097C2.434 44.4362 3.9232 45.9254 5.74963 46.8741C7.91701 48 10.7645 48 16.4594 48H32.2594C37.9543 48 40.8017 48 42.9691 46.8741C44.7956 45.9254 46.2848 44.4362 47.2335 42.6097C48.3594 40.4424 48.3594 37.5949 48.3594 31.9V16.1C48.3594 10.4051 48.3594 7.55764 47.2335 5.39026C46.2848 3.56382 44.7956 2.07462 42.9691 1.12587C40.8017 0 37.9543 0 32.2594 0H16.4594C10.7645 0 7.91701 0 5.74963 1.12587C3.9232 2.07462 2.434 3.56382 1.48524 5.39026ZM34.7594 24L33.6927 30.6666H28.3594V48H20.3594V30.6666H14.3594V24H20.3594V18.6666C20.3594 12.6666 24.226 9.33331 29.6927 9.33331C31.426 9.33331 33.2927 9.59998 35.026 9.86665V16H31.9594C29.026 16 28.3594 17.4666 28.3594 19.3333V24H34.7594Z" fill="#EBFAFF"/>
                            </svg>
                        </a>
                    </div>
                    <div class="item__icon">
                        <a href="#" target="_blank">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_14_6206)">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M1.51258 5.39026C0.386719 7.55764 0.386719 10.4051 0.386719 16.1V31.9C0.386719 37.5949 0.386719 40.4424 1.51258 42.6097C2.46134 44.4362 3.95054 45.9254 5.77697 46.8741C7.94436 48 10.7918 48 16.4867 48H32.2867C37.9816 48 40.8291 48 42.9965 46.8741C44.8229 45.9254 46.3121 44.4362 47.2609 42.6097C48.3867 40.4424 48.3867 37.5949 48.3867 31.9V16.1C48.3867 10.4051 48.3867 7.55764 47.2609 5.39026C46.3121 3.56382 44.8229 2.07462 42.9965 1.12587C40.8291 0 37.9816 0 32.2867 0H16.4867C10.7918 0 7.94436 0 5.77697 1.12587C3.95054 2.07462 2.46134 3.56382 1.51258 5.39026ZM17.1632 6.65093C19.0249 6.5662 19.6198 6.54547 24.36 6.54547H24.3546C29.0963 6.54547 29.689 6.5662 31.5507 6.65093C33.4089 6.73602 34.6779 7.0302 35.7906 7.46183C36.9397 7.90729 37.9105 8.50365 38.8814 9.47456C39.8523 10.4447 40.4486 11.4186 40.8959 12.5666C41.325 13.6764 41.6195 14.9447 41.7068 16.8029C41.7904 18.6647 41.8122 19.2597 41.8122 24C41.8122 28.7404 41.7904 29.3338 41.7068 31.1957C41.6195 33.0531 41.325 34.3218 40.8959 35.432C40.4486 36.5797 39.8523 37.5535 38.8814 38.5237C37.9116 39.4946 36.9393 40.0924 35.7917 40.5382C34.6812 40.9698 33.4114 41.264 31.5533 41.3491C29.6915 41.4338 29.0984 41.4546 24.3579 41.4546C19.618 41.4546 19.0235 41.4338 17.1617 41.3491C15.304 41.264 14.0353 40.9698 12.9248 40.5382C11.7775 40.0924 10.8037 39.4946 9.83394 38.5237C8.86342 37.5535 8.26708 36.5797 7.82091 35.4317C7.38965 34.3218 7.09548 33.0535 7.01002 31.1953C6.92566 29.3335 6.90457 28.7404 6.90457 24C6.90457 19.2597 6.92639 18.6644 7.00966 16.8026C7.09329 14.9451 7.38783 13.6764 7.82054 12.5662C8.2678 11.4186 8.86415 10.4447 9.83503 9.47456C10.8052 8.50402 11.779 7.90765 12.9269 7.46183C14.0367 7.0302 15.305 6.73602 17.1632 6.65093ZM23.7783 9.69075C23.4254 9.6906 23.0983 9.69045 22.7943 9.69093V9.68656C19.5413 9.6902 18.9173 9.71202 17.3072 9.78474C15.6054 9.86293 14.6814 10.1466 14.0662 10.3866C13.2517 10.7037 12.6699 11.0818 12.059 11.6927C11.4481 12.3037 11.0692 12.8855 10.7528 13.7C10.5139 14.3153 10.2296 15.2389 10.1517 16.9407C10.0681 18.7807 10.0514 19.3306 10.0514 23.9917C10.0514 28.6527 10.0681 29.2055 10.1517 31.0455C10.2292 32.7473 10.5139 33.6709 10.7528 34.2855C11.0699 35.1004 11.4481 35.6807 12.059 36.2917C12.6699 36.9026 13.2517 37.2807 14.0662 37.5971C14.6818 37.836 15.6054 38.1204 17.3072 38.1989C19.1471 38.2826 19.6995 38.3007 24.36 38.3007C29.0203 38.3007 29.573 38.2826 31.4129 38.1989C33.1147 38.1211 34.039 37.8375 34.6535 37.5975C35.4684 37.2811 36.0484 36.9029 36.6593 36.292C37.2702 35.6815 37.6491 35.1015 37.9654 34.2869C38.2043 33.6724 38.4887 32.7487 38.5665 31.0469C38.6502 29.2069 38.6683 28.6542 38.6683 23.996C38.6683 19.3378 38.6502 18.7851 38.5665 16.9451C38.4891 15.2433 38.2043 14.3197 37.9654 13.7051C37.6484 12.8906 37.2702 12.3087 36.6593 11.6978C36.0488 11.0869 35.4681 10.7087 34.6535 10.3924C34.0383 10.1535 33.1147 9.86911 31.4129 9.79129C29.5726 9.70765 29.0203 9.69093 24.36 9.69093C24.1586 9.69093 23.9648 9.69084 23.7783 9.69075ZM31.5824 14.6829C31.5824 13.5262 32.5205 12.5891 33.6768 12.5891V12.5884C34.8332 12.5884 35.7713 13.5266 35.7713 14.6829C35.7713 15.8393 34.8332 16.7775 33.6768 16.7775C32.5205 16.7775 31.5824 15.8393 31.5824 14.6829ZM15.3967 24C15.3967 19.05 19.4098 15.0366 24.3597 15.0364C29.3097 15.0364 33.322 19.0498 33.322 24C33.322 28.9502 29.3101 32.9618 24.36 32.9618C19.41 32.9618 15.3967 28.9502 15.3967 24ZM30.178 24C30.178 20.7866 27.573 18.1818 24.36 18.1818C21.1467 18.1818 18.542 20.7866 18.542 24C18.542 27.2131 21.1467 29.8182 24.36 29.8182C27.573 29.8182 30.178 27.2131 30.178 24Z" fill="#EBFAFF"/>
                                </g>
                                <defs>
                                    <clipPath id="clip0_14_6206">
                                        <rect width="48" height="48" fill="white" transform="translate(0.359375)"/>
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                    </div>
                    <div class="item__icon">
                        <a href="#" target="_blank">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.48524 5.39026C0.359375 7.55764 0.359375 10.4051 0.359375 16.1V31.9C0.359375 37.5949 0.359375 40.4424 1.48524 42.6097C2.434 44.4362 3.9232 45.9254 5.74963 46.8741C7.91701 48 10.7645 48 16.4594 48H32.2594C37.9543 48 40.8017 48 42.9691 46.8741C44.7956 45.9254 46.2848 44.4362 47.2335 42.6097C48.3594 40.4424 48.3594 37.5949 48.3594 31.9V16.1C48.3594 10.4051 48.3594 7.55764 47.2335 5.39026C46.2848 3.56382 44.7956 2.07462 42.9691 1.12587C40.8017 0 37.9543 0 32.2594 0H16.4594C10.7645 0 7.91701 0 5.74963 1.12587C3.9232 2.07462 2.434 3.56382 1.48524 5.39026ZM11.1332 14.9066C13.4329 14.9066 15.2972 13.0423 15.2972 10.7426C15.2972 8.44289 13.4329 6.57861 11.1332 6.57861C8.83347 6.57861 6.96919 8.44289 6.96919 10.7426C6.96919 13.0423 8.83347 14.9066 11.1332 14.9066ZM19.1107 17.9839H26.0118V21.1453C26.0118 21.1453 27.8844 17.3999 32.9798 17.3999C37.5251 17.3999 41.2903 19.639 41.2903 26.464V40.856H34.1389V28.2079C34.1389 24.1818 31.9894 23.739 30.3515 23.739C26.9523 23.739 26.3704 26.671 26.3704 28.7331V40.856H19.1107V17.9839ZM14.763 17.9839H7.50333V40.856H14.763V17.9839Z" fill="#EBFAFF"/>
                            </svg>
                        </a>
                    </div>
                    <div class="item__icon">
                        <a href="#" target="_blank">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.48524 5.39026C0.359375 7.55764 0.359375 10.4051 0.359375 16.1V31.9C0.359375 37.5949 0.359375 40.4424 1.48524 42.6097C2.434 44.4362 3.9232 45.9254 5.74963 46.8741C7.91701 48 10.7645 48 16.4594 48H32.2594C37.9543 48 40.8017 48 42.9691 46.8741C44.7956 45.9254 46.2848 44.4362 47.2335 42.6097C48.3594 40.4424 48.3594 37.5949 48.3594 31.9V16.1C48.3594 10.4051 48.3594 7.55764 47.2335 5.39026C46.2848 3.56382 44.7956 2.07462 42.9691 1.12587C40.8017 0 37.9543 0 32.2594 0H16.4594C10.7645 0 7.91701 0 5.74963 1.12587C3.9232 2.07462 2.434 3.56382 1.48524 5.39026ZM41.6179 14.944C41.2027 13.402 39.9869 12.1862 38.4449 11.771C35.6278 11 24.3593 11 24.3593 11C24.3593 11 13.0908 11 10.2737 11.7413C8.76134 12.1565 7.51588 13.402 7.10072 14.944C6.35938 17.7611 6.35938 23.6029 6.35938 23.6029C6.35938 23.6029 6.35938 29.4744 7.10072 32.2619C7.51588 33.8039 8.73169 35.0197 10.2737 35.4348C13.1205 36.2058 24.3593 36.2058 24.3593 36.2058C24.3593 36.2058 35.6278 36.2058 38.4449 35.4645C39.9869 35.0493 41.2027 33.8335 41.6179 32.2915C42.3592 29.4744 42.3592 23.6326 42.3592 23.6326C42.3592 23.6326 42.3889 17.7611 41.6179 14.944ZM20.7711 28.794L30.1418 23.397L20.7711 18V28.794Z" fill="#EBFAFF"/>
                            </svg>
                        </a>
                    </div>
                    <div class="item__icon">
                        <a href="#" target="_blank">
                            <svg width="49" height="48" viewBox="0 0 49 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.48524 5.39026C0.359375 7.55764 0.359375 10.4051 0.359375 16.1V31.9C0.359375 37.5949 0.359375 40.4424 1.48524 42.6097C2.434 44.4362 3.9232 45.9254 5.74963 46.8741C7.91701 48 10.7645 48 16.4594 48H32.2594C37.9543 48 40.8017 48 42.9691 46.8741C44.7956 45.9254 46.2848 44.4362 47.2335 42.6097C48.3594 40.4424 48.3594 37.5949 48.3594 31.9V16.1C48.3594 10.4051 48.3594 7.55764 47.2335 5.39026C46.2848 3.56382 44.7956 2.07462 42.9691 1.12587C40.8017 0 37.9543 0 32.2594 0H16.4594C10.7645 0 7.91701 0 5.74963 1.12587C3.9232 2.07462 2.434 3.56382 1.48524 5.39026ZM8.11207 22.3721L37.0103 11.226C38.3302 10.6269 39.6041 11.5432 39.1003 13.5632L34.1791 36.7536C33.8356 38.4017 32.8395 38.796 31.4599 38.0349L23.963 32.4958L23.8215 32.6334C22.1184 34.2892 20.618 35.748 20.3596 36.0009L20.3319 36.028C19.9269 36.4239 19.5926 36.7508 18.8593 36.7508C18.0981 36.7508 18.0346 36.5256 17.8816 35.9832C17.8393 35.8332 17.7902 35.6589 17.7176 35.4584L14.9599 27.0036L7.75257 24.754C6.15142 24.2635 6.13972 23.1634 8.11207 22.3721ZM32.3363 16.2375L16.091 26.4868L18.8285 34.8794L19.3701 29.1026L33.2803 16.552C33.8909 16.0101 33.1473 15.7457 32.3363 16.2375Z" fill="#EBFAFF"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</main>
<script src="../js/jquery/jquery-3.7.1.min.js"></script>
<script src="../slick/slick.min.js"></script>
<script src="../js/main.js"></script>

</body>
</html>
