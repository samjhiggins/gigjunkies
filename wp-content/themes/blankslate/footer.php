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
				<i class="fab fa-facebook"></i>
			<i class="fab fa-twitter"></i>
			<i class="fab fa-instagram"></i>
			<i class="fab fa-youtube"></i>
			<i class="fab fa-google"></i>
			</div>
			</div>
			<div class="col-sm-3">
				<h4>Light or dark theme</h4>
				<i class="fas fa-sun" aria-hidden="true" id="light-theme"></i>
				<i class="fas fa-moon" aria-hidden="true" id="dark-theme"></i>
			
			</div>
		</div>
	</div>

</footer>
<div class="container">
	<div class="row">
		<div class="col-xs-offset-3 col-xs-6">
			
			
			<div class="footer-logo small-print">
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

			var $mobile_nav = { 
				menu_button : $('.mobile-menu i'),
				mobile_navigation : $('.mobile-navigation-links-container'),
				search_button : $('.mobile-search i'),
				search_box : $('.site-search-box'),
				search_box_input : $('.site-search-box').find('input'),
				search_open : false
			}


			/* open site search and focus input */
			$mobile_nav.search_button.click(function(){ 

				if(!$mobile_nav.search_open){
					$(this).removeClass('fa-search');
					$(this).addClass('fa-times');
					$mobile_nav.search_box.removeClass('hidden-xs');
					$mobile_nav.search_box_input.focus();

					$mobile_nav.search_open = true;
				}
				else { 
					$(this).removeClass('fa-times');
					$(this).addClass('fa-search');
					$mobile_nav.search_box.addClass('hidden-xs');
					$mobile_nav.search_open = false;
				}

				
			});

			/* open /close main navigation on mobile */
			$mobile_nav.menu_button.click(function(){ 
				$('.mobile-nav').toggleClass('open');
				$mobile_nav.mobile_navigation.slideToggle(150);
			})

			
			//flyout menu
			$('.mobile-nav .menu-item-has-children > a').click(function(e){
				e.preventDefault();
				$(this).siblings('.sub-menu').slideToggle(150);
				$(this).parent().toggleClass('expanded');
			});



			/* initiate themes */
			$('#dark-theme').click(function(){ 
				$('body').addClass('dark-theme');
				$('.site-logo').attr('src','/wp-content/themes/blankslate/Gig_Junkies_Logo_2_@2x.png');

			});
			$('#light-theme').click(function(){ 
				$('body').removeClass('dark-theme');
				$('.site-logo').attr('src','/wp-content/themes/blankslate/Gig_Junkies_Logo_1_@2x.png');
			});


			
			//if we're on desktop
			if($('.main-menu').is(':visible')){ 
				if($('.main-menu').find('li.current-menu-item.menu-item-has-children').length){ 
					$('section#content').css('padding-top', '50px');
				}
				else if ($('.main-menu').find('li.current-menu-ancestor.menu-item-has-children').length){ 
					$('section#content').css('padding-top', '50px');	
				}
			}


		});
	</script>
</body>
</html>