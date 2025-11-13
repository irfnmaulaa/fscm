<?php $section = get_field('about_2_products') ?>
<?php if($section): ?>
<div id="brand-about" class="w-full bg-[#E6E6E6]">
  <div class="container py-10 lg:py-20 flex flex-col justify-center text-center items-center gap-5">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10">
      <?php 
        $left = $section['product_1'];
        $right = $section['product_2'];
      ?>

      <?php if($left): ?>
      <div class="relative group">
        <img class="w-full" src="<?= get_image_url($left['background_image']) ?>" />
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-3 lg:gap-5 opacity-0 group-hover:opacity-0 lg:opacity-100 transition-all duration-300 ease-in-out">
          <img class="h-10 lg:h-[48px]" height="48" src="<?= get_image_url($left['logo']) ?>" />
        </div>
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-3 lg:gap-5 group-hover:opacity-100 lg:opacity-0 bg-[#1E1E1E80] transition-all duration-300 ease-in-out">
          <div class="text-xl lg:text-[32px] font-semibold leading-7 lg:leading-10 text-white"><?= $left['title'] ?></div>
          <div class="text-base lg:text-[18px] xl:text-[24px] text-white w-full max-w-[460px] px-4 leading-[1.4]"><?= $left['description'] ?></div>

          <a href="<?= $left['cta']['url'] ?>" class="btn btn-black px-4 py-2 inline-flex gap-2 justify-center items-center text-white bg-[#2C2C2C]">  
            <?= $left['cta']['title'] ?? 'Temukan Sparepart FSCM' ?>
          </a>
        </div>
      </div>
      <?php endif; ?>

      <?php if($right): ?>
      <div class="relative group">
        <img class="w-full" src="<?= get_image_url($right['background_image']) ?>" />
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-3 lg:gap-5 opacity-0 group-hover:opacity-0 lg:opacity-100 transition-all duration-300 ease-in-out">
          <img class="h-10 md:text-medium lg:h-[48px]" src="<?= get_image_url($right['logo']) ?>" />
        </div>
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-3 lg:gap-5 group-hover:opacity-100 lg:opacity-0 bg-[#E20000CC] transition-all duration-300 ease-in-out">
          <div class="text-xl lg:text-[32px] font-semibold leading-7 lg:leading-10 text-white"><?= $right['title'] ?></div>
          <div class="text-base lg:text-[18px] xl:text-[24px] text-white w-full max-w-[440px] px-4 leading-[1.4]"><?= $right['description'] ?></div>
          <a href="<?= $right['cta']['url'] ?>" class="btn btn-black px-4 py-2 inline-flex gap-2 justify-center items-center text-white bg-[#2C2C2C]">  
            <?= $right['cta']['title'] ?? 'Temukan Sparepart ECO' ?>
          </a>
        </div>
      </div>
      <?php endif; ?>

    </div>
  </div>
</div>
<?php endif; ?>