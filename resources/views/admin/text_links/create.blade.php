@extends('admin.layouts.admin')

@section('content')


    <h2>Добавление ссылки наверху</h2>

    @if ($errors->any())
        <div class="alert alert-danger mt-4 mb4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container mt-4">
        <div class="col-sm-9">
            <form action="{{ route('admin_text_links_store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="date_begin" class="col-sm-2 col-form-label">Текст ссылки</label>
                    <div class="col-sm-10">
                        <input
                                type="text"
                                name="linktext"
                                class="form-control @error('linktext') is-invalid @enderror"
                                id="title"
                                value="{{ old('linktext') }}"
                        >
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>


@endsection

@section('title')
    Добавление ссылки наверху
@endsection

