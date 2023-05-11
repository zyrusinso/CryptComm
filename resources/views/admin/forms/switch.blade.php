@extends('layouts.admin.master')

@section('title')Switch
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Switch</h3>
		@endslot
		<li class="breadcrumb-item">Forms</li>
		<li class="breadcrumb-item">Form Widgets</li>
	    <li class="breadcrumb-item active">Switch</li>
	@endcomponent

    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12 col-xl-6 col-lg-12 col-md-6">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Basic Switch</h5>
              </div>
              <div class="card-body row switch-showcase height-equal">
                <div class="col-sm-12">
                  <div class="media">
                    <label class="col-form-label m-r-10">Default Switch</label>
                    <div class="media-body text-end">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Unhecked Switch</label>
                    <div class="media-body text-end">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">With Icon</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Unhecked With Icon</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Disabled State</label>
                    <div class="media-body text-end">
                      <label class="switch">
                        <input type="checkbox" disabled=""><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Disabled With Icon</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox" disabled=""><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6 col-lg-12 col-md-6">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Switch Color</h5>
              </div>
              <div class="card-body row switch-showcase height-equal">
                <div class="col-sm-12">
                  <div class="media">
                    <label class="col-form-label m-r-10">Primary Color</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-primary"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Secondary Color</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-secondary"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Success Color</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-success"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Info Color</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-info"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Warning Color</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-warning"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Danger Color</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-danger"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6 col-lg-12 col-md-6">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Switch Outline</h5>
              </div>
              <div class="card-body row switch-showcase">
                <div class="col-sm-12">
                  <div class="media">
                    <label class="col-form-label m-r-10">Primary Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-primary"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Secondary Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-secondary"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Success Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-success"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Info Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-info"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Warning Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-warning"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Danger Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-danger"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-6 col-lg-12 col-md-6">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Switch unchecked Outline</h5>
              </div>
              <div class="card-body row switch-showcase">
                <div class="col-sm-12">
                  <div class="media">
                    <label class="col-form-label m-r-10">Primary Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state bg-primary"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Secondary Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state bg-secondary"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Success Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state bg-success"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Info Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state bg-info"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Warning Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state bg-warning"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Danger Color</label>
                    <div class="media-body text-end icon-state switch-outline">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state bg-danger"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-4">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Switch Sizing</h5>
              </div>
              <div class="card-body row switch-showcase">
                <div class="col-sm-12">
                  <div class="media">
                    <label class="col-form-label m-r-10">Large Size</label>
                    <div class="media-body text-end switch-lg">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Large Unhecked</label>
                    <div class="media-body text-end switch-lg">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Normal Size</label>
                    <div class="media-body text-end">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Normal Unhecked</label>
                    <div class="media-body text-end">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Small Size</label>
                    <div class="media-body text-end switch-sm">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Small Size Unhecked</label>
                    <div class="media-body text-end switch-sm">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-4">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Switch With icon</h5>
              </div>
              <div class="card-body row switch-showcase">
                <div class="col-sm-12">
                  <div class="media">
                    <label class="col-form-label m-r-10">Large Size</label>
                    <div class="media-body text-end switch-lg icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Large Unhecked</label>
                    <div class="media-body text-end switch-lg icon-state">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Normal Size</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Normal Unhecked</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Small Size</label>
                    <div class="media-body text-end switch-sm icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Small Size Unhecked</label>
                    <div class="media-body text-end switch-sm icon-state">
                      <label class="switch">
                        <input type="checkbox"><span class="switch-state"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-xl-4">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Switch With color</h5>
              </div>
              <div class="card-body row switch-showcase">
                <div class="col-sm-12">
                  <div class="media">
                    <label class="col-form-label m-r-10">Primary Color (Disabled)</label>
                    <div class="media-body text-end switch-lg icon-state">
                      <label class="switch">
                        <input type="checkbox" checked="" disabled=""><span class="switch-state bg-primary"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Secondary Color</label>
                    <div class="media-body text-end switch-lg icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-secondary"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Success Color</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-success"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Info Color</label>
                    <div class="media-body text-end icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-info"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Warning Color</label>
                    <div class="media-body text-end switch-sm icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-warning"></span>
                      </label>
                    </div>
                  </div>
                  <div class="media">
                    <label class="col-form-label m-r-10">Danger Color</label>
                    <div class="media-body text-end switch-sm icon-state">
                      <label class="switch">
                        <input type="checkbox" checked=""><span class="switch-state bg-danger"></span>
                      </label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

	@push('scripts')
    <script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
	@endpush

@endsection
