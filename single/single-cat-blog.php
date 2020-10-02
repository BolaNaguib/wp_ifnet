<?php /* Template Name: No Blocks Template */ ?>
<?php get_header(); ?>
<?php if (!is_front_page()) : ?>
  <section class=" pt-32 lg:pt-40">
    <div class="container mx-auto px-5 mt-4 lg:mt-0">
      <div class="singlePageTitle relative pb-8">
        <h1 class="text-3xl lg:text-5xl"><?php the_title(); ?></h1>
        <div class="breadcrumb text-gray-800"><?php get_breadcrumb(); ?>
        </div>
      </div>
    </div>
  </section>
<?php endif; ?>
<!-- START container -->
<div class='container mx-auto px-4 prose lg:prose-xl py-12'>
  <?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; ?>
  <?php else : ?>
  <?php endif; ?>
</div>
<!-- END container -->
<?php get_footer(); ?>