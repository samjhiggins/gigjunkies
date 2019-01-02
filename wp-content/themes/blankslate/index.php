<?php get_header(); ?>

<div class="container">
	<div class="row">
<div class="entry-grid-list">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="col-md-4 col-sm-6">

					<?php get_template_part( 'entry' ); ?>
					<?php comments_template(); ?>
				</div>

		<?php endwhile; endif; ?>

	</div>
</div>
	<?php get_template_part( 'nav', 'below' ); ?>
	<div class="row">
		<div class="featured-posts entry-grid-list">

		<?php $catquery = new WP_Query( 'cat=10&posts_per_page=4' ); ?>
			<ul>
			<?php 
				while($catquery->have_posts()) : $catquery->the_post(); 
			?>
 				<div class="col-md-3">
 					<?php get_template_part( 'entry' ); ?>
 				</div>

			<?php endwhile;
			    wp_reset_postdata();
			?>
			</div>
	</div>
</div>


<?php get_footer(); ?>