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
                        @foreach ($events as $event)
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
                                                <span class="mdc-button__label">
                                                    @if ($event->button_label !== null && $event->button_label !== '')
                                                        {{ $event->button_label }}
                                                    @else
                                                        Купить билет
                                                    @endif
                                                </span>
                                            </a>
                                        @endif
                                        @if (strpos($tickets_url, "<script") === 0)
                                            {!! $tickets_url !!}
                                        @endif
                                        @if (strpos($tickets_url, "javascript") === 0)
                                            <button class="buy-ticket">
                                                @if ($event->button_label !== null && $event->button_label !== '')
                                                    {{ $event->button_label }}
                                                @else
                                                    Купить билет
                                                @endif
                                            </button>
                                        @endif
                                    </div>
                                </div>

                                <div class="info">
                                    <a href="{{ $event->meeting_url }}" target="_blank">
                                        <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 300 261.2" style="enable-background:new 0 0 300 261.2;" xml:space="preserve">
                                            <path id="XMLID_497_" d="M5.3,125.2L74.4,151l26.8,86c1.7,5.5,8.5,7.5,12.9,3.9l38.5-31.4c4-3.3,9.8-3.5,14-0.4l69.5,50.5
                                                c4.8,3.5,11.6,0.9,12.8-4.9L299.8,9.8c1.3-6.3-4.9-11.6-10.9-9.3L5.2,110C-1.8,112.7-1.7,122.6,5.3,125.2z M96.9,137.3L232,54.1
                                                c2.4-1.5,4.9,1.8,2.8,3.7L123.3,161.5c-3.9,3.6-6.4,8.5-7.2,13.8l-3.8,28.1c-0.5,3.8-5.8,4.1-6.8,0.5l-14.6-51.3
                                                C89.3,146.8,91.7,140.5,96.9,137.3z">
                                            </path>
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
                                    <a target="_blank" href="mailto:booking@animaljazz.com">booking@animaljazz.com</a>
                                </li>
                            </ul>
                            <hr class="mdc-list-divider mdc-list-divider--inset" role="separator">
                            <h3 class="mdc-list-group__subheader">Tickets:</h3>
                            <ul class="mdc-list mdc-list--two-line mdc-list--non-interactive">
                                <li class="contacts__item mdc-list-item">
                                    <a target="_blank" href="mailto:bilet@animaljazz.com">bilet@animaljazz.com</a>
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
