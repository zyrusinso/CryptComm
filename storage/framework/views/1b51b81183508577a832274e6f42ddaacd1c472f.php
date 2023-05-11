<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <?php echo e($breadcrumb_title ?? ''); ?>

          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo e(route('index')); ?>"><?php echo app('translator')->get('app.home'); ?></a></li>
              <?php echo e($slot ?? ''); ?>

          </ol>
        </div>
        <div class="col-lg-6">
          <!-- Bookmark Start-->
          
          <!-- Bookmark Ends-->
        </div>
      </div>
    </div>
</div><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/components/breadcrumb.blade.php ENDPATH**/ ?>