<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php
    $image = get_the_post_thumbnail();
    ?>
    <header class="header-post">
        <a href="<?php the_permalink(); ?>">
            <?php
            if ($image) {
                echo $image;
            }
            ?>
        </a>
    </header>

    <div class="info-post mt-4">
        <span class="entry-date"><?php echo get_the_date(); ?></span>
        <h2 class="title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <?php
        echo wp_trim_words(get_the_excerpt(), 20);
        ?>

        <div class="w-full mt-2 inline-block">
            <a href="<?php the_permalink(); ?>" class="link">
                <?php _e('Continue Reading', 'frontporchsolutions'); ?>
            </a>
        </div>
    </div>
</article>