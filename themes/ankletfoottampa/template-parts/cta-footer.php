<?php
$args = array(
  'post_type' => 'cta',
  'posts_per_page' => -1,
  'meta_query' => array(
    array(
      'key'    => 'cta_relationship',
      'compare'  => 'LIKE',
      'value'    => get_the_ID(),
    ),
  ),
);
$loop = new WP_Query($args);

if ($loop->have_posts()) :
  while ($loop->have_posts()) : $loop->the_post(); ?>
    <div class="cta py-10 md:py-12 lg:py-16">
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