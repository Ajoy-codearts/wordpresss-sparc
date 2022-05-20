<?php 
/*
Template Name: About Template
*/
get_header();
?>

<?php
    while( have_posts() ) : 
    the_post();
?>
<?php require_once("template-parts/about-us-inner-banner.php"); ?>
<?php require_once("template-parts/about-us-inner-about.php"); ?>
<?php require_once("template-parts/about-us-what-they-say.php"); ?>


<?php endwhile; ?>
<?php get_footer(); ?>
