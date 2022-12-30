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
                        <a href="{{$article->url}}"></a>
                        <img src="{{$article->img_url}}" alt="{{$article->title}}">
                        <div class="article__footer">
                            <p class="article__title">{{$article->title}}</p>
                            <p class="article__date">{{$article->created_at}}</p>
                        </div>
                    </article>
                @endforeach

            </div>
            <div class="centered">
                <button class="btn" id="load-more">Загрузить ещё</button>
            </div>
        </div>
    </section>
    @include('inc.mailing')
@endsection
@section('scripts')
  <script src="/js/load-more.js"></script>
@endsection
