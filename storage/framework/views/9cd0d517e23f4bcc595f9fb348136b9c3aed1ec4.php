

<?php $__env->startSection('title'); ?>Blog
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Blog</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Blog</li>
		<li class="breadcrumb-item active">Latest Blog</li>
	<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid blog-page">
	    <div class="row">
	        <?php if(count($posts) > 0): ?>
				<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="col-sm-6 col-xl-3 box-col-6 des-xl-50">
						<div class="card">
							<div class="blog-box blog-grid">
								<div class="blog-wrraper">
									<a href="<?php echo e(route('blog.show', $item->id)); ?>"><img class="img-fluid top-radius-blog" src="<?php echo e(asset($item->photo) ?? asset('assets/images/blog/blog-5.jpg')); ?>" alt="<?php echo e($item->title); ?>" /></a>
								</div>
								<div class="blog-details-second">
									<div class="blog-post-date">
										<span class="blg-month"><?php echo e(Carbon\Carbon::parse($item->created_at)->format('M')); ?></span>
										<span class="blg-date"><?php echo e(Carbon\Carbon::parse($item->created_at)->format('d')); ?></span>
									</div>
									<a href="blog-single.html"> <h6 class="blog-bottom-details"><?php echo e($item->title); ?></h6></a>
									<p><?php echo e(Illuminate\Support\Str::limit($item->description, 30)); ?></p>
									<div class="detail-footer">
										<ul class="sociyal-list">
											<li><i class="fa fa-user-o"></i><?php echo e(App\Models\User::getUser($item->user_id)->username); ?></li>
											<li><i class="fa fa-comments-o"></i>5</li>
											<li><i class="fa fa-thumbs-o-up"></i>2 like</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php else: ?>
				<h3 class="text-center">
					No Blog Posts Yet
				</h3>
			<?php endif; ?>
	    </div>
	</div>

	
	<?php $__env->startPush('scripts'); ?>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/app/blog/index.blade.php ENDPATH**/ ?>