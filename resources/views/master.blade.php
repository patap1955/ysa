<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="description" content="@yield("description")" />
        <title>@yield("title")</title>
        <link rel="stylesheet" href="{{ mix('/assets/css/main.css') }}">
        @yield("css")
    </head>
    <body>
        <div id="fixedMenu" class="fixedMenuTop">
            <div class="containers fixedMenu">
                <div class="fixedMenu__nav">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="#about-as" class="nav-link">О компании</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav-link">Услуги</a>
                        </li>
                        <li class="nav-item">
                            <a href="#portfolio" class="nav-link">Наши проекты</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contacts" class="nav-link">Контакты</a>
                        </li>
                    </ul>
                </div>
                <div class="fixedMenu__phone">
                    <a class="" href="tel:+7 937 703-07-68">+7 937 703-07-68</a>
                    {{--                <a class="header__info-phone-mobile" href="tel:+7 937 703-07-68">+7 937 703-07-68</a>--}}
                </div>
                <div class="fixedMenu__logo">
                    <a href="/">
                        <img src="{{ asset('assets/img/logo.svg') }}">
                    </a>
                </div>
                <div class="burger">
                        <span>
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="burger-span burger-span-top" d="M0 1C0 0.447715 0.447715 0 1 0H39C39.5523 0 40 0.447715 40 1V3C40 3.55228 39.5523 4 39 4H0.999999C0.447714 4 0 3.55228 0 3V1Z" fill="#8B8B8B"/>
                                <path class="burger-span burger-span-center" d="M0 13C0 12.4477 0.447715 12 1 12H39C39.5523 12 40 12.4477 40 13V15C40 15.5523 39.5523 16 39 16H0.999999C0.447714 16 0 15.5523 0 15V13Z" fill="#8B8B8B"/>
                                <path class="burger-span burger-span-bottom" d="M0 25C0 24.4477 0.447715 24 1 24H39C39.5523 24 40 24.4477 40 25V27C40 27.5523 39.5523 28 39 28H0.999999C0.447714 28 0 27.5523 0 27V25Z" fill="#8B8B8B"/>
                            </svg>
                        </span>
                </div>
            </div>
            <div class="menu-mobile">
                <ul class="nav-list__mobile">
                    <li class="nav-item">
                        <a href="#about-as" class="nav-link">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Наши проекты</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contacts" class="nav-link">Контакты</a>
                    </li>
                </ul>
                <div class="menu-mobile__phone">
                    <a class="btn btn-base" href="tel:+7 937 703-07-68">+7 937 703-07-68</a>
                </div>
            </div>
        </div>

        <header id="header">
            <div class="containers header">
                <div class="header__logo animate__animated animate__bounce">
                    <a href="/">
                        <img src="{{ asset('assets/img/logo.svg') }}">
                    </a>
                </div>
                <div class="header__right">
                    <div class="header__info">
                        <div class="header__info-email">
                            <a href="mailto:ugstroi34@mail.ru">ugstroi34@mail.ru</a>
                        </div>
                        <div class="header__info-address">
                            <p>г. Волжский, 6-я Автодорога 18Б, оф. 3</p>
                            <p class="header__info-address-work">Пн-Пт с 9:00 до 20:00</p>
                        </div>
                        <div class="header__info-phone">
                            <a class="btn btn-base header__info-phone-decstop" href="tel:+7 937 703-07-68">+7 937 703-07-68</a>
                            <a class="header__info-phone-mobile" href="tel:+7 937 703-07-68">+7 937 703-07-68</a>
                        </div>
                    </div>
                    <div class="header__nav">
                        <ul class="nav-list">
                            <li class="nav-item">
                                <a href="#about-as" class="nav-link">О компании</a>
                            </li>
                            <li class="nav-item">
                                <a href="#services" class="nav-link">Услуги</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio" class="nav-link">Наши проекты</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contacts" class="nav-link">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="burger">
                    <span>
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path class="burger-span burger-span-top" d="M0 1C0 0.447715 0.447715 0 1 0H39C39.5523 0 40 0.447715 40 1V3C40 3.55228 39.5523 4 39 4H0.999999C0.447714 4 0 3.55228 0 3V1Z" fill="#8B8B8B"/>
                            <path class="burger-span burger-span-center" d="M0 13C0 12.4477 0.447715 12 1 12H39C39.5523 12 40 12.4477 40 13V15C40 15.5523 39.5523 16 39 16H0.999999C0.447714 16 0 15.5523 0 15V13Z" fill="#8B8B8B"/>
                            <path class="burger-span burger-span-bottom" d="M0 25C0 24.4477 0.447715 24 1 24H39C39.5523 24 40 24.4477 40 25V27C40 27.5523 39.5523 28 39 28H0.999999C0.447714 28 0 27.5523 0 27V25Z" fill="#8B8B8B"/>
                        </svg>
                    </span>
                </div>
            </div>
            <div class="menu-mobile">
                <ul class="nav-list__mobile">
                    <li class="nav-item">
                        <a href="#about-as" class="nav-link">О компании</a>
                    </li>
                    <li class="nav-item">
                        <a href="#services" class="nav-link">Услуги</a>
                    </li>
                    <li class="nav-item">
                        <a href="#portfolio" class="nav-link">Наши проекты</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contacts" class="nav-link">Контакты</a>
                    </li>
                </ul>
                <div class="menu-mobile__phone">
                    <a class="btn btn-base" href="tel:+7 937 703-07-68">+7 937 703-07-68</a>
                </div>
            </div>
        </header>
        <section class="phone-mobile">
            <div class="container phone-mobile__container">
                <a href="tel:+7 937 703-07-68">+7 937 703-07-68</a>
            </div>
        </section>
        <section id="first-screen">
            <div class="first-screen__fon">
                <img src="{{ asset('assets/img/first-screen-bg.png') }}">
            </div>
            <div class="first-screen">
                <div class="containers">
                    <div class="utp animate__animated animate__zoomIn animate__delay-1s">
                        <h1 class="utp__title animate__animated animate__backInDown animate__delay-1s">Промышленное и гражданское строительство</h1>
                        <p class="utp__text">ООО «ЮСА» предоставляет профессиональные услуги полного цикла по строительству промышленных и гражданских объектов.</p>
                        <div class="utp__button">
                            <a href="#" class="btn btn-primary">Узнать подробнее</a>
                        </div>
                        <div class="utp__footer">
                            <div class="utp__footer-item">
                                <p class="utp__footer-item-title">10 лет</p>
                                <p class="utp__footer-item-text">опыта работы</p>
                            </div>
                            <div class="utp__footer-item">
                                <p class="utp__footer-item-title">100+</p>
                                <p class="utp__footer-item-text">объектов построено в России</p>
                            </div>
                            <div class="utp__footer-item">
                                <p class="utp__footer-item-title">100+</p>
                                <p class="utp__footer-item-text">клиентов выбрали нас для сотрудничества</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section id="about-as">
            <div class="containers about-as">
                <div class="about-as__img-left animate__animated">
                    <img src="{{ asset('assets/img/about-as-1.png') }}" />
                </div>
                <div class="about-as__right-text animate__animated">
                    <h2 class="about-as__title">О компании</h2>
                    <p class="about-as__text">ООО «ЮГ СТРОЙ АЛЬЯНС» обеспечивает полный комплекс работ по строительству более 10 лет. Основное направление деятельности является строительство промышленных и гражданских объектов, проектирование.</p>
                </div>
                <div class="about-as__left-text animate__animated">
                    <p class="about-as__text">Высококвалифицированные бригады и специалисты компании позволяют нам предоставлять профессиональные услуги полного цикла по строительству промышленных и гражданских объектов. Мы выполняем все необходимые работы, начиная от проектированием и разработкой и заканчивая монтажом, пусконаладкой и автоматизацией технологических процессов.</p>
                </div>
                <div class="about-as__img-right animate__animated">
                    <img src="{{ asset('assets/img/about-as-2.png') }}" />
                </div>
            </div>
        </section>

        <div id="services">
            <img class="poligon1" src="{{ asset('assets/img/poligon-1.svg') }}">
            <div class="containers services">
                <h2 class="services__title">Услуги</h2>
                <div class="services__list">
                    <div class="services__item servicesItemAnimateLeft animate__animated">
                        <div class="services__item-header">
                            <img src="{{ asset('assets/img/services-item-1.png') }}">
                        </div>
                        <div class="services__item-content">
                            <div class="services__item-content-info">
                                <h3 class="services__item-content-title">Работы по устройству кровели</h3>
                                <p class="services__item-content-text">Наша компания предлагает весь цикл работ по строительству и реконструкции кровельного покрытия любой сложности от разработки проекта до до устройства, зборки на вашей площадке</p>
                            </div>

                            <div class="services__item-content-button">
                                <a class="btn btn-primary" href="#contacts">Оставить заявку</a>
                            </div>
                        </div>
                    </div>
                    <div class="services__item servicesItemAnimateCenter animate__animated">
                        <div class="services__item-header">
                            <img src="{{ asset('assets/img/services-item-2.png') }}">
                        </div>
                        <div class="services__item-content">
                            <div class="services__item-content-info">
                                <h3 class="services__item-content-title">Теплоизоляция</h3>
                                <p class="services__item-content-text">Наша компания предлагает весь цикл работ по монтажу и устройству теплоизоляции трубопроводов и РВС (Резервуары Вертикальные Стальные), от разработки проекта ТИ (Тепло Изоляция) до непосредственного устройства и монтажа.</p>
                            </div>

                            <div class="services__item-content-button">
                                <a class="btn btn-primary" href="#contacts">Оставить заявку</a>
                            </div>
                        </div>
                    </div>
                    <div class="services__item servicesItemAnimateRight animate__animated">
                        <div class="services__item-header">
                            <img src="{{ asset('assets/img/services-item-3.png') }}">
                        </div>
                        <div class="services__item-content">
                            <div class="services__item-content-info">
                                <h3 class="services__item-content-title">Антикоррозийные работы</h3>
                                <p class="services__item-content-text">Наша компания предлагает весь цикл работ по устройству (нанесению) Антикоррозийной защиты и огнезащиты, от разработки проекта АЗ (Антикоррозийной защиты) до непосредственного устройства. Подготовка и очистка поверхности до необходимого класса очистки с применением пескоструйных аппаратов, химических реагентов и специализированного оборудования.</p>
                            </div>

                            <div class="services__item-content-button">
                                <a class="btn btn-primary" href="#contacts">Оставить заявку</a>
                            </div>
                        </div>
                    </div>
                    <div class="services__item servicesItemAnimateLeft animate__animated">
                        <div class="services__item-header">
                            <img src="{{ asset('assets/img/services-item-4.png') }}">
                        </div>
                        <div class="services__item-content">
                            <div class="services__item-content-info">
                                <h3 class="services__item-content-title">Изготовление и монтаж металлоконструкции</h3>
                                <p class="services__item-content-text">Наша компания предлагает весь цикл работ по изготовления и монтажу металлоконструкций, от разработки проекта КМ (Конструкции Металлические), КМД (конструкции металлические детализированные) до непосредственный сборки на вашей площадке.</p>
                            </div>

                            <div class="services__item-content-button">
                                <a class="btn btn-primary" href="#contacts">Оставить заявку</a>
                            </div>
                        </div>
                    </div>
                    <div class="services__item servicesItemAnimateCenterBottom animate__animated">
                        <div class="services__item-header">
                            <img src="{{ asset('assets/img/services-item-5.png') }}">
                        </div>
                        <div class="services__item-content">
                            <div class="services__item-content-info">
                                <h3 class="services__item-content-title">Земляные работы</h3>
                                <p class="services__item-content-text">Наша компания предлагает весь цикл работ по выборке грунта и перемещение его на полигон.</p>
                            </div>

                            <div class="services__item-content-button">
                                <a class="btn btn-primary" href="#contacts">Оставить заявку</a>
                            </div>
                        </div>
                    </div>
                    <div class="services__item servicesItemAnimateRight animate__animated">
                        <div class="services__item-header">
                            <img src="{{ asset('assets/img/services-item--6.png') }}">
                        </div>
                        <div class="services__item-content">
                            <div class="services__item-content-info">
                                <h3 class="services__item-content-title">Монтаж трубопровода</h3>
                                <p class="services__item-content-text">Наша компания предлагает весь цикл работ по монтажу трубопровода и запорной арматуре.</p>
                            </div>

                            <div class="services__item-content-button">
                                <a class="btn btn-primary" href="#contacts">Оставить заявку</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="portfolio">
            <img class="poligon2" src="{{ asset('assets/img/poligon-2.svg') }}">
            <div class="containers portfolio">
                <h2 class="portfolio__title">Наши работы</h2>
                <div class="portfolioSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide portfolio-slide">
                            <a
                               data-fancybox="gallery"
                               data-caption="Демонтаж блока разделения воздуха АКТ 16-2 в рабочем цехе АО «Невинномысский Азот» ЕвроХим"
                               href="{{ asset('assets/img/portfolio-1.png') }}"
                            >
                                <img src="{{ asset('assets/img/portfolio-1.png') }}" />
                            </a>
                            <p class="swiper-text">Демонтаж блока разделения воздуха АКТ 16-2 в рабочем цехе АО «Невинномысский Азот» ЕвроХим</p>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a
                                data-fancybox="gallery"
                                data-caption="Реконструкция подстанции демонтаж и монтаж фундамента установка трансформатора на ПС 220 кВ «Котельниково». ПАО «Россети»"
                                href="{{ asset('assets/img/portfolio-2.png') }}"
                            >
                                <img src="{{ asset('assets/img/portfolio-2.png') }}" />
                            </a>
                            <p class="swiper-text">Реконструкция подстанции демонтаж и монтаж фундамента установка трансформатора на ПС 220 кВ «Котельниково». ПАО «Россети»</p>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a
                                data-fancybox="gallery"
                                data-caption="Демонтаж механизированным способом хим. комбината. Енисей"
                                href="{{ asset('assets/img/portfolio-3.png') }}"
                            >
                                <img src="{{ asset('assets/img/portfolio-3.png') }}" />
                            </a>
                            <p class="swiper-text">Демонтаж механизированным способом хим. комбината. Енисей</p>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a
                                data-fancybox="gallery"
                                data-caption="Строительство пункта перегруза на АО «Птицефабрика Краснодонская» АПХ «КоПИТАНИЯ»"
                                href="{{ asset('assets/img/portfolio-4.png') }}"
                            >
                                <img src="{{ asset('assets/img/portfolio-4.png') }}" />
                            </a>
                            <p class="swiper-text">Строительство пункта перегруза на АО «Птицефабрика Краснодонская» АПХ «КоПИТАНИЯ»</p>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a
                                data-fancybox="gallery"
                                data-caption="Монтаж теплоизоляции РВС и трубопровода на территории ООО «КОНТУР СПб»"
                                href="{{ asset('assets/img/portfolio-5.png') }}"
                            >
                                <img src="{{ asset('assets/img/portfolio-5.png') }}" />
                            </a>
                            <p class="swiper-text">Монтаж теплоизоляции РВС и трубопровода на территории ООО «КОНТУР СПб»</p>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a
                                data-fancybox="gallery"
                                data-caption=""
                                href="{{ asset('assets/img/portfolio-6.png') }}"
                            >
                                <img src="{{ asset('assets/img/portfolio-6.png') }}" />
                            </a>
                            <p class="swiper-text"></p>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>

        <div id="contacts">
            <div class="contacts-fon contactsFon animate__animated">
                <div class="container-fluid">
                    <div class="containers contacts-form">
                        <h2 class="contacts-form__title">Заказать обратный звонок</h2>
                        <p class="contacts-form__text">Если у вас остались вопросы, оставьте контактные данные и мы обязательно позвоним</p>
                        <form>
                            <div class="form-group">
                                <input class="form-control contacts-form__input" type="text" placeholder="Ваше имя" name="name" id="formInputName">
                            </div>
                            <div class="form-group">
                                <input class="form-control contacts-form__input" type="text" placeholder="+7 (970) 251 25 78" name="phone" id="formContactPhone">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control contacts-form__input contacts-form__textarea" id="inpunContactsText" name="text" placeholder="Опишите вопрос или предложение"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" id="contactsButton" class="btn btn-primary button-contacts">Заказать звонок</button>
                            </div>
                        </form>
                        <div id="errorInputForm" class="errorInputForm"></div>
                    </div>
                </div>
            </div>
        </div>
        <section id="contacts__map">
            <div class="container">
                <div class="map animate__animated">
                    <h2 class="map__title">Контакты</h2>
                    <div class="map__info">
                        <div class="map__info-grid">
                            <div class="map__info-grid-left">
                                <span>Телефон</span>
                            </div>
                            <div class="map__info-grid-right">
                                <a href="tel:+7 937 703-07-68">+7 937 703-07-68</a>
                            </div>
                        </div>
                        <div class="map__info-grid">
                            <div class="map__info-grid-left">
                                <span>Почта</span>
                            </div>
                            <div class="map__info-grid-right">
                                <a href="mailto:ugstroi34@mail.ru">ugstroi34@mail.ru</a>
                            </div>
                        </div>
                        <div class="map__info-grid">
                            <div class="map__info-grid-left">
                                <span>Адрес</span>
                            </div>
                            <div class="map__info-grid-right">
                                <span>404130, Волгоградская область, г. Волжский, ул. 6-я Автодорога 18Б, офис 3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="map"></div>
        </section>

        <footer id="footer">
            <div class="container footer">
                <div class="footer__top">
                    <div class="footer__logo">
                        <a href="/"><img src="{{ asset("assets/img/logo.svg") }}"></a>
                    </div>
                    <div class="footer__nav">
                        <ul class="nav-list nav-list-footer">
                            <li class="nav-item">
                                <a href="#about-as" class="nav-link">О компании</a>
                            </li>
                            <li class="nav-item">
                                <a href="#services" class="nav-link">Услуги</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio" class="nav-link">Наши проекты</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contacts" class="nav-link">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="footer__bottom">
                    <p>© 2022, Все права защищены</p>
                    <p>Сайт разработан компанией <a href="https://alex-media.ru">ALEX–MEDIA</a> </p>
                </div>
            </div>
        </footer>


        <!--  Модельное окно с вопросом от спама -->
        <div id="myQuestions" class="modalForm">
            <div class="modal-content-form">
                <span class="closeForm">&times;</span>
                <p class="text-question">Подтвердите что вы не робот. Ответьте на вопрос</p>
                <p class="text-question-answer" id="modelQuestions"></p>
                <div class="modal-form-block">
                    <input type="text" id="inputModal" required>
                    <button class="btn btn-yellow" id="questionButton">Ответить</button>
                    <p class="errorAnswerQuestion"></p>
                </div>
            </div>
        </div>

        <script src="{{ mix('/assets/js/main.js') }}"></script>
        @yield("scripts")
    </body>
</html>
