<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="content__item">
	<?php imba_post_thumbnail(); ?>
	<div class="content__item_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>

	<div class="content__item-bottom">
        <div class="content__item-bottom_price">
            <?php if ( $price_html = $product->get_price_html() ) :
            echo $price_html;
            endif; ?>
        </div>
        <div class="content__item-action">
            <img src="<?php bloginfo('template_directory'); ?>/images/market/icons/cart.svg" class="content__item-action_item" onclick="add_to_cart(<?php echo get_the_ID(); ?>)">
            <img src="<?php bloginfo('template_directory'); ?>/images/market/icons/wish.svg" class="content__item-action_item">
        </div>
    </div>
</div>