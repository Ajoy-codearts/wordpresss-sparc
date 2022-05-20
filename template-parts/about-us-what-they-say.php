<section class="what-they-say custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="custom-heading custom-heading-left"> <span><?php the_field('about_testimonial_subheading',get_the_ID()); ?></span>
          <h3><?php the_field('about_testimonial_heading',get_the_ID()); ?></h3>
        </div>
        <div class="custom-testimonials">
          <div class="outer">
            <div id="thumbs" class="owl-carousel owl-theme">

            <?php while( have_rows('about_testimonial_box') ) : the_row(); ?>
                <?php while( have_rows('about_testimonial_box_details') ) : the_row(); ?>
                <div class="item"> <img src=" <?php the_sub_field('about_testimonial_image') ?>"> </div>
                <?php endwhile; ?>
            <?php endwhile; ?>           
            </div>
            <div id="big" class="owl-carousel owl-theme">
            <?php while( have_rows('about_testimonial_box') ) : the_row(); ?>
                <?php while( have_rows('about_testimonial_box_details') ) : the_row(); ?>        
                    <div class="item">
                        <div class="testimunials-heading">
                        <p><?php the_sub_field('about_testimonial_text') ?></p>
                        <h5><?php the_sub_field('about_testimonial_subtext1') ?><span><?php the_sub_field('about_testimonial_subtext2') ?></span></h5>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endwhile; ?>  
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-5">
        <div class="custom-heading custom-heading-left"> <span>contact</span>
          <h3>GET IN TOUCh</h3>
        </div>
        <?php echo do_shortcode('[contact-form-7 id="232" title="About Us form"]'); ?>
      </div>
    </div>
  </div>
</section>