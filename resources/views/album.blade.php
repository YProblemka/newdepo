@extends('layouts/wrapper')
@section('title')
    {{ $album->title }}
@endsection
@section('links')
@endsection
@section('main')
    <section>
        <div class="container">
            <h2 class="tac">{{ $album->title }}</h2>
            <div class="fotogalery__list p30 album-inner">
                @foreach ($album->images as $image)
                    <div class="fotogalery__album">
                        <img src="{{ $image->img_url }}" alt="">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="pop-up">
            <span>&times;</span>
            <img src="/img/no_photo.jpg" alt="img">
        </div>
    </section>
    @endsection
    @section('scripts')
    <script src="/js/openImage.js"></script>
    @endsection
