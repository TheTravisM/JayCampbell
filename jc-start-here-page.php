<?php
/**
 *  Template Name: Start Here
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main jc-start-here-page">

		<!-- jc-page-header -->
		<header class="jc-page-header">
			<div class="jc-page-header_container">
				<h1 class="jc-page-header_title jc-h1 u-align-self-center">Start Here</h1>
			</div>
		</header>

		<!-- jc-page-video -->
		<video id="jc-start-here-video" class="jc-page-video jc-start-here-page_video" controls>
			<source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
			<source src="https://www.w3schools.com/html/mov_bbb.ogg" type="video/ogg">
			Your browser does not support HTML5 video.
		</video>

		<!-- jc-download-sig-up -->
		<article class="jc-page_section">
			<div class="jc-page_container u-width-960">
				<form class="jc-download-sign-up">
					<input class="jc-download-sign-up_input jc-download-sign-up_input--1" type="text" placeholder="Your Name" name="Your Name" aria-label='Enter Name Here '>
					<input class="jc-download-sign-up_input jc-download-sign-up_input--2" type="text" placeholder="Your Email Address" aria-label='Enter Email Address here'>
					<submit class="jc-download-sign-up_btn jc-btn jc-btn--prime" aria-label="sign-up">Download</submit>
				</form>
			</div>
		</article>

		<article class="jc-start-here-page_content">
			<p>Jowl kielbasa biltong, sirloin frankfurter bresaola bacon porchetta chicken tenderloin salami ribeye corned beef shank ball tip. Boudin shank swine ball tip shoulder, pig tail fatback meatball chicken rump pork. Sirloin kielbasa beef ribs, chislic boudin tenderloin chicken bresaola brisket turkey beef. Beef ribs shankle bresaola pancetta leberkas spare ribs shank filet mignon swine tenderloin buffalo short loin. Boudin strip steak chicken, tri-tip ground round turkey pork loin pork biltong pastrami. Chislic meatball turducken kevin buffalo leberkas.</p>
			<p>Frankfurter turkey leberkas sausage turducken pork loin. Salami turkey leberkas, spare ribs cupim frankfurter swine flank sirloin doner tail prosciutto beef capicola pastrami. Kevin turkey jowl, t-bone pancetta short loin strip steak pastrami frankfurter tail andouille. Tongue capicola turkey, swine chuck fatback hamburger shank prosciutto rump corned beef. Bresaola biltong pancetta boudin, corned beef pig meatball t-bone buffalo sirloin. Flank tenderloin swine leberkas filet mignon.</p>
			<p>Jowl kielbasa biltong, sirloin frankfurter bresaola bacon porchetta chicken tenderloin salami ribeye corned beef shank ball tip. Boudin shank swine ball tip shoulder, pig tail fatback meatball chicken rump pork. Sirloin kielbasa beef ribs, chislic boudin tenderloin chicken bresaola brisket turkey beef. Beef ribs shankle bresaola pancetta leberkas spare ribs shank filet mignon swine tenderloin buffalo short loin. Boudin strip steak chicken, tri-tip ground round turkey pork loin pork biltong pastrami. Chislic meatball turducken kevin buffalo leberkas.</p>
			<p>Frankfurter turkey leberkas sausage turducken pork loin. Salami turkey leberkas, spare ribs cupim frankfurter swine flank sirloin doner tail prosciutto beef capicola pastrami. Kevin turkey jowl, t-bone pancetta short loin strip steak pastrami frankfurter tail andouille. Tongue capicola turkey, swine chuck fatback hamburger shank prosciutto rump corned beef. Bresaola biltong pancetta boudin, corned beef pig meatball t-bone buffalo sirloin. Flank tenderloin swine leberkas filet mignon.</p>
		</article>


		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', 'page' );
		}
		?>
	</main><!-- #primary -->
<?php
/* Sidebar has been removed at  'JayC-wprig-3/inc/Sidebars/Component.php' */
//get_sidebar();
get_footer();
