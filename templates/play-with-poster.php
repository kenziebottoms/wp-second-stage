<?php
/**
 * Template Name: Play w/Featured Poster
 */

get_header();
?>
    <section id="primary" class="content-area play">
        <main id="main" class="site-main" role="main">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php the_post_thumbnail(); ?>
                <div class="container">
                    <?php get_template_part( 'template-parts/content', 'notitle' ); ?>
                </div>
            <?php endwhile; ?>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_footer();
