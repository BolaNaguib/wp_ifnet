<?php
// if (get_query_var('page')) {
//     $page = get_query_var('page');
// } else {
//     $page = 1;
// }

// Variables
// $row              = 0;
// $posts_per_page  = 1; // How many posts to display on each page
// $posts           = get_field('services');
// $total            = count($posts);
// $pages            = ceil($total / $posts_per_page);
// $min              = (($page * $posts_per_page) - $posts_per_page) + 1;
// $max              = ($min + $posts_per_page) - 1;

?>
<!-- START Services -->
<section class="pt-8 lg:pt-24">
    <div class="container mx-auto px-5">
        <div class="grid grid-cols-3 gap-12">
            <div class="col-span-3 lg:col-span-2">
                <?php if (have_rows('services')) : ?>
                    <?php while (have_rows('services')) : the_row();
                        // $row++;
                        // Ignore this image if $row is lower than $min
                        // if ($row < $min) {
                        //     continue;
                        // }

                        // // Stop loop completely if $row is higher than $max
                        // if ($row > $max) {
                        //     break;
                        // }

                        //ACF Fields
                        $thumbnail = get_sub_field('thumbnail');
                        $title = get_sub_field('title');
                        $caption = get_sub_field('caption');
                        $page_link = get_sub_field('page');
                    ?>
                        <div class="shadow-lg border border-gray-100 relative mb-16">
                            <div class="grid grid-cols-3 gap-6">
                                <div class="hidden lg:block col-span-1">
                                    <img loading="lazy" class="transform -translate-y-6 translate-x-6 rounded" src="<?php echo $thumbnail['url'] ?>" alt="<?php echo $thumbnail['alt'] ?>" title="<?php echo $thumbnail['title'] ?>">
                                </div>
                                <div class="col-span-3 lg:col-span-2 flex items-start">
                                    <div class="p-8 mb-8 lg:mb-0">
                                        <a href="<?php echo $page_link ?>" class="font-semibold hover:text-secondary text-xl mb-4 block transition duration-300 ease-in-out"><?php echo $title ?></a>
                                        <p class="text-gray-700"><?php echo $caption ?></p>

                                    </div>
                                    <a class="absolute bottom-0 right-0 bg-black text-white font-semibold py-2 px-6 hover:bg-secondary transition duration-300 ease-in-out" href="<?php echo $page_link ?>"> READ MORE </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php
                    // Pagination
                    // echo paginate_links(array(
                    //     'base' => get_permalink() . '%#%' . '/',
                    //     'format' => '?page=%#%',
                    //     'current' => $page,
                    //     'total' => $pages
                    // ));
                    ?>
                <?php endif; ?>

            </div>
            <div class="col-span-3 lg:col-span-1">
                <div class="text-white bg-orange rounded overflow-hidden mb-8">
                    <h3 class="p-8 font-semibold sidebartitle relative" style="background-color: #f2654e;">FULL LIST OF SERVICES</h3>
                    <div class="px-8 py-8">
                        <ul>
                            <?php if (have_rows('services')) : ?>
                                <?php while (have_rows('services')) : the_row();
                                    //ACF Fields
                                    $title = get_sub_field('title');
                                    $page_link = get_sub_field('page'); ?>
                                    <li>
                                        <a class="listlink relative block mb-4" href="<?php echo $page_link ?>"><?php echo $title ?></a>
                                    </li>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>

                <div>
                    <h3 class="py-8 font-semibold hr-bb relative">Company Presentation</h3>
                    <ul>
                        <?php if (have_rows('downloads')) : ?>
                            <?php while (have_rows('downloads')) : the_row();
                                //ACF Fields
                                $file = get_sub_field('file');
                                $file_name = get_sub_field('file_name');
                                $file_path = get_template_directory_uri();
                            ?>
                                <li>
                                    <a href="<?php echo $file_path . '/uploads/' . $file ?>" class="flex items-center bg-black text-white hover:bg-gray-800 p-4 rounded mb-4 transition duration-300 ease-in-out">
                                        <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-download fa-w-12">
                                            <path fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm76.45 211.36l-96.42 95.7c-6.65 6.61-17.39 6.61-24.04 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z" class=""></path>
                                        </svg>
                                        <span class="inline-block ml-4"><?php echo $file_name ?></span>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- END Services -->