<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>{{ $seo->title }}</title>
    <meta name="description" content="{{ $seo->description }}" />
    <meta name="keywords" content="{{ $seo->keywords }}" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="{{ $seo->title }}" />
    <meta property="og:description" content="{{ $seo->description }}" />
    <meta property="og:url" content="http://animaljazz.com/" />
    <meta property="og:image" content="{{ asset('assets/band-photo-vk.jpg') }}" />
    <meta property="vk:image" content="{{ asset('assets/band-photo-vk.jpg') }}" />

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png" />
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />

    <meta name="google-site-verification" content="Ba7QtcC04kElBlZdu_JXpY1vJOw-J7WB4iX2XXravvs" />

    <!-- Билеты на 22.08.2020 -->
    <script type="text/javascript" src="https://ponominalu.ru/widget/static/js/pnwidget_loader.js" charset="UTF-8"></script>

</head>

<body class="justerest-modal mdc-typography">


<header class="header-section row no-gutters">
    <div class="header-section__container">
        <div class="header-section__main-photo placeholder" data-large="{{ asset('assets/AJ_2021.jpg') }}">
            <img src="{{ asset('assets/AJ_2021-sm.jpg') }}" border="0" alt="Animal ДжаZ" class="img-small" />
            <div style="padding-bottom: 40%;"></div>
        </div>
        <div class="header-section__logo">
            <img src="{{ asset('assets/az.svg') }}" border="0" alt="Animal ДжаZ logo" class="logo" />
        </div>

{{--        <div class="header-section__concerts">--}}
{{--            <div class="concerts-title">--}}
{{--                <div class="title-container">--}}
{{--                    <div class="time-to-love">--}}
{{--                        Весенние концерты--}}
{{--                        <div class="shadow"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="concert-item left">--}}
{{--                <div class="concert-item-container">--}}
{{--                    <div class="date">--}}
{{--                        19.03--}}
{{--                    </div>--}}
{{--                    <div class="date-sm">--}}
{{--                        19.03--}}
{{--                    </div>--}}
{{--                    <div class="place">--}}
{{--                        Москва<br />Главклуб--}}
{{--                    </div>--}}
{{--                    <a href="https://glavclub.com/animal-jazz" class="tickets" target="_blank">Билеты</a>--}}
{{--                                        <script>pnwidget.init({ affiliate: true, hideHeader: true, hideFooter: true, init: { session: '' },customStyle: true });</script> <img src="https://i.imgur.com/IbmGlss.png" width="300" class="tickets" style="cursor: pointer; padding: 0; background: none;" onclick="pnwidget.show({ init:{referral_auth: 'northernsound'}, event:{venue: 'gipsy', date:'22.08.2020', time: '19:00'}, tickets_show: true, exclude_dates: false, customStyle: true, hideHeader: false, closeButton: true})">--}}
{{--                </div>--}}
{{--                <a href="https://glavclub.com/animal-jazz" target="_blank" class="tickets-sm">Билеты</a>--}}
{{--                                <script>pnwidget.init({ affiliate: true, hideHeader: true, hideFooter: true, init: { session: '' },customStyle: true });</script> <img src="https://i.imgur.com/IbmGlss.png" width="300" class="tickets-sm" style="cursor: pointer; padding: 0; background: none;" onclick="pnwidget.show({ init:{referral_auth: 'northernsound'}, event:{venue: 'gipsy', date:'22.08.2020', time: '19:00'}, tickets_show: true, exclude_dates: false, customStyle: true, hideHeader: false, closeButton: true})">--}}
{{--            </div>--}}
{{--            <div class="space">--}}
{{--            </div>--}}
{{--            <div class="concert-item right">--}}
{{--                <div class="concert-item-container">--}}
{{--                    <div class="date">26.03</div>--}}
{{--                    <div class="date-sm">26.03</div>--}}
{{--                    <div class="place">--}}
{{--                        Питер<br />секретное место--}}
{{--                    </div>--}}
{{--                    <a href="http://spb.2021.animaljazz.com/" class="tickets" target="_blank">Билеты</a>--}}
{{--                </div>--}}
{{--                <a href="http://spb.2021.animaljazz.com/" class="tickets-sm" target="_blank">Билеты</a>--}}
{{--            </div>--}}
{{--        </div>--}}

        {{--<section class="header-section__top-links">--}}
        {{--<ul class="top-links__container">--}}
        {{--<li>--}}
        {{--<a class="top-link" target="_blank" href="https://vk.com/wall-2571_59421" role="listitem" title="Голосовать за песни">--}}
        {{--Выбрать песни для концертов по заявкам--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}
        {{--</section>--}}

    </div>
</header>


<nav class="nav row no-gutters">
    <div class="container">
        <div class="social-icons">
            <a class="social-icons__item vk" target="_blank" href="http://vk.com/animaljazzband">
                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 30 17.1" style="enable-background:new 0 0 30 17.1;" xml:space="preserve">
                    <path d="M30,1.2c0.2,0.6-0.5,2.1-2.3,4.6c-3,4-3.4,3.7-0.9,6c2.4,2.2,2.9,3.3,3,3.5c0,0,1,1.8-1.1,1.8l-4,0.1c-0.9,0.2-2-0.6-2-0.6
                        c-1.5-1-2.9-3.7-4-3.4c0,0-1.1,0.4-1.1,2.8c0,0.5-0.2,0.8-0.2,0.8S17,17,16.5,17h-1.8c-4,0.3-7.4-3.4-7.4-3.4S3.4,9.7,0.1,1.8
                        c-0.2-0.5,0-0.8,0-0.8S0.3,0.8,1,0.8l4.3,0C5.7,0.8,6,1,6,1s0.3,0.2,0.4,0.5C7,3.3,8,4.9,8,4.9c1.6,3.2,2.6,3.8,3.2,3.4
                        c0,0,0.8-0.5,0.6-4.4c-0.1-1.4-0.5-2-0.5-2c-0.4-0.5-1-0.6-1.3-0.7c-0.2,0,0.2-0.6,0.7-0.8C11.5,0,12.8,0,14.4,0
                        c1.3,0,1.6,0.1,2.1,0.2c1.5,0.4,1,1.7,1,5c0,1.1-0.2,2.5,0.6,3c0.3,0.2,1.1,0,3.1-3.4c0,0,0.9-1.6,1.7-3.5C23,1,23.3,0.9,23.3,0.9
                        s0.3-0.1,0.6-0.1l4.5,0C29.7,0.6,30,1.2,30,1.2z"/>
                </svg>
            </a>
            <a class="social-icons__item facebook" target="_blank" href="http://www.facebook.com/animaljazzband">
                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 8 16" style="enable-background:new 0 0 8 16;" xml:space="preserve">
                    <path d="M5.5,3H8V0H5.5C3.6,0,2,1.6,2,3.5V5H0v3h2v8h3V8h2.5L8,5H5V3.5C5,3.2,5.2,3,5.5,3z"/>
                </svg>
            </a>
            <a class="social-icons__item instagram" target="_blank" href="http://www.instagram.com/animaljazzband">
                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                    <path d="M16,12c0-2.2-1.8-4-4-4s-4,1.8-4,4s1.8,4,4,4S16,14.2,16,12z M18.2,12c0,3.4-2.7,6.2-6.2,6.2S5.8,15.4,5.8,12
                        S8.6,5.8,12,5.8S18.2,8.6,18.2,12z M19.8,5.6c0,0.8-0.6,1.4-1.4,1.4S17,6.4,17,5.6s0.6-1.4,1.4-1.4S19.8,4.8,19.8,5.6z M12,2.2
                        c-1.8,0-5.5-0.1-7.1,0.5C4.4,2.9,4,3.1,3.5,3.5S2.9,4.4,2.6,4.9C2,6.5,2.2,10.2,2.2,12S2,17.5,2.6,19.1c0.2,0.5,0.5,1,0.9,1.4
                        s0.8,0.7,1.4,0.9c1.6,0.6,5.3,0.5,7.1,0.5s5.5,0.1,7.1-0.5c0.5-0.2,1-0.5,1.4-0.9s0.7-0.8,0.9-1.4c0.6-1.6,0.5-5.3,0.5-7.1
                        s0.1-5.5-0.5-7.1c-0.2-0.5-0.5-1-0.9-1.4s-0.8-0.7-1.4-0.9C17.5,2,13.7,2.2,12,2.2z M24,12c0,1.7,0,3.3-0.1,5
                        c-0.1,1.9-0.5,3.6-1.9,5s-3.1,1.8-5,1.9C15.3,24,13.7,24,12,24s-3.3,0-5-0.1c-1.9-0.1-3.6-0.5-5-1.9s-1.8-3.1-1.9-5
                        C0,15.3,0,13.7,0,12s0-3.3,0.1-5C0.2,5.1,0.6,3.4,2,2s3.1-1.8,5-1.9C8.7,0,10.3,0,12,0s3.3,0,5,0.1c1.9,0.1,3.6,0.5,5,1.9
                        s1.8,3.1,1.9,5C24,8.7,24,10.3,24,12z"/>
                </svg>
            </a>
            <a class="social-icons__item twitter" target="_blank" href="http://twitter.com/animaljazzband">
                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 16 13" style="enable-background:new 0 0 16 13;" xml:space="preserve">
                    <path d="M16,1.5c-0.6,0.3-1.2,0.4-1.9,0.5c0.7-0.4,1.2-1,1.4-1.8c-0.6,0.4-1.3,0.7-2.1,0.8c-0.6-0.6-1.5-1-2.4-1
                        C9.3,0,7.8,1.5,7.8,3.3c0,0.3,0,0.5,0.1,0.7C5.2,3.9,2.7,2.6,1.1,0.6c-0.3,0.5-0.4,1-0.4,1.6c0,1.1,0.6,2.1,1.5,2.7
                        c-0.5,0-1-0.2-1.5-0.4c0,0,0,0,0,0c0,1.6,1.1,2.9,2.6,3.2C3,7.9,2.7,7.9,2.4,7.9c-0.2,0-0.4,0-0.6-0.1c0.4,1.3,1.6,2.3,3.1,2.3
                        c-1.1,0.9-2.5,1.4-4.1,1.4c-0.3,0-0.5,0-0.8,0C1.5,12.5,3.2,13,5,13c6,0,9.3-5,9.3-9.3c0-0.1,0-0.3,0-0.4C15,2.8,15.6,2.2,16,1.5
                        L16,1.5z"/>
                </svg>
            </a>
            <a class="social-icons__item youtube" target="_blank" href="https://www.youtube.com/animaljazzband">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 40 16">
                    <path d="M5.375 2.647c0.003-0.014 0.005-0.023 0.006-0.028l0.016-0.118-0.74-0.004c-0.668-0.004-0.873 0-0.891 0.017-0.009 0.008-0.24 0.885-0.651 2.473-0.196 0.758-0.361 1.363-0.367 1.345s-0.24-0.883-0.522-1.922c-0.281-1.039-0.517-1.894-0.524-1.901-0.010-0.010-0.906-0.014-1.632-0.008-0.105 0.001-0.164-0.205 0.938 3.299 0.152 0.485 0.381 1.172 0.507 1.526 0.146 0.408 0.25 0.724 0.321 0.987 0.126 0.501 0.13 0.815 0.103 1.182-0.032 0.423-0.036 3.413-0.005 3.463 0.024 0.038 1.425 0.056 1.558 0.020 0.021-0.006 0.035-0.026 0.045-0.139 0.033-0.097 0.036-0.484 0.036-2.090v-2.051l0.090-0.283c0.059-0.185 0.206-0.672 0.328-1.082s0.269-0.9 0.327-1.090c0.529-1.724 1.033-3.419 1.047-3.516l0.011-0.079z"></path>
                    <path d="M13.221 5.135l-0 0.107-0.017 0-0.009 2.953-0.009 2.863-0.229 0.233c-0.257 0.261-0.462 0.361-0.648 0.314-0.203-0.051-0.197 0.028-0.214-3.356l-0.016-3.115h-1.474v0.107h-0.017v3.38c0 3.621-0 3.619 0.184 3.982 0.146 0.29 0.36 0.431 0.725 0.479h0c0.481 0.064 1-0.154 1.481-0.622l0.209-0.203v0.351c0 0.303 0.009 0.353 0.064 0.368 0.090 0.025 1.206 0.027 1.326 0.002l0.1-0.021v-0.104l0.017-0.003v-7.736l-1.472 0.020z"></path>
                    <path d="M9.483 6.661c-0.14-0.599-0.401-1.002-0.832-1.28-0.676-0.437-1.449-0.484-2.165-0.13-0.522 0.258-0.859 0.686-1.032 1.314-0.021 0.075-0.036 0.138-0.047 0.231-0.044 0.222-0.049 0.552-0.061 2.093-0.018 2.374 0.010 2.656 0.307 3.195 0.292 0.529 0.897 0.917 1.556 0.997 0.198 0.024 0.6-0.013 0.832-0.078 0.525-0.146 1.029-0.561 1.252-1.032 0.096-0.204 0.154-0.345 0.189-0.604 0.065-0.353 0.070-0.925 0.070-2.381-0-1.857-0.006-2.060-0.068-2.326zM7.802 11.5c-0.124 0.094-0.34 0.135-0.515 0.098-0.135-0.029-0.318-0.241-0.374-0.434-0.070-0.241-0.075-3.594-0.015-4.251 0.1-0.329 0.378-0.501 0.682-0.419 0.237 0.064 0.358 0.212 0.427 0.523 0.051 0.231 0.057 0.518 0.046 2.207-0.007 1.12-0.011 1.668-0.048 1.962-0.037 0.185-0.099 0.235-0.203 0.315z"></path>
                    <path d="M35.944 8.346h0.712l-0.011-0.645c-0.011-0.592-0.020-0.659-0.099-0.82-0.125-0.253-0.309-0.366-0.601-0.366-0.351 0-0.573 0.17-0.678 0.518-0.045 0.148-0.092 1.167-0.058 1.255 0.019 0.049 0.121 0.058 0.735 0.058z"></path>
                    <path d="M31.184 6.879c-0.095-0.191-0.272-0.286-0.477-0.278-0.16 0.006-0.337 0.073-0.508 0.203l-0.127 0.097v4.634l0.127 0.097c0.288 0.22 0.604 0.266 0.822 0.12 0.086-0.058 0.142-0.137 0.186-0.263 0.057-0.164 0.062-0.375 0.055-2.325-0.008-2.032-0.012-2.152-0.078-2.285z"></path>
                    <path d="M40.014 4.791c-0.142-1.701-0.255-2.253-0.605-2.962-0.465-0.939-1.136-1.434-2.092-1.543-0.739-0.084-3.521-0.203-6.094-0.26-4.456-0.099-11.782 0.092-12.718 0.331-0.432 0.111-0.757 0.299-1.094 0.634-0.591 0.588-0.944 1.432-1.085 2.6-0.323 2.666-0.33 5.886-0.019 8.649 0.134 1.188 0.41 1.96 0.928 2.596 0.323 0.397 0.881 0.734 1.379 0.835 0.35 0.071 2.1 0.169 4.65 0.26 0.38 0.014 1.385 0.037 2.235 0.052 1.77 0.031 5.025 0.013 6.886-0.039 1.252-0.035 3.534-0.128 3.961-0.161 0.12-0.009 0.398-0.027 0.618-0.039 0.739-0.042 1.209-0.196 1.65-0.543 0.571-0.449 1.013-1.278 1.2-2.251 0.177-0.92 0.295-2.559 0.319-4.42 0.020-1.555-0.007-2.393-0.119-3.741zM22.27 4.175l-0.828 0.010-0.036 8.83-0.718 0.009c-0.555 0.008-0.724-0.001-0.737-0.036-0.010-0.025-0.021-2.016-0.026-4.424l-0.009-4.379-1.617-0.020v-1.38l4.779 0.019 0.020 1.36-0.828 0.010zM27.347 9.236v3.797h-1.308v-0.4c0-0.301-0.011-0.4-0.047-0.4-0.026 0-0.144 0.099-0.263 0.22-0.259 0.263-0.565 0.474-0.827 0.572-0.542 0.203-1.056 0.084-1.275-0.293-0.201-0.345-0.204-0.423-0.204-4.005v-3.29h1.307l0.010 3.098c0.010 3.044 0.011 3.1 0.084 3.224 0.097 0.164 0.244 0.209 0.478 0.144 0.138-0.038 0.232-0.105 0.455-0.327l0.282-0.28v-5.859h1.308v3.797zM32.449 12.491c-0.115 0.257-0.372 0.508-0.583 0.57-0.549 0.162-0.99 0.030-1.499-0.449-0.158-0.149-0.305-0.269-0.327-0.269-0.027 0-0.041 0.116-0.041 0.345v0.345h-1.308v-10.248h1.308v1.672c0 0.919 0.012 1.672 0.027 1.672s0.153-0.122 0.307-0.27c0.354-0.341 0.649-0.491 1.024-0.519 0.669-0.051 1.068 0.294 1.25 1.080 0.057 0.245 0.062 0.525 0.062 2.798-0 2.768-0 2.78-0.221 3.273zM37.984 10.971c-0.012 0.285-0.046 0.612-0.077 0.727-0.182 0.674-0.666 1.152-1.366 1.348-0.942 0.264-1.98-0.168-2.394-0.997-0.232-0.465-0.241-0.558-0.241-2.831 0-1.853 0.007-2.081 0.066-2.334 0.168-0.715 0.584-1.178 1.289-1.435 0.204-0.074 0.417-0.113 0.63-0.117 0.761-0.016 1.515 0.393 1.832 1.059 0.213 0.449 0.24 0.642 0.261 1.908l0.019 1.136-2.789 0.019-0.010 0.763c-0.015 1.077 0.058 1.408 0.349 1.603 0.244 0.165 0.62 0.152 0.824-0.027 0.192-0.168 0.246-0.349 0.265-0.877l0.017-0.463h1.347l-0.022 0.518z"></path>
                </svg>
            </a>
            <a class="social-icons__item telegram" target="_blank" href="https://telegram.me/animaljazz">
                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 300 261.2" style="enable-background:new 0 0 300 261.2;" xml:space="preserve">
                    <path id="XMLID_497_" d="M5.3,125.2L74.4,151l26.8,86c1.7,5.5,8.5,7.5,12.9,3.9l38.5-31.4c4-3.3,9.8-3.5,14-0.4l69.5,50.5
                        c4.8,3.5,11.6,0.9,12.8-4.9L299.8,9.8c1.3-6.3-4.9-11.6-10.9-9.3L5.2,110C-1.8,112.7-1.7,122.6,5.3,125.2z M96.9,137.3L232,54.1
                        c2.4-1.5,4.9,1.8,2.8,3.7L123.3,161.5c-3.9,3.6-6.4,8.5-7.2,13.8l-3.8,28.1c-0.5,3.8-5.8,4.1-6.8,0.5l-14.6-51.3
                        C89.3,146.8,91.7,140.5,96.9,137.3z"/>
                </svg>
            </a>
            <a class="social-icons__item itunes" target="_blank" href="https://band.link/bessimptomno">
                <svg version="1.1" id="Слой_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 24 26" style="enable-background:new 0 0 24 26;" xml:space="preserve">
                    <path d="M24,1.5V19c0,2.2-3.3,3-5,3s-5-0.8-5-3s3.3-3,5-3c1,0,2.1,0.2,3,0.6V8.2l-12,3.7V23c0,2.2-3.3,3-5,3s-5-0.8-5-3s3.3-3,5-3
                        c1,0,2.1,0.2,3,0.6V5.5c0-0.7,0.4-1.2,1.1-1.4l13-4C22.2,0,22.3,0,22.5,0C23.3,0,24,0.7,24,1.5L24,1.5z"/>
                </svg>
            </a>
        </div>
    </div>
</nav>

@if (app('request')->input('guest') === 'zarankin')
<section class="announces">
    <div class="container">
        <div class="announce offset-lg-2 col-lg-8 offset-md-1 col-md-10">
            <strong>Друзья!</strong> В этом году группа <strong>Animal ДжаZ</strong> отмечает свой 20-й день рождения. Эпидемиологическая ситуация не позволяет провести юбилейный концерт в Санкт-Петербурге со стадионным размахом. Поэтому мы приняли решение сыграть в родном городе Закрытый концерт только для самых преданных друзей группы.
            <div class="tickets">
                <a href="http://2020.animaljazz.com/" target="_blank" class="buy-ticket">
                    <div class="mdc-button__ripple"></div>
                    <span class="mdc-button__label">
                        Попасть на концерт
                    </span>
                </a>
            </div>
        </div>

    </div>
</section>
@endif


@yield('content')


@if (count($links) > 0)
<section class="links">
    @foreach($links as $link)
        <article class="links-item">
            <a target="_blank" href="{{ $link->link }}" class="image">
                <img src="{{ asset('storage/LinkImages/'.$link->id.'/cover.jpg') }}" alt="" class="">
            </a>
            <a target="_blank" href="{{ $link->link }}" class="button">
                {{ $link->linktext }}
            </a>
        </article>
    @endforeach

</section>
@endif



<footer class="footer">
    <div class="row no-gutters">
        <div class="container">
            <div class="row no-gutters align-center justify-center">
                <a target="_blank" href="https://muztorg.ru/">
                    <img class="footer__img" src="{{ asset('assets/partners/muztorg.png') }}" alt="Музторг">
                </a>
                <a target="_blank" href="http://amtelectronics.com/">
                    <img class="footer__img" src="{{ asset('assets/partners/amt.png') }}" alt="AMT Electronics">
                </a>
                <a target="_blank" href="http://www.paiste.com/e/endorser_det.php?page=image&endorserid=4946">
                    <img class="footer__img" src="{{ asset('assets/partners/paiste.png') }}" alt="Paiste">
                </a>
                <a target="_blank" href="http://www.rolandmusic.ru/">
                    <img class="footer__img" src="{{ asset('/assets/partners/roland.png') }}" alt="Roland Music">
                </a>
                <a target="_blank" href="http://www.shure.com/">
                    <img class="footer__img" src="{{ asset('/assets/partners/shure.png') }}" alt="Shure">
                </a>
            </div>
        </div>
    </div>
</footer>

<script type="text/javascript" src="{{ mix('js/app.js') }}" defer></script>

<script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src="https://vk.com/js/api/openapi.js?166",t.onload=function(){VK.Retargeting.Init("VK-RTRG-449929-hfzAe"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-449929-hfzAe" style="position:fixed; left:-999px;" alt=""/></noscript>

<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '511679869645614');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=511679869645614&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(56179798, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
    });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56179798" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-67021517-7"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-67021517-7');
</script>

<!-- Facebook Pixel Code -->
<script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '326912418425711');
    fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
               src="https://www.facebook.com/tr?id=326912418425711&ev=PageView&noscript=1"
    /></noscript>
<!-- End Facebook Pixel Code -->

</body>

</html>
