<div class="item__foot__condition">
    <a href="<?php the_permalink(); ?>">
        <div class="icon">
            <?php
            $icon = get_field('icon');
            fps_get_Image($icon);
            ?>
        </div>
        <h3 class="title"><?php the_title(); ?></h3>
        <?php
        $content = get_field('condition_content');
        if ($content) { ?>
            <p>
                <?php
                echo wp_trim_words($content, 20, '');
                ?>
            </p>
        <?php
        }
        ?>
    </a>
</div>