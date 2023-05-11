@extends('layouts.admin.master')

@section('title')Tabbed card
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Tabbed card</h3>
		@endslot
		<li class="breadcrumb-item">Cards</li>
		<li class="breadcrumb-item active">Tabbed card</li>
	@endcomponent

	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-6 xl-100 col-lg-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="pull-left">Simple Tab</h5>
					</div>
					<div class="card-body">
						<div class="tabbed-card">
							<ul class="pull-right nav nav-pills nav-primary" id="pills-clrtab1" role="tablist">
								<li class="nav-item"><a class="nav-link active" id="pills-clrhome-tab1" data-bs-toggle="pill" href="#pills-clrhome1" role="tab" aria-controls="pills-clrhome1" aria-selected="true">Home</a></li>
								<li class="nav-item"><a class="nav-link" id="pills-clrprofile-tab1" data-bs-toggle="pill" href="#pills-clrprofile1" role="tab" aria-controls="pills-clrprofile1" aria-selected="false">Profile</a></li>
								<li class="nav-item"><a class="nav-link" id="pills-clrcontact-tab1" data-bs-toggle="pill" href="#pills-clrcontact1" role="tab" aria-controls="pills-clrcontact1" aria-selected="false">Contact</a></li>
							</ul>
							<div class="tab-content" id="pills-clrtabContent1">
								<div class="tab-pane fade show active" id="pills-clrhome1" role="tabpanel" aria-labelledby="pills-clrhome-tab1">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="pills-clrprofile1" role="tabpanel" aria-labelledby="pills-clrprofile-tab1">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="pills-clrcontact1" role="tabpanel" aria-labelledby="pills-clrcontact-tab1">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 xl-100 col-lg-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="pull-left">Tab With Icon</h5>
					</div>
					<div class="card-body">
						<div class="tabbed-card">
							<ul class="pull-right nav nav-pills nav-primary" id="pills-clrtab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-clrhome-tab" data-bs-toggle="pill" href="#pills-clrhome" role="tab" aria-controls="pills-clrhome" aria-selected="true"><i class="icofont icofont-ui-home"></i>Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-clrprofile-tab" data-bs-toggle="pill" href="#pills-clrprofile" role="tab" aria-controls="pills-clrprofile" aria-selected="false">
										<i class="icofont icofont-man-in-glasses"></i>Profile
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-clrcontact-tab" data-bs-toggle="pill" href="#pills-clrcontact" role="tab" aria-controls="pills-clrcontact" aria-selected="false">
										<i class="icofont icofont-contacts"></i>Contact
									</a>
								</li>
							</ul>
							<div class="tab-content" id="pills-clrtabContent">
								<div class="tab-pane fade show active" id="pills-clrhome" role="tabpanel" aria-labelledby="pills-clrhome-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="pills-clrprofile" role="tabpanel" aria-labelledby="pills-clrprofile-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="pills-clrcontact" role="tabpanel" aria-labelledby="pills-clrcontact-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 xl-100 col-lg-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="pull-left">Color Tab</h5>
					</div>
					<div class="card-body">
						<div class="tabbed-card">
							<ul class="pull-right nav nav-pills nav-primary" id="pills-clrtabinfo" role="tablist">
								<li class="nav-item"><a class="nav-link active" id="pills-clrhome-tabinfo" data-bs-toggle="pill" href="#pills-clrhomeinfo" role="tab" aria-controls="pills-clrhome" aria-selected="true">Home</a></li>
								<li class="nav-item"><a class="nav-link" id="pills-clrprofile-tabinfo" data-bs-toggle="pill" href="#pills-clrprofileinfo" role="tab" aria-controls="pills-clrprofile" aria-selected="false">Profile</a></li>
								<li class="nav-item"><a class="nav-link" id="pills-clrcontact-tabinfo" data-bs-toggle="pill" href="#pills-clrcontactinfo" role="tab" aria-controls="pills-clrcontact" aria-selected="false">Contact</a></li>
							</ul>
							<div class="tab-content" id="pills-clrtabContentinfo">
								<div class="tab-pane fade show active" id="pills-clrhomeinfo" role="tabpanel" aria-labelledby="pills-clrhome-tabinfo">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="pills-clrprofileinfo" role="tabpanel" aria-labelledby="pills-clrprofile-tabinfo">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="pills-clrcontactinfo" role="tabpanel" aria-labelledby="pills-clrcontact-tabinfo">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 xl-100 col-lg-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="pull-left">Color Option</h5>
					</div>
					<div class="card-body">
						<div class="tabbed-card">
							<ul class="pull-right nav nav-pills nav-secondary" id="pills-clrtabsuccess" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="pills-clrhome-tabsuccess" data-bs-toggle="pill" href="#pills-clrhomesuccess" role="tab" aria-controls="pills-clrhome" aria-selected="true">
										<i class="icofont icofont-ui-home"></i>Home
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-clrprofile-tabsuccess" data-bs-toggle="pill" href="#pills-clrprofilesuccess" role="tab" aria-controls="pills-clrprofile" aria-selected="false">
										<i class="icofont icofont-man-in-glasses"></i>Profile
									</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="pills-clrcontact-tabsuccess" data-bs-toggle="pill" href="#pills-clrcontactsuccess" role="tab" aria-controls="pills-clrcontact" aria-selected="false">
										<i class="icofont icofont-contacts"></i>Contact
									</a>
								</li>
							</ul>
							<div class="tab-content" id="pills-clrtabContentsuccess">
								<div class="tab-pane fade show active" id="pills-clrhomesuccess" role="tabpanel" aria-labelledby="pills-clrhome-tabsuccess">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="pills-clrprofilesuccess" role="tabpanel" aria-labelledby="pills-clrprofile-tabsuccess">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="pills-clrcontactsuccess" role="tabpanel" aria-labelledby="pills-clrcontact-tabsuccess">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 xl-100 col-lg-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="pull-left">Material tab</h5>
					</div>
					<div class="card-body">
						<div class="tabbed-card">
							<ul class="pull-right nav border-tab" id="top-tab" role="tablist">
								<li class="nav-item">
									<a class="nav-link" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="false">Home</a>
									<div class="material-border"></div>
								</li>
								<li class="nav-item">
									<a class="nav-link active" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true">Profile</a>
									<div class="material-border"></div>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false">Contact</a>
									<div class="material-border"></div>
								</li>
							</ul>
							<div class="tab-content" id="top-tabContent">
								<div class="tab-pane fade" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade active show" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 xl-100 col-lg-12 box-col-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5 class="pull-left">Material tab with icon</h5>
					</div>
					<div class="card-body">
						<div class="tabbed-card">
							<ul class="pull-right nav border-tab" id="top-tab2" role="tablist">
								<li class="nav-item">
									<a class="nav-link" id="top-home-tab2" data-bs-toggle="tab" href="#top-home2" role="tab" aria-controls="top-home" aria-selected="false"><i class="icofont icofont-ui-home"></i>Home</a>
									<div class="material-border"></div>
								</li>
								<li class="nav-item">
									<a class="nav-link active" id="profile-top-tab2" data-bs-toggle="tab" href="#top-profile2" role="tab" aria-controls="top-profile2" aria-selected="true">
										<i class="icofont icofont-man-in-glasses"></i>Profile
									</a>
									<div class="material-border"></div>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="contact-top-tab2" data-bs-toggle="tab" href="#top-contact2" role="tab" aria-controls="top-contact2" aria-selected="false"><i class="icofont icofont-contacts"></i>Contact</a>
									<div class="material-border"></div>
								</li>
							</ul>
							<div class="tab-content" id="top-tabContent2">
								<div class="tab-pane fade" id="top-home2" role="tabpanel" aria-labelledby="top-home-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade active show" id="top-profile2" role="tabpanel" aria-labelledby="profile-top-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="top-contact2" role="tabpanel" aria-labelledby="contact-top-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 xl-100 col-lg-12 box-col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="pull-left">Material tab with color</h5>
					</div>
					<div class="card-body">
						<div class="tabbed-card">
							<ul class="pull-right nav nav-tabs border-tab nav-secondary" id="top-tabsecondary" role="tablist">
								<li class="nav-item">
									<a class="nav-link" id="top-home-secondary" data-bs-toggle="tab" href="#top-homesecondary" role="tab" aria-controls="top-home" aria-selected="false"><i class="icofont icofont-ui-home"></i>Home</a>
									<div class="material-border"></div>
								</li>
								<li class="nav-item">
									<a class="nav-link active" id="profile-top-secondary" data-bs-toggle="tab" href="#top-profilesecondary" role="tab" aria-controls="top-profilesecondary" aria-selected="true">
										<i class="icofont icofont-man-in-glasses"></i>Profile
									</a>
									<div class="material-border"></div>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="contact-top-secondary" data-bs-toggle="tab" href="#top-contactsecondary" role="tab" aria-controls="top-contactsecondary" aria-selected="false">
										<i class="icofont icofont-contacts"></i>Contact
									</a>
									<div class="material-border"></div>
								</li>
							</ul>
							<div class="tab-content" id="top-tabContentsecondary">
								<div class="tab-pane fade" id="top-homesecondary" role="tabpanel" aria-labelledby="top-home-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade active show" id="top-profilesecondary" role="tabpanel" aria-labelledby="profile-top-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="top-contactsecondary" role="tabpanel" aria-labelledby="contact-top-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-6 xl-100 col-lg-12 box-col-12">
				<div class="card">
					<div class="card-header">
						<h5 class="pull-left">Material tab with color</h5>
					</div>
					<div class="card-body">
						<div class="tabbed-card">
							<ul class="pull-right nav nav-tabs border-tab nav-success" id="top-tabdanger" role="tablist">
								<li class="nav-item">
									<a class="nav-link" id="top-home-danger" data-bs-toggle="tab" href="#top-homedanger" role="tab" aria-controls="top-homedanger" aria-selected="false"><i class="icofont icofont-ui-home"></i>Home</a>
									<div class="material-border"></div>
								</li>
								<li class="nav-item">
									<a class="nav-link active" id="profile-top-danger" data-bs-toggle="tab" href="#top-profiledanger" role="tab" aria-controls="top-profiledanger" aria-selected="true">
										<i class="icofont icofont-man-in-glasses"></i>Profile
									</a>
									<div class="material-border"></div>
								</li>
								<li class="nav-item">
									<a class="nav-link" id="contact-top-danger" data-bs-toggle="tab" href="#top-contactdanger" role="tab" aria-controls="top-contactdanger" aria-selected="false">
										<i class="icofont icofont-contacts"></i>Contact
									</a>
									<div class="material-border"></div>
								</li>
							</ul>
							<div class="tab-content" id="top-tabContentdanger">
								<div class="tab-pane fade" id="top-homedanger" role="tabpanel" aria-labelledby="top-home-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade active show" id="top-profiledanger" role="tabpanel" aria-labelledby="profile-top-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
								<div class="tab-pane fade" id="top-contactdanger" role="tabpanel" aria-labelledby="contact-top-tab">
									<p>
										Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
										scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
										release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	

    @push('scripts') 
    @endpush

@endsection