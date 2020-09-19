<?php
// ACF FIELDS 
$block_title = get_field('block_title') ? get_field('block_title') : "We Offer First Class Services";
$block_caption = get_field('block_caption') ? get_field('block_caption') : "You’ve got covered by the professionals";
$block_image = get_field('block_image');
$image = $block_image['url'] ? $block_image['url'] : 'https://picsum.photos/375/375.webp';

?>

<!-- START iconscard -->
<section class="py-12">
    <div class="container px-4 mx-auto">
        <div class="text-center py-8 mb-8">
            <h2 class="text-4xl"><?php echo $block_title ?></h2>
            <h3 class="text 2xl"><?php echo $block_caption ?></h3>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <div class="col-span-2 flex items-center">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <?php if (have_rows('iconcards')) : ?>
                        <?php while (have_rows('iconcards')) : the_row();
                            //ACF Fields
                            $icon = get_sub_field('icon') ? get_sub_field('icon') : '<svg class="" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="briefcase" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-briefcase fa-w-16">
                    <path fill="currentColor" d="M320 336c0 8.84-7.16 16-16 16h-96c-8.84 0-16-7.16-16-16v-48H0v144c0 25.6 22.4 48 48 48h416c25.6 0 48-22.4 48-48V288H320v48zm144-208h-80V80c0-25.6-22.4-48-48-48H176c-25.6 0-48 22.4-48 48v48H48c-25.6 0-48 22.4-48 48v80h512v-80c0-25.6-22.4-48-48-48zm-144 0H192V96h128v32z" class=""></path>
                </svg>';
                            $title = get_sub_field('title') ? get_sub_field('title') : 'Investment';
                            $caption = get_sub_field('caption') ? get_sub_field('caption') : 'For your future est ornare, tempus velit vitae, sodales nunc. Nulla sed posuere est. Quisque et porttitor nice.';
                        ?>
                            <div class="iconx">
                                <?php echo $icon ?>
                                <h4 class="text-xl font-semibold py-2"><?php echo $title ?></h4>
                                <p class="text-sm text-gray-600"><?php echo $caption ?></p>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div>

            </div>
            <div class="col=span-1">
                <img class="w-full" src="<?php echo $image ?>" title="<?php echo $block_image['title'] ?>" alt="<?php echo $block_image['alt'] ?>">
            </div>
        </div>
    </div>
</section>
<!-- END iconscard -->