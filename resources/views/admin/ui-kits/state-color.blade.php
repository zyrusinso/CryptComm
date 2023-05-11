@extends('layouts.admin.master')

@section('title')State Color {{ $title }}
@endsection

@push('css')
@endpush
@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>State Color</h3>
        @endslot
        <li class="breadcrumb-item">Base</li>
        <li class="breadcrumb-item active">State Color</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="card">
              <div class="card-header pb-0">
                <h5>Default Color</h5>
              </div>
              <div class="card-body">
                <div class="color-box">
                  <button class="btn btn-primary btn-square digits">#ba895d</button>
                  <button class="btn btn-square digits btn-secondary">#148df6</button>
                  <button class="btn btn-square digits btn-success">#51bb25</button>
                  <button class="btn btn-square digits btn-info">#7a15f7</button>
                  <button class="btn btn-square digits btn-warning">#ff5f24</button>
                  <button class="btn btn-square digits btn-danger">#fd2e64</button>
                  <button class="btn btn-square digits btn-light">#e8ebf2</button>
                  <button class="btn btn-square digits btn-dark">#2c323f</button>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header pb-0">
                <h5>Color</h5>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <h6 class="sub-title text-uppercase">Primary</h6>
                    <div class="primary-color">
                      <ul class="m-b-30">
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <h6 class="sub-title text-uppercase">secondary</h6>
                    <div class="secondary-color">
                      <ul class="m-b-30">
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <h6 class="sub-title text-uppercase">Success</h6>
                    <div class="success-color">
                      <ul class="m-b-30">
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <h6 class="sub-title text-uppercase">Info</h6>
                    <div class="info-color">
                      <ul class="m-b-30">
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <h6 class="sub-title text-uppercase">Warning</h6>
                    <div class="yellow-color">
                      <ul>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 xs-mt">
                    <h6 class="sub-title text-uppercase">Danger</h6>
                    <div class="red-color">
                      <ul>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 nav-md-mt">
                    <h6 class="sub-title text-uppercase">Pink</h6>
                    <div class="pink-color">
                      <ul>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 nav-md-mt">
                    <h6 class="sub-title text-uppercase">Grey</h6>
                    <div class="gray-color">
                      <ul>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                        <li><span></span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    @push('scripts')  
        <script src="{{asset('assets/js/tooltip-init.js')}}"></script>  
    @endpush
@endsection