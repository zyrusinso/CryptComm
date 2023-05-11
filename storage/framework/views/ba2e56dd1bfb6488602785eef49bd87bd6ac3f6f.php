

<?php $__env->startSection('title'); ?>Order History
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/datatables.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Order History</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Ecommerce</li>
		<li class="breadcrumb-item active">Order History</li>
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
	                    <h5>Order history</h5>
	                </div>
	                <div class="card-body">
	                    <div class="order-history table-responsive">
	                        <table class="table table-bordernone display" id="basic-1">
	                            <thead>
	                                <tr>
	                                    <th scope="col"><?php echo app('translator')->get('app.ecommerce.product_name'); ?></th>
	                                    <th scope="col"><?php echo app('translator')->get('app.quantity'); ?></th>
	                                    <th scope="col"><?php echo app('translator')->get('app.ecommerce.transaction_id'); ?></th>
	                                    <th scope="col"><?php echo app('translator')->get('app.ecommerce.price'); ?></th>
	                                </tr>
	                            </thead>
	                            <tbody>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Long Top</a>
	                                            <div class="order-process"><span class="order-process-circle"></span>Processing</div>
	                                        </div>
	                                    </td>
	                                    <td>M</td>
	                                    <td>4215738</td>
	                                    <td>$21</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Fancy watch</a>
	                                            <div class="order-process"><span class="order-process-circle"></span>Processing</div>
	                                        </div>
	                                    </td>
	                                    <td>35mm</td>
	                                    <td>5476182</td>
	                                    <td>$10</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Man shoes</a>
	                                            <div class="order-process"><span class="order-process-circle"></span>Processing</div>
	                                        </div>
	                                    </td>
	                                    <td>8</td>
	                                    <td>1756457</td>
	                                    <td>$18</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Ledis side bag</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>22cm x 18cm</td>
	                                    <td>7451725</td>
	                                    <td>$13</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Ledis Slipper</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>6</td>
	                                    <td>4127421</td>
	                                    <td>$6</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Fancy ledis Jacket</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>Xl</td>
	                                    <td>3581714</td>
	                                    <td>$24</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Ledis Handbag</a>
	                                            <div class="order-process"><span class="order-process-circle shipped-order"></span>Shipped</div>
	                                        </div>
	                                    </td>
	                                    <td>25cm x 20cm</td>
	                                    <td>6748142</td>
	                                    <td>$14</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Iphone6 mobile</a>
	                                            <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
	                                        </div>
	                                    </td>
	                                    <td>10cm x 15cm</td>
	                                    <td>5748214</td>
	                                    <td>$25</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Watch</a>
	                                            <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
	                                        </div>
	                                    </td>
	                                    <td>27mm</td>
	                                    <td>2471254</td>
	                                    <td>$12</td>
	                                </tr>
	                                <tr>
	                                    <td>
	                                        <div class="product-name">
	                                            <a href="#">Slipper</a>
	                                            <div class="order-process"><span class="order-process-circle cancel-order"></span>Cancelled</div>
	                                        </div>
	                                    </td>
	                                    <td>6</td>
	                                    <td>8475112</td>
	                                    <td>$6</td>
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
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/app/ecommerce/order/index.blade.php ENDPATH**/ ?>