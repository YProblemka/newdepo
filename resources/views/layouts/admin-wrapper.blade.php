<!DOCTYPE html>
<html lang="ru">

<head>
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/8a553633d6.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link id="theme-style" rel="stylesheet" href="/css/admin.css">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
</head>

<body class="app">
    <header class="app-header fixed-top">
        <div class="app-header-inner">
            <div class="container-fluid py-2">
                <div class="app-header-content">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-auto">
                            <a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"
                                    role="img">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10"
                                        stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
                                </svg>
                            </a>
                        </div>

                        {{-- search --}}
                        {{-- <div class="search-mobile-trigger d-sm-none col">
                            <i class="search-mobile-trigger-icon fas fa-search"></i>
                        </div>
                        <div class="app-search-box col">
                            <form class="app-search-form">
                                <input type="text" placeholder="Поиск..." name="search"
                                    class="form-control search-input">
                                <button type="submit" class="btn search-btn btn-primary" value="Search"><i
                                        class="fas fa-search"></i></button>
                            </form>
                        </div> --}}
                        {{-- search --}}

                        <div class="app-utilities col-auto">
                            <div class="app-utility-item">
                                <i class="admin-name">{{ auth()->user()->login }}</i>
                                <a class="btn app-btn-primary" style="margin-left: 10px;" href="{{ route("admin.logout") }}"><i class="fa fa-sign-out" style="color: white"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="app-sidepanel" class="app-sidepanel">
            <div id="sidepanel-drop" class="sidepanel-drop"></div>
            <div class="sidepanel-inner d-flex flex-column">
                <a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
                <div class="app-branding">
                    <a class="app-logo">
                        <span class="logo-text">Админ-панель</span>
                    </a>
                </div>
                <nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
                    <ul class="app-menu list-unstyled">
                        <li class="nav-item">
                            <a class="{{Request::url() == route('admin.news') ? 'active nav-link' : 'nav-link'}}" href="{{ route('admin.news') }}">
                                <span class="nav-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M24 6V16.5C24 16.9141 23.9219 17.3008 23.7656 17.6602C23.6094 18.0195 23.3945 18.3359 23.1211 18.6094C22.8477 18.8828 22.5273 19.0977 22.1602 19.2539C21.793 19.4102 21.4063 19.4922 21 19.5H2.91797C2.51953 19.5 2.14453 19.4219 1.79297 19.2656C1.44141 19.1094 1.13281 18.9023 0.867188 18.6445C0.601563 18.3867 0.390625 18.0781 0.234375 17.7188C0.078125 17.3594 0 16.9805 0 16.582V3H21V6H24ZM22.5 7.5H21V15.75C21 15.9531 20.9258 16.1289 20.7773 16.2773C20.6289 16.4258 20.4531 16.5 20.25 16.5C20.0469 16.5 19.8711 16.4258 19.7227 16.2773C19.5742 16.1289 19.5 15.9531 19.5 15.75V4.5H1.5V16.582C1.5 16.7773 1.53516 16.9609 1.60547 17.1328C1.67578 17.3047 1.77734 17.4531 1.91016 17.5781C2.04297 17.7031 2.19531 17.8047 2.36719 17.8828C2.53906 17.9609 2.72266 18 2.91797 18H21C21.2109 18 21.4063 17.9609 21.5859 17.8828C21.7656 17.8047 21.9219 17.6992 22.0547 17.5664C22.1875 17.4336 22.2969 17.2734 22.3828 17.0859C22.4688 16.8984 22.5078 16.7031 22.5 16.5V7.5ZM18 7.5H3V6H18V7.5ZM18 16.5H12V15H18V16.5ZM18 13.5H12V12H18V13.5ZM18 10.5H12V9H18V10.5ZM10.5 16.5H3V8.96484H10.5V16.5ZM4.5 15H9V10.4648H4.5V15Z" fill="black"/>
                                        </svg>
                                        
                                </span>
                                <span class="nav-link-text">Новости</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="{{Request::url() == route('admin.albums') ? 'active nav-link' : 'nav-link'}}" href="{{ route('admin.albums') }}">
                                <span class="nav-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7 17H17C17.2 17 17.35 16.9083 17.45 16.725C17.55 16.5417 17.5333 16.3667 17.4 16.2L14.65 12.525C14.55 12.3917 14.4167 12.325 14.25 12.325C14.0833 12.325 13.95 12.3917 13.85 12.525L11.25 16L9.4 13.525C9.3 13.3917 9.16667 13.325 9 13.325C8.83333 13.325 8.7 13.3917 8.6 13.525L6.6 16.2C6.46667 16.3667 6.45 16.5417 6.55 16.725C6.65 16.9083 6.8 17 7 17ZM5 21C4.45 21 3.979 20.8043 3.587 20.413C3.19567 20.021 3 19.55 3 19V5C3 4.45 3.19567 3.979 3.587 3.587C3.979 3.19567 4.45 3 5 3H19C19.55 3 20.021 3.19567 20.413 3.587C20.8043 3.979 21 4.45 21 5V19C21 19.55 20.8043 20.021 20.413 20.413C20.021 20.8043 19.55 21 19 21H5ZM5 19H19V5H5V19ZM5 5V19V5Z" fill="black"/>
                                        </svg>
                                        
                                        
                                </span>
                                <span class="nav-link-text">Альбомы</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <div class="app-wrapper">
        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="/js/admin/admin.js"></script>

</body>

</html>
