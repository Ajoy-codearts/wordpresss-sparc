<section class="what-they-say custom-pad">
    <div class="container">
      <div class="row">
        <div class="col-lg-7">
          <div class="custom-heading custom-heading-left"> <span><?php the_field('testimonial_text1', get_the_ID()); ?></span>
            <h3><?php the_field('testimonial_text2', get_the_ID()); ?></h3>
          </div>
          <div class="custom-testimonials">
            <div class="outer">
              <div id="thumbs" class="owl-carousel owl-theme">

                <?php while( have_rows('testimonial_box')) : the_row(); ?>
                    <?php while( have_rows('testimonial_box_details')) : the_row(); ?>
                        <div class="item"> <img src="<?php the_sub_field('testimonial_box_image'); ?>" alt=""> </div>
                    <?php endwhile; ?>
                <?php endwhile; ?>  
              </div>
              <div id="big" class="owl-carousel owl-theme">

                <?php while( have_rows('testimonial_box')) : the_row(); ?>
                    <?php while( have_rows('testimonial_box_details')) : the_row(); ?>
                        <div class="item">
                        <div class="testimunials-heading">
                        <p><?php the_sub_field('testimonial_box_para1'); ?></p>
                        <h5><?php the_sub_field('testimonial_box_subpara1'); ?><span><?php the_sub_field('testimonial_box_subpara2'); ?></span></h5>
                        </div>
                        </div>
                    <?php endwhile; ?>
                <?php endwhile; ?> 

              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5">
          <div class="custom-heading custom-heading-left"> <span><?php the_field('testimonial_vtext1', get_the_ID()); ?></span>
            <h3><?php the_field('testimonial_vtext2', get_the_ID()); ?></h3>
          </div>
          <?php echo do_shortcode('[contact-form-7 id="141" title="Home Form"]'); ?>
        </div>
      </div>
    </div>
  </section>