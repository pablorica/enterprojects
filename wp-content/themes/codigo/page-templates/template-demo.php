<?php
/**
 * Template Name: Demo
 *
 * Demo template for codigo
 *
 * @package codigo
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if (!function_exists('get_field')) {
	exit; // Exit if ACF is not enabled 
}


get_header(); 

?>
<main>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<!-- section -->
				<section>

					<h1 class="page-header"><?php the_title(); ?></h1>

				<?php if (have_posts()): while (have_posts()) : the_post(); ?>

					<!-- article -->
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<?php the_content(); ?>


						<br class="clear">

						<?php edit_post_link(); ?>

					</article>
					<!-- /article -->

				<?php endwhile; ?>

				<?php else: ?>

					<!-- article -->
					<article>

						<h2><?php _e( 'Sorry, nothing to display.', 'codigo' ); ?></h2>

					</article>
					<!-- /article -->

				<?php endif; ?>

				</section>
				<!-- /section -->
			</div><!-- /.col-xs-12 -->
		</div><!-- /.row -->
	</div><!-- /.container -->
</main>
<?php get_footer(); ?>

