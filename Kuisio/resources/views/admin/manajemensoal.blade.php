@extends('layouts.DaftarSoal')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manajemen Soal</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Daftar Soal
                </div>


                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID Soal</th>
                                <th>Soal</th>
                                <th>Jenis Soal</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
<!--                        
                        <tbody>
                            <tr class="odd gradeX">
                                <td>Trident</td>
                                <td>Internet Explorer 4.0</td>
                                <td>Win 95+</td>
                                <td> <button>Ubah Soal <a href='{!! url('/manjemensoal'); !!}'> </a> </button>  </td>
                                <td> <button>Hapus Soal</button> </td>
                            </tr>
                        </tbody>

-->

                        <tbody>
                            <?php $i=1; foreach ($soal_list as $value) {?>
                            <tr>
                                <td><?php echo $value['kode'];?></td>
                                <td align="center"><?php echo $value['pertanyaan'];?></td>
                                <td><?php echo $value['jenis_soal'];?></td>
                                <td> 
                                <form action='update' method="GET">
                                    <input type="hidden" name="kode" value= <?php echo $value['kode']?> >
                                    <button type="Submit">Ubah Soal</button>
                                </form>
                                </td>
                                <td> <button>Hapus Soal</button> </td>
                            </tr>
                            <?php
                            }?>
                        </tbody>

                    </table>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>

@endsection