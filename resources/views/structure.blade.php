@extends('layouts/wrapper')

@section('title')
    Структура
@endsection
@section('links')
@endsection
@section('main')
    <section>
        <div class="container">
            <h2 class="tac">Структура</h2>
            <div class="structure-sort-btns p30 centered">
                <button class="btn arsipa-active-link" data-open="info">Информация</button>
                <button class="btn" data-open="apparat">Аппарат</button>
                <button class="btn" data-open="presidium">Президиум</button>
                <button class="btn" data-open="profsouz">Профсоюзы</button>
            </div>
            <div class="structure-sorted info text-section">
                <h3 class="tac">Информация</h3>
                <p class="text-bold">Региональная общественная организация – Дорожная территориальная организация
                    Московского Метрополитена Общественной организации – Российского профессионального союза
                    железнодорожников и транспортных строителей</p>
                <p>
                    История Профсоюза работников Московского Метрополитена своими корнями уходит в 1935 год. С
                    первых
                    дней своего существования Профсоюз выступал защитником интересов рабочих, взял курс на
                    объединение и
                    единство действий. Шли годы, менялись приоритеты, но деятельность Профсоюза в одном всегда
                    оставалась постоянной – занимать активную позицию по социально-экономической защите членов
                    Профсоюза, созданию здоровых и безопасных условий труда на предприятии, оздоровление работников.
                </p>
                <p>
                    Дорпрофжел Московского Метрополитена на сегодняшний день объединяет 45 первичных профсоюзных
                    организаций во всех подразделениях Метрополитена с численностью свыше 55 тысяч членов профсоюза.
                </p>
                <p>
                    Дорпрофжел Московского Метрополитена входит в состав Российского профессионального союза
                    железнодорожников и транспортных строителей (РОСПРОФЖЕЛ), а на правах городского комитета
                    профсоюзов
                    в Московскую Федерацию профсоюзов (МФП) и как структурная организация Центрального Комитета
                    РОСПРОФЖЕЛ и МФП входит в Федерацию Независимых Профсоюзов России (ФНПР).
                </p>
                <p>
                    Работа Дорожной территориальной организации Московского Метрополитена осуществляется в
                    соответствии
                    с Уставом РОСПРОФЖЕЛ и направлена на соблюдение ТК РФ, нормативных актов и инструкций
                    Московского
                    Метрополитена, а также выполнение Коллективного договора.
                </p>
            </div>
            <div class="structure-sorted apparat hidden">
                <h3 class="tac">Аппарат</h3>
                <div class="apparat__list">
                    <div class="apparat-card">
                        <img src="https://www.sport-uray.ru/wp-content/uploads/avatar-scaled.jpeg" alt="">
                        <div class="article__footer">
                            <p class="article__title">Еланский Владислав Георгиевич</p>
                            <p class="article__date pt0">Председатель Дорпрофжел</p>
                            <p class="article__date pt0">Тел: <a href="tel:8-495-688-04-63">8-495-688-04-63</a>
                            </p>
                        </div>
                    </div>
                    <div class="apparat-card">
                        <img src="https://www.sport-uray.ru/wp-content/uploads/avatar-scaled.jpeg" alt="">
                        <div class="article__footer">
                            <p class="article__title">Сидорова Надежда Анатольевна</p>
                            <p class="article__date pt0">Заместитель председателя Дорпрофжел</p>
                            <p class="article__date pt0">Тел:
                                <a href="tel:8-495-688-04-61">8-495-688-04-61</a>
                            </p>
                        </div>
                    </div>
                    <div class="apparat-card">
                        <img src="https://www.sport-uray.ru/wp-content/uploads/avatar-scaled.jpeg" alt="">
                        <div class="article__footer">
                            <p class="article__title">Мокрина Юлия Викторовна</p>
                            <p class="article__date pt0">Заведующий отделом организационной и кадровой работы</p>
                            <p class="article__date pt0">Тел:
                                <a href="tel:8-495-688-02-97">8-495-688-02-97</a>
                            </p>
                        </div>
                    </div>
                    <div class="apparat-card">
                        <img src="https://www.sport-uray.ru/wp-content/uploads/avatar-scaled.jpeg" alt="">
                        <div class="article__footer">
                            <p class="article__title">Гапеева Елена Викторовна</p>
                            <p class="article__date pt0">Заведующий отделом социальной-экономической работы</p>
                            <p class="article__date pt0">Тел: <a href="tel:8-499-325-01-15">8-499-325-01-15</a>
                            </p>
                        </div>
                    </div>
                    <div class="apparat-card">
                        <img src="https://www.sport-uray.ru/wp-content/uploads/avatar-scaled.jpeg" alt="">
                        <div class="article__footer">
                            <p class="article__title">Липатов Николай Александрович</p>
                            <p class="article__date pt0">Главный технический инспектор</p>
                            <p class="article__date pt0">Тел: <a href="tel:8-495-688-03-37">8-495-688-03-37</a>
                            </p>
                        </div>
                    </div>
                    <div class="apparat-card">
                        <img src="https://www.sport-uray.ru/wp-content/uploads/avatar-scaled.jpeg" alt="">
                        <div class="article__footer">
                            <p class="article__title">Суворова Юлия Геннадьевна</p>
                            <p class="article__date pt0">Главный правовой инспектор труда</p>
                            <p class="article__date pt0">Тел: <a href="tel:8-499-325-02-89">8-499-325-02-89</a>
                            </p>
                        </div>
                    </div>
                    <div class="apparat-card">
                        <img src="https://www.sport-uray.ru/wp-content/uploads/avatar-scaled.jpeg" alt="">
                        <div class="article__footer">
                            <p class="article__title">Чернышова Людмила Адольфовна</p>
                            <p class="article__date pt0">Главный бухгалтер</p>
                            <p class="article__date pt0">Тел: <a href="tel:8-495-688-08-80">8-495-688-08-80</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="structure-sorted presidium hidden">
                <h3 class="tac">Президиум</h3>
                <div class="text-card">
                    <p class="text-bold">Еланский Владислав Георгиевич</p>
                    <p>председатель дорожной территориальной организации Московского метрополитена Российского профсоюза  железнодорожников и транспортных строителей
                    </p>
                </div>
                <div class="text-card">
                    <p class="text-bold">Сидорова
                        Надежда Анатольевна</p>
                    <p>Заместитель председателя дорожной территориальной организации Московского метрополитена Российского профсоюза железнодорожников и транспортных строителей
                    </p>
                </div>
                <div class="text-card">
                    <p class="text-bold">Ахлюева Татьяна Ивановна</p>
                    <p>председатель первичной профсоюзной организации Службы пути Московского метрополитена
                    </p>
                </div>
                <div class="text-card">
                    <p class="text-bold">Хренова Надежда Васильевна</p>
                    <p>Председатель первичной профсоюзной организации электродепо Варшавское Московского метрополитена
                        </p>
                </div>
                <div class="text-card">
                    <p class="text-bold">Сычева Ирина Юрьевна</p>
                    <p>Председатель первичной профсоюзной организации Эскалаторной службы Московского метрополитена</p>
                </div>
                <div class="text-card">
                    <p class="text-bold">Михайлова Светлана Александровна</p>
                    <p>Председатель первичной профсоюзной организации Службы сигнализации, централизации и блокировки Московского метрополитена</p>
                </div>
                <div class="text-card">
                    <p class="text-bold">Скуднов Андрей Иванович</p>
                    <p>Председатель первичной профсоюзной организации электродепо Выхино Московского метрополитена</p>
                </div>
                <div class="text-card">
                    <p class="text-bold">Сотникова Светлана Даниловна</p>
                    <p>Председатель первичной профсоюзной организации Вагоноремонтного комплекса Московского метрополитена</p>
                </div>
                <div class="text-card">
                    <p class="text-bold">Игнатова Елена Михайловна</p>
                    <p>Председатель первичной профсоюзной организации Службы безопасности Московского метрополитена</p>
                </div>
                <div class="text-card">
                    <p class="text-bold">Никитина Ольга Николаевна</p>
                    <p>Председатель первичной профсоюзной организации Службы безопасности Московского метрополитена</p>
                </div>
                <div class="text-card">
                    <p class="text-bold">Левтер Татьяна Владимировна</p>
                    <p>Председатель первичной профсоюзной организации ДИТС Московского метрополитена</p>
                </div>
                <div class="text-card">
                    <p class="text-bold">Лепешкина Ольга Игоревна</p>
                    <p>Председатель первичной профсоюзной организации Службы сбора доходов Московского метрополитена</p>
                </div>
            </div>
            <div class="structure-sorted profsouz hidden">
                <h3 class="tac">Профсоюзы</h3>
                <div class="text-card">
                    <p class="text-bold"><img src="img/vetka1.svg" alt=""> ППО Электродепо "Планерное"</p>
                    <p>Председатель: Кабанова Наталья Владимировна</p>
                    <p>Тел: <a href="tel:+7 777 777 77 77">+7 777 777 77 77</a></p>
                </div>
                <div class="text-card">
                    <p class="text-bold"><img src="img/vetka2.svg" alt=""> ППО Электродепо "Планерное"</p>
                    <p>Председатель: Кабанова Наталья Владимировна</p>
                    <p>Тел: <a href="tel:+7 777 777 77 77">+7 777 777 77 77</a></p>
                </div>
                <div class="text-card">
                    <p class="text-bold"><img src="img/vetka3.svg" alt=""> ППО Электродепо "Планерное"</p>
                    <p>Председатель: Кабанова Наталья Владимировна</p>
                    <p>Тел: <a href="tel:+7 777 777 77 77">+7 777 777 77 77</a></p>
                </div>
                <div class="text-card">
                    <p class="text-bold"><img src="img/vetka4.svg" alt=""> ППО Электродепо "Планерное"</p>
                    <p>Председатель: Кабанова Наталья Владимировна</p>
                    <p>Тел: <a href="tel:+7 777 777 77 77">+7 777 777 77 77</a></p>
                </div>
                <div class="text-card">
                    <p class="text-bold"><img src="img/vetka5.svg" alt=""> ППО Электродепо "Планерное"</p>
                    <p>Председатель: Кабанова Наталья Владимировна</p>
                    <p>Тел: <a href="tel:+7 777 777 77 77">+7 777 777 77 77</a></p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script src="js/structure.js"></script>
@endsection
