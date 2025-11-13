<?php if(!isset($_POST['is_ajax'])): ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo get_page_title(); ?></title>

    <meta name="description" content="<?= get_bloginfo('description') ?>">
    <meta name="keywords" content="starlite,id">
    <meta name="author" content="Ahmad Irfan Maulana">

    <link rel="icon" type="image/x-icon" href="<?= get_site_icon_url() ?>">

    <?php $meta_defaults = get_meta_defaults(); ?>

    <!-- Open Graph / Facebook -->
    <meta property="og:url" content="<?= get_the_permalink() ?>">
    <meta property="og:type" content="website">
    <?php if(get_field('meta_tags')): foreach(get_field('meta_tags') as $meta_property => $meta_content): ?>
    <?php $value = $meta_content ? $meta_content : $meta_defaults[$meta_property]; ?>
    <meta property="og:<?php echo $meta_property; ?>" content="<?php echo $value; ?>">
    <?php endforeach; endif; ?>

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?= get_the_permalink() ?>">
    <?php if(get_field('meta_tags')): foreach(get_field('meta_tags') as $meta_property => $meta_content): ?>
    <?php $value = $meta_content ? $meta_content : $meta_defaults[$meta_property]; ?>
    <meta property="twitter:<?php echo $meta_property; ?>" content="<?php echo $value; ?>">
    <?php endforeach; endif; ?>

    <?php wp_head(); ?>

</head>
<body class="font-body text-body overflow-x-hidden">

<!-- Loader overlay -->
<div id="loader" class="fixed inset-0 z-[99] mt-[98px] bg-white flex items-center justify-center">
    <div class="text-center animate-pulse flex flex-col gap-4">  
        <!-- WheelSpin animation -->
        <div class="spinner relative w-8 h-8 mx-auto mt-4">
            <div class="absolute inset-0 border-4 border-[#1E1E1E] border-t-transparent rounded-full animate-spin"></div>
        </div>
    </div>
</div> 

<div id="content">
<?php endif; ?>

<main>

<header class="w-full h-[80px] lg:h-[99px] border-b border-[#D9D9D9] sticky top-0 bg-white z-50">
    <div class="container h-full flex items-center justify-between">
        <div class="logo">
            <a href="<?= get_home_url() ?>">
                <img src="<?= get_template_directory_uri() . '/img/eco-logo.svg' ?>" alt="eco" class="h-[40px] lg:h-[55px]">
            </a>
        </div>

        <!-- Mobile toggle button -->
        <button id="nav-toggle" class="lg:hidden flex flex-col gap-1.5 focus:outline-none">
            <span class="block w-6 h-0.5 bg-black"></span>
            <span class="block w-6 h-0.5 bg-black"></span>
            <span class="block w-6 h-0.5 bg-black"></span>
        </button>

        <!-- Navigation links -->
         <div id="nav-menu" class="hidden lg:flex absolute lg:relative top-full lg:top-0 left-0 w-full lg:w-auto bg-white lg:bg-transparent border-t lg:border-t-0 border-[#D9D9D9]">
            <nav class="flex text-center lg:text-left lg:flex-row lg:items-center lg:justify-end lg:text-[20px]  gap-2.5 lg:gap-6 lg:flex-row flex-col p-4 lg:p-0">
                <a href="<?= get_home_url() . '/eco#about' ?>">About ECO</a>
                <a href="<?= get_home_url() . '/eco#products' ?>">Our Products</a>
                <a href="<?= get_home_url() . '/eco#testimonial' ?>">Testimonial</a>
                <a href="<?= get_home_url() . '/eco-products' ?>" class="btn btn-red py-1.5 px-5 bg-[#C00F0C] text-white lg:ms-2 lg:-me-2">Find My Parts</a>
            </nav>
         </div>
    </div>
</header>

<script>
    document.getElementById('nav-toggle').addEventListener('click', function() {
        const menu = document.getElementById('nav-menu');
        menu.classList.toggle('hidden');
    });
</script> 