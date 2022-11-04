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

<div class="experience">
    <div class="container mx-auto">
        <div class="flex flex-wrap items-center">
            <div class="w-full lg:w-7/12 lg:pr-4">
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

            <div class="w-full hidden lg:w-5/12 lg:flex">
                <?php the_post_thumbnail(); ?>
            </div>

            <?php
            $args = array('post_type' => 'our_team', 'posts_per_page' => -1);
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                $counter = 1;
            ?>
                <div class="container__our__team our__team__page grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-4 mb-12 mt-4">
                    <?php
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <?php get_template_part('template-parts/items/item-team', 'member', array(
                            'modalName' => 'data-izimodal-open="#modal-custom-ourteam' . $counter . '"',
                            'counter' => $counter
                        )); ?>

                        <?php $counter++; ?>
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
