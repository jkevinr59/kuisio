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
    <!-- Bootstrap Core CSS -->
	<link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url('assets/vendor/metisMenu/metisMenu.min.css') }}" rel='stylesheet'>
	<link href="{{ url('assets/dist/css/sb-admin-2.css') }}" rel='stylesheet'>
	<link href="{{ url('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel='stylesheet'>
@endsection

@section('content')
	<div id="wrapper">
		<!-- Navigation -->
	    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="index.html">Kuesioner International Office ITS</a>
	        </div>
	        <!-- /.navbar-header -->

	        <ul class="nav navbar-top-links navbar-right">
	            <li>
	                <a href='{!! url('/home'); !!}'> Home</a>
	            </li>
	        </ul>
	    </nav>
	    <!-- /.navbar-top-links -->

		<div class="container">
		    <div class="row">
		        <div class="col-md-4 col-md-offset-4">
		            <div class="login-panel panel panel-default">
		                <div class="panel-heading">
		                    <h3 class="panel-title">Please Sign In</h3>
		                </div>

		                <div class="panel-body">
		                    <form role="form" METHOD="POST">
		                    	{{csrf_field()}}
		                        <fieldset>
		                            <div class="form-group">
		                                <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
		                            </div>
		                            <div class="form-group">
		                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
		                            </div>
		                            <div class="checkbox">
		                                <label>
		                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
		                                </label>
		                            </div>
		                            <!-- Change this to a button or input when using this as a form -->
		                            <button type="Submit" class="btn btn-lg btn-success btn-block">Login</a>
		                        </fieldset>
		                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</div>


    <!-- jQuery -->
    <script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ url('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ url('assets/vendor/metisMenu/metisMenu.min.js') }}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ url('assets/dist/js/sb-admin-2.js') }}"></script>
@endsection