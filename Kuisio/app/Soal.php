<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table  = 'dbo.tmst_soal';
    protected $fillable = ['bagian','pertanyaan','jawab_a','jawab_b','jawab_c','jawab_d','jawab_e','benar','kode_mata_kuliah','kode_jenis_soal'];
    protected $primaryKey = "kode"; 
}
