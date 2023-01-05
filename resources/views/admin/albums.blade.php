@extends('layouts/admin-wrapper')
@section('title')
    Альбомы
@endsection
@section('content')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0">Альбомы</h1>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">
                        <button class="btn app-btn-primary add-btn add-btn-albums"><i class="fa fa-plus"
                                style="margin-right:5px;"></i>Создать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 all-cards admin-albums">
        @foreach ($albums as $album)
            <div class="col-6 col-md-4 col-xl-3 col-xxl-3">
                <div class="app-card app-card-doc shadow-sm h-100">
                    <div class="app-card-body p-3">
                        <input type="text" class="change-input" value="{{ $album->title }}" placeholder="Название альбома">
                        <button class="save-btn btn btn-primary no-action" id="{{ $album->id }}">Сохранить</button>
                        <a class="btn btn-primary" href="{{ route('admin.album-images', ['album' => $album->id]) }}">Изменить
                            фото</a>
                        <button class="delete-btn btn btn-primary no-action" path="album"><i class="far fa-trash-alt"
                                style="color: white;"></i></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
