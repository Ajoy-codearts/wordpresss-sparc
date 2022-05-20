<?php
/*
Template Name: Contact Template
*/
get_header();
?>

<?php
    while ( have_posts() ) :
    the_post();
?>
  
<?php  require_once('template-parts/contact-inner-banner.php') ?>
<?php  require_once('template-parts/contact-info.php') ?>
<?php  require_once('template-parts/contact-form.php') ?>
<?php  require_once('template-parts/contact-map.php') ?>


<?php endwhile; ?>   
<?php get_footer();?>