<?php 

/*
 * Template Name: About
*/
?>

<?php get_header(); ?>


<?php get_template_part('sections/section', 'hero'); ?>

<?php get_template_part('sections/section', 'short-about'); ?>

<div class="w-full lg:min-h-[680px] flex items-center">
    <div class="container px-16 py-8 lg:py-20 !max-w-[1200px] grid lg:grid-cols-[520fr_576fr] gap-6">
        <div class="flex flex-col gap-6">
            <?php if($section = get_field('visi')): ?>
                <div class="w-full p-[2px]" style="background: linear-gradient(305.49deg, #434343 0%, #D9D9D9 55.77%, #737373 100%);">
                    <div class="w-full p-6 bg-white inline-flex justify-start items-start gap-6 flex-wrap content-start">
                        <div class="flex-1 inline-flex flex-col justify-start items-start gap-4">
                            <div class="self-stretch justify-start text-stone-900 text-3xl font-semibold leading-10"><?= $section['title'] ?></div>
                            <div class="self-stretch justify-start text-stone-900 text-base font-semibold leading-6"><?= $section['description'] ?></div>
                        </div>
                    </div>
                </div> 
            <?php endif; ?> 
            <?php if($section = get_field('misi')): ?>
                <div class="w-full p-[2px]" style="background: linear-gradient(305.49deg, #434343 0%, #D9D9D9 55.77%, #737373 100%);">
                    <div class="w-full p-6 bg-white inline-flex justify-start items-start gap-6 flex-wrap content-start">
                        <div class="flex-1 inline-flex flex-col justify-start items-start gap-4">
                            <div class="self-stretch justify-start text-stone-900 text-3xl font-semibold leading-10"><?= $section['title'] ?></div>
                            <div><?= $section['description'] ?></div>
                        </div>
                    </div>
                </div>  
            <?php endif; ?> 
        </div>
        <div>
            <?php if($section = get_field('history')): ?>
                <div class="w-full p-[2px]" style="background: linear-gradient(305.49deg, #434343 0%, #D9D9D9 55.77%, #737373 100%);">
                    <div class="w-full p-6 bg-white inline-flex justify-start items-start gap-6 flex-wrap content-start">
                        <div class="flex-1 inline-flex flex-col justify-start items-start gap-4">
                            <div class="self-stretch justify-start text-stone-900 text-3xl font-semibold leading-10"><?= $section['title'] ?></div>
                            
                            <?php foreach(array_values($section['items']) as $i => $item): ?>
                            <div class="border border-[#D9D9D9] w-full">
                                <input type="checkbox" <?php echo $i == 0 ? 'checked' : '' ?> id="accordion-<?= $i ?>" class="peer hidden accordion-checkbox">    
                                <label for="accordion-<?= $i ?>" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                                    <div><?= $item['year'] ?></div>
                                    <div class="transition-transform duration-300 rotate-180 accordion-icon">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </div>
                                </label>
                                <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40 peer-checked:my-2"><?= $item['description'] ?></div>
                            </div>
                            <?php endforeach; ?>  

                        </div>
                    </div>
                </div> 
            <?php endif; ?> 
        </div>
    </div>
</div>

<?php get_template_part('sections/section', name: 'brand-about'); ?>

<?php get_footer(); ?>
