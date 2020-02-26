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
	<!-- EMAIL SIGN UP -->
	<article class="jc-email-sign-up_section">
		<div class="jc-email-sign-up_container jc-page_container">
			<h2 class="jc-h3 jc-email-sign-up_title">
				Sign up for Jay’s email list and get a free PDF!
			</h2>
			<form class="jc-email-sign-up u-width-960" aria-label="Sign up for Jay’s email list">
				<input class="jc-email-sign-up_input jc-email-sign-up_input--1" type="text" placeholder="Your Name" name="Your Name" aria-label='Enter Name Here '>
				<input class="jc-email-sign-up_input jc-email-sign-up_input--2" type="text" placeholder="Your Email Address" aria-label='Enter Email Address here'>
				<button class="jc-sign-up_btn jc-btn jc-btn--prime" aria-label="sign-up" type="submit" >Sign Up</button>
			</form>
		</div>
	</article>

	<!-- FOOTER -->
	<footer id="colophon" class="jc-footer">
		<div class="jc-footer_container">
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
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<!-- <?php /* get_template_part( 'template-parts/footer/info' ); */ ?> -->

<?php wp_footer(); ?>

</body>
</html>
