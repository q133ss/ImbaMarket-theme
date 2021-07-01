<?php wp_head(); ?>

<body>
<header class="header">
    <div class="header-up">
        <div class="container">
            <div class="header-up__logo"><span>Imba</span>Market</div>
            <div class="header-up__search">
                <input type="text" placeholder="Search product..." class="header-up__search_input">
            </div>
            <div class="header-up__panel">
                <div class="header-up__panel_item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/acc.svg" class="header-up__panel_img">
                    <div class="header-up__panel_text">My account</div>
                </div>
                <div class="header-up__panel_item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="header-up__panel_img">
                    <div class="header-up__panel_text">Wishlist</div>
                </div>
                <div class="header-up__panel_item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="header-up__panel_img">
                    <div class="header-up__panel_text">Cart</div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-down">
        <div class="container">
            <div class="header-nav">
                <div class="header__links">
                    <a href="./" class="header__links_link">Home</a>
                    <a href="./" class="header__links_link">Shop</a>
                    <a href="./" class="header__links_link">Sample Page</a>
                    <a href="./" class="header__links_link">Vendor Membership</a>
                    <a href="./" class="header__links_link">Vendor Registration</a>
                </div>
                <div class="header__buy">
                    <div class="header__buy_price">$40.28</div>
                    <div class="header__buy_items">3 items</div>
                    <div class="header__buy_button">Buy</div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="categories">
    <div class="container">
        <div class="categories__all">
            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/burger.svg" class="categories__all_burger">
            <div class="categories__all_text">All categories</div>
        </div>
        <a href="#" class="categories__item">Health & Beauty</a>
        <a href="#" class="categories__item">Home & Kitchen</a>
        <a href="#" class="categories__item">Electronics</a>
        <a href="#" class="categories__item">Pet products</a>
        <a href="#" class="categories__item">Men's Clothing</a>
        <a href="#" class="categories__item">Footwear</a>
        <a href="#" class="categories__item">Accessories</a>
    </div>
</div>
<section class="section__home">
    <div class="container">
        <div class="content">
            <div class="section__home_head">
                <div class="section__home_hl">Categories</div>
                <div class="section__home_more">See all</div>
            </div>
            <div class="content__slider">
                <div id="categories-slider" class="content__items">
<!--                    <div class="content__item">-->
<!--                        <img src="--><?php //echo get_stylesheet_directory_uri() ?><!--/images/card/1.jpg" alt="sneakers" class="content__item_img">-->
<!--                        <div class="content__item_title content__item_categories-title">Health & Beauty <span>(854)</span></div>-->
<!--                    </div>-->
<!--                    <div class="content__item">-->
<!--                        <img src="--><?php //echo get_stylesheet_directory_uri() ?><!--/images/card/2.jpg" alt="sneakers" class="content__item_img">-->
<!--                        <div class="content__item_title content__item_categories-title">Home & Kitchen <span>(388)</span></div>-->
<!--                    </div>-->
<!--                    <div class="content__item">-->
<!--                        <img src="--><?php //echo get_stylesheet_directory_uri() ?><!--/images/card/3.jpg" alt="sneakers" class="content__item_img">-->
<!--                        <div class="content__item_title content__item_categories-title">Electronics <span>(926)</span></div>-->
<!--                    </div>-->
<!--                    <div class="content__item">-->
<!--                        <img src="--><?php //echo get_stylesheet_directory_uri() ?><!--/images/card/4.jpg" alt="sneakers" class="content__item_img">-->
<!--                        <div class="content__item_title content__item_categories-title">Footwear <span>(578)</span></div>-->
<!--                    </div>-->
<!--                    <div class="content__item">-->
<!--                        <img src="--><?php //echo get_stylesheet_directory_uri() ?><!--/images/card/4.jpg" alt="sneakers" class="content__item_img">-->
<!--                        <div class="content__item_title">Health & Beauty <span>(854)</span></div>-->
<!--                    </div>-->

                    <?php
                    //Categories
                    $prod_cat_args = array(
                        'taxonomy'    => 'product_cat',
                        'orderby'     => 'id', // здесь по какому полю сортировать
                        'hide_empty'  => false, // скрывать категории без товаров или нет
                        'parent'      => 0 // id родительской категории
                    );

$woo_categories = get_categories( $prod_cat_args );
foreach ( $woo_categories as $woo_cat ) {
    $woo_cat_id = $woo_cat->term_id; //category ID
    $woo_cat_name = $woo_cat->name; //category name
    $woo_cat_slug = $woo_cat->slug; //category slug
    echo '<div class="content__item">';
    $category_thumbnail_id = get_woocommerce_term_meta($woo_cat_id, 'thumbnail_id', true);
    $thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
    echo '<img src="' . $thumbnail_image_url . '" class="content__item_img" />';
    echo '<div class="content__item_title content__item_categories-title">' . $woo_cat_name . '<span>' . $category->count; . '</span>></div>';
      echo "</div>";
  }
                    ?>
                </div>
                <div class="content__items_arrow content__items_parrow2"></div>
                <div class="content__items_arrow content__items_narrow2"></div>
            </div>
            <div class="section__home_head">
                <div class="section__home_hl">Newest</div>
                <div class="section__home_more">See all</div>
            </div>
            <div class="content__slider">
                <div id="newest-slider" class="content__items">
                    <div class="content__item">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/1.jpg" alt="sneakers" class="content__item_img">
                        <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                        <div class="content__item-bottom">
                            <div class="content__item-bottom_price">$16.44</div>
                            <div class="content__item-action">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                            </div>
                        </div>
                    </div>
                    <div class="content__item">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/2.jpg" alt="sneakers" class="content__item_img">
                        <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                        <div class="content__item-bottom">
                            <div class="content__item-bottom_price">$16.44</div>
                            <div class="content__item-action">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                            </div>
                        </div>
                    </div>
                    <div class="content__item">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/3.jpg" alt="sneakers" class="content__item_img">
                        <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                        <div class="content__item-bottom">
                            <div class="content__item-bottom_price">$16.44</div>
                            <div class="content__item-action">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                            </div>
                        </div>
                    </div>
                    <div class="content__item">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                        <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                        <div class="content__item-bottom">
                            <div class="content__item-bottom_price">$16.44</div>
                            <div class="content__item-action">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                            </div>
                        </div>
                    </div>
                    <div class="content__item">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                        <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                        <div class="content__item-bottom">
                            <div class="content__item-bottom_price">$16.44</div>
                            <div class="content__item-action">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                            </div>
                        </div>
                    </div>
                    <div class="content__item">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                        <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                        <div class="content__item-bottom">
                            <div class="content__item-bottom_price">$16.44</div>
                            <div class="content__item-action">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                            </div>
                        </div>
                    </div>
                    <div class="content__item">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                        <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                        <div class="content__item-bottom">
                            <div class="content__item-bottom_price">$16.44</div>
                            <div class="content__item-action">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                                <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content__items_arrow content__items_parrow"></div>
                <div class="content__items_arrow content__items_narrow"></div>
            </div>
            <section class="section__best">
                <h2 class="section__headline2">Best products just for you</h2>
                <div class="section__best_block">
                    <div class="section__best_item">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/genuine.png" class="section__best_item-image">
                        <div class="section__best_item-title">Genuine products</div>
                        <div class="section__best_item-text">All products are confirmed by the manufacturer's certificate</div>
                    </div>
                    <div class="section__best_item">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/delivery.png" class="section__best_item-image">
                        <div class="section__best_item-title">Delivery</div>
                        <div class="section__best_item-text">We solve issues related to the delivery of goods</div>
                    </div>
                    <div class="section__best_item">
                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/quality.png" class="section__best_item-image">
                        <div class="section__best_item-title">Quality assurance</div>
                        <div class="section__best_item-text">All products are confirmed by the manufacturer's certificate</div>
                    </div>
                </div>
            </section>
            <div class="section__home_head">
                <div class="section__home_hl">Top deals</div>
                <div class="section__home_more">See all</div>
            </div>
            <div class="content__items">
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/1.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/2.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/3.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
            </div>
            <div class="button button_purple button_medium content__button">SHOW MORE</div>
        </div>
</section>
<footer class="footer">
    <div class="container">
        <div class="footer__column footer__column_custom">
            <div class="footer__logo header-up__logo"><span>Imba</span>Market</div>
            <div class="footer__contacts">
                <div class="footer__contacts_item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/mail.svg" class="footer__contacts_item-icon">
                    <a href="mailto:imba@imbamarket.com" class="footer__contacts_item-info">imba@imbamarket.com</a>
                </div>
                <div class="footer__contacts_item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/tg.svg" class="footer__contacts_item-icon">
                    <a href="./" class="footer__contacts_item-info">telegram @imba_market </a>
                </div>
                <div class="footer__contacts_item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/phone.svg" class="footer__contacts_item-icon">
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
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/mail.svg" class="footer__contacts_item-icon">
                    <a href="mailto:imba@imbamarket.com" class="footer__contacts_item-info">imba@imbamarket.com</a>
                </div>
                <div class="footer__contacts_item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/tg.svg" class="footer__contacts_item-icon">
                    <a href="./" class="footer__contacts_item-info">telegram @imba_market </a>
                </div>
                <div class="footer__contacts_item">
                    <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/phone.svg" class="footer__contacts_item-icon">
                    <a href="tel:+61416103106" class="footer__contacts_item-info">+ 61 416 103 106</a>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php get_footer(); ?>
</body>
</html>