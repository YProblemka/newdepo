@component('mail::panel')
    ФИО:  {{ $name }}<br>
    Почта:  {{ $email }}<br>
    Телефон:  {{ $phone}}<br>
    Комментарий:  {{ $comment }}
@endcomponent
