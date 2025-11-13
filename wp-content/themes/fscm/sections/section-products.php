<div id="products" class="w-full relative flex items-center lg:min-h-[926px]">
  <?php if(is_fscm()): ?>
    <div class="w-[50px] md:w-[80px] lg:w-[115px] aspect-[1/1] absolute left-0 top-0" style="background: #E20000; clip-path: polygon(100% 0, 0 0, 0 100%);"></div>
  <?php endif ;?>

  <div class="container px-16 py-8 lg:py-20 flex flex-col justify-center items-center gap-5 lg:gap-12">
    <div class="text-center text-xl lg:text-[24px] font-semibold leading-10"><?= is_fscm() ? 'FSCM' : 'ECO' ?> Product Categories</div>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 lg:gap-6">
      <?php
      $categories = get_terms([
        'taxonomy'   => is_fscm() ? 'fscm-category' : 'eco-category',
        'hide_empty' => false,
        'orderby'    => 'updated',
        'order'      => 'DESC',
      ]);
      foreach ($categories as $category) :
        $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
        $image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : get_template_directory_uri() . '/img/category.webp';
      ?>
        <div class="inline-flex flex-col justify-start items-start border border-gray-300 relative" style="background: linear-gradient(148.69deg, #FFFFFF 39.95%, #D9D9D9 142.56%);">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute w-[16px] h-[16px] lg:w-[24px] lg:h-[24px] lg:top-2 lg:left-2 top-1 left-1 z-5">
            <path d="M24 0H0V24L24 0Z" fill="white"/>
            </svg>
          <img class="w-full aspect-[320/200] object-cover" src="<?= esc_url($image_url) ?>" alt="<?= esc_attr($category->name) ?>" />
          <div class="w-full h-full p-2 lg:p-4 text-sm lg:text-medium flex flex-col justify-start lg:items-center gap-2">
            <div class="justify-start text-stone-900 text-base font-semibold leading-6"><?= esc_html($category->name) ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="flex flex-col lg:flex-row justify-center items-center gap-4 mt-1">
        <a href="<?= site_url('/' . (is_fscm() ? 'fscm' : 'eco') . '-products') ?>" class="btn <?= is_fscm() ? 'btn-black' : 'btn-red' ?> px-24 py-2 inline-flex gap-2 justify-center items-center text-white bg-[#2C2C2C] text-[20px]">  
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="var(--Icon-Default-Default, #fff)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Find My Parts
        </a> 
        <a href="https://drive.google.com/file/d/1fAPZYyokPoI1BLh6APJVXOKWq5BRMtjr/view?usp=sharing" target="_blank" class="btn <?= is_fscm() ? 'btn-black' : 'btn-red' ?> px-16 py-2 inline-flex gap-2 justify-center font-bold items-center text-white bg-[#2C2C2C] text-[20px]">  
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M4.66667 6.66667L8 10M8 10L11.3333 6.66667M8 10V2" stroke="#F5F5F5" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Download Catalogue
        </a> 
    </div>
    
  </div>
</div>