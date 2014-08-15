<time class="post-date published" datetime="<?php echo get_the_time('c'); ?>">
    <p>
        <strong><?php echo get_the_date('d'); ?></strong>
        <?php echo get_the_date('M'); ?>
        <span><?php echo get_the_date('Y'); ?></span>
    </p>
</time>
<a title="Comments" href="<?php the_permalink(); ?>" class="comments-link">
    <?php if (have_comments()) : ?><span><?php get_comments_number(); ?></span><?php else : ?><span>0</span><?php endif ?> Comments
</a>
