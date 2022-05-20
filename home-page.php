<?php
/*
Template Name: Home Template
*/
get_header();
?>

<?php
    while ( have_posts() ) :
    the_post();
?>
  
<?php  require_once('template-parts/hero.php') ?>
<?php  require_once('template-parts/what-we-offer.php') ?>
<?php  require_once('template-parts/about-us.php') ?>
<?php  require_once('template-parts/industries.php') ?>
<?php  require_once('template-parts/clientele.php') ?>
<?php  require_once('template-parts/what-they-say.php') ?>

<?php endwhile; ?>   
<?php get_footer();?>