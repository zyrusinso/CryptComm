@extends('layouts.admin.master')

@section('title')Ck Editor
 {{ $title }}
@endsection

@push('css')
@endpush

@section('content')
	@component('components.breadcrumb')
		@slot('breadcrumb_title')
			<h3>Ck Editor</h3>
		@endslot
		<li class="breadcrumb-item">Editors</li>
		<li class="breadcrumb-item active">Ck Editor</li>
	@endcomponent
	
	<div class="container-fluid">
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Ck Editor</h5>
	                </div>
	                <div class="card-body">
	                    <textarea id="editor1" name="editor1" cols="30" rows="10">
							<h2>Technical details <a id="tech-details" name="tech-details"></a></h2>
							<table align="right" border="1" cellpadding="5" cellspacing="0">
							    <caption>
							        <strong>Mission crew</strong>
							    </caption>
							    <thead>
							        <tr>
							            <th scope="col">Position</th>
							            <th scope="col">Astronaut</th>
							        </tr>
							    </thead>
							    <tbody>
							        <tr>
							            <td>Commander</td>
							            <td>Neil A. Armstrong</td>
							        </tr>
							        <tr>
							            <td>Command Module Pilot</td>
							            <td>Michael Collins</td>
							        </tr>
							        <tr>
							            <td>Lunar Module Pilot</td>
							            <td>Edwin "Buzz" E. Aldrin, Jr.</td>
							        </tr>
							    </tbody>
							</table>
							<p>
							    Launched by a <strong>Saturn V</strong> rocket from <a href="javascript:void(0)">Kennedy Space Center</a> in Merritt Island, Florida on July 16, Apollo 11 was the fifth manned mission of <a href="javascript:void(0)">NASA</a>'s Apollo
							    program. The Apollo spacecraft had three parts:
							</p>
							<ol>
							    <li><strong>Command Module</strong> with a cabin for the three astronauts which was the only part which landed back on Earth</li>
							    <li><strong>Service Module</strong> which supported the Command Module with propulsion, electrical power, oxygen and water</li>
							    <li><strong>Lunar Module</strong> for landing on the Moon.</li>
							</ol>
							<p>
							    After being sent to the Moon by the Saturn V's upper stage, the astronauts separated the spacecraft from it and travelled for three days until they entered into lunar orbit. Armstrong and Aldrin then moved into the Lunar Module and
							    landed in the <a href="javascript:void(0)">Sea of Tranquility</a>. They stayed a total of about 21 and a half hours on the lunar surface. After lifting off in the upper part of the Lunar Module and rejoining Collins in the Command
							    Module, they returned to Earth and landed in the <a href="javascript:void(0)">Pacific Ocean</a> on July 24.
							</p>

	                    </textarea>
	                </div>
	            </div>
	        </div>
	    </div>
	    <div class="row">
	        <div class="col-sm-12">
	            <div class="card">
	                <div class="card-header pb-0">
	                    <h5>Inline Editor</h5>
	                </div>
	                <div class="card-body">
	                    <div id="area1" contenteditable="true">
	                        <h1 class="f-w-700">Your title</h1>
	                        <p>
	                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec at vulputate urna, sed dignissim arcu. Aliquam at ligula imperdiet, faucibus ante a, interdum enim. Sed in mauris a lectus lobortis condimentum. Sed
	                            in nunc magna. Quisque massa urna, cursus vitae commodo eget, rhoncus nec erat. Sed sapien turpis, elementum sit amet elit vitae, elementum gravida eros. In ornare tempus nibh ut lobortis. Nam venenatis justo ex,
	                            vitae vulputate neque laoreet a.
	                        </p>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>
	
	@push('scripts')
	<script src="{{asset('assets/js/editor/ckeditor/ckeditor.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/adapters/jquery.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/styles.js')}}"></script>
    <script src="{{asset('assets/js/editor/ckeditor/ckeditor.custom.js')}}"></script>
	@endpush

@endsection