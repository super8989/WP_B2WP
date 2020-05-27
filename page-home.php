<?php

  /*
    Template Name: Home Page
  */

  // Custom Fields
  $prelaunch_price        = get_post_meta( 9, 'prelaunch_price', true );
  $launch_price           = get_post_meta( 9, 'launch_price', true );
  $final_price            = get_post_meta( 9, 'final_price', true );
  $course_url             = get_post_meta( 9, 'course_url', true );
  $button_text            = get_post_meta( 9, 'button_text', true );
  $optin_text             = get_post_meta( 9, 'optin_text', true );
  $optin_button_text      = get_post_meta( 9, 'optin_button_text', true );


  // Advanced Custom Fields
  $income_feature_image   = get_field('income_feature_image');
  $income_section_title   = get_field('income_section_title');
  $income_section_desc    = get_field('income_section_description');
  $reason_1_title         = get_field('reason_1_title');
  $reason_1_desc          = get_field('reason_1_description');
  $reason_2_title         = get_field('reason_2_title');
  $reason_2_desc          = get_field('reason_2_description');


  get_header();
?>


  <!-- HERO -->
  <section id='hero' data-type='background' data-speed='5'>
    <article>
      <div class="container clearfix">
        <div class="row">
          <div class="col-sm-5">
            <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo-badge.png" alt="Logo badge" class='logo'>
          </div>

          <div class="col-sm-7 hero-text">
            <h1><?php bloginfo('name'); ?></h1>
            <p class="lead"><?php bloginfo('description'); ?></p>

            <div id="price-timeline">
              <div class="price active">
                <h4>Pre-Launch Price <small>Ends soon!</small></h4>
                <span><?php echo $prelaunch_price; ?></span>
              </div>
              <div class="price">
                <h4>Launch Price <small>Coming soon!</small></h4>
                <span><?php echo $launch_price; ?></span>
              </div>
              <div class="price">
                <h4>Final Price <small>Coming soon!</small></h4>
                <span><?php echo $final_price; ?></span>
              </div>
            </div>

            <p><a href="<?php echo $course_url; ?>" target="_blank" role='button' class="btn btn-lg btn-danger"><?php echo $button_text; ?></a></p>

          </div>

        </div>
      </div>
    </article>

  </section>

  <!-- OPT IN SECTION -->
  <section id='optin'>
    <div class="container">
      <div class="row">

        <div class="col-sm-8">
          <p class="lead"><?php echo $optin_text; ?></p>
        </div>

        <div class="col-sm-4">
          <button class="btn btn-success btn-lg btn-block" data-toggle='modal' data-target='#myModal'>
            <?php echo $optin_button_text; ?>
          </button>
        </div>

      </div>

    </div>

  </section>

  <!-- BOOST YOUR INCOME -->
  <section id='boost-income'>
    <div class="container">

      <div class="section-header">

        <!-- If user uploaded image -->
        <?php

          if ( !empty($income_feature_image) ) {
        ?>
          <img src="<?php echo $income_feature_image['url']; ?>" alt="<?php echo $income_feature_image['alt'] ?>">
          
        <?php
          }
        ?>

        <h2><?php echo $income_section_title; ?></h2>

        <p class="lead">
          <?php echo $income_section_desc; ?>
        </p>

        <div class="row">
          <div class="col-sm-6">
            <h3><?php echo $reason_1_title; ?></h3>
            <p><?php echo $reason_1_desc; ?></p>
          </div>
          <div class="col-sm-6">
            <h3><?php echo $reason_2_title; ?></h3>
            <p><?php echo $reason_2_desc; ?></p>
          </div>

        </div>
      </div>

    </div>

  </section>

  <!-- WHO BENEFITS -->
  <section id='who-benefits'>
    <div class="container">

      <div class="section-header">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-pad.png" alt="Pad and pencil">
        <h2>Who should take this course</h2>
      </div>

      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <h3>Graphics &amp; Web Designers</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, cumque quam sunt, aperiam inventore
            nulla molestiae explicabo porro blanditiis praesentium consectetur! Dolorum quam hic eius natus nobis,
            assumenda doloribus sint!</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat earum officiis tempora omnis quidem aut,
            libero, vel exercitationem natus voluptates velit, molestias dicta animi consequatur odit voluptas
            perspiciatis voluptatum reiciendis!</p>

          <h3>Entrepreneurs</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, cumque quam sunt, aperiam inventore
            nulla molestiae explicabo porro blanditiis praesentium consectetur! Dolorum quam hic eius natus nobis,
            assumenda doloribus sint!</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat earum officiis tempora omnis quidem aut,
            libero, vel exercitationem natus voluptates velit, molestias dicta animi consequatur odit voluptas
            perspiciatis voluptatum reiciendis!</p>

          <h3>Code Hobbyists</h3>
          <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veritatis, cumque quam sunt, aperiam inventore
            nulla molestiae explicabo porro blanditiis praesentium consectetur! Dolorum quam hic eius natus nobis,
            assumenda doloribus sint!</p>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Placeat earum officiis tempora omnis quidem
            aut, libero, vel exercitationem natus voluptates velit, molestias dicta animi consequatur odit voluptas
            perspiciatis voluptatum reiciendis!</p>
        </div>
      </div>

    </div>

  </section>

  <!-- COURSE FEATURES -->
  <section id='course-features'>
    <div class="container">

      <div class="section-header">
        <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/icon-rocket.png" alt="Rocket">
        <h2>Course Features</h2>
      </div>

      <div class="row">
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

      </div>

    </div>

  </section>

  <!-- PROJECT FEATURES -->
  <section id='project-features'>
    <div class="container">

      <h2>Final Project Features</h2>
      <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum animi voluptate laborum quaerat reprehenderit, tenetur quidem aperiam enim eos voluptatum?</p>

      <div class="row">
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
      </div>
      
    </div>

  </section>

  <!-- VIDEO FEATURETTE -->
  <section id='featurette'>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">
          <h2>Watch the course introduction</h2>
          <iframe width="100%" height="415" src="https://www.youtube.com/embed/G52dUQLxPzg" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>

    </div>

  </section>

  <!-- INSTRUCTOR -->
  <section id='instructor'>
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="row">
            <div class="col-lg-8">
              <h2>Your Instructor <small>Sir Fake Elvis</small></h2>
            </div>
            <div class="col-lg-4">
              <a href="/" class='badge social twitter'><i class="fa fa-twitter"></i></a>
              <a href="/" class='badge social facebook'><i class="fa fa-facebook"></i></a>
              <a href="/" class='badge social linkedin'><i class="fa fa-linkedin"></i></a>
            </div>
          </div>

          <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque eligendi possimus enim excepturi necessitatibus, eius ducimus molestiae illo incidunt consequatur perferendis cumque facere? Nobis eaque cum dolores quos eligendi perspiciatis!</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, dolores. Accusantium aliquid architecto dolor dignissimos dolore, quod est. Dignissimos rem corporis accusantium quidem asperiores sit consequatur officiis, eaque maxime error!</p>

          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, dolores. Accusantium aliquid architecto dolor dignissimos dolore, quod est. Dignissimos rem corporis accusantium quidem asperiores sit consequatur officiis, eaque maxime error!</p>

          <hr>

          <h3>The Numbers <small>They don't lie</small></h3>

          <div class="row">
            <div class="col-4">
              <div class="num">
                <div class="num-content">
                  41,000+ <span>students</span>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="num">
                <div class="num-content">
                  600 <span>reviews</span>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="num">
                <div class="num-content">
                  8 <span>courses</span>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

  </section>

  <!-- TESTIMONIALS -->
  <section id='kudos'>
    <div class="container">
      <div class="row">
        <div class="col-sm-8 offset-sm-2">

          <h2>What People Are Saying</h2>

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

        </div>
      </div>
    </div>

  </section>



<?php

get_footer(); ?>
