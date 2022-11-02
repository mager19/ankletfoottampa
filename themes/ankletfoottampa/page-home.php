<?php

/**
 * The template for displaying all pages
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 * @link https://codex.wordpress.org/Template_Hierarchy
 * @package ankletfoottampa
 */

get_header(); ?>

<div class="home__hero bg-primary">
    <div class="container mx-auto">
        <div class="flex flex-wrap px-4 py-8 md:py-10 lg:py-0">
            <div class="w-full md:w-10/12 lg:w-7/12 flex">
                <div class="content">
                    <?php the_field('hero_content'); ?>

                    <div class="home__hero__buttons flex flex-wrap justify-center md:justify-start items-center gap-4">
                        <a class='btn btn--primary--dark' href="<?php echo esc_url(get_bloginfo('url'));  ?>/schedule-an-appointment/">Schedule an Appointment</a>
                        <a class='btn btn--outline hidden md:block' href="<?php echo esc_url(get_bloginfo('url'));  ?>/news/">Learn More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="experience__home">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full">
                <?php
                // Check value exists.
                if (have_rows('page_blocks')) :
                    // Loop through rows.
                    while (have_rows('page_blocks')) : the_row();
                        // Case: Paragraph layout.
                        if (get_row_layout() == 'block_title') :
                            $subtitle = get_sub_field('subtitle');
                            $title = get_sub_field('title');
                            $content = get_sub_field('title_content');
                        endif;

                    // End loop.
                    endwhile;
                endif;

                ?>
                <?php get_template_part('template-parts/items/item', 'title', array(
                    'subtitle' => $subtitle,
                    'title'    => $title,
                    'content'    => $content,
                )); ?>
            </div>

            <?php
            $args = array('post_type' => 'foot_condition', 'posts_per_page' => -1);
            $loop = new WP_Query($args);
            if ($loop->have_posts()) : ?>
                <div class="container__conditions grid grid-col-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4 mb-12 lg:mb-14">
                    <?php
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <?php get_template_part('template-parts/items/item-foot', 'condition'); ?>
                    <?php endwhile; ?>
                    <!-- post navigation -->
                </div>
            <?php else : ?>
                <!-- no posts found -->
            <?php endif; ?>
        </div>
    </div>
</div>



<?php
get_footer();
