<?php 

/*
 * Template Name: Hero
 */

get_header(); ?>



<section class="blog-grid-pages pt-120 mb-120">
    <div class="container">
        <div class="row g-lg-4 gy-5 justify-content-center mb-70">
            <div class="col-lg-8">
                

            <?php while(have_posts()): the_post(); ?>

                <div class="blog-st-card mb-60">
                    <div class="blog-img">
                        <a href="<?php the_permalink(); ?>">
                            <img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="">
                        </a>
                        <!-- <div class="category">
                            <a href="#">Medical Care</a>
                        </div> -->
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <ul>
                                <li><a href="#"><?php the_date(); ?></a></li>
                                <!-- <li><a href="blog-grid.html">By, Nikon Brook</a></li> -->
                            </ul>
                        </div>
                        <h4>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h4>
                        <p><?php the_excerpt(); ?></p>
                        <div class="more-btn">
                            <a href="<?php the_permalink(); ?>"><span>Re</span>ad More</a>
                        </div>
                    </div>
                </div>


                <?php endwhile; ?>

                <ul class="pagination justify-content-center">

                    <span class="fs-3"><?php echo paginate_links(); ?></span>

                </ul>

            </div>
            
            
<!--wiget area -->
        <?php get_sidebar(); ?>

      
      
    </div>

    
</section>



<?php get_footer(); ?>  
