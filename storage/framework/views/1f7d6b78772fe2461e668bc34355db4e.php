<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    
    <title><?php echo e(config('app.name')); ?></title>

    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    
    <script src="https://cdn.tailwindcss.com"></script>

    <!--Logo icon-->
    <link href="<?php echo e(asset('assets/img/logo.png')); ?>" rel="icon" type="img/png" size="16x16" />

    <!--custom css -->
    <link href="<?php echo e(asset('assets/dist/css/style.css')); ?>" rel="stylesheet" type="text/css" />

    <?php echo $__env->yieldContent('css'); ?>

</head>

<body class="pb-32"><?php /**PATH D:\team-project\resources\views/layouts/backend/dashboardheader.blade.php ENDPATH**/ ?>