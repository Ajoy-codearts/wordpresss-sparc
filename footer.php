<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since Twenty Nineteen 1.0
 */

?>

<footer class="custom-footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-10">
        <div class="footer-logo text-center"> <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-main.png" alt=""> </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-3 ml-0">
        <ul class="footer-content">
          <li class="footer-item">Monday-Friday</li>
          <li class="footer-item">6.30am-3.30pm</li>
          <li class="footer-item">Saturday & Sunday</li>
          <li class="footer-item">By Appointment</li>
        </ul>
      </div>
      <div class="col-lg-6 m-0">
        <div class="footer-text text-center">
          <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
            takimata sanctus est lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur
            sadipscing elitr sed diam nonumy. </p>
        </div>
        <ul class="social-icon d-flex justify-content-center">
          <li><i class="fab fa-twitter"></i></li>
          <li><i class="fab fa-facebook-square"></i></li>
          <li><i class="fab fa-pinterest-p"></i></li>
          <li><i class="fab fa-instagram"></i></li>
        </ul>
      </div>
      <div class="col-lg-3 mr-0">
        <ul class="footer-address">
          <li>needhelp@company.com</li>
          <li>92-888-666-0000</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="footer-end text-center">
    <p>Copyright © 2022 Sparc Welding, Inc. All rights reserved.</p>
  </div>
</footer>



<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-min.js"></script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>

<?php wp_footer(); ?>

</body>
</html>
