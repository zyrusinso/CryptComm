

<?php $__env->startSection('title'); ?><?php echo e(__('app._profile')); ?>

 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php echo \Livewire\Livewire::styles(); ?>


<!-- Scripts -->
<script src="<?php echo e(mix('js/app.js')); ?>" defer></script>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3><?php echo e(__('app._profile')); ?></h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item"><?php echo e(__('app.profile.users')); ?></li>
		<li class="breadcrumb-item active"><?php echo e(__('app._profile')); ?></li>
	<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="edit-profile">
	        <div class="row">
	            <div class="col-xl-4">
	                
				<?php if(Laravel\Fortify\Features::canUpdateProfileInformation()): ?>
					<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-profile-information-form')->html();
} elseif ($_instance->childHasBeenRendered('ROLLjT9')) {
    $componentId = $_instance->getRenderedChildComponentId('ROLLjT9');
    $componentTag = $_instance->getRenderedChildComponentTagName('ROLLjT9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ROLLjT9');
} else {
    $response = \Livewire\Livewire::mount('profile.update-profile-information-form');
    $html = $response->html();
    $_instance->logRenderedChild('ROLLjT9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
				<?php endif; ?>
	            </div>
	            <div class="col-xl-8">
					<?php if(Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords())): ?>
						<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-password-form')->html();
} elseif ($_instance->childHasBeenRendered('ZWIQ7Xi')) {
    $componentId = $_instance->getRenderedChildComponentId('ZWIQ7Xi');
    $componentTag = $_instance->getRenderedChildComponentTagName('ZWIQ7Xi');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('ZWIQ7Xi');
} else {
    $response = \Livewire\Livewire::mount('profile.update-password-form');
    $html = $response->html();
    $_instance->logRenderedChild('ZWIQ7Xi', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
					<?php endif; ?>
					
					<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form')->html();
} elseif ($_instance->childHasBeenRendered('xYeFxsJ')) {
    $componentId = $_instance->getRenderedChildComponentId('xYeFxsJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('xYeFxsJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('xYeFxsJ');
} else {
    $response = \Livewire\Livewire::mount('profile.logout-other-browser-sessions-form');
    $html = $response->html();
    $_instance->logRenderedChild('xYeFxsJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
					
					<?php if(Laravel\Jetstream\Jetstream::hasAccountDeletionFeatures()): ?>
						<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.delete-user-form')->html();
} elseif ($_instance->childHasBeenRendered('Lxv8xoT')) {
    $componentId = $_instance->getRenderedChildComponentId('Lxv8xoT');
    $componentTag = $_instance->getRenderedChildComponentTagName('Lxv8xoT');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('Lxv8xoT');
} else {
    $response = \Livewire\Livewire::mount('profile.delete-user-form');
    $html = $response->html();
    $_instance->logRenderedChild('Lxv8xoT', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
					<?php endif; ?>
	            </div>
	        </div>
	    </div>
	</div>

	<?php $__env->startPush('scripts'); ?>
	<?php echo \Livewire\Livewire::scripts(); ?>

	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Cryptcomm\resources\views/profile/index.blade.php ENDPATH**/ ?>