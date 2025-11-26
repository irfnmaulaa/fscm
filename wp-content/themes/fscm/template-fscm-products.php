<?php 

/*
 * Template Name: FSCM Products
*/
?>

<?php get_header(); ?>  

<div class="w-full relative"> 
  <div class="container !max-w-[1340px] px-16 py-8 lg:py-24 flex flex-col justify-center items-center gap-10"> 

    <div class="grid grid-cols-2 lg:grid-cols-4 w-full gap-3 lg:gap-6">
      <?php
      $products = get_posts([
        'post_type'      => 'fscm-product',
        'posts_per_page' => 8,
        'meta_key'       => 'product_order',
        'orderby'        => ['meta_value_num' => 'ASC', 'modified' => 'DESC'],
        'order'          => 'ASC',
      ]);
      foreach ($products as $product) : ?>
        <?php get_template_part('sections/section', 'product-item', ['product' => $product]) ?>
      <?php endforeach; ?>
    </div>

    <div class="flex justify-center items-center gap-4 mt-3">
        <a href="<?= site_url('/fscm-products') ?>" class="btn btn-black px-24 py-2 inline-flex gap-2 justify-center items-center text-[20px]">  
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8.00016 3.33337V12.6667M8.00016 12.6667L12.6668 8.00004M8.00016 12.6667L3.3335 8.00004" stroke="#EBFFEE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            View More
        </a>  
    </div>
    
  </div>
</div> 

<?php get_footer(); ?>
