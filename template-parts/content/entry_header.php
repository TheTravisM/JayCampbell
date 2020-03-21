<?php
/**
 * Template part for displaying a post's header
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

?>

<header class="jc-page-header">
	<div class="jc-page-header_container">
		<h1 class="jc-page-header_title jc-h1">
			<?php the_title() ?>
		</h1>

		<!-- Remove Meta Data From Posts
		<p class="entry-meta jc-page-header_meta-data">
			< ?php the_time('F jS Y')?>
		</p><!-- .entry-meta -->
	</div>
</header><!-- .entry-header -->
