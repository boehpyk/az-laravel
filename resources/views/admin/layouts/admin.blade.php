<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>AZ Admin - @yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/admin/admin.css') }}" rel="stylesheet">

</head>

<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top">
    <div class="container">
        <div class="navbar-brand">AZ Admin</div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('admin_index') }}">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        Выход
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container mt-4">
    <div class="row">
        <aside class="col-sm-3">

            <h4>Концерты</h4>
            <ul class="list-group mb-3">
                <li class="list-group-item">
                    <a href="{{ route('admin_events_index') }}">Концерты</a>
                    <ul>
                        <li><a href="{{ route('admin_events_archive') }}">Архив</a></li>
                    </ul>
                </li>
                <li class="list-group-item"><a href="{{ route('admin_events_create') }}">Добавить концерт</a></li>
            </ul>

            {{--<h4>Билетные виджеты</h4>--}}
            {{--<ul class="list-group mb-3">--}}
                {{--<li class="list-group-item">--}}
                    {{--<a href="{{ route('admin_widgets_index') }}">Виджеты</a>--}}
                {{--</li>--}}
                {{--<li class="list-group-item"><a href="{{ route('admin_widgets_create') }}">Добавить виджет</a></li>--}}
            {{--</ul>--}}

            <h4>Видео</h4>
            <ul class="list-group mb-3">
                <li class="list-group-item">
                    <a href="{{ route('admin_videos_index') }}">Видео</a>
                </li>
                <li class="list-group-item"><a href="{{ route('admin_videos_create') }}">Добавить видео</a></li>
            </ul>

            <h4>Ссылки внизу с картинками</h4>
            <ul class="list-group mb-3">
                <li class="list-group-item">
                    <a href="{{ route('admin_links_index') }}">Список</a>
                </li>
                <li class="list-group-item"><a href="{{ route('admin_links_create') }}">Добавить ссылку</a></li>
            </ul>

            {{--<h4>Текстовые ссылки наверху</h4>--}}
            {{--<ul class="list-group mb-3">--}}
                {{--<li class="list-group-item">--}}
                    {{--<a href="{{ route('admin_text_links_index') }}">Список</a>--}}
                {{--</li>--}}
                {{--<li class="list-group-item"><a href="{{ route('admin_text_links_create') }}">Добавить ссылку</a></li>--}}
            {{--</ul>--}}


        </aside>
        <div class="col-sm-9 mb-5">



            @yield('content')



        </div>
    </div>
</div>

<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/admin/admin.js') }}"></script>

</body>

</html>