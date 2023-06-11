<?php get_header(); ?>

    <section class="blog-grid-pages pt-120 mb-120">
        <div class="container">
        <?php while(have_posts()): the_post(); ?>
            
            <?php the_content(); ?>

        <?php endwhile; ?>
        </div>
    </section>

<?php get_footer(); ?>  