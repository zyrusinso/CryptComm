@extends('layouts.admin.master')

@section('title')Line Tabs
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Line Tabs</h3>
		@endslot
		<li class="breadcrumb-item">Base</li>
		<li class="breadcrumb-item">Tabs</li>
        <li class="breadcrumb-item active">Line Tabs</li>
	@endcomponent

    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-xl-6 xl-100">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Simple Material style tab</h5><span>Add <code>.border-tab</code> class with nav class</span>
              </div>
              <div class="card-body">
                <ul class="nav nav-tabs border-tab" id="top-tab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="top-home-tab" data-bs-toggle="tab" href="#top-home" role="tab" aria-controls="top-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>Home</a></li>
                  <li class="nav-item"><a class="nav-link" id="profile-top-tab" data-bs-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Profile</a></li>
                  <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-bs-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><i class="icofont icofont-contacts"></i>Contact</a></li>
                </ul>
                <div class="tab-content" id="top-tabContent">
                  <div class="tab-pane fade show active" id="top-home" role="tabpanel" aria-labelledby="top-home-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                  <div class="tab-pane fade" id="top-profile" role="tabpanel" aria-labelledby="profile-top-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                  <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6 xl-100">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Material style bottom tab</h5><span>Add <code>.border-tab</code> class with nav class</span>
              </div>
              <div class="card-body">
                <div class="tab-content" id="bottom-tabContent">
                  <div class="tab-pane fade show active" id="bottom-home" role="tabpanel" aria-labelledby="bottom-home-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                  <div class="tab-pane fade" id="bottom-profile" role="tabpanel" aria-labelledby="profile-bottom-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                  <div class="tab-pane fade" id="bottom-contact" role="tabpanel" aria-labelledby="contact-bottom-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                </div>
                <ul class="nav nav-tabs border-tab" id="bottom-tab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="bottom-home-tab" data-bs-toggle="tab" href="#bottom-home" role="tab" aria-controls="bottom-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>Home</a>
                    <div class="material-border"></div>
                  </li>
                  <li class="nav-item"><a class="nav-link" id="profile-bottom-tab" data-bs-toggle="tab" href="#bottom-profile" role="tab" aria-controls="bottom-profile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Profile</a>
                    <div class="material-border"></div>
                  </li>
                  <li class="nav-item"><a class="nav-link" id="contact-bottom-tab" data-bs-toggle="tab" href="#bottom-contact" role="tab" aria-controls="bottom-contact" aria-selected="false"><i class="icofont icofont-contacts"></i>Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6 xl-100">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Material style left tab</h5><span>Add <code>.border-tab</code> class with nav class</span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3 tabs-responsive-side">
                    <div class="nav flex-column nav-pills border-tab nav-left" id="v-pills-tab" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a><a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a><a class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Inbox</a><a class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a></div>
                  </div>
                  <div class="col-sm-9">
                    <div class="tab-content" id="v-pills-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6 xl-100">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Material style right tab</h5><span>Add <code>.border-tab</code> class with nav class</span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="tab-content text-end" id="v-pills-right-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-right-home" role="tabpanel" aria-labelledby="v-pills-right-home-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-right-profile" role="tabpanel" aria-labelledby="v-pills-right-profile-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-right-messages" role="tabpanel" aria-labelledby="v-pills-right-messages-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-right-settings" role="tabpanel" aria-labelledby="v-pills-right-settings-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 tabs-responsive-side">
                    <div class="nav flex-column border-tab nav-right" id="v-pills-right-tab" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="v-pills-right-home-tab" data-bs-toggle="pill" href="#v-pills-right-home" role="tab" aria-controls="v-pills-right-home" aria-selected="true">Home</a><a class="nav-link" id="v-pills-right-profile-tab" data-bs-toggle="pill" href="#v-pills-right-profile" role="tab" aria-controls="v-pills-right-profile" aria-selected="false">Profile</a><a class="nav-link" id="v-pills-right-messages-tab" data-bs-toggle="pill" href="#v-pills-right-messages" role="tab" aria-controls="v-pills-right-messages" aria-selected="false">Inbox</a><a class="nav-link" id="v-pills-right-settings-tab" data-bs-toggle="pill" href="#v-pills-right-settings" role="tab" aria-controls="v-pills-right-settings" aria-selected="false">Settings</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6 xl-100">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Material color tab</h5><span>Add <code>.nav-primary</code> class with nav class</span>
              </div>
              <div class="card-body">
                <ul class="nav nav-tabs border-tab nav-primary" id="info-tab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="info-home-tab" data-bs-toggle="tab" href="#info-home" role="tab" aria-controls="info-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>Home</a></li>
                  <li class="nav-item"><a class="nav-link" id="profile-info-tab" data-bs-toggle="tab" href="#info-profile" role="tab" aria-controls="info-profile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Profile</a></li>
                  <li class="nav-item"><a class="nav-link" id="contact-info-tab" data-bs-toggle="tab" href="#info-contact" role="tab" aria-controls="info-contact" aria-selected="false"><i class="icofont icofont-contacts"></i>Contact</a></li>
                </ul>
                <div class="tab-content" id="info-tabContent">
                  <div class="tab-pane fade show active" id="info-home" role="tabpanel" aria-labelledby="info-home-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                  <div class="tab-pane fade" id="info-profile" role="tabpanel" aria-labelledby="profile-info-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                  <div class="tab-pane fade" id="info-contact" role="tabpanel" aria-labelledby="contact-info-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6 xl-100">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Material color tab</h5><span>Add <code>.nav-secondary</code> class with nav class</span>
              </div>
              <div class="card-body">
                <ul class="nav nav-tabs border-tab nav-secondary nav-left" id="danger-tab" role="tablist">
                  <li class="nav-item"><a class="nav-link active" id="danger-home-tab" data-bs-toggle="tab" href="#danger-home" role="tab" aria-controls="danger-home" aria-selected="true"><i class="icofont icofont-ui-home"></i>Home</a></li>
                  <li class="nav-item"><a class="nav-link" id="profile-danger-tab" data-bs-toggle="tab" href="#danger-profile" role="tab" aria-controls="danger-profile" aria-selected="false"><i class="icofont icofont-man-in-glasses"></i>Profile</a></li>
                  <li class="nav-item"><a class="nav-link" id="contact-danger-tab" data-bs-toggle="tab" href="#danger-contact" role="tab" aria-controls="danger-contact" aria-selected="false"><i class="icofont icofont-contacts"></i>Contact</a></li>
                </ul>
                <div class="tab-content" id="danger-tabContent">
                  <div class="tab-pane fade show active" id="danger-home" role="tabpanel" aria-labelledby="danger-home-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                  <div class="tab-pane fade" id="danger-profile" role="tabpanel" aria-labelledby="profile-danger-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                  <div class="tab-pane fade" id="danger-contact" role="tabpanel" aria-labelledby="contact-danger-tab">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6 xl-100">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Material style left tab</h5><span>Add <code>.nav-success</code> class with nav class</span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-3 tabs-responsive-side">
                    <div class="nav flex-column nav-success border-tab nav-left" id="v-pills-success-tab" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="v-pills-success-home-tab" data-bs-toggle="pill" href="#v-pills-success-home" role="tab" aria-controls="v-pills-success-home" aria-selected="true">Home</a><a class="nav-link" id="v-pills-success-profile-tab" data-bs-toggle="pill" href="#v-pills-success-profile" role="tab" aria-controls="v-pills-success-profile" aria-selected="false">Profile</a><a class="nav-link" id="v-pills-success-messages-tab" data-bs-toggle="pill" href="#v-pills-success-messages" role="tab" aria-controls="v-pills-success-messages" aria-selected="false">Inbox</a><a class="nav-link" id="v-pills-success-settings-tab" data-bs-toggle="pill" href="#v-pills-success-settings" role="tab" aria-controls="v-pills-success-settings" aria-selected="false">Settings</a></div>
                  </div>
                  <div class="col-sm-9">
                    <div class="tab-content" id="v-pills-success-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-success-home" role="tabpanel" aria-labelledby="v-pills-success-home-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-success-profile" role="tabpanel" aria-labelledby="v-pills-success-profile-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-success-messages" role="tabpanel" aria-labelledby="v-pills-success-messages-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-success-settings" role="tabpanel" aria-labelledby="v-pills-success-settings-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6 xl-100">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Material style Right tab</h5><span>Add <code>.nav-info</code> class with nav class</span>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-9">
                    <div class="tab-content text-end" id="v-pills-secondary-tabContent">
                      <div class="tab-pane fade show active" id="v-pills-secondary-home" role="tabpanel" aria-labelledby="v-pills-secondary-home-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-secondary-profile" role="tabpanel" aria-labelledby="v-pills-secondary-profile-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-secondary-messages" role="tabpanel" aria-labelledby="v-pills-secondary-messages-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                      <div class="tab-pane fade" id="v-pills-secondary-settings" role="tabpanel" aria-labelledby="v-pills-secondary-settings-tab">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-3 tabs-responsive-side">
                    <div class="nav flex-column nav-info border-tab nav-right" id="v-pills-secondary-tab" role="tablist" aria-orientation="vertical"><a class="nav-link active" id="v-pills-secondary-home-tab" data-bs-toggle="pill" href="#v-pills-secondary-home" role="tab" aria-controls="v-pills-secondary-home" aria-selected="true">Home</a><a class="nav-link" id="v-pills-secondary-profile-tab" data-bs-toggle="pill" href="#v-pills-secondary-profile" role="tab" aria-controls="v-pills-secondary-profile" aria-selected="false">Profile</a><a class="nav-link" id="v-pills-secondary-messages-tab" data-bs-toggle="pill" href="#v-pills-secondary-messages" role="tab" aria-controls="v-pills-secondary-messages" aria-selected="false">Inbox</a><a class="nav-link" id="v-pills-secondary-settings-tab" data-bs-toggle="pill" href="#v-pills-secondary-settings" role="tab" aria-controls="v-pills-secondary-settings" aria-selected="false">Settings</a></div>
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