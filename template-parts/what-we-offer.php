<section class="what-we-offer bg-dark position-relative custom-pad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10">
          <div class="custom-heading"> <span><?php the_field('what_we_offer_button1_name', get_the_ID()); ?></span>
            <h3><?php the_field('what_we_offer_text1',get_the_ID()); ?></h3>
          </div>
        </div>
        <div class="col-lg-12">
          <div class="custom-sub-heading-1 position-relative">
            <h5><?php the_field('what_we_offer_text2',get_the_ID()); ?></h5>
          </div>
        </div>
      </div>
      <div class="row">
            <?php while( have_rows('what_we_offer_box')) : the_row(); ?>
                <?php while( have_rows('what_we_offer_box_details')) : the_row(); ?>
                    <div class="col-lg-4 col-md-6"> 
                        <a href="<?php the_sub_field('what_we_offer_box_button_url'); ?>" class="what-we-offer-box"
                        style="background-image: url(<?php the_sub_field('what_we_offer_box_image'); ?>);">
                        <h3><?php the_sub_field('what_we_offer_box_button_name'); ?></h3>
                        </a> 
                    </div>      
                <?php endwhile; ?>
            <?php endwhile; ?>   
      </div>
    </div>
  </section>