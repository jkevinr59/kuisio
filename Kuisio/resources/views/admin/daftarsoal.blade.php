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
                    Halaman Daftar Soal
                </div>

                <!-- /.panel-heading -->
                <div class="panel-body">
                    <table width="100%" class="table table-striped table-bordered table-hover" id="tabel-soal">
                        <p> <b> Untuk menambahkan soal, pengguna dapat menekan tombol tambah soal !! </b> </p>
                        <a href='{!! url('/tambahsoal'); !!}'> <button type="submit" class="btn btn-primary" name="tombol_tambah_" value="tombol_tambah" > Tambah Soal </button> </a> <br> <br>
                        <thead>
                            <tr>
                                <th>ID Soal</th>
                                <th>Pertanyaan</th>
                                <th>Kategori Soal</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
 <!--                       
                        <tbody>
                            <tr class="odd gradeX">
                                <td>101</td>
                                <td>Berapa jumlah negara yang berpartisipasi dalam AEC?</td>
                                <td>Pilihan Ganda</td>
                                <td> <a href='{!! url('/ubahsoal'); !!}'> <button name="tombol_ubah" id="tombol_ubah" value="tombol_ubah" class="btn btn-success"> Ubah Soal </button> </a>  </td>
                                <td> <button name="tombol_hapus" id="tombol_hapus" value="tombol_ubah" class="btn btn-warning" >Hapus Soal</button> </td>
                            </tr>
                        </tbody>

-->

                        <tbody>
                            <?php $i=1; foreach ($soal_list as $value) {?>
                            <tr>
                                <td><?php echo $value['kode'];?></td>
                                <td align="center"><?php echo $value['pertanyaan'];?></td>
                                <td><?php echo $value['kategori_soal'];?></td>
                                <td>
                                <form action="update" method ="GET"> 
                                <input type="hidden" name="kode" value= <?php echo $value->kode?>>
                                <button type="submit" name="tombol_ubah" id="tombol_ubah" value="tombol_ubah" class="btn btn-success"> Ubah Soal </button>   
                                </form>
                                </td>
                                <td> <button name="tombol_hapus" id="tombol_hapus" value="tombol_ubah" class="btn btn-warning" >Hapus Soal</button> </td>
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

<!-- DataTables JavaScript -->
<script src="{{ url('assets/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ url('assets/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
<script src="{{ url('assets/datatables-responsive/dataTables.responsive.js') }}"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
$(document).ready(function() {
    $('#tabel-soal').DataTable({
        responsive: true
    });
});
</script>

@endsection

