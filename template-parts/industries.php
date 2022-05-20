<section class="what-we-offer industries custom-pad">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-10">
          <div class="custom-heading custom-dark-heading"> <span><?php the_field('industries_button1_name', get_the_ID()); ?></span>
            <h3><?php the_field('industries_large_text', get_the_ID()); ?></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <?php while( have_rows('industries_box')) : the_row(); ?>
            <?php while( have_rows('industries_box_details')) : the_row(); ?>
                <div class="col-lg-4 col-md-6"> <a href="#" class="what-we-offer-box"
                    style="background-image: url(<?php the_sub_field('industries_box_image'); ?>);">
                    <h3><?php the_sub_field('industries_box_text'); ?></h3>
                    </a> 
                </div>      
            <?php endwhile; ?>
        <?php endwhile; ?>  
      </div>
    </div>
  </section>