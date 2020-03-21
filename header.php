<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head title="">
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">
	<!-- Skip Link -->
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'wp-rig' ); ?>
	</a>

	<!-- Help Full Links -->
<!--	<ul class="jc-block-list u-bg-gray-100">-->
<!--		<li>-->
<!--			<a href="https://www.figma.com/file/NOb3pjWMj47FvKwOlT3OPC/JayCCampbell.com" target="_blank">Figma</a>-->
<!--		</li>-->
<!--		<li>-->
<!--			<a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--start-here" target="_blank">start here</a>-->
<!--		</li>-->
<!--		<li>-->
<!--			<a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--thank-you-page" target="_blank">Thank You Page</a>-->
<!--		</li>-->
<!--		<li>-->
<!--			<a href="--><?php //echo esc_url( home_url( '/' ) ); ?><!--404" target="_blank">404</a>-->
<!--		</li>-->
<!--	</ul>-->


	<header id="masthead" class="jc-header">
		<section class="jc-header_container">
			<!-- LOGO -->
			<h1 class="jc-header-logo">
				<a class="jc-header-logo_link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
					JAY
					<svg class="jc-header-logo_svg" width="212" height="239" viewBox="0 0 212 239" fill="none" xmlns="http://www.w3.org/2000/svg">
						<g clip-path="url(#clip0)">
							<path d="M97.1671 3.49025C94.4461 4.624 71.3175 15.2813 54.7647 32.0609C49.0959 33.6482 42.9736 35.6889 36.6246 38.6367C21.659 45.2125 9.86793 53.6023 8.50742 54.5093L1.70489 59.4978L0.797885 67.8876C0.797885 69.4748 -0.562625 83.7602 1.02463 100.313C1.70489 107.116 2.83865 113.465 4.4259 119.133C2.83865 124.802 1.70489 130.924 1.02463 137.727C-0.562625 154.28 0.797882 168.565 1.02463 170.152L1.70489 178.542L8.50742 183.531C9.86793 184.438 21.4322 192.827 36.6246 199.63C42.9736 202.351 49.0959 204.619 54.7647 205.979C71.3175 222.759 94.4461 233.416 97.1671 234.776L104.877 238.178L112.586 234.776C115.307 233.416 138.436 222.759 154.989 205.979C160.657 204.619 166.78 202.351 173.129 199.63C188.321 192.827 199.885 184.438 201.246 183.531L208.048 178.542L208.955 170.152C208.955 168.565 210.316 154.28 208.729 137.727C208.048 130.924 206.915 124.802 205.327 119.133C206.915 113.465 208.048 107.116 208.729 100.313C210.316 83.7602 208.955 69.4748 208.955 67.8876L208.048 59.4978L201.246 54.5093C199.885 53.6023 188.094 45.2125 173.129 38.6367C166.78 35.6889 160.657 33.6482 154.989 32.0609C138.436 15.2813 115.307 4.624 112.586 3.49025L104.877 0.0889816L97.1671 3.49025Z" fill="url(#paint0_linear)"/>
							<path d="M103.503 17.5008C101.946 18.0848 77.4174 29.3757 62.8171 45.9226C56.7824 47.2853 50.1636 49.4267 42.9608 52.5414C28.9445 58.9655 18.043 66.7523 17.6537 67.1417L16.291 67.9204L16.0963 69.4777C16.0963 70.0617 14.7336 83.2993 16.291 98.6782C17.2643 106.465 18.627 113.278 20.5737 119.119C18.627 124.764 17.2643 131.577 16.291 139.364C14.7336 154.743 16.0963 168.175 16.0963 168.565L16.291 170.122L17.6537 171.096C18.043 171.29 28.9445 179.272 42.9608 185.501C50.1636 188.616 56.7824 190.952 62.8171 192.12C77.4174 208.862 101.946 219.958 103.503 220.736L104.866 221.32L106.229 220.736C107.786 219.958 132.314 208.862 146.915 192.12C152.949 190.952 159.568 188.616 166.771 185.501C180.787 179.272 191.689 171.29 192.078 171.096L193.441 170.122L193.635 168.565C193.635 168.175 194.998 154.743 193.441 139.364C192.467 131.577 191.105 124.764 189.158 119.119C191.105 113.278 192.467 106.465 193.441 98.6782C194.998 83.2993 193.635 70.0617 193.635 69.4777L193.441 67.9204L192.078 67.1417C191.689 66.7523 180.787 58.9655 166.771 52.5414C159.568 49.4267 152.949 47.2853 146.915 45.9226C132.314 29.3757 107.786 18.0848 106.229 17.5008L104.866 16.9168L103.503 17.5008Z" fill="url(#paint1_linear)"/>
							<path d="M186.952 166.441C183.752 168.632 174.741 174.531 163.995 179.338C160.658 180.83 156.965 182.301 153.133 183.504C155.841 178.723 157.495 173.623 157.495 168.303C157.495 160.631 155.834 153.347 152.871 146.769C160.05 146.045 167.195 143.834 173.841 139.998C178.197 137.48 181.866 133.699 184.835 128.687C185.692 132.547 186.262 136.42 186.633 140.001C187.859 151.73 187.248 162.551 186.952 166.441ZM104.864 213.834C101.351 212.145 91.671 207.259 82.1239 200.338C79.2088 198.222 76.1374 195.792 73.2189 193.119C79.0457 193.051 84.1624 191.77 88.5215 189.256C95.1671 185.416 100.647 180.33 104.864 174.469C109.08 180.33 114.56 185.416 121.206 189.256C125.568 191.77 130.682 193.051 136.509 193.119C133.59 195.792 130.519 198.222 127.6 200.338C118.056 207.259 108.377 212.145 104.864 213.834ZM45.8312 179.382C35.0643 174.578 25.9929 168.636 22.7754 166.438C22.4798 162.551 21.8716 151.726 23.0914 140.001C23.4651 136.42 24.0359 132.547 24.8921 128.687C27.8615 133.699 31.5309 137.48 35.8899 139.998C42.5356 143.834 49.6772 146.049 56.8563 146.769C53.8936 153.347 52.2322 160.631 52.2322 168.303C52.2322 173.623 53.8868 178.72 56.5947 183.504C52.7996 182.311 49.137 180.857 45.8312 179.382ZM23.0914 98.089C21.8716 86.3606 22.4798 75.536 22.7754 71.6492C25.9929 69.451 35.0643 63.512 45.8312 58.7079C49.137 57.23 52.7996 55.7792 56.5947 54.5867C53.8868 59.367 52.2322 64.4634 52.2322 69.7873C52.2322 77.4488 53.8902 84.7264 56.8495 91.3006C49.5549 92.0447 42.4302 94.3143 35.8899 98.0924C31.5309 100.61 27.8615 104.388 24.8921 109.399C24.0359 105.54 23.4651 101.67 23.0914 98.089ZM104.864 24.2533C108.377 25.9419 118.056 30.8275 127.6 37.7518C130.515 39.865 133.583 42.2909 136.498 44.9648C130.672 45.0293 125.565 46.3204 121.206 48.8346C114.56 52.6738 109.08 57.7566 104.864 63.6174C100.647 57.7566 95.1671 52.6738 88.5215 48.8346C84.1624 46.317 79.0559 45.0293 73.2291 44.9648C76.1442 42.2909 79.2122 39.865 82.1239 37.7518C91.671 30.8275 101.351 25.9419 104.864 24.2533ZM153.143 98.1161C159.17 98.8568 165.048 100.807 170.464 103.936C175.805 107.021 179.464 112.617 181.968 119.045C179.464 125.473 175.805 131.069 170.464 134.151C165.048 137.28 159.17 139.227 153.146 139.971C155.939 133.553 157.495 126.479 157.495 119.045C157.495 111.608 155.936 104.534 153.143 98.1161ZM56.5845 139.971C50.5538 139.227 44.6794 137.28 39.2603 134.151C33.9228 131.069 30.2636 125.473 27.7596 119.045C30.2636 112.617 33.9228 107.021 39.2603 103.936C44.6794 100.81 50.5538 98.8602 56.5811 98.1195C53.7917 104.534 52.2322 111.611 52.2322 119.045C52.2322 126.479 53.7917 133.553 56.5845 139.971ZM147.109 136.947C141.129 128.912 132.911 122.636 123.384 119.045C132.911 115.45 141.129 109.179 147.109 101.14C149.45 106.644 150.748 112.695 150.748 119.045C150.748 125.392 149.45 131.443 147.109 136.947ZM111.554 122.912C123.34 124.641 133.678 130.872 140.776 139.794C139.06 139.536 137.348 139.189 135.646 138.737C125.993 136.148 117.632 130.621 111.554 122.912ZM114.122 135.088C121.994 141.537 131.528 145.509 141.469 146.674C134.154 156.34 123.105 163.023 110.483 164.572C114.452 155.379 115.773 145.132 114.122 135.088ZM95.602 135.088C93.9542 145.128 95.2758 155.375 99.2442 164.572C86.6256 163.023 75.5734 156.34 68.2551 146.674C78.1997 145.509 87.7367 141.534 95.602 135.088ZM98.1773 122.912C92.0957 130.621 83.7343 136.148 74.0785 138.737C72.3763 139.189 70.6639 139.536 68.9516 139.794C76.0457 130.872 86.3844 124.641 98.1773 122.912ZM62.6185 101.14C68.5982 109.179 76.8203 115.45 86.3437 119.045C76.8203 122.636 68.5982 128.912 62.6185 136.947C60.2776 131.443 58.9797 125.392 58.9797 119.045C58.9797 112.695 60.2776 106.644 62.6185 101.14ZM98.1773 115.179C86.3844 113.449 76.0457 107.218 68.9516 98.2928C70.6639 98.551 72.3763 98.8976 74.0785 99.3529C83.7343 101.938 92.0957 107.47 98.1773 115.179ZM95.5986 102.975C89.8839 98.2792 83.1873 94.8069 75.8282 92.8329C73.3276 92.1636 70.8066 91.6846 68.2822 91.3856C75.5972 81.7331 86.6392 75.0637 99.2442 73.5178C95.2792 82.7048 93.9576 92.9417 95.5986 102.975ZM140.783 98.286C133.685 107.215 123.343 113.449 111.554 115.179C117.632 107.47 125.993 101.938 135.646 99.3529C137.348 98.8976 139.064 98.5442 140.783 98.286ZM133.903 92.8329C126.544 94.8069 119.847 98.2792 114.129 102.971C115.77 92.9417 114.448 82.7048 110.483 73.5178C123.092 75.0637 134.13 81.7331 141.445 91.3856C138.921 91.6846 136.4 92.1636 133.903 92.8329ZM104.864 126.781C109.253 137.84 109.026 149.892 104.864 160.488C100.698 149.892 100.477 137.84 104.864 126.781ZM104.864 111.309C100.477 100.25 100.698 88.1987 104.864 77.6017C109.026 88.1987 109.25 100.25 104.864 111.309ZM143.419 52.2695C147.731 57.6546 150.748 63.6208 150.748 69.7873C150.748 76.134 149.45 82.185 147.109 87.6891C138.642 76.314 125.698 68.4691 110.901 66.7703C114.499 61.9933 119.086 57.8517 124.583 54.6784C128.205 52.5855 132.445 51.7395 136.926 51.7395C139.05 51.7395 141.228 51.9332 143.419 52.2695ZM66.3117 52.2695C73.1306 51.2231 79.8067 51.5934 85.1477 54.6784C90.6382 57.8517 95.2283 61.9933 98.8263 66.7703C84.0333 68.4691 71.0818 76.314 62.6185 87.6891C60.2776 82.185 58.9797 76.134 58.9797 69.7873C58.9797 63.6208 61.9968 57.6512 66.3117 52.2695ZM66.3117 185.821C61.9968 180.436 58.9797 174.469 58.9797 168.303C58.9797 161.956 60.2776 155.902 62.6185 150.398C71.0818 161.776 84.0333 169.621 98.8263 171.32C95.2283 176.093 90.6382 180.238 85.1477 183.408C79.8067 186.493 73.1306 186.864 66.3117 185.821ZM143.416 185.821C136.593 186.867 129.921 186.493 124.583 183.408C119.086 180.238 114.499 176.093 110.901 171.32C125.698 169.621 138.642 161.776 147.109 150.398C149.45 155.902 150.748 161.956 150.748 168.303C150.748 174.469 147.731 180.436 143.416 185.821ZM163.896 58.7079C174.667 63.512 183.738 69.451 186.955 71.6492C187.251 75.519 187.856 86.2723 186.646 97.9836C186.273 101.595 185.702 105.502 184.839 109.399C181.866 104.388 178.197 100.61 173.841 98.0924C167.297 94.3143 160.173 92.0447 152.878 91.3006C155.837 84.7264 157.495 77.4488 157.495 69.7873C157.495 64.4634 155.844 59.3704 153.136 54.59C156.931 55.7826 160.59 57.23 163.896 58.7079ZM189.184 119.045C191.158 113.249 192.551 106.457 193.36 98.6767C194.94 83.3843 193.594 70.0014 193.537 69.4408L193.384 67.9391L192.157 67.0523C191.698 66.7193 180.786 58.8676 166.75 52.5923C159.585 49.385 152.983 47.1936 146.959 46.0078C132.394 29.3224 107.714 18.1071 106.243 17.448L104.864 16.8296L103.488 17.448C102.017 18.1071 77.3333 29.3224 62.7646 46.0078C56.7442 47.1936 50.1393 49.385 42.9772 52.5923C28.9419 58.8676 18.0256 66.7193 17.5703 67.0523L16.3438 67.9391L16.1875 69.4408C16.1332 70.0014 14.7877 83.3843 16.371 98.6767C17.1728 106.457 18.5692 113.249 20.5432 119.045C18.5692 124.838 17.1728 131.633 16.371 139.413C14.7877 154.706 16.1332 168.085 16.1875 168.646L16.3438 170.151L17.5703 171.038C18.0256 171.367 28.9419 179.223 42.9772 185.498C50.1427 188.705 56.7475 190.897 62.7646 192.082C77.3333 208.764 102.017 219.983 103.488 220.639L104.864 221.257L106.243 220.639C107.714 219.983 132.391 208.764 146.959 192.082C152.983 190.897 159.585 188.705 166.75 185.498C180.786 179.223 191.698 171.367 192.157 171.038L193.384 170.151L193.537 168.646C193.594 168.085 194.94 154.706 193.36 139.413C192.551 131.633 191.158 124.838 189.184 119.045Z" fill="white"/>
						</g>
						<defs>
							<linearGradient id="paint0_linear" x1="104.878" y1="2.35649" x2="104.878" y2="229.108" gradientUnits="userSpaceOnUse">
								<stop stop-color="#55A4DB"/>
								<stop offset="0.2" stop-color="#7FC348"/>
								<stop offset="0.4" stop-color="#F79327"/>
								<stop offset="0.64" stop-color="#EE2B30"/>
								<stop offset="0.84" stop-color="#F27BAB"/>
								<stop offset="1" stop-color="#673090"/>
							</linearGradient>
							<linearGradient id="paint1_linear" x1="104.864" y1="18.8635" x2="104.864" y2="213.534" gradientUnits="userSpaceOnUse">
								<stop stop-color="#55A4DB"/>
								<stop offset="0.2" stop-color="#7FC348"/>
								<stop offset="0.4" stop-color="#F79327"/>
								<stop offset="0.64" stop-color="#EE2B30"/>
								<stop offset="0.84" stop-color="#F27BAB"/>
								<stop offset="1" stop-color="#673090"/>
							</linearGradient>
							<clipPath id="clip0">
								<rect x="0.255188" width="211.657" height="238.115" fill="white"/>
							</clipPath>
						</defs>
					</svg>
					CAMPBELL
				</a>
			</h1>
			<!-- Navigation -->
			<nav class="jc-header-nav">
				<ul class="jc-header-nav_ul">
					<li class="jc-header-nav_li">
						<a class="jc-header-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
							Home
						</a>
					</li>
					<li class="jc-header-nav_li">
						<a class="jc-header-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>podcast" rel="podcast">
							Podcast
						</a>
					</li>
					<li class="jc-header-nav_li">
						<a class="jc-header-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>blog" rel="blog">
							Blog
						</a>
					</li>

					<li class="jc-header-nav_li">
						<a class="jc-header-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>store" rel="store">
							Store
						</a>
					</li>
					<li class="jc-header-nav_li">
						<a class="jc-header-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>resources" rel="resources">
							Resources
						</a>
					</li>
					<!-- TODO: Add Contact Back Later
					<li class="jc-header-nav_li">
						<a class="jc-header-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>contact" rel="contact">
							Contact
						</a>
					</li>
					-->
				</ul>
			</nav>
			<?php /* get_template_part( 'template-parts/header/custom_header' ); */ ?>
			<?php /* get_template_part( 'template-parts/header/branding' ); */ ?>
			<?php /* get_template_part( 'template-parts/header/navigation' ); */ ?>
		</section>
	</header><!-- #masthead -->
