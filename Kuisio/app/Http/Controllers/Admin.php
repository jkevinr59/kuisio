<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Soal;
use App\Log;
use App\Users;
use Maatwebsite\Excel\Facades\Excel;
class Admin extends Controller
{
    public function index()
    {
    	return view('index');
    }


    public function dashboard()
    {
    	if(Auth::check())
        return view('admin/beranda');
        else return redirect()->intended('http://akademik3.its.ac.id/skem');       
    }

    public function create()
    {
    	return view('admin/tambahsoal');
    }
    public function create_soal(Request $request)
    {

    }
    /*
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
    UNUSED NOW
    */
    public function attempt_login(/*Request $request*/)
    {


    		//$email = $request->email;
    		//$password = $request->password;
    		$email = "admin@kuisio.com";
            $password ="admin";
            if(Auth::attempt(['email' => $email, 'password' => $password],0))
    		{
    			return redirect()->intended('admin/dashboard');
    		}
    		else
    			return redirect()->intended('http://akademik3.its.ac.id/skem');


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
    		else if($value->kode_mata_kuliah == 2)
    		{
    			$value->kategori_soal = "IQF";
    		}
    		else if($value->kode_mata_kuliah == 3)
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
    		return redirect()->intended('http://akademik3.its.ac.id/skem');
    	}	
    }

    public function Update_soal(Request $request)
    {
        if(Auth::check())
        {
            $kode = $request->kode;
           $data = Soal::find($kode);
           $output['data'] = $data;
           return view('admin/ubahsoal',$output);
        }
        else
        {
            return redirect()->intended('http://akademik3.its.ac.id/skem');
        }        

    }
    public function simpan(Request $request)
    {
    	$kategori[0]="umum";
    	$kategori[1]="AEC";
    	$kategori[2]="IQF";
    	$kategori[3]="MRA";
		 $request_kategori=$request->kategori;

    	if($request->kode == 0)
    	{
    	$item = new Soal();	
    	}
    	else
    	{
    	$item = Soal::find($request->kode);
    	}   	
    	$item->bagian= $kategori[$request_kategori];
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
    	return redirect()->intended('http://akademik3.its.ac.id/skem');
    }
    public function table()
    {
    	$data1 = Soal::where('kode_mata_kuliah','=',1)->count();
    	$data2 = Soal::where('kode_mata_kuliah','=',2)->count();
    	$data3 = Soal::where('kode_mata_kuliah','=',3)->count();
		$data4 = Soal::where('kode_mata_kuliah','=',0)->count();    	
    	return response()->json(['data1' => $data1,'data2' => $data2,'data3' => $data3,'data4' => $data4]);
    }

    public function download_template() //fungsi download template disediakan di sini
    {
    	Excel::create('Template', function($excel){
            $excel->setTitle('Template_Soal');

            $excel->setCreator('kuisio')->setCompany('International Office ITS');

            $excel->setDescription('Template unggah soal');

            $data = ["Kategori","Pertanyaan","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","Kunci Jawaban","Jenis Soal"];
            $excel->sheet("Template", function($sheet) use($data)
            {
            	$sheet->setOrientation('landscape');
            	$sheet->fromArray($data, NULL, 'A1');
            });

            $data2 = array(
            	array("contoh pengisian tabel soal"),
            	array("Petunjuk Pengisian Kode soal : Isilah kolom kode jenis soal dengan kode nomor soal di bawah ini"),
            	array("Kode","Jenis Soal"),
            	array(1,"Pilihan Ganda"),
            	array(2,"Benar Salah"),
            	array(3,"Sebab Akibat"),
            	array(""),
            	array("Petunjuk Pengisian Kode kategori : Isilah kolom kode jenis soal dengan kode nomor soal di bawah ini"),
            	array("Kode","Kategori"),
            	array(1,"AEC"),
            	array(2,"IQF"),
            	array(3,"MRA"),
            	array("Kategori","Pertanyaan","Jawaban A","Jawaban B","Jawaban C","Jawaban D","Jawaban E","Kunci Jawaban","Jenis Soal"),
            	array("1","Apa Kepanjangan AEC","A","B","C","D","E","B","1"),
                array("2","ASEAN terdiri dari 10 negara","Benar","Salah","","","","A","2"),
                array("3","Soal Sebab Akibat","pernyataan benar, alasan benar, dan keduanya menunjukkan hubungan sebab akibat","pernyataan benar, alasan benar, tetapi keduanya tidak menunjukkan hubungan sebab akibat","pernyataan benar, alasan salah","pernyataan salah, alasan benar","pernyataan dan alasan salah","B","3"),
            	);

            $excel->sheet("Read Me", function($sheet) use($data2)
            {
            	$sheet->setOrientation('landscape');
            	$sheet->createSheetFromArray($data2,NULL, 'A1');
            	$sheet->mergeCells('A1:C1');
            	$sheet->mergeCells('A2:I2');
                $sheet->setWidth(array(
                'C'     =>  15,
                'D'     =>  15
                ));

            });            

        })->download('xls');
    }
    public function unggah()
    {
        $Log = Log::all();
        $data["table"] = $Log;
    	return view('admin/unggahsoal',$data);
    }
    public function unggahfile(Request $req)
    {

    	if($req->hasFile('unggah_file'))
    	{	
    		$exceltable = Excel::selectSheets('Template')->load($req->file('unggah_file'),function($reader)
    		{
    			$reader->get();
    		})->get();
            $status_string="";
            $kategori[0]="umum";
            $kategori[1]="AEC";
            $kategori[2]="IQF";
            $kategori[3]="MRA";
            foreach ($exceltable as $key => $value) {
                $item = new Soal();
                $item->bagian = $kategori[$value->kategori];
                $item->pertanyaan = $value->pertanyaan;
                $item->benar = $value->kunci_jawaban;
                $item->kode_jenis_soal = $value->jenis_soal;
                $item->kode_mata_kuliah = $value->kategori;
                $item->jawab_a = $value->jawaban_a;
                $item->jawab_b = $value->jawaban_b;
                $item->jawab_c = $value->jawaban_c;
                $item->jawab_d = $value->jawaban_d;
                $item->jawab_e = $value->jawaban_e;
                $item->timestamps = false; 
                $item->save();
             }
            $data['status'] =$exceltable;

            $log = new Log();
           // $log->kode = Log::all()->count()+3;
            $log->username = "admin";
            $log->aksi = "unggah";
            $log->tabel_tujuan = "tmst_soal";
            $log->mata_kuliah = "DEFAULT";
            $log->total = count($exceltable);
            $log->timestamps = false;
            $log->waktu = Carbon::now();
            $log->save();
    	}
    	else
    	{
    		$data['status']= "tidak ada";
    	}
    	return view('admin/read',$data);
    }
}
