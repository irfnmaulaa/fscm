<?php
/*
 Template Name: Footer
 Template Post Type: part
*/
?> 

<footer class="w-full pt-24 pb-32" style="background: url('<?= get_template_directory_uri() . '/img/bg-footer.webp' ?>'), linear-gradient(84.13deg, #1E1E1E 3.39%, rgba(30, 30, 30, 0.5) 102.35%); background-blend-mode: multiply; background-size: cover; background-position: center;">
    <div class="container flex flex-wrap gap-14">
        <div class="w-full max-w-[260px] flex flex-col gap-5">
            <img class="h-[40px]" height="40" width="108" src="<?= get_template_directory_uri() . '/img/logo-fscm-white.svg' ?>" />
            <div class="text-white text-[14px]">
                A Proud Member of Astra Otoparts. Your Genuine Partner in Innovation and Reliability for Smarter, Sustainable Journeys.
            </div>
        </div>

        <div class="w-full max-w-[262px] flex flex-col gap-5">
            <div class="flex items-center gap-4">
                <a href="">
                    <img class="h-[24px]" height="24" width="24" src="<?= get_template_directory_uri() . '/img/x.svg' ?>" />
                </a>
                <a href="">
                    <img class="h-[24px]" height="24" width="24" src="<?= get_template_directory_uri() . '/img/instagram.svg' ?>" />
                </a>
                <a href="">
                    <img class="h-[24px]" height="24" width="24" src="<?= get_template_directory_uri() . '/img/youtube.svg' ?>" />
                </a>
                <a href="">
                    <img class="h-[24px]" height="24" width="24" src="<?= get_template_directory_uri() . '/img/linkedin.svg' ?>" />
                </a>
            </div>
            <div class="text-white text-[14px] whitespace-pre-line">PT FSCM Manufacturing Indonesia
Jl. Pulogadung No. 30
Kawasan Industri Pulogadung
Jakarta Timur

<a href="mailto:fscm@fscm.co.id" class="hover:underline">fscm@fscm.co.id</a>
<a href="tel:+62214600163" class="hover:underline">+62 21 460 0163</a></div>
        </div>
    </div>
</footer>