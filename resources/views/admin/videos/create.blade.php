@extends('admin.layouts.admin')

@section('content')


    <h2>Добавление видео</h2>

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
            <form action="{{ route('admin_videos_store') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group row">
                    <label for="url" class="col-sm-2 col-form-label">URL видео</label>
                    <div class="col-sm-10">
                        <input
                                type="text"
                                name="url"
                                class="form-control @error('url') is-invalid @enderror"
                                id="url"
                                value="{{ old('url') }}"
                        >
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Добавить</button>
            </form>
        </div>
    </div>


@endsection

@section('title')
    Добавление видео
@endsection

