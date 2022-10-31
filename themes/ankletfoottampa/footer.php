<?php

/**
 * The template for displaying the footer
 * Contains the closing of the #content div and all content after.
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @package ankletfoottampa
 */
?>

</div>
<!--/ Content Page -->

<?php
if (!is_404()) {
    if (!is_home()) {
        get_template_part('template-parts/cta', 'footer');
    }
}
?>

<!-- Footer -->
<footer class="site-footer bg-alternate-1">
    <div class="container mx-auto py-14">
        <div class="site__footer__content flex flex-wrap items-center md:items-start px-4 justify-center lg:justify-start">

            <div class="site__footer__logo w-full lg:w-5/12 text-center lg:text-left mb-0">
                <div class="logo__footer">
                    <a href="<?php echo esc_url(get_bloginfo('url')); ?>">
                        <?php
                        $GETlogo = get_field('logo', 'option');
                        if ($GETlogo) {
                            fps_get_Image($GETlogo);
                        } else {
                            echo "<h3 class='mb-0'>Logo Brand</h3>";
                        } ?>
                    </a>
                </div>
                <?php $infoFooter = get_field('info_footer', 'option');
                if ($infoFooter) { ?>
                    <div class="content__footer">
                        <?php echo $infoFooter; ?>
                    </div>
                <?php
                }
                ?>
            </div>

            <?php $hours = get_field('hours_of_operations', 'option'); ?>
            <div class="hours w-full md:w-1/2 lg:w-4/12 text-center lg:text-left my-4">
                <h3 class="title title--body lg:title--6">
                    Hours of Operations:
                </h3>
                <div class="hours__content">
                    <?php echo $hours; ?>
                </div>

                <?php
                $rows = get_field('social_network', 'option');
                if ($rows) { ?>
                    <div class="social__footer">
                        <?php
                        foreach ($rows as $row) { ?>
                            <a href="<?php echo $row['link']; ?>">
                                <div class="icon-<?php echo $row['icon']; ?>--d"></div>
                            </a>
                    <?php
                        }
                    }
                    ?>
                    </div>
            </div>

            <?php
            $rows = get_field('locations', 'option');
            if ($rows) { ?>
                <div class="contact__footer w-full md:w-1/2 lg:w-3/12 text-center lg:text-left mt-4">
                    <h3 class="title title--body lg:title--6">
                        Contact:
                    </h3>

                    <div class="locations__footer">
                        <?php
                        foreach ($rows as $row) { ?>
                            <div class="item__location__footer">
                                <?php
                                echo $row['location_information']; ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            <?php

            } ?>




            <div class="site-footer__bottom">

                <!-- copyright -->
                <div class="copyright text-center">
                    <?php the_field('fps_copyright', 'option'); ?>
                </div>
                <!--/ copyright -->

            </div>
        </div>
    </div>
</footer>
<!--/ Footer -->
</div>
<?php wp_footer(); ?>
</body>

</html>