@extends('admin.layouts.admin')

@section('content')


    <h2>{{ $title }}</h2>

    @if ( $archive)
        <div class="Events__years-links">
            @foreach($years as $year)
                <a href="{{ route('admin_events_archive', ['year' => $year]) }}">{{ $year }}</a>
            @endforeach
        </div>
        <div class="Events__concerts-info">
            <h3>{{ $current_year }}</h3>
            Концертов: <b>{{ count($events) }}</b>
        </div>
    @endif

    <table class="table table-bordered table-sm Events__list-table">
        <tr>
            <thead>
                <th>Дата</th>
                <th>Город</th>
            </thead>
        </tr>
        @foreach($events as $event)
            <tr>
                <td class="date">
                    {{ $event->date_begin->format('d.m.Y') }}
                </td>
                <td class="city">
                    <a href="{{ route('admin_events_edit', ['event' => $event->id]) }}" class="table-event-title">{{ $event->city }}</a>, <span style="font-size: smaller">{{ $event->club_name }}</span>
                </td>
                <input type="hidden" value="yes" name="exists[{{ $event->id }}]">
            </tr>
        @endforeach
    </table>

@endsection

@section('title')
    Список концертов
@endsection

