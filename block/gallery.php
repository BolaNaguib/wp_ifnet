<!-- START GAllery -->
<section class="py-12 bg-black text-white">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-3 gap-6">
            <div class="col-span-3 lg:col-span-1">
                <h3 class="pb text-3xl font-semibold">Here is Our Gallery</h3>
                <hr style="border-bottom: 4px solid #db4436;" class="text-secondary border-solid w-16 inline-block border-t-0 ">
                <p class="mt-2">Perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam doloremque laudantium, totam rem aperiam.</p>
            </div>
            <div class="col-span-3 lg:col-span-2">
                <div class="grid grid-cols-4 gap-2">
                    <?php for ($i = 0; $i < 8; $i++) : ?>
                        <img style="width:100%" loading="lazy" src="https://picsum.photos/375/200.webp?random=<?php echo $i ?>.webp" alt="">
                    <?php endfor; ?>

                </div>
            </div>
        </div>
    </div>
</section>