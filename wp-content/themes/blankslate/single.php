<div class="site-overlay"></div>
<?php get_header(); ?>
<section id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<?php get_template_part( 'entry' ); ?>
				
				<?php 

				// does the post have a gallery
				$galleryCustomField = get_post_meta( get_the_ID(), 'gallery', true );
				
					if(!empty($galleryCustomField)) {
				?>

				<h3>gallery</h3>
				<div class="post-page-image-gallery">
				<div class="grid">

					<?php
	
						//
						/*
						Gallery object template: 
							{
								"gallery_type" : "3",
								"gallery_title": "test gallery title",
								"gallery_images" : [
									{
										"caption" : "test caption",
										"main": "https://farm5.staticflickr.com/4466/37407607014_f51c71a8de_o.jpg"
									},
									{
										"caption" : "test caption 2",
										"main": "https://farm5.staticflickr.com/4461/38116716321_fdd1fcacc0_o.jpg"
									}
								]
							}
						*/

						// Check if the custom field has a value.
						
							$data = json_decode($galleryCustomField,true);

							
							foreach($data['gallery_images'] as &$image){

								$caption = $image['caption'];
								$src = $image['main'];
								
								print "<div class='gallery-image'><p class='caption'>{$caption}</p><img src={$src}/></div>";

							}
				
					?>
					</div>
				</div>
						<?php }?>	
						<?php 
							$footnote = get_post_meta( get_the_ID(), 'footnote', true );
							// Check if the custom field has a value.
							if ( ! empty( $footnote ) ) {
							echo '<div class="post-footnote">';
							echo '<h3>Footnote</h3>';
							echo '<p>'.$footnote.'</p>';
							echo '</div>';
							}
						?>
					


				
				<?php the_tags( '<h3>Tags</h3>', ', ', '<br />' ); ?> 

				<?php if ( ! post_password_required() ) comments_template( '', true ); ?>

			<?php endwhile; endif; ?>


			</div>

		</div>

	</div>

</section>

<?php get_footer(); ?>