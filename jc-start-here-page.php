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
		<header class="jc-page-header">
			<div class="jc-page-header_container">
				<h1 class="jc-page-header_title">Start Here</h1>
			</div>
		</header>
			<video>
			<svg width="128" height="128" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
				<circle cx="64" cy="64" r="64" fill="#C4C4C4"/>
				<path d="M46.1769 36.4641C46.1769 34.9245 47.8436 33.9623 49.1769 34.7321L97.1769 62.4449C98.5102 63.2147 98.5102 65.1392 97.1769 65.909L49.1769 93.6218C47.8436 94.3916 46.1769 93.4293 46.1769 91.8897L46.1769 36.4641Z" fill="#E4E4E4"/>
			</svg>

		</video>

		<article class="jc-download-sign-up">
			<form class="jc-email-sign-up_form">
				<input class="jc-email-sign-up_input" type="text" placeholder="Your Name" name="Your Name" aria-label='Enter Name Here '>
				<input class="jc-email-sign-up_input" type="text" placeholder="Your Email Address" aria-label='Enter Email Address here'>
				<submit class="jc-sign-up_btn jc-btn jc-btn--prime" aria-label="sign-up">Sign Up</submit>
			</form>
		</article>

		<article >
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
get_sidebar();
get_footer();
