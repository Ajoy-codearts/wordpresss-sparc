<section class="custom-banner">
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <?php while( have_rows('banner_box') ) : the_row(); ?>
            <?php while( have_rows('banner_box_details') ) : the_row(); ?>
            <div class="carousel-item <?php if (get_row_index() == 1 ) echo 'active'; ?>">
              <div class="carousel-item-img"> <img class="d-block w-100" src="<?php the_sub_field('banner_box_image'); ?>" alt="First slide"> </div>
              <div class="carousel-caption carousel-item-txt">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-7">
                      <h1><?php the_sub_field('banner_box_text'); ?></h1>
                      <a href="<?php the_sub_field('banner_box_url'); ?>"><?php the_sub_field('banner_box_button_name'); ?></a> </div>
                  </div>
                </div>
              </div>
            </div>
            <?php endwhile; ?>
        <?php endwhile; ?>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-custom-btn" aria-hidden="true"><i class="fas fa-arrow-left"></i></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-custom-btn" aria-hidden="true"><i class="fas fa-arrow-right"></i></span> <span class="sr-only">Next</span> </a> 
      </div>
  </div>
</section>