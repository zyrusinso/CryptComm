@extends('layouts.admin.master')

@section('title')Input groups
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Input groups</h3>
		@endslot
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item">Form Controls</li>
 		<li class="breadcrumb-item active">Input groups</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Basic Input groups</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<form>
									<div class="mb-3 m-form__group">
										<label class="form-label">Left Addon</label>
										<div class="input-group">
											<span class="input-group-text">@</span>
											<input class="form-control" type="text" placeholder="Email" />
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label">Right Addon</label>
										<div class="input-group"><input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" /><span class="input-group-text">@example.com</span></div>
									</div>
									<div class="mb-3">
										<label class="form-label">Joint Addon</label>
										<div class="input-group">
											<span class="input-group-text">$</span><span class="input-group-text">0.00</span>
											<input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" />
										</div>
									</div>
									<div>
										<label class="form-label">Left & Right Addon</label>
										<div class="input-group mb-3">
											<span class="input-group-text">$ </span> <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" /><span class="input-group-text">.00 </span>
										</div>
									</div>
									<div class="mb-3 input-group-solid">
										<label class="form-label">Solid style</label>
										<div class="input-group">
											<span class="input-group-text">@ </span>
											<input class="form-control" type="text" placeholder="Email" />
										</div>
									</div>
									<div class="mb-3 input-group-square">
										<label class="form-label">Square style</label>
										<div class="input-group">
											<span class="input-group-text">+</span>
											<input class="form-control" type="text" placeholder="Email" />
										</div>
									</div>
									<div class="mb-3 input-group-square">
										<label class="form-label">Raise style</label>
										<div class="input-group input-group-air">
											<span class="input-group-text">#</span>
											<input class="form-control" type="text" placeholder="Email" />
										</div>
									</div>
									<div>
										<label class="form-label">Left & Right Addon</label>
										<div class="input-group pill-input-group">
											<span class="input-group-text">$ </span> <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" /><span class="input-group-text">.00 </span>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button class="btn btn-primary m-r-15" type="submit">Submit</button>
						<button class="btn btn-light" type="submit">Cancel</button>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Basic Input groups</h5>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col">
								<form>
									<div class="mb-3 m-form__group">
										<label class="form-label">Left Addon</label>
										<div class="input-group">
											<span class="input-group-text"><i class="icofont icofont-pencil-alt-5"></i></span>
											<input class="form-control" type="text" placeholder="Email" />
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label">Right Addon</label>
										<div class="input-group">
											<input class="form-control" type="text" placeholder="Recipient's username" aria-label="Recipient's username" /><span class="input-group-text"><i class="icofont icofont-ui-dial-phone"> </i></span>
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label">Joint Addon</label>
										<div class="input-group">
											<span class="input-group-text"><i class="icofont icofont-unlink"></i></span><span class="input-group-text">0.00 </span>
											<input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" />
										</div>
									</div>
									<div class="mb-3">
										<label class="form-label">Left & Right Addon</label>
										<div class="input-group mb-3">
											<span class="input-group-text"><i class="icon-zoom-out"> </i></span> <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" />
											<span class="input-group-text"><i class="icon-zoom-in"></i></span>
										</div>
									</div>
									<div class="mb-3 input-group-solid">
										<label class="form-label">Solid style</label>
										<div class="input-group">
											<span class="input-group-text"><i class="icofont icofont-users"> </i></span>
											<input class="form-control" type="text" placeholder="999999" />
										</div>
									</div>
									<div class="mb-3 input-group-square">
										<label class="form-label">Flat style</label>
										<div class="input-group">
											<span class="input-group-text"><i class="icofont icofont-credit-card"> </i></span>
											<input class="form-control" type="text" placeholder="" />
										</div>
									</div>
									<div class="mb-3 input-group-square">
										<label class="form-label">Raise style</label>
										<div class="input-group">
											<span class="input-group-text"><i class="fa fa-download"></i></span>
											<input class="form-control input-group-air" type="text" placeholder="https://www.example.com" />
										</div>
									</div>
									<div>
										<label class="form-label">Left & Right Addon</label>
										<div class="input-group pill-input-group">
											<span class="input-group-text"><i class="icofont icofont-ui-copy"> </i></span> <input class="form-control" type="text" aria-label="Amount (to the nearest dollar)" />
											<span class="input-group-text"><i class="icofont icofont-stock-search"> </i></span>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button class="btn btn-primary m-r-15" type="submit">Submit</button>
						<button class="btn btn-light" type="submit">Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	@endpush

@endsection