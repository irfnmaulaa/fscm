<?php $section = get_field('testimonial') ?>
<?php if($section): ?>
<div id="testimonial" class="w-full relative flex items-center lg:min-h-[582px]">
    
<?php if(is_fscm()): ?>
  <div class="w-[100px] md:w-[150px] lg:w-[200px] aspect-[1/1] absolute right-0 bottom-0" style="background: linear-gradient(180deg, #FF9191 -5.01%, #E20000 107.14%); clip-path: polygon(100% 0, 0% 100%, 100% 100%);"></div>
<?php endif;?>

  <div class="container !max-w-[1280px] py-8 lg:py-20 flex flex-col justify-center items-center gap-5 lg:gap-12">
    <div class="text-center text-[32px] font-semibold leading-10"><?= $section['title'] ?></div>

    <div class="grid lg:grid-cols-3 gap-3 lg:gap-8">
      <?php 
      foreach (array_values($section['items']) as $item) : 
      ?>
        <div class="inline-flex justify-center items-start gap-6 flex-wrap content-start">
            <div class="flex-1 p-[2px]" style="background: linear-gradient(305.49deg, #434343 0%, #D9D9D9 55.77%, #737373 100%);">
                <div class="w-full h-full bg-white p-6 inline-flex flex-col justify-start items-start gap-6">
                    <div class="size- inline-flex justify-start items-center gap-1">
                        <?php foreach(range(1, $item['rating'] ?? 5) as $i): ?>  
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
                        <?php endforeach; ?> 
                    </div>
                    <div class="self-stretch flex flex-col justify-start items-start gap-1">
                    <div class="self-stretch inline-flex justify-start items-start">
                        <div class="flex-1 justify-start text-stone-900 text-base font-normal leading-6"><?= $item['comment'] ?></div>
                    </div>
                    </div>
                    <div class="self-stretch inline-flex justify-start items-start gap-3">
                    <img src="<?= get_image_url($item['user_photo']) ?>" alt="testimonial" width="40" height="40" class="w-[40px] rounded-full">
                    <div class="flex-1 inline-flex flex-col justify-start items-start gap-0.5">
                        <div class="self-stretch justify-center text-neutral-500 text-base font-light italic leading-6"><?= $item['user_name'] ?></div>
                        <div class="self-stretch justify-center text-zinc-400 text-sm font-light leading-5"><?= $item['user_role'] ?></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
      <?php endforeach; ?>
    </div> 
    
  </div>
</div>
<?php endif; ?>