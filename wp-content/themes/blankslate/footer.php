<footer class="site-footer">
	<div class="container">

		<div class="row">
			<div class="col-sm-3">
				<h4>Everything GJs</h4>
				<?php wp_nav_menu( array( 'menu' => 'footer-everything-gjs' ) ); ?>
			</div>
			<div class="col-sm-3">
				<h4>Awesome Reading Material</h4>
				<?php wp_nav_menu( array( 'menu' => 'footer-awesome-reading-material' ) ); ?>
			</div>
			<div class="col-sm-3">
				<h4>Come + Say 'Hi!'</h4>
				<div class="social-icons">
				<i class="fa fa-facebook"></i>
			<i class="fa fa-twitter"></i>
			<i class="fa fa-instagram"></i>
			<i class="fa fa-youtube-play"></i>
			<i class="fa fa-google"></i>
			</div>
			</div>
			<div class="col-sm-3">
				<h4>Light or dark theme</h4>
				<i class="fa fa-sun-o" aria-hidden="true" id="light-theme"></i>
				<i class="fa fa-moon-o" aria-hidden="true" id="dark-theme"></i>
			
			</div>
		</div>
	</div>

</footer>
<div class="container">
	<div class="row">
		<div class="col-xs-offset-3 col-xs-6">
			
			


			

			<div class="footer-logo small-print">
			<!--<img src="/wp-content/themes/blankslate/Gig_Junkies_Logo_2_@2x.png" class="img-responsive site-logo"/>	-->
			<img src="/wp-content/themes/blankslate/Gig_Junkies_Logo_1_@2x.png" class="img-responsive site-logo"/>
			<p>Copyright &copy; Gig Junkies 2009 - 2017. All Rights Reserved</p>
			</div>
		</div>
	</div>
</div>

</div>

<?php wp_footer(); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
		$(document).ready(function(){ 
			// todo: tidy this up

			$mobileSearchButton = $('.mobile-search .fa-search');
			$siteSearchBox = $('.site-search-box');

			$mobileSearchButton.click(function(){ 
				$(this).removeClass('fa-search');
				$(this).addClass('fa-close');
				$siteSearchBox.removeClass('hidden-xs');
				$siteSearchBox.find('input').focus();
			});


			$('#dark-theme').click(function(){ 
				$('body').addClass('dark-theme');
				$('.site-logo').attr('src','/wp-content/themes/blankslate/Gig_Junkies_Logo_2_@2x.png');

			});
			$('#light-theme').click(function(){ 
				$('body').removeClass('dark-theme');
				$('.site-logo').attr('src','/wp-content/themes/blankslate/Gig_Junkies_Logo_1_@2x.png');
			});



			if($('.main-menu').find('li.current-menu-item.menu-item-has-children').length){ 
				$('section#content').css('padding-top', '30px');
			}
			else if ($('.main-menu').find('li.current-menu-ancestor.menu-item-has-children').length){ 
				$('section#content').css('padding-top', '30px');	
			}



		

		});
	</script>
</body>
</html>