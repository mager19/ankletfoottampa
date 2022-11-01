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
        <div class="flex flex-wrap">
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
    </div>
</div>



<?php
get_footer();
