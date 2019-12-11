@extends('admin.layouts.admin')


@section('content')

    <h2>Редактирование ссылки</h2>

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
        <form action="{{ route('admin_links_update', $link->id) }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group row">
                <label for="date_begin" class="col-sm-3 col-form-label">Название</label>
                <div class="col-sm-9">
                    <input
                            type="text"
                            name="title"
                            class="form-control @error('title') is-invalid @enderror"
                            id="title"
                            value="{{ $link->title }}"
                    >
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="date_begin" class="col-sm-3 col-form-label">Ссылка</label>
                <div class="col-sm-9">
                    <input
                            type="text"
                            name="link"
                            class="form-control @error('link') is-invalid @enderror"
                            id="link"
                            value="{{ $link->link }}"
                    >
                    @error('link')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="event_cover" class="col-sm-3 col-form-label">Картинка</label>
                <div class="col-sm-9 Book__edit-image-box">
                    <a href="{{ asset('storage/LinkImages/'.$link->id.'/cover.jpg') }}" target="_blank"><img src="{{ asset('storage/LinkImages/'.$link->id.'/cover.jpg') }}" border="0" style="max-width: 200px" /></a>
                    <input type="file" class="form-control-file" id="event_cover" name="cover" />
                </div>
            </div>
            <div class="form-group row">
                <label for="date_begin" class="col-sm-3 col-form-label">Текст на кнопке</label>
                <div class="col-sm-9">
                    <input
                            type="text"
                            name="linktext"
                            class="form-control @error('linktext') is-invalid @enderror"
                            id="linktext"
                            value="{{ $link->linktext }}"
                    >
                    @error('linktext')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="link_is_publish" class="col-sm-3 col-form-label">Публиковать</label>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_publish" id="link_is_publish1" value="yes"{{ ($link->is_publish === 'yes') ? ' checked' : '' }}>
                        <label class="form-check-label" for="link_is_publish1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_publish" id="link_is_publish2" value="no"{{ ($link->is_publish !== 'yes') ? ' checked' : '' }}>
                        <label class="form-check-label" for="link_is_publish2">No</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
        <form action="{{ route('admin_links_delete', $link->id) }}" method="post" style="margin-top: -40px;">
            @csrf
            <button type="submit" class="btn btn-danger float-right" data-action="delete">Удалить</button>
        </form>
    </div>

@endsection