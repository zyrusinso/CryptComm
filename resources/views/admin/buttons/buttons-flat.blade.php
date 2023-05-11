@extends('layouts.admin.master')

@section('title')Flat Buttons
 {{ $title }}
@endsection

@push('css')
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/prism.css') }}">
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Flat Buttons</h3>
		@endslot
		<li class="breadcrumb-item">Buttons</li>
		<li class="breadcrumb-item active">Flat Buttons</li>
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
					<li><i class="icofont icofont-error close-card font-primary"></i></li>
				  </ul>
				</div><span>Add <code>.btn-square</code> class for flat button</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-primary" type="button">Primary Button</button>
				<button class="btn btn-square btn-secondary" type="button">Secondary Button</button>
				<button class="btn btn-square btn-success" type="button">Success Button</button>
				<button class="btn btn-square btn-info" type="button">Info Button</button>
				<button class="btn btn-square btn-warning" type="button">Warning Button</button>
				<button class="btn btn-square btn-danger" type="button">Danger Button</button>
				<button class="btn btn-square btn-light" type="button">Light Button</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-primary&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-secondary&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-success&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-info&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-warning&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-danger&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-light&quot;&gt;light button&lt;/button&gt; 
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
					<li><i class="icofont icofont-error close-card font-primary"></i></li>
				  </ul>
				</div><span>Add <code>.btn-square</code> and <code>.btn-lg</code> class for large button</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-primary btn-lg" type="button">Primary Button</button>
				<button class="btn btn-square btn-secondary btn-lg" type="button">Secondary Button</button>
				<button class="btn btn-square btn-success btn-lg" type="button">Success Button</button>
				<button class="btn btn-square btn-info btn-lg" type="button">Info Button</button>
				<button class="btn btn-square btn-warning btn-lg" type="button">Warning Button</button>
				<button class="btn btn-square btn-danger btn-lg" type="button">Danger Button</button>
				<button class="btn btn-square btn-light btn-lg" type="button">Light Button</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head1" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head1">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-primary btn-lg&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-secondary btn-lg&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-success btn-lg&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-info btn-lg&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-warning btn-lg&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-danger btn-lg&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-light btn-lg&quot;&gt;light button&lt;/button&gt; 
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
				</div><span>Add <code>.btn-square</code> and <code>.btn-sm</code> class for small button</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-primary btn-sm" type="button">Primary Button</button>
				<button class="btn btn-square btn-secondary btn-sm" type="button">Secondary Button</button>
				<button class="btn btn-square btn-success btn-sm" type="button">Success Button</button>
				<button class="btn btn-square btn-info btn-sm" type="button">Info Button</button>
				<button class="btn btn-square btn-warning btn-sm" type="button">Warning Button</button>
				<button class="btn btn-square btn-danger btn-sm" type="button">Danger Button</button>
				<button class="btn btn-square btn-light btn-sm" type="button">Light Button</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head2" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head2">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-primary btn-sm&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-secondary btn-sm&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-success btn-sm&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-info btn-sm&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-warning btn-sm&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-danger btn-sm&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-light btn-sm&quot;&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
				</div>
			  </div>
			</div>
			<div class="card">
			  <div class="card-header pb-0">
				<h5>Extra Small buttons</h5>
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
				</div><span>Add <code>.btn-square</code> and <code>.btn-xs</code> class for extra small button</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-primary btn-xs" type="button">Primary Button</button>
				<button class="btn btn-square btn-secondary btn-xs" type="button">Secondary Button</button>
				<button class="btn btn-square btn-success btn-xs" type="button">Success Button</button>
				<button class="btn btn-square btn-info btn-xs" type="button">Info Button</button>
				<button class="btn btn-square btn-warning btn-xs" type="button">Warning Button</button>
				<button class="btn btn-square btn-danger btn-xs" type="button">Danger Button</button>
				<button class="btn btn-square btn-light btn-xs" type="button">Light Button</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head3" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head3">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-primary btn-xs&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-secondary btn-xs&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-success btn-xs&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-info btn-xs&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-warning btn-xs&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-danger btn-xs&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-light btn-xs&quot;&gt;light button&lt;/button&gt; 
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
				</div><span>Add <code>.active</code> for active state</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-primary active" type="button">Active</button>
				<button class="btn btn-square btn-secondary active" type="button">Active</button>
				<button class="btn btn-square btn-success active" type="button">Active</button>
				<button class="btn btn-square btn-info active" type="button">Active</button>
				<button class="btn btn-square btn-warning active" type="button">Active</button>
				<button class="btn btn-square btn-danger active" type="button">Active</button>
				<button class="btn btn-square btn-light active txt-dark" type="button">Active</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head4" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head4">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-primary active&quot;&gt;Active&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-secondary active&quot;&gt;Active&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-success active&quot;&gt;Active&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-info active&quot;&gt;Active&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-warning active&quot;&gt;Active&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-danger active&quot;&gt;Active&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-light active txt-dark&quot;&gt;Active&lt;/button&gt; 
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
				</div><span>Add <code>.disabled</code> class or <code>disabled="disabled"</code> attribute for disabled button</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-primary disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-secondary disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-success disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-info disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-warning disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-danger disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-light disabled" type="button">Disabled</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head5" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head5">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-primary disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-secondary disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-success disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-info disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-warning disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-danger disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-light disabled txt-dark&quot;&gt;Disabled&lt;/button&gt; 
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
				</div><span>The <code>.btn</code> class used with <code>&lt;button&gt;</code>, <code>&lt;a&gt;</code> and <code>&lt;input&gt;</code> elements.</span>
			  </div>
			  <div class="card-body btn-showcase"><a class="btn btn-square btn-primary" href="javascript:void(0)" data-bs-toggle="tooltip" title="btn btn-primary" role="button">Link</a>
				<input class="btn btn-square btn-secondary" type="button" value="Input" data-bs-toggle="tooltip" title="btn btn-secondary">
				<input class="btn btn-square btn-success" type="submit" value="Submit" data-bs-toggle="tooltip" title="btn btn-success">
				<button class="btn btn-square btn-info" type="submit">Button</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head6" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head6">&lt;!-- Cod Box Copy begin --&gt;
&lt;a class=&quot;btn btn-square btn-primary&quot; href=&quot;#&quot; data-bs-toggle=&quot;tooltip;&quot; title=&quot;btn btn-primary&quot; role=&quot;button&quot;&gt;link&lt;/button&gt;
&lt;input class=&quot;btn btn-square btn-primary&quot; type=&quot;button&quot; value=&quot;Input&quot;  data-bs-toggle=&quot;tooltip;&quot; title=&quot;btn btn-secondary&quot;&gt;
&lt;input class=&quot;btn btn-square btn-success&quot; type=&quot;submit&quot; value=&quot;Submit&quot; data-bs-toggle=&quot;tooltip&quot; title=&quot;btn btn-success&quot;&gt;
&lt;button class=&quot;btn btn-square btn-info&quot; type=&quot;submit&quot;&gt;Button&lt;/button&gt; 
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
				</div><span>Add <code>.btn-square</code> and <code>.btn-outline-*</code> class for button with outline</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-outline-primary" type="button">Primary Button</button>
				<button class="btn btn-square btn-outline-secondary" type="button">Secondary Button</button>
				<button class="btn btn-square btn-outline-success" type="button">Success Button</button>
				<button class="btn btn-square btn-outline-info" type="button">Info Button</button>
				<button class="btn btn-square btn-outline-warning" type="button">Warning Button</button>
				<button class="btn btn-square btn-outline-danger" type="button">Danger Button</button>
				<button class="btn btn-square btn-outline-light txt-dark" type="button">Light Button</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head7" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head7">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-primary&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-secondary&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-success&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-info&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-warning&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-danger&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-light txt-dark&quot;&gt;light button&lt;/button&gt; 
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
				</div><span>Add <code>.btn-square</code> and <code>.btn-outline-*-2x</code> class for button with bold outline</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-outline-primary-2x" type="button">Primary Button</button>
				<button class="btn btn-square btn-outline-secondary-2x" type="button">Secondary Button</button>
				<button class="btn btn-square btn-outline-success-2x" type="button">Success Button</button>
				<button class="btn btn-square btn-outline-info-2x" type="button">Info Button</button>
				<button class="btn btn-square btn-outline-warning-2x" type="button">Warning Button</button>
				<button class="btn btn-square btn-outline-danger-2x" type="button">Danger Button</button>
				<button class="btn btn-square btn-outline-light-2x txt-dark" type="button">Light Button</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head8" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head8">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-primary-2x&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-secondary-2x&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-success-2x&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-info-2x&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-warning-2x&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-danger-2x&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-light-2x txt-dark&quot;&gt;light button&lt;/button&gt; 
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
				</div><span>Add <code>.btn-square</code>,<code>.btn-outline-*</code> and <code>.btn-lg</code> class for large button</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-outline-primary btn-lg" type="button">Primary Button</button>
				<button class="btn btn-square btn-outline-secondary btn-lg" type="button">Secondary Button</button>
				<button class="btn btn-square btn-outline-success btn-lg" type="button">Success Button</button>
				<button class="btn btn-square btn-outline-info btn-lg" type="button">Info Button</button>
				<button class="btn btn-square btn-outline-warning btn-lg" type="button">Warning Button</button>
				<button class="btn btn-square btn-outline-danger btn-lg" type="button">Danger Button</button>
				<button class="btn btn-square btn-outline-light btn-lg txt-dark" type="button">Light Button</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head9" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head9">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-primary btn-lg&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-secondary btn-lg&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-success btn-lg&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-info btn-lg&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-warning btn-lg&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-danger btn-lg&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-light btn-lg txt-dark&quot;&gt;light button&lt;/button&gt; 
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
				</div><span>Add <code>.btn-square</code>,<code>.btn-outline-*</code> and <code>.btn-sm</code> class for small button</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-outline-primary btn-sm" type="button">Primary Button</button>
				<button class="btn btn-square btn-outline-secondary btn-sm" type="button">Secondary Button</button>
				<button class="btn btn-square btn-outline-success btn-sm" type="button">Success Button</button>
				<button class="btn btn-square btn-outline-info btn-sm" type="button">Info Button</button>
				<button class="btn btn-square btn-outline-warning btn-sm" type="button">Warning Button</button>
				<button class="btn btn-square btn-outline-danger btn-sm" type="button">Danger Button</button>
				<button class="btn btn-square btn-outline-light btn-sm txt-dark" type="button">Light Button</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head10" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head10">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-primary btn-sm&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-secondary btn-sm&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-success btn-sm&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-info btn-sm&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-warning btn-sm&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-danger btn-sm&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-light btn-sm txt-dark&quot;&gt;light button&lt;/button&gt;
&lt;!-- Cod Box Copy end --&gt;</code></pre>
				</div>
			  </div>
			</div>
			<div class="card">
			  <div class="card-header pb-0">
				<h5>outline Extra small buttons</h5>
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
				</div><span>Add <code>.btn-square</code>,<code>.btn-outline-*</code> and <code>.btn-xs</code> class for extra small button</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-outline-primary btn-xs" type="button">Primary Button</button>
				<button class="btn btn-square btn-outline-secondary btn-xs" type="button">Secondary Button</button>
				<button class="btn btn-square btn-outline-success btn-xs" type="button">Success Button</button>
				<button class="btn btn-square btn-outline-info btn-xs" type="button">Info Button</button>
				<button class="btn btn-square btn-outline-warning btn-xs" type="button">Warning Button</button>
				<button class="btn btn-square btn-outline-danger btn-xs" type="button">Danger Button</button>
				<button class="btn btn-square btn-outline-light btn-xs txt-dark" type="button">Light Button</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head11" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head11">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-primary btn-xs&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-secondary btn-xs&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-success btn-xs&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-info btn-xs&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-warning btn-xs&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-danger btn-xs&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-light btn-xs txt-dark&quot;&gt;light button&lt;/button&gt;
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
				</div><span>Add <code>.disabled</code> class or <code>disabled="disabled"</code> attribute for disabled button</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-outline-primary disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-outline-secondary disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-outline-success disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-outline-info disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-outline-warning disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-outline-danger disabled" type="button">Disabled</button>
				<button class="btn btn-square btn-outline-light disabled txt-dark" type="button">Disabled</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head12" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head12">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-primary disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-secondary disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-success disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-info disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-warning disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-danger disabled&quot;&gt;Disabled&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-outline-light disabled txt-dark&quot;&gt;Disabled&lt;/button&gt;
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
				</div><span>Add <code>.btn-square</code> and <code>.btn-*-gradien</code> class for gradien button</span>
			  </div>
			  <div class="card-body btn-showcase">
				<button class="btn btn-square btn-primary-gradien" type="button">Primary Button</button>
				<button class="btn btn-square btn-secondary-gradien" type="button">Secondary Button</button>
				<button class="btn btn-square btn-success-gradien" type="button">Success Button</button>
				<button class="btn btn-square btn-info-gradien" type="button">Info Button</button>
				<button class="btn btn-square btn-warning-gradien" type="button">Warning Button</button>
				<button class="btn btn-square btn-danger-gradien" type="button">Danger Button</button>
				<button class="btn btn-square btn-light-gradien txt-dark" type="button">Light Button</button>
				<div class="code-box-copy">
				  <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#example-head13" title="Copy"><i class="icofont icofont-copy-alt"></i></button>
				  <pre><code class="language-html" id="example-head13">&lt;!-- Cod Box Copy begin --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-primary-gradien&quot;&gt;primary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-secondary-gradien&quot;&gt;secondary button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-success-gradien&quot;&gt;Success Button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-info-gradien&quot;&gt;Info button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-warning-gradien&quot;&gt;warning button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-danger-gradien&quot;&gt;danger button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-square btn-light-gradien&quot;&gt;light button&lt;/button&gt; 
&lt;!-- Cod Box Copy end --&gt;</code></pre>
				</div>
			  </div>
			</div>
		  </div>
		</div>
	  </div>
	
	@push('scripts')
	<script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
	@endpush

@endsection