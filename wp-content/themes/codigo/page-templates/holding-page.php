<?php
/**
 * Template Name: Holding Page
 *
 * Holding page for codigo
 *
 * @package codigo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*
if (!function_exists('get_field')) {
	exit; // Exit if ACF is not enabled 
}
*/


get_header(); 

?>
<div class="wrapper" id="holding-wrapper">

	<div class="container-fluid" id="content" tabindex="-1">

		<main class="site-main" id="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<article <?php post_class('homepage'); ?> id="post-<?php the_ID(); ?>">

					<div class="row entry-featured-image">
						<div class="entry-featured-image__bg">
						<?php 
						$background = get_field('holding_background');
						if($background['type'] == 'featured') {
							echo get_the_post_thumbnail( $post->ID, 'retina' ); 
						}
						else {
							$type 		= $background['type'];
							$video_url  = $background['video_url']; 
							$video_file['desktop'] = $background['desktop_video']; 
							$video_file['mobile']  = $background['mobile_video']; 
							$args = array(
								'controls' => $background['controls'],
								'autoplay' => $background['autoplay'],
								'loop' 	   => $background['loop'],
								'muted'    => $background['muted'],
							);
							get_template_part( 'global-templates/component', 'video' );
						}
						?>
						</div>
					</div>

					<div id="changeNavbar" class="row entry-body">

						<header class="col-12 entry-header">

							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

						</header><!-- .entry-header -->

						<div class="col-sm-11 col-md-9 col-xl-8 entry-content">

							<?php the_content(); ?>

						</div><!-- .entry-content -->

					</div><!-- .entry-body -->

				</article><!-- #post-## -->


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->

	</div><!-- #content -->

</div><!-- #page-wrapper -->
<?php get_footer(); ?>

