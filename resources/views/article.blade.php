@extends('layouts/wrapper')

@section('title')
    {{$article->title}}
@endsection
@section('links')
@endsection
@section('main')
    <section class="text-section article-inner">
        <div class="container">
            <h2>{{$article->title}}</h2>
            <p class="text-bold article-date">{{$article->created_at}}</p>
            <img src="{{$article->img_url}}" alt="">
            <p>
                {{$article->content}}
            </p>
            @include('inc.socials')
        </div>
    </section>
@endsection
@section('scripts')
@endsection
