<?php

/**
 * The template for displaying 404 pages (not found).
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 * @package ankletfoottampa
 */
get_header(); ?>

<div class="container mx-auto py-14">
    <div class="info text-center">
        <!-- <img src="<?php echo get_template_directory_uri(); ?>/img/404-preview.jpg" alt="404 icon"> -->
        <h1 class="title--1 lg:title--display1 text-center lg:mb-0">
            404 Error
        </h1>
        <p class='title--body font-semibold text-text'>We are sorry, we could not find the information you are looking for.</p>
        <a class='btn btn--primary' href="<?php echo esc_url(get_bloginfo('url')); ?>">Go to Home</a>
    </div>
</div>

<?php get_footer();
