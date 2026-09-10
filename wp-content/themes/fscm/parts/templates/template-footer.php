<?php 
    $footer = $args['footer'];
?>
<footer class="relative w-full pt-24 pb-32 lg:min-h-[436px]" style="background: url('<?= get_template_directory_uri() . '/img/bg-footer.webp' ?>'); background-size: cover; background-position: center;">
    <?php if(is_eco()): ?> 
    <div style="background: linear-gradient(84.13deg, #871616 3.39%, rgba(226, 0, 0, 0.25) 102.35%);" class="absolute left-0 top-0 w-full h-full"></div>
    <?php else: ?>
    <div style="background: linear-gradient(84.13deg, #1E1E1E 3.39%, rgba(30, 30, 30, 0.5) 102.35%);" class="absolute left-0 top-0 w-full h-full"></div>
    <?php endif; ?>
    <div class="container flex flex-wrap gap-14 max-sm:flex-col max-sm:items-center max-sm:text-center relative z-2">
        <div class="w-full max-w-[260px] flex flex-col gap-5 max-sm:max-w-full">
            <?php if(isset($footer['logo'])): ?>
            <img class="h-[40px] max-sm:mx-auto" height="40" width="108" src="<?= get_image_url($footer['logo']) ?>" />
            <?php endif; ?>
            <?php if(isset($footer['description'])): ?>
            <div class="text-[#F3F3F3] text-[14px] max-sm:text-[13px] lg:whitespace-pre-line leading-[1.6]"><?= get_image_url($footer['description']) ?></div>
            <?php endif; ?>
        </div>

        <div class="text-[#F3F3F3] w-full max-w-[262px] flex flex-col gap-5 max-sm:max-w-full">
            <div class="flex items-center gap-4 max-sm:justify-center">
                <?php if(isset($footer['social_media'])): ?>
                    <?php foreach($footer['social_media'] as $key => $social): ?>
                    <a href="<?= $social['link'] ?? '#' ?>">
                        <img class="h-[24px]" alt="<?= $key ?>" height="24" width="24" src="<?= get_image_url($social['icon']) ?>" />
                    </a>
                    <?php endforeach; ?> 
                <?php endif; ?>
            </div>
            <div class="text-[14px] lg:whitespace-pre-line max-sm:text-[13px] leading-[1.6]"><?= isset($footer['address']) ? $footer['address'] : ''?></div>
            <div class="text-[14px] max-sm:text-[13px] leading-[1.6]">
                <?php if(isset($footer['email'])): ?><a href="<?= $footer['email']['link'] ?? '#' ?>" target="_blank" class="hover:underline hover:!text-[#F3F3F3]"><?= $footer['email']['label'] ?? '' ?></a><?php endif; ?><br>
                <?php if(isset($footer['email'])): ?><a href="<?= $footer['phone']['link'] ?? '#' ?>" target="_blank" class="hover:underline hover:!text-[#F3F3F3]"><?= $footer['phone']['label'] ?? '' ?></a></div><?php endif; ?>
            </div>
    </div>
</footer>