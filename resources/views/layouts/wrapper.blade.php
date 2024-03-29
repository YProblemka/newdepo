<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    @yield('links')
</head>

<body>
    <header>
        <div class="header">
            <div class="container">
                <div class="header__top">
                    <div class="logo">
                        <a href="{{route("index")}}">
                            <div class="logo__wrapper">
                                <img src="/img/logo.png" alt="" class="logo__img">
                                <div class="logo__text">
                                    <p class="logo__text_big">Электродепо Планерное</p>
                                    <p class="logo__text_small">Московского Метрополитена</p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="header__contacts">
                        <a href="tel:+7 (495) 622-74-21">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M14.2545 20C6.39526 20 0 13.6047 0 5.74551C0.000391706 4.33992 0.513062 2.98265 1.44203 1.92781C2.37101 0.872963 3.65259 0.192859 5.04686 0.0148178C5.46109 -0.0369869 5.88091 0.0478656 6.2425 0.256478C6.6041 0.465091 6.8877 0.786055 7.05019 1.17059L8.98611 5.67809C9.11394 5.97037 9.1668 6.28993 9.13989 6.6078C9.11298 6.92567 9.00715 7.2318 8.832 7.49842L7.34877 9.75218C8.00586 10.9939 9.02317 12.0079 10.2671 12.6609L12.4919 11.1776C12.7595 11.0009 13.0669 10.8934 13.3863 10.8648C13.7057 10.8363 14.0272 10.8875 14.3219 11.0139L18.8294 12.9498C19.2139 13.1123 19.5349 13.3959 19.7435 13.7575C19.9521 14.1191 20.037 14.5389 19.9852 14.9531C19.8071 16.3474 19.127 17.629 18.0722 18.558C17.0173 19.4869 15.6601 19.9996 14.2545 20V20ZM5.04686 2.35525C4.27209 2.52258 3.57805 2.95032 3.08033 3.5672C2.58262 4.18409 2.31129 4.95288 2.31154 5.74551C2.31409 8.91219 3.57318 11.9484 5.81237 14.1876C8.05155 16.4268 11.0878 17.6859 14.2545 17.6885C15.0471 17.6887 15.8159 17.4174 16.4328 16.9197C17.0497 16.422 17.4774 15.7279 17.6447 14.9531L13.5996 13.2195L11.3651 14.7124C11.0872 14.8962 10.7665 15.0053 10.4341 15.0289C10.1017 15.0525 9.7688 14.9899 9.46768 14.8472C7.59817 13.9418 6.08584 12.4363 5.17207 10.5708C5.02512 10.2713 4.95935 9.93838 4.98132 9.60543C5.00329 9.27248 5.11224 8.95112 5.29728 8.67346L6.78051 6.40044L5.04686 2.35525Z"
                                    fill="#C4C4C4" />
                            </svg>
                            <span>+7 (495) 622-74-21</span></a>
                        <a href="https://yandex.ru/maps/-/CCUr4Rh~2C">
                            <svg width="18" height="21" viewBox="0 0 18 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M3.92515 3.94402C5.22634 2.62873 6.9894 1.8913 8.82603 1.8913C10.6627 1.8913 12.4257 2.62873 13.7269 3.94402C15.0284 5.25959 15.7609 7.04558 15.7609 8.90952C15.7609 11.3697 14.0313 13.8643 12.1291 15.8329C11.1974 16.7972 10.2629 17.5959 9.56035 18.1539C9.26897 18.3853 9.01851 18.5745 8.82603 18.7161C8.63355 18.5745 8.38309 18.3853 8.09172 18.1539C7.38913 17.5959 6.45467 16.7972 5.52292 15.8329C3.62073 13.8643 1.89111 11.3697 1.89111 8.90952C1.89111 7.04558 2.6237 5.25959 3.92515 3.94402ZM8.40651 20.2588C8.40672 20.2589 8.4069 20.259 8.82603 19.6371L8.4069 20.259C8.66024 20.4298 8.99182 20.4298 9.24516 20.259L8.82603 19.6371C9.24516 20.259 9.24534 20.2589 9.24555 20.2588L9.24612 20.2584L9.24778 20.2573L9.25317 20.2536L9.27215 20.2406C9.28837 20.2295 9.31168 20.2134 9.34159 20.1926C9.40141 20.1508 9.48769 20.0898 9.59665 20.0108C9.81451 19.8527 10.1235 19.6222 10.4933 19.3285C11.2316 18.7421 12.2184 17.8992 13.2078 16.8752C15.1481 14.8672 17.2609 11.998 17.2609 8.90952C17.2609 6.65294 16.3742 4.48718 14.7933 2.88909C13.2121 1.29074 11.0657 0.391296 8.82603 0.391296C6.58633 0.391296 4.44001 1.29074 2.85879 2.88909C1.27785 4.48718 0.391113 6.65294 0.391113 8.90952C0.391113 11.998 2.50395 14.8672 4.44422 16.8752C5.4337 17.8992 6.42048 18.7421 7.15881 19.3285C7.52858 19.6222 7.83755 19.8527 8.05541 20.0108C8.16437 20.0898 8.25065 20.1508 8.31047 20.1926C8.34038 20.2134 8.36369 20.2295 8.37991 20.2406L8.39889 20.2536L8.40429 20.2573L8.40594 20.2584L8.40651 20.2588ZM7.74658 8.90954C7.74658 8.29462 8.2376 7.80997 8.82632 7.80997C9.41505 7.80997 9.90607 8.29462 9.90607 8.90954C9.90607 9.52447 9.41505 10.0091 8.82632 10.0091C8.2376 10.0091 7.74658 9.52447 7.74658 8.90954ZM8.82632 6.30997C7.39397 6.30997 6.24658 7.48148 6.24658 8.90954C6.24658 10.3376 7.39397 11.5091 8.82632 11.5091C10.2587 11.5091 11.4061 10.3376 11.4061 8.90954C11.4061 7.48148 10.2587 6.30997 8.82632 6.30997Z"
                                    fill="#C4C4C4" />
                            </svg>
                            <span>125481 г. Москва., ул.Планерная., д. 9</span></a>
                    </div>
                </div>
                <div class="header__bottom">
                    <div class="burger-wrapper">
                        <button class="burger-menu">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>
                    <nav class="nav">
                        <a href="{{ route('index') }}">ГЛАВНАЯ</a>
                        <a href="{{ route('news') }}">НОВОСТИ И СОБЫТИЯ</a>
                        <a href="{{ route('structure') }}">СТРУКТУРА</a>
                        <a href="{{ route('fotogalery') }}">ФОТОГАЛЕРЕЯ</a>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('main')
    </main>
    <footer>
        <div class="footer">
            <div class="container">
                <p>© 2000 - <span id="currentYear"></span> эл\д Планерное. Все права защищены</p>
            </div>
        </div>
    </footer>
    @yield('scripts')
    <script>
        document.querySelectorAll("a").forEach(link => {
            (link.href == document.URL) && (link.classList.add("arsipa-active-link"))
        })
    </script>
    <script>
        document.querySelector(".burger-menu").onclick = () => {
            document.querySelector(".nav").classList.toggle("mobile-open")
        }
    </script>
</body>

</html>
