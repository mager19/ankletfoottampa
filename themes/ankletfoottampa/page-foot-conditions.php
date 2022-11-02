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

<div class="experience foot__conditions__page">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-7/12">
                <?php

                $subtitle = get_field('subtitle');
                $title = get_field('title');
                $content = get_field('title_content');

                ?>
                <?php get_template_part('template-parts/items/item', 'title', array(
                    'subtitle' => $subtitle,
                    'title'    => $title,
                    'content'    => $content,
                )); ?>
            </div>

            <div class="w-5/12 hidden lg:flex items-center pl-4">
                <?php the_post_thumbnail(); ?>
            </div>

            <?php
            $args = array('post_type' => 'foot_condition', 'posts_per_page' => -1);
            $loop = new WP_Query($args);
            if ($loop->have_posts()) : ?>
                <div class="container__conditions grid grid-col-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12 md:mb-14 px-4 lg:px-0">
                    <?php
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <?php get_template_part('template-parts/items/item-foot', 'condition'); ?>
                    <?php endwhile; ?>
                    <!-- post navigation -->
                </div>
            <?php else : ?>
                <!-- no posts found -->
            <?php endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>



<?php
get_footer();
