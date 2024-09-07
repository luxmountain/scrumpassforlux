<?php 
    get_header();
?>
<h2 class="content px-3 py-5 p-md-5">Latest Posts</h2>
<article class="content px-3 py-5 p-md-5">
    <?php  
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                ?>
                <div class="post-item d-flex align-items-center">
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                    <div class="post-title pl-3">
                        <h2><?php the_title(); ?></h2>
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
