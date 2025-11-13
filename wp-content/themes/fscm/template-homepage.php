<?php 

/*
 * Template Name: Homepage
*/ 
?>

<?php get_header(); ?>

<?php get_template_part('sections/section', 'hero'); ?>

<?php get_template_part('sections/section', 'short-about'); ?>

<?php if($section = get_field('our_clients')): ?>
<div class="w-full">
  <div class="container py-10 lg:py-20 flex flex-col justify-center text-center items-center gap-5">
    <div class="text-2xl lg:text-[32px] font-semibold leading-8 lg:leading-10"><?= $section['title'] ?></div>
    <div class="text-lg lg:text-[24px] mb-4 lg:mb-8"><?= $section['subtitle'] ?></div>
    <div class="w-full overflow-hidden relative">
      <div id="clients-marquee" class="flex gap-6 lg:gap-14 whitespace-nowrap will-change-transform">
        <!-- Original set -->
        <?php foreach(array_values($section['items']) as $item): ?>
          <?php if($item['logo']): ?>
          <div class="w-32 lg:w-40 flex-shrink-0">
            <img class="w-full h-full object-contain" src="<?= get_image_url($item['logo']) ?>" alt="<?= $item['name'] ?>"/>
          </div>
          <?php endif;?>
        <?php endforeach; ?> 
        <?php foreach(array_values($section['items']) as $item): ?>
          <?php if($item['logo']): ?>
          <div class="w-32 lg:w-40 flex-shrink-0">
            <img class="w-full h-full object-contain" src="<?= get_image_url($item['logo']) ?>" alt="<?= $item['name'] ?>"/>
          </div>
          <?php endif;?>
        <?php endforeach; ?>
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
<?php endif; ?>

<?php get_template_part('sections/section', name: 'brand-about'); ?>

<?php get_footer(); ?>
