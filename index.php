<?php get_header(); ?>
<?php 
$id = get_the_ID();
?>
<?php if (!is_front_page()): ?>
<section class=" pt-32 lg:pt-40">
    <div class="container mx-auto px-5 mt-4 lg:mt-0">
        <div class="singlePageTitle relative pb-8">
            <h1 class="text-3xl lg:text-5xl"><?php wp_title(); ?></h1>
            <div class="breadcrumb text-gray-800"><?php get_breadcrumb(); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<div class="container px-5 mx-auto">
<div class="grid grid-cols-3">
    <div class="col-span-2">
    <?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); 
        // wordpress vars
        $title = the_title();
    ?>
    <div class="grid grid-cols-12 gap-6">
    <div class="col-span-2">
left
    </div>
    <div class="col-span-10">
    <div>
        <a  class='text-2xl'><?php echo $title ?></a>
        <?php the_content(); ?>
    </div>    
        </div>
    <div>
    </div>

    </div>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
    </div>
    <div class="col-span-1">
    <?php get_sidebar(); ?>

    </div>
</div>

</div>




















<?php get_footer(); ?>