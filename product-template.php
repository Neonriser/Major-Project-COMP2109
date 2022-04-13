<?php
/**
* Template Name: Products Template
* Template Post Type: product
**/
get_header('shop');
?>
<div class="wrap">
<?php
/**
* woocommerce_before_main_content hook
* @hooked woocommerce_output_content_wrapper - 10
* @hooked woocommerce_breadcrumb - 20
*/

do_action('woocommerce_before_main_content');
my_theme_wrapper_start();
?>

<?php woocommerce_content(); ?>

<?php

my_theme_wrapper_end();

/**
* woocommerce_sidebar hook
* @hooked woocommerce_get_sidebar - 10
*/
do_action('woocommerce_sidebar');
?>
</div>
<?php
get_footer('shop');
?>