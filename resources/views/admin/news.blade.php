@extends('layouts/admin-wrapper')
@section('title')
    Новости
@endsection
@section('content')
    <div class="row g-3 mb-4 align-items-center justify-content-between">
        <div class="col-auto">
            <h1 class="app-page-title mb-0">Новости</h1>
        </div>
        <div class="col-auto">
            <div class="page-utilities">
                <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                    <div class="col-auto">
                        <button class="btn app-btn-primary add-btn add-btn-news"><i class="fa fa-plus"
                                style="margin-right:5px;"></i>Создать</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row g-4 all-cards admin-news">
        @foreach ($news as $article)
            <div class="col-6 col-md-4 col-xl-3 col-xxl-3">
                <div class="app-card app-card-doc shadow-sm h-100">
                    <img src="{{ $article->img_url }}" class="image-preview">
                    <div class="app-card-body p-3">
                        <input type="file" class="add-img-btn">
                        <input type="text" class="change-input" value="{{ $article->title }}" placeholder="Заголовок новости">
                        <textarea class="change-input" placeholder="Текст новости">{{ $article->content }}</textarea>
                        <button class="save-btn btn btn-primary no-action" id="{{ $article->id }}">Сохранить</button>
                        <button class="delete-btn btn btn-primary no-action" path="news"><i class="far fa-trash-alt"
                                style="color: white;"></i></button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
