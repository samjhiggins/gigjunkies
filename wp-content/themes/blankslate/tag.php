<?php get_header(); ?>
<section id="content" role="main">

<div class="container">
	<div class="row">
		<header class="header">


<h1 class="entry-title"><?php _e( 'Tag Archives: ', 'gigjunkies' ); ?><?php single_tag_title(); ?></h1>
</header>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="col-md-4 col-sm-6">
	<?php get_template_part( 'entry' ); ?>
	</div>
<?php endwhile; endif; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</div>
</div>
</section>

<?php get_footer(); ?>