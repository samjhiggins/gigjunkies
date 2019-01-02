<section class="entry-summary">
<?php // the_excerpt(); ?>

<?php // if ( has_post_thumbnail() ) { the_post_thumbnail('full',['class' => 'img-responsive']); } ?>

<span class="entry-date">
	<span class="post-date-day">
		<?php the_time('n'); ?>
	</span>
	<span class="post-date-month">
		<?php the_time('M'); ?>
	</span>
</span>

<a href="<?php echo get_permalink();  ?>">
	<img src="<?php  echo get_the_post_thumbnail_url() ?>" class="img-responsive"/>
</a>

<?php if( is_search() ) { ?><div class="entry-links"><?php wp_link_pages(); ?></div><?php } ?>
</section>