<div class="col-lg-4">
                    <div class="widget-area">

                        <div class="single-widgets widget_search mb-30">

                        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                                <div class="wp-block-search__inside-wrapper ">
                                    <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" ?>"
                                    <button type="submit" class="wp-block-search__button">
                                        <svg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M7.10227 0.0713005C1.983 0.760967 -1.22002 5.91264 0.44166 10.7773C1.13596 12.8 2.60323 14.471 4.55652 15.4476C6.38483 16.3595 8.59269 16.5354 10.5737 15.9151C11.4023 15.6559 12.6011 15.0218 13.2121 14.5126L13.3509 14.3969L16.1281 17.1695C19.1413 20.1735 18.9932 20.0531 19.4237 19.9698C19.6505 19.9281 19.9282 19.6504 19.9699 19.4236C20.0532 18.9932 20.1735 19.1413 17.1695 16.128L14.397 13.3509L14.5127 13.212C14.7858 12.8834 15.2394 12.152 15.4755 11.6614C17.0029 8.48153 16.3271 4.74159 13.7814 2.28379C11.9994 0.561935 9.52304 -0.257332 7.10227 0.0713005ZM9.38418 1.59412C11.0135 1.9135 12.4669 2.82534 13.4666 4.15376C14.0591 4.94062 14.4572 5.82469 14.6793 6.83836C14.8136 7.44471 14.8228 8.75925 14.7025 9.34708C14.3507 11.055 13.4713 12.4622 12.1336 13.4666C11.3467 14.059 10.4627 14.4571 9.44898 14.6793C8.80097 14.8228 7.48644 14.8228 6.83843 14.6793C4.78332 14.2303 3.0985 12.9389 2.20054 11.1337C1.75156 10.2312 1.54328 9.43503 1.49699 8.4445C1.36276 5.62566 3.01055 3.05677 5.6535 1.96904C6.10248 1.7839 6.8014 1.59412 7.28741 1.52932C7.74102 1.46452 8.92595 1.50155 9.38418 1.59412Z"></path>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                            <!-- <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <input type="search" class="search-field" placeholder="Search..." value="<?php echo get_search_query(); ?>" name="s" />
                            <button type="submit" class="search-submit"><i class="fa fa-search"></i></button>
                        </form> -->

                        </div>

                        
                        

                        <div class="single-widgets widget_egns_recent_post mb-30">
                            <div class="widget-title">
                                <h3>Newest Posts</h3>
                            </div>

                            <?php
                            $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => 3,
                            );

                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) {
                                while ( $query->have_posts() ) {
                                    $query->the_post();
                                    ?>

                                    <div class="recent-post-wraper">
                                        <div class="widget-cnt mb-25">
                                            <div class="wi">
                                                <a href="<?php the_permalink(); ?>"><img src="<?php the_post_thumbnail('min'); ?></a>
                                            </div>
                                            <div class="wc">
                                                
                                                <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                            </div>
                                        </div>

                                    </div>

                                    <?php
                                }
                                wp_reset_postdata();
                            } else {
                                echo 'No posts found.';
                            }
                        ?>
                           
                        </div> <!-- end post -->

                        <!-- <div class="single-widgets widget_egns_tag mb-30">
                            <div class="widget-title">
                                <h3>All Tag</h3>
                            </div>
                                <p class="wp-block-tag-cloud">
                                <a href="blog-grid.html">Grooming</a>
                                <a href="blog-grid.html">Walking</a>
                                <a href="blog-grid.html">Pet Care</a>
                                <a href="blog-grid.html">Daycare</a>
                                <a href="blog-grid.html">Bording</a>
                                <a href="blog-grid.html">Madical</a>
                                <a href="blog-grid.html">Vakcine</a>
                                <a href="blog-grid.html">Education</a>
                                <a href="blog-grid.html">Services</a>
                            </p>
                        </div> -->

                        <div class="single-widgets widget_egns_social">
                            <div class="widget-title">
                                <h3>Social</h3>
                            </div>
                            <ul class="social-link d-flex align-items-center">
                            <li><a href="https://www.facebook.com/hashtag/capybara" target="_blank" rel="noopener noreferrer" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path></svg>
                                </a></li>

                                <li><a href="https://www.youtube.com/hashtag/capybara" target="_blank" rel="noopener noreferrer" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M21.593 7.203a2.506 2.506 0 0 0-1.762-1.766C18.265 5.007 12 5 12 5s-6.264-.007-7.831.404a2.56 2.56 0 0 0-1.766 1.778c-.413 1.566-.417 4.814-.417 4.814s-.004 3.264.406 4.814c.23.857.905 1.534 1.763 1.765 1.582.43 7.83.437 7.83.437s6.265.007 7.831-.403a2.515 2.515 0 0 0 1.767-1.763c.414-1.565.417-4.812.417-4.812s.02-3.265-.407-4.831zM9.996 15.005l.005-6 5.207 3.005-5.212 2.995z"></path></svg>                                
                                </a></li>

                                <li><a href="https://www.tiktok.com/discover/capybara?lang=en" target="_blank" rel="noopener noreferrer" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.25V2h-3.45v13.67a2.89 2.89 0 0 1-5.2 1.74 2.89 2.89 0 0 1 2.31-4.64 2.93 2.93 0 0 1 .88.13V9.4a6.84 6.84 0 0 0-1-.05A6.33 6.33 0 0 0 5 20.1a6.34 6.34 0 0 0 10.86-4.43v-7a8.16 8.16 0 0 0 4.77 1.52v-3.4a4.85 4.85 0 0 1-1-.1z"></path></svg>
                                </a></li>

                                <li><a href="https://www.instagram.com/#capybara" target="_blank" rel="noopener noreferrer" >
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;"><path d="M20.947 8.305a6.53 6.53 0 0 0-.419-2.216 4.61 4.61 0 0 0-2.633-2.633 6.606 6.606 0 0 0-2.186-.42c-.962-.043-1.267-.055-3.709-.055s-2.755 0-3.71.055a6.606 6.606 0 0 0-2.185.42 4.607 4.607 0 0 0-2.633 2.633 6.554 6.554 0 0 0-.419 2.185c-.043.963-.056 1.268-.056 3.71s0 2.754.056 3.71c.015.748.156 1.486.419 2.187a4.61 4.61 0 0 0 2.634 2.632 6.584 6.584 0 0 0 2.185.45c.963.043 1.268.056 3.71.056s2.755 0 3.71-.056a6.59 6.59 0 0 0 2.186-.419 4.615 4.615 0 0 0 2.633-2.633c.263-.7.404-1.438.419-2.187.043-.962.056-1.267.056-3.71-.002-2.442-.002-2.752-.058-3.709zm-8.953 8.297c-2.554 0-4.623-2.069-4.623-4.623s2.069-4.623 4.623-4.623a4.623 4.623 0 0 1 0 9.246zm4.807-8.339a1.077 1.077 0 0 1-1.078-1.078 1.077 1.077 0 1 1 2.155 0c0 .596-.482 1.078-1.077 1.078z"></path><circle cx="11.994" cy="11.979" r="3.003"></circle></svg>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>





        </div> 