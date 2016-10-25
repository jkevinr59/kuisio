@extends('layouts.DaftarSoal')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manajemen Soal</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Halaman Menambah Soal
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form role="form" method="post">
                                        <div class="form-group">
                                            <label>Pertanyaan</label>
                                            <textarea type="text"class="form-control" name="tambah_isi_soal" id="tambah_isi_soal" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Kategori Soal</label>
                                            <select class="form-control" name="tambah_kategori_soal" id="tambah_kategori_soal">
                                                <option>Umum</option>
                                                <option>AEC</option>
                                                <option>IQF</option>
                                                <option>MRA</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Soal</label>
                                            <select class="form-control" name="tambah_jenis_soal" id="tambah_jenis_soal">
                                                <option>Pilihan Ganda</option>
                                                <option>Sebab - Akibat</option>
                                                <option>Benar - Salah</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Jawaban</label>
                                            <textarea type="text"class="form-control" name="tambah_jawaban" id="tambah_jawaban" rows="3"></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Kunci Jawaban</label>
                                            <select class="form-control" name="tambah_kunci_jawaban" id="tambah_kunci_jawaban">
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>E</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary" name="submit" value="submit" href='{!! url('/manajemensoal'); !!}'> Simpan </button>
                                        <button type="reset" class="btn btn-danger" name="reset" value="reset" href='{!! url('/manajemensoal'); !!}'> Batal </button>
                                    </form>
                                </div>
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</div>
@endsection

