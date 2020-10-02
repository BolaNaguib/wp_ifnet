<?php
// ACF Fields 
$cat_id = get_field('category');
$section_title = get_field('section_title') ? get_field('section_title') : 'News, Updates & Tricks';
?>
<!-- START NEWS -->
<section class="py-12 bg-gray-100">
    <div class="container mx-auto px-4">
        <div class="text-center py-8 mb-8">
            <h2 class="text-4xl"> <?php echo $section_title ?> </h2>
        </div>
        <div class="grid lg:grid-cols-3 gap-6">
            <?php

            $args = array('cat' => $cat_id);
            // the query
            $the_query = new WP_Query($args); ?>

            <?php if ($the_query->have_posts()) : ?>

                <!-- pagination here -->

                <!-- the loop -->
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <?php
                    $id = get_the_ID();
                    $fake_author = get_field('author', $id);
                    $fake_day = get_field('day', $id);
                    $fake_month = get_field('month', $id);
                    $fake_year = get_field('year', $id);
                    $title = get_the_title();
                    $permalink = get_permalink();
                    $thumbnail = get_the_post_thumbnail_url();
                    $excerpt = get_the_excerpt();

                    $author = $fake_author ? $fake_author :  get_the_author_meta('display_name');
                    $post_day = $fake_day ? $fake_day :  get_the_date('d');
                    $post_month = $fake_month ? $fake_month :  get_the_date('M');
                    $post_year = $fake_year ? $fake_year :  get_the_date('y');

                    $comments = get_comments_number();
                    ?>
                    <div class="max-w-2xl mx-auto bg-white overflow-hidden shadow-md rounded-lg">
                        <img class="w-full h-64 object-cover" src="<?php echo $thumbnail; ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">


                        <div class="p-6">
                            <div>
                                <a href="<?php echo $permalink ?>" class="block text-gray-800 font-semibold text-2xl mt-2 hover:text-gray-600 hover:underline"><?php echo $title ?></a>
                                <p class="text-sm text-gray-600 mt-2"> <?php echo $excerpt ?>
                                </p>
                            </div>

                            <div class="mt-4">
                                <div class="flex items-center justify-between">
                                    <a href="<?php echo $permalink ?>" class="px-2 py-1 bg-gray-800 text-white text-xs font-bold uppercase rounded hover:bg-gray-700 focus:outline-none focus:bg-gray-700">READ MORE</a>

                                    <span class="mx-1 text-gray-600 text-xs"><?php echo $post_day; ?> <?php echo $post_month; ?> <?php echo $post_year; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

                <!-- pagination here -->

                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- END NEWS -->