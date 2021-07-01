<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ibma_Market
 */

?>

<footer class="footer">
    <div class="container">
        <div class="footer__column footer__column_custom">
            <div class="footer__logo header-up__logo"><span>Imba</span>Market</div>
            <div class="footer__contacts">
                <div class="footer__contacts_item">
                    <img src="./images/market/icons/mail.svg" class="footer__contacts_item-icon">
                    <a href="mailto:imba@imbamarket.com" class="footer__contacts_item-info">imba@imbamarket.com</a>
                </div>
                <div class="footer__contacts_item">
                    <img src="./images/market/icons/tg.svg" class="footer__contacts_item-icon">
                    <a href="./" class="footer__contacts_item-info">telegram @imba_market </a>
                </div>
                <div class="footer__contacts_item">
                    <img src="./images/market/icons/phone.svg" class="footer__contacts_item-icon">
                    <a href="tel:+61416103106" class="footer__contacts_item-info">+ 61 416 103 106</a>
                </div>
            </div>
            <div class="footer__copy">© 2021 ImbaMarket. All rights reserved.</div>
        </div>
        <div class="footer-nav">
            <div class="footer__column">
                <div class="footer__categories">Shop</div>
                <a href="" class="footer__categories_item">Home</a>
                <a href="" class="footer__categories_item">Categories</a>
                <a href="" class="footer__categories_item">Top deals</a>
                <a href="" class="footer__categories_item">Newest</a>
            </div>
            <div class="footer__column">
                <div class="footer__categories">Details</div>
                <a href="" class="footer__categories_item">Sample page</a>
                <a href="" class="footer__categories_item">Vendor Membership</a>
                <a href="" class="footer__categories_item">Vendor Registration</a>
                <a href="" class="footer__categories_item">Delivery</a>
            </div>
            <div class="footer__column">
                <div class="footer__categories">Account</div>
                <a href="" class="footer__categories_item">My account</a>
                <a href="" class="footer__categories_item">Cart</a>
                <a href="" class="footer__categories_item">Wishlist</a>
            </div>
        </div>
        <div class="footer__column footer__column_custom">
            <div class="footer__support">
                <div class="footer__support_text">We are ready to support <br> each customer</div>
                <div class="footer__support_btn">support</div>
            </div>
        </div>
        <div class="footer__column footer__column_custom footer__column-mobile">
            <div class="footer__logo header-up__logo"><span>Imba</span>Market</div>
            <div class="footer__contacts">
                <div class="footer__contacts_item">
                    <img src="./images/market/icons/mail.svg" class="footer__contacts_item-icon">
                    <a href="mailto:imba@imbamarket.com" class="footer__contacts_item-info">imba@imbamarket.com</a>
                </div>
                <div class="footer__contacts_item">
                    <img src="./images/market/icons/tg.svg" class="footer__contacts_item-icon">
                    <a href="./" class="footer__contacts_item-info">telegram @imba_market </a>
                </div>
                <div class="footer__contacts_item">
                    <img src="./images/market/icons/phone.svg" class="footer__contacts_item-icon">
                    <a href="tel:+61416103106" class="footer__contacts_item-info">+ 61 416 103 106</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!--<script-->
<!--        src="https://code.jquery.com/jquery-3.6.0.min.js"-->
<!--        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="-->
<!--        crossorigin="anonymous"></script>-->
<!--<script src="./js/slick.min.js"></script>-->
<!--<script src="./js/main.js"></script>-->
<?php wp_footer(); ?>
</body>
</html>