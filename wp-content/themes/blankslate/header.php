<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header id="header" role="banner">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 col-xs-12">


						<!-- mobile navigation-->
						<div class="mobile-nav visible-xs">
							<div class="row">
								<div class="col-xs-4 mobile-menu"><i class="fa fa-bars"></i></div>
								<div class="col-xs-4 mobile-logo">
									<a href="/"><img src="/wp-content/themes/blankslate/Gig_Junkies_Logo_M1_@2x.png" /></a>
								</div>
								<div class="col-xs-4 mobile-search">
									<i class="fa fa-search"></i>
								</div>
							</div>
						</div>


						<!-- tablet and desktop nav -->
						<div class="row">
							<div class="col-sm-4 hidden-xs">
								<div class="social-icons">
									<i class="fa fa-facebook"></i>
									<i class="fa fa-twitter"></i>
									<i class="fa fa-instagram"></i>
									<i class="fa fa-youtube-play"></i>
									<i class="fa fa-google"></i>
								</div>
							</div>

							<div class="col-sm-4 col-xs-12 hidden-xs">
								<a href="/">
									
									<img src="/wp-content/themes/blankslate/Gig_Junkies_Logo_1_@2x.png" class="img-responsive site-logo"/>
								</a>
							</div>
							<div class="col-sm-4 col-xs-12 hidden-xs site-search-box">
								
									<?php get_search_form(); ?>
							
							</div>
						</div>						

						<nav class="main-menu hidden-xs">
							<?php 
								wp_nav_menu( array( 'theme_location' => 'main-menu' ) );	
						
									

								?>
						</nav>
					</div>


				</div>
			</div>
			</div>
			
	
			<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:400,400i,500,700" rel="stylesheet">
			<link rel="stylesheet" href="/wp-content/themes/blankslate/bootstrap.css" crossorigin="anonymous">
			<link rel="stylesheet" href="/wp-content/themes/blankslate/fontawesome.css" crossorigin="anonymous">
			<link rel="stylesheet" href="/wp-content/themes/blankslate/theme.css" crossorigin="anonymous">
		</header>