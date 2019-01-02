<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : ?>


<div class="container">
	<div class="row">

	<div class="col-sm-12">
		<header class="header">
			<h1 class="entry-title"><?php printf( __( 'Search Results for: %s', 'gigjunkies' ), get_search_query() ); ?></h1>
		</header>
	</div>

	<div class="entry-grid-list">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="col-md-4">
					<?php get_template_part( 'entry' ); ?>
					<?php // comments_template(); ?>
				</div>
		<?php endwhile; endif; ?>

	
	<?php  get_template_part( 'nav', 'below' ); ?>
	</div>
</div>


<?php get_template_part( 'nav', 'below' ); ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h2 class="entry-title"><?php _e( 'Nothing Found', 'gigjunkies' ); ?></h2>
</header>
<section class="entry-content">
<p><?php _e( 'Sorry, nothing matched your search. Please try again.', 'gigjunkies' ); ?></p>
<?php get_search_form(); ?>
</section>
</article>
<?php endif; ?>
</section>

<?php get_footer(); ?>