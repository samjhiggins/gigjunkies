
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header>

	<?php 
	
		if(is_singular()) {

			the_title('<h1 class="entry-title">','</h1>');

			echo '<p class="entry-date">'.get_the_time(get_option('date_format')).'</p>';
			echo '<div class="social-icons">';
				echo '<i class="fa fa-facebook"></i>';
				echo '<i class="fa fa-twitter"></i>';
				echo '<i class="fa fa-instagram"></i>';
			echo '</div>';
		}
		else { 
			the_title('<h2 class="entry-title">','</h2>');
		}
		
	?>


</header>

<?php get_template_part( 'entry', ( is_archive() || is_search() || is_home() ? 'summary' : 'content' ) ); ?>

</article>

