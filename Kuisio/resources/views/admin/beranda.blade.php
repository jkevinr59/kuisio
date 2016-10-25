@extends('layouts.DaftarSoal')

@section('content')

<div id="wrapper">
	 <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Beranda</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <!-- /.row -->
            <div class="row">
            	<!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kategori soal AEC
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="kategori-soal-AEC"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->

                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kategori Soal IQF
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="kategori-soal-IQF"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->   

                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kategori Soal MRA
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="kategori-soal-MRA"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->   

                <!-- /.col-lg-6 -->
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kategori Soal Umum
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div id="kategori-soal-umum"></div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-6 -->      
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
</div>

<!-- jQuery -->
<script src="{{ url('assets/vendor/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ url('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ url('assets/vendor/metisMenu/metisMenu.min.js') }}"></script>

<!-- Morris Charts JavaScript -->
<script src="{{ url('assets/vendor/raphael/raphael.min.js') }}"></script>
<script src="{{ url('assets/vendor/morrisjs/morris.min.js') }}"></script>
<script src="{{ url('assets/data/morris-data.js') }}"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ url('assets/dist/js/sb-admin-2.js') }}"></script>

@endsection


