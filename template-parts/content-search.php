<?php get_header(); ?>
<div class="content-area">
    <main id="main" class="site-main" role="main">
        <?php if ( have_posts() ) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'your-theme-textdomain' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
            </header>
            <?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', 'search' );
            endwhile;
            the_posts_pagination();
        else :
            get_template_part( 'template-parts/content', 'none' );
        endif;
        ?>
    </main>
</div>
<?php get_footer(); ?>
