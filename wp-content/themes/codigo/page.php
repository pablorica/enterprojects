<?php get_header(); ?>
<main id="<?php echo (get_field('fullpage_enable')?'fullpage':'nofullpage')?>" class="wrapper">

    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <?php the_content(); ?>

    <?php endwhile; ?>

    <?php else: ?>

        <!-- article -->
        <article>

            <h2><?php _e( 'Sorry, nothing to display.', 'codigo' ); ?></h2>

        </article>
        <!-- /article -->

    <?php endif; ?>



<?php get_footer('full'); ?>