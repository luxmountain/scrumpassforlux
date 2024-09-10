<?php 
    get_header();
?>


<main>
    <article class="featured-section">
        <div class="most-featured-post">
            <?php
                // Step 1: Get all sticky posts
                $sticky_posts = get_option('sticky_posts');

                // Check if there are any sticky posts
                if (!empty($sticky_posts)) {
                    // Step 2: Query for the latest sticky post
                    $args_latest_sticky_post = array(
                        'post_type'           => 'post',
                        'posts_per_page'      => 1,                // Get only the latest post
                        'post__in'            => $sticky_posts,    // Only sticky posts
                        'ignore_sticky_posts' => 1,                // Ignore sticky flag in the main loop
                        'orderby'            => 'date',            // Sort by publish date
                        'order'              => 'DESC',            // Latest first
                    );

                    $latest_sticky_post_query = new WP_Query($args_latest_sticky_post);

                    if ($latest_sticky_post_query->have_posts()) {
                        while ($latest_sticky_post_query->have_posts()) {
                            $latest_sticky_post_query->the_post();
                            echo '
                                <div class="most-featured-post-thumbnail">
                                    ' . get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'img-fluid')) . '
                                </div>
                                <div class="post-title">
                                    <h2 class="most-featured-post-title">
                                        <a class="post-link" href="' . get_permalink() . '">' . get_the_title() . '</a>
                                    </h2>
                                    <div class="most-featured-post-meta">
                                        <span class="meta-item date-published">
                                            <p>' . get_the_date('F j, Y') . '</p>
                                        </span>
                                        <span class="meta-item comment-number">
                                            <svg class="icon icon--comment-solid icon--16 icon--grey" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
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

                    // Reset post data
                    wp_reset_postdata();
                }
            ?>

        </div>
        
        <?php
            // Step 1: Get all sticky post IDs
            $sticky_posts = get_option('sticky_posts');

            // Check if there are any sticky posts
            if (!empty($sticky_posts)) {
                // Step 2: Query for sticky posts, skip the latest one
                $args_sticky_posts = array(
                    'post__in'            => $sticky_posts,    // Only sticky posts
                    'posts_per_page'      => 3,                 // Get 3 sticky posts
                    'ignore_sticky_posts' => 1,                 // Ignore sticky flag in the main loop
                    'orderby'            => 'date',             // Sort by publish date
                    'order'              => 'DESC',             // Latest first
                    'offset'             => 1,                  // Skip the latest sticky post
                );

                $sticky_posts_query = new WP_Query($args_sticky_posts);

                if ($sticky_posts_query->have_posts()) {
                    echo '<div class="three-featured-posts">';  // Add row for columns
                    while ($sticky_posts_query->have_posts()) {
                        $sticky_posts_query->the_post();
                        echo '
                            <div class="featured-post">
                                <div class="featured-post-thumbnail">
                                    ' . get_the_post_thumbnail(get_the_ID(), 'large', array('class' => 'img-fluid')) . '
                                </div>
                                <h2 class="featured-post-title"><a class="post-link" href="' . get_permalink() . '">' . get_the_title() . '</a></h2>
                                <div class="most-featured-post-meta">
                                    <span class="meta-item date-published">
                                        <p>' . get_the_date('F j, Y') . '</p>
                                    </span>
                                    <span class="meta-item comment-number">
                                        <svg class="icon icon--comment-solid icon--16 icon--grey" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
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
                            </div>';
                    }
                    echo '</div>';
                }

                // Reset post data after the sticky query
                wp_reset_postdata();
            }
        ?>


    </article>
    <hr class="section-divider">
    <article class="content-section">
        <h2 class="section-article">Latest Posts</h2>
        <?php  
    // Get all sticky posts
    $sticky = get_option('sticky_posts');

    // Query for non-sticky posts
    $args = array(
        'post__not_in'       => $sticky,       // Exclude sticky posts
        'posts_per_page'     => 10,            // Number of posts to display
        'orderby'            => 'date',        // Sort by publish date
        'order'              => 'DESC',        // Latest posts first
    );
    
    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            ?>
            <div class="post-item">
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                </div>
                <div class="post-title">
                    <h2 class="title-post">
                        <a class="post-link" href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                    <div class="most-featured-post-meta">
                        <span class="meta-item date-published">
                            <p><?php echo get_the_date('F j, Y'); ?></p>
                        </span>
                        <span class="meta-item comment-number">
                            <svg class="icon icon--comment-solid icon--16 icon--grey" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
                                <title></title>
                                <path d="M8.98 15.48h9.52a1.499 1.499 0 0 0 1.5-1.5V1.33C20 1.34 20 0 18.49 0H1.51C.67 0 0 .67 0 1.51v12.47c0 .83.67 1.51 1.51 1.51h1.31v4.52l6.16-4.53z" class="icon-primary-color"></path>
                            </svg>
                            <p><?php comments_number('0', '1', '%'); ?></p>
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
            </div>
            <?php
        }
    }

    // Reset post data
    wp_reset_postdata();
?>

        </article>
</main>

<?php 
    get_footer();
?>
