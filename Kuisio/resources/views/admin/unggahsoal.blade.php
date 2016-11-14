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
                    Halaman Unggah Soal
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="form-group">
                        <label> <h4> Unggah File Daftar Soal </h4></label>
                        <p><b>PERHATIAN!!! </b>Sebelum mengunggah file pastikan file yang akan diunggah sesuai dengan <a href='{!! url('/admin/download'); !!}'>template</a> yang disediakan.</p>
                        <input type="file" id="unggah_file" name = "unggah_file" value="unggah_file">
                        <p class="help-block">*File yang diunggah harus berekstensi .xls atau .xlsx</p>
                        <button type="submit" class="btn btn-primary" name="unggah" value="unggah" href='{!! url('/manajemensoal'); !!}'> Unggah </button>
                    </div>

                    <table width="100%" class="table table-striped table-bordered table-hover" id="tabel-riwayat">
                        <label> <h4> Daftar Riwayat Unggah </h4></label>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Aksi</th>
                                <th>Tabel Tujuan</th>
                                <th>Mata Kuliah</th>
                                <th>Total Data</th>
                                <th>Waktu</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="odd gradeX">
                                <td>1</td>
                                <td>Admin</td>
                                <td>Ubah Soal</td>
                                <td>tmst_soal</td>
                                <td>AEC</td>
                                <td>20</td>
                                <td>Mar 24 2016 08:01:24:000AM</td>
                            </tr>
                        </tbody>


<!--
                        <tbody>
                            <?php 
                           //$i=1; foreach ($riwayat_list as $value) {?>
                            <tr>
                                <td align="center"><?php //echo $i++;?></td>
                                <td><?php //echo $value['username'];?></td>
                                <td align="center"><?//php echo $value['aksi'];?></td>
                                <td><?php //echo $value['tabel_tujuan'];?></td>
                                <td><?php //echo $value['matakuliah'];?></td>
                                <td><?php //echo $value['totaldata'];?></td>
                                <td><?php //echo $value['waktu'];?></td>
                                
                            </tr>
                            <?php
                           // }?>
                        </tbody>
-->


                    </table>

                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-12 -->
    </div>
</div>

<!-- DataTables JavaScript -->
<script src="{{ url('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ url('assets/datatables-responsive/dataTables.responsive.js') }}"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
    $('#tabel-riwayat').DataTable({
        responsive: true
    });
});
</script>

@endsection

