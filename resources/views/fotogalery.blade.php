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
                <div class="fotogalery__album">
                    <div class="fotogalery__count">5</div>
                    <img src="https://nfcexpert.ru/wp-content/uploads/2022/03/f52f2daf3b.jpg" alt="">
                    <a href="album.html">Альбом №1 - Поезда</a>
                </div>
                <div class="fotogalery__album">
                    <div class="fotogalery__count">3</div>
                    <img src="https://chp-msk.ru/wp-content/uploads/2021/01/1-359.jpg" alt="">
                    <a href="album.html">Альбом №2 - Станции</a>
                </div>
                <div class="fotogalery__album">
                    <div class="fotogalery__count">11</div>
                    <img src="https://nfcexpert.ru/wp-content/uploads/2022/03/f52f2daf3b.jpg" alt="">
                    <a href="album.html">Альбом №1 - Поезда</a>
                </div>
                <div class="fotogalery__album">
                    <div class="fotogalery__count">5</div>
                    <img src="https://chp-msk.ru/wp-content/uploads/2021/01/1-359.jpg" alt="">
                    <a href="album.html">Альбом №2 - Станции</a>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
