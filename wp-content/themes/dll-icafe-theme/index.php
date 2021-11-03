<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package DLL_iCafe_Theme
 */

get_header();
?>
<div class="row">
    <div class="col-2 col-md-1">
        <div class="left-menu">
            <input type="checkbox" id="left-menu__checkbox" class="left-menu__checkbox">
            <label for="left-menu__checkbox" class="left-menu__main-word"></label>
            <div class="qqq">
                <div class="left-menu__categories">
                    <a href="/shop" class="left-menu__category left-menu__category_salad">
                        <div class="left-menu__icon_container">
                            <span class="left-menu__icon"></span>
                        </div>
                        <p class="left-menu__name">
                            Салаты
                        </p>
                    </a>
                    <a href="/shop" class="left-menu__category left-menu__category_pasta">
                        <div class="left-menu__icon_container">
                            <span class="left-menu__icon"></span>
                        </div>
                        <p class="left-menu__name">
                            Паста
                        </p>
                    </a>
                    <a href="/shop" class="left-menu__category left-menu__category_soup">
                        <div class="left-menu__icon_container">
                            <span class="left-menu__icon"></span>
                        </div>
                        <p class="left-menu__name">
                            Первые блюда
                        </p>
                    </a>
                    <a href="/shop" class="left-menu__category left-menu__category_bruschetta">
                        <div class="left-menu__icon_container">
                            <span class="left-menu__icon"></span>
                        </div>
                        <p class="left-menu__name">
                            Брускетты
                        </p>
                    </a>
                    <a href="/shop" class="left-menu__category left-menu__category_roll">
                        <div class="left-menu__icon_container">
                            <span class="left-menu__icon"></span>
                        </div>
                        <p class="left-menu__name">
                            Роллы
                        </p>
                    </a>
                    <a href="/shop" class="left-menu__category left-menu__category_sandwich">
                        <div class="left-menu__icon_container">
                            <span class="left-menu__icon"></span>
                        </div>
                        <p class="left-menu__name">
                            Сендвичи
                        </p>
                    </a>
                    <a href="/shop" class="left-menu__category left-menu__category_dessert">
                        <div class="left-menu__icon_container">
                            <span class="left-menu__icon"></span>
                        </div>
                        <p class="left-menu__name">
                            Десерты
                        </p>
                    </a>
                    <a href="/shop" class="left-menu__category left-menu__category_drink">
                        <div class="left-menu__icon_container">
                            <span class="left-menu__icon"></span>
                        </div>
                        <p class="left-menu__name">
                            Напитки
                        </p>
                    </a>
                    <a href="/shop" class="left-menu__category left-menu__category_icecream">
                        <div class="left-menu__icon_container">
                            <span class="left-menu__icon"></span>
                        </div>
                        <p class="left-menu__name">
                            Мороженое
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-10 col-md-11">
        <section id="all-page-section" class="all-page-section">

            <div id="days-dish" class="days-dish">
                <h2 class="days-dish__title">
                    Блюда дня
                </h2>
                <div class="days-dish__multiple-items multiple-items">
                    <div class="days-dish__card card d-block">
                        <div class="days-dish__wrap">
                            <a href="dish.html" class="days-dish__link">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/hermes-rivera-OzBLe_Eg1mg-unsplash.jpg" class="days-dish__card-img-top card-img-top" alt="Фото Блюда">
                                <div class="days-dish__card-body card-body">
                                    <h5 class="days-dish__card-title days-dish__card-title_salad card-title">Салат "Цезарь" с креветками</h5>
                                    <p class="days-dish__card-text card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="menu__card-footer card-footer dish__footer">
                                <p class="menu__weight card-weight">
                                    Вес
                                    <span class="menu__weight card-weight_value">310</span>
                                    гр
                                </p>
                                <span class="menu__cost card-cost">
                                    123 грн
                                </span>
                                <input type="button" class="menu__to-order num_to_order card-to-order" value="Заказать">
                                <div class="count-dishes d-none">
                                    <div class="num-in">
                                        <span class="minus dis"></span>
                                        /
                                        <input type="text" class="in-num" value="0">
                                        /
                                        <span class="plus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="days-dish__card card d-block">
                        <div class="days-dish__wrap">
                            <a href="dish.html" class="days-dish__link">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/carly-jayne-Lv174o7fn7Y-unsplash.jpg" class="days-dish__card-img-top card-img-top" alt="Фото Блюда">
                                <div class="days-dish__card-body card-body">
                                    <h5 class="days-dish__card-title days-dish__card-title_pasta card-title">Паста</h5>
                                    <p class="days-dish__card-text card-text">This is a wider card with supporting text below as. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer</p>
                                </div>
                            </a>
                            <div class="menu__card-footer card-footer dish__footer">
                                <p class="menu__weight card-weight">
                                    Вес
                                    <span class="menu__weight card-weight_value">310</span>
                                    гр
                                </p>
                                <span class="menu__cost card-cost">
                                    123 грн
                                </span>
                                <input type="button" class="menu__to-order num_to_order card-to-order" value="Заказать">
                                <div class="count-dishes d-none">
                                    <div class="num-in">
                                        <span class="minus dis"></span>
                                        /
                                        <input type="text" class="in-num" value="0">
                                        /
                                        <span class="plus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="days-dish__card card d-block">
                        <div class="days-dish__wrap">
                            <a href="dish.html" class="days-dish__link">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/chris-a-tweten-olpNKfEqvwA-unsplash.jpg" class="days-dish__card-img-top card-img-top" alt="Фото Блюда">
                                <div class="days-dish__card-body card-body">
                                    <h5 class="days-dish__card-title days-dish__card-title_soup card-title">Суп</h5>
                                    <p class="days-dish__card-text card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="menu__card-footer card-footer dish__footer">
                                <p class="menu__weight card-weight">
                                    Вес
                                    <span class="menu__weight card-weight_value">310</span>
                                    гр
                                </p>
                                <span class="menu__cost card-cost">
                                    123 грн
                                </span>
                                <input type="button" class="menu__to-order num_to_order card-to-order" value="Заказать">
                                <div class="count-dishes d-none">
                                    <div class="num-in">
                                        <span class="minus dis"></span>
                                        /
                                        <input type="text" class="in-num" value="0">
                                        /
                                        <span class="plus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="days-dish__card card d-block">
                        <div class="days-dish__wrap">
                            <a href="dish.html" class="days-dish__link">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/chris-a-tweten-olpNKfEqvwA-unsplash.jpg" class="days-dish__card-img-top card-img-top" alt="Фото Блюда">
                                <div class="days-dish__card-body card-body">
                                    <h5 class="days-dish__card-title days-dish__card-title_bruschetta card-title">Брускетта</h5>
                                    <p class="days-dish__card-text card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="menu__card-footer card-footer dish__footer">
                                <p class="menu__weight card-weight">
                                    Вес
                                    <span class="menu__weight card-weight_value">310</span>
                                    гр
                                </p>
                                <span class="menu__cost card-cost">
                                    123 грн
                                </span>
                                <input type="button" class="menu__to-order num_to_order card-to-order" value="Заказать">
                                <div class="count-dishes d-none">
                                    <div class="num-in">
                                        <span class="minus dis"></span>
                                        /
                                        <input type="text" class="in-num" value="0">
                                        /
                                        <span class="plus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="days-dish__card card d-block">
                        <div class="days-dish__wrap">
                            <a href="dish.html" class="days-dish__link">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/hermes-rivera-OzBLe_Eg1mg-unsplash.jpg" class="days-dish__card-img-top card-img-top" alt="Фото Блюда">
                                <div class="days-dish__card-body card-body">
                                    <h5 class="days-dish__card-title days-dish__card-title_roll card-title">Роллы</h5>
                                    <p class="days-dish__card-text card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="menu__card-footer card-footer dish__footer">
                                <p class="menu__weight card-weight">
                                    Вес
                                    <span class="menu__weight card-weight_value">310</span>
                                    гр
                                </p>
                                <span class="menu__cost card-cost">
                                    123 грн
                                </span>
                                <input type="button" class="menu__to-order num_to_order card-to-order" value="Заказать">
                                <div class="count-dishes d-none">
                                    <div class="num-in">
                                        <span class="minus dis"></span>
                                        /
                                        <input type="text" class="in-num" value="0">
                                        /
                                        <span class="plus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="days-dish__card card d-block">
                        <div class="days-dish__wrap">
                            <a href="dish.html" class="days-dish__link">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/victoria-shes-M9oXxlquKoI-unsplash.jpg" class="days-dish__card-img-top card-img-top" alt="Фото Блюда">
                                <div class="days-dish__card-body card-body">
                                    <h5 class="days-dish__card-title days-dish__card-title_sandwich card-title">Сендвич</h5>
                                    <p class="days-dish__card-text card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="menu__card-footer card-footer dish__footer">
                                <p class="menu__weight card-weight">
                                    Вес
                                    <span class="menu__weight card-weight_value">310</span>
                                    гр
                                </p>
                                <span class="menu__cost card-cost">
                                    123 грн
                                </span>
                                <input type="button" class="menu__to-order num_to_order card-to-order" value="Заказать">
                                <div class="count-dishes d-none">
                                    <div class="num-in">
                                        <span class="minus dis"></span>
                                        /
                                        <input type="text" class="in-num" value="0">
                                        /
                                        <span class="plus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="days-dish__card card d-block">
                        <div class="days-dish__wrap">
                            <a href="dish.html" class="days-dish__link">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/epicurrence-MtT0MMBT1Ws-unsplash.jpg" class="days-dish__card-img-top card-img-top" alt="Фото Блюда">
                                <div class="days-dish__card-body card-body">
                                    <h5 class="days-dish__card-title days-dish__card-title_dessert card-title">Десерт</h5>
                                    <p class="days-dish__card-text card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="days-dish__card-footer card-footer">
                                <p class="days-dish__weight card-weight">
                                    Вес
                                    <span class="days-dish__weight card-weight_value">310</span>
                                    гр
                                </p>
                                <span class="days-dish__cost card-cost">
                                    12 грн
                                </span>
                                <input type="button" class="days-dish__to-order card-to-order" value="Заказать">
                            </div>
                        </div>
                    </div>
                    <div class="days-dish__card card d-block">
                        <div class="days-dish__wrap">
                            <a href="dish.html" class="days-dish__link">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/mathilda-khoo-GCvnsLOM804-unsplash.jpg" class="days-dish__card-img-top card-img-top" alt="Фото Блюда">
                                <div class="days-dish__card-body card-body">
                                    <h5 class="days-dish__card-title days-dish__card-title_drink card-title">Напиток</h5>
                                    <p class="days-dish__card-text card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="days-dish__card-footer card-footer">
                                <p class="days-dish__weight card-weight">
                                    Вес
                                    <span class="days-dish__weight card-weight_value">310</span>
                                    гр
                                </p>
                                <span class="days-dish__cost card-cost">
                                    523 грн
                                </span>
                                <input type="button" class="days-dish__to-order card-to-order" value="Заказать">
                            </div>
                        </div>
                    </div>
                    <div class="days-dish__card card d-block">
                        <div class="days-dish__wrap">
                            <a href="dish.html" class="days-dish__link">
                                <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/brenda-godinez-MsTOg6rhRVk-unsplash.jpg" class="days-dish__card-img-top card-img-top" alt="Фото Блюда">
                                <div class="days-dish__card-body card-body">
                                    <h5 class="days-dish__card-title days-dish__card-title_icecream card-title">Мороженое</h5>
                                    <p class="days-dish__card-text card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </a>
                            <div class="menu__card-footer card-footer dish__footer">
                                <p class="menu__weight card-weight">
                                    Вес
                                    <span class="menu__weight card-weight_value">310</span>
                                    гр
                                </p>
                                <span class="menu__cost card-cost">
                                    123 грн
                                </span>
                                <input type="button" class="menu__to-order num_to_order card-to-order" value="Заказать">
                                <div class="count-dishes d-none">
                                    <div class="num-in">
                                        <span class="minus dis"></span>
                                        /
                                        <input type="text" class="in-num" value="0">
                                        /
                                        <span class="plus"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="main-gallery">
                <div class="row">
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="main-gallery__point">
                            <h2 class="main-gallery__title">
                                Якафе
                            </h2>
                            <p class="main-gallery__description">
                                В нашем уютном семейном кафе вы насладитесь новыми вкусовыми оттенками традиционных блюд и яркими европейскими вкусами бургеров, сендвичей, роллов, сочными салатами, оригинальными пастами, особенными десертами из отборных свежих ингредиентов.
                            </p>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="main-gallery__point">
                            <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/brenda-godinez-MsTOg6rhRVk-unsplash.jpg" alt="" class="main-gallery__img">
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="main-gallery__point">
                            <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/carly-jayne-Lv174o7fn7Y-unsplash.jpg" alt="" class="main-gallery__img">
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="main-gallery__point">
                            <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/chris-a-tweten-olpNKfEqvwA-unsplash.jpg" alt="" class="main-gallery__img">
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="main-gallery__point">
                            <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/epicurrence-MtT0MMBT1Ws-unsplash.jpg" alt="" class="main-gallery__img">
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="main-gallery__point">
                            <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/hermes-rivera-OzBLe_Eg1mg-unsplash.jpg" alt="" class="main-gallery__img">
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="main-gallery__point">
                            <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/mathilda-khoo-GCvnsLOM804-unsplash.jpg" alt="" class="main-gallery__img">
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="main-gallery__point">
                            <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/szabo-viktor-a3tC0sU9gpY-unsplash.jpg" alt="" class="main-gallery__img">
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg-4">
                        <div class="main-gallery__point">
                            <img src="<?php echo _S_DIR_ASSETS; ?>img/gallery/victoria-shes-M9oXxlquKoI-unsplash.jpg" alt="" class="main-gallery__img">
                        </div>
                    </div>
                </div>
            </section>
        </section>
    </div>
</div>
<?php
get_footer();
