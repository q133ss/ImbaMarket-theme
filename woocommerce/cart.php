<?php
/**
 * Cart Page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/cart/cart.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.8.0
 */

defined( 'ABSPATH' ) || exit;

get_header();
?>
<div class="bc">
        <div class="container">
            <?php woocommerce_breadcrumb(); ?>
        </div>
    </div>
    <section class="account">
        <div class="container">
            <div class="account__head">
                <div class="account__head_title">Cart</div>
            </div>
            <div class="account__content">
                <div class="cart cart__main">

                    <?php
                    global $woocommerce;
                    $items = $woocommerce->cart->get_cart();

                    do_action( 'woocommerce_before_cart' );

                    foreach($items as $item => $values) {
                        $_product =  wc_get_product( $values['data']->get_id());
                        $price = get_post_meta($values['product_id'] , '_price', true);
                        $thumbnail = $_product->get_image(); //Image
                        $cart_item_remove_url = wc_get_cart_remove_url( $item ); //Delete url
                        ?>

                    <div class="cart__item">
                        <?php echo $thumbnail; ?>
<!--                        <img src="./images/cart/3d.jpg" alt="" class="cart__image">-->
                        <div class="cart__about">
                            <div class="cart__title"><?php echo $_product->get_title(); ?></div>
                            <div class="cart__fc">
                                <div class="cart__fc_column">
                                    <div class="cart__fc_code">product code: 27840396</div>
                                    <div class="cart__fc_count">
                                        <div class='ctrl'>
                                            <div class='ctrl__button ctrl__button--decrement'>&ndash;</div>
                                            <div class='ctrl__counter'>
                                              <input class='ctrl__counter-input' maxlength='10' type='text' value='<?php echo $values['quantity']; ?>'>
                                              <div class='ctrl__counter-num'><?php echo $values['quantity']; ?></div>
                                            </div>
                                            <div class='ctrl__button ctrl__button--increment'>+</div>
                                          </div>
                                    </div>
                                </div>
                                <div class="cart__fc_column cart__fc_column-custom">
                                    <div class="cart__fc_option">Color <span>Grey</span></div>
                                    <div class="cart__fc_selected">
                                        <img src="./images/product/color.jpg" alt="" class="cart__fc_selected-img">
                                    </div>
                                </div>
                                <div class="cart__fc_column cart__fc_column-custom">
                                    <div class="cart__fc_option">Size <span>20</span></div>
                                    <div class="cart__fc_selected">
                                        <div class="cart__fc_selected-text">20 cm</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="cart__action">
                            <div class="cart__delete" onclick="delete_cart_item('<?php echo $cart_item_remove_url; ?>')">Delete</div>
                            <div class="cart__price"><?php echo $price; ?></div>
                        </div>
                    </div>
                    <div class="cart__line"></div>
                    <?php } ?>
                    <div class="cart__pay">
                        <a href="<?php echo wc_get_page_permalink( 'shop' ); ?>" class="cart__continue">Continue shopping</a>
                        <div class="cart__bblock">
                            <div class="cart__total">Total:  <?php echo $woocommerce->cart->get_cart_total(); ?></div>
                            <div ></div>
                            <a class="cart__button button button_purple button_medium" href="<?php echo wc_get_checkout_url();?>">BUY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
