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
        <header id="header">
            <div class="container header">
                <div class="header__logo">
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
                            <a class="btn btn-base" href="tel:+7 937 703-07-68">+7 937 703-07-68</a>
                        </div>
                    </div>
                    <div class="header__nav">
                        <ul class="nav-list">
                            <li class="nav-item">
                                <a href="#servaces" class="nav-link">Услуги</a>
                            </li>
                            <li class="nav-item">
                                <a href="#portfolio" class="nav-link">Наши проекты</a>
                            </li>
                            <li class="nav-item">
                                <a href="#about-as" class="nav-link">О компании</a>
                            </li>
                            <li class="nav-item">
                                <a href="#contacts" class="nav-link">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="first-screen">
            <div class="container">
                <div class="utp">
                    <h1 class="utp__title">Промышленное и гражданское строительство</h1>
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

        <div id="about-as">
            <div class="container about-as">
                <div class="about-as__left">
                    <div class="about-as__left-img">
                        <img src="{{ asset('assets/img/about-as-1.png') }}" />
                    </div>
                    <div class="about-as__left-info">
                        <h2 class="about-as__left-info-title">О компании</h2>
                        <p class="about-as__left-info-text">ООО «ЮГ СТРОЙ АЛЬЯНС» обеспечивает полный комплекс работ по строительству более 10 лет. Основное направление деятельности является строительство промышленных и гражданских объектов, проектирование.</p>
                    </div>
                </div>
                <div class="about-as__right">
                    <div class="about-as__right-info">
                        <p class="about-as__right-info-text">Высококвалифицированные бригады и специалисты компании позволяют нам предоставлять профессиональные услуги полного цикла по строительству промышленных и гражданских объектов. Мы выполняем все необходимые работы, начиная от проектированием и разработкой и заканчивая монтажом, пусконаладкой и автоматизацией технологических процессов.</p>
                    </div>
                    <div class="about-as__right-img">
                        <img src="{{ asset('assets/img/about-as-2.png') }}" />
                    </div>
                </div>
            </div>
        </div>

        <div id="services">
            <img class="poligon1" src="{{ asset('assets/img/poligon-1.svg') }}">
            <div class="container services">
                <h2 class="services__title">Услуги</h2>
                <div class="services__list">
                    <div class="services__item">
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
                    <div class="services__item">
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
                    <div class="services__item">
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
                    <div class="services__item">
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
                    <div class="services__item">
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
                    <div class="services__item">
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
            <div class="container portfolio">
                <h2 class="portfolio__title">Наши работы</h2>
                <div class="portfolioSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide portfolio-slide">
                            <a data-fancybox="gallery" href="">
                                <img src="{{ asset('assets/img/portfolio-1.png') }}" />
                            </a>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a data-fancybox="gallery" href="">
                                <img src="{{ asset('assets/img/portfolio-2.png') }}" />
                            </a>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a data-fancybox="gallery" href="">
                                <img src="{{ asset('assets/img/portfolio-3.png') }}" />
                            </a>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a data-fancybox="gallery" href="">
                                <img src="{{ asset('assets/img/portfolio-4.png') }}" />
                            </a>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a data-fancybox="gallery" href="">
                                <img src="{{ asset('assets/img/portfolio-5.png') }}" />
                            </a>
                        </div>
                        <div class="swiper-slide portfolio-slide">
                            <a data-fancybox="gallery" href="">
                                <img src="{{ asset('assets/img/portfolio-6.png') }}" />
                            </a>
                        </div>

                    </div>
                    <div class="swiper-pagination"></div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
        <script src="{{ mix('/assets/js/main.js') }}"></script>
        @yield("scripts")
    </body>
</html>
