<?php 
$product = get_field('product');
$content = get_field('product_content');
?>

<div class="w-full bg-[#F5F5F5] lg:min-h-[703px] flex items-center">
  <div class="container !max-w-[1280px] px-16 py-8 lg:py-20 flex flex-col justify-center items-center gap-5 lg:gap-10">
        <div class="grid lg:grid-cols-[532px_520px] flex justify-start gap-4 lg:gap-[4.3rem]">
            <div class="overflow-y-auto aspect-[532/511] scrollbar">
              <div class="flex flex-col gap-2"> 
                <?php foreach($product['images'] as $image): ?>
                <img class="w-full h-full" src="<?= get_image_url($image) ?>" />
                <?php endforeach; ?>
              </div>
            </div>
            
            <div class="w-full inline-flex flex-col items-start gap-3 lg:gap-6">
              <div class="self-stretch flex flex-col justify-start items-start gap-2 lg:gap-4">
                <div class="self-stretch flex flex-col justify-start items-start gap-2 lg:gap-4">
                  <div class="self-stretch inline-flex justify-start items-start">
                    <div class="justify-start text-3xl lg:text-[64px] font-bold lg:leading-[76.80px]" style="<?= is_fscm() ? 'color: #1E1E1E' : 'color: #E20000;' ?>"><?= $product['headline'] ?></div>
                  </div>
                </div>
                <div class="self-stretch inline-flex justify-start items-start">
                  <div class="flex-1 justify-start text-Text-Default-Default text-base font-normal leading-6 lg:whitespace-pre-line"><?= $product['subheadline'] ?></div>
                </div>
              </div>
              
              <a href="https://wa.me/+6282257584400" target="_blank" class="btn <?= is_fscm() ? 'btn-black' : 'btn-red' ?> py-1.5 px-5 lg:my-0 my-6 w-full text-white flex justify-center items-center gap-2">
                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip0_760_1440)">
                  <path d="M10.0336 3.33366C10.6848 3.4607 11.2832 3.77916 11.7523 4.24828C12.2214 4.7174 12.5399 5.31584 12.6669 5.96699M10.0336 0.666992C11.3865 0.817283 12.648 1.42311 13.6111 2.385C14.5742 3.34689 15.1816 4.60767 15.3336 5.96032M14.6669 11.2803V13.2803C14.6677 13.466 14.6297 13.6498 14.5553 13.8199C14.4809 13.99 14.3718 14.1427 14.235 14.2682C14.0982 14.3938 13.9367 14.4893 13.7608 14.5488C13.5849 14.6083 13.3985 14.6304 13.2136 14.6137C11.1622 14.3908 9.19161 13.6898 7.46028 12.567C5.8495 11.5434 4.48384 10.1778 3.46028 8.56699C2.3336 6.82779 1.63244 4.84765 1.41361 2.78699C1.39695 2.60264 1.41886 2.41683 1.47795 2.24141C1.53703 2.06598 1.63199 1.90478 1.75679 1.76807C1.88159 1.63136 2.03348 1.52213 2.20281 1.44734C2.37213 1.37255 2.55517 1.33383 2.74028 1.33366H4.74028C5.06382 1.33047 5.37748 1.44504 5.62279 1.65601C5.8681 1.86698 6.02833 2.15996 6.07361 2.48033C6.15803 3.12037 6.31458 3.74881 6.54028 4.35366C6.62998 4.59227 6.64939 4.8516 6.59622 5.10091C6.54305 5.35022 6.41952 5.57907 6.24028 5.76033L5.39361 6.60699C6.34265 8.27602 7.72458 9.65795 9.39361 10.607L10.2403 9.76033C10.4215 9.58108 10.6504 9.45756 10.8997 9.40439C11.149 9.35122 11.4083 9.37063 11.6469 9.46032C12.2518 9.68602 12.8802 9.84258 13.5203 9.92699C13.8441 9.97268 14.1399 10.1358 14.3513 10.3853C14.5627 10.6348 14.6751 10.9534 14.6669 11.2803Z" stroke="#F5F5F5" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
                  </g>
                  <defs>
                  <clipPath id="clip0_760_1440">
                  <rect width="16" height="16" fill="white"/>
                  </clipPath>
                  </defs>
                  </svg>

                Hubungi Sales Representative Kami
              </a>

              <div class="border border-[#D9D9D9] bg-white">
                    <input type="checkbox" checked id="accordion-1" class="peer hidden accordion-checkbox">    
                    <label for="accordion-1" class="flex justify-between px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                        <div class="font-semibold">Spesifikasi Produk</div>
                        <div class="transition-transform duration-300 rotate-180 accordion-icon">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <div class="single-content max-h-0 px-4 text-[14px] leading-[1.6] peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-[700px] peer-checked:my-2"><?= $product['specification'] ?></div>
                </div>

            </div>

        </div>
  </div>
</div>

<div class="w-full relative max-h-[656px] overflow-auto scrollbar" id="content-wrapper"> 
  <div class="container !max-w-[1280px] px-16 py-8 lg:py-24 single-content flex flex-col gap-1"> 

  <?php foreach(array_values($content['items']) as $i => $item): if($item['title']): ?>
  <div class="w-full">
    <input type="checkbox" <?= $i === 0 ? 'checked' : ''?> id="content-<?= $i + 1 ?>" class="peer hidden accordion-checkbox">    
    <label for="content-<?= $i + 1 ?>" class="content-item-label flex justify-between text-lg lg:text-[24px] px-4 py-2 items-center cursor-pointer" style="<?= is_fscm() ? 'background: #D9D9D9' : 'background: #FF9191' ?>">
        <div><?= $item['title'] ?></div>
        <div class="transition-transform duration-300 rotate-180 accordion-icon">
            <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </div>
    </label>
    <div class="max-h-0 px-2 lg:px-4 overflow-hidden transition-all duration-300 peer-checked:max-h-[200vh] peer-checked:my-3 content-item-content"><?= $item['content'] ?></div>
  </div>
  <?php endif; endforeach; ?>

  <script>
    const contentWrapper = document.getElementById('content-wrapper');
    document.querySelectorAll('.content-item-label').forEach(label => {
      label.addEventListener('click', () => {  
        contentWrapper.scrollIntoView({
          behavior: 'smooth',
          block: 'center'
        });
      });
    });
  </script>

  </div>
</div>

<div class="w-full relative bg-[#F5F5F5] flex items-center lg:min-h-[751px]"> 
  <div class="container !max-w-[1280px] px-16 py-8 lg:py-20 flex flex-col justify-center items-center gap-5 lg:gap-12"> 

    <div class="text-center text-xl lg:text-3xl font-semibold leading-10">Lihat Produk Lainnya</div>

    <div class="grid grid-cols-2 lg:grid-cols-4 w-full gap-3 lg:gap-6">
      <?php
      $products = get_posts([
        'post_type'      => is_fscm() ? 'fscm-product' : 'eco-product',
        'posts_per_page' => 4,
        'orderby'        => 'updated',
        'order'          => 'DESC',
        'post__not_in'   => [get_the_ID()],
      ]);
      foreach ($products as $product) : ?>
        <?php get_template_part('sections/section', 'product-item', ['product' => $product, 'aspect' => 'aspect-ratio: 276/247;']) ?>
      <?php endforeach; ?>
    </div>

    <div class="flex justify-center items-center gap-4">
        <a href="<?= site_url(is_fscm() ? '/fscm-products' : '/eco-products') ?>" class="btn <?= is_fscm() ? 'btn-black' : 'btn-red' ?> px-24 py-2 inline-flex gap-2 justify-center items-center text-[20px]">  
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M14 14L11.1 11.1M12.6667 7.33333C12.6667 10.2789 10.2789 12.6667 7.33333 12.6667C4.38781 12.6667 2 10.2789 2 7.33333C2 4.38781 4.38781 2 7.33333 2C10.2789 2 12.6667 4.38781 12.6667 7.33333Z" stroke="#EBFFEE" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>

            Find My Parts
        </a>  
    </div>
    
  </div>
</div> 