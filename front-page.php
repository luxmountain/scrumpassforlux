<?php 
    get_header();
?>
<hr class="section-divider">
<h2 class="section-article p-md-5">Latest Posts</h2>
<article class="content px-3 py-5 p-md-5">
    <?php  
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <div class="post-item row mb-4 align-items-center">
                    <div class="col-md-3 post-thumbnail">
                        <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
                    </div>
                    <div class="col-md-8 post-title">
                        <h2><?php the_title(); ?></h2>
						<div class="post-meta">
							<span class="meta-item">
								<p><?php echo get_the_date( 'F j, Y' ); ?></p>
							</span>
							<span class="meta-item">
								<svg class="icon icon--comment-solid icon--16" aria-hidden="true" viewBox="0 0 20 20" focusable="false" version="1.1">
									<path d="M8.98 15.48h9.52a1.499 1.499 0 0 0 1.5-1.5V1.33C20 1.34 20 0 18.49 0H1.51C.67 0 0 .67 0 1.51v12.47c0 .83.67 1.51 1.51 1.51h1.31v4.52l6.16-4.53z" class="icon-primary-color"></path>
								</svg>
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

<?php 
    get_footer();
?>
