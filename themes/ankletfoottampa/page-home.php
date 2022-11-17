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
<?php wp_reset_query(); ?>

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
            if ($loop->have_posts()) :
                $counter = 1;
            ?>
                <div class="container__conditions grid grid-col-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-4 mb-12 lg:mb-14">
                    <?php
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <?php get_template_part(
                            'template-parts/items/item-foot',
                            'condition',
                            array(
                                'counter' => $counter
                            )
                        ); ?>
                        <?php $counter++; ?>
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
$args = array(
    'post_type' => 'cta',
    'posts_per_page' => -1,

);
$loop = new WP_Query($args);

if ($loop->have_posts()) :
    while ($loop->have_posts()) : $loop->the_post(); ?>
        <div class="cta__dark py-10 md:py-12 lg:py-16">
            <div class="container mx-auto">
                <div class="flex px-4">
                    <div class="about-cta w-full">
                        <div>
                            <h3 class="title"><?php the_title(); ?></h3>
                            <?php the_content(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php endwhile;
    wp_reset_postdata();
endif; ?>

<div class="our__team">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full">
                <?php
                $subtitle = get_field('our_team_subtitle');
                $title = get_field('our_team_title');
                ?>
                <?php get_template_part('template-parts/items/item', 'title', array(
                    'subtitle' => $subtitle,
                    'title'    => $title,
                )); ?>
            </div>

            <?php
            $args = array('post_type' => 'our_team', 'posts_per_page' => -1);
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                $counter = 1;
            ?>
                <div class="container__our__team grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 px-4 mb-12">
                    <?php
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <?php get_template_part('template-parts/items/item-team', 'member', array(
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

<?php $shortcode = get_field('social_feed_shortcode');


if ($shortcode) { ?>
    <div class="blog__home">
        <div class="container mx-auto">
            <div class="flex flex-wrap">
                <div class="w-full title__blog px-4 flex justify-between items-center">
                    <div class="title__blog__left">
                        <span>Instagram</span>
                        <h5 class='title'>Follow Us</h5>
                    </div>
                </div>

                <div class="container mx-auto mb-12">
                    <div class="flex flex-wrap">
                        <?php echo $shortcode; ?>
                    </div>
                </div>

                <?php /*
            $args = array('post_type' => 'post', 'posts_per_page' => 3);
            $loop = new WP_Query($args);
            if ($loop->have_posts()) : ?>
                <div class="container__blog px-4 gap-4 md:gap-y-2 md:gap-x-6 lg:gap-x-8 flex flex-wrap md:grid mb-12">
                    <?php
                    $counter = 1;
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <div class="item__home__blog<?php echo $counter; ?>">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                                <span class='flex mt-4'>
                                    <?php $post_date = get_the_date('j F Y');
                                    echo $post_date; ?>
                                </span>
                                <h6 class="title"><?php the_title(); ?></h6>
                                <?php if ($counter == 1) { ?>
                                    <p>
                                        <?php
                                        echo wp_trim_words(get_the_content(), 20, '...'); ?>
                                    </p>
                                <?php
                                } ?>
                            </a>
                        </div>
                        <?php $counter++; ?>
                    <?php endwhile; ?>
                    <!-- post navigation -->
                </div>
            <?php else : ?>
                <!-- no posts found -->
            <?php endif;  */ ?>
            </div>
        </div>
    </div>
<?php
}
?>



<?php
get_footer();
