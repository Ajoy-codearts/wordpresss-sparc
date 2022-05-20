<section class="custom-con-from custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="custom-heading"> <span class="demo"><?php the_field('contact_us_form_text1', get_the_ID()); ?></span>
          <h3><?php the_field('contact_us_form_heading_text1', get_the_ID()); ?></h3>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
      <?php echo do_shortcode('[contact-form-7 id="142" title="Contact Form"]'); ?>
    </div>
  </div>
</section>