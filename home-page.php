<?php get_header(); ?>
    <section class="section__home">
        <div class="container">
            <div class="content">
                <div class="section__home_head">
                    <div class="section__home_hl">Categories</div>
                    <div class="section__home_more">See all</div>
                </div>
                <div class="content__slider">
                    <div id="categories-slider" class="content__items">
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
                            $woo_cat_count = $woo_cat->count; //category count
                            $cat_link = get_category_link( $woo_cat_id );

                            echo '<div class="content__item">';
                            $category_thumbnail_id = get_woocommerce_term_meta($woo_cat_id, 'thumbnail_id', true);
                            $thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
                            echo '<img src="' . $thumbnail_image_url . '" class="content__item_img" />';
                            echo '<a href="'.$cat_link.'"><div class="content__item_title content__item_categories-title">' . $woo_cat_name . '<span> (' . $woo_cat_count .')</span></div></a>';
                            echo "</div>";
                        }
                        ?>
                    </div>
                    <div class="content__items_arrow content__items_parrow2"></div>
                    <div class="content__items_arrow content__items_narrow2"></div>
                </div>
                <div class="section__home_head">
                    <div class="section__home_hl">Newest</div>
                    <div class="section__home_more"><a href="<?php echo wc_get_page_permalink('shop'); ?>">See all</a></div>
                </div>
                <div class="content__slider">
                    <div id="newest-slider" class="content__items">
                        <?php
                        //products
                        $loop = new WP_Query( array(
                            'post_type' => 'product',
                            'posts_per_page' => 10,
                            'orderby' => 'id',
                            'order' => 'DESC',
                        ));

                        while ( $loop->have_posts() ): $loop->the_post();

                            $thumb = get_the_post_thumbnail_url();
                            ?>

                            <div class="content__item">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo $thumb; ?>" alt="sneakers" class="content__item_img">
                                </a>
                                <div class="content__item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div class="content__item-bottom">
                                    <div class="content__item-bottom_price"><?php woocommerce_template_loop_price(); ?></div>
                                    <div class="content__item-action">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item" onclick="add_to_cart(<?php echo get_the_ID(); ?>)" >
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                                    </div>
                                </div>
                            </div>


                        <?php endwhile; ?>


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
                        <?php
                        $args = array(
                            'post_type' => 'product',
                            'meta_key' => 'total_sales',
                            'orderby' => 'meta_value_num',
                            'posts_per_page' => 8
                        );

                        while ( $loop->have_posts() ): $loop->the_post();

                            $thumb = get_the_post_thumbnail_url();
                            ?>

                            <div class="content__item">
                                <a href="<?php the_permalink(); ?>">
                                    <img src="<?php echo $thumb; ?>" alt="sneakers" class="content__item_img">
                                </a>
                                <div class="content__item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                                <div class="content__item-bottom">
                                    <div class="content__item-bottom_price"><?php woocommerce_template_loop_price(); ?></div>
                                    <div class="content__item-action">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/cart.svg" class="content__item-action_item" onclick="add_to_cart(<?php echo get_the_ID(); ?>)">
                                        <img src="<?php echo get_stylesheet_directory_uri() ?>/images/market/icons/wish.svg" class="content__item-action_item">
                                    </div>
                                </div>
                            </div>
                        <?php endwhile; ?>
                        ?>
                    </div>
                    <div class="button button_purple button_medium content__button">SHOW MORE</div>
                </div>
    </section>


<?php get_footer(); ?>