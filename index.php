<?php get_header(); ?>


















<!-- START Categories -->
<section class="py-8 bg-black px-4">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-2">
        <?php for ($i = 0; $i < 8; $i++) : ?>
            <div class="overflow-hidden rounded">
                <a href="#">
                    <img class="transform  scale-100 hover:scale-125 transition duration-500 ease-in-out" style="width:100%" loading="lazy" src="https://picsum.photos/450/700.webp?random=<?php echo $i ?>.webp" alt="">
                </a>

            </div>
        <?php endfor; ?>

    </div>
</section>
<!-- END Categories -->




<?php get_footer(); ?>