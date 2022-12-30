@extends('layouts/wrapper')

@section('title')
    Фотогалерея
@endsection
@section('links')
@endsection
@section('main')
    <section>
        <div class="container">
            <h2 class="tac">Фотогалерея</h2>
            <div class="fotogalery__list p30">
                @foreach ($albums as $album)
                @php($images_count = $album->images()->count())
                    @if ($images_count != 0)
                        <div class="fotogalery__album">
                            <div class="fotogalery__count">{{ $images_count }}</div>
                            <img src="{{ $album->images()->limit(1)->get()->first()->img_url }}" alt="">
                            <a href="{{ route('album', ['album' => $album->id]) }}">{{ $album->title }}</a>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
