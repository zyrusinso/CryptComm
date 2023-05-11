<?php $attributes = $attributes->exceptProps(['id']); ?>
<?php foreach (array_filter((['id']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<li class="nav-item dropdown">
    <a id="<?php echo e($id); ?>" <?php echo $attributes->merge(['class' => 'nav-link']); ?> role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <?php echo e($trigger); ?>

    </a>

    <div class="dropdown-menu dropdown-menu-end animate slideIn" aria-labelledby="<?php echo e($id); ?>">
        <?php echo e($content); ?>

    </div>
</li><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/vendor/jetstream/components/dropdown.blade.php ENDPATH**/ ?>