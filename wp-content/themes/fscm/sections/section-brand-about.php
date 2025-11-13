<div id="brand-about" class="w-full bg-[#E6E6E6]">
  <div class="container py-10 lg:py-20 flex flex-col justify-center text-center items-center gap-5">
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 lg:gap-10">
      <div class="relative group">
        <img class="w-full" src="<?= get_template_directory_uri() . '/img/bg-card-fscm.webp' ?>" />
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-3 lg:gap-5 opacity-0 group-hover:opacity-0 lg:opacity-100 transition-all duration-300 ease-in-out">
          <img class="h-10 lg:h-[48px]" height="48" width="190" src="<?= get_template_directory_uri() . '/img/logo-card-fscm.webp' ?>" />
        </div>
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-3 lg:gap-5 group-hover:opacity-100 lg:opacity-0 bg-[#1E1E1E80] transition-all duration-300 ease-in-out">
          <div class="text-xl lg:text-[32px] font-semibold leading-7 lg:leading-10 text-white">FSCM</div>
          <div class="text-base lg:text-[18px] xl:text-[24px] text-white w-full max-w-[460px] px-4 leading-[1.4]">Hadir dengan berbagai lineup sparepart berkualitas dan standar setara Original / Genuine, FSCM siap membawamu melaju lebih jauh tanpa kompromi.</div>
          <a href="<?= site_url('/fscm') ?>" class="btn btn-black px-4 py-2 inline-flex gap-2 justify-center items-center text-white bg-[#2C2C2C]">  
            Temukan Sparepart FSCM
          </a>
        </div>
      </div>
      <div class="relative group">
        <img class="w-full" src="<?= get_template_directory_uri() . '/img/bg-card-eco.webp' ?>" />
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-3 lg:gap-5 opacity-0 group-hover:opacity-0 lg:opacity-100 transition-all duration-300 ease-in-out">
          <img class="h-10 md:text-medium lg:h-[48px]" height="48" width="190" src="<?= get_template_directory_uri() . '/img/logo-card-eco.webp' ?>" />
        </div>
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-3 lg:gap-5 group-hover:opacity-100 lg:opacity-0 bg-[#E20000CC] transition-all duration-300 ease-in-out">
          <div class="text-xl lg:text-[32px] font-semibold leading-7 lg:leading-10 text-white">ECO</div>
          <div class="text-base lg:text-[18px] xl:text-[24px] text-white w-full max-w-[440px] px-4 leading-[1.4]">Hadir buat kamu yang cari suku cadang bagus dengan harga lebih ekonomis. Cocok buat perawatan harian tanpa bikin kantong jebol.</div>
          <a href="<?= site_url('/eco') ?>" class="btn btn-black px-4 py-2 inline-flex gap-2 justify-center items-center text-white bg-[#2C2C2C]">  
            Temukan Sparepart ECO
          </a>
        </div>
      </div>
    </div>
  </div>
</div>