<?php 

/*
 * Template Name: Homepage
*/ 
?>

<?php get_header(); ?>

<?php get_template_part('sections/section', 'hero', [ 
  'title' => 'Partner in Every Journey',
  'description' => 'Your Genuine Partner in Innovation and Reliability for Smarter, Sustainable Journeys',
  'call_to_action' => [
      'title' => 'Our Brands',
      'url' => '#about',
  ], 
]); ?>

<?php get_template_part('sections/section', 'short-about'); ?>

<div class="w-full">
  <div class="container py-10 lg:py-20 flex flex-col justify-center text-center items-center gap-5">
    <div class="text-2xl lg:text-[32px] font-semibold leading-8 lg:leading-10">Our Clients</div>
    <div class="text-lg lg:text-[24px] mb-4 lg:mb-8">Supplying precision parts to top automotive brands for over 40 years</div>
    <div class="w-full overflow-hidden relative">
      <div id="clients-marquee" class="flex gap-6 lg:gap-14 whitespace-nowrap will-change-transform">
        <!-- Original set -->
        <div class="w-32 lg:w-40 flex-shrink-0">
          <img class="w-full h-full object-contain" src="<?= get_template_directory_uri() . '/img/honda.webp' ?>" />
        </div>
        <div class="w-32 lg:w-40 flex-shrink-0">
          <img class="w-full h-full object-contain" src="<?= get_template_directory_uri() . '/img/yamaha.webp' ?>" />
        </div>
        <div class="w-32 lg:w-40 flex-shrink-0">
          <img class="w-full h-full object-contain" src="<?= get_template_directory_uri() . '/img/kawasaki.webp' ?>" />
        </div>
        <div class="w-32 lg:w-40 flex-shrink-0">
          <img class="w-full h-full object-contain" src="<?= get_template_directory_uri() . '/img/suzuki.webp' ?>" />
        </div>
        <div class="w-32 lg:w-40 flex-shrink-0">
          <img class="w-full h-full object-contain" src="<?= get_template_directory_uri() . '/img/daihatsu.webp' ?>" />
        </div>
        <!-- Duplicate set for seamless loop -->
        <div class="w-32 lg:w-40 flex-shrink-0">
          <img class="w-full h-full object-contain" src="<?= get_template_directory_uri() . '/img/honda.webp' ?>" />
        </div>
        <div class="w-32 lg:w-40 flex-shrink-0">
          <img class="w-full h-full object-contain" src="<?= get_template_directory_uri() . '/img/yamaha.webp' ?>" />
        </div>
        <div class="w-32 lg:w-40 flex-shrink-0">
          <img class="w-full h-full object-contain" src="<?= get_template_directory_uri() . '/img/kawasaki.webp' ?>" />
        </div>
        <div class="w-32 lg:w-40 flex-shrink-0">
          <img class="w-full h-full object-contain" src="<?= get_template_directory_uri() . '/img/suzuki.webp' ?>" />
        </div>
        <div class="w-32 lg:w-40 flex-shrink-0">
          <img class="w-full h-full object-contain" src="<?= get_template_directory_uri() . '/img/daihatsu.webp' ?>" />
        </div>
      </div>
      <script>
        (function(){
          const marquee = document.getElementById('clients-marquee');
          if (!marquee) return;
          let scrollAmount = 0;
          const speed = 0.5; // pixels per frame
          function animateMarquee() {
            scrollAmount -= speed;
            // Reset position when first set is fully scrolled
            if (Math.abs(scrollAmount) >= marquee.scrollWidth / 2) {
              scrollAmount = 0;
            }
            marquee.style.transform = `translateX(${scrollAmount}px)`;
            requestAnimationFrame(animateMarquee);
          }
          animateMarquee();
        })();
      </script>
    </div>
  </div>
</div>

<?php get_template_part('sections/section', name: 'brand-about'); ?>

<?php get_footer(); ?>
