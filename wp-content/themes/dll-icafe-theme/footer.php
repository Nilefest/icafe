<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DLL_iCafe_Theme
 */

?>
</div>
</section>
<footer id="footer" class="footer">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-4">
                <div class="footer__block footer__links__left">
                    <h6 class="footer__subtitle">
                        I cafe menu
                    </h6>
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'links-footer-left',
                                'container'  => false,
                                'items_wrap'      => '%3$s',
                            )
                        );
                    ?>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer__block">
                    <h6 class="footer__subtitle text-center">
                        График обработки и выдачи заказов:
                    </h6>
                    <p class="footer__text footer__schedule_order text-center">
                        Пн - Вс с 9:00-21:00
                    </p>
                    <a href="tel:+380950727837" class="footer__link footer__phone text-center">+38 095 072 7837</a>
                </div>
                <div class="footer__block mt-2">
                    <h6 class="footer__subtitle text-center">
                        Адрес
                    </h6>
                    <p class="footer__text footer__address justify-content-center d-flex">
                        ТЦ Магелан, 1 этаж <br>Академика Глушкова 13в
                    </p>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="footer__block text-md-right">
                    <h6 class="footer__subtitle">
                        Связаться с нами
                    </h6>
                    <p class="footer__text footer__schedule_order">
                        Пн - Вс с 9:00-21:00
                    </p>
                    <a href="mailto:icafework@gmail.com" class="footer__link footer__email">icafework@gmail.com</a>
                    <div class="footer__link_wrap footer__social_wrap">
                        <a href="https://www.facebook.com/" class="footer__social_link footer__social_facebook"></a>
                        <a href="https://www.instagram.com/" class="footer__social_link footer__social_instagram"></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12 col-md-4 d-flex align-items-md-end justify-content-center justify-content-md-end order-md-3">
                <div class="footer__block text-md-right">
                    <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'links-footer-right',
                                'container'  => false,
                                'items_wrap'      => '%3$s',
                            )
                        );
                    ?>
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex align-items-md-end justify-content-center justify-content-md-start order-md-1">
                <div class="footer__block flex-row">
                    <img src="<?php echo _S_DIR_ASSETS; ?>img/icons/for_all/mastercard.png" alt="" class="footer__card footer__card_master">
                    <img src="<?php echo _S_DIR_ASSETS; ?>img/icons/for_all/visa_white.png" alt="" class="footer__card footer__card_visa">
                </div>
            </div>
            <div class="col-12 col-md-4 d-flex align-items-md-end justify-content-center order-md-2">
                <div class="footer__block footer__block_last">
                    <p class="footer__text footer__text_bold text-center">
                        © 2020 Icafe
                    </p>
                    <div class="footer__block footer__block_last flex-row justify-content-center">
                        <p class="footer__text footer__all_rights">
                            Все права защищены.
                        </p>
                        <a href="/admin" id="footer__login" class="footer__login">Вход</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>

</html>
