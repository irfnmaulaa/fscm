<?php 

$template = get_current_template_name();
$background = 'background: #2C2C2C';

if($template && explode(' ', $template)[0] === 'FSCM' || get_post_type() == 'fscm-product') {
  $background = 'background: linear-gradient(90deg, #2C2C2C 0%, #929292 100%);';
} else if($template && explode(' ', $template)[0] === 'ECO' || get_post_type() == 'eco-product') {
  $background = 'background: linear-gradient(90deg, #C00F0C 0%, #FF9191 100%);';
}

?>

<?php $section = get_field('short_about') ?>
<?php if($section): ?>
<div class="w-full flex flex-col items-center lg:min-h-[419px]" style="<?= $background; ?>" id="about">
  <?php if(is_fscm()): ?>
    <div class="w-full h-4" style="background: linear-gradient(90deg, #FF9191 0%, #E20000 29.81%, #FF9191 76.44%, #FFFFFF 99.52%);"></div> 
  <?php elseif(is_eco()): ?>
    <div class="w-full h-4" style="background: linear-gradient(90deg, #FF9191 0%, #871616 29.81%, #C00F0C 76.44%, #FFFFFF 99.52%);"></div> 
  <?php else: ?>
    <div class="w-full h-4" style="background: linear-gradient(90deg, #FF9191 0%, #E20000 29.81%, #FF9191 76.44%, #FFFFFF 99.52%);"></div> 
  <?php endif; ?>

  <div class="container !max-w-[1400px] w-full py-10 lg:py-20 flex flex-col justify-center items-center gap-6 lg:gap-12">
    <div class="text-center text-white -mt-4 text-2xl lg:text-[32px] font-medium leading-8 lg:leading-10"><?= $section['title'] ?></div>
    <div class="grid w-full grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-6 mb-4">
      <?php foreach(array_values($section['items']) as $item): ?>
        <div class="p-4 lg:p-6 bg-white flex flex-col justify-start items-start gap-3 lg:gap-4">
          <div class="w-full lg:w-48 justify-start items-start">
            <?php if($item['image']): ?> 
            <img class="w-40 lg:w-56 h-8 lg:h-12" src="<?php echo get_image_url($item['image'])  ?>" alt="<?= $item['title'] ?? 'image' ?>" />
            <?php else: ?>
            <div class="flex-1 justify-start font-black text-2xl lg:text-[40px] leading-8 whitespace-nowrap lg:leading-[48px]"><?= $item['title'] ?></div>
            <?php endif; ?>
          </div>
          <div class="self-stretch flex justify-start items-start gap-2 lg:gap-3">
            <div class="flex-1 flex flex-col justify-start items-start gap-0.5">
              <div class="self-stretch justify-center text-[#757575] text-sm lg:text-base font-semibold leading-5 lg:leading-6"><?= $item['subtitle'] ?></div>
            </div>
          </div>
        </div>
      <?php endforeach; ?> 
    </div>
  </div> 
</div>
<?php endif; ?>