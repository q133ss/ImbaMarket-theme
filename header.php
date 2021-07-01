<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Ibma_Market
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <header class="header">
        <div class="header-up">
            <div class="container">
                <div class="header-up__logo" onclick="document.location.href = '/'"><span>Imba</span>Market</div>
                <div class="header-up__search">
                    <input type="text" placeholder="Search product..." class="header-up__search_input">
                </div>
                <div class="header-up__panel">
                    <div class="header-up__panel_item" onclick="document.location='<?php echo wc_get_page_permalink( 'myaccount' ); ?>'">
                        <img src="<?php bloginfo('template_directory'); ?>/images/market/icons/acc.svg" class="header-up__panel_img">
                        <div class="header-up__panel_text">My account</div>
                    </div>
                    <div class="header-up__panel_item">
                        <img src="<?php bloginfo('template_directory'); ?>/images/market/icons/wish.svg" class="header-up__panel_img">
                        <div class="header-up__panel_text">Wishlist</div>
                    </div>
                    <div class="header-up__panel_item" onclick="document.location = '<?php echo wc_get_cart_url() ?>'">
                        <img src="<?php bloginfo('template_directory'); ?>/images/market/icons/cart.svg" class="header-up__panel_img">
                        <div class="header-up__panel_text">Cart</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-down">
            <div class="container">
                <div class="header-nav">
                    <div class="header__links">
                        <?php
                    $args = array(
                        'theme_location' => 'main_menu',
                        'items_wrap' => '%3$s',
                        'echo' => false,
                        'depth' => 0,
                        'add_a_class'     => 'header__links_link',
                        'container' => ''
                    ) ;
                    echo strip_tags(wp_nav_menu($args), '<a>');

                    ?>
                    </div>
                    <div class="header__buy">
                    <?php
                    global $woocommerce;
                    $total = $woocommerce->cart->total;
                    ?>
                    <div class="header__buy_price"><?php echo get_woocommerce_currency_symbol(); echo $total; ?></div>
                    <div class="header__buy_items"><?php echo $woocommerce->cart->cart_contents_count; ?> items</div>
                    <div class="header__buy_button" onclick="location.href = '/checkout'">Buy</div>
                </div>
                </div>
            </div>
        </div>
    </header>
    <div class="categories">
        <div class="container">
            <div class="categories__all">
                <img src="<?php bloginfo('template_directory'); ?>/images/market/icons/burger.svg" class="categories__all_burger">
                <div class="categories__all_text">All categories</div>
            </div>
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
            $woo_cat_link = get_category_link( $woo_cat->term_id ); //permalink //category premalink
            ?>
            <a href="<?php echo $woo_cat_link; ?>" class="categories__item"><?php echo $woo_cat_name; ?></a>
        <?php } ?>
        </div>
    </div>
