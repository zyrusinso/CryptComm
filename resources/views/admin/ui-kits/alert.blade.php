@extends('layouts.admin.master')

@section('title')Alert
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/prism.css')}}">
@endpush

@section('content')
    @component('components.breadcrumb')
    @slot('breadcrumb_title')
    <h3>Alert</h3>
    @endslot
    <li class="breadcrumb-item">Base</li>
    <li class="breadcrumb-item active">Alert</li>
    @endcomponent

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Theme Color Alerts</h5>
                        <span>Theme color Archive just adding class <code>.dark</code></span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary dark" role="alert">
                            <p>This is a info alert—check it out!</p>
                        </div>
                        <div class="alert alert-secondary dark" role="alert">
                            <p>This is a light alert—check it out!</p>
                        </div>
                        <div class="alert alert-success dark" role="alert">
                            <p>This is a success alert—check it out!</p>
                        </div>
                        <div class="alert alert-info dark" role="alert">
                            <p>This is a info alert—check it out!</p>
                        </div>
                        <div class="alert alert-warning dark" role="alert">
                            <p>This is a warning alert—check it out!</p>
                        </div>
                        <div class="alert alert-danger dark" role="alert">
                            <p>This is a danger alert—check it out!</p>
                        </div>
                        <div class="alert alert-light dark" role="alert">
                            <p>This is a light alert—check it out!</p>
                        </div>
                        <div class="alert alert-dark dark" role="alert">
                            <p>This is a dark alert—check it out!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Link color in theme-color</h5>
                        <span>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert</span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary dark" role="alert">
                            <p>This is a primary alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-secondary dark" role="alert">
                            <p>This is a secondary alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-success dark" role="alert">
                            <p>This is a success alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-info dark" role="alert">
                            <p>This is a info alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-warning dark" role="alert">
                            <p>This is a warning alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-danger dark" role="alert">
                            <p>This is a danger alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-light dark" role="alert">
                            <p>This is a light alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-dark dark" role="alert">
                            <p>This is a light alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h5>Dismissing</h5>
                        <span>To animate alerts when dismissing them, be sure to add the .fade and .show classes.</span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary dark alert-dismissible fade show" role="alert"><strong>Holy ! </strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-secondary dark alert-dismissible fade show" role="alert"><strong>Holy ! </strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-success dark alert-dismissible fade show" role="alert"><strong>Holy ! </strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-info dark alert-dismissible fade show" role="alert"><strong>Holy ! </strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-warning dark alert-dismissible fade show" role="alert"><strong>Holy ! </strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-danger dark alert-dismissible fade show" role="alert"><strong>Holy ! </strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-light dark alert-dismissible fade show" role="alert"><strong>Holy ! </strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-dark dark alert-dismissible fade show" role="alert"><strong>Holy ! </strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h5>Alert With Icon</h5>
                        <span>Just add Any icon before text</span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary dark alert-dismissible fade show" role="alert">
                            <i data-feather="clock"></i>
                            <p> You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-secondary dark alert-dismissible fade show" role="alert">
                            <i data-feather="heart"></i>
                            <p> You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-success dark alert-dismissible fade show" role="alert">
                            <i data-feather="thumbs-up"></i>
                            <p> You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-info dark alert-dismissible fade show" role="alert">
                            <i data-feather="help-circle"></i>
                            <p> You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-warning dark alert-dismissible fade show" role="alert">
                            <i data-feather="bell"></i>
                            <p>can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-danger dark alert-dismissible fade show" role="alert">
                            <i data-feather="thumbs-down"></i>
                            <p> You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-light dark alert-dismissible fade show" role="alert">
                            <i data-feather="alert-triangle"></i>
                            <p> You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-dark dark alert-dismissible fade show" role="alert">
                            <i data-feather="alert-circle"></i>
                            <p> You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Light Alerts</h5>
                        <span>Alerts are available for any length of text, as well as an optional dismiss button.</span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            <p>This is a primary alert—check it out!</p>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <p>This is a secondary alert—check it out!</p>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <p>This is a success alert—check it out!</p>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <p>This is a info alert—check it out!</p>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <p>This is a warning alert—check it out!</p>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <p>This is a danger alert—check it out!</p>
                        </div>
                        <div class="alert alert-light" role="alert">
                            <p>This is a light alert—check it out!</p>
                        </div>
                        <div class="alert alert-dark" role="alert">
                            <p>This is a light alert—check it out!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Link color</h5>
                        <span>Use the <code>.alert-link</code> utility class to quickly provide matching colored links within any alert</span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            <p>This is a primary alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <p>This is a secondary alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <p>This is a success alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <p>This is a info alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-warning" role="alert">
                            <p>This is a warning alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <p>This is a danger alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-light" role="alert">
                            <p>This is a light alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                        <div class="alert alert-dark" role="alert">
                            <p>This is a light alert with <a class="alert-link" href="#">an example link</a>.Click It</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h5>Dismissing</h5>
                        <span>To animate alerts when dismissing them, be sure to add the .fade and .show classes.</span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary alert-dismissible fade show" role="alert"><strong>Holy ! </strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert"><strong>Holy !</strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-success alert-dismissible fade show" role="alert"><strong>Holy !</strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-info alert-dismissible fade show" role="alert"><strong>Holy !</strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-warning alert-dismissible fade show" role="alert"><strong>Holy !</strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show" role="alert"><strong>Holy !</strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-light alert-dismissible fade show" role="alert"><strong>Holy !</strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-dark alert-dismissible fade show" role="alert"><strong>Holy !</strong> You can check in on some of those fields below.
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h5>Outline Alerts</h5>
                        <span>Outline Archive just adding class <code>.outline</code></span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary outline" role="alert">
                            <p>This is a primary alert—check it out!</p>
                        </div>
                        <div class="alert alert-secondary outline" role="alert">
                            <p>This is a secondary alert—check it out!</p>
                        </div>
                        <div class="alert alert-success outline" role="alert">
                            <p>This is a success alert—check it out!</p>
                        </div>
                        <div class="alert alert-info outline" role="alert">
                            <p>This is a info alert—check it out!</p>
                        </div>
                        <div class="alert alert-warning outline" role="alert">
                            <p>This is a warning alert—check it out!</p>
                        </div>
                        <div class="alert alert-danger outline" role="alert">
                            <p>This is a danger alert—check it out!</p>
                        </div>
                        <div class="alert alert-light outline" role="alert">
                            <p>This is a light alert—check it out!</p>
                        </div>
                        <div class="alert alert-dark outline" role="alert">
                            <p>This is a light alert—check it out!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h5>Outline Dark Alerts</h5>
                        <span>Outline Archive just adding class <code>.outline-2x</code></span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary outline-2x" role="alert">
                            <p>This is a primary alert—check it out!</p>
                        </div>
                        <div class="alert alert-secondary outline-2x" role="alert">
                            <p>This is a secondary alert—check it out!</p>
                        </div>
                        <div class="alert alert-success outline-2x" role="alert">
                            <p>This is a success alert—check it out!</p>
                        </div>
                        <div class="alert alert-info outline-2x" role="alert">
                            <p>This is a info alert—check it out!</p>
                        </div>
                        <div class="alert alert-warning outline-2x" role="alert">
                            <p>This is a warning alert—check it out!</p>
                        </div>
                        <div class="alert alert-danger outline-2x" role="alert">
                            <p>This is a danger alert—check it out!</p>
                        </div>
                        <div class="alert alert-light outline-2x" role="alert">
                            <p>This is a light alert—check it out!</p>
                        </div>
                        <div class="alert alert-dark outline-2x" role="alert">
                            <p>This is a light alert—check it out!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card height-equal">
                    <div class="card-header pb-0">
                        <h5>Alert With Icon outline</h5>
                        <span>Just add Any icon before text</span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary outline alert-dismissible fade show" role="alert">
                            <i data-feather="clock"></i>
                            <p>Your time Over after <b>5</b> miniute</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-secondary outline alert-dismissible fade show" role="alert">
                            <i data-feather="heart"></i>
                            <p> Oh snap! Change a few things up and submit again.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-success outline alert-dismissible fade show" role="alert">
                            <i data-feather="thumbs-up"></i>
                            <p><b> Well done! </b>You successfully read this important alert message.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-info outline alert-dismissible fade show" role="alert">
                            <i data-feather="help-circle"></i>
                            <p><b>welcome!</b> Start your day with some alerts.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-warning outline alert-dismissible fade show" role="alert">
                            <i data-feather="bell"></i>
                            <p><b> Congratulation! </b>Your Product Added in Like List</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-danger outline alert-dismissible fade show" role="alert">
                            <i data-feather="thumbs-down"></i>
                            <p>Your  <b> Perfomance </b> is down on this week</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-light outline alert-dismissible fade show" role="alert">
                            <i data-feather="alert-triangle"></i>
                            <p> You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-dark outline alert-dismissible fade show" role="alert">
                            <i data-feather="alert-circle"></i>
                            <p> You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Alert With Icon inverse</h5>
                        <span>Use the <code>.inverse</code> class to quickly provide matching colored links within any alert</span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary inverse alert-dismissible fade show" role="alert">
                            <i class="icon-timer"></i>
                            <p>Your time Over after <b>5</b> miniute</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-secondary inverse alert-dismissible fade show" role="alert">
                            <i class="icon-heart"></i>
                            <p>Oh snap! Change a few things up and submit again.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-success inverse alert-dismissible fade show" role="alert">
                            <i class="icon-thumb-up alert-center"></i>
                            <p><b> Well done! </b>You successfully read this important alert message.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-info inverse alert-dismissible fade show" role="alert">
                            <i class="icon-help-alt"></i>
                            <p><b>welcome!</b> Start your day with some alerts.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-warning inverse alert-dismissible fade show" role="alert">
                            <i class="icon-bell"></i>
                            <p><b> Congratulation! </b>Your Product Added in Like List</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-danger inverse alert-dismissible fade show" role="alert">
                            <i class="icon-thumb-down"></i>
                            <p>Your  <b> Perfomance </b> is down on this week</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-light inverse alert-dismissible fade show" role="alert">
                            <i class="icon-alert txt-dark"></i>
                            <p>You can check in on some of those fields below.</p>
                            <button class="btn-close txt-light" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        <div class="alert alert-dark inverse alert-dismissible fade show" role="alert">
                            <i class="icon-info-alt"></i>
                            <p> You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xl-6">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Text as action</h5>
                        <span>Use the <code>.action-text</code> class to add dismiss text instead of icon</span>
                    </div>
                    <div class="card-body dismiss-text">
                        <div class="alert alert-primary inverse alert-dismissible fade show" role="alert">
                            <i class="icon-timer"></i>
                            <p>Your time Over after <b>5</b> miniute</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-primary" aria-hidden="true">dismiss</span></button>
                        </div>
                        <div class="alert alert-secondary inverse alert-dismissible fade show" role="alert">
                            <i class="icon-heart"></i>
                            <p>Oh snap! Change a few things up and submit again.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-secondary" aria-hidden="true">dismiss</span></button>
                        </div>
                        <div class="alert alert-success inverse alert-dismissible fade show" role="alert">
                            <i class="icon-thumb-up alert-center"></i>
                            <p><b> Well done! </b>You successfully read this important alert message.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-success" aria-hidden="true">dismiss</span></button>
                        </div>
                        <div class="alert alert-info inverse alert-dismissible fade show" role="alert">
                            <i class="icon-help-alt"></i>
                            <p><b>welcome!</b> Start your day with some alerts.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-info" aria-hidden="true">dismiss</span></button>
                        </div>
                        <div class="alert alert-warning inverse alert-dismissible fade show" role="alert">
                            <i class="icon-bell"></i>
                            <p><b> Congratulation! </b>Your Product Added in Like List</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-warning" aria-hidden="true">dismiss</span></button>
                        </div>
                        <div class="alert alert-danger inverse alert-dismissible fade show" role="alert">
                            <i class="icon-thumb-down"></i>
                            <p>Your  <b> Perfomance </b> is down on this week</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-danger" aria-hidden="true">dismiss</span></button>
                        </div>
                        <div class="alert alert-light inverse alert-dismissible fade show" role="alert">
                            <i class="icon-alert txt-dark"></i>
                            <p>You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-light txt-dark" aria-hidden="true">dismiss</span></button>
                        </div>
                        <div class="alert alert-dark inverse alert-dismissible fade show" role="alert">
                            <i class="icon-info-alt"></i>
                            <p>You can check in on some of those fields below.</p>
                            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"><span class="bg-light txt-dark" aria-hidden="true">dismiss</span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Additional content</h5>
                        <span>Alerts can also contain additional HTML elements like headings, paragraphs and dividers.</span>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-primary" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                        <div class="alert alert-secondary" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                        <div class="alert alert-danger" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                        <div class="alert alert-info" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                        <div class="alert alert-light" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                        <div class="alert alert-dark" role="alert">
                            <h4 class="alert-heading">Well done!</h4>
                            <p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
                            <hr>
                            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script src="{{ asset('assets/js/height-equal.js')}}"></script>
        <script src="{{ asset('assets/js/tooltip-init.js')}}"></script> 
    @endpush
@endsection