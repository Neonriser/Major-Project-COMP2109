<?php
/**
 ** Template Name: Strains
 ** Template Post Type: strains
 **/
get_header();
?>
<main class="game-review-template row">
    <div class="col-sm-12 col-md-6 col-lg-6">
        <!-- Show featured image -->
        <?php
            if(has_post_thumbnail()): ?>
        <img src="<?php the_post_thumbnail_url(); ?>" alt="featured image">
        <?php endif; ?>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6">
        <!-- This wil show the rest of the content -->
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php endwhile; endif; ?>
    </div>
</main>
<?php get_footer(); ?>