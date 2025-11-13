<?php 
  $template = get_current_template_name();

  $backgroundColor = 'background: linear-gradient(180deg, rgba(30, 30, 30, 0.81) 54.33%, rgba(117, 117, 117, 0.081) 100%);';
  $btnClass = 'btn-white';

  if($template && explode(' ', $template)[0] === 'ECO' || get_post_type() == 'eco-product'){
    $backgroundColor = 'background: linear-gradient(180deg, rgba(135, 22, 22, 0.81) 0%, rgba(255, 145, 145, 0.81) 100%);';
    $btnClass = 'btn-white-hover-red';
  }
?>

<!-- Hero Banner Container -->
<div class="hero-slider relative w-full h-[560px] lg:h-[560px] overflow-hidden">
  <!-- Slides Wrapper -->
  <div class="hero-slides flex transition-transform duration-700 ease-in-out" data-current="0">
    <?php
      // Prepare slides data (example: 5 slides)
      $hero = get_field('hero');
      $slides = is_array($hero) ? array_filter(array_values($hero), fn($slide) => $slide['title']) : [];

    if($slides && is_array($slides)): foreach (array_values($slides) as $index => $slide):
    ?>
      <div class="hero-slide relative w-full flex-shrink-0 h-[560px] lg:h-[560px] flex items-center justify-center"
           style="background: url('<?= is_numeric($slide['bg']) ? wp_get_attachment_url($slide['bg']) : $slide['bg'] ?>'); background-size: cover; background-position: center; background-repeat: no-repeat;">
           <div class="absolute left-0 top-0 w-full h-full" style="<?= $backgroundColor ?>"></div>
        <div class="container flex items-center justify-center text-center flex-col gap-4 lg:gap-7 px-4 relative z-2">
          <h2 class="text-white text-[40px] lg:text-[64px] font-bold leading-tight lg:leading-none lg:whitespace-pre-line"><?= $slide['title'] ?></h2>
          <p class="text-white text-[24px] mx-auto font-light tracking-[0.8px] lg:text-[40px] leading-[1.4] lg:leading-[1.3] lg:whitespace-pre-line"><?= $slide['description'] ?></p>
          <a href="<?= $slide['cta']['url'] ?? '#' ?>" target="<?= $slide['cta']['target'] ?? '_self' ?>" class="btn <?= $btnClass ?> mt-5 lg:mt-7 btn-primary text-[18px] lg:text-[24px] px-4 py-2 lg:px-7 lg:py-2 inline-flex gap-2 justify-center items-center bg-white border-[#767676]">
            <?= trim($slide['cta_icon']) ? $slide['cta_icon'] : '<span class="animate-bounce -mb-2"><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M12 5V19M12 19L19 12M12 19L5 12" stroke="#1E1E1E" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></span>' ?>
            <?= $slide['cta']['title'] ?? '' ?>
          </a>
        </div>
      </div>
    <?php endforeach; endif; ?>
  </div>

  <!-- Navigation Dots -->
  <?php if(count($slides) > 1): ?>
  <div class="hero-dots absolute bottom-4 left-1/2 transform -translate-x-1/2 flex gap-2">
    <?php for ($i = 0; $i < count($slides); $i++): ?>
      <button class="hero-dot w-3 h-3 rounded-full bg-white/50 hover:bg-white transition" data-slide="<?= $i ?>"></button>
    <?php endfor; ?>
  </div>
  <?php endif; ?>

  <!-- Optional Arrows -->
  <!-- <button class="hero-prev absolute left-4 top-1/2 -translate-y-1/2 text-white hover:text-gray-300 transition">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" /></svg>
  </button>
  <button class="hero-next absolute right-4 top-1/2 -translate-y-1/2 text-white hover:text-gray-300 transition">
    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" /></svg>
  </button> -->
</div>

<script>
(function(){
  const slider = document.querySelector('.hero-slider');
  if (!slider) return;
  const slidesWrapper = slider.querySelector('.hero-slides');
  const slides = slider.querySelectorAll('.hero-slide');
  const dots = slider.querySelectorAll('.hero-dot');
  const prevBtn = slider.querySelector('.hero-prev');
  const nextBtn = slider.querySelector('.hero-next');
  let current = 0;
  let interval;

  dots.forEach((dot, index) => {
    dot.addEventListener('click', () => {
      stopAutoplay();
      goToSlide(index);
      startAutoplay();
    });
  })

  function goToSlide(index) {
    current = (index + slides.length) % slides.length;
    slidesWrapper.style.transform = `translateX(-${current * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle('bg-white', i === current));
    dots.forEach((d, i) => d.classList.toggle('bg-white/50', i !== current));
  }
  function nextSlide() { goToSlide(current + 1); }
  function prevSlide() { goToSlide(current - 1); }
  function startAutoplay() {
    if (interval) clearInterval(interval);
    interval = setInterval(nextSlide, 5000);
  }
  function stopAutoplay() { clearInterval(interval); }
  // ... existing code ...
  nextBtn?.addEventListener('click', () => { stopAutoplay(); nextSlide(); startAutoplay(); });
  prevBtn?.addEventListener('click', () => { stopAutoplay(); prevSlide(); startAutoplay(); });

  // Pause on hover over navigation buttons
  nextBtn?.addEventListener('mouseenter', stopAutoplay);
  nextBtn?.addEventListener('mouseleave', startAutoplay);
  prevBtn?.addEventListener('mouseenter', stopAutoplay);
  prevBtn?.addEventListener('mouseleave', startAutoplay);
  // ... existing code ...

  // Touch/swipe support
  let touchStartX = 0;
  slidesWrapper.addEventListener('touchstart', e => touchStartX = e.changedTouches[0].screenX);
  slidesWrapper.addEventListener('touchend', e => {
    const diff = e.changedTouches[0].screenX - touchStartX;
    if (Math.abs(diff) > 50) {
      stopAutoplay();
      diff > 0 ? prevSlide() : nextSlide();
      startAutoplay();
    }
  });

  goToSlide(0);
  startAutoplay();
})();
</script>