<section class="inner-about custom-pad">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-12 align-self-center">
        <div class="inner-abt-img"> <img src="<?php the_field('about_innerabout_image',get_the_ID()); ?>" alt=""> </div>
      </div>
      <div class="col-lg-6 col-md-12 align-self-center">
        <div class="inner-abt-content">
          <div class="custom-heading custom-dark-heading custom-heading-left"> 
           		<span class="demo"><?php the_field('about_innerabout_subheading',get_the_ID()); ?></span>
            	<h3><?php the_field('about_innerabout_heading',get_the_ID()); ?></h3>
          </div>
          <p class="demo"><?php the_field('about_innerabout_text1',get_the_ID()); ?></p>
          <p class="demo"><?php the_field('about_innerabout_text2',get_the_ID()); ?></p>
        </div>
      </div>
    </div>
  </div>
</section>