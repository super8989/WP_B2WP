<?php

  $instructor_section_title     = get_field('instructor_section_title');
  $instructor_name              = get_field('instructor_name');
  $bio_excerpt                  = get_field('bio_excerpt');
  $full_bio                     = get_field('full_bio');
  $twitter_username             = get_field('twitter_username');
  $facebook_username            = get_field('facebook_username');
  $linkedin_username            = get_field('linkedin_username');
  $num_students                 = get_field('num_students');
  $num_reviews                  = get_field('num_reviews');
  $num_courses                  = get_field('num_courses');

?>

<!-- INSTRUCTOR -->
  <section id='instructor'>
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <div class="row">
            <div class="col-lg-8">
              <h2><?php echo $instructor_section_title ?> <small><?php echo $instructor_name; ?></small></h2>
            </div>
            <div class="col-lg-4">
              <?php if ( !empty($twitter_username) ) { ?>
                <a href="https://twitter.com/<?php echo $twitter_username ?>" class='badge social twitter'><i class="fa fa-twitter"></i></a>
              <?php } ?>

              <?php if ( !empty($facebook_username ) ) { ?>
                <a href="https://facebook.com/<?php echo $facebook_username; ?>" class='badge social facebook'><i class="fa fa-facebook"></i></a>
              <?php } ?>

              <?php if ( !empty($linkedin_username) ) { ?>
                <a href="https://linkedin.com/<?php echo $linkedin_username; ?>" class='badge social linkedin'><i class="fa fa-linkedin"></i></a>
              <?php } ?>
            </div>
          </div>

          <p class="lead"><?php echo $bio_excerpt ?></p>

          <?php echo $full_bio; ?>

          <hr>

          <h3>The Numbers <small>They don't lie</small></h3>

          <div class="row">
            <div class="col-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $num_students; ?> <span>students</span>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $num_reviews; ?> <span>reviews</span>
                </div>
              </div>
            </div>
            <div class="col-4">
              <div class="num">
                <div class="num-content">
                  <?php echo $num_courses; ?> <span>courses</span>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>

  </section>