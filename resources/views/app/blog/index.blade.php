@extends('layouts.master')

@section('title')Blog
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>@lang('app._blog')</h3>
		@endslot
		<li class="breadcrumb-item">@lang('app._blog')</li>
		<li class="breadcrumb-item active">@lang('app.blog.latest')</li>
	@endcomponent
	
	<div class="container-fluid blog-page">
	    <div class="row">
	        @if (count($posts) > 0)
				@foreach ($posts as $item)
					<div class="col-sm-6 col-xl-3 box-col-6 des-xl-50">
						<div class="card">
							<div class="blog-box blog-grid">
								<div class="blog-wrraper">
									<a href="{{ route('blog.show', $item->id) }}"><img class="img-fluid top-radius-blog" src="{{ asset($item->photo) ?? asset('assets/images/blog/blog-5.jpg') }}" alt="{{ $item->title }}" /></a>
								</div>
								<div class="blog-details-second">
									<div class="blog-post-date">
										<span class="blg-month">{{ Carbon\Carbon::parse($item->created_at)->format('M') }}</span>
										<span class="blg-date">{{ Carbon\Carbon::parse($item->created_at)->format('d') }}</span>
									</div>
									<a href="blog-single.html"> <h6 class="blog-bottom-details">{{ $item->title }}</h6></a>
									<p>{{ Illuminate\Support\Str::limit($item->description, 30) }}</p>
									<div class="detail-footer">
										<ul class="sociyal-list">
											<li><i class="fa fa-user-o"></i>{{ App\Models\User::getUser($item->user_id)->username }}</li>
											<li><i class="fa fa-comments-o"></i>5</li>
											{{-- <li><i class="fa fa-thumbs-o-up"></i>2 like</li> --}}
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				@endforeach
			@else
				<h3 class="text-center">
					@lang('app.blog.no_blog_post_yet')
				</h3>
			@endif
	    </div>
	</div>

	
	@push('scripts')
	@endpush

@endsection