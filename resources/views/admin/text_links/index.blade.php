@extends('admin.layouts.admin')

@section('content')


    <h2>Ссылки наверху</h2>

    <table class="table table-bordered table-sm Events__list-table">
        <tr>
            <thead>
                <th>Название</th>
            </thead>
        </tr>
        @foreach($text_links as $text_link)
            <tr>
                <td class="city">
                    <a href="{{ route('admin_text_links_edit', ['text_link' => $text_link->id]) }}" class="table-event-title">{{ $text_link->linktext }}</a>
                </td>
                <input type="hidden" value="yes" name="exists[{{ $text_link->id }}]">
            </tr>
        @endforeach
    </table>

@endsection

@section('title')
    Список ссылок наверху
@endsection

