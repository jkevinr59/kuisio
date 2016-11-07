<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="favicon.ico" />
		<title>Kuisioner International Office</title>
		<!-- Bootstrap core CSS -->
	    <link href="dist/css/bootstrap.min.css" type="text/css" rel="stylesheet">
	    <!-- Bootstrap theme -->
	    <link href="dist/css/bootstrap-theme.min.css" type="text/css" rel="stylesheet">
	    <!-- Custom styles for this template -->
    	<link href="theme.css" rel="stylesheet"> 
	</head>

	<body>
		<!-- Fixed navbar -->
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
			            <img src="its-logo.png" border="0"/>
			      	</div>
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          	<ul class="nav navbar-nav">
		            	<li class="active"><a href="index.php">Home</a></li>
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
			<form method="post" action="skor.php">
				<?php
					require_once 'dbconn.php';
					$sql = "select top 7 * from tmst_soal where kode_mata_kuliah = '0' order by newid()";
					// $result = sqlsrv_query($conn,$sql);
					$result = sqlsrv_query($conn,$sql);
					/*if( $result === false) {
					    die( print_r( sqlsrv_errors(), true) );
					}*/

					if (count($result) > 0) {
					    // output data of each row
						$no = 1;
					     while ($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
						//while($row = mssql_fetch_array($result)) {
					        echo "<br><b>".$no.") ".$row["pertanyaan"]."</b><br>";
					        if($row["jawab_a"]!=' ')	echo "<input type='radio' name='".$no."' id='".$no."' value='A".$row["benar"]."'> <label>".$row["jawab_a"]."</label><br>";
					        if($row["jawab_b"]!=' ')	echo "<input type='radio' name='".$no."' id='".$no."' value='B".$row["benar"]."'> <label>".$row["jawab_b"]."</label><br>";
					        if($row["jawab_c"]!=' ')	echo "<input type='radio' name='".$no."' id='".$no."' value='C".$row["benar"]."'> <label>".$row["jawab_c"]."</label><br>";
					        if($row["jawab_d"]!=' ')	echo "<input type='radio' name='".$no."' id='".$no."' value='D".$row["benar"]."'> <label>".$row["jawab_d"]."</label><br>";
					        if($row["jawab_e"]!=' ')	echo "<input type='radio' name='".$no."' id='".$no."' value='E".$row["benar"]."'> <label>".$row["jawab_e"]."</label><br>";
					        $no++;
					    }
					    
					} else {
					    echo "0 results";
					}

					$sql = "select top 13 * from tmst_soal where kode_mata_kuliah != '0' order by newid()";
					$result = sqlsrv_query($conn,$sql);
					//$result = mssql_query($sql);
					/*if( $result === false) {
					    die( print_r( sqlsrv_errors(), true) );
					}*/

					if (count($result) > 0) {
					    // output data of each row
					    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {
						//while($row = mssql_fetch_array($result)) {
					        echo "<br><b>".$no.") ".$row["pertanyaan"]."</b><br>";
					        if($row["jawab_a"]!='')	echo "<input type='radio' name='".$no."' id='".$no."' value='A".$row["benar"]."'> <label>".$row["jawab_a"]."</label><br>";
					        if($row["jawab_b"]!='') echo "<input type='radio' name='".$no."' id='".$no."' value='B".$row["benar"]."'> <label>".$row["jawab_b"]."</label><br>";
					        if($row["jawab_c"]!='')	echo "<input type='radio' name='".$no."' id='".$no."' value='C".$row["benar"]."'> <label>".$row["jawab_c"]."</label><br>";
					        if($row["jawab_d"]!='')	echo "<input type='radio' name='".$no."' id='".$no."' value='D".$row["benar"]."'> <label>".$row["jawab_d"]."</label><br>";
					        if($row["jawab_e"]!='')	echo "<input type='radio' name='".$no."' id='".$no."' value='E".$row["benar"]."'> <label>".$row["jawab_e"]."</label><br>";
					        $no++;
					    }
					    
					} else {
					    echo "0 results";
					}

				?>
				<input id="submitkuis" class="btn btn-lg btn-primary" type="submit" value="Submit" >
			</form>
		</div>
	</body>
</html>

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
