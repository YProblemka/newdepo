@component('mail::panel')
    Подтвердите свой email перейдя по ссылке: <a href="{{ route("newsletter.confirmation", ["hash"=>$hashKey]) }}">Ссылка</a>
    <br>
@endcomponent
