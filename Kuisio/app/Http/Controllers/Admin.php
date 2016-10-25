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

    public function form_soal()
    {
    	return view('admin/create');
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
    public function delete_soal(Request $request)
    {
    	$kode = $request->kode_soal;
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
    	return view('admin/manajemensoal',$output);     	
    }
    public function logout()
    {
    	Auth::logout();
    	return redirect()->intended('index');
    }
}
