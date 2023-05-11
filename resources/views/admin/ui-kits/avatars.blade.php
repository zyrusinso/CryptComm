@extends('layouts.admin.master')

@section('title')Avatars {{ $title }}
@endsection

@push('css')
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endpush

@section('content')
    @component('components.breadcrumb')
        @slot('breadcrumb_title')
            <h3>Avatars</h3>
        @endslot
        <li class="breadcrumb-item">Base</li>
        <li class="breadcrumb-item active">Avatars</li>
    @endcomponent
    <div class="container-fluid">
        <div class="user-profile">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h5>Sizing</h5>
                </div>
                <div class="card-body avatar-showcase">
                  <div class="avatars">
                    <div class="avatar"><img class="img-100 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-90 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-80 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-60 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-20 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h5>Status Indicator</h5>
                </div>
                <div class="card-body avatar-showcase">
                  <div class="avatars">
                    <div class="avatar"><img class="img-100 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                      <div class="status status-100 bg-primary"> </div>
                    </div>
                    <div class="avatar"><img class="img-90 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                      <div class="status status-90 bg-primary"></div>
                    </div>
                    <div class="avatar"><img class="img-80 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                      <div class="status status-80 bg-primary"></div>
                    </div>
                    <div class="avatar"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                      <div class="status status-70 bg-primary"></div>
                    </div>
                    <div class="avatar"><img class="img-60 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                      <div class="status status-60 bg-primary"></div>
                    </div>
                    <div class="avatar"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                      <div class="status status-50 bg-primary"> </div>
                    </div>
                    <div class="avatar"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                      <div class="status status-40 bg-primary"></div>
                    </div>
                    <div class="avatar"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#">
                      <div class="status status-30 bg-primary"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h5>Initials</h5>
                </div>
                <div class="card-body avatar-showcase">
                  <div class="avatars">
                    <div class="avatar"><img class="img-100 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
                    <div class="avatar"><img class="img-90 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
                    <div class="avatar"><img class="img-80 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
                    <div class="avatar"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
                    <div class="avatar"><img class="img-60 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
                    <div class="avatar"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
                    <div class="avatar"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
                    <div class="avatar"><img class="img-30 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
                    <div class="avatar"><img class="img-20 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
                    <div class="avatar"><img class="img-10 rounded-circle" src="{{asset('assets/images/user/16.png')}}" alt="#"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-12 xl-100">
              <div class="card">
                <div class="card-header pb-0">
                  <h5>Shape</h5>
                </div>
                <div class="card-body avatar-showcase">
                  <div class="avatars">
                    <div class="avatar"><img class="img-100 b-r-8" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-90 b-r-30" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-80 b-r-35" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-60 b-r-25" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                    <div class="avatar"><img class="img-50 b-r-15" src="{{asset('assets/images/user/1.jpg')}}" alt="#"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12">
              <div class="card">
                <div class="card-header pb-0">
                  <h5>Groups</h5>
                </div>
                <div class="card-body avatar-showcase">
                  <div class="customers d-inline-block avatar-group">
                    <ul>
                      <li class="d-inline-block"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt=""></li>
                      <li class="d-inline-block"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt=""></li>
                      <li class="d-inline-block"><img class="img-70 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt=""></li>
                    </ul>
                  </div>
                  <div class="customers d-inline-block avatar-group">
                    <ul>
                      <li class="d-inline-block"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt=""></li>
                      <li class="d-inline-block"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt=""></li>
                      <li class="d-inline-block"><img class="img-50 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt=""></li>
                    </ul>
                  </div>
                  <div class="customers d-inline-block avatar-group">
                    <ul>
                      <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/3.jpg')}}" alt=""></li>
                      <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/5.jpg')}}" alt=""></li>
                      <li class="d-inline-block"><img class="img-40 rounded-circle" src="{{asset('assets/images/user/1.jpg')}}" alt=""></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/js/tooltip-init.js')}}"></script>
@endpush