<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Soal;

class Admin extends Controller
{
    public function index()
    {
    	$output['Soal'] =Soal::all();
    	return view('index',$output);
    }
    public function create_soal()
    {

    }
}
