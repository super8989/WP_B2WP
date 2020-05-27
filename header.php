<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_WordPress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">


  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- FontAwesome Icons -->
  <script src="https://kit.fontawesome.com/ef53897d55.js" crossorigin="anonymous"></script>

  <!-- Custom Fonts -->
  <link
    href="https://fonts.googleapis.com/css2?family=Jost:wght@100;300;400;500;600;700;800;900&family=Raleway:wght@100;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

  <!--     
    font-family: 'Jost', sans-serif;

    font-family: 'Raleway', sans-serif; 
  -->


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'bootstrap2wordpress' ); ?></a>


  <!-- HEADER -->
  <header class='site-header' role='banner'>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo.png" alt="Logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

				<?php 
					wp_nav_menu( array(
						'theme_location'		=> 'primary',
						'container'					=> 'nav',
						'container_class' 	=> 'navbar-collapose collapse',
						'menu_class'				=> 'nav navbar-nav navbar-right'
					));
				?>


        <!-- <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="blog.html">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="resources.html">Resources</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.html">Contact</a>
            </li>
          </ul>
        </div> -->
      </div>
    </nav>

  </header>