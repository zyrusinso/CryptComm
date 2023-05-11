

<?php $__env->startSection('title'); ?>Dashboard <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/date-picker.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/owlcarousel.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/prism.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/whether-icon.css')); ?>">
<?php $__env->stopPush(); ?>
    <?php $__env->startSection('content'); ?>
        <?php $__env->startComponent('components.breadcrumb'); ?>
            <?php $__env->slot('breadcrumb_title'); ?>
                <h3><?php echo app('translator')->get('app.dashboard.dashboard'); ?></h3>
            <?php $__env->endSlot(); ?>
        <?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="database"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Earnings</span>
                                    <h4 class="mb-0 counter">6659</h4>
                                    <i class="icon-bg" data-feather="database"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-secondary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Products</span>
                                    <h4 class="mb-0 counter">9856</h4>
                                    <i class="icon-bg" data-feather="shopping-bag"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="message-circle"></i></div>
                                <div class="media-body">
                                    <span class="m-0">Messages</span>
                                    <h4 class="mb-0 counter">893</h4>
                                    <i class="icon-bg" data-feather="message-circle"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <div class="card o-hidden border-0">
                        <div class="bg-primary b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="user-plus"></i></div>
                                <div class="media-body">
                                    <span class="m-0">New User</span>
                                    <h4 class="mb-0 counter">4531</h4>
                                    <i class="icon-bg" data-feather="user-plus"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 xl-100 box-col-12">
                    <div class="widget-joins card widget-arrow">
                        <div class="row">
                            <div class="col-sm-6 pe-0">
                                <div class="media border-after-xs">
                                    <div class="align-self-center me-3 text-start">
                                        <span class="widget-t mb-1">Sale</span>
                                        <h5 class="mb-0">Today</h5>
                                    </div>
                                    <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-down"></i></div>
                                    <div class="media-body">
                                        <h5 class="mb-0">$<span class="counter">25698</span></h5>
                                        <span class="mb-1">-$2658(36%)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ps-0">
                                <div class="media">
                                    <div class="align-self-center me-3 text-start">
                                        <span class="widget-t mb-1">Sale</span>
                                        <h5 class="mb-0">Month</h5>
                                    </div>
                                    <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                                    <div class="media-body ps-2">
                                        <h5 class="mb-0">$<span class="counter">6954</span></h5>
                                        <span class="mb-1">+$369(15%)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 pe-0">
                                <div class="media border-after-xs">
                                    <div class="align-self-center me-3 text-start">
                                        <span class="widget-t mb-1">Sale</span>
                                        <h5 class="mb-0">Week</h5>
                                    </div>
                                    <div class="media-body align-self-center"><i class="font-primary" data-feather="arrow-up"></i></div>
                                    <div class="media-body">
                                        <h5 class="mb-0">$<span class="counter">63147</span></h5>
                                        <span class="mb-1">+$69(65%)</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 ps-0">
                                <div class="media">
                                    <div class="align-self-center me-3 text-start">
                                        <span class="widget-t mb-1">Sale</span>
                                        <h5 class="mb-0">Year</h5>
                                    </div>
                                    <div class="media-body align-self-center ps-3"><i class="font-primary" data-feather="arrow-up"></i></div>
                                    <div class="media-body ps-2">
                                        <h5 class="mb-0">$<span class="counter">963198</span></h5>
                                        <span class="mb-1">+$3654(90%)          </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 xl-100 box-col-12">
                    <div class="widget-joins card">
                        <div class="row">
                            <div class="col-sm-6 pe-0">
                                <div class="media border-after-xs">
                                    <div class="align-self-center me-3">68%<i class="fa fa-angle-up ms-2"></i></div>
                                    <div class="media-body details ps-3">
                                        <span class="mb-1">New</span>
                                        <h5 class="mb-0 counter">6982</h5>
                                    </div>
                                    <div class="media-body align-self-center"><i class="font-primary float-end ms-2" data-feather="shopping-bag"></i></div>
                                </div>
                            </div>
                            <div class="col-sm-6 ps-0">
                                <div class="media">
                                    <div class="align-self-center me-3">12%<i class="fa fa-angle-down ms-2"></i></div>
                                    <div class="media-body details ps-3">
                                        <span class="mb-1">Pending</span>
                                        <h5 class="mb-0 counter">783</h5>
                                    </div>
                                    <div class="media-body align-self-center"><i class="font-primary float-end ms-3" data-feather="layers"></i></div>
                                </div>
                            </div>
                            <div class="col-sm-6 pe-0">
                                <div class="media border-after-xs">
                                    <div class="align-self-center me-3">68%<i class="fa fa-angle-up ms-2"></i></div>
                                    <div class="media-body details ps-3 pt-0">
                                        <span class="mb-1">Done</span>
                                        <h5 class="mb-0 counter">3674</h5>
                                    </div>
                                    <div class="media-body align-self-center"><i class="font-primary float-end ms-2" data-feather="shopping-cart"></i></div>
                                </div>
                            </div>
                            <div class="col-sm-6 ps-0">
                                <div class="media">
                                    <div class="align-self-center me-3">68%<i class="fa fa-angle-up ms-2"></i></div>
                                    <div class="media-body details ps-3 pt-0">
                                        <span class="mb-1">Cancel</span>
                                        <h5 class="mb-0 counter">069</h5>
                                    </div>
                                    <div class="media-body align-self-center"><i class="font-primary float-end ms-2" data-feather="dollar-sign"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 xl-100 box-col-12">
                    <div class="card">
                        <div class="card-header pb-0 d-flex justify-content-between align-items-center">
                            <h5>PRODUCTS CART</h5>
                            <div class="setting-list">
                                <ul class="list-unstyled setting-option">
                                    <li>
                                        <div class="setting-primary"><i class="icon-settings"></i></div>
                                    </li>
                                    <li><i class="view-html fa fa-code font-primary"></i></li>
                                    <li><i class="icofont icofont-maximize full-card font-primary"></i></li>
                                    <li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
                                    <li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
                                    <li><i class="icofont icofont-error close-card font-primary"></i></li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="user-status table-responsive">
                                <table class="table table-bordernone">
                                    <thead>
                                        <tr>
                                            <th scope="col">Details</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="f-w-600">Simply dummy text of the printing</td>
                                            <td>1</td>
                                            <td class="font-primary">Pending</td>
                                            <td>
                                                <div class="span badge rounded-pill pill-badge-secondary">6523</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="f-w-600">Long established</td>
                                            <td>5</td>
                                            <td class="font-secondary">Cancle</td>
                                            <td>
                                                <div class="span badge rounded-pill pill-badge-success">6523</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="f-w-600">sometimes by accident</td>
                                            <td>10</td>
                                            <td class="font-secondary">Cancle</td>
                                            <td>
                                                <div class="span badge rounded-pill pill-badge-warning">6523</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="f-w-600">Classical Latin literature</td>
                                            <td>9</td>
                                            <td class="font-primary">Return</td>
                                            <td>
                                                <div class="span badge rounded-pill pill-badge-primary">6523</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="f-w-600">keep the site on the Internet</td>
                                            <td>8</td>
                                            <td class="font-primary">Pending</td>
                                            <td>
                                                <div class="span badge rounded-pill pill-badge-danger">6523</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="f-w-600">Molestiae consequatur</td>
                                            <td>3</td>
                                            <td class="font-secondary">Cancle</td>
                                            <td>
                                                <div class="span badge rounded-pill pill-badge-info">6523</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="f-w-600">Pain can procure</td>
                                            <td>8</td>
                                            <td class="font-primary">Return</td>
                                            <td>
                                                <div class="span badge rounded-pill pill-badge-primary">6523</div>
                                            </td>
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
        <script src="<?php echo e(asset('assets/js/prism/prism.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/clipboard/clipboard.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/counter/jquery.waypoints.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/counter/jquery.counterup.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/counter/counter-custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/custom-card/custom-card.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/owlcarousel/owl.carousel.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/general-widget.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/height-equal.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/js/tooltip-init.js')); ?>"></script>
    <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/app/user/dashboard.blade.php ENDPATH**/ ?>