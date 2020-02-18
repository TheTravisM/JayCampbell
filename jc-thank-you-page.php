<?php
/**
 * Template Name: Thank You Page
 * Render your site front page, whether the front page displays the blog posts index or a static page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#front-page-display
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

// Use grid layout if blog index is displayed.
if ( is_home() ) {
	wp_rig()->print_styles( 'wp-rig-content', 'wp-rig-front-page' );
} else {
	wp_rig()->print_styles( 'wp-rig-content' );
}

?>
	<main id="primary" class="site-main jc-thank-you-page">

		<article class="jc-thank-you-page_article u-text-center ">
			<a class="" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<svg version="1.1" id="jc-logo-hands-heart" class="jc-thank-you-page_icon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 169 192" style="enable-background:new 0 0 169 192;" xml:space="preserve"><style type="text/css">.st0{fill:url(#jc-border)}.st1{fill:url(#jc-right_hand)}.st2{fill:url(#jc-left_hand)}.st3{fill:url(#jc-heart)}</style><linearGradient id="jc-border" gradientUnits="userSpaceOnUse" x1="84.5" y1="190.071" x2="84.5" y2="7.214" gradientTransform="matrix(-1 0 0 -1 169 191.9)"> <stop offset="0" style="stop-color:#55A4DB"/> <stop offset="0.2" style="stop-color:#7FC348"/> <stop offset="0.4" style="stop-color:#F79327"/> <stop offset="0.64" style="stop-color:#EE2B30"/> <stop offset="0.84" style="stop-color:#F27BAB"/> <stop offset="1" style="stop-color:#673090"/> </linearGradient> <path id="border" class="st0" d="M3.4,95.9c-1.3,4.6-2.2,9.7-2.7,15.2c-1.3,13.3-0.2,24.9-0.2,26.1l0.7,6.8l5.5,4 c1.1,0.7,10.6,7.5,22.7,12.8c5.1,2.4,10.1,4,14.7,5.3c13.4,13.5,32,22.1,34.2,23l6.2,2.8l6.2-2.7c2.2-0.9,20.9-9.5,34.2-23 c4.6-1.3,9.5-2.9,14.7-5.3c12.1-5.4,21.6-12.2,22.7-12.9l5.5-4l0.7-6.8c0-1.3,1.1-12.8-0.2-26.1c-0.5-5.5-1.4-10.6-2.7-15.2 c1.3-4.6,2.2-9.5,2.7-15c1.3-13.3,0.2-24.9,0-26.1l-0.5-6.8l-5.5-4c-1.1-0.7-10.4-7.5-22.7-13c-5.1-2.2-10.1-4-14.7-5.1 c-13.4-13.5-32-22.1-34.2-23.2L84.5,0l-6.2,2.7c-2.2,1.1-20.9,9.7-34.2,23.2c-4.6,1.1-9.5,2.9-14.7,5.1C17.1,36.5,7.8,43.3,6.7,44 l-5.5,4l-0.7,6.8c0,1.3-1.1,12.8,0.2,26.1C1.3,86.4,2.2,91.3,3.4,95.9z M6.6,82.6c-1.2-12.3-0.2-23-0.2-24.2l0.7-6.3l5.1-3.7 c1.1-0.6,9.8-6.9,21.2-12c4.7-2,9.3-3.7,13.6-4.7c12.4-12.5,29.9-20.5,31.9-21.5l5.8-2.5l5.8,2.5c2,1,19.4,9,31.9,21.5 c4.2,1,8.8,2.7,13.6,4.7c11.5,5.1,20.2,11.3,21.2,12l5.1,3.7l0.5,6.3c0.2,1.1,1.2,11.8,0,24.2c-0.6,5.1-1.4,9.7-2.6,13.9 c1.2,4.3,2.1,9,2.6,14.1c1.2,12.3,0.2,23,0.2,24.2l-0.7,6.3l-5.1,3.7c-1.1,0.7-9.9,7-21.2,11.9c-4.7,2.2-9.3,3.7-13.6,4.9 C110,174.2,92.5,182.2,90.5,183l-5.8,2.5l-5.8-2.5c-2-0.9-19.4-8.8-31.9-21.4c-4.2-1.2-8.8-2.7-13.6-4.9 c-11.3-4.9-20.2-11.2-21.2-11.9l-5.1-3.7l-0.7-6.3c0-1.1-1-11.8,0.2-24.2c0.6-5.1,1.4-9.9,2.6-14.1C8,92.3,7.1,87.7,6.6,82.6z"/> <linearGradient id="jc-right_hand" gradientUnits="userSpaceOnUse" x1="118.6528" y1="238.1493" x2="118.6528" y2="55.9224"> <stop offset="0" style="stop-color:#55A4DB"/> <stop offset="0.2" style="stop-color:#7FC348"/> <stop offset="0.4" style="stop-color:#F79327"/> <stop offset="0.64" style="stop-color:#EE2B30"/> <stop offset="0.84" style="stop-color:#F27BAB"/> <stop offset="1" style="stop-color:#673090"/> </linearGradient> <path id="jc-right_hand" class="st1" d="M138.6,98.8c-0.6-3.2-2-6-5.4-7.6c-3.1-1.5-7-1.3-9.9,0.6c-5.5,3.7-4.4,10.3-4.4,16v0.8 c-1.6-0.4-3-0.7-4.6-0.5c-2.6,0.4-4.7,1.6-6.2,3.7c-1.1,1.6-6.8,9.8-8,12.6c-1,2.4-1.6,4.9-1.7,7.5c-0.1,2.5,0,5,0,7.6 s-0.4,5.6,0.2,8.1c0.2,0.7,0.5,1.3,1,1.7s1,0.5,1.6,0.5c0.7,0,1.5-0.2,2.1-0.7c0.5-0.5,0.8-1.2,1-1.9c0.4-2.1,0.1-4.6,0.1-6.7v-7.1 c0-3.1,0.7-6,2.3-8.7c1.2-2.1,5.4-8.2,6.1-9.3c0.9-1.3,2.8-1.9,4.2-1.2c1.5,0.8,2.4,2.7,1.7,4.2c-0.5,1.1-4.9,8-6.2,10.4 c-1.1,1.9,0.3,4.2,2.2,4.4c1.3,0.2,2.3-0.3,3-1.4c2.1-3.5,4.3-7.1,6.4-10.6c0.7-1.2,1-2.7,1-4.1V99.5c0-1.8,1.8-3.7,3.8-3.7 c2.1,0,3.8,2,3.8,3.7V124c0,2.9-0.9,5.6-2.4,8s-3.5,4.5-5.3,6.6c-0.9,1-1.8,2.1-2.6,3.2c-1,1.4-2.8,2.6-3.2,4.3 c-0.2,1,0.1,2,0.8,2.7c0.7,0.7,1.8,1,2.7,0.7c1.3-0.3,2.2-1.5,3-2.5c1.1-1.3,2.1-2.5,3.2-3.8c1.7-2.1,3.5-4.1,5.2-6.2 c3.1-3.9,4.6-8.9,4.6-13.7c0.1-6,0.2-12,0.3-17.9C139.1,103.2,139,101,138.6,98.8L138.6,98.8z"/> <linearGradient id="jc-left_hand" gradientUnits="userSpaceOnUse" x1="50.3" y1="238.5595" x2="50.3" y2="56.3724"> <stop offset="0" style="stop-color:#55A4DB"/> <stop offset="0.2" style="stop-color:#7FC348"/> <stop offset="0.4" style="stop-color:#F79327"/> <stop offset="0.64" style="stop-color:#EE2B30"/> <stop offset="0.84" style="stop-color:#F27BAB"/> <stop offset="1" style="stop-color:#673090"/> </linearGradient> <path id="jc-left_hand" class="st2" d="M46.2,150c0.4,0.1,0.8,0.2,1.1,0.1c1-0.1,2-0.8,2.4-1.7c0.6-1.4-0.1-2.9-1-4.1 c-3-3.7-6.3-7.1-9.1-10.9c-3.1-4.3-3-9.3-3-14.4v-18.8c0-2,1.9-3.9,3.8-3.9c2,0,3.8,2,3.8,3.9c-0.1,5.6-0.1,11.3,0,16.9 c0.1,2.9,1.1,4.9,2.5,7.3c1.4,2.3,2.7,4.6,4.1,6.9c1,1.7,2.7,3.4,4.8,2c1.4-0.9,1.8-2.8,0.9-4.3c-2-3.3-4.1-6.5-6-9.9 c-1.1-1.9,0.2-4.4,2.6-4.7c1.4-0.2,2.4,0.4,3.2,1.5c1.8,2.7,3.7,5.4,5.4,8.2c1.4,2.1,2.3,4.4,2.5,6.8c0.2,1.6,0.3,3.1,0.3,4.7 c0,3.6,0.1,7.3,0,10.9c0,1.3,0.6,3.3,2.1,3.6h1.5c1.5-0.3,2.3-1.9,2.3-3.3v-8.7c0-2.7-0.1-5.5-0.3-8.2c-0.2-2.1-0.9-4.1-1.8-6 c-1.1-2.5-2.8-4.7-4.3-7c-1.2-1.7-2.2-3.5-3.5-5.1c-2.1-2.5-4.8-3.7-8.2-3.3c-0.8,0.1-1.5,0.3-2.4,0.4V108c0-3.1,0-6.2-0.2-9.3 c-0.1-2.1-1.1-3.9-2.6-5.4c-2.5-2.5-5.5-3.5-8.9-2.8c-5.9,1.2-8,6.4-8,11.8v16.5c0,3.8,0,7.7,1,11.4c1,3.9,3.1,7,5.7,10 c2.3,2.7,4.4,5.7,6.9,8.3C44.5,149.1,45.3,149.7,46.2,150z"/> <linearGradient id="jc-heart" gradientUnits="userSpaceOnUse" x1="84.431" y1="-1114.059" x2="84.431" y2="-1295.8361" gradientTransform="matrix(1 0 0 -1 0 -1112)"> <stop offset="0" style="stop-color:#55A4DB"/> <stop offset="0.2" style="stop-color:#7FC348"/> <stop offset="0.4" style="stop-color:#F79327"/> <stop offset="0.64" style="stop-color:#EE2B30"/> <stop offset="0.84" style="stop-color:#F27BAB"/> <stop offset="1" style="stop-color:#673090"/> </linearGradient> <path id="jc-heart" class="st3" d="M91,100.4c5.1-5.5,10.5-10.6,15.8-15.9c4.3-4.2,9.2-8.2,12.2-13.5c1.2-2.1,2.1-4.4,2.4-6.9 c1.4-10.9-6.9-20.6-17.5-22c-7.9-1.1-14.1,2.7-19.4,8c-0.7-0.7-1.3-1.4-2-2.1c-8-8-21.6-8.2-29.5-0.1c-3,3.1-5,7.2-5.5,11.5 c-0.5,3.3,0,6.6,1.2,9.6c2.1,5.1,6.7,9,10.5,12.9c4.7,4.8,9.5,9.3,14,14.2c3.3,3.5,7.2,7.7,12.5,6.8C87.9,102.5,89.7,101.8,91,100.4 z M81.7,95.7c-1.5-1.5-11.8-11.9-15.5-15.6C63.1,77,60,73.9,57,70.7c-2-2.1-3.1-4.6-3.5-7.5c-0.4-2.6,0.1-5.1,1.2-7.5 c1-2,2.5-3.7,4.3-5c1.9-1.4,4.1-2.3,6.5-2.7c2.7-0.4,5.3,0,7.8,1.1c2,0.8,3.6,2.1,5.1,3.6c1.2,1.1,2.3,2.3,3.5,3.5 c1.6,1.6,3.4,1.6,5,0l2.6-2.6c1.6-1.5,3.1-3.1,5-4.1c1.6-0.8,3.3-1.3,5.1-1.6c2.6-0.4,5.1,0.1,7.5,1.2c1.1,0.5,2.3,1.1,3.2,1.9 c2.7,2.3,4.6,5.1,5,8.7c0.1,0.6,0.1,1.2,0.2,1.6c-0.1,3.9-1.4,7.1-4,9.7c-2.3,2.3-14.9,15-18.9,19c-1.8,1.9-3.6,3.8-5.5,5.6 C85.7,97.3,83.3,97.3,81.7,95.7z"/> </svg>
			</a>

			<h1 class="jc-h3">Thank You</h1>

			<p>You may now close this window, or</p>

			<a class="jc-link--prime" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				Click Here To Return To JayCCampbell.com
			</a>

		</article>


<!--		--><?php
//
//		while ( have_posts() ) {
//			the_post();
//
//			get_template_part( 'template-parts/content/entry', get_post_type() );
//		}
//
//		get_template_part( 'template-parts/content/pagination' );
//		?>

	</main><!-- #primary -->
	<?php
	get_footer();
