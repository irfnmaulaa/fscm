<?php 

/*
 * Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php get_template_part('sections/section', 'hero', [ 
  'title' => 'Need Help?',
  'description' => 'Kami Siap Membantu Kebutuhan Sparepart Anda.',
  'call_to_action' => [
      'title' => 'Contact FSCM',
      'url' => '#contact',
  ], 
  'cta_icon' => '<svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g clip-path="url(#clip0_753_528)">
        <path d="M12.5415 4.16634C13.3555 4.32515 14.1035 4.72322 14.6899 5.30962C15.2763 5.89602 15.6744 6.64406 15.8332 7.45801M12.5415 0.833008C14.2326 1.02087 15.8095 1.77815 17.0134 2.98051C18.2173 4.18287 18.9765 5.75885 19.1665 7.44967M18.3332 14.0997V16.5997C18.3341 16.8318 18.2866 17.0615 18.1936 17.2741C18.1006 17.4868 17.9643 17.6777 17.7933 17.8346C17.6222 17.9915 17.4203 18.1109 17.2005 18.1853C16.9806 18.2596 16.7477 18.2872 16.5165 18.2663C13.9522 17.9877 11.489 17.1115 9.32486 15.708C7.31139 14.4286 5.60431 12.7215 4.32486 10.708C2.91651 8.53401 2.04007 6.05884 1.76653 3.48301C1.7457 3.25256 1.77309 3.02031 1.84695 2.80103C1.9208 2.58175 2.03951 2.38025 2.1955 2.20936C2.3515 2.03847 2.54137 1.90193 2.75302 1.80844C2.96468 1.71495 3.19348 1.66656 3.42486 1.66634H5.92486C6.32928 1.66236 6.72136 1.80557 7.028 2.06929C7.33464 2.333 7.53493 2.69921 7.59153 3.09967C7.69705 3.89973 7.89274 4.68528 8.17486 5.44134C8.28698 5.73961 8.31125 6.06377 8.24478 6.37541C8.17832 6.68705 8.02392 6.9731 7.79986 7.19967L6.74153 8.25801C7.92783 10.3443 9.65524 12.0717 11.7415 13.258L12.7999 12.1997C13.0264 11.9756 13.3125 11.8212 13.6241 11.7548C13.9358 11.6883 14.2599 11.7126 14.5582 11.8247C15.3143 12.1068 16.0998 12.3025 16.8999 12.408C17.3047 12.4651 17.6744 12.669 17.9386 12.9809C18.2029 13.2928 18.3433 13.691 18.3332 14.0997Z" stroke="var(--Icon-Neutral-On-Neutral-Secondary, #303030)" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
        </g>
        <defs>
        <clipPath id="clip0_753_528">
        <rect width="20" height="20" fill="white"/>
        </clipPath>
        </defs>
    </svg>'
]); ?> 

<div class="w-full" id="contact">
    <div class="container px-16 py-20 !max-w-[1108px] flex flex-col-reverse lg:grid lg:grid-cols-2 gap-6">
        <div class="w-full inline-flex justify-start items-start gap-6">
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
        </div>
        <div>
            <div class="w-full p-6 bg-white outline outline-2 outline-offset-[-1px] outline-neutral-500 inline-flex justify-start items-start gap-6 flex-wrap content-start">
                <div class="flex-1 inline-flex flex-col justify-start items-start gap-6">
                    <div class="self-stretch justify-start text-Text-Default-Default text-lg font-normal leading-6">PT. FSCM Manufacturing Indonesia memiliki 4 Plant (Pabrik) di 3 lokasi yang masing-masing terletak di:</div>
                    <div class="self-stretch flex flex-col justify-start items-start gap-2">
                    <div class="self-stretch justify-start text-Text-Default-Default text-3xl font-semibold leading-10">Site 1</div>
                    <div class="self-stretch justify-start text-Text-Default-Default text-base font-normal leading-6">Plant I & II Jl. Raya Pulogadung No. 30 Kawasan Industri Pulogadung Jakarta Timur 13930<br/>Telp: 021 460 0163      Fax 1: 021 460 3688      Fax 2: 021 460 3689</div>
                    </div>
                    <div class="self-stretch flex flex-col justify-start items-start gap-2">
                    <div class="self-stretch justify-start text-Text-Default-Default text-3xl font-semibold leading-10">Site 2</div>
                    <div class="self-stretch justify-start text-Text-Default-Default text-base font-normal leading-6">Plant III Jl. Raya Narogong Km. 15 Pangkalan 6 Cileungsi Bogor<br/>Telp: 021 823 076 061      Fax: 021 823 0350</div>
                    </div>
                    <div class="self-stretch flex flex-col justify-start items-start gap-2">
                    <div class="self-stretch justify-start text-Text-Default-Default text-3xl font-semibold leading-10">Site 3</div>
                    <div class="self-stretch justify-start text-Text-Default-Default text-base font-normal leading-6">Plant IV Jl. By pass krian Km. 26 No. 8 Desa Barengkrajan Kec. Krian Sidoarjo - Jawa Timur<br/>Telp: 021 897 2425      Fax: 031 709 6028</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> 

<?php get_footer(); ?>
