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






<?php
get_footer();
