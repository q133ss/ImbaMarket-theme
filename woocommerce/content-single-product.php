<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>


 <div class="product__block">
                <h1 class="product__about_title-m">Frying Egg Pan Mold Four Hole Artifact Non-stick Pancake Pan Pan Home Breakfast</h1>
                <div class="product__slider">
                    <div class="product__slider_block">
                        <div class="product__slider_photos">
                            <!-- <img src="./images/product/mini-1.jpg" class="product__slider_photos-photo">
                            <img src="./images/product/mini-2.jpg" class="product__slider_photos-photo">
                            <img src="./images/product/mini-3.jpg" class="product__slider_photos-photo">
                            <img src="./images/product/mini-4.jpg" class="product__slider_photos-photo"> -->
                        </div>
                        <div class="product__slider_photo">
                            <!-- <img src="./images/product/main.jpg" alt="" class="product__slider_photo-item"> -->
                            <?php  imba_post_thumbnail(); //the_post_thumbnail(); ?>
                        </div>
                    </div>

                    <?php
                    //Dokan info for vendor
                    $seller = get_post_field( 'post_author', $product->get_id());
                    $author     = get_user_by( 'id', $seller );
                    $store_info = dokan_get_store_info( $author->ID );
                    ?>

                    <div class="product__store">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/store-image.jpg" alt="" class="product__store_image">
                        <div class="product__store_info">
                            <div class="product__store_name">
                                <?php
                                    printf( 'Sold by: <a href="%s">%s</a>', dokan_get_store_url( $author->ID ), $store_info['store_name'] );
                                ?>
                            </div>
                            <div class="sidebar__store_title product__store_title">Accessories Crystal Jewelry</div>
                            <div class="sidebar__store_conversation product__store_conversation">
                                <div class="sidebar__store_conversation_text">Start a conversation</div>
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/market/icons/chat.svg" class="sidebar__store_conversation_chat">
                            </div>
                        </div>
                    </div>
                    <div class="product__fc">
                        <div class="product__fc_title">Warranty</div>
                        <div class="product__fc_block">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product/gen.svg" alt="" class="product__fc_image">
                            <div class="product__fc_text">Product doesn't match the description? <br>
                                Contact us within 30 days after you receive it!</div>
                        </div>
                    </div>
                </div>
                <div class="product__about">
                    <h1 class="product__about_title"><?php do_action('imba_product_title'); ?></h1>
                    <div class="product__about_prices">
                        <div class="product__about_prices-price"><?php do_action('imba_product_price') ?></div>
                    </div>
                    <div class="product__about_actions">

                        <?php
                        global $product;

                        $args = array(
                            'post_type'     => 'product_variation',
                            'post_status'   => array( 'private', 'publish' ),
                            'numberposts'   => -1,
                            'orderby'       => 'menu_order',
                            'order'         => 'asc',
                            'post_parent'   => get_the_ID() // get parent post-ID
                            );
                            $variations = get_posts( $args );

                            foreach ( $variations as $variation ) {
                                // get variation ID
                                $variation_ID = $variation->ID;
                        }

                        if( $product->is_type( 'simple' ) ){ ?>
                        <div class="button product__about_actions-button" onclick="add_to_cart(<?php echo get_the_ID(); ?>)">Add to cart<?php do_action('imba_product_add_to_cart'); ?></div>
                        <?php }else{
                            ?>
                            <div class="button product__about_actions-button" onclick="add_to_cart(<?php echo $variation_ID; ?>)">Add to cart<?php do_action('imba_product_add_to_cart'); ?></div>
                            <?php } ?>
                        <div class="button button_purple product__about_actions-button">Buy now</div>
                        <div class="product__about_actions-favorite">Favorite</div>
                    </div>


                    <div class="product__custom">
                        <!-- <div class="product__custom_head">
                            <div class="product__custom_title">Color</div>
                            <div class="product__custom_value">Like the picture</div>
                        </div>
 -->
                        <div class="product__custom_head">
                            <?php //do_action('woocommerce_single_product_summary'); ?>
                            <?php do_action('imba_product_attributes'); ?>
                        </div>

<!--                         <div class="product__custom_items">
                            <div class="product__custom_item product__custom_item-image product__custom_item-active">
                                <img src="./images/product/color.jpg" alt="" class="product__custom_item-pic">
                            </div>
                        </div> -->
 <!--                        <div class="product__custom_head">
                            <div class="product__custom_title">Size</div>
                            <div class="product__custom_value">18 cm</div>
                        </div> -->
<!--                         <div class="product__custom_items">
                            <div class="product__custom_item product__custom_item-active">
                                18 cm
                            </div>
                            <div class="product__custom_item">
                                20 cm
                            </div>
                        </div> -->
                    </div>

                     <script>
                            	
                            	function product_desc(){
								<?php

								$cont = get_the_content();
								$filter_cont = strip_tags($cont);
								?>                            		
                            	var cont = "<? echo $cont ?>";
                            		document.getElementById('descr').innerHTML = cont;
                            		document.getElementById("product__desc_full").style.display = "none";
                            	}
                            </script>

                    <div class="product__desc">
                        <div class="product__desc_head">
                            <div class="product__desc_hl">Description</div>                            
                            <div class="product__desc_full" id="product__desc_full" onclick="product_desc()">Show full description</div>
                        </div>
                        <div class="product__desc_text" id="descr">
                            <?php
                            	$excerpt = get_the_content();
                            	echo mb_substr($excerpt,0,50, "utf-8");
                            
                            ?>
                        </div>
                    </div>
                    <div class="product__desc_line"></div>
                    <div class="product__fc product__fc-m">
                        <div class="product__fc_title">Warranty</div>
                        <div class="product__fc_block">
                            <img src="./images/product/gen.svg" alt="" class="product__fc_image">
                            <div class="product__fc_text">Product doesn't match the description? <br>
                                Contact us within 30 days after you receive it!</div>
                        </div>
                    </div>
                    <div class="product__store product__store-m">
                        <img src="./images/market/store-image.jpg" alt="" class="product__store_image">
                        <div class="product__store_info">
                            <div class="product__store_name">Store</div>
                            <div class="sidebar__store_title product__store_title">Accessories Crystal Jewelry</div>
                            <div class="sidebar__store_conversation product__store_conversation">
                                <div class="sidebar__store_conversation_text">Start a conversation</div>
                                <img src="./images/market/icons/chat.svg" class="sidebar__store_conversation_chat">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section__home_head">
                <div class="section__home_hl">Similar items</div>
            </div>
             <div class="content__items">
                 
                <?php do_action('imba_product_related'); ?>

                <?php
global $product;

if( ! is_a( $product, 'WC_Product' ) ){
    $product = wc_get_product(get_the_id());
}

$args = array(
    'posts_per_page' => 8,
    'columns'        => 4,
    'orderby'        => 'rand',
    'order'          => 'desc',
);

$args['related_products'] = array_filter( array_map( 'wc_get_product', wc_get_related_products( $product->get_id(), $args['posts_per_page'], $product->get_upsell_ids() ) ), 'wc_products_array_filter_visible' );
$args['related_products'] = wc_products_array_orderby( $args['related_products'], $args['orderby'], $args['order'] );

// Set global loop values.
wc_set_loop_prop( 'name', 'related' );
wc_set_loop_prop( 'columns', $args['columns'] );

wc_get_template( 'single-product/related.php', $args );
                ?>

                </div>
            </div>
            <div class="button button_purple button_medium content__button">SHOW MORE</div>
