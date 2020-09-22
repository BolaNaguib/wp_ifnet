<?php
// ACF FIELDS 
$section_bg = get_field('section_bg');
$image = $section_bg['url'] ? $section_bg['url'] : 'http://themes.webdevia.com/factory/wp-content/uploads/2016/06/quality.jpg';
$title = get_field('title') ? get_field('title') : 'Quality is our first priority';
$caption = get_field('caption') ? get_field('caption') : 'Investing in business is easy if you know the rules uis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
$button_url = get_field('button_url') ? get_field('button_url') : '#';
$button_title = get_field('button_title') ? get_field('button_title') : 'GET THE OFFER ';

?>
<!-- START bgSection -->
<section class="bg-gray bg-center bg-no-repeat bg-cover py-24 relative overflow-hidden">

    <img loading="lazy" class="object-cover w-full h-full absolute z-0" src="<?php echo $image; ?>" alt="<?php echo $section_bg['alt']; ?>" title="<?php echo $section_bg['title']; ?>">
    <div class="bg-black w-full h-full absolute  z-10 transform opacity-25"></div>
    <div class="container mx-auto px-4 py-24 relative z-20">
        <div class="grid lg:grid-cols-2 gap-6">
            <div></div>
            <div>
                <h3 class="text-5xl text-white font-bold py-4"> <?php echo $title ?></h3>
                <p class="text-white font-semibold "><?php echo $caption ?></p>
                <a class="text-white my-4 inline-block bg-orange px-4 py-2 hover:bg-black transition duration-300 ease-in-out" href="<?php echo $button_url ?>"><?php echo $button_title ?></a>
            </div>
        </div>
    </div>
</section>
<!-- END gbSection -->