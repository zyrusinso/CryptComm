@extends('layouts.admin.master')

@section('title')Validation Forms
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Validation Forms</h3>
		@endslot
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item">Form Controls</li>
        <li class="breadcrumb-item active">Validation Forms</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Custom styles</h5>
						<span>
							For custom Bootstrap form validation messages, you’ll need to add the <code class="text-danger">novalidate</code> boolean attribute to your <code class="text-danger">&lt;form&gt;</code>. This disables the browser
							default feedback tooltips, but still provides access to the form validation APIs in JavaScript. Try to submit the form below; our JavaScript will intercept the submit button and relay feedback to you.
						</span>
						<span>When attempting to submit, you’ll see the <code class="text-danger">:invalid </code> and <code class="text-danger">:valid </code> styles applied to your form controls.</span>
					</div>
					<div class="card-body">
						<form class="needs-validation" novalidate="">
							<div class="row g-3">
								<div class="col-md-4">
									<label class="form-label" for="validationCustom01">First name</label>
									<input class="form-control" id="validationCustom01" type="text" value="Mark" required="" />
									<div class="valid-feedback">Looks good!</div>
								</div>
								<div class="col-md-4">
									<label class="form-label" for="validationCustom02">Last name</label>
									<input class="form-control" id="validationCustom02" type="text" value="Otto" required="" />
									<div class="valid-feedback">Looks good!</div>
								</div>
								<div class="col-md-4 mb-3">
									<label class="form-label" for="validationCustomUsername">Username</label>
									<div class="input-group">
										<span class="input-group-text" id="inputGroupPrepend">@</span>
										<input class="form-control" id="validationCustomUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend" required="" />
										<div class="invalid-feedback">Please choose a username.</div>
									</div>
								</div>
							</div>
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label" for="validationCustom03">City</label>
									<input class="form-control" id="validationCustom03" type="text" placeholder="City" required="" />
									<div class="invalid-feedback">Please provide a valid city.</div>
								</div>
								<div class="col-md-3">
									<label class="form-label" for="validationCustom04">State</label>
									<select class="form-select" id="validationCustom04" required="">
										<option selected="" disabled="" value="">Choose...</option>
										<option>...</option>
									</select>
									<div class="invalid-feedback">Please select a valid state.</div>
								</div>
								<div class="col-md-3 mb-3">
									<label class="form-label" for="validationCustom05">Zip</label>
									<input class="form-control" id="validationCustom05" type="text" placeholder="Zip" required="" />
									<div class="invalid-feedback">Please provide a valid zip.</div>
								</div>
							</div>
							<div class="mb-3">
								<div class="form-check">
									<div class="checkbox p-0">
										<input class="form-check-input" id="invalidCheck" type="checkbox" required="" />
										<label class="form-check-label" for="invalidCheck">Agree to terms and conditions</label>
									</div>
									<div class="invalid-feedback">You must agree before submitting.</div>
								</div>
							</div>
							<button class="btn btn-primary" type="submit">Submit form</button>
						</form>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Browser defaults</h5>
						<span>
							Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS,
							you’ll see a slightly different style of feedback.
						</span>
						<span>While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</span>
					</div>
					<div class="card-body">
						<form>
							<div class="row g-3">
								<div class="col-md-4">
									<label class="form-label" for="validationDefault01">First name</label>
									<input class="form-control" id="validationDefault01" type="text" placeholder="First name" required="" />
								</div>
								<div class="col-md-4">
									<label class="form-label" for="validationDefault02">Last name</label>
									<input class="form-control" id="validationDefault02" type="text" placeholder="Last name" required="" />
								</div>
								<div class="col-md-4 mb-3">
									<label class="form-label" for="validationDefaultUsername">Username</label>
									<div class="input-group">
										<span class="input-group-text" id="inputGroupPrepend2">@</span>
										<input class="form-control" id="validationDefaultUsername" type="text" placeholder="Username" aria-describedby="inputGroupPrepend2" required="" />
									</div>
								</div>
							</div>
							<div class="row g-3">
								<div class="col-md-6">
									<label class="form-label" for="validationDefault03">City</label>
									<input class="form-control" id="validationDefault03" type="text" placeholder="City" required="" />
								</div>
								<div class="col-md-3">
									<label class="form-label" for="validationDefault04">State</label>
									<select class="form-select" id="validationDefault04" required="">
										<option selected="" disabled="" value="">Choose...</option>
										<option>...</option>
									</select>
								</div>
								<div class="col-md-3 mb-3">
									<label class="form-label" for="validationDefault05">Zip</label>
									<input class="form-control" id="validationDefault05" type="text" placeholder="Zip" required="" />
								</div>
							</div>
							<div class="mb-3">
								<div class="form-check">
									<div class="checkbox p-0">
										<input class="form-check-input" id="invalidCheck2" type="checkbox" required="" />
										<label class="form-check-label" for="invalidCheck2">Agree to terms and conditions</label>
									</div>
								</div>
							</div>
							<button class="btn btn-primary" type="submit">Submit form</button>
						</form>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Supported elements</h5>
						<span>
							Not interested in custom validation feedback messages or writing JavaScript to change form behaviors? All good, you can use the browser defaults. Try submitting the form below. Depending on your browser and OS,
							you’ll see a slightly different style of feedback.
						</span>
						<span>While these feedback styles cannot be styled with CSS, you can still customize the feedback text through JavaScript.</span>
					</div>
					<div class="card-body">
						<form class="was-validated">
							<div class="mb-3">
								<label class="form-label" for="validationTextarea">Textarea</label>
								<textarea class="form-control is-invalid" id="validationTextarea" placeholder="Required example textarea" required=""></textarea>
								<div class="invalid-feedback">Please enter a message in the textarea.</div>
							</div>
							<div class="form-check mb-3">
								<input class="form-check-input" id="validationFormCheck1" type="checkbox" required="" />
								<label class="form-check-label" for="validationFormCheck1">Check this checkbox</label>
								<div class="invalid-feedback">Example invalid feedback text</div>
							</div>
							<div class="form-check">
								<input class="form-check-input" id="validationFormCheck2" type="radio" name="radio-stacked" required="" />
								<label class="form-check-label" for="validationFormCheck2">Toggle this radio</label>
							</div>
							<div class="form-check mb-3">
								<input class="form-check-input" id="validationFormCheck3" type="radio" name="radio-stacked" required="" />
								<label class="form-check-label" for="validationFormCheck3">Or toggle this other radio</label>
								<div class="invalid-feedback">More example invalid feedback text</div>
							</div>
							<div class="mb-3">
								<select class="form-select" required="" aria-label="select example">
									<option value="">Open this select menu</option>
									<option value="1">One</option>
									<option value="2">Two</option>
									<option value="3">Three</option>
								</select>
								<div class="invalid-feedback">Example invalid select feedback</div>
							</div>
							<div>
								<input class="form-control" type="file" aria-label="file example" required="" />
								<div class="invalid-feedback">Example invalid form file feedback</div>
							</div>
						</form>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Tooltips</h5>
						<span>
							If your form layout allows it, you can swap the <code class="text-danger">.{valid|invalid}-feedback</code> classes for <code class="text-danger">.{valid|invalid}-tooltip</code> classes to display validation feedback
							in a styled tooltip. Be sure to have a parent with <code class="text-danger">position: relative</code> on it for tooltip positioning. In the example below, our column classes have this already, but your project may
							require an alternative setup.
						</span>
					</div>
					<div class="card-body">
						<form class="row g-3 needs-validation" novalidate="">
							<div class="col-md-4 position-relative">
								<label class="form-label" for="validationTooltip01">First name</label>
								<input class="form-control" id="validationTooltip01" type="text" value="Mark" required="" />
								<div class="valid-tooltip">Looks good!</div>
							</div>
							<div class="col-md-4 position-relative">
								<label class="form-label" for="validationTooltip02">Last name</label>
								<input class="form-control" id="validationTooltip02" type="text" value="Otto" required="" />
								<div class="valid-tooltip">Looks good!</div>
							</div>
							<div class="col-md-4 position-relative">
								<label class="form-label" for="validationTooltipUsername">Username</label>
								<div class="input-group has-validation">
									<span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>
									<input class="form-control" id="validationTooltipUsername" type="text" aria-describedby="validationTooltipUsernamePrepend" required="" />
									<div class="invalid-tooltip">Please choose a unique and valid username.</div>
								</div>
							</div>
							<div class="col-md-6 position-relative">
								<label class="form-label" for="validationTooltip03">City</label>
								<input class="form-control" id="validationTooltip03" type="text" required="" />
								<div class="invalid-tooltip">Please provide a valid city.</div>
							</div>
							<div class="col-md-3 position-relative">
								<label class="form-label" for="validationTooltip04">State</label>
								<select class="form-select" id="validationTooltip04" required="">
									<option selected="" disabled="" value="">Choose...</option>
									<option>...</option>
								</select>
								<div class="invalid-tooltip">Please select a valid state.</div>
							</div>
							<div class="col-md-3 position-relative">
								<label class="form-label" for="validationTooltip05">Zip</label>
								<input class="form-control" id="validationTooltip05" type="text" required="" />
								<div class="invalid-tooltip">Please provide a valid zip.</div>
							</div>
							<div class="col-12">
								<button class="btn btn-primary" type="submit">Submit form</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	@push('scripts')
	<script src="{{ asset('assets/js/form-validation-custom.js') }}"></script>
	@endpush

@endsection