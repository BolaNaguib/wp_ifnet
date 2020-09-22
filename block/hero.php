<?php
// ACF FIELDS 
$small = get_field('small') ? get_field('small') : 'THE ULTIMATE GOAL';
$name = get_field('name') ? get_field('name') : 'Supplying The World <br> With High Quality <br> Pricessed Food';
$button_url = get_field('button_url') ? get_field('button_url') : '#';
$button_title = get_field('button_title') ? get_field('button_title') : 'Read More';
$hero_bg = get_field('hero_bg') ? get_field('hero_bg') : 'http://themes.webdevia.com/factory/wp-content/uploads/2016/06/quality.jpg';
?>
<!-- START hero -->
<section class="bg-gray bg-cover bg-center bg-top bg-no-repeat h-screen xx relative" style="background-image: url('<?php echo $hero_bg; ?>');">

    <div class="container mx-auto px-5 h-full flex items-center justify-center relative" style="z-index:9">
        <div class="text-center text-white">
            <span class="font-bold"><?php echo $small ?></span>
            <h1 class="lg:text-6xl font-bold "> <?php echo $name ?> </h1>
            <a href="<?php echo $button_url ?>" class="bg-secondary px-4 py-2 text-white hover:bg-gray-800 transition duration-500 ease-in-out font-semibold text-sm mt-4 inline-block">
                <?php echo $button_title ?></a>
        </div>

    </div>
</section>
<!-- END hero -->