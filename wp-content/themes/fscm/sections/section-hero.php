<div class="hero w-full h-[560px] lg:h-[560px]" style="background: url('<?= get_template_directory_uri() . '/img/hero.webp' ?>'), linear-gradient(180deg, rgba(30, 30, 30, 0.81) 54.33%, rgba(117, 117, 117, 0.081) 100%); background-size: cover; background-position: center; background-repeat: no-repeat; background-blend-mode: multiply;">
  <div class="container !max-w-[882px] flex items-center justify-center text-center flex-col gap-3 px-4">
    <h2 class="text-white text-[40px] lg:text-[64px] font-bold leading-tight lg:leading-none"><?= $args['title'] ?? 'Partner in Every Journey' ?></h2>
    <p class="text-white text-[24px] lg:text-[40px] leading-[1.4] lg:leading-[1.3]"><?= $args['description'] ?? 'Your Genuine Partner in Innovation and Reliability for Smarter, Sustainable Journeys' ?></p>
    <a href="<?= $args['call_to_action']['url'] ?? '#about' ?>" class="btn mt-5 lg:mt-7 btn-primary text-[18px] lg:text-[24px] font-bold px-4 py-2 lg:px-5 lg:py-2 inline-flex gap-2 justify-center items-center bg-white border-[#767676]">
        <?= $args['cta_icon'] ?? '<span class="animate-bounce -mb-2"> <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M12 5V19M12 19L19 12M12 19L5 12" stroke="#1E1E1E" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
        </svg></span>' ?>  
      <?= $args['call_to_action']['title'] ?? 'Our Brands' ?>
    </a>
  </div> 
</div>