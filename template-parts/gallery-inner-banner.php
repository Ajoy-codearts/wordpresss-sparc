<section class="custom-innr-banner" style="background-image: url(<?php the_field('gallery_back_image', get_the_ID()); ?>)">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="custom-inner-banner-content">
            <h3><?php the_field('gallery_text1', get_the_ID()); ?></h3>
            <div class="custom-breadcam">
              <ul>
                <li><a href="#"><?php the_field('gallery_menu1', get_the_ID()); ?></a></li>
                <li><?php the_field('gallery_menu2', get_the_ID()); ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
