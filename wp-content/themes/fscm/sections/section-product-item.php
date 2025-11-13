<?php 
$aspect = $args['aspect'] ?? 'aspect-ratio: 287/247;';
$thumbnail_id = get_post_thumbnail_id($args['product']->ID);
$image_url = $thumbnail_id ? wp_get_attachment_url($thumbnail_id) : get_template_directory_uri() . '/img/category.webp';
$field = get_field('product', $args['product']->ID)

?>
<div class="inline-flex flex-col justify-start items-start border border-gray-300 relative group"> 
    <a href="<?= get_permalink($args['product']->ID) ?>" class="w-full overflow-hidden relative z-1" style="<?= $aspect ?>">
        <img class="w-full h-full group-hover:scale-[1.15] transition-all group-hover:rotate-[-3deg] duration-400 object-cover" src="<?= esc_url($image_url) ?>" alt="<?= esc_attr($args['product']->post_title) ?>" />
    </a>
    
    <div class="self-stretch p-2 lg:p-4 lg:px-6 gap-2 flex flex-col gap-2 bg-white">
    <a href="<?= get_permalink($args['product']->ID) ?>" class="justify-start text-base font-semibold leading-6 hover:underline"><?= $field['headline'] ?? $args['product']->post_title ?></a>
    <div class="line-clamp-3 text-sm lg:text-medium lg:leading-[24px]"><?= $field['subheadline'] ?></div>
    </div>

    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="absolute w-[16px] h-[16px] lg:w-[24px] lg:h-[24px] lg:top-2 lg:left-2 top-1 left-1 z-5">
    <path d="M24 0H0V24L24 0Z" fill="white"/>
    </svg>
</div>