<?php get_header(); ?>
<div class="bc">
    <div class="container">
        <?php echo woocommerce_breadcrumb(); ?>
    </div>
</div>
<section class="section__main">
    <div class="container">
        <div class="sidebar">
            <div class="sidebar__block">
                <div class="sidebar__hl sidebar__hl_store">Store</div>
                <div class="sidebar__line"></div>
                <div class="sidebar__store">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/store-image.jpg" class="sidebar__store_img">
                    <div class="sidebar__store_title">Accessories Crystal Jewelry</div>
                    <div class="sidebar__store_country">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/geo.svg" alt="" class="sidebar__store_country-geo">
                        <div class="sidebar__store_country-c">Australia</div>
                    </div>
                    <div class="sidebar__store_rating">
                        <div class="sidebar__store_rating_item"></div>
                        <div class="sidebar__store_rating_item"></div>
                        <div class="sidebar__store_rating_item"></div>
                        <div class="sidebar__store_rating_item sidebar__store_rating_item-half"></div>
                        <div class="sidebar__store_rating_item sidebar__store_rating_item-empty"></div>
                    </div>
                    <div class="sidebar__store_conversation">
                        <div class="sidebar__store_conversation_text">Start a conversation</div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/chat.svg" class="sidebar__store_conversation_chat">
                    </div>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="content__filters">
                <div class="content__filters_item">
                    <div class="content__filters_name">Sort</div>
                    <div class="content__filters_value">By default</div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome/arrow-down.svg" alt="">
                </div>
                <div class="content__filters_item">
                    <div class="content__filters_name">Price</div>
                    <div class="content__filters_value">Any</div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome/arrow-down.svg" alt="">
                </div>
                <div class="content__filters_item">
                    <div class="content__filters_name">Color</div>
                    <div class="content__filters_value">All</div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome/arrow-down.svg" alt="">
                </div>
                <div class="content__filters_item">
                    <div class="content__filters_name">Material</div>
                    <div class="content__filters_value">All</div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome/arrow-down.svg" alt="">
                </div>
                <div class="content__filters_item">
                    <div class="content__filters_name">Brand</div>
                    <div class="content__filters_value">All</div>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome/arrow-down.svg" alt="">
                </div>
            </div>
            <div class="content__items">

                <?php
                if ( woocommerce_product_loop() ) {

                    woocommerce_product_loop_start();

                    if ( wc_get_loop_prop( 'total' ) ) {
                        while ( have_posts() ) {
                            the_post();

                            wc_get_template_part( 'content', 'product' );
                        }
                    }

                    woocommerce_product_loop_end();

                    /**
                     * Hook: woocommerce_after_shop_loop.
                     *
                     * @hooked woocommerce_pagination - 10
                     */
                    do_action( 'woocommerce_after_shop_loop' );
                } else {
                    /**
                     * Hook: woocommerce_no_products_found.
                     *
                     * @hooked wc_no_products_found - 10
                     */
                    do_action( 'woocommerce_no_products_found' );
                } ?>

                <!-- <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/1.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/2.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/3.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/5.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/1.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/2.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/3.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/5.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/4.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div>
                <div class="content__item">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/card/5.jpg" alt="sneakers" class="content__item_img">
                    <div class="content__item_title">Sneakers Women Spring Sport Shoes Breathable Running</div>
                    <div class="content__item-bottom">
                        <div class="content__item-bottom_price">$16.44</div>
                        <div class="content__item-action">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/cart.svg" class="content__item-action_item">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/wish.svg" class="content__item-action_item">
                        </div>
                    </div>
                </div> -->
            </div>
            <div class="button button_purple button_medium content__button">SHOW MORE</div>
        </div>
</section>
<?php get_footer(); ?>
