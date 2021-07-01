<?php
/*
 * Functions for woocommerce
 */

//Add custom class for breadcrumb
add_filter( 'woocommerce_breadcrumb_defaults', 'imba_woo_breadcrumbs_home' );
 
function imba_woo_breadcrumbs_home( $defaults ) {
 
	$defaults[ 'wrap_before' ] = '<nav class="bc__item">';
	return $defaults;
 
}