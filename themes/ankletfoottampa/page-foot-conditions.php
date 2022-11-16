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

<div class="experience foot__conditions__page">
    <div class="container mx-auto">
        <div class="flex flex-wrap">
            <div class="w-full lg:w-7/12">
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

            <div class="w-5/12 hidden lg:flex items-center pl-4">
                <?php the_post_thumbnail(); ?>
            </div>

            <?php if (have_rows('foot_conditions_lists')) : ?>
                <div class="title__footconditions px-4">
                    <h3 class="title mb-0 text-text">Common Foot Conditions</h3>
                    <p class='text-text'>Click on each Foot condition to see more information.</p>
                </div>
                <div class="container__conditions grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 mb-12 md:mb-14 px-4 lg:px-0 w-full">
                    <?php $counter = 1; ?>
                    <?php while (have_rows('foot_conditions_lists')) : the_row(); ?>

                        <div class="item__conditions" data-izimodal-open="#modal-custom-footconditions<?php echo $counter; ?> ">
                            <div class="item__conditions__title">
                                <svg width="141" height="106" viewBox="0 0 141 106" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M131.657 104.823C132.487 104.657 133.129 104.359 133.282 103.921C133.453 103.431 133.283 102.887 132.871 102.572C132.707 102.447 131.087 101.225 128.293 99.6111C129.486 99.7335 130.571 99.7864 131.555 99.7864C136.225 99.7861 138.632 98.69 139.53 98.1829C140.075 97.8747 140.408 97.6553 140.562 97.1997C140.727 96.7077 140.56 96.1644 140.146 95.8505C139.913 95.6735 136.772 93.323 131.511 90.7618C131.511 90.7618 132.554 90.7001 132.898 90.6494C133.435 90.5706 133.876 90.3202 134.043 89.8302C134.21 89.3401 134.047 88.7986 133.637 88.4824C133.394 88.2952 129.939 85.6677 124.14 82.9361L126.974 82.046C127.434 81.9017 127.764 81.4982 127.815 81.019C127.865 80.5398 127.626 80.0762 127.207 79.8392C115.367 73.1472 105.696 72.3797 89.6733 71.108C87.6224 70.9452 85.4622 70.7739 83.1742 70.5807C64.6803 69.0178 52.7443 61.8367 51.3297 60.9477C50.6487 56.4813 49.795 48.0119 48.9378 31.979C48.1083 16.4613 47.6832 1.32673 47.6792 1.17562C47.6607 0.508016 47.1061 -0.0153093 46.4365 0.000342094C45.7689 0.0188392 45.2427 0.575175 45.2612 1.24306C45.2655 1.39445 45.6912 16.5558 46.5224 32.1039C47.6058 52.369 48.678 60.6708 49.4757 64.2584C45.0111 62.0475 40.2456 60.4924 38.3032 59.8976C37.419 54.4432 32.0278 20.3537 32.2819 2.06604C32.2913 1.39815 31.7575 0.849216 31.0896 0.839825C31.0839 0.839825 31.0782 0.839825 31.0722 0.839825C30.4123 0.839825 29.8725 1.37027 29.8634 2.03246C29.5851 22.0659 35.9742 60.6511 36.0385 61.0384C36.0385 61.0384 36.2096 61.8998 36.0849 62.4602C35.8075 63.708 33.3223 66.5395 21.0206 69.1755C17.7125 69.8843 14.6468 70.9836 11.9351 72.3743C11.7032 72.2741 11.3051 72.0473 11.1901 71.6333C11.0797 71.236 10.9966 69.6686 14.5609 66.1835C22.847 58.0818 22.5328 51.3303 22.4813 50.6815L20.2432 1.99376C20.2124 1.32644 19.6442 0.809375 18.9794 0.841247C18.3121 0.871981 17.7962 1.43771 17.8269 2.10503L20.0665 50.817C20.067 50.8326 20.069 50.8577 20.0704 50.8733C20.0758 50.9336 20.4979 56.9967 12.8705 64.4541C9.59796 67.6541 8.28609 70.2141 8.86007 72.281C9.01772 72.8481 9.30684 73.3051 9.64804 73.6691C4.15356 77.0933 0.545772 81.801 0.0551724 86.7659C-0.45677 91.9439 2.61289 96.3682 8.47675 98.904C10.5288 99.791 12.9678 100.241 15.7268 100.241C23.0505 100.241 32.0469 96.9393 37.1993 92.9792C39.6298 94.3693 48.7093 99.0773 57.3526 97.2987C64.4572 95.8354 78.0918 95.5193 102.699 102.319C112.494 105.025 119.461 105.892 124.169 105.774C126.155 105.724 130.151 105.124 131.657 104.823ZM127.014 88.7647C123.952 87.5328 120.436 86.3738 116.557 85.5061C116.599 84.9848 117.026 83.859 117.679 82.8721C122.855 84.7765 126.898 87.0024 129.381 88.5371L127.014 88.7647ZM115.447 93.8881C115.844 92.4675 116.374 89.9756 115.975 87.8527C118.184 88.3467 120.276 88.9443 122.232 89.5979C121.786 91.2075 121.213 93.8742 121.761 95.935C121.761 95.935 118.304 95.0238 115.447 93.8881ZM60.2578 87.0809L51.7042 80.6428C53.4748 79.669 55.1549 78.6619 56.4152 77.5945C56.9824 77.1141 57.4511 76.6292 57.8238 76.1403L64.9131 81.5554C62.1997 83.7842 60.7694 85.9182 60.2578 87.0809ZM52.9565 95.2643C47.1456 95.1491 41.5578 92.5609 39.1327 91.2752C40.1699 90.2029 40.8905 89.1113 41.1944 88.0476C41.7954 85.9435 45.7911 83.7978 49.369 81.8972L57.6565 88.2827C54.6509 90.8774 53.4062 93.8599 52.9565 95.2643ZM113.224 84.3359C112.149 83.9546 110.663 83.6074 108.882 83.2916C109.217 82.4965 109.51 81.482 109.458 80.4575C111.511 80.9097 113.461 81.4518 115.293 82.046C114.785 82.8383 114.282 83.8323 114.144 84.8061C113.863 84.6143 113.557 84.454 113.224 84.3359ZM106.973 80.1539C107.241 80.9581 106.783 82.1439 106.395 82.8966C95.2582 81.3001 76.6152 80.6249 69.6355 80.4194C70.0163 77.4334 71.4303 76.354 71.7837 76.1278C84.0499 76.5373 100.758 77.4175 105.898 79.2419C106.682 79.5199 106.887 79.8952 106.973 80.1539ZM68.6344 76.0296C68.0103 77.0054 67.4395 78.3807 67.2192 80.2728L61.435 75.8549C63.2939 75.891 65.7773 75.9468 68.6344 76.0296ZM67.2852 82.7754C71.3196 82.8781 104.492 83.8041 112.415 86.6156C114.311 87.2884 113.677 91.1096 113.128 93.1753C111.236 92.6309 109.24 92.1454 107.145 91.7533C106.796 91.4519 106.395 91.2146 105.945 91.0549C98.6779 88.4764 72.6713 87.4548 63.1399 87.1617C63.791 86.0573 65.0286 84.4338 67.2852 82.7754ZM108.572 94.5113C110.861 95.0164 113.025 95.6337 115.042 96.3112C114.716 97.8744 114.32 100.527 114.82 102.539C112.717 102.202 110.383 101.743 107.804 101.133C108.29 99.546 108.957 96.7791 108.572 94.5113ZM89.482 73.52C104.496 74.7115 113.269 75.4075 123.508 80.5995L120.772 81.4589C117.151 79.986 112.875 78.6095 108.082 77.7092C107.725 77.4237 107.277 77.1642 106.707 76.9622C101.111 74.9764 83.4497 74.0729 70.979 73.6742C71.1198 72.8487 71.9454 71.9674 72.5213 71.4697C75.7139 72.1356 79.2048 72.6731 82.9708 72.9913C85.2633 73.1851 87.4274 73.3567 89.482 73.52ZM51.9193 64.1001C54.9201 65.7563 61.0679 68.727 69.769 70.847C69.1466 71.6364 68.6441 72.5875 68.553 73.6008C64.0861 73.4736 60.5449 73.4138 58.889 73.3905C58.9026 72.7758 58.7717 72.1578 58.49 71.5374C57.5612 69.4939 55.3185 67.6129 52.6262 65.9777C52.6259 65.978 52.0752 65.6772 51.9193 64.1001ZM9.43689 96.6837C4.53203 94.5626 2.05513 91.1249 2.46235 87.0038C3.01584 81.4054 9.21834 74.1788 21.5283 71.5408C31.4092 69.4233 37.0912 66.6667 38.4164 63.3469C38.5288 63.0654 38.6037 62.7971 38.6495 62.5441C44.1556 64.3355 54.4073 68.4011 56.2877 72.5385C57.2888 74.7405 53.6412 76.8893 48.3789 79.6844C45.653 81.1322 43.0211 82.5312 41.1904 84.1197H30.6405C29.9726 84.1197 29.4311 84.6612 29.4311 85.3291C29.4311 85.997 29.9726 86.5385 30.6405 86.5385H39.1993C39.0627 86.8128 38.9514 87.0943 38.8689 87.3834C38.7064 87.952 38.3026 88.582 37.7076 89.2419H19.116C18.4481 89.2419 17.9066 89.7832 17.9066 90.4514C17.9066 91.1195 18.4481 91.6608 19.116 91.6608H34.8388C30.2686 94.8022 22.6225 97.8223 15.7268 97.8223C13.2999 97.822 11.1836 97.4393 9.43689 96.6837ZM56.8648 94.9294C56.4385 95.0173 56.0097 95.0813 55.58 95.1343C56.1796 93.6915 57.4596 91.4018 60.0096 89.4946C64.0593 89.5977 97.2147 90.5237 105.136 93.3344C105.51 93.4672 105.771 93.7157 105.957 94.1161C106.632 95.5734 106.086 98.5096 105.452 100.549C104.764 100.371 104.064 100.187 103.343 99.987C83.4986 94.5039 67.4267 92.755 56.8648 94.9294ZM117.647 102.982C116.894 102.826 116.808 99.9475 117.345 97.1319C122.714 99.1589 126.833 101.505 129.186 102.994C127.146 103.346 123.118 104.112 117.647 102.982ZM124.788 96.6339C123.634 96.2521 123.972 92.9394 124.55 90.4206C130.335 92.5942 134.685 95.1351 136.944 96.591C135.166 97.1157 130.471 98.515 124.788 96.6339Z" fill="#2A9D8F" />
                                    <path d="M42.5904 45.136C42.6319 45.136 42.674 45.1337 42.7164 45.1295C43.3806 45.0606 43.8635 44.4664 43.7949 43.802C42.5309 31.5845 40.4049 1.88243 40.3835 1.58392C40.336 0.917739 39.7577 0.416042 39.091 0.463565C38.4248 0.511088 37.9231 1.0899 37.9709 1.75608C37.9923 2.05517 40.1211 31.7954 41.3889 44.0509C41.4532 44.673 41.9785 45.136 42.5904 45.136Z" fill="#2A9D8F" />
                                </svg>
                                <span> <?php the_sub_field('foot_condition_title'); ?></span>
                            </div>
                        </div>


                        <div id="modal-custom-footconditions<?php echo $counter;  ?>" class="modalMenu modalfoot">
                            <div class="modal__header">
                                <button data-iziModal-close class="icon-close">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L15 15M1 15L15 1" stroke="#A9E1D3" stroke-width="2" />
                                    </svg>
                                </button>
                            </div>

                            <div class="modal__content relative px-0 lg:px-8">
                                <h3 class="title"> <?php the_sub_field('foot_condition_title'); ?></h3>
                                <?php the_sub_field('foot_condition_content'); ?>
                                <a class="btn btn--primary mb-4 mt-8" href="/schedule-an-appointment/">Schedule an Appointment</a>
                            </div>

                        </div>
                        <?php $counter++; ?>
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>


            <?php
            $args = array('post_type' => 'foot_condition', 'posts_per_page' => -1);
            $loop = new WP_Query($args);
            if ($loop->have_posts()) :
                $counter = 1;
            ?>
                <div class="container__conditions grid grid-col-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-12 md:mb-14 px-4 lg:px-0">
                    <?php
                    while ($loop->have_posts()) : $loop->the_post(); ?>
                        <?php get_template_part(
                            'template-parts/items/item-foot',
                            'condition',
                            array(
                                'modalName' => 'data-izimodal-open="#modal-custom-footconditions' . $counter . '"',
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
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>



<?php
get_footer();
