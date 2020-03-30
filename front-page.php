<?php
/**
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
	<main id="primary" class="site-main jc-front-page">

		<!-- JC HERO BANNER -->
		<article class="jc-hero-banner">
			<section class="jc-hero-banner_container">
				<picture class="jc-hero-banner_picture">
					<!--<source srcset="/media/examples/surfer-240-200.jpg"  media="(min-width: 800px)">-->
					<!-- <img class="jc-hero-banner_img" alt="Jay C Campbell" src="< ?php echo get_theme_file_uri('/assets/images/jay-c-campbell-hero-01.png'); ?>" /> -->
					<img class="jc-hero-banner_img" alt="Jay C Campbell" src="<?php echo get_theme_file_uri('/assets/images/jay-red-shirt.png'); ?>" />
				</picture>
				<div class="jc-hero-banner_content">
					<h2 class="jc-hero-banner_cta">
						<!--
						 How to Live Fully Optimized
						<br>From the Body, Mind and Soul
						-->
						Books, Videos, and Coaching
						<br>to Help You Fully Optimize
						<br>Your Body, Mind, and Soul

					</h2>
					<a class="jc-btn jc-btn--prime jc-hero-banner_btn" href="<?php echo esc_url( home_url( '/' ) ); ?>start" rel="start">
						Get Started
					</a>
				</div>
			</section>
		</article>

		<!-- Subject List -->
		<!-- TODO: Hide for now until start pages are complete
		<article class="jc-section">
			<div class="jc-subject-list">
				<a class="jc-subject jc-subject--physical" href="< ?php echo esc_url( home_url( '/' ) ); ?>tag/physical">
					<svg class="jc-subject_svg-icon jc-subject_svg-icon--physical" width="49" height="42" viewBox="0 0 49 42" xmlns="http://www.w3.org/2000/svg">
						<path d="M34.5659 30.166L25.5819 39.538C25.0099 40.136 24.0619 40.156 23.4639 39.584C23.4479 39.568 23.4319 39.554 23.4179 39.538L14.4319 30.164"/>
						<path d="M3.44146 18.174C1.61346 14.898 1.52146 10.93 3.19746 7.57399C5.99946 1.96999 12.8155 -0.302013 18.4195 2.50199C19.5095 3.04799 20.5055 3.76399 21.3675 4.62599L24.4995 7.74799L27.6315 4.61599C32.0635 0.185987 39.2475 0.185987 43.6775 4.61599C44.5395 5.47799 45.2575 6.47399 45.8015 7.56399C47.4775 10.92 47.3875 14.886 45.5635 18.164"/>
						<path d="M2 24.166H15.036C15.32 24.166 15.58 24.006 15.708 23.752L19.154 16.858C19.334 16.484 19.784 16.328 20.158 16.508C20.35 16.602 20.494 16.772 20.554 16.978L23.916 28.178C24.044 28.574 24.468 28.79 24.862 28.662C25.064 28.596 25.228 28.45 25.316 28.258L28.456 20.93C28.62 20.548 29.064 20.374 29.444 20.538C29.576 20.596 29.69 20.688 29.77 20.808L32.002 24.156H47.002"/>
					</svg>
					<h3 class="jc-subject_title">Physical</h3>
				</a>
				<a class="jc-subject jc-subject--nutritional" href="< ?php echo esc_url( home_url( '/' ) ); ?>tag/nutrition">
					<svg class="jc-subject_svg-icon jc-subject_svg-icon--fork-n-knife" width="37" height="48" viewBox="0 0 37 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M7.99805 1.5V46.5" stroke="#4E4E4E" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M13.998 1.5V15C13.988 18.31 11.308 20.99 7.99805 21C4.68805 20.99 2.00805 18.31 1.99805 15V1.5" stroke="#4E4E4E" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
						<path d="M25.9981 31.5H31.9981C33.5941 31.56 34.9381 30.316 34.9981 28.72C35.0001 28.646 35.0001 28.574 34.9981 28.5C34.6761 19.884 34.3281 10.86 28.7721 2.186C28.3141 1.488 27.3761 1.294 26.6781 1.752C26.2561 2.03 25.9981 2.5 25.9961 3.006V46.5" stroke="#4E4E4E" stroke-width="1.25" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					<h3 class="jc-subject_title">Nutritional</h3>
				</a>
				<a class="jc-subject jc-subject--sexual" href="< ?php echo esc_url( home_url( '/' ) ); ?>tag/sexual">
					<svg class="jc-subject_svg-icon jc-subject_svg-icon--sexual" width="42" height="48" viewBox="0 0 42 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M21 13.138C26.17 17.284 26.998 24.838 22.852 30.008C18.706 35.178 11.152 36.006 5.98202 31.86C0.812024 27.714 -0.015976 20.16 4.13002 14.99C4.85802 14.084 5.71202 13.286 6.67002 12.626"/>
						<path d="M13.5 34.5V46.5"/>
						<path d="M16.2681 27.648C11.2001 23.376 10.5561 15.806 14.8261 10.738C19.0961 5.67 26.6681 5.026 31.7361 9.296C36.6661 13.452 37.4301 20.76 33.4681 25.846"/>
						<path d="M32.4861 9.984L40.5001 1.5"/>
						<path d="M33 1.5H40.5V9"/>
						<path d="M7.5 40.5H19.5"/>
					</svg>
					<h3 class="jc-subject_title">Sexual</h3>
				</a>
				<a class="jc-subject jc-subject--mental" href="< ?php echo esc_url( home_url( '/' ) ); ?>tag/mental">
					<svg class="jc-subject_svg-icon jc-subject_svg-icon--mental" width="48" height="48" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg">
						<path d="M28.4101 4.73999L5.07609 28.076C1.02809 32.23 1.11409 38.876 5.26809 42.924C9.34609 46.898 15.8461 46.898 19.9241 42.924L43.2601 19.6C47.3641 15.5 47.3661 8.84799 43.2661 4.74599C39.1661 0.643987 32.5141 0.639988 28.4101 4.73999Z"/>
						<path d="M30.5321 32.318L15.6821 17.468" stroke="#4E4E4E"/>
						<path d="M31.6001 10.044C33.3561 8.28597 36.2041 8.28597 37.9621 10.042L37.9641 10.044"/>
					</svg>
					<h3 class="jc-subject_title">Mental</h3>
				</a>
				<a class="jc-subject jc-subject--heart" href="< ?php echo esc_url( home_url( '/' ) ); ?>tag/heart">
					<svg class="jc-subject_svg-icon jc-subject_svg-icon--heart" width="45" height="45" viewBox="0 0 45 45" xmlns="http://www.w3.org/2000/svg">
						<path d="M15.7295 15.7307C26.4128 5.04736 38.1046 -0.582446 41.8432 3.15799C45.5819 6.89843 39.9539 18.5884 29.2706 29.2718C18.5872 39.9551 6.8954 45.5831 3.15679 41.8445C-0.581827 38.1058 5.04616 26.414 15.7295 15.7307Z"/>
						<path d="M3.15677 3.15606C6.89539 -0.582559 18.5872 5.04542 29.2705 15.7287C39.9539 26.4121 45.5837 38.1039 41.8432 41.8425C38.1028 45.5811 26.4128 39.9531 15.7295 29.2698C5.04614 18.5865 -0.583667 6.89649 3.15677 3.15606Z"/>
					</svg>
					<h3 class="jc-subject_title">Heart</h3>
				</a>
				<a class="jc-subject jc-subject--energy" href="< ?php echo esc_url( home_url( '/' ) ); ?>tag/energy">
					<svg class="jc-subject_svg-icon jc-subject_svg-icon--energy" width="42" height="48" viewBox="0 0 42 48" fill="none" xmlns="http://www.w3.org/2000/svg">
						<path d="M40.5 22.5C40.5 20.844 39.156 19.5 37.5 19.5H30C30.648 17.032 31.148 14.528 31.5 12C31.5 6.202 26.798 1.5 21 1.5C15.202 1.5 10.5 6.202 10.5 12C10.852 14.528 11.352 17.032 12 19.5H4.5C2.844 19.5 1.5 20.844 1.5 22.5V25.5C1.5 27.156 2.844 28.5 4.5 28.5H13.5C15.156 28.5 16.5 29.844 16.5 31.5V43.5C16.5 45.156 17.844 46.5 19.5 46.5H22.5C24.156 46.5 25.5 45.156 25.5 43.5V31.5C25.5 29.844 26.844 28.5 28.5 28.5H37.5C39.156 28.5 40.5 27.156 40.5 25.5V22.5Z"/>
						<path d="M25.5 12C25.5 14.486 21 19.5 21 19.5C21 19.5 16.5 14.486 16.5 12C16.5 9.514 18.514 7.5 21 7.5C23.486 7.5 25.5 9.514 25.5 12Z"/>
					</svg>
					<h3 class="jc-subject_title">Energy</h3>
				</a>
			</div>
		</article>

		<hr class="jc-where-to-start_hr">
		-->

		<!-- WHERE TO START -->
		<!--
		<article class="jc-where-to-start">
			<div class="jc-where-to-start_container">
				<h2 class="jc-where-to-start_title">
					Don't know where to start?
					Let's make it easy
				</h2>
				<a class="jc-btn jc-btn--prime jc-where-to-start_btn" href="<?php echo esc_url( home_url( '/' ) ); ?>start-here" rel="start here">
					Find your starting place
				</a>
			</div>
		</article>
		-->

		<!-- EMAIL NEW -->
		<script src="https://f.convertkit.com/ckjs/ck.5.js"></script>
		<article class="jc-email-sign-up_section">
			<div class="jc-email-sign-up_container jc-page_container">
				<h2 class="jc-h4 jc-email-sign-up_title u-margin-bottom--32">
					Join My Email List and Receive the Highest Value Intel on Full-Spectrum Optimization Daily to Your Inbox
				</h2>

				<form action="https://app.convertkit.com/forms/1251296/subscriptions" class="seva-form formkit-form u-width-960" method="post"
				      data-sv-form="1251296" data-uid="72292ff8f4" data-format="inline" data-version="5"
				      data-options="{&quot;settings&quot;:{&quot;after_subscribe&quot;:{&quot;action&quot;:&quot;message&quot;,&quot;success_message&quot;:&quot;Success! Now check your email to confirm your subscription.&quot;,&quot;redirect_url&quot;:&quot;&quot;},&quot;analytics&quot;:{&quot;google&quot;:null,&quot;facebook&quot;:null,&quot;segment&quot;:null,&quot;pinterest&quot;:null},&quot;modal&quot;:{&quot;trigger&quot;:&quot;timer&quot;,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:5,&quot;devices&quot;:&quot;all&quot;,&quot;show_once_every&quot;:15},&quot;powered_by&quot;:{&quot;show&quot;:false,&quot;url&quot;:&quot;https://convertkit.com/?utm_source=dynamic&amp;utm_medium=referral&amp;utm_campaign=poweredby&amp;utm_content=form&quot;},&quot;recaptcha&quot;:{&quot;enabled&quot;:false},&quot;return_visitor&quot;:{&quot;action&quot;:&quot;show&quot;,&quot;custom_content&quot;:&quot;&quot;},&quot;slide_in&quot;:{&quot;display_in&quot;:&quot;bottom_right&quot;,&quot;trigger&quot;:&quot;timer&quot;,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:5,&quot;devices&quot;:&quot;all&quot;,&quot;show_once_every&quot;:15},&quot;sticky_bar&quot;:{&quot;display_in&quot;:&quot;top&quot;,&quot;trigger&quot;:&quot;timer&quot;,&quot;scroll_percentage&quot;:null,&quot;timer&quot;:5,&quot;devices&quot;:&quot;all&quot;,&quot;show_once_every&quot;:15}},&quot;version&quot;:&quot;5&quot;}"
				      min-width="400 500 600 700 800">
					<div data-style="clean">
						<ul class="formkit-alert formkit-alert-error" data-element="errors" data-group="alert"></ul>
						<div data-element="fields" data-stacked="false" class="seva-fields formkit-fields">
							<div class="formkit-field">
								<input class="formkit-input jc-email-sign-up_input" aria-label="Your first name" name="fields[first_name]" placeholder="Your First Name" type="text">
							</div>
							<div class="formkit-field">
								<input class="formkit-input jc-email-sign-up_input" name="email_address" placeholder="Your Email Address" required="" type="email">
							</div>
							<button data-element="submit" class="formkit-submit formkit-submit jc-sign-up_btn jc-btn jc-btn--prime">
								<div class="formkit-spinner">
									<div></div>
									<div></div>
									<div></div>
								</div>
								<span>Sign Up</span>
							</button>
						</div>
					</div>
					<style>
						form.formkit-form input {
							height: 55px;
							font-size: 20px;
						}
						.formkit-form[data-uid="72292ff8f4"] * {
							box-sizing: border-box;
						}
						.formkit-form[data-uid="72292ff8f4"] {
							-webkit-font-smoothing: antialiased;
							-moz-osx-font-smoothing: grayscale;
						}
						.formkit-form[data-uid="72292ff8f4"] legend {
							border: none;
							font-size: inherit;
							margin-bottom: 10px;
							padding: 0;
							position: relative;
							display: table;
						}
						.formkit-form[data-uid="72292ff8f4"] fieldset {
							border: 0;
							padding: 0.01em 0 0 0;
							margin: 0;
							min-width: 0;
						}
						.formkit-form[data-uid="72292ff8f4"] body:not(:-moz-handler-blocked) fieldset {
							display: table-cell;
						}
						.formkit-form[data-uid="72292ff8f4"] h1,
						.formkit-form[data-uid="72292ff8f4"] h2,
						.formkit-form[data-uid="72292ff8f4"] h3,
						.formkit-form[data-uid="72292ff8f4"] h4,
						.formkit-form[data-uid="72292ff8f4"] h5,
						.formkit-form[data-uid="72292ff8f4"] h6 {
							color: inherit;
							font-size: inherit;
							font-weight: inherit;
						}
						.formkit-form[data-uid="72292ff8f4"] p {
							color: inherit;
							font-size: inherit;
							font-weight: inherit;
						}
						.formkit-form[data-uid="72292ff8f4"] ol:not([template-default]),
						.formkit-form[data-uid="72292ff8f4"] ul:not([template-default]),
						.formkit-form[data-uid="72292ff8f4"] blockquote:not([template-default]) {
							text-align: left;
						}
						.formkit-form[data-uid="72292ff8f4"] p:not([template-default]),
						.formkit-form[data-uid="72292ff8f4"] hr:not([template-default]),
						.formkit-form[data-uid="72292ff8f4"] blockquote:not([template-default]),
						.formkit-form[data-uid="72292ff8f4"] ol:not([template-default]),
						.formkit-form[data-uid="72292ff8f4"] ul:not([template-default]) {
							color: inherit;
							font-style: initial;
						}
						.formkit-form[data-uid="72292ff8f4"][data-format="modal"] {
							display: none;
						}
						.formkit-form[data-uid="72292ff8f4"][data-format="slide in"] {
							display: none;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-input,
						.formkit-form[data-uid="72292ff8f4"] .formkit-select,
						.formkit-form[data-uid="72292ff8f4"] .formkit-checkboxes {
							width: 100%;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-button,
						.formkit-form[data-uid="72292ff8f4"] .formkit-submit {
							border: 0;
							cursor: pointer;
							display: inline-block;
							text-align: center;
							font-weight: 500;
							cursor: pointer;
							margin-bottom: 15px;
							overflow: hidden;
							padding: 0;
							position: relative;
							vertical-align: middle;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-button:hover,
						.formkit-form[data-uid="72292ff8f4"] .formkit-submit:hover,
						.formkit-form[data-uid="72292ff8f4"] .formkit-button:focus,
						.formkit-form[data-uid="72292ff8f4"] .formkit-submit:focus {
							outline: none;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-button:hover>span,
						.formkit-form[data-uid="72292ff8f4"] .formkit-submit:hover>span,
						.formkit-form[data-uid="72292ff8f4"] .formkit-button:focus>span,
						.formkit-form[data-uid="72292ff8f4"] .formkit-submit:focus>span {
							background-color: rgba(0, 0, 0, 0.1);
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-button>span,
						.formkit-form[data-uid="72292ff8f4"] .formkit-submit>span {
							display: block;
							-webkit-transition: all 300ms ease-in-out;
							transition: all 300ms ease-in-out;
							padding: 12px 24px;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-input {
							-webkit-flex: 1 0 auto;
							-ms-flex: 1 0 auto;
							flex: 1 0 auto;
							-webkit-transition: border-color ease-out 300ms;
							transition: border-color ease-out 300ms;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-input:focus { }
						.formkit-form[data-uid="72292ff8f4"] .formkit-input::-webkit-input-placeholder {
							color: inherit;
							opacity: 0.8;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-input::-moz-placeholder {
							color: inherit;
							opacity: 0.8;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-input:-ms-input-placeholder {
							color: inherit;
							opacity: 0.8;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-input::placeholder {
							color: inherit;
							opacity: 0.8;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="dropdown"] {
							position: relative;
							display: inline-block;
							width: 100%;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="dropdown"]::before {
							content: "";
							top: calc(50% - 2.5px);
							right: 10px;
							position: absolute;
							pointer-events: none;
							border-color: #4f4f4f transparent transparent transparent;
							border-style: solid;
							border-width: 6px 6px 0 6px;
							height: 0;
							width: 0;
							z-index: 999;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="dropdown"] select {
							height: auto;
							width: 100%;
							cursor: pointer;
							color: #333333;
							line-height: 1.4;
							margin-bottom: 0;
							padding: 0 6px;
							-webkit-appearance: none;
							-moz-appearance: none;
							appearance: none;
							font-size: 15px;
							padding: 12px;
							padding-right: 25px;
							border: 1px solid #e3e3e3;
							background: #ffffff;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="dropdown"] select:focus {
							outline: none;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] {
							text-align: left;
							margin: 0;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"] {
							margin-bottom: 10px;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"] * {
							cursor: pointer;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"]:last-of-type {
							margin-bottom: 0;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"] input[type="checkbox"] {
							display: none;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"] input[type="checkbox"]+label::after {
							content: none;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"] input[type="checkbox"]:checked+label::after {
							border-color: #ffffff;
							content: "";
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"] input[type="checkbox"]:checked+label::before {
							background: #10bf7a;
							border-color: #10bf7a;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"] label {
							position: relative;
							display: inline-block;
							padding-left: 28px;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"] label::before,
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"] label::after {
							position: absolute;
							content: "";
							display: inline-block;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"] label::before {
							height: 16px;
							width: 16px;
							border: 1px solid #e3e3e3;
							background: #ffffff;
							left: 0px;
							top: 3px;
						}
						.formkit-form[data-uid="72292ff8f4"] [data-group="checkboxes"] [data-group="checkbox"] label::after {
							height: 4px;
							width: 8px;
							border-left: 2px solid #4d4d4d;
							border-bottom: 2px solid #4d4d4d;
							-webkit-transform: rotate(-45deg);
							-ms-transform: rotate(-45deg);
							transform: rotate(-45deg);
							left: 4px;
							top: 8px;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-alert {
							background: #f9fafb;
							border: 1px solid #e3e3e3;
							border-radius: 5px;
							-webkit-flex: 1 0 auto;
							-ms-flex: 1 0 auto;
							flex: 1 0 auto;
							list-style: none;
							margin: 25px auto;
							padding: 12px;
							text-align: center;
							width: 100%;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-alert:empty { display: none; }
						.formkit-form[data-uid="72292ff8f4"] .formkit-alert-success {
							background: #d3fbeb;
							border-color: #10bf7a;
							color: #0c905c;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-alert-error {
							background: #fde8e2;
							border-color: #f2643b;
							color: #ea4110;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-spinner {
							display: -webkit-box;
							display: -webkit-flex;
							display: -ms-flexbox;
							display: flex;
							height: 0px;
							width: 0px;
							margin: 0 auto;
							position: absolute;
							top: 0;
							left: 0;
							right: 0;
							width: 0px;
							overflow: hidden;
							text-align: center;
							-webkit-transition: all 300ms ease-in-out;
							transition: all 300ms ease-in-out;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-spinner>div {
							margin: auto;
							width: 12px;
							height: 12px;
							background-color: #fff;
							opacity: 0.3;
							border-radius: 100%;
							display: inline-block;
							-webkit-animation: formkit-bouncedelay-formkit-form-data-uid-72292ff8f4- 1.4s infinite ease-in-out both;
							animation: formkit-bouncedelay-formkit-form-data-uid-72292ff8f4- 1.4s infinite ease-in-out both;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-spinner>div:nth-child(1) {
							-webkit-animation-delay: -0.32s;
							animation-delay: -0.32s;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-spinner>div:nth-child(2) {
							-webkit-animation-delay: -0.16s;
							animation-delay: -0.16s;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-submit[data-active] .formkit-spinner {
							opacity: 1;
							height: 100%;
							width: 50px;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-submit[data-active] .formkit-spinner~span { opacity: 0; }
						.formkit-form[data-uid="72292ff8f4"] .formkit-powered-by[data-active="false"] { opacity: 0.35; }
						@-webkit-keyframes formkit-bouncedelay-formkit-form-data-uid-72292ff8f4- {
							0%,
							80%,
							100% {
								-webkit-transform: scale(0);
								-ms-transform: scale(0);
								transform: scale(0);
							}
							40% {
								-webkit-transform: scale(1);
								-ms-transform: scale(1);
								transform: scale(1);
							}
						}
						@keyframes formkit-bouncedelay-formkit-form-data-uid-72292ff8f4- {
							0%,
							80%,
							100% {
								-webkit-transform: scale(0);
								-ms-transform: scale(0);
								transform: scale(0);
							}
							40% {
								-webkit-transform: scale(1);
								-ms-transform: scale(1);
								transform: scale(1);
							}
						}
						.formkit-form[data-uid="72292ff8f4"] blockquote {
							padding: 10px 20px;
							margin: 0 0 20px;
							border-left: 5px solid #e1e1e1;
						}
						.formkit-form[data-uid="72292ff8f4"] {  }
						.formkit-form[data-uid="72292ff8f4"] [data-style="clean"] {
							width: 100%;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-fields {
							display: -webkit-box;
							display: -webkit-flex;
							display: -ms-flexbox;
							display: flex;
							-webkit-flex-wrap: wrap;
							-ms-flex-wrap: wrap;
							flex-wrap: wrap;
							margin: 0 auto;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-field,
						.formkit-form[data-uid="72292ff8f4"] .formkit-submit {
							margin: 0 0 15px 0;
							-webkit-flex: 1 0 100%;
							-ms-flex: 1 0 100%;
							flex: 1 0 100%;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-powered-by {
							color: #7d7d7d;
							display: block;
							font-size: 12px;
							margin: 0;
							text-align: center;
						}
						.formkit-form[data-uid="72292ff8f4"][min-width~="700"] [data-style="clean"],
						.formkit-form[data-uid="72292ff8f4"][min-width~="800"] [data-style="clean"] {
							padding: 10px;
						}
						.formkit-form[data-uid="72292ff8f4"][min-width~="700"] .formkit-fields[data-stacked="false"],
						.formkit-form[data-uid="72292ff8f4"][min-width~="800"] .formkit-fields[data-stacked="false"] {
							margin-left: -5px;
							margin-right: -5px;
						}
						.formkit-form[data-uid="72292ff8f4"][min-width~="700"] .formkit-fields[data-stacked="false"] .formkit-field,
						.formkit-form[data-uid="72292ff8f4"][min-width~="800"] .formkit-fields[data-stacked="false"] .formkit-field,
						.formkit-form[data-uid="72292ff8f4"][min-width~="700"] .formkit-fields[data-stacked="false"] .formkit-submit,
						.formkit-form[data-uid="72292ff8f4"][min-width~="800"] .formkit-fields[data-stacked="false"] .formkit-submit {
							margin: 0 5px 15px 5px;
						}
						.formkit-form[data-uid="72292ff8f4"][min-width~="700"] .formkit-fields[data-stacked="false"] .formkit-field,
						.formkit-form[data-uid="72292ff8f4"][min-width~="800"] .formkit-fields[data-stacked="false"] .formkit-field {
							-webkit-flex: 100 1 auto;
							-ms-flex: 100 1 auto;
							flex: 100 1 auto;
						}
						.formkit-form[data-uid="72292ff8f4"][min-width~="700"] .formkit-fields[data-stacked="false"] .formkit-submit,
						.formkit-form[data-uid="72292ff8f4"][min-width~="800"] .formkit-fields[data-stacked="false"] .formkit-submit {
							-webkit-flex: 1 1 auto;
							-ms-flex: 1 1 auto;
							flex: 1 1 auto;
						}
						.formkit-form[data-uid="72292ff8f4"] { }
						.formkit-form[data-uid="72292ff8f4"] * { }
						.formkit-form[data-uid="72292ff8f4"]>div {
							padding: 0 !important;
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-fields {
							-webkit-flex: auto;
							-ms-flex: auto;
							flex: auto;
						}
						@media only screen and (max-width:724px) {
							.formkit-form[data-uid="72292ff8f4"] .formkit-fields {
								-webkit-flex-direction: column;
								-ms-flex-direction: column;
								flex-direction: column;
							}
						}
						.formkit-form[data-uid="72292ff8f4"] .formkit-input { }
						.formkit-form[data-uid="72292ff8f4"] .formkit-submit { }
						.formkit-form[data-uid="72292ff8f4"] .formkit-submit>span {
							padding: 18px 32px 14px 24px;
							width: 100%;
							height: 100%;
						}
					</style>
				</form>
			</div>
		</article>
		<!-- END EMAIL -->

		<!-- Are You Willing To Remove Fear -->
		<article class="jc-are-you-willing jc-section u-bg-gray-100">
			<div class="jc-are-you-willing_container">
				<h2 class="jc-h3 jc-are-you-willing_title u-align-self-center u-margin-bottom--64">
					What Does It Mean to Be “Fully Optimized”?
				</h2>
				<p class="u-margin-bottom--32">You're "fully-optimized" when your body, mind, and soul are all in alignment.</p>
				<p class="u-margin-bottom--32">Becoming fully optimized doesn't mean going on a diet, hitting the gym, meditating, or starting a yoga routine...</p>
				<p class="u-margin-bottom--32">...it's about understanding how everything you do with your body, mind, and soul plays a role in your well-being.</p>
				<p class="u-margin-bottom--32">If you've ever tried a new diet or new workout, you know exactly what I'm talking about:</p>
				<p class="u-margin-bottom--32">Focusing on any of the above in isolation doesn't work.</p>
				<p class="u-margin-bottom--32">In order to become the person you want to become...to see meaningful changes in your life...
					<br>you need to first start seeing yourself as a web of interconnected systems.
					<br>Aligning these systems perfectly is what becoming fully optimized is all about.
				</p>
				<p class="u-margin-bottom--32">That's what I'm here to help you achieve.</p>
				<a class="jc-btn jc-btn--prime jc-are-you-willing_btn u-align-self-center" href="<?php echo esc_url( home_url( '/' ) ); ?>start" rel="start">
					I’m Ready to Become Fully Optimized
				</a>
			</div>
		</article>

		<!--
		<article class="jc-are-you-willing jc-section u-bg-gray-100">
			<div class="jc-are-you-willing_container">
				<h2 class="jc-h3 jc-are-you-willing_title u-align-self-center u-margin-bottom--64">Are You Willing to Remove Fear From Your Life?</h2>
				<p class="u-margin-bottom--32">Do you use studies and research to build a better body?</p>
				<p class="u-margin-bottom--32">Are you tired of being lied to by the mainstream media?</p>
				<p class="u-margin-bottom--32">Are you confident you can still look and feel your best as you get older?</p>
				<p class="u-margin-bottom--32">Could you strengthen your feeling of connection with the people who matter to you?</p>
				<p class="u-margin-bottom--32">Are you tired of living a life of scarcity and limitation?</p>
				<p class="u-margin-bottom--64">Are you ready to discover your life's primary purpose and realize you are the source of your own abundance?</p>
				<a class="jc-btn jc-btn--prime jc-are-you-willing_btn u-align-self-center">
					Yes, show me the way!
				</a>
			</div>
		</article>
		-->

		<!-- Has Appeared On -->
		<article class="jc-section jc-has-appeared-on">
			<div class="jc-section_container jc-has-appeared-on_container u-align-self-center">
				<h2 class="jc-h3 u-align-self-center u-margin-bottom--24">Jay has appeared on...</h2>
				<div class="jc-block-list jc-block-list--appeared-on">
					<div class="jc-block">
						<img class="jc-block_img jc-block_img--abc" alt="ABC Logo" height="52" src="https://assets.cdn.watchdisneyfe.com/delta/assets/abc/abc.png" />
					</div>
					<div class="jc-block">
						<img  class="jc-block_img jc-block_img--espn"  alt="ESPN Radio Logo " height="40" src="<?php echo get_template_directory_uri(); ?>/assets/images/ESPN_Radio_logo.svg" />
					</div>
					<div class="jc-block">
						<img class="jc-block_img jc-block_img--ironman"  alt="iron man magazine logo" height="32" src="https://www.ironmanmagazine.com/wp-content/uploads/iron-man-magazine-logo-web-1.png" />
					</div>
					<div class="jc-block">
						<img class="jc-block_img jc-block_img--muscle-fitness"  alt="Muscle &amp; Fitness Logo" height="43" src="https://cdn-ami-drupal.heartyhosting.com//sites/muscleandfitness.com/themes/custom/musclefitness3/muslce-and-fitness-logo.svg">
					</div>
					<div class="jc-block">
						<img class="jc-block_img jc-block_img--nbc"  alt="NBC Logo" height="56" src="https://www.nbc.com/generetic/generated/images/022ab8edd9a5e23069bb549452ec6179.png" />
					</div>
				</div>
			</div>
		</article>

		<!-- pod Cast Episodes -->
		<article class="jc-section jc-blog-list u-bg-gray-100">
			<div class="jc-section_container u-width-960">
				<h2 class="jc-h3 u-margin-bottom--32">Recent Podcast Episodes</h2>

				<div class="jc-card-list">
					<?php
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'category_name' => 'podcast',
							'posts_per_page' => 3,
							'paged' => $paged,
						);
						$arr_posts = new \WP_Query( $args );

						if ( $arr_posts->have_posts() ) :

							while ( $arr_posts->have_posts() ) :
								$arr_posts->the_post();
								?>

								<!-- //TODO: Show Fallback image-->

								<article id="post-<?php the_ID(); ?>" <?php post_class('jc-card'); ?>>
									<a href="<?php the_permalink(); ?>" class="jc-card_media">
										<picture class="jc-card_picture" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/thumbnail-default-img.svg');">
											<?php if ( has_post_thumbnail() ) {
												the_post_thumbnail('', array('class' => 'jc-card_img'));
											} else { ?>
												<img class="jc-card_img" src="https://www.fillmurray.com/384/256/" alt="fillmurry" />
											<?php } ?>
										</picture>
									</a>
									<div class="jc-card_body">
										<h3 class="jc-card_title">
											<a href="<?php the_permalink(); ?>" class="jc-card_title-link">
												<?php the_title(); ?>
											</a>
										</h3>
										<main class="jc-card_content">
											<?php the_excerpt(); ?>
										</main>
										<footer class="jc-card_footer">
											<time class="jc-card_date" datetime="<?php the_time('F jS Y')?>">
												<?php the_time('F jS Y')?>
											</time>

											<!-- TODO: Add Back Later -  KICK ASS TAG CODE :(
											< ?php if(has_tag()) : ?>
												<aside class="jc-card_tag-list">
													< ?php
													$tags = get_the_tags(get_the_ID());
													foreach($tags as $tag){
														echo ' <a href="'.get_tag_link($tag->term_id).'" rel="tag" class="jc-badge jc-badge--'.$tag->name.'">'.$tag->name.'</a>';
													} ?>
												</aside>
											< ?php endif; ?>
											-->

										</footer>
									</div>
								</article>
								<?php
							endwhile;
						endif;
					?>
				</div><!-- End Card List -->

				<a class="jc-link--prime u-align-self-center u-margin-bottom--64" href="<?php echo esc_url( home_url( '/' ) ); ?>podcast">
					View all podcast episodes
				</a>

				<h2 class="jc-h3 u-margin-bottom--32">Recent Blog Posts</h2>

				<div class="jc-card-list">

					<?php
					$args = array(
						'post_type' => 'post',
						'post_status' => 'publish',
						'category_name' => 'blog',
						'posts_per_page' => 3,
						'paged' => $paged,
					);
					$arr_posts = new \WP_Query( $args );

					if ( $arr_posts->have_posts() ) :

						while ( $arr_posts->have_posts() ) :
							$arr_posts->the_post();
							?>

							<article id="post-<?php the_ID(); ?>" <?php post_class('jc-card'); ?>>
								<a href="<?php the_permalink(); ?>" class="jc-card_media">
									<picture class="jc-card_picture" style="background-image:url('<?php bloginfo('template_directory'); ?>/assets/images/thumbnail-default-img.svg');">
										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail('', array('class' => 'jc-card_img'));
										} else { ?>
											<img class="jc-card_img" src="https://www.fillmurray.com/384/256/"  alt="fillmurry" />
										<?php } ?>
									</picture>
								</a>
								<div class="jc-card_body">
									<h3 class="jc-card_title">
										<a href="<?php the_permalink(); ?>" class="jc-card_title-link">
											<?php the_title(); ?>
										</a>
									</h3>
									<main class="jc-card_content">
										<?php the_excerpt(); ?>
									</main>
									<footer class="jc-card_footer">
										<time class="jc-card_date" datetime="<?php the_time('F jS Y')?>">
											<?php the_time('F jS Y')?>
										</time>

										<!-- TODO: Add Back Later -  KICK ASS TAG CODE :(
										< ?php if(has_tag()) : ?>
											<aside class="jc-card_tag-list">
												< ?php
												$tags = get_the_tags(get_the_ID());
												foreach($tags as $tag){
													echo ' <a href="'.get_tag_link($tag->term_id).'" rel="tag" class="jc-badge jc-badge--'.$tag->name.'">'.$tag->name.'</a>';
												} ?>
											</aside>
										< ?php endif; ?>
										-->

									</footer>
								</div>
							</article>
						<?php
						endwhile;
					endif;
					?>
				</div><!-- End Card List -->

				<a class="jc-link--prime u-align-self-center u-margin-bottom--64" href="<?php echo esc_url( home_url( '/' ) ); ?>blog" rel="blog" >
					View all blog posts
				</a>

			</div>
		</article> <!-- pod Cast Episodes -->


		<!-- Badges -->
<!--		<article  class="jc-section u-bg-gray-100">-->
<!--			<div class="jc-section_container">-->
<!--				<div class="jc-badge_list">-->
<!--					<a class="jc-badge" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--tag/">Badge</a>-->
<!--					<a class="jc-badge jc-badge--energy" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--tag/energy">Energy</a>-->
<!--					<a class="jc-badge jc-badge--heart" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--tag/heart">Heart</a>-->
<!--					<a class="jc-badge jc-badge--mental" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--tag/mental">Mental</a>-->
<!--					<a class="jc-badge jc-badge--nutritional" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--tag/nutritional">Nutritional</a>-->
<!--					<a class="jc-badge jc-badge--physical" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--tag/physical">Physical</a>-->
<!--					<a class="jc-badge jc-badge--sexual" href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--tag/sexual">Sexual</a>-->
<!--				</div>-->
<!--			</div>-->
<!--		</article>-->

	</main><!-- #primary 1-->
	<?php
	get_footer();
