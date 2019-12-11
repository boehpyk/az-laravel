@extends('admin.layouts.admin')

@section('content')


    <h2>Ссылки внизу</h2>

    <table class="table table-bordered table-sm Events__list-table">
        <tr>
            <thead>
                <th>Название</th>
            </thead>
        </tr>
        @foreach($links as $link)
            <tr>
                <td class="city">
                    <a href="{{ route('admin_links_edit', ['link' => $link->id]) }}" class="table-event-title">{{ $link->title }}</a>
                </td>
                <input type="hidden" value="yes" name="exists[{{ $link->id }}]">
            </tr>
        @endforeach
    </table>

@endsection

@section('title')
    Список ссылок
@endsection

