<?php
/**
 * Template Name: Products Template
 * Template Post Type: product
 **/
get_header('shop');
?>

<div class="wrap">
    <div class="before-main">
    <?php

    do_action('woocommerce_before_main_content');
    ?>
    </div>
    <main id="product-main">
        <?php 
        woocommerce_content();
         ?>
    </main>
    <div class="after-main">
    <?php
    do_action('woocommerce_after_main_content');
    do_action('woocommerce_sidebar');
    ?>
    </div>
</div>

<?php

get_footer('shop');

?>