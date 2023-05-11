<?php if(auth()->guard()->guest()): ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="You company description">
        <meta name="keywords" content="Keywords for your company">
        <meta name="author" content="zyrusinso">
        <link rel="icon" href="<?php echo e(asset('assets/img/logo.png')); ?>" type="image/x-icon">
        <link rel="shortcut icon" href="<?php echo e(asset('assets/img/logo.png')); ?>" type="image/x-icon">
        <title><?php echo $__env->yieldContent('title'); ?></title>

        <?php if ($__env->exists('layouts.partials.js-init')) echo $__env->make('layouts.partials.js-init', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Font Awesome-->
        <?php if ($__env->exists('layouts.partials.css')) echo $__env->make('layouts.partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <style>
            body {
                width: 650px;
                font-family: work-Sans, sans-serif;
                background-color: #f6f7fb;
                display: block;
            }
            a {
                text-decoration: none;
            }
            span {
                font-size: 14px;
            }
            p {
                font-size: 13px;
                line-height: 1.7;
                letter-spacing: 0.7px;
                margin-top: 0;
            }
            .text-center {
                text-align: center;
            }
        </style>
    </head>
    <body style="margin: 30px auto;">
        <table style="width: 100%;">
            <tbody>
                <tr>
                    <td>
                        <table style="background-color: #f6f7fb; width: 100%;">
                            <tbody>
                                <tr>
                                    <td>
                                        <table style="width: 650px; margin: 0 auto; margin-bottom: 30px;">
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <img src="<?php echo e(asset('assets/img/logo.png')); ?>" alt="" width="75px" height="75px"/>
                                                        <span class="align-middle" style="color: #168eea; font-size: 25px; text">Company Name</span>
                                                    </td>
                                                    <td style="text-align: right; color: #999;"><span>Some Description</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table style="width: 650px; margin: 0 auto; background-color: #fff; border-radius: 8px;">
                                            <tbody>
                                                <tr>
                                                    <td style="padding: 30px;">
                                                        <h1 class="">Terms And Conditions</h1>
                                                        <p>Edit this file to define the Terms And Conditions for your website.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table style="width: 650px; margin: 0 auto; margin-top: 30px;">
                                            <tbody>
                                                <tr style="text-align: center;">
                                                    <td>
                                                        <p style="color: #999; margin-bottom: 0;">123 Your Company Location 654321</p>
                                                        <p style="color: #999; margin-bottom: 0;">Powered By Creator</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
<?php endif; ?><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/terms.blade.php ENDPATH**/ ?>