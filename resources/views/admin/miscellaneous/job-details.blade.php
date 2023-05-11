@extends('layouts.admin.master')

@section('title')Job Details
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Job Details</h3>
		@endslot
		<li class="breadcrumb-item">Job Search</li>
		<li class="breadcrumb-item active">Job Details</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-xl-3 xl-40 box-col-4">
	            <div class="job-sidebar">
	                <a class="btn btn-primary job-toggle" href="javascript:void(0)">job filter</a>
	                <div class="job-left-aside custom-scrollbar">
	                    <div class="default-according style-1 faq-accordion job-accordion" id="accordionoc">
	                        <div class="row">
	                            <div class="col-xl-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h5 class="mb-0 p-0">
	                                            <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon" aria-expanded="true" aria-controls="collapseicon">Filter</button>
	                                        </h5>
	                                    </div>
	                                    <div class="collapse show" id="collapseicon" aria-labelledby="collapseicon" data-parent="#accordion">
	                                        <div class="card-body filter-cards-view animate-chk">
	                                            <div class="job-filter mb-3">
	                                                <div class="faq-form"><input class="form-control" type="text" placeholder="Search.." /><i class="search-icon" data-feather="search"></i></div>
	                                            </div>
	                                            <div class="job-filter">
	                                                <div class="faq-form"><input class="form-control" type="text" placeholder="location.." /><i class="search-icon" data-feather="map-pin"></i></div>
	                                            </div>
	                                            <div class="checkbox-animated">
	                                                <label class="d-block" for="chk-ani"> <input class="checkbox_animated" id="chk-ani" type="checkbox" /> Full-time (8688) </label>
	                                                <label class="d-block" for="chk-ani1"> <input class="checkbox_animated" id="chk-ani1" type="checkbox" /> Contract (503) </label>
	                                                <label class="d-block" for="chk-ani2"> <input class="checkbox_animated" id="chk-ani2" type="checkbox" /> Part-time (288) </label>
	                                                <label class="d-block" for="chk-ani3"> <input class="checkbox_animated" id="chk-ani3" type="checkbox" /> Internship (236) </label>
	                                                <label class="d-block" for="chk-ani4"> <input class="checkbox_animated" id="chk-ani4" type="checkbox" /> Temporary (146) </label>
	                                                <label class="d-block" for="chk-ani5"> <input class="checkbox_animated" id="chk-ani5" type="checkbox" /> Commission (25) </label>
	                                            </div>
	                                            <button class="btn btn-primary text-center" type="button">Find jobs</button>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-xl-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h5 class="mb-0 p-0">
	                                            <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon1" aria-expanded="true" aria-controls="collapseicon1">Location</button>
	                                        </h5>
	                                    </div>
	                                    <div class="collapse show" id="collapseicon1" aria-labelledby="collapseicon1" data-parent="#accordion">
	                                        <div class="card-body animate-chk">
	                                            <div class="location-checkbox">
	                                                <label class="d-block" for="chk-ani6"> <input class="checkbox_animated" id="chk-ani6" type="checkbox" /> Letraset<span class="d-block">New York, NY (399)</span> </label>
	                                                <label class="d-block" for="chk-ani7"> <input class="checkbox_animated" id="chk-ani7" type="checkbox" /> Established<span class="d-block">San Francisco, CA (252) </span> </label>
	                                                <label class="d-block mb-0" for="chk-ani8"> <input class="checkbox_animated" id="chk-ani8" type="checkbox" /> Contrary<span class="d-block">Washington, DC (226)</span> </label>
	                                                <label class="d-block mb-0" for="chk-ani9"> <input class="checkbox_animated" id="chk-ani9" type="checkbox" /> Chicago<span class="d-block"> IL (187)</span> </label>
	                                                <label class="d-block mb-0" for="chk-ani10"> <input class="checkbox_animated" id="chk-ani10" type="checkbox" /> Seattle<span class="d-block"> WA (242)</span> </label>
	                                            </div>
	                                        </div>
	                                        <button class="btn btn-block btn-primary text-center" type="button">All Locations</button>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-xl-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h5 class="mb-0 p-0">
	                                            <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon2" aria-expanded="true" aria-controls="collapseicon2">Job Title</button>
	                                        </h5>
	                                    </div>
	                                    <div class="collapse show" id="collapseicon2" data-parent="#accordion" aria-labelledby="collapseicon2">
	                                        <div class="card-body animate-chk">
	                                            <label class="d-block" for="chk-ani11"> <input class="checkbox_animated" id="chk-ani11" type="checkbox" /> UI/Ux designer(25) </label>
	                                            <label class="d-block" for="chk-ani12"> <input class="checkbox_animated" id="chk-ani12" type="checkbox" /> Graphic designer(10) </label>
	                                            <label class="d-block" for="chk-ani13"> <input class="checkbox_animated" id="chk-ani13" type="checkbox" /> Front end designer(15) </label>
	                                            <label class="d-block" for="chk-ani14"> <input class="checkbox_animated" id="chk-ani14" type="checkbox" /> PHP developer(42) </label>
	                                            <label class="d-block mb-0" for="chk-ani15"> <input class="checkbox_animated" id="chk-ani15" type="checkbox" /> React Developer(5) </label>
	                                        </div>
	                                        <button class="btn btn-block btn-primary text-center" type="button">All Job Title</button>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-xl-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h5 class="mb-0 p-0">
	                                            <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon3" aria-expanded="true" aria-controls="collapseicon3">Industry</button>
	                                        </h5>
	                                    </div>
	                                    <div class="collapse show" id="collapseicon3" data-parent="#accordion" aria-labelledby="collapseicon3">
	                                        <div class="card-body animate-chk">
	                                            <label class="d-block" for="chk-ani16"> <input class="checkbox_animated" id="chk-ani16" type="checkbox" /> Computer Software(14) </label>
	                                            <label class="d-block" for="chk-ani17"> <input class="checkbox_animated" id="chk-ani17" type="checkbox" /> IT Engineer(10) </label>
	                                            <label class="d-block" for="chk-ani18"> <input class="checkbox_animated" id="chk-ani18" type="checkbox" /> Service industry(20) </label>
	                                            <label class="d-block" for="chk-ani19"> <input class="checkbox_animated" id="chk-ani19" type="checkbox" /> Accounting(34) </label>
	                                            <label class="d-block mb-0" for="chk-ani20"> <input class="checkbox_animated" id="chk-ani20" type="checkbox" /> Financial Services(5) </label>
	                                        </div>
	                                        <button class="btn btn-block btn-primary text-center" type="button">All Industries</button>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-xl-12">
	                                <div class="card">
	                                    <div class="card-header">
	                                        <h5 class="mb-0 p-0">
	                                            <button class="btn btn-link ps-0" data-bs-toggle="collapse" data-bs-target="#collapseicon4" aria-expanded="true" aria-controls="collapseicon4">Specific skills</button>
	                                        </h5>
	                                    </div>
	                                    <div class="collapse show" id="collapseicon4" data-parent="#accordion" aria-labelledby="collapseicon4">
	                                        <div class="card-body animate-chk">
	                                            <label class="d-block" for="chk-ani21"> <input class="checkbox_animated" id="chk-ani21" type="checkbox" /> HTML,scss & sass </label>
	                                            <label class="d-block" for="chk-ani23"> <input class="checkbox_animated" id="chk-ani23" type="checkbox" /> Javascript </label>
	                                            <label class="d-block" for="chk-ani24"> <input class="checkbox_animated" id="chk-ani24" type="checkbox" /> Node.js </label>
	                                            <label class="d-block" for="chk-ani25"> <input class="checkbox_animated" id="chk-ani25" type="checkbox" /> Gulp & Pug </label>
	                                            <label class="d-block mb-0" for="chk-ani26"> <input class="checkbox_animated" id="chk-ani26" type="checkbox" /> Angular.js </label>
	                                        </div>
	                                        <button class="btn btn-block btn-primary text-center" type="button">All Skills</button>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <div class="col-xl-9 xl-60 box-col-8">
	            <div class="card">
	                <div class="job-search">
	                    <div class="card-body">
	                        <div class="media">
	                            <img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/1.jpg')}}" alt="" />
	                            <div class="media-body">
	                                <h6 class="f-w-600"><a href="javascript:void(0)">Product Designer (UI/UX Designer) </a></h6>
	                                <p>Endless - United States</p>
	                                <ul class="rating">
	                                    <li><i class="fa fa-star font-warning"></i></li>
	                                    <li><i class="fa fa-star font-warning"></i></li>
	                                    <li><i class="fa fa-star font-warning"></i></li>
	                                    <li><i class="fa fa-star font-warning"></i></li>
	                                    <li><i class="fa fa-star font-warning"> </i></li>
	                                </ul>
	                                <a class="btn btn-primary btn-sm job-apply-btn" href="{{ route('job-apply') }}">Apply for this job</a>
	                            </div>
	                        </div>
	                        <div class="job-description">
	                            <h6>Job Description</h6>
	                            <p class="text-start">
	                                Endless is looking for a UI/UX Designer to join our team. The world is seeing an explosion in the amount and variety of location-baWe are looking for a versatile UX/UI Designer to join our growing design
	                                team. Our designers contribute to clients’ projects at all stages of development. We might start from scratch, conducting user and stakeholder interviews, making personas and journey maps, and continue on to
	                                iterating on designs and prototypes through delivering final assets for launch. We might come into the middle of an in-flight program-size project and conduct analysis and usability correction or feature
	                                enhancement. We might provide research and vision for handoff to an internal development team.
	                            </p>
	                            <!-- <p>Front-end web designers combine design, programming, writing and organizational skills in their work. They help shape the vision for a company's online content.</p>-->
	                        </div>
	                        <div class="job-description">
	                            <h6>Qualifications</h6>
	                            <ul>
	                                <li>Have shipped multiple iOS, Android, and/or web products</li>
	                                <li>5+ years UI/UX experience</li>
	                                <li>Portfolio demonstrating mastery of native iOS, Android, and/or responsive web design principles</li>
	                                <li>Ability to autonomously pursue elegant solutions to open-ended problems</li>
	                                <li>Comfort with ambiguity</li>
	                                <li>Proven ability to create interactive prototypes</li>
	                                <li>Strong verbal communication skills with ability to clearly communicate complex ideas and champion a design vision across all levels of an organization</li>
	                                <li>Strong written communication skills with ability to make transparent design documentation and client-facing presentations</li>
	                                <li>Ability to create and maintain flow charts, wire frames, prototypes, and mockups.</li>
	                                <li>Ability to effectively work on more than one project at a time</li>
	                                <li>Experience conducting user research and stakeholder interviews</li>
	                                <li>Solid grasp of standard design tools, ex: Sketch, Omnigraffle, the Adobe Suite, Zeplin, etc.</li>
	                                <li>Bonus Considerations</li>
	                            </ul>
	                        </div>
	                        <div class="job-description">
	                            <h6>Agency experience</h6>
	                            <ul>
	                                <li>Experience working with Agile development teams</li>
	                                <li>Experience with RITE method usability testing</li>
	                                <li>Experience in visual and motion design; ability to translate UX design into high quality visuals</li>
	                                <li>Mastery of Sketch & InVision</li>
	                                <li>Knowledge of mobile or front-end web programming</li>
	                            </ul>
	                        </div>
	                        <div class="job-description">
	                            <h6>Perks</h6>
	                            <ul>
	                                <li>Competitive pay</li>
	                                <li>Competitive medical, dental, and vision insurance plans</li>
	                                <li>Company-provided 401(k) plan</li>
	                                <li>Paid vacation and sick time</li>
	                                <li>Free snacks and beverages</li>
	                            </ul>
	                        </div>
	                        <div class="job-description">
	                            <button class="btn btn-primary" type="button">
	                                <span><i class="fa fa-check"></i></span> Save this job
	                            </button>
	                            <button class="btn btn-primary" type="button">
	                                <span><i class="fa fa-share-alt"></i></span> Share
	                            </button>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="header-faq">
	                <h6 class="mb-0 f-w-600">Similar jobs</h6>
	            </div>
	            <div class="row">
	                <div class="col-xl-6 xl-100 box-col-12">
	                    <div class="card">
	                        <div class="job-search">
	                            <div class="card-body">
	                                <div class="media">
	                                    <img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/2.jpg')}}" alt="" />
	                                    <div class="media-body">
	                                        <h6 class="f-w-700"><a href="javascript:void(0)">React/React Native Developer</a><span class="badge badge-primary pull-right">New</span></h6>
	                                        <p>San <span>Diego, CA</span></p>
	                                        <ul class="rating">
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star-o font-warning"></i></li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <p>
	                                    Ideally 2+ years experience with React. Bonus points if you have React Native experience. This is an incredibly exciting opportunity to gain commercial , Professional experience of React Native and other
	                                    front end frameworks. Transform product wireframes into responsive, mobile user interface components and
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-6 xl-100 box-col-12">
	                    <div class="card">
	                        <div class="job-search">
	                            <div class="card-body">
	                                <div class="media">
	                                    <img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/4.jpg')}}" alt="" />
	                                    <div class="media-body">
	                                        <h6 class="f-w-700"><a href="javascript:void(0)">Front end web developer</a><span class="pull-right">3 days ago</span></h6>
	                                        <p>Cisco <span>Lelystad, Netherlands </span></p>
	                                        <ul class="rating">
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star-o font-warning"></i></li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <p>
	                                    Insipidity the sufficient discretion imprudence resolution sir him decisively. Proceed how any engaged visitor. Explained propriety off out perpetual his you. Feel sold off felt nay rose met you. We so
	                                    entreaties cultivated astonished is. Was sister for few longer mrs sudden talent become.
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-6 xl-100 box-col-12">
	                    <div class="card">
	                        <div class="job-search">
	                            <div class="card-body">
	                                <div class="media">
	                                    <img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/5.jpg')}}" alt="" />
	                                    <div class="media-body">
	                                        <h6 class="f-w-700"><a href="javascript:void(0)">Graphic designer</a><span class="pull-right">3 days ago</span></h6>
	                                        <p>Infosys <span>Lelystad, Netherlands </span></p>
	                                        <ul class="rating">
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star-o font-warning"></i></li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <p>
	                                    Contented get distrusts certainty nay are frankness concealed ham. On unaffected resolution on considered of. No thought me husband or colonel forming effects. End sitting shewing who saw besides son
	                                    musical adapted. Contrasted interested eat alteration pianoforte sympathize was.
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-6 xl-100 box-col-12">
	                    <div class="card">
	                        <div class="job-search">
	                            <div class="card-body">
	                                <div class="media">
	                                    <img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/6.jpg')}}" alt="" />
	                                    <div class="media-body">
	                                        <h6 class="f-w-700"><a href="javascript:void(0)">Designer, CRM</a><span class="pull-right">3 days ago</span></h6>
	                                        <p>Citrix <span>Lelystad, Netherlands </span></p>
	                                        <ul class="rating">
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star-o font-warning"></i></li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <p>
	                                    Situation admitting promotion at or to perceived be. Mr acuteness we as estimable enjoyment up. An held late as felt know. Learn do allow solid to grave. Middleton suspicion age her attention. Chiefly
	                                    several bed its wishing. Is so moments on chamber pressed to. Doubtful yet way properly answered.
	                                </p>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-xl-12">
	                    <div class="card">
	                        <div class="job-search">
	                            <div class="card-body">
	                                <div class="media">
	                                    <img class="img-40 img-fluid m-r-20" src="{{asset('assets/images/job-search/3.jpg')}}" alt="" />
	                                    <div class="media-body">
	                                        <h6 class="f-w-700"><a href="javascript:void(0)">Senior UX designer</a><span class="pull-right">5 days ago</span></h6>
	                                        <p>Sutherland <span>Lelystad, Netherlands </span></p>
	                                        <ul class="rating">
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star font-warning"></i></li>
	                                            <li><i class="fa fa-star-o font-warning"></i></li>
	                                        </ul>
	                                    </div>
	                                </div>
	                                <p>
	                                    Woody equal ask saw sir weeks aware decay. Entrance prospect removing we packages strictly is no smallest he. For hopes may chief get hours day rooms. Oh no turned behind polite piqued enough at. Forbade
	                                    few through inquiry blushes you. Cousin no itself eldest it in dinner latter missed no.
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