@extends('layouts.admin.master')

@section('title')Edge Style
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css')}}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Edge Buttons</h3>
		@endslot
		<li class="breadcrumb-item">Buttons</li>
		<li class="breadcrumb-item active">Edge Style</li>
	@endcomponent
	
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header pb-0">
						<h5>Default buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"> </i></li>
							</ul>
						</div>
						<span>Add <code>.btn-pill</code> class for edge button</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-primary" type="button">Primary Button</button>
						<button class="btn btn-pill btn-secondary" type="button">Secondary Button</button>
						<button class="btn btn-pill btn-success" type="button">Success Button</button>
						<button class="btn btn-pill btn-info" type="button">Info Button</button>
						<button class="btn btn-pill btn-warning" type="button">Warning Button</button>
						<button class="btn btn-pill btn-danger" type="button">Danger Button</button>
						<button class="btn btn-pill btn-light" type="button">Light Button</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-primary"&gt;primary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-secondary"&gt;secondary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-success"&gt;Success button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-info"&gt;Info button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-warning"&gt;warning button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-danger"&gt;danger button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-light"&gt;light button&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Large buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"> </i></li>
							</ul>
						</div>
						<span>Add <code>.btn-pill</code> and <code>.btn-lg</code> class for large button</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-primary btn-lg" type="button">Primary Button</button>
						<button class="btn btn-pill btn-secondary btn-lg" type="button">Secondary Button</button>
						<button class="btn btn-pill btn-success btn-lg" type="button">Success Button</button>
						<button class="btn btn-pill btn-info btn-lg" type="button">Info Button</button>
						<button class="btn btn-pill btn-warning btn-lg" type="button">Warning Button</button>
						<button class="btn btn-pill btn-danger btn-lg" type="button">Danger Button</button>
						<button class="btn btn-pill btn-light btn-lg" type="button">Light Button</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-primary btn-lg"&gt;primary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-secondary btn-lg"&gt;secondary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-success btn-lg"&gt;Success button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-info btn-lg"&gt;Info button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-warning btn-lg"&gt;warning button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-danger btn-lg"&gt;danger button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-light btn-lg"&gt;light button&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Small buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
						<span>Add <code>.btn-pill</code> and <code>.btn-sm</code> class for small button</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-primary btn-sm" type="button">Primary Button</button>
						<button class="btn btn-pill btn-secondary btn-sm" type="button">Secondary Button</button>
						<button class="btn btn-pill btn-success btn-sm" type="button">Success Button</button>
						<button class="btn btn-pill btn-info btn-sm" type="button">Info Button</button>
						<button class="btn btn-pill btn-warning btn-sm" type="button">Warning Button</button>
						<button class="btn btn-pill btn-danger btn-sm" type="button">Danger Button</button>
						<button class="btn btn-pill btn-light btn-sm" type="button">Light Button</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-primary btn-sm"&gt;primary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-secondary btn-sm"&gt;secondary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-success btn-sm"&gt;Success button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-info btn-sm"&gt;Info button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-warning btn-sm"&gt;warning button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-danger btn-sm"&gt;danger button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-light btn-sm"&gt;light button&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Active Buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
						<span>Add <code>.active</code> for active state</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-primary active" type="button">Active</button>
						<button class="btn btn-pill btn-secondary active" type="button">Active</button>
						<button class="btn btn-pill btn-success active" type="button">Active</button>
						<button class="btn btn-pill btn-info active" type="button">Active</button>
						<button class="btn btn-pill btn-warning active" type="button">Active</button>
						<button class="btn btn-pill btn-danger active" type="button">Active</button>
						<button class="btn btn-pill btn-light active txt-dark" type="button">Active</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-primary active"&gt;Active&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-secondary active"&gt;Active&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-success active"&gt;Active&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-info active"&gt;Active&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-warning active"&gt;Active&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-danger active"&gt;Active&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-light active txt-dark"&gt;Active&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Disabled buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
						<span>Add <code>.disabled</code> class or <code>disabled="disabled"</code> attribute for disabled button</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-primary disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-secondary disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-success disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-info disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-warning disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-danger disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-light disabled" type="button">Disabled</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-primary disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-secondary disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-success disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-info disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-warning disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-danger disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-light disabled"&gt;Disabled&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Custom state buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
						<span>The <code>.btn</code> class used with <code>&lt;button&gt;</code>, <code>&lt;a&gt;</code> and <code>&lt;input&gt;</code> elements.</span>
					</div>
					<div class="card-body btn-showcase">
						<a class="btn btn-pill btn-primary" href="javascript:void(0)" data-bs-toggle="tooltip" title="btn btn-primary" role="button">Link</a>
						<input class="btn btn-pill btn-secondary" type="button" value="Input" data-bs-toggle="tooltip" title="btn btn-secondary" />
						<input class="btn btn-pill btn-success" type="submit" value="Submit" data-bs-toggle="tooltip" title="btn btn-success" />
						<button class="btn btn-pill btn-info" type="submit">Button</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
	&lt;a class=&quot;btn btn-pill btn-primary&quot; href=&quot;#&quot; data-bs-toggle=&quot;tooltip;&quot; title=&quot;btn btn-primary&quot; role=&quot;button&quot;&gt;link&lt;/button&gt;
	&lt;input class=&quot;btn btn-pill btn-primary&quot; type=&quot;button&quot; value=&quot;Input&quot;  data-bs-toggle=&quot;tooltip;&quot; title=&quot;btn btn-secondary&quot;&gt;
	&lt;input class=&quot;btn btn-pill btn-success&quot; type=&quot;submit&quot; value=&quot;Submit&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;btn btn-success&quot;&gt;
	&lt;button class=&quot;btn btn-pill btn-info&quot; type=&quot;submit&quot;&gt;Button&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>outline buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
						<span>Add <code>.btn-pill</code> and <code>.btn-outline-*</code> class for button with outline</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-outline-primary" type="button">Primary Button</button>
						<button class="btn btn-pill btn-outline-secondary" type="button">Secondary Button</button>
						<button class="btn btn-pill btn-outline-success" type="button">Success Button</button>
						<button class="btn btn-pill btn-outline-info" type="button">Info Button</button>
						<button class="btn btn-pill btn-outline-warning" type="button">Warning Button</button>
						<button class="btn btn-pill btn-outline-danger" type="button">Danger Button</button>
						<button class="btn btn-pill btn-outline-light txt-dark" type="button">Light Button</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head6" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head6">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-primary"&gt;primary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-secondary"&gt;secondary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-success"&gt;Success button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-info"&gt;Info button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-warning"&gt;warning button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-danger"&gt;danger button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-light txt-dark"&gt;light button&lt;/button&gt;
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>bold Border outline buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
						<span>Add <code>.btn-pill</code> and <code>.btn-outline-*-2x</code> class for button with bold outline</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-outline-primary-2x" type="button">Primary Button</button>
						<button class="btn btn-pill btn-outline-secondary-2x" type="button">Secondary Button</button>
						<button class="btn btn-pill btn-outline-success-2x" type="button">Success Button</button>
						<button class="btn btn-pill btn-outline-info-2x" type="button">Info Button</button>
						<button class="btn btn-pill btn-outline-warning-2x" type="button">Warning Button</button>
						<button class="btn btn-pill btn-outline-danger-2x" type="button">Danger Button</button>
						<button class="btn btn-pill btn-outline-light-2x txt-dark" type="button">Light Button</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head7" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head7">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-primary-2x"&gt;primary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-secondary-2x"&gt;secondary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-success-2x"&gt;Success button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-info-2x"&gt;Info button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-warning-2x"&gt;warning button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-danger-2x"&gt;danger button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-light-2x txt-dark"&gt;light button&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>outline Large buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
						<span>Add <code>.btn-pill</code>,<code>.btn-outline-*</code> and <code>.btn-lg</code> class for large button</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-outline-primary btn-lg" type="button">Primary Button</button>
						<button class="btn btn-pill btn-outline-secondary btn-lg" type="button">Secondary Button</button>
						<button class="btn btn-pill btn-outline-success btn-lg" type="button">Success Button</button>
						<button class="btn btn-pill btn-outline-info btn-lg" type="button">Info Button</button>
						<button class="btn btn-pill btn-outline-warning btn-lg" type="button">Warning Button</button>
						<button class="btn btn-pill btn-outline-danger btn-lg" type="button">Danger Button</button>
						<button class="btn btn-pill btn-outline-light btn-lg txt-dark" type="button">Light Button</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head8" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head8">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-primary btn-lg"&gt;primary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-secondary btn-lg"&gt;secondary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-success btn-lg"&gt;Success button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-info btn-lg"&gt;Info button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-warning btn-lg"&gt;warning button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-danger btn-lg"&gt;danger button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-light btn-lg txt-dark"&gt;light button&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>outline small buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
						<span>Add <code>.btn-pill</code>,<code>.btn-outline-*</code> and <code>.btn-sm</code> class for small button</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-outline-primary btn-sm" type="button">Primary Button</button>
						<button class="btn btn-pill btn-outline-secondary btn-sm" type="button">Secondary Button</button>
						<button class="btn btn-pill btn-outline-success btn-sm" type="button">Success Button</button>
						<button class="btn btn-pill btn-outline-info btn-sm" type="button">Info Button</button>
						<button class="btn btn-pill btn-outline-warning btn-sm" type="button">Warning Button</button>
						<button class="btn btn-pill btn-outline-danger btn-sm" type="button">Danger Button</button>
						<button class="btn btn-pill btn-outline-light btn-sm txt-dark" type="button">Light Button</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head9" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head9">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-primary btn-sm"&gt;primary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-secondary btn-sm"&gt;secondary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-success btn-sm"&gt;Success button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-info btn-sm"&gt;Info button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-warning btn-sm"&gt;warning button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-danger btn-sm"&gt;danger button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-light btn-sm txt-dark"&gt;light button&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Outline extra small buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
						<span>Add <code>.btn-pill</code>,<code>.btn-outline-*</code> and <code>.btn-xs</code> class for extra small button</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-outline-primary btn-xs" type="button">Primary Button</button>
						<button class="btn btn-pill btn-outline-secondary btn-xs" type="button">Secondary Button</button>
						<button class="btn btn-pill btn-outline-success btn-xs" type="button">Success Button</button>
						<button class="btn btn-pill btn-outline-info btn-xs" type="button">Info Button</button>
						<button class="btn btn-pill btn-outline-warning btn-xs" type="button">Warning Button</button>
						<button class="btn btn-pill btn-outline-danger btn-xs" type="button">Danger Button</button>
						<button class="btn btn-pill btn-outline-light btn-xs txt-dark" type="button">Light Button</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head10" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head10">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-primary btn-xs"&gt;primary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-secondary btn-xs"&gt;secondary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-success btn-xs"&gt;Success button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-info btn-xs"&gt;Info button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-warning btn-xs"&gt;warning button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-danger btn-xs"&gt;danger button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-light btn-xs txt-dark"&gt;light button&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Disabled outline buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
						<span>Add <code>.disabled</code> class or <code>disabled="disabled"</code> attribute for disabled button</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-outline-primary disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-outline-secondary disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-outline-success disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-outline-info disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-outline-warning disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-outline-danger disabled" type="button">Disabled</button>
						<button class="btn btn-pill btn-outline-light disabled txt-dark" type="button">Disabled</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head11" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head11">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-primary disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-secondary disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-success disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-info disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-warning disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-danger disabled"&gt;Disabled&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-outline-light disabled txt-dark"&gt;Disabled&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
				<div class="card">
					<div class="card-header pb-0">
						<h5>Gradien buttons</h5>
						<div class="setting-list">
							<ul class="list-unstyled setting-option">
								<li>
									<div class="setting-primary"><i class="icon-settings"></i></div>
								</li>
								<li><i class="view-html fa fa-code font-primary"></i></li>
								<li><i class="icofont icofont-maximize full-card font-primary"></i></li>
								<li><i class="icofont icofont-minus minimize-card font-primary"></i></li>
								<li><i class="icofont icofont-refresh reload-card font-primary"></i></li>
								<li><i class="icofont icofont-error close-card font-primary"></i></li>
							</ul>
						</div>
						<span>Add <code>.btn-pill</code> and <code>.btn-*-gradien</code>class for gradien button</span>
					</div>
					<div class="card-body btn-showcase">
						<button class="btn btn-pill btn-primary-gradien" type="button">Primary Button</button>
						<button class="btn btn-pill btn-secondary-gradien" type="button">Secondary Button</button>
						<button class="btn btn-pill btn-success-gradien" type="button">Success Button</button>
						<button class="btn btn-pill btn-info-gradien" type="button">Info Button</button>
						<button class="btn btn-pill btn-warning-gradien" type="button">Warning Button</button>
						<button class="btn btn-pill btn-danger-gradien" type="button">Danger Button</button>
						<button class="btn btn-pill btn-light-gradien txt-dark" type="button">Light Button</button>
						<div class="code-box-copy">
							<button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head12" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
							<pre><code class="language-html" id="example-head12">&lt;!-- Cod Box Copy begin --&gt;
	&lt;button type="button" class="btn btn-pill btn-primary-gradien"&gt;primary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-secondary-gradien"&gt;secondary button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-success-gradien"&gt;Success button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-info-gradien"&gt;Info button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-warning-gradien"&gt;warning button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-danger-gradien"&gt;danger button&lt;/button&gt;
	&lt;button type="button" class="btn btn-pill btn-light-gradien.txt-dark"&gt;light button&lt;/button&gt; 
	&lt;!-- Cod Box Copy end --&gt;</code></pre>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>	
	
	@push('scripts')
	<script src="{{ asset('assets/js/prism/prism.min.js')}}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js')}}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js')}}"></script>
	@endpush

@endsection