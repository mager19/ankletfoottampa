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

<div class="experience schedulePage">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
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

                <?php if (have_rows('forms')) : ?>
                    <div class="forms__buttons mb-4 px-4">
                        <?php while (have_rows('forms')) : the_row(); ?>

                            <a href="<?php the_sub_field('form_file'); ?>" class='btn btn--forms' target="_blank"><?php the_sub_field('title_button'); ?></a>

                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>

                <div class="disclaimer px-4 pb-10">
                    <?php the_content(); ?>
                </div>

            </div>

            <div class="w-full hidden lg:w-5/12 lg:block pt-[3rem]">
                <div class="image">
                    <?php the_post_thumbnail();
                    ?>
                </div>
                <?php if (have_rows('locations', 'option')) : ?>
                    <div class="locations__info pb-10 pt-4">
                        <div class="container mx-auto">
                            <div class="grid grid-cols-1 gap-10 md:gap-4 md:grid-cols-2 w-full">
                                <?php while (have_rows('locations', 'option')) : the_row(); ?>
                                    <div class="item__location__info">
                                        <div class="content">
                                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M29.4282 27.7617L22.3565 34.8333C22.0472 35.1429 21.68 35.3885 21.2758 35.556C20.8715 35.7236 20.4383 35.8098 20.0007 35.8098C19.5631 35.8098 19.1298 35.7236 18.7256 35.556C18.3213 35.3885 17.9541 35.1429 17.6448 34.8333L10.5715 27.7617C8.70688 25.8969 7.43707 23.5212 6.92266 20.9348C6.40824 18.3484 6.67233 15.6675 7.68152 13.2312C8.6907 10.7949 10.3997 8.71257 12.5923 7.24751C14.785 5.78246 17.3628 5.00049 19.9998 5.00049C22.6369 5.00049 25.2147 5.78246 27.4074 7.24751C29.6 8.71257 31.309 10.7949 32.3182 13.2312C33.3274 15.6675 33.5914 18.3484 33.077 20.9348C32.5626 23.5212 31.2928 25.8969 29.4282 27.7617V27.7617Z" stroke="#2A9D8F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M25 18.3333C25 19.6594 24.4732 20.9312 23.5355 21.8688C22.5979 22.8065 21.3261 23.3333 20 23.3333C18.6739 23.3333 17.4021 22.8065 16.4645 21.8688C15.5268 20.9312 15 19.6594 15 18.3333C15 17.0072 15.5268 15.7355 16.4645 14.7978C17.4021 13.8601 18.6739 13.3333 20 13.3333C21.3261 13.3333 22.5979 13.8601 23.5355 14.7978C24.4732 15.7355 25 17.0072 25 18.3333V18.3333Z" stroke="#2A9D8F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            <div class="info">
                                                <?php the_sub_field('location_information', 'option'); ?>
                                                <a href="<?php the_sub_field('location_map', 'option');  ?>" target="_blank">View Map</a>
                                            </div>

                                        </div>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
