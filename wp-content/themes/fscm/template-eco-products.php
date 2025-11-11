<?php 

/*
 * Template Name: Eco Products
*/
?>

<?php get_header('eco'); ?>  

<div class="w-full relative"> 
  <div class="container px-16 py-20 flex flex-col justify-center items-center gap-10"> 

    <div class="grid grid-cols-2 lg:grid-cols-4 w-full gap-3 lg:gap-6">
      <?php
      $products = get_posts([
        'post_type'      => 'eco-product',
        'posts_per_page' => 8,
        'orderby'        => 'updated',
        'order'          => 'DESC',
      ]);
      foreach ($products as $product) :
        $thumbnail_id = get_post_thumbnail_id($product->ID);
        $image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : get_template_directory_uri() . '/img/category.webp';
      ?>
        <a href="<?= get_permalink($product->ID) ?>" class="inline-flex flex-col justify-start items-start border border-gray-300 relative">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-2 left-2">
            <path d="M24 0H0V24L24 0Z" fill="white"/>
            </svg>
          <img class="w-full h-[247px] object-cover" src="<?= esc_url($image_url) ?>" alt="<?= esc_attr($product->post_title) ?>" />
          <div class="self-stretch p-4 gap-2 flex flex-col gap-2">
            <div class="justify-start text-stone-900 text-base font-semibold leading-6"><?= esc_html($product->post_title) ?></div>
            <div>Lorem ipsum dolor sit eiusmod tempor incididunt ut labore et dolore magna...</div>
          </div>
        </a>
      <?php endforeach; ?>
    </div>

    <div class="flex justify-center items-center gap-4 mt-3">
        <a href="<?= site_url('/eco-products') ?>" class="px-24 py-2 inline-flex gap-2 justify-center items-center text-white bg-[#C00F0C]">  
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.00016 3.33337V12.6667M8.00016 12.6667L12.6668 8.00004M8.00016 12.6667L3.3335 8.00004" stroke="#EBFFEE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            View More
        </a>  
    </div>
    
  </div>
</div> 

<?php get_footer('eco'); ?>
