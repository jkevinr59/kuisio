@extends('layouts.DaftarSoal')

@section('content')

<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Manajemen Soal</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
                        <h3>Petunjuk:Untuk jenis selain pilihan ganda, tidak perlu mengisi bagian jawaban</h3>
                        <h3>Untuk kunci jawaban, gunakan patokan berikut</h3>
                        <h4>Benar-Salah:</h4>
                        <h4>Pilihan A:Benar</h4>
                        <h4>Pilihan B:Salah</h4>
                        <h4>Sebab-Akibat:</h4>
                        <h4>Pilihan A:pernyataan benar, alasan benar, dan keduanya menunjukkan hubungan sebab akibat</h4>
                        <h4>Pilihan B:pernyataan benar, alasan benar, tetapi keduanya tidak menunjukkan hubungan sebab akibat</h4>
                        <h4>Pilihan C:pernyataan benar, alasan salah</h4>
                        <h4>Pilihan D:pernyataan salah, alasan benar</h4>                        
                        <h4>Pilihan E:pernyataan dan alasan salah</h4>    
<div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Halaman Mengubah Soal
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form action='{!! url('/admin/simpan'); !!}' role="form" method="post">
                                                                    {{csrf_field()}}
                                    <input type="hidden" name="kode" value= <?php echo $data->kode?>>                                  
                                        <div class="form-group">
                                            <label>Pertanyaan</label>
                                            <textarea type="text"class="form-control" name="pertanyaan" id="ubah_isi_soal" rows="3"><?php echo $data->pertanyaan?></textarea>
                                        </div>

                                        <div class="form-group">
                                            <label>Kategori Soal</label>
                                            <select class="form-control" name="kategori" id="ubah_kategori_soal">
                                                <option value="0">Umum</option>
                                                <option value="1">AEC</option>
                                                <option value="2">IQF</option>
                                                <option value="3">MRA</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Jenis Soal</label>
                                            <select class="form-control" name="jenis" id="ubah_jenis_soal">
                                                <option value="1">Pilihan Ganda</option>
                                                <option value="3">Sebab - Akibat</option>
                                                <option value="2">Benar - Salah</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label>Pilihan A</label>
                                            <textarea type="text"class="form-control" name="opsiA" id="tambah_jawaban" rows="2"><?php echo $data->jawab_a?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilihan B</label>
                                            <textarea type="text"class="form-control" name="opsiB" id="tambah_jawaban" rows="2"><?php echo $data->jawab_b?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilihan C</label>
                                            <textarea type="text"class="form-control" name="opsiC" id="tambah_jawaban" rows="2"><?php echo $data->jawab_c?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilihan D</label>
                                            <textarea type="text"class="form-control" name="opsiD" id="tambah_jawaban" rows="2"><?php echo $data->jawab_d?></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Pilihan E</label>
                                            <textarea type="text"class="form-control" name="opsiE" id="tambah_jawaban" rows="2"><?php echo $data->jawab_e?></textarea>
                                        </div>  

                                        <div class="form-group">
                                            <label>Kunci Jawaban</label>
                                            <select class="form-control" name="kunci_jawaban" id="ubah_kunci_jawaban">
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

