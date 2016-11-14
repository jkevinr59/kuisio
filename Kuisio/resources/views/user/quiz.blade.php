@extends('layouts.User')

@section('content2')
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="{{ url('assets/lama/favicon.ico') }}" />
	<title>Kuisioner International Office</title>
	<!-- Bootstrap core CSS -->
	<link href="{{ url('assets/dist/css/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
	<!-- Bootstrap theme -->
	<link href="{{ url('assets/dist/css/bootstrap-theme.min.css') }}" type="text/css" rel="stylesheet">
	<!-- Custom styles for this template -->
	<link href="{{ url('assets/lama/theme.css') }}" rel="stylesheet">
@endsection

@section('content')
	    <nav class="navbar navbar-inverse navbar-fixed-top">
	      	<div class="container">
		        <div class="navbar-header">
		          	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            	<span class="sr-only">Toggle navigation</span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		          	</button>
		          	<div id="headerLogo" style="display:inline-block;filter:progid:DXImageTransform.Microsoft.AlphaImageLoader(src='its-logo.png');">
			            <img src="{{ url('assets/lama/its-logo.png') }}" border="0"/>
			      	</div>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          	<ul class="nav navbar-nav">
		            	<li class="active"><a href="home">Home</a></li>
		          	</ul>
		          	<ul class="nav navbar-nav navbar-right">
		              	<li><h3 id="CountDownPanel" style="color:white"></h3></li>
		          	</ul>
		        </div>
	      	</div>
	    </nav>
	    <div class="container theme-showcase" role="main">
			<div class="page-header">
				<center><h1>Kuisioner IO</h1></center>
				<center><label>Pilihlah jawaban yang benar dalam waktu 20 menit!</label></center>
			</div>
            <div class="panel panel-default">
                <div class="panel-heading">
                            Pilihan Ganda
                </div>
                <div class="panel-body">
                <form method="get" action="hasil">
                <?php
                $i=0; 
                foreach($Section11 as $key=>$row){?>
                    <div class="form-group">
                     	<label><?php  $i++; echo $i . "." . $row->pertanyaan;?></label>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name= <?php echo "jawaban[".$i."]";?>  id="optionsRadios1" value=<?php echo "A".$row->benar;?> checked><?php echo "A ".$row->jawab_a;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "B".$row->benar;?>> <?php echo "B ".$row->jawab_b;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "C".$row->benar;?> ><?php echo "C ".$row->jawab_c;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "D".$row->benar;?> ><?php echo "D ".$row->jawab_d;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "E".$row->benar;?> ><?php echo "E ".$row->jawab_e;?>
                                    </label>
                            </div>                                                     
                    </div>
                <?php }?>
                <?php foreach($Section12 as $key=>$row){?>
                    <div class="form-group">
                     	<label><?php  $i++; echo $i . "." . $row->pertanyaan;?></label>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "A".$row->benar;?> checked><?php echo "A ".$row->jawab_a;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "B".$row->benar;?>><?php echo "B ".$row->jawab_b;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "C".$row->benar;?> ><?php echo "C ".$row->jawab_c;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "D".$row->benar;?> ><?php echo "D ".$row->jawab_d;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "E".$row->benar;?> ><?php echo "E ".$row->jawab_e;?>
                                    </label>
                            </div>                              
                    </div>
                <?php }?>
                <?php foreach($Section13 as $key=>$row){?>
                    <div class="form-group">
                     	<label><?php  $i++; echo $i . "." . $row->pertanyaan;?></label>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "A".$row->benar;?> checked><?php echo "A ".$row->jawab_a;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "B".$row->benar;?>><?php echo "B ".$row->jawab_b;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "C".$row->benar;?> ><?php echo "C ".$row->jawab_c;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "D".$row->benar;?> ><?php echo "D ".$row->jawab_d;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "E".$row->benar;?> ><?php echo "E ".$row->jawab_e;?>
                                    </label>
                            </div>                           
                    </div>
                <?php }?>                                                       
                </div>
                <div class="panel-heading">
                            Bagian 2:Benar-Salah
                </div>
                <div class="panel-body">
                <?php foreach($Section21 as $key=>$row){?>
                    <div class="form-group">
                     	<label><?php  $i++; echo $i . "." . $row->pertanyaan;?></label>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "A".$row->benar;?> checked><?php echo "A ".$row->jawab_a;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "B".$row->benar;?>><?php echo "B ".$row->jawab_b;?>
                                    </label>
                            </div>                             
                    </div>
                <?php }?> 
                <?php foreach($Section22 as $key=>$row){?>
                    <div class="form-group">
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "A".$row->benar;?> checked><?php echo "A ".$row->jawab_a;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "B".$row->benar;?>><?php echo "B ".$row->jawab_b;?>
                                    </label>
                            </div>                            
                    </div>
                <?php }?>
                <?php foreach($Section23 as $key=>$row){?>
                    <div class="form-group">
                     	<label><?php  $i++; echo $i . "." . $row->pertanyaan;?></label>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "A".$row->benar;?> checked><?php echo "A ".$row->jawab_a;?>
                                    </label>
                            </div>
                             <div class="radio">
                                    <label>
                                        <input type="radio" name=<?php echo "jawaban[".$i."]";?> id="optionsRadios1" value=<?php echo "B".$row->benar;?>><?php echo "B ".$row->jawab_b;?>
                                    </label>
                            </div>                              
                    </div>
                <?php }?>                                                  
                </div>                
                <div class="panel-heading">
                            Bagian 3:Sebab-Akibat
                </div>
                <div class="panel-body">
                <button type="submit" class="btn btn-primary" name="submit" value="submit" href='{!! url('/manajemensoal'); !!}'> Simpan </button>
                </div> 
                </form>
                               
            </div>
		</div>

	<!-- Fixed navbar -->
	<script src="{{ url('https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js') }}"></script>
	<script src="{{ url('assets/dist/js/bootstrap.min.js') }}"></script>
	<script>
// JScript File
//CountDown.js
var _countDowncontainer=0;
var _currentSeconds=0;

function ActivateCountDown(strContainerID, initialValue) {
	_countDowncontainer = document.getElementById(strContainerID);
	
	if (!_countDowncontainer) {
		alert("count down error: container does not exist: "+strContainerID+
			"\nmake sure html element with this ID exists");
		return;
	}
	
	SetCountdownText(initialValue);
	window.setTimeout("CountDownTick()", 1000);
}

function CountDownTick() {
	if (_currentSeconds <= 0) {
		alert("Maaf waktu Anda sudah habis!");
		//document.getElementById("ctl01").disabled = true;
		document.getElementById("submitkuis").click();
		return;
	}
	
	SetCountdownText(_currentSeconds-1);
	window.setTimeout("CountDownTick()", 1000);
}

function SetCountdownText(seconds) {
	//store:
	_currentSeconds = seconds;
	
	//get minutes:
	var minutes=parseInt(seconds/60);
	
	//shrink:
	seconds = (seconds%60);
	
	//get hours:
	var hours=parseInt(minutes/60);
	
	//shrink:
	minutes = (minutes%60);
	
	//build text:
	var strText = AddZero(hours) + ":" + AddZero(minutes) + ":" + AddZero(seconds);
	
	//apply:
	_countDowncontainer.innerHTML = strText;
}

function AddZero(num) {
	return ((num >= 0)&&(num < 10))?"0"+num:num+"";
}

window.onload=WindowLoad;

function WindowLoad(event) 
{
  	ActivateCountDown("CountDownPanel", 1200);
}
</script>
			
@endsection