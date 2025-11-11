<?php 

/*
 * Template Name: Eco Homepage
*/
?>

<?php get_header('eco'); ?>

<?php get_template_part('sections/section', 'hero-eco'); ?>

<div id="about" class="w-full" style="background: linear-gradient(90deg, #C00F0C 0%, #FF9191 100%);">
  <div class="w-full h-4 bg-gradient-to-r from-red-300 via-red-600 via 30% to-white"></div> 
  
  <div class="container py-10 lg:py-20 flex flex-col justify-center items-center gap-6 lg:gap-10">
    <div class="text-center text-white text-2xl lg:text-3xl font-semibold leading-8 lg:leading-10">Built Through Experience. Proven on The Road.</div>
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6">
      <div class="size- min-w-0 lg:min-w-72 p-4 lg:p-6 bg-white flex-col justify-start items-start gap-3 lg:gap-4">
        <div class="w-full lg:w-48 justify-start items-start">
          <div class="flex-1 justify-start text-Text-Default-Default text-2xl lg:text-4xl font-bold leading-8 lg:leading-[48px]">5000+</div>
        </div>
        <div class="self-stretch flex justify-start items-start gap-2 lg:gap-3">
          <div class="flex-1 flex flex-col justify-start items-start gap-0.5">
            <div class="self-stretch justify-center text-[#757575] text-sm lg:text-base font-semibold leading-5 lg:leading-6">Mechanics & Authorized Workshops Recommend Us</div>
          </div>
        </div>
      </div>
      <div class="size- min-w-0 lg:min-w-72 p-4 lg:p-6 bg-white flex flex-col justify-start items-start gap-3 lg:gap-4">
        <div class="self-stretch flex justify-start items-start">
          <div class="justify-start text-Text-Default-Default text-2xl lg:text-4xl font-bold leading-8 lg:leading-[48px]">40+ Years</div>
        </div>
        <div class="self-stretch flex justify-start items-start gap-2 lg:gap-3">
          <div class="flex-1 flex flex-col justify-start items-start gap-0.5">
            <div class="self-stretch justify-center text-[#757575] text-sm lg:text-base font-semibold leading-5 lg:leading-6">Mechanics & Authorized Workshops Recommend Us</div>
          </div>
        </div>
      </div>
      <div class="size- min-w-0 lg:min-w-72 p-4 lg:p-6 bg-white flex flex-col justify-start items-start gap-3 lg:gap-4">
        <div class="w-full lg:w-48 flex justify-start items-start">
          <div class="flex-1 justify-start text-Text-Default-Default text-2xl lg:text-4xl font-bold leading-8 lg:leading-[48px]">500+</div>
        </div>
        <div class="self-stretch flex justify-start items-start gap-2 lg:gap-3">
          <div class="flex-1 flex flex-col justify-start items-start gap-0.5">
            <div class="self-stretch justify-center text-[#757575] text-sm lg:text-base font-semibold leading-5 lg:leading-6">Vehicle Models and Variants are Supported</div>
          </div>
        </div>
      </div>
      <div class="size- min-w-0 lg:min-w-72 p-4 lg:p-6 bg-white flex flex-col justify-start items-start gap-3 lg:gap-4">
        <img class="w-40 lg:w-56 h-8 lg:h-12" src="<?= get_template_directory_uri() . '/img/astra.webp' ?>" />
        <div class="self-stretch flex justify-start items-start gap-2 lg:gap-3">
          <div class="flex-1 flex flex-col justify-start items-start gap-0.5">
            <div class="self-stretch justify-center text-[#757575] text-sm lg:text-base font-semibold leading-5 lg:leading-6">Member of Astra Otoparts</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="products" class="w-full relative"> 
  <div class="container px-16 py-20 flex flex-col justify-center items-center gap-10">
    <div class="text-center text-3xl font-semibold leading-10">ECO Product Categories</div>

    <div class="grid grid-cols-2 lg:grid-cols-3 gap-3 lg:gap-6">
      <?php
      $categories = get_terms([
        'taxonomy'   => 'eco-category',
        'hide_empty' => false,
        'orderby'    => 'updated',
        'order'      => 'DESC',
      ]);
      foreach ($categories as $category) :
        $thumbnail_id = get_term_meta($category->term_id, 'thumbnail_id', true);
        $image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : get_template_directory_uri() . '/img/category.webp';
      ?>
        <div class="inline-flex flex-col justify-start items-start border border-gray-300 relative">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute top-2 left-2">
            <path d="M24 0H0V24L24 0Z" fill="white"/>
            </svg>
          <img class="w-80 h-48 object-cover" src="<?= esc_url($image_url) ?>" alt="<?= esc_attr($category->name) ?>" />
          <div class="self-stretch p-4 flex flex-col justify-start items-center gap-2 bg-gray-100">
            <div class="justify-start text-stone-900 text-base font-semibold leading-6"><?= esc_html($category->name) ?></div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="flex flex-col lg:flex-row justify-center items-center gap-4 mt-3">
        <a href="<?= site_url('/eco-products') ?>" class="btn btn-red px-16 py-2 inline-flex gap-2 justify-center items-center text-white bg-[#C00F0C]">  
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 21L16.65 16.65M19 11C19 15.4183 15.4183 19 11 19C6.58172 19 3 15.4183 3 11C3 6.58172 6.58172 3 11 3C15.4183 3 19 6.58172 19 11Z" stroke="var(--Icon-Default-Default, #fff)" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Find My Parts
        </a> 
        <a href="https://drive.google.com/drive/folders/1i8jxNW7VpNH_gCr4eWZLePr9v5cMeOz5?usp=drive_link" target="_blank" class="btn btn-red px-12 py-2 inline-flex gap-2 justify-center items-center text-white bg-[#C00F0C]">  
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M14 10V12.6667C14 13.0203 13.8595 13.3594 13.6095 13.6095C13.3594 13.8595 13.0203 14 12.6667 14H3.33333C2.97971 14 2.64057 13.8595 2.39052 13.6095C2.14048 13.3594 2 13.0203 2 12.6667V10M4.66667 6.66667L8 10M8 10L11.3333 6.66667M8 10V2" stroke="#F5F5F5" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Download Catalogue
        </a> 
    </div>
    
  </div>
</div>

<div class="w-full" style="background: linear-gradient(281.47deg, #871616 29.8%, #FF9191 96.73%);">
  <div class="container px-16 py-20 flex flex-col justify-center items-center gap-10">
        <div class="max-w-[1200px] grid lg:grid-cols-2 flex justify-start items-center bg-white">
            <img class="w-full h-full" src="<?= get_template_directory_uri() . '/img/section-info.webp' ?>" />
            <div class="w-full min-w-60 p-8 flex flex-col justify-center items-start gap-6 overflow-hidden">
                <div class="self-stretch flex flex-col justify-end items-center gap-4">
                <div class="self-stretch inline-flex justify-start items-start">
                    <div class="flex-1 text-center justify-start text-Text-Default-Default text-3xl font-semibold leading-10">Pasti Pas, Nggak Bikin Worry</div>
                </div>
                <div class="self-stretch text-center justify-start text-Text-Default-Default text-2xl font-normal leading-7">eco SafeGuard Warranty</div>
                <div class="w-full lg:w-[488px] text-center justify-center text-Text-Default-Default text-base font-normal leading-6">Dirancang dengan standar OEM dan teknologi terkini, produk eco dijamin pas di kendaraanmu dan tahan di segala kondisi.</div>
                </div>
                <div class="self-stretch text-white inline-flex flex-col lg:flex-row justify-start items-start gap-4">
                    <div class="w-full lg:w-56 p-3 bg-[#871616] inline-flex flex-col justify-center items-center gap-2 overflow-hidden">
                        <div class="justify-start text-Text-Brand-On-Brand text-base font-semibold leading-6">Rusak? FREE 2x Ganti*</div>
                        <div class="self-stretch text-center justify-start"><span class="text-Text-Brand-On-Brand text-base font-normal leading-6">Extra tenang dengan garansi FREE ganti 2pcs untuk produk rantai yang rusak akibat cacat produksi atau kegagalan material.<br/></span><span class="text-Text-Brand-On-Brand text-sm font-normal leading-5">*Berlaku untuk produk rantai</span></div>
                    </div>
                    <div class="flex-1 p-3 bg-[#871616] inline-flex flex-col justify-center items-center gap-2 overflow-hidden">
                        <div class="self-stretch text-center justify-start text-Text-Brand-On-Brand text-base font-semibold leading-6">100% Pasti Pas atau Tukar Gratis**</div>
                        <div class="self-stretch text-center justify-start"><span class="text-Text-Brand-On-Brand text-base font-normal leading-6">Semua produk kami dijamin memiliki presisi tinggi dan kompatibel untuk kendaraan kesayanganmu. <br/>Tidak pas? bebas ganti tanpa <br/>biaya tambahan.<br/></span><span class="text-Text-Brand-On-Brand text-sm font-normal leading-5">*Berlaku untuk produk rantai</span></div>
                    </div>
                </div>
            </div>
        </div>
  </div>
</div>

<div id="testimonial" class="w-full relative">  
  <div class="container px-16 py-20 flex flex-col justify-center items-center gap-10">
    <div class="text-center text-3xl font-semibold leading-10">Testimonials</div>

    <div class="grid lg:grid-cols-3 gap-3 lg:gap-6">
      <?php 
      foreach (range(1, 3) as $i) : 
      ?>
        <div class="w-96 inline-flex justify-center items-start gap-6 flex-wrap content-start">
            <div class="flex-1 min-w-60 p-6 bg-white outline outline-2 outline-offset-[-1px] outline-neutral-700 inline-flex flex-col justify-start items-start gap-6">
                <div class="size- inline-flex justify-start items-center gap-1">
                <div data-svg-wrapper>
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3333 2L12.9083 7.21667L18.6667 8.05833L14.5 12.1167L15.4833 17.85L10.3333 15.1417L5.18333 17.85L6.16667 12.1167L2 8.05833L7.75833 7.21667L10.3333 2Z" fill="url(#paint0_linear_755_832)"/>
                    <defs>
                    <linearGradient id="paint0_linear_755_832" x1="10.3333" y1="2" x2="10.3333" y2="17.85" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D9D9D9"/>
                    <stop offset="1" stop-color="#2C2C2C"/>
                    </linearGradient>
                    </defs>
                    </svg>
                </div>
                <div data-svg-wrapper>
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3333 2L12.9083 7.21667L18.6667 8.05833L14.5 12.1167L15.4833 17.85L10.3333 15.1417L5.18333 17.85L6.16667 12.1167L2 8.05833L7.75833 7.21667L10.3333 2Z" fill="url(#paint0_linear_755_834)"/>
                    <defs>
                    <linearGradient id="paint0_linear_755_834" x1="10.3333" y1="2" x2="10.3333" y2="17.85" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D9D9D9"/>
                    <stop offset="1" stop-color="#2C2C2C"/>
                    </linearGradient>
                    </defs>
                    </svg>
                </div>
                <div data-svg-wrapper>
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3333 2L12.9083 7.21667L18.6667 8.05833L14.5 12.1167L15.4833 17.85L10.3333 15.1417L5.18333 17.85L6.16667 12.1167L2 8.05833L7.75833 7.21667L10.3333 2Z" fill="url(#paint0_linear_755_836)"/>
                    <defs>
                    <linearGradient id="paint0_linear_755_836" x1="10.3333" y1="2" x2="10.3333" y2="17.85" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D9D9D9"/>
                    <stop offset="1" stop-color="#2C2C2C"/>
                    </linearGradient>
                    </defs>
                    </svg>
                </div>
                <div data-svg-wrapper>
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3333 2L12.9083 7.21667L18.6667 8.05833L14.5 12.1167L15.4833 17.85L10.3333 15.1417L5.18333 17.85L6.16667 12.1167L2 8.05833L7.75833 7.21667L10.3333 2Z" fill="url(#paint0_linear_755_838)"/>
                    <defs>
                    <linearGradient id="paint0_linear_755_838" x1="10.3333" y1="2" x2="10.3333" y2="17.85" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D9D9D9"/>
                    <stop offset="1" stop-color="#2C2C2C"/>
                    </linearGradient>
                    </defs>
                    </svg>
                </div>
                <div data-svg-wrapper>
                    <svg width="21" height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M10.3333 2L12.9083 7.21667L18.6667 8.05833L14.5 12.1167L15.4833 17.85L10.3333 15.1417L5.18333 17.85L6.16667 12.1167L2 8.05833L7.75833 7.21667L10.3333 2Z" fill="url(#paint0_linear_755_840)"/>
                    <defs>
                    <linearGradient id="paint0_linear_755_840" x1="10.3333" y1="2" x2="10.3333" y2="17.85" gradientUnits="userSpaceOnUse">
                    <stop stop-color="#D9D9D9"/>
                    <stop offset="1" stop-color="#2C2C2C"/>
                    </linearGradient>
                    </defs>
                    </svg>
                </div>
                </div>
                <div class="self-stretch flex flex-col justify-start items-start gap-1">
                <div class="self-stretch inline-flex justify-start items-start">
                    <div class="flex-1 justify-start text-stone-900 text-base font-normal leading-6">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                </div>
                </div>
                <div class="self-stretch inline-flex justify-start items-start gap-3">
                <img src="<?= get_template_directory_uri() . '/img/testimonial.webp' ?>" alt="testimonial" width="40" height="40" class="w-[40px] rounded-full">
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-0.5">
                    <div class="self-stretch justify-center text-neutral-500 text-base font-normal leading-6">Pak Joko </div>
                    <div class="self-stretch justify-center text-zinc-400 text-sm font-normal leading-5">Supir Pribadi</div>
                </div>
                </div>
            </div>
        </div>
      <?php endforeach; ?>
    </div> 
    
  </div>
</div>

<?php get_footer('eco'); ?>
