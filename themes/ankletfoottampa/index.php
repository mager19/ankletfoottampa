<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ankletfoottampa
 */

get_header(); ?>

<?php
$page_id = get_queried_object_id();

?>
<div class="experience">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-7/12 lg:pr-4">
                <?php

                $subtitle = get_field('subtitle', $page_id);
                $title = get_field('title', $page_id);
                $content = get_field('title_content', $page_id);

                ?>
                <?php get_template_part('template-parts/items/item', 'title', array(
                    'subtitle' => $subtitle,
                    'title'    => $title,
                    'content'    => $content,
                )); ?>
            </div>
            <div class="w-5/12 hidden lg:flex items-center pl-4">
                <?php echo get_the_post_thumbnail($page_id); ?>
            </div>
        </div>
    </div>
</div>

<div class="index__container pb-8">
    <div class="container mx-auto">
        <!-- List Post -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4">
            <?php while (have_posts()) : the_post(); ?>

                <!-- Item Post -->
                <?php echo get_template_part('template-parts/items/item', 'post'); ?>
                <!-- Item Post -->

            <?php endwhile; ?>
        </div>
        <!-- List Post -->

        <!-- Pagination -->
        <?php if (function_exists('ankletfoottampa__pagination')) : ?>
            <div class="pagination">
                <?php ankletfoottampa__pagination($posts->max_num_pages, "", $paged); ?>
            </div>
        <?php endif; ?>
        <!-- End Pagination -->
    </div>
</div>
<?php wp_reset_query(); ?>

<?php
get_footer();
