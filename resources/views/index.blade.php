@extends('layouts/wrapper')

@section('title')
    Эл/д Планерное
@endsection
@section('links')
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
@endsection
@section('main')
    <section class="jb bg">
        <div class="container">
            <div class="jb-slider">
                <div><img
                        src="https://images.unsplash.com/photo-1604585728556-1749cfd13491?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80"
                        alt=""></div>
                <div><img
                        src="https://images.unsplash.com/uploads/1413387158190559d80f7/6108b580?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80"
                        alt=""></div>
                <div><img
                        src="https://images.unsplash.com/photo-1609955548274-d1f3f13519b8?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=465&q=80"
                        alt=""></div>
            </div>
            <!-- <div class="slider__arrows">
                        <button class="btn-prev">&#10094;</button>
                        <button class="btn-next">&#10095;</button>
                    </div> -->
        </div>
    </section>
    <section class="text-section">
        <div class="container">
            <h2 class="tac">Немного о нас</h2>
            <h3 class="tac">Полное название</h3>
            <p class="text-bold">Региональная общественная организация – Дорожная территориальная организация
                Московского Метрополитена Общественной организации – Российского профессионального союза
                железнодорожников и транспортных строителей</p>
            <p>Привет МИР</p>
            <p> Дорпрофжел Московского Метрополитена входит в состав Российского профессионального союза
                железнодорожников и транспортных строителей (РОСПРОФЖЕЛ), а на правах городского комитета профсоюзов
                в Московскую Федерацию профсоюзов (МФП) и как структурная организация Центрального Комитета
                РОСПРОФЖЕЛ и МФП входит в Федерацию Независимых Профсоюзов России (ФНПР).
            </p>
            <p>
                Работа Дорожной территориальной организации Московского Метрополитена осуществляется в соответствии
                с Уставом РОСПРОФЖЕЛ и направлена на соблюдение ТК РФ, нормативных актов и инструкций Московского
                Метрополитена, а также выполнение Коллективного договора.
            </p>
        </div>
    </section>
    
    @include('inc.contact-form-section')
    @include('inc.map-section')


@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="js/slider.js"></script>
@endsection
