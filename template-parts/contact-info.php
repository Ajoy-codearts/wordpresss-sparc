<section class="inner-contact-info custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="custom-heading"> <span class="demo"><?php the_field('contact_us_text1', get_the_ID()); ?></span>
          <h3><?php the_field('contact_us_heading_text2', get_the_ID()); ?></h3>
        </div>
      </div>
    </div>
    <div class="row">
        <?php while( have_rows('contact_us_info_box')) : the_row(); ?>
                <?php while( have_rows('contact_us_info_box_details')) : the_row(); ?>
                <div class="col-lg-4 col-md-4">
                <div class="custom-con-info-dp">
                <div class="contact-info-dp"> <a href="#"> <span class="demo"><span class="demo"><i class="<?php the_sub_field('contact_us_info_box_icon'); ?>"></i></span></span>
                <h5><?php the_sub_field('contact_us_info_box_text1'); ?></h5>
                <h6><?php the_sub_field('contact_us_info_box_text2'); ?></h6>
                </a> </div>
                </div>
                </div>
                <?php endwhile; ?>
        <?php endwhile; ?>
      
    </div>
  </div>
</section>