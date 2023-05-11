

<?php $__env->startSection('title'); ?>Tasks
 <?php echo e($title); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startPush('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/select2.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/date-picker.css')); ?>">
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>
	<?php $__env->startComponent('components.breadcrumb'); ?>
		<?php $__env->slot('breadcrumb_title'); ?>
			<h3>Tasks</h3>
		<?php $__env->endSlot(); ?>
		<li class="breadcrumb-item">Apps</li>
		<li class="breadcrumb-item active">Tasks</li>
	<?php if (isset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0)): ?>
<?php $component = $__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0; ?>
<?php unset($__componentOriginal04b5c99f4b0ecb1ac8b6cea23cbf13f14c9909f0); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
	
	<div class="container-fluid">
	    <div class="email-wrap bookmark-wrap">
	        <div class="row">
	            <div class="col-xl-3 box-col-4">
	                <div class="email-sidebar">
	                    <a class="btn btn-primary email-aside-toggle" href="javascript:void(0)">bookmark filter</a>
	                    <div class="email-left-aside">
	                        <div class="card">
	                            <div class="card-body">
	                                <div class="email-app-sidebar left-bookmark">
	                                    <div class="media">
	                                        <div class="media-size-email"><img class="me-3 rounded-circle" src="<?php echo e(asset('assets/images/user/user.png')); ?>" alt="" /></div>
	                                        <div class="media-body">
	                                            <h6 class="f-w-600"><?php echo e(auth()->user()->name); ?></h6>
	                                            
	                                        </div>
	                                    </div>
	                                    <ul class="nav main-menu" role="tablist">
	                                        <li class="nav-item">
	                                            
                                                <br>
	                                            <div class="modal fade modal-bookmark" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	                                                <div class="modal-dialog modal-lg" role="document">
	                                                    <div class="modal-content">
	                                                        <div class="modal-body">
	                                                            <form class="form-bookmark needs-validation" id="bookmark-form" novalidate="">
	                                                                <div class="form-row">
	                                                                    <div class="form-group col-md-12">
	                                                                        <label for="task-title">Task Title</label>
	                                                                        <input class="form-control" id="task-title" type="text" required="" autocomplete="off" />
	                                                                    </div>
	                                                                    <div class="form-group col-md-12">
	                                                                        <label for="sub-task">Sub task</label>
	                                                                        <input class="form-control" id="sub-task" type="text" required="" autocomplete="off" />
	                                                                    </div>
	                                                                    <div class="form-group col-md-12">
	                                                                        <div class="d-flex date-details">
	                                                                            <div class="d-inline-block">
	                                                                                <label class="d-block mb-0"> <input class="checkbox_animated" type="checkbox" />Remind on </label>
	                                                                            </div>
	                                                                            <div class="d-inline-block">
	                                                                                <input class="datepicker-here form-control digits" type="text" data-language="en" placeholder="Date" />
	                                                                            </div>
	                                                                            <div class="d-inline-block">
	                                                                                <select class="form-control">
	                                                                                    <option>7:00 am</option>
	                                                                                    <option>7:30 am</option>
	                                                                                    <option>8:00 am</option>
	                                                                                    <option>8:30 am</option>
	                                                                                    <option>9:00 am</option>
	                                                                                    <option>9:30 am</option>
	                                                                                    <option>10:00 am</option>
	                                                                                    <option>10:30 am</option>
	                                                                                    <option>11:00 am</option>
	                                                                                    <option>11:30 am</option>
	                                                                                    <option>12:00 pm</option>
	                                                                                    <option>12:30 pm</option>
	                                                                                    <option>1:00 pm</option>
	                                                                                    <option>2:00 pm</option>
	                                                                                    <option>3:00 pm</option>
	                                                                                    <option>4:00 pm</option>
	                                                                                    <option>5:00 pm</option>
	                                                                                    <option>6:00 pm</option>
	                                                                                </select>
	                                                                            </div>
	                                                                            <div class="d-inline-block">
	                                                                                <label class="d-block mb-0"> <input class="checkbox_animated" type="checkbox" />Notification </label>
	                                                                            </div>
	                                                                            <div class="d-inline-block">
	                                                                                <label class="d-block mb-0"> <input class="checkbox_animated" type="checkbox" />Mail </label>
	                                                                            </div>
	                                                                        </div>
	                                                                    </div>
	                                                                    <div class="row">
	                                                                        <div class="form-group col">
	                                                                            <select class="js-example-basic-single">
	                                                                                <option value="task">My Task</option>
	                                                                            </select>
	                                                                        </div>
	                                                                        <div class="form-group col">
	                                                                            <select class="js-example-disabled-results" id="bm-collection">
	                                                                                <option value="general">General</option>
	                                                                            </select>
	                                                                        </div>
	                                                                    </div>
	                                                                    <div class="form-group col-md-12 my-0">
	                                                                        <textarea class="form-control" required="" autocomplete="off"> </textarea>
	                                                                    </div>
	                                                                </div>
	                                                                <input id="index_var" type="hidden" value="6" />
	                                                                <button class="btn btn-secondary" id="Bookmark" onclick="submitBookMark()" type="submit">Save</button>
	                                                                <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
	                                                            </form>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </li>
	                                        <li class="nav-item"><span class="main-title">History</span></li>
	                                        <li>
	                                            <a id="order-history-tab" data-bs-toggle="pill" href="#order-history" role="tab" aria-controls="order-history" aria-selected="true"><span class="title"> Order History</span></a>
	                                        </li>
	                                        <li>
	                                            <a class="show" id="pills-tasks-tab" data-bs-toggle="pill" href="#pills-tasks" role="tab" aria-controls="pills-tasks" aria-selected="false"><span class="title">Ticket History</span></a>
	                                        </li>
	                                        <li>
	                                            <hr />
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-9 col-md-12 box-col-8">
	                <div class="email-right-aside bookmark-tabcontent">
	                    <div class="card email-body radius-left">
	                        <div class="ps-0">
	                            <div class="tab-content">
	                                <div class="tab-pane fade active show" id="order-history" role="tabpanel" aria-labelledby="order-history-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header">
	                                            <h5 class="mb-0">Order History</h5>
	                                            <a class="f-w-600" href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
	                                        </div>
	                                        <div class="card-body p-0">
	                                            <div class="taskadd">
	                                                <div class="table-responsive">
	                                                    <table class="table">
                                                            <thead>
                                                                <tr class="text-center">
                                                                    <th>Title</th>
                                                                    <th>Description</th>
                                                                    <th>Price</th>
                                                                    <th>Quantity</th>
                                                                    <th>Total</th>
                                                                </tr>
                                                            </thead>
	                                                        <tr class="text-center">
	                                                            <td>
	                                                                <h6 class="task_title_0">Man's Jacket</h6>
	                                                                <p class="project_name_0">Solid Denim</p>
	                                                            </td>
	                                                            <td>
	                                                                <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
	                                                            </td>
	                                                            <td>
	                                                                $20
	                                                            </td>
	                                                            <td>
                                                                    3
                                                                </td>
	                                                            <td>
                                                                    $60
                                                                </td>
	                                                        </tr>
	                                                    </table>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="fade tab-pane" id="pills-todaytask" role="tabpanel" aria-labelledby="pills-todaytask-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h6 class="mb-0">Today's Tasks</h6>
	                                            <a href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
	                                        </div>
	                                        <div class="card-body">
	                                            <div class="details-bookmark text-center">
	                                                <div class="row" id="favouriteData"></div>
	                                                <div class="no-favourite"><span>No task due today.</span></div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="fade tab-pane" id="pills-delayed" role="tabpanel" aria-labelledby="pills-delayed-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h6 class="mb-0">Delayed Tasks</h6>
	                                            <a href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
	                                        </div>
	                                        <div class="card-body">
	                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="fade tab-pane" id="pills-upcoming" role="tabpanel" aria-labelledby="pills-upcoming-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h6 class="mb-0">Upcoming Tasks</h6>
	                                            <a href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
	                                        </div>
	                                        <div class="card-body">
	                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="fade tab-pane" id="pills-weekly" role="tabpanel" aria-labelledby="pills-weekly-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h6 class="mb-0">This Week Tasks</h6>
	                                            <a href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
	                                        </div>
	                                        <div class="card-body">
	                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="fade tab-pane" id="pills-monthly" role="tabpanel" aria-labelledby="pills-monthly-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h6 class="mb-0">This Month Tasks</h6>
	                                            <a href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
	                                        </div>
	                                        <div class="card-body">
	                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="fade tab-pane" id="pills-assigned" role="tabpanel" aria-labelledby="pills-assigned-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h6 class="mb-0">Assigned to me</h6>
	                                            <a href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
	                                        </div>
	                                        <div class="card-body p-0">
	                                            <div class="taskadd">
	                                                <div class="table-responsive">
	                                                    <table class="table">
	                                                        <tr>
	                                                            <td>
	                                                                <h6 class="task_title_0">Ticket Name</h6>
	                                                                <p class="project_name_0">General</p>
	                                                            </td>
	                                                            <td>
	                                                                <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
	                                                            </td>
	                                                            <td>
	                                                                <a class="me-2" href="javascript:void(0)"><i data-feather="link"></i></a><a href="javascript:void(0)"><i data-feather="more-horizontal"></i></a>
	                                                            </td>
	                                                            <td>
	                                                                <a href="javascript:void(0)"><i data-feather="trash-2"></i></a>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td>
	                                                                <h6 class="task_title_0">Ticket Name</h6>
	                                                                <p class="project_name_0">General</p>
	                                                            </td>
	                                                            <td>
	                                                                <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
	                                                            </td>
	                                                            <td>
	                                                                <a class="me-2" href="javascript:void(0)"><i data-feather="link"></i></a><a href="javascript:void(0)"><i data-feather="more-horizontal"></i></a>
	                                                            </td>
	                                                            <td>
	                                                                <a href="javascript:void(0)"><i data-feather="trash-2"></i></a>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td>
	                                                                <h6 class="task_title_0">Ticket Name</h6>
	                                                                <p class="project_name_0">General</p>
	                                                            </td>
	                                                            <td>
	                                                                <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
	                                                            </td>
	                                                            <td>
	                                                                <a class="me-2" href="javascript:void(0)"><i data-feather="link"></i></a><a href="javascript:void(0)"><i data-feather="more-horizontal"></i></a>
	                                                            </td>
	                                                            <td>
	                                                                <a href="javascript:void(0)"><i data-feather="trash-2"></i></a>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td>
	                                                                <h6 class="task_title_0">Ticket Name</h6>
	                                                                <p class="project_name_0">General</p>
	                                                            </td>
	                                                            <td>
	                                                                <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
	                                                            </td>
	                                                            <td>
	                                                                <a class="me-2" href="javascript:void(0)"><i data-feather="link"></i></a><a href="javascript:void(0)"><i data-feather="more-horizontal"></i></a>
	                                                            </td>
	                                                            <td>
	                                                                <a href="javascript:void(0)"><i data-feather="trash-2"></i></a>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td>
	                                                                <h6 class="task_title_0">Ticket Name</h6>
	                                                                <p class="project_name_0">General</p>
	                                                            </td>
	                                                            <td>
	                                                                <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
	                                                            </td>
	                                                            <td>
	                                                                <a class="me-2" href="javascript:void(0)"><i data-feather="link"></i></a><a href="javascript:void(0)"><i data-feather="more-horizontal"></i></a>
	                                                            </td>
	                                                            <td>
	                                                                <a href="javascript:void(0)"><i data-feather="trash-2"></i></a>
	                                                            </td>
	                                                        </tr>
	                                                    </table>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="fade tab-pane" id="pills-tasks" role="tabpanel" aria-labelledby="pills-tasks-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h5 class="mb-0">Ticket History</h5>
	                                            <a href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
	                                        </div>
	                                        <div class="card-body p-0">
	                                            <div class="taskadd">
	                                                <div class="table-responsive">
	                                                    <table class="table">
	                                                        <tr>
	                                                            <td>
	                                                                <h6 class="task_title_0">Ticket Name</h6>
	                                                                <p class="project_name_0">General</p>
	                                                            </td>
	                                                            <td>
	                                                                <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
	                                                            </td>
	                                                            <td>
	                                                                <a class="me-2" href="javascript:void(0)"><i data-feather="link"></i></a><a href="javascript:void(0)"><i data-feather="more-horizontal"></i></a>
	                                                            </td>
	                                                            <td>
	                                                                <a href="javascript:void(0)"><i data-feather="trash-2"></i></a>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td>
	                                                                <h6 class="task_title_0">Ticket Name</h6>
	                                                                <p class="project_name_0">General</p>
	                                                            </td>
	                                                            <td>
	                                                                <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
	                                                            </td>
	                                                            <td>
	                                                                <a class="me-2" href="javascript:void(0)"><i data-feather="link"></i></a><a href="javascript:void(0)"><i data-feather="more-horizontal"></i></a>
	                                                            </td>
	                                                            <td>
	                                                                <a href="javascript:void(0)"><i data-feather="trash-2"></i></a>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td>
	                                                                <h6 class="task_title_0">Ticket Name</h6>
	                                                                <p class="project_name_0">General</p>
	                                                            </td>
	                                                            <td>
	                                                                <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
	                                                            </td>
	                                                            <td>
	                                                                <a class="me-2" href="javascript:void(0)"><i data-feather="link"></i></a><a href="javascript:void(0)"><i data-feather="more-horizontal"></i></a>
	                                                            </td>
	                                                            <td>
	                                                                <a href="javascript:void(0)"><i data-feather="trash-2"></i></a>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td>
	                                                                <h6 class="task_title_0">Ticket Name</h6>
	                                                                <p class="project_name_0">General</p>
	                                                            </td>
	                                                            <td>
	                                                                <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
	                                                            </td>
	                                                            <td>
	                                                                <a class="me-2" href="javascript:void(0)"><i data-feather="link"></i></a><a href="javascript:void(0)"><i data-feather="more-horizontal"></i></a>
	                                                            </td>
	                                                            <td>
	                                                                <a href="javascript:void(0)"><i data-feather="trash-2"></i></a>
	                                                            </td>
	                                                        </tr>
	                                                        <tr>
	                                                            <td>
	                                                                <h6 class="task_title_0">Ticket Name</h6>
	                                                                <p class="project_name_0">General</p>
	                                                            </td>
	                                                            <td>
	                                                                <p class="task_desc_0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been</p>
	                                                            </td>
	                                                            <td>
	                                                                <a class="me-2" href="javascript:void(0)"><i data-feather="link"></i></a><a href="javascript:void(0)"><i data-feather="more-horizontal"></i></a>
	                                                            </td>
	                                                            <td>
	                                                                <a href="javascript:void(0)"><i data-feather="trash-2"></i></a>
	                                                            </td>
	                                                        </tr>
	                                                    </table>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="fade tab-pane" id="pills-notification" role="tabpanel" aria-labelledby="pills-notification-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h6 class="mb-0">Notification</h6>
	                                            <a href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
	                                        </div>
	                                        <div class="card-body">
	                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="fade tab-pane" id="pills-newsletter" role="tabpanel" aria-labelledby="pills-newsletter-tab">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h6 class="mb-0">Newsletter</h6>
	                                            <a href="javascript:void(0)"><i class="me-2" data-feather="printer"></i>Print</a>
	                                        </div>
	                                        <div class="card-body">
	                                            <div class="details-bookmark text-center"><span>No tasks found.</span></div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="modal fade modal-bookmark" id="createtag" tabindex="-1" role="dialog" aria-hidden="true">
	                                    <div class="modal-dialog modal-lg" role="document">
	                                        <div class="modal-content">
	                                            <div class="modal-header">
	                                                <h5 class="modal-title">Create Tag</h5>
	                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
	                                            </div>
	                                            <div class="modal-body">
	                                                <form class="form-bookmark needs-validation" novalidate="">
	                                                    <div class="form-row">
	                                                        <div class="form-group col-md-12">
	                                                            <label>Tag Name</label>
	                                                            <input class="form-control" type="text" required="" autocomplete="off" />
	                                                        </div>
	                                                        <div class="form-group col-md-12 mb-0">
	                                                            <label>Tag color</label>
	                                                            <input class="form-control fill-color" type="color" value="#24695c" />
	                                                        </div>
	                                                    </div>
	                                                    <button class="btn btn-secondary" type="button">Save</button>
	                                                    <button class="btn btn-primary" type="button" data-bs-dismiss="modal">Cancel</button>
	                                                </form>
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
	</div>

	
	<?php $__env->startPush('scripts'); ?>
	<script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.en.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/datepicker/date-picker/datepicker.custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2.full.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/select2/select2-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/form-validation-custom.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/js/task/custom.js')); ?>"></script>
	<?php $__env->stopPush(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Laravel\Ecomm\resources\views/app/history/index.blade.php ENDPATH**/ ?>