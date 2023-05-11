<?php $__env->startPush('css'); ?>
<?php echo \Livewire\Livewire::styles(); ?>

<?php $__env->stopPush(); ?>

<div class="container-fluid product-wrapper">
    <div class="product-grid">
        <div class="feature-products">
            <div class="row m-b-10">
                <div class="col-md-3 col-sm-2 products-total">
                    <div class="square-product-setting d-inline-block">
                        <a class="icon-grid grid-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="grid"></i></a>
                    </div>
                    <div class="square-product-setting d-inline-block">
                        <a class="icon-grid m-0 list-layout-view" href="javascript:void(0)" data-original-title="" title=""><i data-feather="list"></i></a>
                    </div>
                    <div class="d-none-productlist filter-toggle">
                        <h6 class="mb-0">
                            Filters<span class="ms-2"><i class="toggle-data" data-feather="chevron-down"></i></span>
                        </h6>
                    </div>
                    <div class="grid-options d-inline-block">
                        <ul>
                            <li>
                                <a class="product-2-layout-view" href="javascript:void(0)" data-original-title="" title=""><span class="line-grid line-grid-1 bg-primary"></span><span class="line-grid line-grid-2 bg-primary"></span></a>
                            </li>
                            <li>
                                <a class="product-3-layout-view" href="javascript:void(0)" data-original-title="" title="">
                                    <span class="line-grid line-grid-3 bg-primary"></span><span class="line-grid line-grid-4 bg-primary"></span><span class="line-grid line-grid-5 bg-primary"></span>
                                </a>
                            </li>
                            <li>
                                <a class="product-4-layout-view" href="javascript:void(0)" data-original-title="" title="">
                                    <span class="line-grid line-grid-6 bg-primary"></span><span class="line-grid line-grid-7 bg-primary"></span><span class="line-grid line-grid-8 bg-primary"></span>
                                    <span class="line-grid line-grid-9 bg-primary"></span>
                                </a>
                            </li>
                            <li>
                                <a class="product-6-layout-view" href="javascript:void(0)" data-original-title="" title="">
                                    <span class="line-grid line-grid-10 bg-primary"></span><span class="line-grid line-grid-11 bg-primary"></span><span class="line-grid line-grid-12 bg-primary"></span>
                                    <span class="line-grid line-grid-13 bg-primary"></span><span class="line-grid line-grid-14 bg-primary"></span><span class="line-grid line-grid-15 bg-primary"></span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9 col-sm-10 text-end">
                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#customForm">Custom Order</button>
                </div>

                
            </div>
            <div wire:ignore.self class="modal fade" id="customForm">
                <div class="modal-dialog modal-md modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Custom Order</h5>
                            <button wire:click='resetQuantity' class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form>
                                <div class="mb-3">
                                    <label class="col-form-label" for="title">Title:</label>
                                    <input wire:model="title" class="form-control" type="text" value="Title" name="title">
                                    <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label" for="description">Description:</label>
                                    <input wire:model="description" class="form-control" name="description">
                                    <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label" for="description">Other Information:</label>
                                    <textarea wire:model="extended_description" class="form-control" name="extended_description"></textarea>
                                    <?php $__errorArgs = ['extended_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label" for="price">Price:</label>
                                    <input wire:model="price" class="form-control" type="number" name="price">
                                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" wire:click="resetQuantity" type="button" data-bs-dismiss="modal">Close</button>
                            <button class="btn btn-primary" wire:click="submitCustom" type="button">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-wrapper-grid" wire:ignore>
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-3 col-sm-6 xl-4">
                        <div class="card">
                            <div class="product-box">
                                <div class="product-img">
                                    
                                    <img class="img-fluid" src="<?php echo e($item['logo_url']); ?>" alt="" />
                                    
                                    <div class="product-hover">
                                        <ul>
                                            <li>
                                                <a href="#" onclick="event.preventDefault; document.getElementById('cartSubmit<?php echo e($item['id']); ?>').submit()"><i class="icon-shopping-cart"></i></a>
                                            </li>
                                            <li>
                                                <a data-bs-toggle="modal" data-bs-target="#productDetails<?php echo e($item['id']); ?>"><i class="icon-eye"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div wire:ignore.self class="modal fade " id="productDetails<?php echo e($item['id']); ?>">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="product-box row">
                                                    <div class="product-img col-lg-6"><img class="img-fluid" src="<?php echo e($item['logo_url']); ?>" alt="" /></div>
                                                    <div class="product-details col-lg-6 text-start">
                                                        <a href="product-page"> <h4><?php echo e($item['name']); ?></h4></a>
                                                        <div class="product-price">
                                                            $<?php echo e($item['local_price']['amount']); ?>

                                                        </div>
                                                        <div class="product-view">
                                                            <h6 class="f-w-600"><?php echo app('translator')->get('app.ecommerce.product_details'); ?></h6>
                                                            <p class="mb-0"><?php echo e($item['description']); ?></p>
                                                        </div>
                                                        <div class="product-qnty">
                                                            <h6 class="f-w-600"><?php echo app('translator')->get('app.quantity'); ?></h6>
                                                            <fieldset>
                                                                <div class="input-group bootstrap-touchspin">
                                                                    <button wire:click="quantityDown" class="btn btn-primary btn-square" type="button" data-bs-original-title="" title="">
                                                                        <i class="fa fa-minus"></i>
                                                                    </button>
                                                                        <input wire:model="quantity" class=" text-center form-control" type="text" value="" style="display: block;" data-bs-original-title="" title="">
                                                                    <button wire:click="quantityUp" class="btn btn-primary btn-square" type="button" data-bs-original-title="" title="">
                                                                        <i class="fa fa-plus"></i>
                                                                    </button>
                                                                </div>
                                                            </fieldset>
                                                            <div class="addcart-btn">
                                                                <a class="btn btn-primary me-3" href="#" onclick="event.preventDefault; document.getElementById('cartSubmit<?php echo e($item['id']); ?>').submit()"><?php echo app('translator')->get('app.ecommerce.add_to_cart'); ?></a>
                                                                <a class="btn btn-primary" href="<?php echo e(route('product.details', $item['id'])); ?>"><?php echo app('translator')->get('app.ecommerce.view_details'); ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button wire:click="resetQuantity" class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <form id="cartSubmit<?php echo e($item['id']); ?>" method="post" action="<?php echo e(route('cart.store', $item['id'])); ?>">
                                    <?php echo csrf_field(); ?>
                                    <input type="hidden" name="productId" value="<?php echo e($item['id']); ?>">
                                    <input type="hidden" name="quantity" wire:model="quantity">
                                </form>
                                
                                <div class="product-details">
                                    <a href="product-page"> <h4><?php echo e($item['name']); ?></h4></a>
                                    
                                    <div class="product-price">
                                        $<?php echo e($item['local_price']['amount']); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <?php echo \Livewire\Livewire::scripts(); ?>

<?php $__env->stopPush(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/livewire/ecommerce/product.blade.php ENDPATH**/ ?>