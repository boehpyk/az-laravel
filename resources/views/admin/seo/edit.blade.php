@extends('admin.layouts.admin')


@section('content')

    <h2>Редактирование SEO</h2>

    <div class="container mt-5 Events__edit-form">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('admin_seo_update') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group row">
                <label for="date_begin" class="col-sm-3 col-form-label">Title страницы</label>
                <div class="col-sm-9">
                    <input
                            type="text"
                            name="title"
                            class="form-control"
                            id="title"
                            value="{{ $seo->title }}"
                    >
                </div>
            </div>
            <div class="form-group row">
                <label for="date_begin" class="col-sm-3 col-form-label">META description</label>
                <div class="col-sm-9">
                    <textarea
                            name="description"
                            class="form-control"
                            id="description"
                    >{{ $seo->description }}</textarea>
                </div>
            </div>
            <div class="form-group row">
                <label for="date_begin" class="col-sm-3 col-form-label">META keywords</label>
                <div class="col-sm-9">
                    <textarea
                            name="keywords"
                            class="form-control"
                            id="keywords"
                    >{{ $seo->keywords }}</textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>

@endsection