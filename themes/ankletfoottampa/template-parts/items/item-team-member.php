<div class="item__team__member">
    <a href="<?php the_permalink(); ?>">
        <div class="image__member">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="content">
            <h5 class="title"><?php the_title(); ?></h5>
            <span><?php the_field('position'); ?></span>
        </div>
    </a>
</div>