

<?php $__env->startSection('title'); ?><?php echo e(__('app.history.order.title')); ?>

<?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
<?php $__env->startComponent('components.breadcrumb'); ?>
<?php $__env->slot('breadcrumb_title'); ?>
<h3><?php echo e(__('app.history.order.title')); ?></h3>
<?php $__env->endSlot(); ?>
<li class="breadcrumb-item"><?php echo e(__('app.history.order.ecommerce')); ?></li>
<li class="breadcrumb-item active"><?php echo e(__('app.history.order.title')); ?></li>
<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<div class="card">
				<div class="card-header pb-0">
					<h5><?php echo e(__('app.history.order.title')); ?></h5>
				</div>
				<div class="card-body">
					<div class="order-history table-responsive">
						<table class="table table-bordernone display" id="basic-1">
							<thead>
								<tr>
									<th scope="col"><?php echo app('translator')->get('app.ecommerce.transaction_id'); ?></th>
									<th scope="col"><?php echo app('translator')->get('app.ecommerce.product_name'); ?></th>
									<th scope="col"><?php echo app('translator')->get('app.quantity'); ?></th>
									<th scope="col"><?php echo app('translator')->get('app.ecommerce.price'); ?></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>4215738</td>
									<td>
										<div class="product-name">
											<a href="#">Long Top</a>
											<div class="order-process"><span
													class="order-process-circle"></span>Shipping
											</div>
										</div>
									</td>
									<td>3</td>
									<td>$21</td>
								</tr>
								<tr>
									<td>5476182</td>
									<td>
										<div class="product-name">
											<a href="#">Fancy watch</a>
											<div class="order-process"><span
													class="order-process-circle"></span>Failed</div>
										</div>
									</td>
									<td>1</td>
									<td>$10</td>
								</tr>
								<tr>
									<td>1756457</td>
									<td>
										<div class="product-name">
											<a href="#">Man shoes</a>
											<div class="order-process"><span
													class="order-process-circle"></span>Success</div>
										</div>
									</td>
									<td>2</td>
									<td>$18</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php $__env->startPush('scripts'); ?>
<script src="<?php echo e(asset('assets/js/datatable/datatables/jquery.dataTables.min.js')); ?>"></script>
<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Cryptcomm\resources\views/app/history/index.blade.php ENDPATH**/ ?>