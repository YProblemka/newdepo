<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Подтверждение почты</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <style>
        section{
            width: 100vw;
            height: 100vh;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            gap: 20px;
            font-size: 30px;
        }
    </style>
    <section class="bg">
        {{$message}}
        <a class="btn" href="{{route("news")}}">Вернуть к новостям</a>
    </section>
</body>
