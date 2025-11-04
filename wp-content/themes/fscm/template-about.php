<?php 

/*
 * Template Name: About
*/
?>

<?php get_header(); ?>

<div class="hero w-full h-[560px]" style="background: url('<?= get_template_directory_uri() . '/img/hero.webp' ?>'), linear-gradient(180deg, rgba(30, 30, 30, 0.81) 54.33%, rgba(117, 117, 117, 0.081) 100%); background-size: cover; background-position: center; background-repeat: no-repeat; background-blend-mode: multiply;">
  <div class="container !max-w-[882px] flex items-center justify-center text-center flex-col gap-3">
    <h2 class="text-white text-[64px] font-bold">Partner in Every Journey</h2>
    <p class="text-white text-[40px] leading-[1.3]">Your Genuine Partner in Innovation and Reliability for Smarter, Sustainable Journeys</p>
    <a href="#about" class="btn mt-7 btn-primary text-[24px] font-bold px-5 py-2 inline-flex gap-2 justify-center items-center bg-white border-[#767676]">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M12 5V19M12 19L19 12M12 19L5 12" stroke="#1E1E1E" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
      </svg>
      Our Brands
    </a>
  </div> 
</div>

<div id="about" class="w-full bg-[#2C2C2C]">
  <div class="w-full h-4 bg-gradient-to-r from-red-300 via-red-600 via 30% to-white"></div> 
  
  <div class="container px-16 py-20 flex flex-col justify-center items-center gap-10">
    <div class="text-center text-white text-3xl font-semibold leading-10">Built Through Experience. Proven on The Road.</div>
    <div class="grid grid-cols-4 gap-6">
      <div class="size- min-w-72 p-6 bg-white flex-col justify-start items-start gap-4">
        <div class="w-48 justify-start items-start">
          <div class="flex-1 justify-start text-Text-Default-Default text-4xl font-bold leading-[48px]">5000+</div>
        </div>
        <div class="self-stretch flex justify-start items-start gap-3">
          <div class="flex-1 flex flex-col justify-start items-start gap-0.5">
            <div class="self-stretch justify-center text-[#757575] text-base font-semibold leading-6">Mechanics & Authorized Workshops Recommend Us</div>
          </div>
        </div>
      </div>
      <div class="size- min-w-72 p-6 bg-white flex flex-col justify-start items-start gap-4">
        <div class="self-stretch flex justify-start items-start">
          <div class="justify-start text-Text-Default-Default text-4xl font-bold leading-[48px]">40+ Years</div>
        </div>
        <div class="self-stretch flex justify-start items-start gap-3">
          <div class="flex-1 flex flex-col justify-start items-start gap-0.5">
            <div class="self-stretch justify-center text-[#757575] text-base font-semibold leading-6">Mechanics & Authorized Workshops Recommend Us</div>
          </div>
        </div>
      </div>
      <div class="size- min-w-72 p-6 bg-white flex flex-col justify-start items-start gap-4">
        <div class="w-48 flex justify-start items-start">
          <div class="flex-1 justify-start text-Text-Default-Default text-4xl font-bold leading-[48px]">500+</div>
        </div>
        <div class="self-stretch flex justify-start items-start gap-3">
          <div class="flex-1 flex flex-col justify-start items-start gap-0.5">
            <div class="self-stretch justify-center text-[#757575] text-base font-semibold leading-6">Vehicle Models and Variants are Supported</div>
          </div>
        </div>
      </div>
      <div class="size- min-w-72 p-6 bg-white flex flex-col justify-start items-start gap-4">
        <img class="w-56 h-12" src="<?= get_template_directory_uri() . '/img/astra.webp' ?>" />
        <div class="self-stretch flex justify-start items-start gap-3">
          <div class="flex-1 flex flex-col justify-start items-start gap-0.5">
            <div class="self-stretch justify-center text-[#757575] text-base font-semibold leading-6">Member of Astra Autoparts Group</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="w-full">
    <div class="container px-16 py-20 !max-w-[1120px] grid grid-cols-[520fr_576fr] gap-6">
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
                    
                    <div class="border border-[#D9D9D9]">
                        <input type="checkbox" checked id="accordion-1" class="peer hidden">    
                        <label for="accordion-1" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                            <div>1983</div>
                            <div class="transition-transform duration-300 rotate-180">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </label>
                        <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>

                    <div class="border border-[#D9D9D9]">
                        <input type="checkbox" id="accordion-2" class="peer hidden">    
                        <label for="accordion-2" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                            <div>1990</div>
                            <div class="transition-transform duration-300 rotate-180">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </label>
                        <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>

                    <div class="border border-[#D9D9D9]">
                        <input type="checkbox" id="accordion-3" class="peer hidden">    
                        <label for="accordion-3" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                            <div>2005</div>
                            <div class="transition-transform duration-300 rotate-180">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </label>
                        <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>

                    <div class="border border-[#D9D9D9]">
                        <input type="checkbox" id="accordion-4" class="peer hidden">    
                        <label for="accordion-4" class="flex justify-between text-[24px] px-4 py-2 items-center cursor-pointer hover:bg-gray-100">
                            <div>2023</div>
                            <div class="transition-transform duration-300 rotate-180">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15 12.5L10 7.5L5 12.5" stroke="var(--Icon-Default-Default, #1E1E1E)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                        </label>
                        <div class="max-h-0 px-4 peer-checked:pb-2 overflow-hidden transition-all duration-300 peer-checked:max-h-40">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="w-full bg-[#E6E6E6]">
  <div class="container px-16 py-20 flex flex-col justify-center text-center items-center gap-5">
    <div class="grid grid-cols-2 gap-10">
      <div class="relative group">
        <img class="w-full" src="<?= get_template_directory_uri() . '/img/bg-card-fscm.webp' ?>" />
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-5 group-hover:opacity-0 opacity-100 transition-all duration-300 ease-in-out">
          <img class="h-[48px]" height="48" width="190" src="<?= get_template_directory_uri() . '/img/logo-card-fscm.webp' ?>" />
        </div>
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-5 group-hover:opacity-100 opacity-0 bg-[#1E1E1E80] transition-all duration-300 ease-in-out">
          <div class="text-[32px] font-semibold leading-10 text-white">FSCM</div>
          <div class="text-[24px] text-white w-full max-w-[440px]">
            Hadir dengan berbagai lineup sparepart berkualitas dan standar setara Original / Genuine, FSCM siap membawamu melaju lebih jauh tanpa kompromi.
          </div>
          <a href="<?= site_url('/fscm') ?>" class="px-5 py-2 inline-flex gap-2 justify-center items-center text-white bg-[#2C2C2C]">  
            Temukan Sparepart FSCM
          </a>
        </div>
      </div>
      <div class="relative group">
        <img class="w-full" src="<?= get_template_directory_uri() . '/img/bg-card-eco.webp' ?>" />
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-5 group-hover:opacity-0 opacity-100 transition-all duration-300 ease-in-out">
          <img class="h-[48px]" height="48" width="190" src="<?= get_template_directory_uri() . '/img/logo-card-eco.webp' ?>" />
        </div>
        <div class="absolute top-0 left-0 w-full h-full flex flex-col justify-center items-center gap-5 group-hover:opacity-100 opacity-0 bg-[#E20000B2] transition-all duration-300 ease-in-out">
          <div class="text-[32px] font-semibold leading-10 text-white">ECO</div>
          <div class="text-[24px] text-white w-full max-w-[440px]">
            Hadir buat kamu yang cari suku cadang bagus dengan harga lebih ekonomis. Cocok buat perawatan harian tanpa bikin kantong jebol.
          </div>
          <a href="<?= site_url('/eco') ?>" class="px-5 py-2 inline-flex gap-2 justify-center items-center text-white bg-[#2C2C2C]">  
            Temukan Sparepart ECO
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>
