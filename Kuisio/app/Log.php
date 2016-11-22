<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table  = 'dbo.tref_log_audit';
    protected $fillable = ['kode','username','aksi','tabel_tujuan','mata_kuliah','total','waktu'];
    protected $primaryKey = "kode"; 
}
