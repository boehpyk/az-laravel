@extends('layouts.app')


@section('content')


<main class="main-section row no-gutters">
    <div class="container">
        <div class="row no-gutters">
            <div class="offset-lg-2 col-lg-8 offset-md-1 col-md-10">

                <section class="concerts">
                    <h2 class="mdc-typography--display1">
                        КОНЦЕРТЫ
                    </h2>

                    <div class="concerts-list">
                        @foreach($events as $event)
                            @php
                                $tickets_url = base64_decode($event->tickets_url)
                            @endphp


                            <div class="concert-item">
                                <div class="date">
                                    <div class="date-day">
                                        {{ \Carbon\Carbon::parse($event->date_begin)->format('d') }}
                                    </div>
                                    <div class="date-month">
                                        {{ $event->date_begin_russian_month }}
                                    </div>
                                </div>
                                <div class="place-tickets">
                                    <div class="place">
                                        {{ $event->city }}
                                        <div class="club-name">
                                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                                                <path d="M0 0h24v24H0z" fill="none"/>
                                            </svg>
                                            {{ $event->club_name }}
                                        </div>
                                    </div>
                                    <div class="tickets">
                                        @if (strpos($tickets_url, "http://") === 0 || (strpos($tickets_url, "https://") === 0))
                                            <a href="{{ $tickets_url }}" target="_blank" class="buy-ticket">
                                                <div class="mdc-button__ripple"></div>
                                                <span class="mdc-button__label">Купить билет</span>
                                            </a>
                                        @endif
                                        @if (strpos($tickets_url, "<script") === 0)
                                            {!! $tickets_url !!}
                                        @endif
                                    </div>
                                </div>

                                <div class="info">
                                    <a href="{{ $event->meeting_url }}" target="_blank">
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
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>

                @if (count($videos) > 0)
                    <section class="youtube-video">
                        @foreach($videos as $video)
                            <iframe
                                    class="video"
                                    ref="frame"
                                    src="https://www.youtube.com/embed/{{ $video->code }}?autoplay=0"
                                    width="100%"
                                    height="400"
                                    frameborder="0"
                            ></iframe>
                        @endforeach
                    </section>
                @endif

                <section class="contacts">
                    <h2 class="mdc-typography--display1">
                        КОНТАКТЫ
                    </h2>
                    <div class="mdc-card">
                        <div class="mdc-list-group">
                            <h3 class="mdc-list-group__subheader">Booking:</h3>
                            <ul class="mdc-list mdc-list--two-line mdc-list--non-interactive">
                                <li class="contacts__item mdc-list-item">
                                    <span class="contacts__avatar mdc-list-item__graphic">
                                      <a target="_blank" href="https://vk.com/zarankin">
                                        <img src="{{ asset('assets/zar.jpg') }}" alt="Александр Заранкин">
                                      </a>
                                    </span>
                                    <span class="mdc-list-item__text">
                                      <a target="_blank" href="https://vk.com/zarankin">Александр Заранкин</a>
                                      <span class="mdc-list-item__secondary-text">
                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                        </svg>
                                        <a target="_blank" href="tel:+79110922882">+7 (911) 092-28-82</a>
                                        <br>
                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>
                                        <a target="_blank" href="mailto:zarankin@bk.ru">zarankin@bk.ru</a>
                                      </span>
                                    </span>
                                </li>
                            </ul>
                            <hr class="mdc-list-divider mdc-list-divider--inset" role="separator">
                            <h3 class="mdc-list-group__subheader">PR:</h3>
                            <ul class="mdc-list mdc-list--two-line mdc-list--non-interactive">
                                <li class="contacts__item mdc-list-item">
                                    <span class="contacts__avatar mdc-list-item__graphic">
                                      <a target="_blank" href="https://vk.com/marygoldpr">
                                        <img src="{{ asset('assets/mar.jpg') }}" alt="">
                                      </a>
                                    </span>
                                    <span class="mdc-list-item__text">
                                      <a target="_blank" href="https://vk.com/marygoldpr"> Мария Минина</a>
                                      <span class="mdc-list-item__secondary-text">
                                        <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                        </svg>
                                        <a target="_blank" href="tel:+79032165576">+7 (903) 216-55-76</a>
                                        <br>
                                            <svg height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                                            <path d="M0 0h24v24H0z" fill="none"/>
                                        </svg>

                                        <a target="_blank" href="mailto:marygoldpr@gmail.com">marygoldpr@gmail.com</a>
                                      </span>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</main>


@endsection