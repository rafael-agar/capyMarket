<?php get_header(); ?>

<!-- ========== Blog Grid Pages Start============= -->
    <div class="blog-details-pages pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-4 gy-5 justify-content-center mb-70">

                <?php while(have_posts()): the_post(); ?>

                <div class="col-lg-8">
                    <div class="blog-details-wrap mb-120">
                        <div class="post-thum">
                            <img class="img-fluid" src="<?php the_post_thumbnail('blog'); ?>
                         
                        </div>
                        <div class="blog-meta">
                            <ul>
                                <li><?php the_date(); ?></li>
                                <li><?php the_field('source'); ?></li>
                            </ul>
                        </div>
                        <h2 class="post-title"><?php the_title(); ?></h2>
                        <div class="post-content">
                            
                        <p><?php the_content(); ?></p>
                        
                            
                        </div>

                    </div>


                    <!-- COMMENTS!!! -->
                    <div class="comment-area">
                        <!-- <div class="blog-comments mb-120">
                            <div class="comments-title">
                                <h2>Comment</h2>
                            </div>
                            <ul class="comment-list">
                                <li>
                                    <div class="single-comment mb-50 d-flex align-items-center justify-content-between flex-md-nowrap flex-wrap">
                                       
                                        <div class="comment-content">
                                            <div class="c-header d-flex align-items-center justify-content-between">
                                                <div class="author-area">
                                                    <div class="author-img">
                                                        <img src="assets/images/blog/blog-author.png" alt="">
                                                    </div>
                                                    <div class="author-details">
                                                        <h5 class="mb-0">Angilano Cooper</h5>
                                                        <div class="c-date">11 January, 2022 At 01.56 pm</div>
                                                    </div>
                                                </div>
                                                <div class="replay-btn">
                                                    <a href="#"><img src="assets/images/icon/replay-icon.svg" alt=""> Reply</a>
                                                </div>
                                                
                                            </div>
                                            <div class="c-body">
                                                <p>Pellentesque maximus augue orci, quis congue purus iaculison id. Maecenas eu lorem quisesdoi massal molestie vulputate in sitagi amet diam. Cras eu odio sit amet ipsum cursus for that gone pellentesquea. thisaton Vestibulum ut aliquet risus. In hac habitasse plateajoa dictumst. Nuncet posuere scelerisque justo in accumsan.Pellentesque</p>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <ul class="comment-reply">
                                        <li>
                                            <div class="single-comment d-flex align-items-center justify-content-between flex-md-nowrap flex-wrap">
                                                <div class="comment-content">
                                                    <div class="c-header d-flex align-items-center justify-content-between">
                                                        <div class="author-area">
                                                            <div class="author-img">
                                                                <img src="assets/images/blog/blog-author1.png" alt="">
                                                            </div>
                                                            <div class="author-details">
                                                                <h5 class="mb-0">Polard Girdet</h5>
                                                                <div class="c-date">11 January, 2022 At 01.56 pm</div>
                                                            </div>
                                                        </div>
                                                        <div class="replay-btn">
                                                            <a href="#"><img src="assets/images/icon/replay-icon.svg" alt=""> Reply</a>
                                                        </div>
                                                        
                                                    </div>
                                                    <div class="c-body">
                                                        <p>Pellentesque maximus augue orci, quis congue purus iaculison id. Maecenas eu lorem quisesdoi massal molestie vulputate in sitagi amet diam. Cras eu odio sit amet ipsum cursus for that gone pellentesquea. thisaton Vestibulum ut aliquet risus. In hac habitasse plateajoa dictumst. Nuncet posuere scelerisque justo in accumsan.Pellentesque</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div> -->

                        <div class="comment-list">
                            <?php 
                                $comments = get_comments( array (
                                    'post_id' => $post->ID,
                                    'status' => 'approve'
                                ));

                                wp_list_comments( array (
                                    'per_page' => 5,
                                    'reverse_top_level' => false
                                ), $comments);
                            ?>
                        </div>

                        <!-- <div class="comment-form">
                            <div class="comments-title">
                                <h2>Leave a Reply</h2>
                            </div>
                            <form>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-inner name mb-40">
                                            <input type="text" placeholder="Enter your name" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-inner email mb-40">
                                            <input type="text" placeholder="Enter your email" required="">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-inner mb-40">
                                            <textarea placeholder="Your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-inner two">
                                            <button class="primary-btn3 btn-lg" type="submit">Submit Comment</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> -->

                        <div class="comment-form mt-5">
                            
                            <?php comment_form(); ?>
                        </div>

                    </div>
                </div>

                <?php endwhile; ?>
            
                <?php get_sidebar(); ?>

            </div>
        </div>
    </div>
    <!-- ========== Blog Grid Pages End============= -->
<?php get_footer(); ?>