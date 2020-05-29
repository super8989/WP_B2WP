  <?php

  $features_section_image       = get_field('features_section_image');
  $features_section_title       = get_field('features_section_title');
  $features_section_body        = get_field('features_section_body');

  ?>

  <!-- COURSE FEATURES -->
  
  <section id='course-features'>
    <div class="container">

      <div class="section-header">

        <?php if ( !empty($features_section_image) ) {
        ?>
          <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" alt="Rocket">
        <?php
          }
        ?>
        
        <h2><?php echo $features_section_title; ?></h2>

        <!-- If user added body text -->
        <?php if ( !empty($features_section_body) ) {
        ?>
          <p class="lead"><?php echo $features_section_body; ?></p>
        
        <?php 
          }
        ?>

      </div>

      <div class="row">
        
        <?php $loop = new WP_Query( 
          array( 
            'post_type' => 'course_feature', 
            'orderby'   => 'post_id',
            'order'     => 'ASC'  
          )); 
         
          while( $loop->have_posts() ) {
            $loop->the_post();
        ?>

          <div class="col-lg-2 col-md-6">
            <i class="<?php the_field('course_feature_icon'); ?>"></i>
            <h4><?php the_title(); ?></h4>
          </div>

        <?php
          };
          
          wp_reset_query();
        ?>

        <!-- removed
          <div class="col-lg-2 col-md-6">
            <i class="ci ci-computer"></i>
            <h4>Lifetime access to lectures</h4>
          </div>
          <div class="col-lg-2 col-md-6">
            <i class="ci ci-watch"></i>
            <h4>10+ hours of content</h4>
          </div>
          <div class="col-lg-2 col-md-6">
            <i class="ci ci-calendar"></i>
            <h4>30-day moneyback guarantee</h4>
          </div>
          <div class="col-lg-2 col-md-6">
            <i class="ci ci-community"></i>
            <h4>Access to community of students</h4>
          </div>
          <div class="col-lg-2 col-md-6">
            <i class="ci ci-instructor"></i>
            <h4>Direct access to instructor</h4>
          </div>
          <div class="col-lg-2 col-md-6">
            <i class="ci ci-device"></i>
            <h4>Accessible content on any devices</h4>
          </div>
        removed -->

      </div>

    </div>

  </section>  