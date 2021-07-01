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
                <div class="sidebar__hl">All Categories</div>
                <div class="sidebar__line"></div>

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
                    $woo_cat_name = $woo_cat->name; //category name
                    $woo_cat_id = $woo_cat->id;
                    $woo_cat_link = get_category_link( $woo_cat->term_id ); //permalink
                    ?>

                    <a href="<?php echo $woo_cat_link; ?>" class="sidebar__item">
                        <div class="sidebar__item_text"><?php echo $woo_cat_name; ?></div>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome/arrow-down.svg" class="sidebar__item_icon">
                    </a>
                <?php } ?>
            </div>
        </div>
        <div class="content">

            <div class="content__filters">
                <div class="content__filters_item">
                    <div class="content__filters_name">Sort</div>
                    <select name="" id="price-filter">
                        <option value="default" id="price-low">By default</option>
                        <option value="Low" id="price-hieght">Low to hieght</option>
                        <option value="Hieght">Hieght to low</option>
                    </select>

                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/welcome/arrow-down.svg" alt="">
                </div>

                <?php do_action('attrs_filter'); ?>
<!--                <div class="content__filters_item">-->
<!--                    <div class="content__filters_name">Price</div>-->
<!--                    <div class="content__filters_value">Any</div>-->
<!--                    <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/welcome/arrow-down.svg" alt="">-->
<!--                </div>-->
<!--                <div class="content__filters_item">-->
<!--                    <div class="content__filters_name">Color</div>-->
<!--                    <div class="content__filters_value">All</div>-->
<!--                    <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/welcome/arrow-down.svg" alt="">-->
<!--                </div>-->
<!--                <div class="content__filters_item">-->
<!--                    <div class="content__filters_name">Material</div>-->
<!--                    <div class="content__filters_value">All</div>-->
<!--                    <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/welcome/arrow-down.svg" alt="">-->
<!--                </div>-->
<!--                <div class="content__filters_item">-->
<!--                    <div class="content__filters_name">Brand</div>-->
<!--                    <div class="content__filters_value">All</div>-->
<!--                    <img src="--><?php //echo get_stylesheet_directory_uri(); ?><!--/images/welcome/arrow-down.svg" alt="">-->
<!--                </div>-->
            </div>
            <div class="content__items">

                <!--                My products-->
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
                <!--                End-->

            </div>
            <div class="button button_purple button_medium content__button">SHOW MORE</div>
        </div>
</section>

<?php get_footer(); ?>
