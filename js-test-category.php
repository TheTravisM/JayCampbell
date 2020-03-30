<?php
/**
 * Template Name: JC Category Temeplate
 *
 */

get_header(); ?>

	<main id="primary" class="site-main jc-blog-page_main">

		<?php
		$current_page = get_queried_object();
		$category     = $current_page->post_name;

		$paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
		$query = new WP_Query(
			array(
				'post_type'     => 'post',
				'post_status'   => 'publish',
				'category_name' => 'podcast',
				'posts_per_page' => 3,
				'paged'         => $paged,
			)
		);

		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post(); ?>

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
							<a class="jc-badge jc-badge--physical" href="<?php echo esc_url( home_url( '/' ) ); ?>tag/physical">Physical</a>
						</footer>
					</div>
				</article>

				<?php
			}

			// next_posts_link() usage with max_num_pages
			next_posts_link( 'Older Entries', $query->max_num_pages );
			previous_posts_link( 'Newer Entries' );

			wp_reset_postdata();
		}
		?>

	</main><!-- #main -->


<?php get_footer(); ?>
