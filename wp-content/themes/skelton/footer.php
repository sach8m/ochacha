<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Starter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer row">
		<div class="one-third column footer-con">
			<nav class="info-navigation" role="navigation">
				<p class="footer-title">Info</p>
		    <?php
		      wp_nav_menu( array(
		        'theme_location' => 'menu-info',
		        'menu_class'     => 'info-links-menu',
		        'fallback_cb' => false
		      ) );
		    ?>
		  </nav>
		</div>
		<div class="one-third column footer-con">
			<nav class="social-navigation" role="navigation">
				<p class="footer-title">Social</p>
		    <?php
		      wp_nav_menu( array(
		        'theme_location' => 'menu-social',
		        'menu_class'     => 'social-links-menu',
		        'fallback_cb' => false
		      ) );
		    ?>
		  </nav>
		</div>
		<div class="one-third column footer-con">
			<p class="footer-title">Subscribe</p>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
