@extends('layouts.HalamanAwal')

@section('content2')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{ url('assets/lama/favicon.ico') }}" />
	<title>Kuisioner International Office</title>
	<!-- Bootstrap core CSS -->
	<link href="{{ url('assets/dist/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
	<!-- Bootstrap theme -->
	<link href="{{ url('assets/dist/css/bootstrap-theme.min.css') }}" type="text/css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{ url('assets/lama/cover.css') }}" rel="stylesheet">
@endsection

@section('content')
	<div class="site-wrapper">
		<div class="site-wrapper-inner">
			<div class="cover-container">

				<div class="masthead clearfix">
	            	<nav class="navbar navbar-inverse navbar-fixed-top">
				      	<div class="container">
					        <div class="navbar-header">
					          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					            	<span class="sr-only">Toggle navigation</span>
					            	<span class="icon-bar"></span>
					            	<span class="icon-bar"></span>
					            	<span class="icon-bar"></span>
					          	</button>
					          	<div id="headerLogo" style="display:inline-block;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='its-logo.png');">
						            <img src="{{ url('assets/lama/its-logo.png') }}" border="0"/>
						      	</div>
					        </div>
				      	</div>
				    </nav>
	      		</div>
	      		<div class="inner cover">
			      		<div class="page-header">
							<center><h1>Kuisioner International Office</h1></center>
						</div>
						<div align="center">
							<button onClick="parent.location='{!! url('admin/login'); !!}'" class="btn btn-lg btn-primary">Admin</button>
							<button onClick="parent.location='{!! url('/kuesioner'); !!}'" class="btn btn-lg btn-primary">User</button>
						</div>
					</div>
				<div class="mastfoot">
	        		<div class="inner">
	          			<p>International Office <a href="http://its.ac.id">ITS</a></p>
	        		</div>
	      		</div>

			</div>
		</div>
	</div>
	<!-- Fixed navbar -->
		    
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
	<script src="{{ url('assets/dist/js/bootstrap.min.js') }}"></script>
@endsection