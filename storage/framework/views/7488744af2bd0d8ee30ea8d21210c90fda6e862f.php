<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="<?php echo e(asset('assets/img/logo.png')); ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo e(asset('assets/img/logo.png')); ?>" type="image/x-icon">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <!-- Google font-->
        <?php if ($__env->exists('auth.partials.css')) echo $__env->make('auth.partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </head>
    <body style="">
        <!-- Loader starts-->
        <div class="loader-wrapper">
            <div class="theme-loader">
                <div class="loader-p"></div>
            </div>
        </div>
        <!-- Loader ends-->
        <!-- error page start //-->
        <?php echo $__env->yieldContent('content'); ?>
        <!-- error page end //-->
        <!-- latest jquery-->
        <?php if ($__env->exists('auth.partials.js')) echo $__env->make('auth.partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </body>
</html><?php /**PATH G:\xampp\htdocs\Laravel\Cryptcomm\resources\views/auth/layouts/master.blade.php ENDPATH**/ ?>