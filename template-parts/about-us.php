<section class="about-us position-relative custom-pad">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="about-us-content-left">
            <div class="au-image-1"> <img src="<?php the_field('about_us_image1', get_the_ID()); ?>" alt=""> </div>
            <div class="au-image-2"> <img src="<?php the_field('about_us_image2', get_the_ID()); ?>" alt=""> </div>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="about-us-content-right ">
            <div class="row">
              <div class="col-lg-8 ml-0">
                <div class="custom-heading custom-dark-heading custom-heading-left"> <span><?php the_field('about_us_button1_name', get_the_ID()); ?></span>
                  <h3><?php the_field('about_us_text1', get_the_ID()); ?></h3>
                </div>
                <div class="dp-abu-cus-sub-heading">
                  <h5>About Us</h5>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="au-text">
                  <p><?php the_field('about_us_text2', get_the_ID()); ?></p>
                  <div class="d-flex au-lists">
                  <ul class="au-list-left">
                    <?php while( have_rows('au_list_left_box')) : the_row(); ?>
                        <?php while( have_rows('au_list_left_box_details')) : the_row(); ?>
                       
                                <li><?php the_sub_field('au_list_left_box_text'); ?></li>                  
                        <?php endwhile; ?>
                    <?php endwhile; ?>
                  </ul>                                      
                   <ul class="au-list-right">
                        <?php while( have_rows('au_list_right_box')) : the_row(); ?>
                            <?php while( have_rows('au_list_right_box_details')) : the_row(); ?>
                                <li class="d-flex"> <img src="<?php the_sub_field('au_list_right_box_icon'); ?>" alt="">
                                <p class="demo align-self-center"><?php the_sub_field('au_list_right_box_text'); ?></p>
                                </li>    
                            <?php endwhile; ?>
                        <?php endwhile; ?>   
                    </ul>
                  </div>
                  <a href="#" class="custom-btn custom-btn-left custom-btn-orange"><?php the_field('about_us_button2_name', get_the_ID()); ?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>