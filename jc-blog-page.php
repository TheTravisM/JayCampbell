<?php

/**
 * Template Name: Blog Page
 * The template for displaying all pages
 * The template for displaying category archives.
 *
 * When active, applies to all category archives.
 * To target a specific category, rename file to category-{slug/id}.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#category
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_header();

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main jc-blog-page_main">

		<header class="jc-page-header">
			<div class="jc-page-header_container">
				<h1 class="jc-page-header_title jc-h1">
					Blog
				</h1>
			</div>
		</header>

		<!-- pod Cast Episodes -->
		<section class="jc-section jc-blog-list">
			<div class="jc-section_container u-width-960">

				<div class="jc-tag-banner_list u-margin-bottom--48">
					<a class="jc-btn jc-tag-banner_btn" href="<?php echo esc_url( home_url( '/' ) ); ?>tag/physical">Physical</a>
					<a class="jc-btn jc-tag-banner_btn" href="<?php echo esc_url( home_url( '/' ) ); ?>tag/nutritional">Nutritional</a>
					<a class="jc-btn jc-tag-banner_btn" href="<?php echo esc_url( home_url( '/' ) ); ?>tag/sexual">Sexual</a>
					<a class="jc-btn jc-tag-banner_btn" href="<?php echo esc_url( home_url( '/' ) ); ?>tag/energy">Energy</a>
					<a class="jc-btn jc-tag-banner_btn" href="<?php echo esc_url( home_url( '/' ) ); ?>tag/heart">Heart</a>
					<a class="jc-btn jc-tag-banner_btn" href="<?php echo esc_url( home_url( '/' ) ); ?>tag/mental">Mental</a>
				</div>


				<div class="jc-card-list">

					<?php
						$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
						$args = array(
							'post_type' => 'post',
							'post_status' => 'publish',
							'category_name' => 'blog',
							'posts_per_page' => 5,
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
										<h3 class="jc-h4 jc-card_title">
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

											<?php if(has_tag()) : ?>
												<aside class="jc-card_tag-list">
													<?php
													$tags = get_the_tags(get_the_ID());
													foreach($tags as $tag){
														echo ' <a href="'.get_tag_link($tag->term_id).'" rel="tag" class="jc-badge jc-badge--'.$tag->name.'">'.$tag->name.'</a>';
													} ?>
												</aside>
											<?php endif; ?>

										</footer>
									</div>
								</article>
							<?php
							endwhile;
							next_posts_link( 'More Podcats', $arr_posts->max_num_pages );
							previous_posts_link( 'Newer Entries' );
						endif;
					?>
				</div><!-- End Card List -->
			</div><!-- END  jc-section_container -->
		</section><!-- end JC Blog list-->

		<!-- END OF THIS STUFF -->

	</main><!-- #primary -->
<?php
/* Sidebar has been removed at  'JayC-wprig-3/inc/Sidebars/Component.php' */
/* get_sidebar(); */
get_footer();
