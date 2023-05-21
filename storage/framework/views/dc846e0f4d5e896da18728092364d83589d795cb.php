

<?php $__env->startSection('title'); ?><?php echo e(__('app.cart')); ?>

 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3><?php echo e(__('app.cart')); ?></h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item"><?php echo e(__('app._ecommerce')); ?></li>
		<li class="breadcrumb-item active"><?php echo e(__('app.cart')); ?></li>
	<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	
	<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ecommerce.cart')->html();
} elseif ($_instance->childHasBeenRendered('MJy9TkW')) {
    $componentId = $_instance->getRenderedChildComponentId('MJy9TkW');
    $componentTag = $_instance->getRenderedChildComponentTagName('MJy9TkW');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('MJy9TkW');
} else {
    $response = \Livewire\Livewire::mount('ecommerce.cart');
    $html = $response->html();
    $_instance->logRenderedChild('MJy9TkW', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/touchspin/vendors.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/touchspin.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/touchspin/input-groups.min.js')); ?>"></script>
	<script src="<?php echo e(asset('assets/js/sweet-alert2/sweetalert.all.min.js')); ?>"></script>

	<?php if(session()->has('success')): ?>
		<script>
			Swal.fire(
				'Added to cart!',
				'<?php echo e(session()->get("success")); ?>',
				'success'
			)
		</script>
	<?php endif; ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Cryptcomm\resources\views/app/ecommerce/cart/index.blade.php ENDPATH**/ ?>