<?php if($errors->any()): ?>
    <div <?php echo $attributes->merge(['class' => 'alert alert-danger text-sm p-2']); ?> role="alert">
        <div class="font-weight-bold"><?php echo e(__('Whoops! Something went wrong.')); ?></div>

        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
<?php /**PATH G:\xampp\htdocs\Laravel\E-comm2\resources\views/vendor/jetstream/components/validation-errors.blade.php ENDPATH**/ ?>