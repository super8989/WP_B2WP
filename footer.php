<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>



<?php wp_footer(); ?>


  <!-- SIGN UP  -->
  <section id='signup' data-type='background' data-speed='4'>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 offset-sm-3">
          <h2>Are you ready to take your coding skills to the <strong>next level</strong>?</h2>
          <p><a href="#" class="btn btn-lg btn-block btn-success">Yes, sign me up!</a></p>
        </div>
      </div>
    </div>

  </section>

  <!-- FOOTER -->
  <footer>
    <div class="container">
      <div class="row">
      <div class="col-sm-3 align-self-center">
        <p>
          <a href="/"><img src="assets/img/logo.png" alt="Bootstrap to Wordpress"></a>
        </p>
      </div>
      <div class="col-sm-6">
          <ul class="nav">
            <li class='nav-item'><a class='nav-link' href="">Home</a></li>
            <li class='nav-item'><a class='nav-link' href="">Blog</a></li>
            <li class='nav-item'><a class='nav-link' href="">Resources</a></li>
            <li class='nav-item'><a class='nav-link' href="">Contact</a></li>
            <li class='nav-item signup-link'><a class='nav-link' href="">Sign up now</a></li>
          </ul>
      </div>
      <div class="col-sm-3 align-self-center">
        <p class="float-right">
          &copy; 2020
        </p>
      </div>
      
    </div>

  </footer>


  <!-- MODAL -->
  <div class='modal fade' id='myModal'>
    <div class="modal-dialog">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title" id="myModalLabel">
            <i class="fa fa-envelope"></i> Subscribe to our mailing list
          </h4>
          <button type='button' class='close' data-dismiss='modal'>
            <span aria-hidden='true'>&times;</span>
            <span class='sr-only'>Close</span>
          </button>
        </div>

        <div class="modal-body">
          <p>Simply enter your name and email!</p>

          <form action="" class="form-inline" role='form'>
            <div class="form-group">
              <label for="subscribe-name" class="sr-only">Your first name</label>
              <input type="text" class="form-control" id="subscribe-name" placeholder="First Name">
            </div>
            <div class="form-group">
              <label for="subscribe-email" class="sr-only">Your email</label>
              <input type="text" class="form-control" id="subscribe-email" placeholder="Email">
            </div>

            <input type="submit" class="btn btn-danger" value='Subscribe!'>
          </form>

          <hr>

          <p><small>You many unsubscribe at any time.</small></p>
        </div>

      </div>
    </div>

  </div>


<!-- BOOTSTRAP CORE JAVASCRIPT -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
	integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
	integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
</script>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/main.js"></script>

</body>
</html>
