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
		        </div>
	      	</div>
	    </nav>
		<div class="container theme-showcase" role="main">
			<div class="page-header">
				<center><h1>Kuisioner IO</h1></center>
			</div>
			<?php

				$skor = 0;
				foreach($_POST as $jawaban) {
				    if($jawaban=="AA" or $jawaban=="BB" or $jawaban=="CC" or $jawaban=="DD" or $jawaban=="EE")$skor+=5;
				}

				if($skor>=80){
					echo "<b>Selamat! Nilai Anda ".$skor."</b>";
					
					echo "<p>Jika Anda tertarik dengan ";
				} else {
					echo "<b>Mohon maaf Anda belum lulus. Nilai Anda ".$skor.". Passing grade yang harus Anda lampaui untuk lulus adalah 80. </b>";	
				
					echo "<b>Silahkan untuk mengerjakan ulang mini kuis ini.</b>";	
						
					echo "<p>Untuk referensi ";	
				}
				echo "materi-materi sejenis, maka kunjungi <a href='http://share.its.ac.id'>share.its.ac.id</a> pada category WAWASAN DAN KOMPETENSI GLOBAL.	
					Pada category tersebut disediakan berbagai materi terkait wawasan dan kompetensi global bagi mahasiswa, organisasi mahasiswa, karyawan maupun dosen.	
					Beberapa materi pada category tersebut adalah AEC, IQF & MRA, CV, English Proficiency Preparation, How to Create International Events dan masih banyak lagi.</p>";

				echo "<p>Cara mengakses :<br>
					- Buka <a href='http://share.its.ac.id'>share.its.ac.id</a>---> Klik Log In	<br>
					- Log in bagi mahasiswa yang BELUM PERNAH mengakses <a href='http://share.its.ac.id'>share.its.ac.id</a><br>
					*** Username : NRP<br>
					*** Password : 123</p>";
					
				echo "<p>Setelah Log In ---> Klik 'Wawasan dan Kompetensi Global' ---> Klik 'Nama Course' ---> Klik Self Enrollment<br>
					Beberapa course yang tersedia :	<br>
					- Pengantar (WAJIB DIBUKA SEBELUM COURSE LAINNYA)<br>
					- Umum<br>
					- Mahasiswa<br>
					- Organisasi Mahasiswa<br>
					- Tenaga Kependidikan<br>
					- Dosen</p>";
			?>
		</div>
	</body>
</html>