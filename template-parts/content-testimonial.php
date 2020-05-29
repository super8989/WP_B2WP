<?php

  $testimonial_title            = get_field('testimonial_title');
  $testimonial_body             = get_field('testimonial_body');

?>

<!-- TESTIMONIALS -->
 <section id='kudos'>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">

          <h2><?php echo $testimonial_title; ?></h2>
          
          <h4><?php echo $testimonial_body; ?></h4>

          <?php $loop = new WP_Query( 
            array(
              'post_type' => 'testimonial',
              'orderby'   => 'post_id',
              'order'     => 'ASC'
            ));

            while ( $loop->have_posts() ) {
              $loop->the_post();
          ?>

          <div class="row testimonial">
            <div class="col-sm-4">
              <?php if ( has_post_thumbnail() ) {
                the_post_thumbnail( array(200, 200) );
                } 
              ?>
            </div>
            <div class="col-sm-8 align-self-center">
              <blockquote><?php the_content(); ?>
                <cite>&mdash; <?php the_title(); ?></cite>
              </blockquote>
            </div>
          </div>


          <?php
            };

            wp_reset_query();
          ?>

          <!-- remove
            <div class="row testimonial">
              <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ernest.png" alt="Ernest">
              </div>
              <div class="col-sm-8 align-self-center">
                <blockquote>I'm baby vape paleo direct trade, waistcoat succulents banjo normcore cliche heirloom yr
                  narwhal. Adaptogen organic VHS jean shorts, wolf jianbing four loko kinfolk plaid keytar polaroid poke
                  distillery. Tousled quinoa hoodie glossier pork belly pour-over, poutine synth palo santo normcore photo.
                  <cite>&mdash; Ernest, graduate of all courses</cite>
                </blockquote>
              </div>
            </div>

            <div class="row testimonial">
              <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ben.png" alt="Ben">
              </div>
              <div class="col-sm-8 align-self-center">
                <blockquote>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Praesentium
                  doloremque obcaecati similique maxime voluptatum animi placeat quidem natus esse culpa!
                  <cite>&mdash; Ben, graduate of all courses</cite>
                </blockquote>
              </div>
            </div>

            <div class="row testimonial">
              <div class="col-sm-4">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/aj.png" alt="AJ">
              </div>
              <div class="col-sm-8 align-self-center">
                <blockquote>Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi minima
                  molestias pariatur velit voluptatibus, excepturi ab, autem obcaecati fugit, laboriosam vero.
                  <cite>&mdash; AJ, graduate of all courses</cite>
                </blockquote>
              </div>
            </div>
          remove -->
        </div>
      </div>
    </div>

  </section>