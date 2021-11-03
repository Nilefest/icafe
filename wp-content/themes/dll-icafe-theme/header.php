<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DLL_iCafe_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header id="header" class="header">
            <div class="header__nav_container fixed-top">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-2 col-md-2 d-none d-sm-flex align-items-center">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo_link">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/Logo_Icafe.svg" alt="" class="header__logo_img">
                            </a>
                        </div>
                        <div class="col-8 col-md-7 col-lg-6 col-xl-8">
                            <nav class="nav">
                                <input id="nav-mobile__checkbox" type="checkbox" class="nav-mobile__checkbox">
                                <ul class="nav-mobile d-sm-none">
                                    <li class="nav-mobile__li nav-mobile__li_link">
                                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-mobile__link">Главная</a>
                                    </li>
                                    <li class="nav-mobile__li nav-mobile__li_link">
                                        <a href="/shop" class="nav-mobile__link">Наше меню</a>
                                    </li>
                                    <li class="nav-mobile__li nav-mobile__li_link">
                                        <a href="delivery.html" class="nav-mobile__link">Доставка</a>
                                    </li>
                                    <li class="nav-mobile__li nav-mobile__li_link">
                                        <a href="contacts.html" class="nav-mobile__link">Контакты</a>
                                    </li>
                                </ul>
                                <ul class="nav__ul">
                                    <li class="nav__li nav__li_dropdown d-block d-sm-none">
                                        <label for="nav-mobile__checkbox" class="nav-mobile__burger"></label>
                                    </li>
                                    <!--<li class="nav__li nav__li_dropdown">
                                        <a id="nav__location" class="nav__location nav__link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Киев
                                        </a>
                                    </li><!-- -->
                                    <?php
                                    wp_nav_menu(
                                        array(
                                            'theme_location'  => 'menu-header-top',
                                            'container'  => false,
                                            'items_wrap'      => '%3$s',
                                        )
                                    );
                                    ?>
                                </ul>
                            </nav>
                        </div>
                        <div class="col-4 col-sm-2 col-md-3 col-xl-2 d-flex">
                            <a id="nav__phone" class="nav__phone" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/icons/for_all/call.svg" alt="" class="nav__img-link nav__img-link_call">
                            </a>
                            <a href="basket.html" class="nav__link nav__link_basket">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/icons/for_all/basket.svg" alt="Корзина" class="nav__img-link nav__img-link_basket">
                                <span id="nav__basket_count" class="nav__basket_count">13</span>
                                <p id="nav__basket_summ" class="nav__basket_summ d-none d-md-block">
                                    <span id="nav_sum_for_pay" class="nav_sum_for_pay">367</span>
                                    грн
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-slider d-block d-lg-none">
                <div class="row d-block d-lg-none">
                    <div class="slider menu-slider__items">
                        <div class="menu-slider__point">
                            <a href="/shop" class="menu-slider__category menu-slider__category_salad">
                                <div class="menu-slider__icon_container">
                                    <span class="menu-slider__icon"></span>
                                </div>
                                <p class="menu-slider__name">
                                    Салаты
                                </p>
                            </a>
                        </div>
                        <div class="dish-menu-point">
                            <a href="/shop" class="menu-slider__category menu-slider__category_pasta">
                                <div class="menu-slider__icon_container">
                                    <span class="menu-slider__icon"></span>
                                </div>
                                <p class="menu-slider__name">
                                    Паста
                                </p>
                            </a>
                        </div>
                        <div class="dish-menu-point">
                            <a href="/shop" class="menu-slider__category menu-slider__category_soup">
                                <div class="menu-slider__icon_container">
                                    <span class="menu-slider__icon"></span>
                                </div>
                                <p class="menu-slider__name">
                                    Первые блюда
                                </p>
                            </a>
                        </div>
                        <div class="dish-menu-point">
                            <a href="/shop" class="menu-slider__category menu-slider__category_bruschetta">
                                <div class="menu-slider__icon_container">
                                    <span class="menu-slider__icon"></span>
                                </div>
                                <p class="menu-slider__name">
                                    Брускетты
                                </p>
                            </a>
                        </div>
                        <div class="dish-menu-point">
                            <a href="/shop" class="menu-slider__category menu-slider__category_roll">
                                <div class="menu-slider__icon_container">
                                    <span class="menu-slider__icon"></span>
                                </div>
                                <p class="menu-slider__name">
                                    Роллы
                                </p>
                            </a>
                        </div>
                        <div class="dish-menu-point">
                            <a href="/shop" class="menu-slider__category menu-slider__category_sandwich">
                                <div class="menu-slider__icon_container">
                                    <span class="menu-slider__icon"></span>
                                </div>
                                <p class="menu-slider__name">
                                    Сендвичи
                                </p>
                            </a>
                        </div>
                        <div class="dish-menu-point">
                            <a href="/shop" class="menu-slider__category menu-slider__category_dessert">
                                <div class="menu-slider__icon_container">
                                    <span class="menu-slider__icon"></span>
                                </div>
                                <p class="menu-slider__name">
                                    Десерты
                                </p>
                            </a>
                        </div>
                        <div class="dish-menu-point">
                            <a href="/shop" class="menu-slider__category menu-slider__category_drink">
                                <div class="menu-slider__icon_container">
                                    <span class="menu-slider__icon"></span>
                                </div>
                                <p class="menu-slider__name">
                                    Напитки
                                </p>
                            </a>
                        </div>
                        <div class="dish-menu-point">
                            <a href="/shop" class="menu-slider__category menu-slider__category_icecream">
                                <div class="menu-slider__icon_container">
                                    <span class="menu-slider__icon"></span>
                                </div>
                                <p class="menu-slider__name">
                                    Мороженое
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="main__display">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="d-none d-lg-flex col-lg-1 align-items-center justify-content-center">
                            <span class="menu__main-word">
                                Меню
                            </span>
                        </div>
                        <div class="d-none d-lg-flex col-lg-3">
                            <div class="menu__categories">
                                <a href="/shop" class="menu__category menu__category_salad">
                                    <div class="menu__icon_container">
                                        <span class="menu__icon"></span>
                                    </div>
                                    <p class="menu__name">
                                        Салаты
                                    </p>
                                </a>
                                <a href="/shop" class="menu__category menu__category_pasta">
                                    <div class="menu__icon_container">
                                        <span class="menu__icon"></span>
                                    </div>
                                    <p class="menu__name">
                                        Паста
                                    </p>
                                </a>
                                <a href="/shop" class="menu__category menu__category_soup">
                                    <div class="menu__icon_container">
                                        <span class="menu__icon"></span>
                                    </div>
                                    <p class="menu__name">
                                        Первые блюда
                                    </p>
                                </a>
                                <a href="/shop" class="menu__category menu__category_bruschetta">
                                    <div class="menu__icon_container">
                                        <span class="menu__icon"></span>
                                    </div>
                                    <p class="menu__name">
                                        Брускетты
                                    </p>
                                </a>
                                <a href="/shop" class="menu__category menu__category_roll">
                                    <div class="menu__icon_container">
                                        <span class="menu__icon"></span>
                                    </div>
                                    <p class="menu__name">
                                        Роллы
                                    </p>
                                </a>
                                <a href="/shop" class="menu__category menu__category_sandwich">
                                    <div class="menu__icon_container">
                                        <span class="menu__icon"></span>
                                    </div>
                                    <p class="menu__name">
                                        Сендвичи
                                    </p>
                                </a>
                                <a href="/shop" class="menu__category menu__category_dessert">
                                    <div class="menu__icon_container">
                                        <span class="menu__icon"></span>
                                    </div>
                                    <p class="menu__name">
                                        Десерты
                                    </p>
                                </a>
                                <a href="/shop" class="menu__category menu__category_drink">
                                    <div class="menu__icon_container">
                                        <span class="menu__icon"></span>
                                    </div>
                                    <p class="menu__name">
                                        Напитки
                                    </p>
                                </a>
                                <a href="/shop" class="menu__category menu__category_icecream">
                                    <div class="menu__icon_container">
                                        <span class="menu__icon"></span>
                                    </div>
                                    <p class="menu__name">
                                        Мороженое
                                    </p>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 col-lg-7 col-lg-8">
                            <div class="header__baner">
                                <h2 class="header__baner_title">
                                    Хит продаж!
                                </h2>
                                <p class="header__baner_description">
                                    Мороженое <br>собственного <br>приготовления <br>в ассортименте
                                </p>
                                <ul class="header__baner_features">
                                    <li class="header__baner_feature header__baner_feature1">
                                        Без искусственных <br>красителей
                                        <span class="baner_feature__after baner_feature__after1"></span>
                                    </li>
                                    <li class="header__baner_feature header__baner_feature2">
                                        Без растительных <br>жиров
                                        <span class="baner_feature__after baner_feature__after2"></span>
                                    </li>
                                    <div class="d-block w-100 d-sm-none"></div>
                                    <li class="header__baner_feature header__baner_feature3">
                                        Без усилителей <br>вкуса
                                        <span class="baner_feature__after baner_feature__after3"></span>
                                    </li>
                                    <li class="header__baner_feature header__baner_feature4">
                                        Без <br>трансжиров
                                        <span class="baner_feature__after baner_feature__after4"></span>
                                    </li>
                                    <li class="header__baner_feature header__baner_feature5">
                                        Без <br>ГМО
                                        <span class="baner_feature__after baner_feature__after5"></span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section id="main-page" class="main-page">
            <div class="container">
