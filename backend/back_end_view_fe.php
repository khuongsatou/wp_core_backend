<?php
// Trong vòng lặp hiển thị danh sách bài viết (loop)
if (have_posts()) :
    while (have_posts()) : the_post();
        ?>
        <div class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php echo get_post_views(get_the_ID()); ?></p>
        </div>
        <?php
    endwhile;
endif;
?>
