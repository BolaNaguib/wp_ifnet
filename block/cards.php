<?php 
// ACF FIELDS 
?>
<!-- START CARD -->
<section class="py-4">
    <div class="container px-4 mx-auto">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <?php if (have_rows('slider')) : ?>
            <?php while (have_rows('slider')) : the_row(); 
            //ACF Fields
            
            ?>
            <div class="card">
                    <img style="width:100%" loading="lazy" src="https://picsum.photos/375/200.webp?random=<?php echo $i ?>.webp" alt="">
                    <h4 class="text-xl font-semibold py-4 hr-bb relative">Agricultural Engineering</h4>
                    <p class="text-sm text-gray-500">As the world's largest green and clean egerngy specialist of the printing and typesetting industry. Lorem has been the industry.</p>
                </div>
            <?php endwhile; ?>
            <?php endif; ?>
                
        </div>
    </div>
</section>
<!-- END CARD -->