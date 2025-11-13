
<?php 

$backgroundColor = 'background: linear-gradient(281.47deg, #2C2C2C 29.8%, #929292 96.73%);';
$itemBg = 'background: #2C2C2C';

if(is_eco()) {
    $backgroundColor = 'background: linear-gradient(281.47deg, #871616 29.8%, #FF9191 96.73%);';
    $itemBg = 'background: #871616;';
}

?>

<?php $section = get_field('features') ?>
<?php if($section): ?>
<div id="features" class="w-full flex items-center lg:min-h-[622px]" style="<?= $backgroundColor ?>">
  <div class="container !max-w-[1320px] px-16 py-8 lg:py-20 flex flex-col justify-center items-center gap-10">
        <div class="grid lg:grid-cols-2 flex justify-start items-center bg-white">
            <img class="w-full h-full" src="<?= get_image_url($section['image']) ?>" />
            <div class="w-full min-w-60 p-4 lg:p-8 flex flex-col justify-center items-start gap-6 overflow-hidden">
                <div class="self-stretch flex flex-col justify-end items-center gap-2 lg:gap-4">
                <div class="self-stretch inline-flex justify-start items-start">
                    <div class="flex-1 text-center justify-start text-Text-Default-Default text-xl lg:text-3xl font-semibold leading-10"><?= $section['title'] ?></div>
                </div>
                <div class="self-stretch text-center justify-start text-Text-Default-Default text-lg lg:text-2xl font-normal leading-7"><?= $section['subtitle'] ?></div>
                <div class="w-full lg:w-[488px] text-center justify-center text-Text-Default-Default text-base font-normal leading-6"><?= $section['description'] ?></div>
                </div>
                <div class="self-stretch text-[#F5F5F5] inline-flex flex-col lg:flex-row justify-start items-start gap-4">
                    <?php if($item = $section['left']): ?>
                    <div class="w-full lg:w-56 p-4 inline-flex flex-col justify-center items-center gap-2 overflow-hidden" style="<?= $itemBg ?>">
                        <div class="justify-start text-normal font-semibold leading-6"><?= $item['title'] ?></div>
                        <div class="self-stretch text-center justify-start text-normal font-light leading-6 lg:whitespace-pre-line"><?= $item['description'] ?></div>
                        <div class= text-xs font-light leading-5"><?= $item['additional_info'] ?></div>
                    </div>
                    <?php endif; ?>
                    <?php if($item = $section['right']): ?>
                    <div class="flex-1 p-4 inline-flex flex-col justify-center items-center gap-2 overflow-hidden" style="<?= $itemBg ?>">
                        <div class="self-stretch text-center justify-start text-normal font-semibold leading-6"><?= $item['title'] ?></div>
                        <div class="self-stretch text-center justify-start text-normal font-light leading-6 lg:whitespace-pre-line"><?= $item['description'] ?></div>
                        <div class= text-xs font-light leading-5"><?= $item['additional_info'] ?></div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
  </div>
</div>
<?php endif; ?>