<?php
// ACF FIELDS 
?>
<!-- START CARD -->
<section class="py-4">
    <div class="container px-4 mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <?php if (have_rows('cards')) : ?>
                <?php while (have_rows('cards')) : the_row();
                    //ACF Fields
                    $image = get_sub_field('image');
                    $pic = $image['url'] ? $image['url'] : 'https://picsum.photos/375/200.webp?random=1.webp';
                    $title = get_sub_field('title') ? get_sub_field('title') : 'Agricultural Engineering';
                    $caption = get_sub_field('caption') ? get_sub_field('caption') : 'As the world"s largest green and clean egerngy specialist of the printing and typesetting industry. Lorem has been the industry.';
                ?>
                    <div class="card">
                        <img style="width:100%" loading="lazy" src="<?php echo $pic ?>" alt="<?php echo $image['alt'] ?>" title="<?php echo $image['title'] ?>">
                        <h4 class="text-xl font-semibold py-4 hr-bb relative"><?php echo $title ?></h4>
                        <p class="text-sm text-gray-500"><?php echo $caption ?></p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>

        </div>
    </div>
</section>
<!-- END CARD -->