<?php 

/*
 * Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php get_template_part('sections/section', 'hero'); ?> 

<div class="w-full" id="contact">
    <div class="container py-20 !max-w-[1108px] flex flex-col-reverse lg:grid lg:grid-cols-2 gap-6">
        <div class="w-full min-w-60 p-6 bg-white outline outline-2 outline-offset-[-1px] outline-neutral-500 inline-flex flex-col justify-start items-center gap-6">
            <div class="self-stretch flex flex-col justify-start items-center gap-6">
            <div class="justify-start text-stone-900 text-3xl font-semibold leading-10">Email Form</div>
            <form class="self-stretch min-w-80 px-6 bg-white rounded-lg flex flex-col justify-start items-center gap-6" method="post" action="">
                <div data-has-description="false" data-has-error="false" data-has-label="true" data-state="Default" data-value-type="Placeholder" class="self-stretch flex flex-col justify-start items-start gap-2">
                <label class="self-stretch justify-start text-stone-900 text-base font-normal leading-6" for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Value" class="self-stretch min-w-60 px-4 py-3 bg-white outline outline-1 outline-offset-[-0.50px] outline-zinc-300 inline-flex justify-start items-center overflow-hidden">
                </div>
                <div data-has-description="false" data-has-error="false" data-has-label="true" data-state="Default" data-value-type="Placeholder" class="self-stretch flex flex-col justify-start items-start gap-2">
                <label class="self-stretch justify-start text-stone-900 text-base font-normal leading-6" for="surname">Surname</label>
                <input type="text" id="surname" name="surname" placeholder="Value" class="self-stretch min-w-60 px-4 py-3 bg-white outline outline-1 outline-offset-[-0.50px] outline-zinc-300 inline-flex justify-start items-center overflow-hidden">
                </div>
                <div data-has-description="false" data-has-error="false" data-has-label="true" data-state="Default" data-value-type="Placeholder" class="self-stretch flex flex-col justify-start items-start gap-2">
                <label class="self-stretch justify-start text-stone-900 text-base font-normal leading-6" for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Value" class="self-stretch min-w-60 px-4 py-3 bg-white outline outline-1 outline-offset-[-0.50px] outline-zinc-300 inline-flex justify-start items-center overflow-hidden">
                </div>
                <div data-has-description="false" data-has-error="false" data-has-label="true" data-state="Default" data-value-type="Placeholder" class="self-stretch flex flex-col justify-start items-start gap-2">
                <label class="self-stretch justify-start text-stone-900 text-base font-normal leading-6" for="message">Message</label>
                <textarea id="message" name="message" placeholder="Value" class="self-stretch min-w-60 min-h-20 px-4 py-3 bg-white outline outline-1 outline-offset-[-0.50px] outline-zinc-300 inline-flex justify-start items-start overflow-hidden resize-none"></textarea>
                </div>
                <div data-align="Justify" data-button-end="true" data-button-start="false" class="w-64 inline-flex justify-end items-center gap-4">
                <button type="submit" data-has-icon-end="false" data-has-icon-start="false" data-size="Medium" data-state="Default" data-variant="Primary" class="flex-1 p-3 bg-zinc-800 outline outline-1 outline-offset-[-1px] outline-zinc-800 flex justify-center items-center gap-2 overflow-hidden">
                    <span class="justify-start text-neutral-100 text-base font-normal leading-4">Submit</span>
                </button>
                </div>
            </form>
            </div>
        </div>
        <div class="w-full p-6 bg-white outline outline-2 outline-offset-[-1px] outline-neutral-500 inline-flex justify-start items-start gap-6 flex-wrap content-start">
            <div class="flex-1 inline-flex flex-col justify-start items-start gap-6">
                <div class="self-stretch justify-start text-Text-Default-Default text-lg font-normal leading-6">PT. FSCM Manufacturing Indonesia memiliki 4 Plant (Pabrik) di 3 lokasi yang masing-masing terletak di:</div>
                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                <div class="self-stretch justify-start text-Text-Default-Default text-3xl font-semibold leading-10">Site 1</div>
                <div class="self-stretch justify-start text-Text-Default-Default text-base font-normal leading-6">Plant I & II <br/> Jl. Raya Pulogadung No. 30 Kawasan Industri Pulogadung Jakarta Timur 13930<br/>Telp: 021 460 0163      Fax 1: 021 460 3688      Fax 2: 021 460 3689</div>
                </div>
                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                <div class="self-stretch justify-start text-Text-Default-Default text-3xl font-semibold leading-10">Site 2</div>
                <div class="self-stretch justify-start text-Text-Default-Default text-base font-normal leading-6">Plant III <br/> Jl. Raya Narogong Km. 15 Pangkalan 6 Cileungsi Bogor<br/>Telp: 021 823 076 061      Fax: 021 823 0350</div>
                </div>
                <div class="self-stretch flex flex-col justify-start items-start gap-2">
                <div class="self-stretch justify-start text-Text-Default-Default text-3xl font-semibold leading-10">Site 3</div>
                <div class="self-stretch justify-start text-Text-Default-Default text-base font-normal leading-6">Plant IV <br/> Jl. By pass krian Km. 26 No. 8 Desa Barengkrajan Kec. Krian Sidoarjo - Jawa Timur<br/>Telp: 021 897 2425      Fax: 031 709 6028</div>
                </div>
            </div>
        </div>    
    </div>

    <div class="container flex justify-center py-20 ">
        <div class="w-full mx-auto !max-w-[520px] bg-white inline-flex justify-start items-start gap-6 flex-wrap content-start">
            <div class="flex-1 inline-flex flex-col justify-start items-start gap-6">
                <div class="self-stretch justify-start text-stone-900 text-3xl font-semibold leading-10 text-center ">Temukan Sparepart Kami Melalui Dealer Resmi</div>
                
                <div class="border border-[#D9D9D9] w-full">
                    <input type="checkbox" checked id="accordion-0" class="peer hidden">    
                    <label for="accordion-0" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                        <div>Jawa - Bali</div>
                        <div class="transition-transform duration-300 rotate-180">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40 text-left py-2">
                        <ol class="list-decimal list-inside ms-3">
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                        </ol> 
                    </div>
                </div>
                
                <div class="border border-[#D9D9D9] w-full">
                    <input type="checkbox" checked id="accordion-1" class="peer hidden">    
                    <label for="accordion-1" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                        <div>Suamtera</div>
                        <div class="transition-transform duration-300 rotate-180">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40 text-left py-2">
                        <ol class="list-decimal list-inside ms-3">
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                        </ol> 
                    </div>
                </div>

                <div class="border border-[#D9D9D9] w-full">
                    <input type="checkbox" checked id="accordion-2" class="peer hidden">    
                    <label for="accordion-2" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                        <div>Kalimantan</div>
                        <div class="transition-transform duration-300 rotate-180">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40 text-left py-2">
                        <ol class="list-decimal list-inside ms-3">
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                        </ol> 
                    </div>
                </div>

                <div class="border border-[#D9D9D9] w-full">
                    <input type="checkbox" checked id="accordion-3" class="peer hidden">    
                    <label for="accordion-3" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                        <div>Sulawesi</div>
                        <div class="transition-transform duration-300 rotate-180">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                    </label>
                    <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40 text-left py-2">
                        <ol class="list-decimal list-inside ms-3">
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                            <li>PT Lorem ipsum dolor - Jawa Barat</li>
                        </ol> 
                    </div>
                </div>

            </div>
        </div>
    </div>
</div> 

<?php get_footer(); ?>
