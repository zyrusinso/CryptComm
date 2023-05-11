

<?php $__env->startSection('title'); ?>Product Page
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/slick.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/slick-theme.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/rating.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Product Page</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">ECommerce</li>
		<li class="breadcrumb-item">Product</li>
		<li class="breadcrumb-item active">Product Page</li>
	<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div>
	        <div class="row product-page-main p-0">
	            <div class="col-xl-5 col-md-6 box-col-12 xl-50">
	                <div class="card">
	                    <div class="card-body">
	                        <div class="row">
	                            <div class="col-xl-12 product-main">
	                                <div>
	                                    <div><img class="img-fluid" src="<?php echo e(asset($product['logo_url'])); ?>" alt="" /></div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-5 box-col-6 proorder-xl-3 xl-100">
	                <div class="card">
	                    <div class="card-body">
	                        <div class="pro-group pt-0 border-0">
	                            <div class="product-page-details mt-0">
	                                <h3><?php echo e($product['name']); ?>.</h3>
	                                
	                            </div>
	                            <div class="product-price">
	                                $<?php echo e($product['local_price']['amount']); ?>

	                            </div>
	                            <br>
	                        </div>
	                        <div class="pro-group">
	                            <p><?php echo e($product['description']); ?>.</p>
	                        </div>
	                        
	                        
	                        <div class="pro-group pb-0">
	                            <div class="pro-shop">
	                                <a class="btn btn-primary m-r-10" href="javascript:void(0)" onclick="event.preventDefault; document.getElementById('cartSubmit<?php echo e($product['id']); ?>').submit()"> <i class="fa fa-shopping-basket me-2"></i><?php echo app('translator')->get('app.ecommerce.add_to_cart'); ?></a>
	                                <a class="btn btn-secondary mt-0" href="cart"><i class="fa fa-shopping-cart me-2"></i><?php echo app('translator')->get('app.ecommerce.buy_now'); ?></a>
	                            </div>
	                        </div>
                            <form id="cartSubmit<?php echo e($product['id']); ?>" method="post" action="<?php echo e(route('cart.store', $product['id'])); ?>">
                                <?php echo csrf_field(); ?>
                                <input type="hidden" name="productId" value="<?php echo e($product['id']); ?>">
                            </form>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-2 col-md-6 box-col-6 xl-50 proorder-lg-1">
	                <div class="card">
	                    <div class="card-body">
	                        <div class="collection-filter-block">
	                            <ul class="pro-services">
	                                <li>
	                                    <div class="media">
	                                        <i data-feather="truck"></i>
	                                        <div class="media-body">
	                                            <h5><?php echo app('translator')->get('app.ecommerce.free_shipping'); ?></h5>
	                                            <p><?php echo app('translator')->get('app.ecommerce.free_shipping_worldwide'); ?></p>
	                                        </div>
	                                    </div>
	                                </li>
	                                <li>
	                                    <div class="media">
	                                        <i data-feather="clock"></i>
	                                        <div class="media-body">
	                                            <h5><?php echo app('translator')->get('app.ecommerce.24_7_service'); ?></h5>
	                                            <p><?php echo app('translator')->get('app.ecommerce.online_service'); ?></p>
	                                        </div>
	                                    </div>
	                                </li>
	                            </ul>
	                        </div>
	                    </div>
	                    <!-- silde-bar colleps block end here-->
	                </div>
	            </div>
	        </div>
	    </div>
	</div>

	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/rating/jquery.barrating.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/rating/rating-script.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/slick-slider/slick.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/slick-slider/slick-theme.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/app/ecommerce/product/details.blade.php ENDPATH**/ ?>