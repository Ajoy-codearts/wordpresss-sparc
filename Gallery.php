<?php 
/* 
Template Name: Gallery Template
*/
get_header();
?>

<?php while( have_posts() ) : 
    the_post();
?>

<?php  require_once('template-parts/gallery-inner-banner.php') ?>
<?php  require_once('template-parts/gallery-custom-inner.php') ?>

<?php endwhile; ?>

<?php get_footer(); ?>