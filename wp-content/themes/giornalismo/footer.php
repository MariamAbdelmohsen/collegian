<?php
/**
* Footer.php
*
* Footer file for Giornalismo
*
* @author Jacob Martella
* @package Giornalismo
* @version 1.5
*/
?>
</div><!--End Wrap-->
<footer class="footer">
	<div class="wrapper-footer">
	  <div id="leftcoll">
		<div class="footer-left-logo">
			<a href="index.php"><img class="footer-logo" src="<?php bloginfo('template_directory'); ?>/images/logo.jpg"/></a>
		</div>
			 <!-- <div id="footer-left-links"> -->
				<?php wp_nav_menu(
							array(
								'theme_location' => 'newsfooter',
						'container_class' => 'footer-left-links'
						)); ?>
					<!-- </div> -->
		  </div>

	  <div id="rightcoll">
		  <!-- <div id="footer-right-links"> -->
		  <?php
			wp_nav_menu( array(
				'theme_location' => 'my-custom-menu',
				'container_class' => 'footer-right-links' ) );  ?>
		  <div class="footer-right">
			<div class="subscribe-header"><a href="#" class="shownewsletterbox"><button>Subscribe</button></a></div>
				<?php if ( dynamic_sidebar( 'header_widget_area' ) ) : else : ?>
				<?php endif; ?>

				<div class="footer-right-social-media">
					  <ul class="giornalismo-social-link">
							  <li><a href="https://www.facebook.com/seattlecollegian" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook1.png" /></a>
							  </li>
								  <li><a href="https://twitter.com/infocollegian" target="_blank" alt="Twitter"><img src="<?php echo get_template_directory_uri(); ?>/images/twitter1.png" /></a>
							  </li>
								  <li><a href="https://www.instagram.com/theseattlecollegian" target="_blank" alt="Instagram"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram1.png" /></a>
							  </li>
								  <li><a href="#" target="_blank" alt="LinkedIn"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.png" /></a>
							  </li>
							  </ul>
				</div>
		  </div>
		</div>

<div class="copyright">
	<p class="bordertop">  
	&copy; 2018 – <?php echo date('Y'); ?> <a href="https://seattlecollegian.com/">Seattle Collegian</a> - 
	  Design by <a href = "https://sites.google.com/view/scptk/home" stye="text-decoration:none"> PTK</a> Member, <a href="http://emiliochavez.com/" target="_blank"> Emilio Chavez</a>
	  - Developed by  <a href="http://anthonydevelopedthis.com/" target="_blank" >Anthony Stenberg</a>
	  and<a href="http://miminaz.com/" target="_blank"> Mariam Abdelmohsen</a>
	</p>
</div>
</div>

</footer>


<?php wp_footer(); ?>
</body>
</html>
