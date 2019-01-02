<?php get_header(); ?>
<section id="content" role="main">


<?php the_post(); ?>


<h1>Image</h1>
<?php 
	 $authorId = get_the_author_meta('ID');
	 mt_profile_img($authorId);
?>


<h1>bio</h1>
<?php
	echo get_the_author_meta('description');
?> 


<h1>Authors website</h1>
<?php the_author_link(); ?></h1>


<h1>Authors posts</h1>

<?php rewind_posts(); ?>


<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php get_template_part( 'nav', 'below' ); ?>
</section>

<?php get_footer(); ?>