@component('mail::panel')
    Заголовок:  {{ $news->title }}<br>
    Текст:  {{ $news->content }}<br>
    Полная статья:   <a href="{{ $news->url }}">Ссылка</a><br>
@endcomponent

<a href="{{ route("newsletter.unsubscribe", ["hash"=>$hashKey]) }}">Отписаться от рассылки</a><br>
