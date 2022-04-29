@extends('admin.layouts.admin')


@section('content')

    <h2>Редактирование рекламной строчки</h2>

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
        <form action="{{ route('admin_magicline_update') }}" method="post" enctype="multipart/form-data">

            @csrf

            <div class="form-group row">
                <label for="link" class="col-sm-3 col-form-label">Ссылка</label>
                <div class="col-sm-9">
                    <input
                            type="text"
                            name="link"
                            class="form-control"
                            id="link"
                            value="{{ $magicline->link }}"
                    >
                </div>
            </div>
            <div class="form-group row">
                <label for="text" class="col-sm-3 col-form-label">Текст для ссылки</label>
                <div class="col-sm-9">
                    <input
                        type="text"
                        name="text"
                        class="form-control"
                        id="text"
                        value="{{ $magicline->text }}"
                    >
                </div>
            </div>
            <div class="form-group row">
                <label for="magicline_is_publish" class="col-sm-3 col-form-label">Публиковать</label>
                <div class="col-sm-9">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_publish" id="magicline_is_publish1" value="yes"{{ ($magicline->is_publish === 'yes') ? ' checked' : '' }}>
                        <label class="form-check-label" for="event_is_publish1">Yes</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_publish" id="magicline_is_publish2" value="no"{{ ($magicline->is_publish !== 'yes') ? ' checked' : '' }}>
                        <label class="form-check-label" for="event_is_publish2">No</label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Сохранить</button>
        </form>
    </div>

@endsection
