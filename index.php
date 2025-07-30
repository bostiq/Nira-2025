<?php get_header(); ?>
<!-- THIS FILE HAS BEEN MODIFIED BY INDE[X] - PLEASE READ COMMENTS CAREFULLY -->
<div id="main-content">
	<div class="container">
		<div id="content-area" class="clearfix">
			<div id="left-area">
				<!-- [X] CUSTOM TITLE STARTS HERE - SEARCH -->
				<?php echo do_shortcode('[et_pb_section global_module="1007"][/et_pb_section]'); ?>
				<!-- END CUSTOM TITLE -->
				<!-- [X] WRAPPING FOR GRID SEARCH RESULTS -->
				<div class="flex articles">
				
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					$post_format = et_pb_post_format(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>

				<?php
					$thumb = '';

					$width = (int) apply_filters( 'et_pb_index_blog_image_width', 1080 );

					$height = (int) apply_filters( 'et_pb_index_blog_image_height', 675 );
					$classtext = 'et_pb_post_main_image';
					$titletext = get_the_title();
					$thumbnail = get_thumbnail( $width, $height, $classtext, $titletext, $titletext, false, 'Blogimage' );
					$thumb = $thumbnail["thumb"];

					et_divi_post_format_content();

					if ( ! in_array( $post_format, array( 'link', 'audio', 'quote' ) ) ) {
						if ( 'video' === $post_format && false !== ( $first_video = et_get_first_video() ) ) :
							printf(
								'<div class="et_main_video_container">
									%1$s
								</div>',
								et_core_esc_previously( $first_video )
							);
						elseif ( ! in_array( $post_format, array( 'gallery' ) ) && 'on' === et_get_option( 'divi_thumbnails_index', 'on' ) && '' !== $thumb ) : ?>
							<a class="entry-featured-image-url" href="<?php the_permalink(); ?>">
								<?php print_thumbnail( $thumb, $thumbnail["use_timthumb"], $titletext, $width, $height ); ?>
							</a>
					<?php
						elseif ( 'gallery' === $post_format ) :
							et_pb_gallery_images();
						endif;
					} ?>

				<?php if ( ! in_array( $post_format, array( 'link', 'audio', 'quote' ) ) ) : ?>
					<?php if ( ! in_array( $post_format, array( 'link', 'audio' ) ) ) : ?>
						<h2 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<?php endif; ?>

					<?php
						et_divi_post_meta();

						if ( 'on' !== et_get_option( 'divi_blog_style', 'false' ) || ( is_search() && ( 'on' === get_post_meta( get_the_ID(), '_et_pb_use_builder', true ) ) ) ) {
							truncate_post( 270 );
						} else {
							the_content();
						}
					?>
				<?php endif; ?>

					</article> <!-- .et_pb_post -->
			<?php
					endwhile; ?>
					
				</div>
				<!-- END GRID WRAPPING -->
					
					<?php
					if ( function_exists( 'wp_pagenavi' ) )
						wp_pagenavi();
					else
						get_template_part( 'includes/navigation', 'index' );
				else :
					get_template_part( 'includes/no-results', 'index' );
				endif;
			?>
			
			</div> <!-- #left-area -->

			<?php get_sidebar(); ?>
		</div> <!-- #content-area -->
		<!-- [X] SUBSCRIPTION BLOCK -->
		<?php echo do_shortcode('[et_pb_section global_module="902"][/et_pb_section]'); ?>
		<?php echo do_shortcode('[et_pb_section global_module="903"][/et_pb_section]'); ?>
		<!-- [X] END SUBSCRIPTION BLOCK -->
		<!-- [X] LEARN MORE BLOCK -->
		<?php echo do_shortcode('[et_pb_section global_module="1016"][/et_pb_section]'); ?>
		<!-- [X] END LEARN MORE -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php

get_footer();
