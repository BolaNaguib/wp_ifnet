<!-- START partnerts -->
<section class="pt-8">
    <div class="grid grid-cols-2 lg:grid-cols-6">
        <?php if (have_rows('partners')) : ?>
            <?php while (have_rows('partners')) : the_row();
                //ACF Fields
                $thumbnail = get_sub_field('thumbnail');
                $url = get_sub_field('url');
                $title = get_sub_field('title');
                $info = get_sub_field('info');
            ?>
                <div>
                    <div class="relative overflow-hidden">
                        <a class="hovercard" href="<?php echo $url ?>">
                            <img loading="lazy" style="width: 100%;" src="<?php echo $thumbnail['url'] ?>" alt="<?php echo $thumbnail['alt'] ?>" title="<?php echo $thumbnail['url'] ?>">
                            <div class="absolute text-white w-full h-full top-0 flex items-end p-4 opacity-0 " style="z-index: 10; background-color: #106eaa94;">
                                <div class="text-sm"><b><?php echo $title ?></b>
                                    <br>
                                    <span><?php echo $info ?></span></div>

                            </div>
                        </a>

                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>


    </div>
</section>
<!-- END partnerts -->