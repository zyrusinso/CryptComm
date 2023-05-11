<?php $attributes = $attributes->exceptProps(['submit']); ?>
<?php foreach (array_filter((['submit']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div <?php echo e($attributes->merge(['class' => 'row'])); ?>>
    <div class="col-md-8">
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'jetstream::components.section-title','data' => []]); ?>
<?php $component->withName('jet-section-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
             <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
             <?php $__env->slot('description', null, []); ?> 
                <span class="small">
                    <?php echo e($description); ?>

                </span>
             <?php $__env->endSlot(); ?>
         <?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
    </div>
    <div class="col-md-12">
        <div class="card shadow-sm">
            <form wire:submit.prevent="<?php echo e($submit); ?>">
                <div class="card-body">
                <?php echo e($form); ?>

                </div>

                <?php if(isset($actions)): ?>
                    <div class="card-footer d-flex justify-content-end">
                        <?php echo e($actions); ?>

                    </div>
                <?php endif; ?>
            </form>
        </div>
    </div>
</div>
<?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/vendor/jetstream/components/form-section.blade.php ENDPATH**/ ?>