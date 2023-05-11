

<?php $__env->startSection('title'); ?>Cart
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Cart</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Ecommerce</li>
		<li class="breadcrumb-item active">Cart</li>
	<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	
	<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('ecommerce.cart')->html();
} elseif ($_instance->childHasBeenRendered('vXyhjCt')) {
    $componentId = $_instance->getRenderedChildComponentId('vXyhjCt');
    $componentTag = $_instance->getRenderedChildComponentTagName('vXyhjCt');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('vXyhjCt');
} else {
    $response = \Livewire\Livewire::mount('ecommerce.cart');
    $html = $response->html();
    $_instance->logRenderedChild('vXyhjCt', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/app/ecommerce/cart/index.blade.php ENDPATH**/ ?>