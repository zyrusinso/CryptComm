@extends('layouts.admin.master')

@section('title')Mega options
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Mega options</h3>
		@endslot
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item">Form Controls</li>
        <li class="breadcrumb-item active">Mega options</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Default Style</h5>
						<span>This option is show buydefault you don’t need to add any extra class</span>
					</div>
					<div class="card-body megaoptions-border-space-sm">
						<form class="mega-inline">
							<div class="row">
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-primary me-3">
												<input id="radio14" type="radio" name="radio1" value="option1" />
												<label for="radio14"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">COD<span class="badge badge-primary pull-right digits">50 INR</span></h6>
												<p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-secondary me-3">
												<input id="radio13" type="radio" name="radio1" value="option1" />
												<label for="radio13"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">Fast<span class="badge badge-secondary pull-right digits">100 INR</span></h6>
												<p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="card-footer text-end">
						<button class="btn btn-primary m-r-15" type="submit">Submit</button>
						<button class="btn btn-light" type="submit">Cancel</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>No Border</h5>
						<span>By adding .plain-style class to .mega-inline You can archive this style</span>
					</div>
					<div class="card-body">
						<form class="mega-inline plain-style">
							<div class="row">
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-primary me-3">
												<input id="radio11" type="radio" name="radio1" value="option1" />
												<label for="radio11"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">COD<span class="badge badge-primary pull-right digits">50 INR</span></h6>
												<p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-secondary me-3">
												<input id="radio12" type="radio" name="radio1" value="option1" />
												<label for="radio12"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">Fast<span class="badge badge-secondary pull-right digits">100 INR</span></h6>
												<p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="card-footer text-end">
						<button class="btn btn-primary m-r-15" type="submit">Submit</button>
						<button class="btn btn-light" type="submit">Cancel</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Solid Border Style</h5>
						<span>By adding .border-style class to .mega-inline You can archive this style</span>
					</div>
					<div class="card-body megaoptions-border-space-sm">
						<form class="mega-inline border-style">
							<div class="row">
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-primary me-3">
												<input id="radio15" type="radio" name="radio1" value="option1" />
												<label for="radio15"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">COD<span class="badge badge-primary pull-right digits">50 INR</span></h6>
												<p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-primary me-3">
												<input id="radio16" type="radio" name="radio1" value="option1" />
												<label for="radio16"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">Fast<span class="badge badge-secondary pull-right digits">100 INR</span></h6>
												<p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="card-footer text-end">
						<button class="btn btn-primary m-r-15" type="submit">Submit</button>
						<button class="btn btn-light" type="submit">Cancel</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Offer style Border</h5>
						<span>By adding .offer-style class to .mega-inline You can archive this style</span>
					</div>
					<div class="card-body megaoptions-border-space-sm">
						<form class="mega-inline offer-style">
							<div class="row">
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-primary me-3">
												<input id="radio17" type="radio" name="radio1" value="option1" />
												<label for="radio17"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">COD<span class="badge badge-primary pull-right digits">50 INR</span></h6>
												<p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-secondary me-3">
												<input id="radio18" type="radio" name="radio1" value="option1" />
												<label for="radio18"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">Fast<span class="badge badge-secondary pull-right digits">100 INR</span></h6>
												<p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="card-footer text-end">
						<button class="btn btn-primary m-r-15" type="submit">Submit</button>
						<button class="btn btn-light" type="submit">Cancel</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Inline Style</h5>
						<span>For Create inline megaoption add <code>.mega-inline</code> class in form tag</span>
					</div>
					<div class="card-body megaoptions-border-space-sm">
						<form class="mega-inline">
							<div class="row">
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-primary me-3">
												<input id="radio19" type="radio" name="radio1" value="option1" />
												<label for="radio19"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">COD<span class="badge badge-primary pull-right digits">50 INR</span></h6>
												<p>Estimated 14-20 Day Shipping ( Duties end taxes may be due upon delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-secondary me-3">
												<input id="radio20" type="radio" name="radio1" value="option1" />
												<label for="radio20"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">Fast<span class="badge badge-secondary pull-right digits">100 INR</span></h6>
												<p>Estimated 1 Day Shipping ( Duties end taxes may be due upon delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-secondary me-3">
												<input id="radio21" type="radio" name="radio1" value="option1" />
												<label for="radio21"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">Standard<span class="badge badge-secondary pull-right digits">80 INR</span></h6>
												<p>Estimated 3 Day Shipping ( Duties end taxes may be due upon delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-primary me-3">
												<input id="radio22" type="radio" name="radio1" value="option1" />
												<label for="radio22"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">Local <span class="badge badge-primary pull-right digits">Free</span></h6>
												<p>Estimated 15 Day Shipping ( Duties end taxes may be due upon delivery )</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="card-footer text-end">
						<button class="btn btn-primary m-r-15" type="submit">Submit</button>
						<button class="btn btn-light" type="submit">Cancel</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card height-equal">
					<div class="card-header pb-0">
						<h5>Vertical Style</h5>
						<span>For Create inline megaoption add <code>.mega-vertical</code> class in form tag</span>
					</div>
					<div class="card-body">
						<form class="mega-vertical">
							<div class="row">
								<div class="col-sm-12">
									<p class="mega-title m-b-5">Delivery Option</p>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-primary me-3">
												<input id="radio23" type="radio" name="radio1" value="option1" />
												<label for="radio23"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">COD<span class="badge badge-primary pull-right digits">50 INR</span></h6>
												<p>Estimated 10 to 15 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-secondary me-3">
												<input id="radio24" type="radio" name="radio1" value="option1" />
												<label for="radio24"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">Fast <span class="badge badge-secondary pull-right digits">100 INR</span></h6>
												<p>Estimated 10 to 12 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-success me-3">
												<input id="radio25" type="radio" name="radio1" value="option1" />
												<label for="radio25"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">Standard <span class="badge badge-success pull-right digits">80 INR</span></h6>
												<p>Estimated 3 to 5 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-info me-3">
												<input id="radio5" type="radio" name="radio1" value="option1" />
												<label for="radio5"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">Local <span class="badge badge-info pull-right digits">Free</span></h6>
												<p>Estimated 3 to 5 Day Shipping ( Duties end taxes may be due upon delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-12">
									<p class="mega-title m-b-5">Buying Option</p>
								</div>
								<div class="col-sm-6">
									<div class="card mb-0">
										<div class="media p-20">
											<div class="radio radio-warning me-3">
												<input id="radio26" type="radio" name="radio1" value="option1" />
												<label for="radio26"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">XYZ Seller<span class="badge badge-warning pull-right digits">250 INR</span></h6>
												<p class="rating-star-wrapper">
													<i class="icofont icofont-star txt-warning"></i><i class="icofont icofont-star txt-warning"></i><i class="icofont icofont-star txt-warning"></i><i class="icofont icofont-star txt-warning"></i>
													<i class="icofont icofont-star txt-warning m-r-5"></i>5 start rating
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="card mb-0">
										<div class="media p-20">
											<div class="radio radio-danger me-3">
												<input id="radio27" type="radio" name="radio1" value="option1" />
												<label for="radio27"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">ABC Seller<span class="badge badge-danger pull-right digits">150 INR</span></h6>
												<p class="rating-star-wrapper">
													<i class="icofont icofont-star txt-warning"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i>
													<i class="icofont icofont-star m-r-5"></i>1 start rating
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="card-footer text-end">
						<button class="btn btn-primary m-r-15" type="submit">Submit</button>
						<button class="btn btn-light" type="submit">Cancel</button>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-xl-6">
				<div class="card height-equal">
					<div class="card-header pb-0">
						<h5>Horizontal Style</h5>
						<span>For Create inline megaoption add <code>.mega-horizontal</code> class in form tag</span>
					</div>
					<div class="card-body">
						<form class="mega-horizontal">
							<div class="row">
								<div class="col-sm-3">
									<p class="mega-title">Delivery Option</p>
								</div>
								<div class="col-sm-9">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-primary me-3">
												<input id="radio30" type="radio" name="radio1" value="option1" />
												<label for="radio30"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">COD<span class="badge badge-primary pull-right digits">50 INR</span></h6>
												<p>Estimated 5 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-9 offset-sm-3">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-secondary me-3">
												<input id="radio31" type="radio" name="radio1" value="option1" />
												<label for="radio31"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">Fast <span class="badge badge-secondary pull-right digits">100 INR</span></h6>
												<p>Estimated 1 Day Shipping ( Duties end tax may be due delivery )</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-3">
									<p class="mega-title">Buying Option</p>
								</div>
								<div class="col-sm-9">
									<div class="card">
										<div class="media p-20">
											<div class="radio radio-success me-3">
												<input id="radio32" type="radio" name="radio1" value="option1" />
												<label for="radio32"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">XYZ Seller<span class="badge badge-success pull-right digits">250 INR</span></h6>
												<p class="rating-star-wrapper">
													<i class="icofont icofont-star txt-warning"></i><i class="icofont icofont-star txt-warning"></i><i class="icofont icofont-star txt-warning"></i><i class="icofont icofont-star txt-warning"></i>
													<i class="icofont icofont-star txt-warning m-r-5"></i>5 start rating
												</p>
											</div>
										</div>
									</div>
								</div>
								<div class="col-sm-9 offset-sm-3">
									<div class="card mb-0">
										<div class="media p-20">
											<div class="radio radio-info me-3">
												<input id="radio33" type="radio" name="radio1" value="option1" />
												<label for="radio33"></label>
											</div>
											<div class="media-body">
												<h6 class="mt-0 mega-title-badge">ABC Seller<span class="badge badge-info pull-right digits">150 INR</span></h6>
												<p class="rating-star-wrapper">
													<i class="icofont icofont-star txt-warning"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i><i class="icofont icofont-star"></i>
													<i class="icofont icofont-star m-r-5"></i>1 start rating
												</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</form>
					</div>
					<div class="card-footer text-end">
						<button class="btn btn-primary m-r-15" type="submit">Submit</button>
						<button class="btn btn-light" type="submit">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	<script src="{{ asset('assets/js/height-equal.js') }}"></script>
	@endpush

@endsection