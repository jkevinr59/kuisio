<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Soal;
use App\Users;
class Admin extends Controller
{
    public function index()
    {
    	return view('index');
    }


    public function dashboard()
    {
    	return view('admin/beranda');
    }

    public function create()
    {
    	return view('admin/tambahsoal');
    }
    public function create_soal(Request $request)
    {

    }
    
    public function login()
    {
    	if (Auth::check())
    	{
    		return redirect()->intended('admin/dashboard');
    	}
    	else
    	{
    	return view('admin/login');
    	}
    	
    }
    public function attempt_login(Request $request)
    {


    		$email = $request->email;
    		$password = $request->password;
    		if(Auth::attempt(['email' => $email, 'password' => $password],0))
    		{
    			return redirect()->intended('admin/dashboard');
    		}
    		else
    			redirect()->intended('index');


    }
    public function Soal()
    {
    	if(Auth::check())
    	{
    	$output['soal_list'] = Soal::all();
    	foreach($output['soal_list'] as $value)
    	{
    		if($value->kode_mata_kuliah == 1)
    		$value->kategori_soal = "AEC";
    		else if($value->kode_jenis_soal == 2)
    		{
    			$value->kategori_soal = "IQF";
    		}
    		else if($value->kode_jenis_soal == 3)
    		{
    			$value->kategori_soal = "MRA";
    		}
    		else
    		{
    			$value->kategori_soal = "Umum";
    		}    		    		
    	}
    	return view('admin/daftarsoal',$output);    		
    	}
    	else
    	{
    		$output['Soal'] = 'anda belum login';
    		return view('admin/read',$output);
    	}	
    }

    public function Update_soal(Request $request)
    {
    	$kode = $request->kode;
    	$data = Soal::find($kode);
    	$output['data'] = $data;
    	return view('admin/ubahsoal',$output);
    }
    public function simpan(Request $request)
    {
    	if($request->kategori==0)
    	{
    		$bagian="umum";
    	}
    	else if($request->kategori==1)
    	{
    		$bagian="AEC";
    	}
    	else if($request->kategori==2)
    	{
    		$bagian="IQF";
    	}
    	else if($request->kategori==3)
    	{
    		$bagian="MRA";
    	} 
    	if($request->kode == 0)
    	{
    	$item = new Soal();	
    	}
    	else
    	{
    	$item = Soal::find($request->kode);
    	}   	
    	$item->bagian= $bagian;
    	$item->pertanyaan = $request->pertanyaan;
    	if($request->jenis == 1)
    	{
    	$item->jawab_a = $request->opsiA;
    	$item->jawab_b = $request->opsiB;
    	$item->jawab_c = $request->opsiC;
    	$item->jawab_d = $request->opsiD;
    	$item->jawab_e = $request->opsiE;
    	}
    	else if($request->jenis == 2)
    	{
    	$item->jawab_a = "Benar";
    	$item->jawab_b = "Salah";
    	$item->jawab_c = "";
    	$item->jawab_d = "";
    	$item->jawab_e = "";    	
    	}
    	else
    	{
    	$item->jawab_a = "pernyataan benar, alasan benar, dan keduanya menunjukkan hubungan sebab akibat";
    	$item->jawab_b = "pernyataan benar, alasan benar, tetapi keduanya tidak menunjukkan hubungan sebab akibat";
    	$item->jawab_c = "pernyataan benar, alasan salah";
    	$item->jawab_d = "pernyataan salah, alasan benar";
    	$item->jawab_e = "pernyataan dan alasan salah";
    	}
    	$item->benar = $request->kunci_jawaban;
    	$item->kode_jenis_soal = $request->jenis;
    	$item->kode_mata_kuliah = $request->kategori;
    	$item->timestamps = false;
    	$item->save();
    	if($request->kode == 0)
    	{
    		return view('admin/tambahsoal');
    	}
    	else
    	{
   		$output['soal_list'] = Soal::all();
    	foreach($output['soal_list'] as $value)
    	{
    		if($value->kode_jenis_soal == 1)
    		$value->jenis_soal = "Pilihan Ganda";
    		else if($value->kode_jenis_soal == 2)
    		{
    			$value->jenis_soal = "Benar-Salah";
    		}
    	}
    	return view('admin/daftarsoal',$output);
    	}     	
    }
    public function delete_soal(Request $request)
    {
    	$kode = $request->kode;
    	$data = Soal::find($kode);
    	$data->delete();
   		$output['soal_list'] = Soal::all();
    	foreach($output['soal_list'] as $value)
    	{
    		if($value->kode_jenis_soal == 1)
    		$value->jenis_soal = "Pilihan Ganda";
    		else if($value->kode_jenis_soal == 2)
    		{
    			$value->jenis_soal = "Benar-Salah";
    		}
    	}
    	return view('admin/daftarsoal',$output);     	
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect()->intended('index');
    }
    public function table()
    {
    	$data1 = Soal::where('kode_mata_kuliah','=',1)->count();
    	$data2 = Soal::where('kode_mata_kuliah','=',2)->count();
    	$data3 = Soal::where('kode_mata_kuliah','=',3)->count();
		$data4 = Soal::where('kode_mata_kuliah','=',0)->count();    	
    	return response()->json(['data1' => $data1,'data2' => $data2,'data3' => $data3,'data4' => $data4]);
    }
}
