<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Soal extends Model
{
    protected $table  = "dbo.tmst_soal";
    protected $fillable = ["bagian","pertanyaan","jawab_a","jawab_b","benar","kode_mata_kuliah","kode_jenis_kuliah"];
}
