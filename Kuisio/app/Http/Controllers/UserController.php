<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Soal;
use App\Users;
use App\Http\Requests;

class UserController extends Controller
{
    public function kuesioner()
    {

    	$data['Section11']= Soal::where('kode_jenis_soal','=',1)->where('kode_mata_kuliah','=',1)->inRandomOrder()->take(3)->get();
    	$data['Section12']= Soal::where('kode_jenis_soal','=',1)->where('kode_mata_kuliah','=',2)->inRandomOrder()->take(3)->get();
    	$data['Section13']= Soal::where('kode_jenis_soal','=',1)->where('kode_mata_kuliah','=',3)->inRandomOrder()->take(3)->get();

    	$data['Section21']= Soal::where('kode_jenis_soal','=',2)->where('kode_mata_kuliah','=',0)->inRandomOrder()->take(3)->get();
    	$data['Section22']= Soal::where('kode_jenis_soal','=',2)->where('kode_mata_kuliah','=',2)->inRandomOrder()->take(3)->get();
    	$data['Section23']= Soal::where('kode_jenis_soal','=',2)->where('kode_mata_kuliah','=',3)->inRandomOrder()->take(3)->get();

    	$data['Section31']= Soal::where('kode_jenis_soal','=',3)->where('kode_mata_kuliah','=',1)->inRandomOrder()->take(3)->get();
    	$data['Section32']= Soal::where('kode_jenis_soal','=',3)->where('kode_mata_kuliah','=',2)->inRandomOrder()->take(3)->get();
    	$data['Section33']= Soal::where('kode_jenis_soal','=',3)->where('kode_mata_kuliah','=',3)->inRandomOrder()->take(3)->get();    	
    	return view("user/quiz",$data);
    }
    public function index()
    {
    	return redirect()->intended('index');
    }
    public function score(Request $request)
    {	
    	$skor=0;
    	foreach($request->jawaban as $row)
    	{
    		if($row == 'AA' or $row == 'BB' or $row == 'CC' or $row == 'DD' or $row == 'EE')
    			$skor=$skor+5;
    	}
    	$data['skor']=$skor;
    	return view("/user/skor",$data);
    }
}
