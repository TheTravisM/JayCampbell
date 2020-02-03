<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

	<footer id="colophon" class="jc-footer">
		<nav class="jc-footer-nav">
			<ul class="jc-footer-nav_ul">
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>start-here" rel="start here">
						Start Here
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>faq" rel="FAQ">
						FAQ's
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>blog" rel="blog">
						Blog
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>podcast" rel="podcast">
						Podcast
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>store" rel="store">
						Store
					</a>
				</li>
			</ul>
			<ul class="jc-footer-nav_ul">
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>support" rel="support">
						Support
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>resources" rel="resources">
						Resources
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>partners" rel="partners">
						Partners
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>guests" rel="guests">
						Podcast Guests
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>appearances" rel="Appearances">
						Appearances
					</a>
				</li>
			</ul>
			<ul class="jc-footer-nav_ul">
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-use" rel="terms of use">
						Terms of Use
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy" rel="privacy policy">
						Privacy Policy
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>return-policy" rel="return policy">
						Return Policy
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<a class="jc-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>disclosure" rel="disclosure">
						Disclosure
					</a>
				</li>
				<li class="jc-footer-nav_li">
					<span class="jc-footer_copy-right">
						Copyright (c) 2020 Jay C. Campbell
					<span>
				</li>
			</ul>
		</nav>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- <?php /* get_template_part( 'template-parts/footer/info' ); */ ?> -->

<?php wp_footer(); ?>

</body>
</html>
