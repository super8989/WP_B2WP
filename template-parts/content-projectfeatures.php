<?php 

  $project_feature_title        = get_field('project_feature_title');
  $project_feature_body         = get_field('project_feature_body');

?>


<!-- PROJECT FEATURES -->
<section id='project-features'>
    <div class="container">

      <h2><?php echo $project_feature_title; ?></h2>
      <p class="lead"><?php echo $project_feature_body; ?></p>

      <div class="row">

        <?php $loop = new WP_Query( 
          array(
            'post_type' => 'project_feature',
            'orderby'   => 'post_id',
            'order'     => 'ASC'
          ));
          
          while ( $loop->have_posts() ) {
            $loop->the_post();

        ?>
          <div class="col-sm-4">
            <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail();
              } 
            ?>

            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>

        <?php 
          };

          wp_reset_query();
         ?>

        <!-- removed
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-design.png" alt="Design">
            <h3>Modern Design</h3>
            <p>Work with a modern, professional quality design layout</p>
          </div>
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-code.png" alt="code">
            <h3>Quality Code</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, vel.</p>
          </div>
          <div class="col-sm-4">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-cms.png" alt="cms">
            <h3>Easy to Use</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, quo?</p>
          </div>
        removed -->
      </div>
      
    </div>

  </section>