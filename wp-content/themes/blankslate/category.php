<?php get_header(); ?>
<section id="content" role="main">

<header class="header">

<div class="container">
<h1><?php _e( 'Category: ', 'gigjunkies' ); ?>
<?php single_cat_title(); ?>
	</h1>
</div>


<?php if ( '' != category_description() ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . category_description() . '</div>' ); ?>

</header>

<div class="container entry-grid-list">

	<div class="row">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<?php if (has_post_thumbnail())
			{
			
			?>

			<div class="col-md-4 col-sm-6">

				<?php get_template_part( 'entry' ); ?>

			</div>

			<?php 
			} 
			?>

		<?php endwhile; endif; ?>

		</section>

		

		<?php get_footer(); ?>

	</div>

</div>