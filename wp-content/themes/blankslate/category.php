<?php get_header(); ?>


<section id="content" role="main">


<header class="header">


<!--<h1 class="entry-title"><?php _e( 'Category Archives: ', 'gigjunkies' ); ?><?php single_cat_title(); ?></h1>



<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>
-->


</header>

<div class="container entry-grid-list">
	<div class="row">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="col-md-4 col-sm-6">
			
			<?php get_template_part( 'entry' ); ?>
		</div>
		<?php endwhile; endif; ?>


		</section>
		
		<?php get_footer(); ?>
	</div>
</div>