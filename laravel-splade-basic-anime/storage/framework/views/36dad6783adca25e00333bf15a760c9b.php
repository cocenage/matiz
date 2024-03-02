<!doctype html>
<html lang="en">
<head>
    meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Аренда авто">
    <meta name="keywords" content="Это ключевые слова для индексирования вашей страницы">
    <meta name="author" content="Мориарти Ефремов">
    <meta name="robots" content="index">
    <meta name="theme-color" content="#111111">

    <title><?php echo $__env->yieldContent('title'); ?></title>

    <link rel="preload" href="fonts/OnestRegular.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="stylesheet" href="<?php echo e(asset('/assets/css/vendor.css')); ?>">
    <link href="<?php echo e(asset('/assets/css/main.css')); ?>" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script defef src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script>



    <!-- CSS FILES -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">





    <!--

    Tooplate 2132 Clean Work

    https://www.tooplate.com/view/2132-clean-work

    Free Bootstrap 5 HTML Template

    -->
</head>
<body>

<?php echo $__env->make('client.include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<main>
    <?php echo $__env->yieldContent('content'); ?>
</main>
<?php echo $__env->make('client.include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- JAVASCRIPT FILES -->
<script src="<?php echo e(asset('/assets/js/main.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\OSPanel\domains\laravel-splade-basic-anime\resources\views/client/layout/layout.blade.php ENDPATH**/ ?>