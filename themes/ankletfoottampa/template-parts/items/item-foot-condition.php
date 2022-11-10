<?php
$modalName = $args['modalName'];
?>
<div class="item__foot__condition" <?php echo $modalName; ?>>
    <a href="<?php echo esc_url(get_bloginfo('url')); ?>/foot-conditions/">
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


<div id="modal-custom-footconditions<?php echo $args['counter'];  ?>" class="modalMenu modalfoot">
    <div class="modal__header">
        <button data-iziModal-close class="icon-close">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L15 15M1 15L15 1" stroke="#A9E1D3" stroke-width="2" />
            </svg>
        </button>


    </div>

    <div class="modal__content relative px-8">
        <?php the_post_thumbnail(); ?>
        <h5 class="title"><?php the_title(); ?></h5>
        <?php $content = get_field('condition_content');
        if ($content) { ?>
            <?php echo $content; ?>
        <?php
        }
        ?>
        <a class="btn btn--primary mb-4" href="/schedule-an-appointment/">Schedule an Appointment</a>
    </div>

</div>