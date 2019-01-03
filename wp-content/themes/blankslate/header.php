<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<?php 
	$themeroot = get_theme_file_uri(); 
?>

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

									<a href="/"><img src="<?php echo "{$themeroot}/Gig_Junkies_Logo_M1_@2x.png"?>" /></a>

								</div>

								<div class="col-xs-4 mobile-search">

									<i class="fa fa-search"></i>

								</div>

								<div class="col-xs-12">
									<div class="mobile-navigation-links-container">
										<?php 
										wp_nav_menu( array( 'theme_location' => 'main-menu' ) );	
										?>
									</div>
								</div>


							</div>

						</div>



						<!-- tablet and desktop nav -->

						<div class="row">

							<div class="col-sm-4 hidden-xs">

								<div class="social-icons">

									<i class="fab fa-facebook-f"></i>

									<i class="fab fa-twitter"></i>

									<i class="fab fa-instagram"></i>

									<i class="fab fa-youtube"></i>

									<i class="fab fa-google"></i>

								</div>

							</div>



							<div class="col-sm-4 col-xs-12 hidden-xs">

								<a href="/">

									

									<img src="<?php echo "{$themeroot}/Gig_Junkies_Logo_1_@2x.png" ?>" class="img-responsive site-logo"/>

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
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
			<?php
		

			echo "<link rel='stylesheet' href='{$themeroot}/bootstrap.css' crossorigin='anonymous>";
			echo "<link rel='stylesheet' href='{$themeroot}/fontawesome.css' crossorigin='anonymous'>";
			echo "<link rel='stylesheet' href='{$themeroot}/css/main.css' crossorigin='anonymous'>";

			?>

			
		

		</header>