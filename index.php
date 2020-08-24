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
<div class="container px-5 mx-auto mt-8">
<div class="grid grid-cols-3 gap-6">
    <div class="col-span-2">
    <?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); 
        // wordpress vars
        $title = get_the_title();
        $permalink = get_permalink();
        $thumbnail = get_the_post_thumbnail_url();
        $excerpt = get_the_excerpt();
        $author = get_the_author_meta('display_name');
        $post_day = get_the_date( 'd' );
$post_month = get_the_date( 'M' );
$post_year = get_the_date( 'y' );
$comments = get_comments_number();
    ?>
    <div class="grid grid-cols-12 gap-6 -mb-6 ">
    <div class="col-span-2">
<div class="h-full bg-secondary relative">
<div class="absolute mr-8 border-t-8  border-b-8 border-l-8 right-0 top-0 -mr-3 mt-6" style='border-color: #ffffff00 rgba(16,110,170,1);'></div>
<div class="h-full flex flex-col content-center">
<div class="text-white text-center text-2xl py-12" >
    By <br> <?php echo $author ?>
</div>
<div class='text-center text-white py-8' style='    background-color: #024773;'>
<span class='block text-6xl'><?php echo $post_day; ?></span>
<span class='block text-xl'><?php echo $post_month; ?></span>
<span class='block text-xl'><?php echo $post_year; ?></span>

</div>
<div class='text-center py-12 text-white'>
    <span class='block'><?php echo $comments ?> </span>
    <span>Comments</span>
</div>
</div>

</div>
    </div>
    <div class="col-span-10">
    <div>
    <h3 class='pt-3 pb-4'><a href="<?php echo $permalink;?>" class='text-3xl text-secondary hover:text-gray-700' ><?php echo $title ?></a></h3>
        
        <img src="<?php echo $thumbnail; ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">
        <p class="py-4">
        <?php echo $excerpt ?>
        </p>
        <a class='inline-block bg-secondary text-white px-6 py-2 mt-4 transition duration-300 ease-in-out hover:bg-gray-800' href="<?php echo $permalink ?>"> READ MORE </a>
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
    <?php dynamic_sidebar('x'); ?>

    </div>
</div>

</div>




















<?php get_footer(); ?>