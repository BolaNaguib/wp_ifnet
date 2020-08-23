<?php get_header(); ?>
<?php 
$id = get_the_ID();
?>
<?php if (!is_front_page()): ?>
<section class=" pt-32 lg:pt-40">
    <div class="container mx-auto px-5 mt-4 lg:mt-0">
        <div class="singlePageTitle relative pb-8">
            <h1 class="text-3xl lg:text-5xl"><?php the_title($id); ?></h1>
            <div class="breadcrumb text-gray-800"><?php get_breadcrumb(); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<div class="container px-5 mx-auto">
<?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
</div>




















<?php get_footer(); ?>