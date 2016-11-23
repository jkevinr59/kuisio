<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="shortcut icon" href="{{ url('assets/lama/favicon.ico') }}" />
<title>Kuesioner International Office</title>

<!-- Bootstrap Core CSS -->
<link href="{{ url('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
<link href="{{ url('assets/vendor/metisMenu/metisMenu.min.css') }}" rel='stylesheet'>
<link href="{{ url('assets/dist/css/sb-admin-2.css') }}" rel='stylesheet'>
<link href="{{ url('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel='stylesheet'>

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
                <a href='logout'> Log Out</a>
            </li>
        </ul>
        <!-- /.navbar-top-links -->
        <!-- /.navbar-static-side -->
    </nav>

    <div class="navbar-collapse collapse" style="background-color:#0066AB; color:#FFFFFF; font-weight:bold;">
        <div class="container">
            <div  class= "nav navbar-nav navbar-right" >
                <form name="roleform" id="roleform">
                    <tr>
                        <td align="right" colspan="2" >

                        Selamat Datang Putri Nur Fitriyani

                        </td>
                    </tr>
                </form>         
            </div>
        </div>
    </div>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">

                <li>
                    <a href='{!! url('/admin/dashboard'); !!}'><i class="fa fa-dashboard fa-fw"></i> Beranda</a>
                </li>
                <li>
                    <a href='{!! url('/manajemensoal'); !!}'><i class="fa fa-edit fa-fw"></i> Manajemen Soal <span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">                            
                        <li>
                            <a href='{!! url('/admin/unggah'); !!}'>Unggah Soal</a>
                        </li>
                        <li>
                            <a href='data'>Daftar Soal</a>
                        </li>
                    </ul>
                    <!-- /.nav-second-level -->
                </li>                                           
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    
</div>
<!-- /#wrapper -->

<!-- jQuery -->

<script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ url('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ url('assets/vendor/metisMenu/metisMenu.min.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ url('assets/dist/js/sb-admin-2.js') }}"></script>
