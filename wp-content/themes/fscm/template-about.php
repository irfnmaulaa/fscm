<?php 

/*
 * Template Name: About
*/
?>

<?php get_header(); ?>


<?php get_template_part('sections/section', 'hero'); ?>

<?php get_template_part('sections/section', 'short-about'); ?>

<div class="w-full">
    <div class="container px-16 py-20 !max-w-[1120px] grid lg:grid-cols-[520fr_576fr] gap-6">
        <div class="flex flex-col gap-6">
            <div class="w-full p-6 bg-white outline outline-2 outline-offset-[-1px] outline-neutral-500 inline-flex justify-start items-start gap-6 flex-wrap content-start">
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-4">
                    <div class="self-stretch justify-start text-stone-900 text-3xl font-semibold leading-10">Visi</div>
                    <div class="self-stretch justify-start text-stone-900 text-base font-semibold leading-6">Your Genuine Partner in Innovation and Reliability for Smarter, Sustainable Journeys</div>
                </div>
            </div>
            <div class="w-full p-6 bg-white outline outline-2 outline-offset-[-1px] outline-neutral-500 inline-flex justify-start items-start gap-6 flex-wrap content-start">
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-4">
                    <div class="self-stretch justify-start text-stone-900 text-3xl font-semibold leading-10">Misi</div>
                    <ol class="self-stretch justify-start text-stone-900 text-base leading-6 list-decimal ps-6">
                        <li class="ps-2">Develop and manufacture high-quality spare parts Focused on Performance, trusted by automakers and customers.</li>
                        <li class="ps-2">Prioritize innovation with Advanced expertise and technology in manufacturing processes to enhance vehicle performance and driving comfort.</li>
                        <li class="ps-2">Contribute to more Sustainable mobility by delivering efficient and sustainable products.</li>  
                        <li class="ps-2">Establish Trusted long-term partnerships with all stakeholders to ensure the best service for customers.</li>
                    </ol>
                </div>
            </div>
        </div>
        <div>
            <div class="w-full p-6 bg-white outline outline-2 outline-offset-[-1px] outline-neutral-500 inline-flex justify-start items-start gap-6 flex-wrap content-start">
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-4">
                    <div class="self-stretch justify-start text-stone-900 text-3xl font-semibold leading-10">Sejarah Kami</div>
                    
                    <div class="border border-[#D9D9D9] w-full">
                        <input type="checkbox" checked id="accordion-1" class="peer hidden accordion-checkbox">    
                        <label for="accordion-1" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                            <div>1983</div>
                            <div class="transition-transform duration-300 rotate-180 accordion-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </label>
                        <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40 peer-checked:my-2">
                             Didirikan sebagai bagian dari Astra Otoparts
                        </div>
                    </div>

                    <div class="border border-[#D9D9D9] w-full">
                        <input type="checkbox" id="accordion-2" class="peer hidden accordion-checkbox">    
                        <label for="accordion-2" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                            <div>1990</div>
                            <div class="transition-transform duration-300 rotate-180 accordion-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </label>
                        <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40 peer-checked:my-2">
                            Produksi massal cam chain dan drive chain
                        </div>
                    </div>

                    <div class="border border-[#D9D9D9] w-full">
                        <input type="checkbox" id="accordion-3" class="peer hidden accordion-checkbox">    
                        <label for="accordion-3" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                            <div>2005</div>
                            <div class="transition-transform duration-300 rotate-180 accordion-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </label>
                        <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40 peer-checked:my-2">
                            Peluncuran Brand FASTRA
                        </div>
                    </div>

                    <div class="border border-[#D9D9D9] w-full">
                        <input type="checkbox" id="accordion-4" class="peer hidden accordion-checkbox">    
                        <label for="accordion-4" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                            <div>2023</div>
                            <div class="transition-transform duration-300 rotate-180 accordion-icon">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </label>
                        <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40 peer-checked:my-2">
                            Rebranding dengan pendekatan digital & e-commerce
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php get_template_part('sections/section', name: 'brand-about'); ?>

<?php get_footer(); ?>
