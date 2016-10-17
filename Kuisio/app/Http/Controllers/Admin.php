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
    	return view('admin/admin');
    }

    public function create_soal()
    {
    	$output['Soal'] =Soal::all();
    	//return view('create',$output);
    }
    
    public function login()
    {
    	return view('admin/login');
    }
    public function attempt_login(Request $request)
    {
    	$email = $request->email;
    	$password = $request->password;
    	//$email = 'admin@kuisio.com';
    	//$password = 'admin';
    	if(Auth::attempt(['email' => $email, 'password' => $password]))
    	{
    		return redirect()->intended('admin/dashboard');
    	}
    	else
    	return redirect()->intended('index');
    }
    public function Soal()
    {
    	$output['Soal'] = Soal::all();
    	return view('admin/read',$output);
    }
}
