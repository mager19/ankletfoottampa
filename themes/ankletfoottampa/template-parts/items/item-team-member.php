<?php
$modalName = $args['modalName'];
?>
<div class="item__team__member">
    <a href="<?php echo esc_url(get_bloginfo('url')); ?>/our-team/" <?php echo $modalName; ?>>
        <div class="image__member">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="content">
            <h5 class="title"><?php the_title(); ?></h5>
            <span><?php the_field('position'); ?></span>
        </div>
    </a>
</div>


<div id="modal-custom-ourteam<?php echo $args['counter'];  ?>" class="modalMenu modalTeam pb-4">
    <div class="modal__header">
        <button data-iziModal-close class="icon-close">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L15 15M1 15L15 1" stroke="#A9E1D3" stroke-width="2" />
            </svg>
        </button>
    </div>

    <div class="content w-full ">
        <div class="container__info md:flex  w-full gap-4">
            <div class="left">
                <?php the_post_thumbnail(); ?>

            </div>
            <div class="right pb-8">
                <h3 class="title"><?php the_title(); ?></h3>
                <span><?php the_field('position'); ?></span>
                <?php the_content(); ?>

                <a class="btn btn--primary mb-4" href="/schedule-an-appointment/">Schedule an Appointment</a>
            </div>
        </div>
    </div>
</div>