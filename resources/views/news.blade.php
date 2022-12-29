@extends('layouts/wrapper')

@section('title')
    Новости и события
@endsection
@section('links')
@endsection
@section('main')
    <section>
        <div class="container">
            <h2 class="tac">Новости и события</h2>
            <div class="news">
                @foreach ($news as $article)
                    <article class="article">
                        <a href="{{route("article")}}"></a>
                        <img src="{{$article->img_src}}" alt="{{$article->title}}">
                        <div class="article__footer">
                            <p class="article__title">{{$article->title}}</p>
                            <p class="article__date">{{$article->date}}</p>
                        </div>
                    </article>
                @endforeach

            </div>
            <div class="centered">
                <button class="btn">Загрузить ещё</button>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
@endsection
