@extends('layouts.admin.master')

@section('title')Table Components
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Table Components</h3>
		@endslot
		<li class="breadcrumb-item">Tables</li>
		<li class="breadcrumb-item">Bootstrap Tables</li>
		<li class="breadcrumb-item active">Table Components</li>
	@endcomponent
	
	<div class="container-fluid">
		<!-- Table Row Starts-->
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>UI Components</h5>
					</div>
					<div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td>Button</td>
												<td class="w-50">
													<button class="btn btn-primary">Default Button</button>
												</td>
												<td><span>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</span></td>
											</tr>
											<tr>
												<td>Round Buttons</td>
												<td>
													<button class="btn btn-pill btn-primary">Default Button</button>
												</td>
												<td>
													<span>Use <code>.btn-pill</code> class to button for Round Buttons.</span>
												</td>
											</tr>
											<tr>
												<td>Button dropdowns</td>
												<td>
													<button class="btn btn-primary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Primary</button>
													<div class="dropdown-menu">
														<h6 class="dropdown-header">Dropdown header</h6>
														<a class="dropdown-item" href="javascript:void(0)">Action</a><a class="dropdown-item" href="javascript:void(0)">Another action</a>
														<a class="dropdown-item" href="javascript:void(0)">Something else here</a>
														<div class="dropdown-divider"></div>
														<a class="dropdown-item" href="javascript:void(0)">Separated link</a>
													</div>
												</td>
												<td>
													<span>Use <code>.dropdown-toggle</code> class to button for Dropdown-toggle.</span>
												</td>
											</tr>
											<tr>
												<td>Basic Button group</td>
												<td>
													<div class="btn-group">
														<button class="btn btn-primary">Primary</button>
														<button class="btn btn-secondary">Secondary</button>
														<button class="btn btn-danger">Danger</button>
														<button class="btn btn-warning">Warning</button>
													</div>
												</td>
												<td>
													<span>Use <code>btn-group</code> class to button for <code>div</code>.</span>
												</td>
											</tr>
											<tr>
												<td>Buttons with Icon</td>
												<td>
													<button class="btn btn-primary"><i class="fa fa-info-circle"></i> Primary</button>
												</td>
												<td><span>Bootstrap includes six predefined button styles, each serving its own semantic purpose.</span></td>
											</tr>
											<tr>
												<td>Icon Button</td>
												<td>
													<button class="btn btn-primary"><i class="fa fa-camera"></i></button>
												</td>
												<td><span>Simple Icon Button</span></td>
											</tr>
											<tr>
												<td>Loading Buttons</td>
												<td>
													<button class="btn btn-primary"><i class="fa fa-spin fa-spinner me-2"></i>Expand UP</button>
												</td>
												<td><span>Expand Animation Buttons</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Alerts</h5>
					</div>
					<div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td>Basic Alert</td>
												<td class="w-50">
													<div class="alert alert-primary">
														<p class="font-light"><strong>Success!</strong> Indicates a successful or positive action.</p>
													</div>
												</td>
												<td>
													<p>
														<span>
															Alerts are available for any length of text, as well as an optional dismiss button. Add <code> alert alert-primary</code>,<code> alert alert-secondary</code>,
															<code> alert alert-success</code>,<code> alert alert-info</code> classes for alert with all theme colors.
														</span>
													</p>
												</td>
											</tr>
											<tr>
												<td>Alerts with Links</td>
												<td>
													<div class="alert alert-primary">
														<p class="font-light"><strong>Success!</strong> You should <a class="alert-link" href="javascript:void(0)">read this message</a>.</p>
													</div>
												</td>
												<td>
													<p>
														<span>
															Alerts are available for any length of text, as well as an optional dismiss button. Add <code> alert alert-primary</code>,<code> alert alert-secondary</code>,
															<code> alert alert-success</code>,<code> alert alert-info</code> classes for alert with all theme colors.
														</span>
													</p>
												</td>
											</tr>
											<tr>
												<td>Dismissible Alerts</td>
												<td>
													<div class="alert alert-secondary alert-dismissible fade show" role="alert">
														<p class="font-light"><strong>Holy !</strong> You can check in on some of those fields below.</p>
														<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
													</div>
												</td>
												<td>
													<span>
														Add a dismiss button and the<code> alert alert-dismissable</code>class, which adds extra padding to the right of the alert and positions the<code>close</code>a link On the dismiss button,
														add the data-bs-dismiss="alert" attribute, which triggers the JavaScript functionality. Be sure to use the<code>a</code>element with it for proper behavior across all devices. To animate
														alerts when dismissing them, be sure to add the .fade and .in classes.
													</span>
												</td>
											</tr>
											<tr>
												<td>Alerts with icons</td>
												<td>
													<div class="alert alert-primary inverse alert-dismissible fade show" role="alert">
														<i class="icofont icofont-heart-alt"></i>
														<p>Good Morning! Start your day with some alerts.</p>
														<button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
													</div>
												</td>
												<td>
													<span>
														Add a dismiss button and the<code> alert alert-dismissable</code>class, which adds extra padding to the right of the alert and positions the<code>close</code>a link On the dismiss button,
														add the data-bs-dismiss="alert" attribute, which triggers the JavaScript functionality. Be sure to use the<code>a</code>element with it for proper behavior across all devices. To animate
														alerts when dismissing them, be sure to add the .fade and .in classes.
													</span>
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
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Progressbar</h5>
					</div>
					<div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table class="table table-bordered checkbox-td-width">
										<tbody>
											<tr>
												<td>Default Progress</td>
												<td class="w-50">
													<div class="progress">
														<div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td>
													<span>Uses a progress bar with class<code>progress-bar</code> and background color<code>bg-primary, bg-secondary</code>also change</span>
												</td>
											</tr>
											<tr>
												<td>Striped Progress</td>
												<td>
													<div class="progress">
														<div class="progress-bar progress-bar-striped bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td>
													<span>Uses a gradient to create a striped effect class.<code>progress-bar-striped</code></span>
												</td>
											</tr>
											<tr>
												<td>Progress Sizes</td>
												<td>
													<div class="progress lg-progress-bar">
														<div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
													</div>
												</td>
												<td><span>Different sized progress. For Default progress, class need<code>lg-progress-bar</code>on div.</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CHECKBOXES Row Starts-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Checkbox</h5>
					</div>
					<div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table class="table table-bordered checkbox-td-width">
										<tbody>
											<tr>
												<td>Basic Checkbox</td>
												<td class="w-50">
													<input id="checkbox1" type="checkbox" />
													<label for="checkbox1">Default</label>
												</td>
												<td><span>Basic Checkbox</span></td>
											</tr>
											<tr>
												<td>Default Checkbox Squar</td>
												<td>
													<div class="checkbox m-squar">
														<input id="checkbox3" type="checkbox" />
														<label for="checkbox3">Default</label>
													</div>
												</td>
												<td>
													<span>Wrap with use <code>.m-squar</code> checkbox.</span>
												</td>
											</tr>
											<tr>
												<td>Basic Skin Check</td>
												<td>
													<div class="checkbox checkbox-dark">
														<input id="checkbox-state-dark" type="checkbox" />
														<label for="checkbox-state-dark">Brand state</label>
													</div>
												</td>
												<td><span>Wrap with use<code>checkbox-dark</code>for this style of checkbox.</span></td>
											</tr>
											<tr>
												<td>Flat Skin Check</td>
												<td>
													<div class="checkbox checkbox-solid-primary">
														<input id="solid6" type="checkbox" checked="" />
														<label for="solid6">checked</label>
													</div>
												</td>
												<td>
													<span>Wrap with use<code>checkbox-solid-*</code>,<code>primary, secondary, success, info, warning, danger</code>for this style of checkbox.</span>
												</td>
											</tr>
											<tr>
												<td>Disable Check</td>
												<td>
													<div class="checkbox checkbox-solid-primary">
														<input id="solid2" type="checkbox" disabled="" />
														<label for="solid2">Disabled</label>
													</div>
												</td>
												<td>
													<span>Wrap with use<code>disabled</code>,<code>primary, secondary, success, info, warning, danger</code>for this style of checkbox disable.</span>
												</td>
											</tr>
											<tr>
												<td>Inline Checkbox</td>
												<td>
													<div class="form-group m-b-0 m-checkbox-inline">
														<div class="checkbox checkbox-primary">
															<input id="inline-1" type="checkbox" />
															<label for="inline-1">Option 1</label>
														</div>
														<div class="checkbox checkbox-secondary">
															<input id="inline-2" type="checkbox" />
															<label for="inline-2">Option 1</label>
														</div>
														<div class="checkbox checkbox-success">
															<input id="inline-3" type="checkbox" />
															<label for="inline-3">Option 1</label>
														</div>
													</div>
												</td>
												<td>
													<span>Wrap with use<code>disabled</code>,<code>primary, secondary, success, info, warning, danger</code>for this style of checkbox disable.</span>
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
			<!-- CHECKBOXES Row Ends-->
			<!-- Radio Row Starts-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Radio Buttons</h5>
					</div>
					<div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table class="table table-bordered radio-first-col-width">
										<tbody>
											<tr>
												<td>Basic Radio Buttons</td>
												<td class="w-50">
													<input id="radio" type="radio" />
													<label for="radio">Default radio</label>
												</td>
												<td><span>Basic Radio Buttons</span></td>
											</tr>
											<tr>
												<td>Default Radio</td>
												<td>
													<div class="radio radio-primary">
														<input id="radio1" type="radio" name="radio1" value="option1" />
														<label for="radio1">Option 1</label>
													</div>
												</td>
												<td>
													<span>Wrap with use <code>.radio-*</code> and color <code>.radio-*</code><code>primary , secondary , success , info</code> on Radio.</span>
												</td>
											</tr>
											<tr>
												<td>Checked Radio</td>
												<td>
													<div class="radio radio-primary">
														<input id="radio44" type="radio" name="radio1" value="option1" checked="" />
														<label for="radio44">Checked</label>
													</div>
												</td>
												<td><span>Wrap with use<code>checkbox-dark</code>for this style of checkbox.</span></td>
											</tr>
											<tr>
												<td>Flat Skin Check</td>
												<td>
													<div class="radio radio-primary">
														<input id="radio33" type="radio" name="radio1" value="option1" disabled="" />
														<label for="radio33">Disabled</label>
													</div>
												</td>
												<td>
													<span>Wrap with use<code>checkbox-solid-*</code>,<code>primary, secondary, success, info, warning, danger</code>for this style of checkbox.</span>
												</td>
											</tr>
											<tr>
												<td>Inline Checkbox</td>
												<td>
													<div class="form-group m-b-0 m-checkbox-inline">
														<div class="radio radio-primary">
															<input id="radioinline1" type="radio" name="radio1" value="option1" />
															<label for="radioinline1">Option 1</label>
														</div>
														<div class="radio radio-secondary">
															<input id="radioinline2" type="radio" name="radio1" value="option1" />
															<label for="radioinline2">Option 1</label>
														</div>
														<div class="radio radio-success">
															<input id="radioinline3" type="radio" name="radio1" value="option1" />
															<label for="radioinline3">Option 1</label>
														</div>
													</div>
												</td>
												<td>
													<span>Wrap with use<code>disabled</code>,<code>primary, secondary, success, info, warning, danger, light, dark</code>for this style of checkbox disable.</span>
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
			<!-- Radio Row Ends-->
			<!-- Select Row Starts-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Select</h5>
					</div>
					<div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table class="table table-bordered checkbox-td-width">
										<tbody>
											<tr>
												<td>Single Select</td>
												<td class="w-50">
													<select class="form-control" id="exampleFormControlSelect45">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</td>
												<td><span>Use for basic select control.</span></td>
											</tr>
											<tr>
												<td>Disabled Select Mode</td>
												<td>
													<select class="form-control" id="exampleFormControlSelect4" disabled="">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</td>
												<td>
													<span>Use for disabled select control add <code>disabled</code>.</span>
												</td>
											</tr>
											<tr>
												<td>Large Select Mode</td>
												<td>
													<select class="form-control form-control-lg mb-10" id="exampleFormControlSelect1">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
													<select class="form-control form-control-sm mt-5 mb-10" id="exampleFormControlSelect3">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</td>
												<td>
													<span>Use for large and small select control add class<code>form-control-*</code><code>lg, sm</code>.</span>
												</td>
											</tr>
											<tr>
												<td>Example multiple select</td>
												<td>
													<select class="form-control" id="exampleFormControlSelect22" multiple="">
														<option>1</option>
														<option>2</option>
														<option>3</option>
														<option>4</option>
														<option>5</option>
													</select>
												</td>
												<td>
													<span>Use for multi select control add code <code>multiple</code>on select.</span>
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
			<!-- Select Row Ends-->
			<!-- Input Row Starts-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Input</h5>
					</div>
					<div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table class="table table-bordered checkbox-td-width">
										<tbody>
											<tr>
												<td>Default Input text</td>
												<td class="w-50">
													<input class="form-control input-primary" id="exampleFormControlInput1" type="email" placeholder="Input text" />
												</td>
												<td><span>Use for basic select control.</span></td>
											</tr>
											<tr>
												<td>Input Hover Color</td>
												<td class="w-50">
													<input class="form-control" id="exampleFormControlInput2" type="email" placeholder="Input text" />
												</td>
												<td>
													<span>Use for basic input color add class<code>input-air-*</code><code>primary, secondary, success, info</code>.on input</span>
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
			<!-- Input Row Ends-->
			<!-- Badges Row Starts-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Badges</h5>
					</div>
					<div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td class="pills-component">Basic Pills</td>
												<td class="w-50"><span class="badge badge-primary">Primary</span></td>
												<td>
													<span>
														Use the <code>.badge</code> class, followed by. with badge color use class <code>.badge-*</code><code>primary , secondary , success , info, warning, danger, light</code> class within
														element to create default pill.
													</span>
												</td>
											</tr>
											<tr>
												<td>Label With Icon</td>
												<td class="w-50 m-5">
													<div class="badge badge-primary label-square"><i class="fa fa-paperclip fa-lg p-r-5"></i><span class="f-14">Primary Label</span></div>
												</td>
												<td>
													<span>Use the <code>label-square</code> class with <code>div</code></span>
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
			<!-- Badges Row Ends-->
			<!-- Tooltip  Row Starts-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>Tooltip Triggers</h5>
					</div>
					<div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td>Hover</td>
												<td class="w-50">
													<button class="btn btn-primary" type="button" data-original-title="btn btn-link btn-lg" title="Hover">Primary</button>
												</td>
												<td><span>Use data-bs-toggle="tooltip" for hover trigger. This is a default trigger</span></td>
											</tr>
											<tr>
												<td>Link</td>
												<td class="w-50"><a class="btn btn-primary" href="javascript:void(0)" data-bs-toggle="tooltip" title="" role="button" data-original-title="Hooray!">Link</a></td>
												<td>
													<span>Use <code>a href="javascript:void(0)"</code> for link trigger. This is a link trigger</span>
												</td>
											</tr>
											<tr>
												<td>outline button</td>
												<td class="w-50">
													<button class="btn btn-outline-primary" type="button" data-original-title="btn btn-outline-danger-2x" title="">Primary</button>
												</td>
												<td>
													<span>Use <code>btn btn-outline-info</code> for outline trigger. and button bold Border use class<code>btn btn-outline-dark-2x</code></span>
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
			<!-- Tooltip Row Ends-->
			<!-- Switch Row Starts-->
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">
						<h5>SWITCH</h5>
					</div>
					<div>
						<div class="card-block row">
							<div class="col-sm-12 col-lg-12 col-xl-12">
								<div class="table-responsive">
									<table class="table table-bordered">
										<tbody>
											<tr>
												<td class="pills-component">Default Switch</td>
												<td class="w-50">
													<label class="switch"> <input type="checkbox" checked="" /><span class="switch-state"></span> </label>
												</td>
												<td>
													<span>Use class <code>switch</code> for label.</span>
												</td>
											</tr>
											<tr>
												<td>Disable Switch</td>
												<td class="w-50">
													<label class="switch"> <input type="checkbox" disabled="" /><span class="switch-state"></span> </label>
												</td>
												<td>
													<span>this Disable Switch <code>disabled</code></span>
												</td>
											</tr>
											<tr>
												<td>Switch Color</td>
												<td class="w-50">
													<div class="media-body icon-state">
														<label class="switch"> <input type="checkbox" checked="" /><span class="switch-state bg-primary"></span> </label>
													</div>
												</td>
												<td>
													<span>Use class <code>bg-*</code><code>Primary , Secondary , Success , Info , Warning , Danger</code>in span with icon show switch <code>icon-state</code>on div.</span>
												</td>
											</tr>
											<tr>
												<td>Switch Outline</td>
												<td class="w-50">
													<div class="media-body icon-state switch-outline">
														<label class="switch"> <input type="checkbox" checked="" /><span class="switch-state bg-primary"></span> </label>
													</div>
												</td>
												<td>
													<span>Use class <code>switch-outline</code>on div.</span>
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
			<!-- Switch Row Ends-->
			<!-- Table Row Ends-->
		</div>
	</div>	
	
	@push('scripts')
	@endpush

@endsection