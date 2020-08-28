<?php get_header(); ?>
<?php 
$id = get_the_ID();
?>
<?php if (!is_front_page()): ?>
<section class=" pt-24 ">
    <div class="container mx-auto px-5 mt-4 lg:mt-0">
        <!-- <div class="singlePageTitle relative pb-8">
            <h1 class="text-3xl lg:text-5xl"><?php wp_title(); ?></h1>
            <div class="breadcrumb text-gray-800"><?php get_breadcrumb(); ?>
            </div>
        </div> -->
    </div>
</section>
<?php endif; ?>
<div class="container px-5 mx-auto mt-8">

    <?php if (have_posts()) : ?>
    <?php /* Start the Loop */ ?>
    <?php while (have_posts()) : the_post(); 
        // wordpress vars
        $title = get_the_title();
        $permalink = get_permalink();
        $thumbnail = get_the_post_thumbnail_url();
        $excerpt = get_the_excerpt();
        $content = get_the_content();
        $category = get_the_category($id);
        $author = get_the_author_meta('display_name');
        $post_day = get_the_date( 'd' );
$post_month = get_the_date( 'M' );
$post_year = get_the_date( 'y' );
$comments = get_comments_number();
    ?>

<section class="text-gray-700 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
    <img  class="lg:w-1/2 w-full  rounded" src="<?php echo $thumbnail; ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">

      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest"><?php 
        foreach($category as $cd){
            echo $cd->cat_name .' ';
            } ?></h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?php echo $title ?></h1>
        <div class="flex mb-4 justify-between">
        <span class="title-font font-medium text-2xl text-secondary">$58.00</span>

          <span class="flex items-center">
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
            <svg fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 text-indigo-500" viewBox="0 0 24 24">
              <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"></path>
            </svg>
          </span>
         
        </div>
        <p class="leading-relaxed">Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.</p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
      
        
        </div>
        <div class="block">
          <button class="flex ml-auto w-full justify-center text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Request a Quote</button>
        <hr> 
             <br>
       
        </div>
        <div class='forminput block'>
              <?php echo do_shortcode('[contact-form-7 id="8" title="Contact form 1"]') ?>

              </div>
      </div>
    </div>
  </div>
</section>
    <?php endwhile; ?>
<?php else : ?>
<?php endif; ?>


</div>




















<?php get_footer(); ?>