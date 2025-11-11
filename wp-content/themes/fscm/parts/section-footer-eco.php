<?php
/*
 Template Name: Footer Eco
 Template Post Type: part
*/
?> 

<footer class="w-full pt-24 pb-32" style="background: url('<?= get_template_directory_uri() . '/img/bg-footer.webp' ?>'), linear-gradient(84.13deg, #871616 3.39%, rgba(226, 0, 0, 0.25) 102.35%); background-blend-mode: darken; background-size: cover; background-position: center;">
    <div class="container flex flex-wrap gap-14"> 
        <div class="w-full max-w-[260px] flex flex-col gap-5">
            <img class="h-[40px]" height="40" width="108" src="<?= get_template_directory_uri() . '/img/logo-fscm-white.svg' ?>" />
            <div class="text-white text-[14px]">
                A Proud Member of Astra Otoparts. Your Genuine Partner in Innovation and Reliability for Smarter, Sustainable Journeys.
            </div>
        </div>

        <div class="w-full max-w-[262px] flex flex-col gap-5">
            <div class="flex items-center gap-4">
                <!-- <a href="">
                    <img class="h-[24px]" height="24" width="24" src="<?= get_template_directory_uri() . '/img/x.svg' ?>" />
                </a> -->
                <a href="https://www.instagram.com/fscm.id">
                    <img class="h-[24px]" height="24" width="24" src="<?= get_template_directory_uri() . '/img/instagram.svg' ?>" />
                </a>
                <!-- <a href="">
                    <img class="h-[24px]" height="24" width="24" src="<?= get_template_directory_uri() . '/img/youtube.svg' ?>" />
                </a>
                <a href="">
                    <img class="h-[24px]" height="24" width="24" src="<?= get_template_directory_uri() . '/img/linkedin.svg' ?>" />
                </a> -->
            </div>
            <div class="text-white text-[14px] whitespace-pre-line">PT FSCM Manufacturing Indonesia
Jl. Pulogadung No. 30
Kawasan Industri Pulogadung
Jakarta Timur

<a href="mailto:sales@fscm.co.id" target="_blank" class="hover:underline">sales@fscm.co.id</a>
<a href="https://wa.me/+6282257584400" target="_blank" class="hover:underline">+62 822-5758-4400</a></div>
        </div>
    </div>
</footer>