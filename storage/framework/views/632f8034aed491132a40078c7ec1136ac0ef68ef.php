<div>
    <?php $__env->startPush('css'); ?>
        <?php echo \Livewire\Livewire::styles(); ?>


        <style>
            .loader-wrapper{
                opacity: 0.8;
            }
        </style>
    <?php $__env->stopPush(); ?>

    <div wire:poll='eventCheckout'></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Cart</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="order-history table-responsive wishlist">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Prdouct Name</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Action</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $__currentLoopData = $this->carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td>
                                                    <div>
                                                        <h6><?php echo e($this->getProduct($item->product_id)['name']); ?></h6>
                                                    </div>
                                                </td>
                                                <td>$<?php echo e($this->getProduct($item->product_id)['local_price']['amount']); ?></td>
                                                <td>
                                                    <fieldset class="qty-box">
                                                        <div class="input-group bootstrap-touchspin">
                                                            <button wire:click="quantityDown(<?php echo e($item['id']); ?>)" class="btn btn-primary btn-square bootstrap-touchspin-down" type="button"><i class="fa fa-minus"></i></button>
                                                                <input wire:model="quantity.<?php echo e($item['id']); ?>" class="text-center form-control" type="text" value="" style="display: block;">
                                                            <button wire:click="quantityUp(<?php echo e($item['id']); ?>)" class="btn btn-primary btn-square bootstrap-touchspin-up" type="button"><i class="fa fa-plus"></i></button>
                                                        </div>
                                                    </fieldset>
                                                </td>
                                                <td>
                                                    <div wire:click='removeProduct(<?php echo e($item['id']); ?>)'>
                                                        <span wire:ignore>
                                                            <i data-feather="x-circle"></i>
                                                        </span>
                                                    </div>
                                                </td>
                                                <td>$<?php echo e($item->quantity*$this->getProduct($item->product_id)['local_price']['amount']); ?></td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="text-end" colspan="10">
                                                <a class="btn btn-secondary cart-btn-transform" href="<?php echo e(route('product.index')); ?>">continue shopping</a>
                                                <a class="btn btn-primary cart-btn-transform" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#checkout">check out</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div wire:ignore.self class="modal fade" id="checkout">
                                    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Prdouct Name</th>
                                                            <th>Quantity</th>
                                                            <th>Price</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $this->carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <tr>
                                                                <td>
                                                                    <h6><?php echo e($this->getProduct($item->product_id)['name']); ?></h6>
                                                                </td>
                                                                <td>
                                                                    <h6><?php echo e($item->quantity); ?></h6>
                                                                </td>
                                                                <td><h6>$<?php echo e($this->getProduct($item->product_id)['local_price']['amount']); ?></h6></td>
                                                            </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <th colspan="10">
                                                                <h4 class="product-name">Total:
                                                                    <span align="right">$<?php echo e($total); ?></span>
                                                                </h4>
                                                            </th>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-footer">
                                                <button class="btn btn-danger cart-btn-transform" data-bs-dismiss="modal" aria-label="Close">Cancel</button>
                                                <button class="btn btn-primary cart-btn-transform" href="javascript:void(0)" wire:click="checkoutItem" wire:loading.attr="disabled" onclick="$('.loader-wrapper').show();">check out</button>
                                            </div>
                                        </div>
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
        <?php echo \Livewire\Livewire::scripts(); ?>


        <script>
            window.livewire.on('checkoutUrl', data => {
                window.open(data, '_blank');
            })
        </script>
    <?php $__env->stopPush(); ?>
</div><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/livewire/ecommerce/cart.blade.php ENDPATH**/ ?>