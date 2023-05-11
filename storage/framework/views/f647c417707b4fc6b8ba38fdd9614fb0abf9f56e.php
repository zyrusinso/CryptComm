

<?php $__env->startSection('title'); ?>Blog Details
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Blog Details</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Blog</li>
		<li class="breadcrumb-item active">Blog Details</li>
	<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="blog-single">
	                <div class="blog-box blog-details">
	                    <div class="banner-wrraper"><img class="img-fluid w-100 bg-img-cover" src="<?php echo e(asset($post->photo) ?? asset('assets/images/blog/blog-5.jpg')); ?>" alt="blog-main" /></div>
	                    <div class="card">
	                        <div class="card-body">
	                            <div class="blog-details">
	                                <ul class="blog-social">
	                                    <li><?php echo e(Carbon\Carbon::parse($post->created_at)->format('M d Y')); ?></li>
	                                    <li><i class="icofont icofont-user"></i><?php echo e(App\Models\User::getUser($post->user_id)->username); ?></li>
	                                    
	                                </ul>
	                                <h4>
	                                    <?php echo e($post->title); ?>

	                                </h4>
	                                <div class="single-blog-content-top">
	                                    <p>
	                                        <?php echo e($post->description); ?>

	                                    </p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                
	            </div>
	        </div>
	    </div>
	</div>

	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/app/blog/show.blade.php ENDPATH**/ ?>