<?php get_header(); ?>

<section class="min-h-64">
    <h1>Contact</h1>
</section>

<?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<?php get_footer(); ?>