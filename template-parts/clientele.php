<section class="clientele custom-pad" style="background-image: url(<?php the_field('clientele_back_image', get_the_ID()); ?>);">
    <div class="container fluid">
      <div class="row">
        <div class="col-lg-10">
          <div class="custom-heading"> <span><?php the_field('clientele_button_text', get_the_ID()); ?></span>
            <h3><?php the_field('clientele_heading_text', get_the_ID()); ?></h3>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="clientele-list">
            <ul class="text-center">
            <?php while( have_rows('clientele_box')) : the_row(); ?>
                <?php while( have_rows('clientele_box_details')) : the_row(); ?>
                    <li>
                    <div class="number">
                        <h4><?php the_sub_field('clientele_box_text1'); ?></h4>
                    </div>
                    <div class="call-heading">
                        <h5><?php the_sub_field('clientele_box_text2'); ?></h5>
                    </div>
                    <div class="clientele-address">
                        <h6><?php the_sub_field('clientele_box_text3'); ?></h6>
                    </div>
                    </li>    
                <?php endwhile; ?>
            <?php endwhile; ?>             
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>