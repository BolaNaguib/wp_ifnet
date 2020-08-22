<?php get_header(); ?>

<section class=" pt-32 lg:pt-40">
    <div class="container mx-auto px-5 mt-4 lg:mt-0">
        <div class="singlePageTitle relative pb-8">
            <h1 class="text-3xl lg:text-5xl">Contact</h1>
            <div class="breadcrumb"><?php get_breadcrumb(); ?>
            </div>

        </div>
    </div>
</section>

<?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<?php get_footer(); ?>