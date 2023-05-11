<?php $attributes = $attributes->exceptProps(['id', 'maxWidth']); ?>
<?php foreach (array_filter((['id', 'maxWidth']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
$id = $id ?? md5($attributes->wire('model'));

$maxWidth = [
    'sm' => ' modal-sm',
    'md' => '',
    'lg' => ' modal-lg',
    'xl' => ' modal-xl',
][$maxWidth ?? 'md'];
?>

<!-- Modal -->
<div
    x-data="{
        show: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>.defer,
    }"
    x-init="() => {

        let el = document.querySelector('#modal-id-<?php echo e($id); ?>')

        let modal = new bootstrap.Modal(el);

        $watch('show', value => {
            if (value) {
                modal.show()
            } else {
                modal.hide()
            }
        });

        el.addEventListener('hide.bs.modal', function (event) {
          show = false
        })
    }"
    wire:ignore.self
    class="modal fade"
    tabindex="-1"
    id="modal-id-<?php echo e($id); ?>"
    aria-labelledby="modal-id-<?php echo e($id); ?>"
    aria-hidden="true"
    x-ref="modal-id-<?php echo e($id); ?>"
>
    <div class="modal-dialog<?php echo e($maxWidth); ?>">
        <?php echo e($slot); ?>

    </div>
</div>
<?php /**PATH G:\xampp\htdocs\Laravel\E-comm2\resources\views/vendor/jetstream/components/modal.blade.php ENDPATH**/ ?>