<?php
// ACF FIELDS 

?>
<!-- START Categories -->
<section class="py-8 bg-black px-4 mt-8">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-2">
        <?php if (have_rows('category')) : ?>
            <?php while (have_rows('category')) : the_row();
                //ACF Fields
                $page = get_sub_field('page') ? get_sub_field('page') : '#';
                $thumbnail = get_sub_field('thumbnail');
                $image = $thumbnail['url'] ? $thumbnail['url'] : 'https://picsum.photos/450/700.webp?random=4.webp';
            ?>
                <div class="overflow-hidden rounded">
                    <a href="<?php echo $page ?>">
                        <img alt="<?php echo $thumbnail['alt'] ?>" title="<?php echo $thumbnail['title'] ?>" class="transform  scale-100 hover:scale-125 transition duration-500 ease-in-out" style="width:100%" loading="lazy" src="<?php echo $image ?>">
                    </a>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>

    </div>
</section>
<!-- END Categories -->