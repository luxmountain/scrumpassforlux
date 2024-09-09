<?php 
    get_header();
?>


<main>
    <div class="most-featured-post">
        <?php
        // Step 1: Get the latest post (non-sticky)
        $args_latest_post = array(
            'post_type'           => 'post',
            'posts_per_page'      => 1,  // Get only the latest post
            'post__not_in'        => get_option( 'sticky_posts' ), // Exclude sticky posts
            'ignore_sticky_posts' => 1,  // Ignore sticky posts for the main latest post
        );

        $latest_post_query = new WP_Query( $args_latest_post );

        if ( $latest_post_query->have_posts() ) {
            while ( $latest_post_query->have_posts() ) {
                $latest_post_query->the_post();
                echo '
                    <div class="most-featured-post-thumbnail">
                        ' . get_the_post_thumbnail( get_the_ID(), 'large', array('class' => 'img-fluid') ) . '
                    </div>
                    <div class="post-title">
                        <h2 class = "most-featured-post-title"><a class = "post-link" href="' . get_permalink() . '">' . get_the_title() . '</a></h2>
                        <div class="most-featured-post-meta">
                            <span class="meta-item date-published">
                                <p>' . get_the_date( 'F j, Y' ) . '</p>
                            </span>
                            <span class="meta-item comment-number">
                                <svg class="icon icon--comment-solid icon--16" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
                                    <path d="M8.98 15.48h9.52a1.499 1.499 0 0 0 1.5-1.5V1.33C20 1.34 20 0 18.49 0H1.51C.67 0 0 .67 0 1.51v12.47c0 .83.67 1.51 1.51 1.51h1.31v4.52l6.16-4.53z" class="icon-primary-color"></path>
                                </svg>
                                <p>' . get_comments_number() . '</p>
                            </span>
                            <span class="meta-item like-number">
                                <svg class="icon icon--heart icon--16" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
                                    <title>Like this</title>
                                    <path d="M18.38 1.77C17.43.68 16.12 0 14.67 0c-1.45 0-2.76.68-3.71 1.77-.41.47-.73 1.03-.99 1.64-.27-.61-.59-1.17-1-1.64C8.02.68 6.7 0 5.25 0 3.8 0 2.49.68 1.54 1.77.59 2.87 0 4.37 0 6.04c0 1.67.59 3.18 1.54 4.27L9.96 20l8.42-9.69c.95-1.09 1.54-2.6 1.54-4.27 0-1.67-.59-3.17-1.54-4.27" fill-rule="evenodd" class="icon-primary-color"></path>
                                </svg>
                                2
                            </span>
                        </div>
                    </div>
                ';
            }
        }
        
        ?>
    </div>
    
    <div class="featured-post">
        <?php
        $sticky = get_option( 'sticky_posts' );  // Get all sticky post IDs

        if ( !empty( $sticky ) ) {
            
            // Query for sticky posts, limit to the 2nd, 3rd, and 4th posts
            $args_sticky_posts = array(
                'post__in'            => $sticky,  // Only sticky posts
                'posts_per_page'      => 3,        // Get 3 sticky posts
                'ignore_sticky_posts' => 1,        // Ignore the sticky flag in the main loop
                'orderby'             => 'date',   // Sort by publish date
                'order'               => 'DESC',   // Latest sticky posts first
            );
            
            $sticky_posts_query = new WP_Query( $args_sticky_posts );

            if ( $sticky_posts_query->have_posts() ) {
                echo '<div class="sticky-posts row">';  // Add row for columns
                while ( $sticky_posts_query->have_posts() ) {
                    $sticky_posts_query->the_post();
                    
                    // Display sticky post in a 3-column grid
                    echo '
                    <div class="col-md-3 featured-post-item text-center mb-4">
                        <div class="post-thumbnail">
                            ' . get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'img-fluid')) . '
                        </div>
                        <h2 class="sticky-post-title"><a class="post-link" href="' . get_permalink() . '">' . get_the_title() . '</a></h2>
                            <div class="featured-post-meta">
                            <span class="meta-item">
                                <p>' . get_the_date( 'F j, Y' ) . '</p>
                            </span>
                            <span class="meta-item">
                                <svg class="icon icon--comment-solid icon--16" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
                                    <path d="M8.98 15.48h9.52a1.499 1.499 0 0 0 1.5-1.5V1.33C20 1.34 20 0 18.49 0H1.51C.67 0 0 .67 0 1.51v12.47c0 .83.67 1.51 1.51 1.51h1.31v4.52l6.16-4.53z" class="icon-primary-color"></path>
                                </svg>
                                <p>' . get_comments_number() . '</p>
                            </span>
                            <span class="meta-item">
                                <svg class="icon icon--heart icon--16" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
                                    <title>Like this</title>
                                    <path d="M18.38 1.77C17.43.68 16.12 0 14.67 0c-1.45 0-2.76.68-3.71 1.77-.41.47-.73 1.03-.99 1.64-.27-.61-.59-1.17-1-1.64C8.02.68 6.7 0 5.25 0 3.8 0 2.49.68 1.54 1.77.59 2.87 0 4.37 0 6.04c0 1.67.59 3.18 1.54 4.27L9.96 20l8.42-9.69c.95-1.09 1.54-2.6 1.54-4.27 0-1.67-.59-3.17-1.54-4.27" fill-rule="evenodd" class="icon-primary-color"></path>
                                </svg>
                                2
                            </span>
                        </div>
                    </div>';
                }
                echo '</div>';
            }

            // Reset post data after the sticky query
            wp_reset_postdata();
        }
        ?>
    </div>

    <hr class="section-divider">
    <article class="content">
        <h2 class="section-article">Latest Posts</h2>
        <?php  
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="post-item row mb-4 align-items-center">
                        <div class="col-md-4 post-thumbnail">
                            <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                        </div>
                        <div class="col-md-8 post-title">
                            <h2 class = "post-title"><?php the_title(); ?></h2>
                            <div class="post-meta">
                                <span class="meta-item">
                                    <p><?php echo get_the_date( 'F j, Y' ); ?></p>
                                </span>
                                <span class="meta-item">
                                <svg class="icon icon--comment-solid icon--16 icon--grey" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
		                            <title></title><path d="M8.98 15.48h9.52a1.499 1.499 0 0 0 1.5-1.5V1.33C20 1.34 20 0 18.49 0H1.51C.67 0 0 .67 0 1.51v12.47c0 .83.67 1.51 1.51 1.51h1.31v4.52l6.16-4.53z" class="icon-primary-color"></path>	</svg>
                                    <p><?php comments_number( '0', '1', '%' ); ?></p>
                                </span>
                                <span class="meta-item">
                                    <svg class="icon icon--heart icon--16" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
                                        <title>Like this</title>
                                        <path d="M18.38 1.77C17.43.68 16.12 0 14.67 0c-1.45 0-2.76.68-3.71 1.77-.41.47-.73 1.03-.99 1.64-.27-.61-.59-1.17-1-1.64C8.02.68 6.7 0 5.25 0 3.8 0 2.49.68 1.54 1.77.59 2.87 0 4.37 0 6.04c0 1.67.59 3.18 1.54 4.27L9.96 20l8.42-9.69c.95-1.09 1.54-2.6 1.54-4.27 0-1.67-.59-3.17-1.54-4.27" fill-rule="evenodd" class="icon-primary-color"></path>
                                    </svg>
                                    2
                                </span>
                            </div>
                        </div>
                    </div>
                <?php
                }
            }
            
        ?>
        </article>
</main>

<?php 
    get_footer();
?>
