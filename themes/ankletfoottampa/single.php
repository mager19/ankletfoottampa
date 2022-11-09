<?php

/**
 * The template for displaying all single posts
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 * @package ankletfoottampa
 */

get_header(); ?>

<div class="single__post py-8 lg:py-14">
    <div class="container mx-auto">
        <div class="flex px-4">
            <div class="w-full lg:w-8/12 lg:mx-auto">
                <?php while (have_posts()) : the_post(); ?>

                    <?php the_title('<h1 class="title--5 text-text md:mb-6 lg:title--4 text-center lg:mb-10">', '</h1>'); ?>
                    <?php the_post_thumbnail(); ?>
                    <div class="post__content mt-8 text-text">
                        <?php
                        the_content();
                        echo ankletfoottampa__socialShare();
                        ?>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<div class="last-post pb-4">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <h2 class="px-4">You might also like</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
                <?php
                $loop = new WP_Query(
                    array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post__not_in' => array($post->ID)
                    )
                );
                while ($loop->have_posts()) : $loop->the_post();
                ?>
                    <!-- Item Post -->
                    <?php echo get_template_part('template-parts/items/item', 'post'); ?>
                    <!-- Item Post -->
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
