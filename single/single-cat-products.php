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
        $title = get_the_title() ? get_the_title() : 'product name' ;
        $thumbnail = get_the_post_thumbnail_url();
        $excerpt = get_the_excerpt();
        $content = get_the_content();
        $category = get_the_category($id);
        $author = get_the_author_meta('display_name');
        $post_day = get_the_date( 'd' );
$post_month = get_the_date( 'M' );
$post_year = get_the_date( 'y' );
$comments = get_comments_number();
// ACF Fields 
$price = get_field('price') ? get_field('price') : '100'; 
$description = get_field('description') ? get_field('description') : 'Fam locavore kickstarter distillery. Mixtape chillwave tumeric sriracha taximy chia microdosing tilde DIY. XOXO fam indxgo juiceramps cornhole raw denim forage brooklyn. Everyday carry +1 seitan poutine tumeric. Gastropub blue bottle austin listicle pour-over, neutra jean shorts keytar banjo tattooed umami cardigan.'; 
$youtube_video = get_field('youtube_video');   
   ?>

<section class="text-gray-700 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
    <div class='lg:w-1/2'>
    <img  class="w-full  rounded" src="<?php echo $thumbnail; ?>" alt="<?php echo $title ?>" title="<?php echo $title ?>">

    </div>

      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest"><?php 
        foreach($category as $cd){
            echo $cd->cat_name .' ';
            } ?></h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?php echo $title ?></h1>
        <div class="flex mb-4 justify-between">
        <span class="title-font font-medium text-2xl text-secondary">$<?php echo $price ?></span>

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
        <p class="leading-relaxed"><?php echo $description ?></p>
        <div class="flex mt-6 items-center pb-5 border-b-2 border-gray-200 mb-5">
      
        
        </div>
        <?php if($youtube_video): ?>
        <style>
                        .iframe iframe {
                            width: 100% !important;
                            height: 400px;
                        }
                    </style>
                    <div class="iframe ">
                        <iframe width="560" height="315" src="<?php echo $youtube_video ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                      <?php endif; ?>
        <?php if (have_rows('downloads')) : ?>

        <hr>
        <ul>
                            <?php while (have_rows('downloads')) : the_row();
                                //ACF Fields
                                $file = get_sub_field('file');
                                $file_name = get_sub_field('file_name');
                                $file_path = get_template_directory_uri();
                            ?>
                                <li>
                                    <a href="<?php echo $file_path . '/uploads/' . $file ?>" class="flex items-center bg-black text-white hover:bg-gray-800 p-4 rounded mb-4 transition duration-300 ease-in-out">
                                        <svg class="h-6" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="file-download" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="svg-inline--fa fa-file-download fa-w-12">
                                            <path fill="currentColor" d="M224 136V0H24C10.7 0 0 10.7 0 24v464c0 13.3 10.7 24 24 24h336c13.3 0 24-10.7 24-24V160H248c-13.2 0-24-10.8-24-24zm76.45 211.36l-96.42 95.7c-6.65 6.61-17.39 6.61-24.04 0l-96.42-95.7C73.42 337.29 80.54 320 94.82 320H160v-80c0-8.84 7.16-16 16-16h32c8.84 0 16 7.16 16 16v80h65.18c14.28 0 21.4 17.29 11.27 27.36zM377 105L279.1 7c-4.5-4.5-10.6-7-17-7H256v128h128v-6.1c0-6.3-2.5-12.4-7-16.9z" class=""></path>
                                        </svg>
                                        <span class="inline-block ml-4"><?php echo $file_name ?></span>
                                    </a>
                                </li>
                            <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>

        <div class="block">
          <button class="flex ml-auto w-full justify-center  bg-white border-0 py-2 px-6 focus:outline-none text-black rounded">Request a Quote</button>
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