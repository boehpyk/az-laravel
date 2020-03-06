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

                    <div class="years-links">
                        @foreach($years as $year)
                            <a href="{{ route('events.archive', ['year' => $year]) }}">{{ $year }}</a>
                        @endforeach
                    </div>
                    <div class="concerts-info">
                        <h3>{{ $current_year }}</h3>
                        Концертов: <b>{{ count($events) }}</b>
                    </div>


                    <div class="concerts-list">
                        @foreach($events as $event)
                            @php
                                $tickets_url = base64_decode($event->tickets_url)
                            @endphp


                            <div class="concert-item">
                                <div class="date">
                                    <div class="date-day">
                                        {{ \Carbon\Carbon::parse($event->date_begin)->format('d.m') }}
                                    </div>
                                    <div class="date-month">
                                        {{ \Carbon\Carbon::parse($event->date_begin)->format('Y') }}
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
                                    @if (strlen(trim($tickets_url)) > 0)
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
                                    @endif
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

            </div>
        </div>
    </div>
</main>


@endsection