<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>	Kite Coming Soon HTML Template</title>
	<meta name="description" content="Kite Coming Soon HTML Template by Jewel Theme" >
	<meta name="author" content="Jewel Theme">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- Bootstrap  -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- icon fonts font Awesome -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">

	<!-- Custom Styles -->
	<link href="assets/css/style.css" rel="stylesheet">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<![endif]-->

    <style type="text/css">
<!--
.style1 {color: #000000}
.style4 {font-size: 18px}
.style8 {font-family: Georgia, "Times New Roman", Times, serif}
.style9 {color: #FFFFFF}
.style10 {font-size: 16px; font-weight: bold;}
-->
    </style>
</head>
<body>


	<!-- Preloader -->
<div id="preloader">
	<div class="style1" id="loader">
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="dot"></div>
		<div class="lading"></div>
	</div>
	</div>
	<span class="style1">
	<!-- /#preloader -->
	<!-- Preloader End-->


	<!-- Main Menu -->
	</span>
	<div class="navbar navbar-default navbar-fixed-top style1" id="main-menu" role="navigation">

		<div class="navbar-header">
			<!-- responsive navigation -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>			</button> <!-- /.navbar-toggle -->
		</div> <!-- /.navbar-header -->

		<nav class="collapse navbar-collapse">
			<!-- Main navigation -->
			<ul id="headernavigation" class="nav navbar-nav">
				<li class="active"><a href="#page-top">Home</a></li>	
				<li><a href="#about">About</a></li>	
				<li><a href="#subscribe">Subscribe</a></li>	
				<li><a href="#contact">Contact</a></li>		
			</ul> <!-- /.nav .navbar-nav -->
		</nav> <!-- /.navbar-collapse  -->
	</div>
	<span class="style1">
	<!-- /#main-menu -->
	<!-- Main Menu End -->
	

	<!-- Page Top Section -->
	<section id="page-top" class="section-style" data-background-image="images/background/page-top.jpg">	  </section>
	</span>
	<section id="page-top" class="section-style" data-background-image="images/background/page-top.jpg"><div class="pattern height-resize style1">
			<div class="container">
				<h1 class="site-title">
					Kite				</h1><!-- /.site-title -->
				<h3 class="section-name">
					
						We Are				</h3><!-- /.section-name -->
				<h2 class="section-title">
					Coming Soon				</h2><!-- /.Section-title  -->
				<div id="time_countdown" class="time-count-container">

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash days_dash animated" data-animation="rollIn" data-animation-delay="300">
								<span class="time-number">
									<span class="digit">0</span>
									<span class="digit">0</span>
									<span class="digit">0</span>								</span>
								<span class="time-name">Days</span>							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash hours_dash animated" data-animation="rollIn" data-animation-delay="600">
								<span class="time-number">
									<span class="digit">0</span>
									<span class="digit">0</span>								</span>
								<span class="time-name">Hours</span>							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash minutes_dash animated" data-animation="rollIn" data-animation-delay="900">
								<span class="time-number">
									<span class="digit">0</span>
									<span class="digit">0</span>								</span>
								<span class="time-name">Minutes</span>							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash seconds_dash animated" data-animation="rollIn" data-animation-delay="1200">
								<span class="time-number">
									<span class="digit">0</span>
									<span class="digit">0</span>								</span>
								<span class="time-name">Seconds</span>							</div>
						</div>
					</div>
				</div><!-- /.time-count-container -->

				<p class="time-until">
					Time Until Launce				</p><!-- /.time-until -->



				<div class="next-section">				</div><!-- /.next-section -->
			</div><!-- /.container -->
		</div>
	  <span class="style1">
	  <!-- /.pattern -->		
	  </span></section>
	<span class="style1">
	<!-- /#page-top -->
	<!-- Page Top Section  End -->


	<!-- About Us Section -->
	<section id="about" class="section-style" data-background-image="images/background/about-us.jpg">	  </section>
	</span>
	<section id="about" class="section-style" data-background-image="images/background/about-us.jpg"><div class="pattern height-resize"> 
			<div class="container style9">
				<h3 class="section-name ">
					
						About Us				</h3>
				
			  <!-- /.section-name -->
			  
				<h2 class="section-title style8">
					JURUSAN</h2>
				<h2 class="section-title style8">KAMPUS LPPSN</h2>
				
			  <!-- /.Section-title  -->
				
				<!-------------------------------------------------------------------------------------------------------------------------->
				
				<?php
				include "config/koneksi.php";				
				$jurusan=mysql_query("SELECT * FROM tb_jurusan");
				while ($r=mysql_fetch_array($jurusan)){					
					echo "<p><p class='section-description style4'><strong>Jurusan $r[nama_jurusan]</strong></p>";					
					echo "<p>$r[keterangan]</p>";
					
					for($i=1; $i<=8; $i++)
					{						
						
						echo "<div align='center'>";
							echo "<p> &nbsp; </p>";
							echo "<p> <b> SEMESTER $i </b> </p>";
							
							// Table--------------------
							echo"<table id='tbl_'$r[kode_jurusan]' border='3' cellspacing='0' cellpadding='0'>";
							$matkul=mysql_query("SELECT * FROM tb_matkul where kode_jurusan='$r[kode_jurusan]' and semester = $i");							
							echo"<tr>
									<th>kode matakuliah</th>
									<th>nama matakuliah</th>
									<th>Sks</th>
								</tr>";
							while ($r_matkul=mysql_fetch_array($matkul)){
								echo"<tr>
									<td>$r_matkul[kode_matkul]</td>
									<th>$r_matkul[nama_matkul]</th>
									<th>$r_matkul[sks]</th>
								</tr>"; 
							}
							echo"</table>";
							//------------------------
						echo "</div>";
					}				
					
				}
				
				/*
				<p class="section-description style4"><strong>Jurusan STMIK Triguna Utama</strong></p>
				<p align="justify">
                  <!-- /.section-description -->
				  Kurikulum Program Studi Teknik Informatika
				  Kurikulum disusun dengan mengakomodasi kebutuhan dunia usaha dan dunia industry. Kurikulum didistribusikan kedalam delapan semester. Pada semester kedelapan diberikan Penulisan Skripsi/Tugas Akhir. Adapun distribusi kurikulum program studi Teknik Informatika Jenjang Strata Satu (S1) LPPSN dapat dilihat sebagai berikut : </p>
				<p align="center" class="style10">Semester I</p>
				<div align="center">
                  <table border="3" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><strong>No </strong></td>
                      <td width="100" valign="top"><p><strong>Kode MK</strong></p></td>
                      <td width="446" valign="top"><p><strong>Nama Matakuliah</strong></p></td>
                      <td width="37" valign="top"><p align="right"><strong>Sks</strong></p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>AP101</p></td>
                      <td width="446" valign="top"><p>Algoritma dan    Pemograman</p></td>
                      <td width="37" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>IT101</p></td>
                      <td width="446" valign="top"><p>Paket Program    Niaga</p></td>
                      <td width="37" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>IT211</p></td>
                      <td width="446" valign="top"><p>Pengantar Teknologi    Informasi</p></td>
                      <td width="37" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>MP101</p></td>
                      <td width="446" valign="top"><p>Manajemen Umum</p></td>
                      <td width="37" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>SC201</p></td>
                      <td width="446" valign="top"><p>Kalkulus I</p></td>
                      <td width="37" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>SC301</p></td>
                      <td width="446" valign="top"><p>Statistik I    (Dasar)</p></td>
                      <td width="37" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>SC101</p></td>
                      <td width="446" valign="top"><p>Matriks &amp;    Tranformasi Linier</p></td>
                      <td width="37" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>8.</p></td>
                      <td width="100" valign="top"><p>DU101</p></td>
                      <td width="446" valign="top"><p>Bahasa Inggris</p></td>
                      <td width="37" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>&nbsp;</p></td>
                      <td width="100" valign="top"><p>&nbsp;</p></td>
                      <td width="446" valign="top"><p>&nbsp;</p></td>
                      <td width="37" valign="top"><p align="center"><strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p class="style10">Semester II</p>
				  <table border="3" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><strong>No </strong></td>
                      <td width="100" valign="top"><p><strong>Kode MK</strong></p></td>
                      <td width="448" colspan="2" valign="top"><p><strong>Nama Matakuliah</strong></p></td>
                      <td width="36" valign="top"><p align="right"><strong>Sks</strong></p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="106" colspan="2" valign="top"><p>AP321</p></td>
                      <td width="442" valign="top"><p>Pemograman Berorientasi    Objek</p></td>
                      <td width="36" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="106" colspan="2" valign="top"><p>AP102</p></td>
                      <td width="442" valign="top"><p>Metode Perancangan    Program</p></td>
                      <td width="36" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="106" colspan="2" valign="top"><p>IT401</p></td>
                      <td width="442" valign="top"><p>Sistem Operasi</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="106" colspan="2" valign="top"><p>IS208</p></td>
                      <td width="442" valign="top"><p>Pengantar    Pengolahan Citra</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="106" colspan="2" valign="top"><p>SC202</p></td>
                      <td width="442" valign="top"><p>Kalkulus II</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="106" colspan="2" valign="top"><p>SC302</p></td>
                      <td width="442" valign="top"><p>Statistik II    (Probabilitas)</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="106" colspan="2" valign="top"><p>IS201</p></td>
                      <td width="442" valign="top"><p>Struktur Data</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>8.</p></td>
                      <td width="106" colspan="2" valign="top"><p>DU401</p></td>
                      <td width="442" valign="top"><p>Agama</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>&nbsp;</p></td>
                      <td width="106" colspan="2" valign="top"><p>&nbsp;</p></td>
                      <td width="442" valign="top"><p>&nbsp;</p></td>
                      <td width="36" valign="top"><p align="center"><strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p class="style10">Semester III</p>
				  <table border="3" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><strong>No </strong></td>
                      <td width="100" valign="top"><p><strong>Kode MK</strong></p></td>
                      <td width="448" valign="top"><p><strong>Nama Matakuliah</strong></p></td>
                      <td width="36" valign="top"><p align="right"><strong>Sks</strong></p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>IS201</p></td>
                      <td width="448" valign="top"><p>Sistem &amp;    Perancangan Basis Data</p></td>
                      <td width="36" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>IS202</p></td>
                      <td width="448" valign="top"><p>Pengolahan Citra    Digital</p></td>
                      <td width="36" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>IS102</p></td>
                      <td width="448" valign="top"><p>Sistem Informasi    Manajemen</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>IT221</p></td>
                      <td width="448" valign="top"><p>Sistem Digital</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>AP111</p></td>
                      <td width="448" valign="top"><p>Konsep Bahasa    Pemograman</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>AP312</p></td>
                      <td width="448" valign="top"><p>Teori Bahasa &amp;    Automata</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>IT215</p></td>
                      <td width="448" valign="top"><p>Interaksi Manusia    &amp; Komputer</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>8.</p></td>
                      <td width="100" valign="top"><p>DU201</p></td>
                      <td width="448" valign="top"><p>Pancasila</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>&nbsp;</p></td>
                      <td width="100" valign="top"><p>&nbsp;</p></td>
                      <td width="448" valign="top"><p>&nbsp;</p></td>
                      <td width="36" valign="top"><p align="center"><strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p class="style10">Semester IV</p>
				  <table border="3" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><strong>No </strong></td>
                      <td width="100" valign="top"><p><strong>Kode MK</strong></p></td>
                      <td width="448" valign="top"><p><strong>Nama Matakuliah</strong></p></td>
                      <td width="36" valign="top"><p align="right"><strong>Sks</strong></p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>AP322</p></td>
                      <td width="448" valign="top"><p>Pemograman Visual    I</p></td>
                      <td width="36" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>IS327</p></td>
                      <td width="448" valign="top"><p>Perancangan Web</p></td>
                      <td width="36" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>IS311</p></td>
                      <td width="448" valign="top"><p>Analisis Sistem    Informasi</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>IT212</p></td>
                      <td width="448" valign="top"><p>Organisasi &amp;    Arsitektur Komputer</p></td>
                      <td width="36" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>IT219</p></td>
                      <td width="448" valign="top"><p>Komunikasi Data</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>SC102</p></td>
                      <td width="448" valign="top"><p>Matematika Diskrit</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>DU301</p></td>
                      <td width="448" valign="top"><p>Kewarganegaraan</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>&nbsp;</p></td>
                      <td width="100" valign="top"><p>&nbsp;</p></td>
                      <td width="448" valign="top"><p>&nbsp;</p></td>
                      <td width="36" valign="top"><p align="center"><strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p class="style10">Semester V</p>
				  <table border="3" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="25" valign="top"><strong>No </strong></td>
                      <td width="108" valign="top"><p><strong>Kode MK</strong></p></td>
                      <td width="447" valign="top"><p><strong>Nama Matakuliah</strong></p></td>
                      <td width="36" valign="top"><p><strong>Sks</strong></p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>1.</p></td>
                      <td width="108" valign="top"><p>AP328</p></td>
                      <td width="447" valign="top"><p>Pemograman Visual    II</p></td>
                      <td width="36" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>2.</p></td>
                      <td width="108" valign="top"><p>AP324</p></td>
                      <td width="447" valign="top"><p>Pemograman Web</p></td>
                      <td width="36" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>3.</p></td>
                      <td width="108" valign="top"><p>IS321</p></td>
                      <td width="447" valign="top"><p>Perancangan Sistem    Informasi</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>4.</p></td>
                      <td width="108" valign="top"><p>IT213</p></td>
                      <td width="447" valign="top"><p>Keamanan Komputer</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>5.</p></td>
                      <td width="108" valign="top"><p>IT501</p></td>
                      <td width="447" valign="top"><p>Artificial    Intellegent</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>6.</p></td>
                      <td width="108" valign="top"><p>IS501</p></td>
                      <td width="447" valign="top"><p>Rekayasa Perangkat    Lunak</p></td>
                      <td width="36" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>7.</p></td>
                      <td width="108" valign="top"><p>SC401</p></td>
                      <td width="447" valign="top"><p>Metode Numerik</p></td>
                      <td width="36" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>&nbsp;</p></td>
                      <td width="108" valign="top"><p>&nbsp;</p></td>
                      <td width="447" valign="top"><p>&nbsp;</p></td>
                      <td width="36" valign="top"><p align="center"><strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p class="style10">Semester VI</p>
				  <table border="3" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="25" valign="top"><strong>No </strong></td>
                      <td width="108" valign="top"><p><strong>Kode MK</strong></p></td>
                      <td width="453" valign="top"><p><strong>Nama Matakuliah</strong></p></td>
                      <td width="30" valign="top"><p><strong>Sks</strong></p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>&nbsp;</p></td>
                      <td width="108" valign="top"><p>&nbsp;</p></td>
                      <td width="453" valign="top"><p>&nbsp;</p></td>
                      <td width="30" valign="top"><p>&nbsp;</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>1.</p></td>
                      <td width="108" valign="top"><p>AP329</p></td>
                      <td width="453" valign="top"><p>Pemograman Visual    III</p></td>
                      <td width="30" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>2.</p></td>
                      <td width="108" valign="top"><p>IS602</p></td>
                      <td width="453" valign="top"><p>E-Commerce</p></td>
                      <td width="30" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>3.</p></td>
                      <td width="108" valign="top"><p>MP105</p></td>
                      <td width="453" valign="top"><p>Manajemen Proyek</p></td>
                      <td width="30" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>4.</p></td>
                      <td width="108" valign="top"><p>MP402</p></td>
                      <td width="453" valign="top"><p>Metode Penelitian</p></td>
                      <td width="30" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>5.</p></td>
                      <td width="108" valign="top"><p>MP202</p></td>
                      <td width="453" valign="top"><p>Kewirausahaan</p></td>
                      <td width="30" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>6.</p></td>
                      <td width="108" valign="top"><p>IS204</p></td>
                      <td width="453" valign="top"><p>Pengolahan Data    Terdistribusi</p></td>
                      <td width="30" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>7.</p></td>
                      <td width="108" valign="top"><p>AP201</p></td>
                      <td width="453" valign="top"><p>Grafik Komputer</p></td>
                      <td width="30" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>&nbsp;</p></td>
                      <td width="108" valign="top"><p>&nbsp;</p></td>
                      <td width="453" valign="top"><p>&nbsp;</p></td>
                      <td width="30" valign="top"><p align="center"><strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p class="style10">Semester VII</p>
				  <table border="3" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="25" valign="top"><strong>No </strong></td>
                      <td width="108" valign="top"><p><strong>Kode MK</strong></p></td>
                      <td width="456" valign="top"><p><strong>Nama Matakuliah</strong></p></td>
                      <td width="27" valign="top"><p><strong>Sks</strong></p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>1.</p></td>
                      <td width="108" valign="top"><p>IT301</p></td>
                      <td width="456" valign="top"><p>Jaringan Komputer</p></td>
                      <td width="27" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>2.</p></td>
                      <td width="108" valign="top"><p>IT21</p></td>
                      <td width="456" valign="top"><p>Teknologi Wireless</p></td>
                      <td width="27" valign="top"><p align="center">4</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>3.</p></td>
                      <td width="108" valign="top"><p>IS203</p></td>
                      <td width="456" valign="top"><p>Sistem Berkas</p></td>
                      <td width="27" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>4.</p></td>
                      <td width="108" valign="top"><p>IS605</p></td>
                      <td width="456" valign="top"><p>Sosiologi    Komunikasi</p></td>
                      <td width="27" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>5.</p></td>
                      <td width="108" valign="top"><p>MP201</p></td>
                      <td width="456" valign="top"><p>Etika    Profesi/Bisnis</p></td>
                      <td width="27" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>6.</p></td>
                      <td width="108" valign="top"><p>IT601</p></td>
                      <td width="456" valign="top"><p>Kapita Selekta</p></td>
                      <td width="27" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>7.</p></td>
                      <td width="108" valign="top"><p>MP501</p></td>
                      <td width="456" valign="top"><p>Hukum dan    Perikatan</p></td>
                      <td width="27" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>8.</p></td>
                      <td width="108" valign="top"><p>MP300</p></td>
                      <td width="456" valign="top"><p>Kerja Praktek</p></td>
                      <td width="27" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>&nbsp;</p></td>
                      <td width="108" valign="top"><p>&nbsp;</p></td>
                      <td width="456" valign="top"><p>&nbsp;</p></td>
                      <td width="27" valign="top"><p align="center"><strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p class="style10">Semester VIII</p>
				  <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="25" valign="top"><strong>No </strong></td>
                      <td width="108" valign="top"><p><strong>Kode MK</strong></p></td>
                      <td width="456" valign="top"><p><strong>Nama Matakuliah</strong></p></td>
                      <td width="27" valign="top"><p><strong>Sks</strong></p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>1.</p></td>
                      <td width="108" valign="top"><p>IS606</p></td>
                      <td width="456" valign="top"><p>Customer Relationship    Management</p></td>
                      <td width="27" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>2.</p></td>
                      <td width="108" valign="top"><p>IS601</p></td>
                      <td width="456" valign="top"><p>Knowledge    Management</p></td>
                      <td width="27" valign="top"><p align="center">2</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>3.</p></td>
                      <td width="108" valign="top"><p>MP301</p></td>
                      <td width="456" valign="top"><p>Skripsi</p></td>
                      <td width="27" valign="top"><p align="center">6</p></td>
                    </tr>
                    <tr>
                      <td width="25" valign="top"><p>&nbsp;</p></td>
                      <td width="108" valign="top"><p>&nbsp;</p></td>
                      <td width="456" valign="top"><p>&nbsp;</p></td>
                      <td width="27" valign="top"><p align="center"><strong>10</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  
				  
				  <!----------------------------------------------------------------------------------------------------------------------------------------- -->
				  <p align="center" class="style10">Total  Sks 150</p>
				  <p align="center" class="style10">&nbsp;</p>
				  <p align="center" class="style10">&nbsp;</p>			   
				  
				  <p align="center" class="style10"><strong>Jurusan STIE ISM</strong></p>
				  <p>Kurikulum Program Studi Manajemen  Bisnis<br>
				    Kurikulum disusun dengan mengakomodasi  kebutuhan dunia usaha dan dunia industry. Kurikulum didistribusikan kedalam 8  (delapan) semester. Pada semester ke-8 (kedelapan) diberikan penulisan Skripsi  atau Tugas Akhir. Adapun distribusi kurikulum program studi Manajemen Bisnis  Jenjang Stratra 1 (S1) LPPSN dapat dilihat sebagai berikut :</p>
				  <p><strong>Semester I</strong></p>
				  <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><br>
                        No </td>
                      <td width="100" valign="top"><p>Kode MK</p></td>
                      <td width="329" valign="top"><p>Nama Matakuliah</p></td>
                      <td width="154" valign="top"><p align="right">Sks</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>KK13225</p></td>
                      <td width="329" valign="top"><p>Pengantar Ekonomi    Mikro</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>KK13204</p></td>
                      <td width="329" valign="top"><p>Pengantar    Akuntansi I</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>KK12223</p></td>
                      <td width="329" valign="top"><p>Pengantar Bisnis</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>KK13221</p></td>
                      <td width="329" valign="top"><p>Matematika Ekonomi</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>KK13226</p></td>
                      <td width="329" valign="top"><p>Pengantar    Manajemen</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>KK33227</p></td>
                      <td width="329" valign="top"><p>Statistik I    (Deskriptif)</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>KK22209</p></td>
                      <td width="329" valign="top"><p>Bahasa Inggris</p></td>
                      <td width="154" valign="top"><p align="right">2<br>
                              <strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p><strong>Semester II</strong></p>
				  <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><br>
                        No </td>
                      <td width="100" valign="top"><p>Kode MK</p></td>
                      <td width="329" valign="top"><p>Nama Matakuliah</p></td>
                      <td width="154" valign="top"><p align="right">Sks</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>KK13224</p></td>
                      <td width="329" valign="top"><p>Pengantar Ekonomi    Makro</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>KK23205</p></td>
                      <td width="329" valign="top"><p>Pengantar    Akuntansi II</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>KK62208</p></td>
                      <td width="329" valign="top"><p>Bahas Indonesia    Unuk Penelitian II</p></td>
                      <td width="154" valign="top"><p align="right">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>BB33549</p></td>
                      <td width="329" valign="top"><p>Manajemen HUmas</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>KK22212</p></td>
                      <td width="329" valign="top"><p>Sosiologi Ekonomi</p></td>
                      <td width="154" valign="top"><p align="right">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>KK43228</p></td>
                      <td width="329" valign="top"><p>Statistik II    (Probabilitas)</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" height="56" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>PK12102</p></td>
                      <td width="329" valign="top"><p>Agama</p></td>
                      <td width="154" valign="top"><p align="right">2<br>
                              <strong>18</strong></p></td>
                    </tr>
                  </table>				  
				  <p>&nbsp;</p>
				  <p><strong>Semester III</strong></p>
				  <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><br>
                        No </td>
                      <td width="100" valign="top"><p>Kode MK</p></td>
                      <td width="329" valign="top"><p>Nama Matakuliah</p></td>
                      <td width="154" valign="top"><p align="right">Sks</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>PB53415</p></td>
                      <td width="329" valign="top"><p>Manajemen Keuangan    I</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>BB73548</p></td>
                      <td width="329" valign="top"><p>Perekonomian    Indonesia</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>KB43331</p></td>
                      <td width="329" valign="top"><p>Aplikasi KOmputer</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>KK33207</p></td>
                      <td width="329" valign="top"><p>Akuntansi    Manajemen</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>PB43442</p></td>
                      <td width="329" valign="top"><p>Manajemen SDM</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>KB33339</p></td>
                      <td width="329" valign="top"><p>Sis. Info    Manajemen</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>PK12101</p></td>
                      <td width="329" valign="top"><p>PPKN</p></td>
                      <td width="154" valign="top"><p align="right">2<br>
                              <strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p><strong>Semester IV</strong></p>
				  <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><br>
                        No </td>
                      <td width="100" valign="top"><p>Kode MK</p></td>
                      <td width="329" valign="top"><p>Nama Matakuliah</p></td>
                      <td width="154" valign="top"><p align="right">Sks</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>KB63335</p></td>
                      <td width="329" valign="top"><p>Manajemen    Keuanngan II</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>PB63416</p></td>
                      <td width="329" valign="top"><p>Manajemen Produksi</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>KK23229</p></td>
                      <td width="329" valign="top"><p>Teori Ekonomi    Makro</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>KK33218</p></td>
                      <td width="329" valign="top"><p>Manajemen Resiko</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>KB23333</p></td>
                      <td width="329" valign="top"><p>Ekonomi Manajerial</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>BB42552</p></td>
                      <td width="329" valign="top"><p>Man. Koperasi dan    UKM</p></td>
                      <td width="154" valign="top"><p align="right">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>KB43332</p></td>
                      <td width="329" valign="top"><p>Lab. Statistik </p></td>
                      <td width="154" valign="top"><p align="right">3<br>
                              <strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p align="center" class="style10">&nbsp;</p>
				  <p>Semester V</p>
				  <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><br>
                        No </td>
                      <td width="100" valign="top"><p>Kode MK</p></td>
                      <td width="329" valign="top"><p>Nama Matakuliah</p></td>
                      <td width="154" valign="top"><p align="right">Sks</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>KK23230</p></td>
                      <td width="329" valign="top"><p>Teori Ekonomi    Mikro</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>PB43417</p></td>
                      <td width="329" valign="top"><p>Manajemen    Pemasaran</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>KK33214</p></td>
                      <td width="329" valign="top"><p>Lembaga Perbankan Syariah</p></td>
                      <td width="154" valign="top"><p align="right">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>KB33332</p></td>
                      <td width="329" valign="top"><p>Bank &amp; Lembaga    Keuangan Lainnya</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>KK53337</p></td>
                      <td width="329" valign="top"><p>Pengantar    Perusahaan</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>KK62222</p></td>
                      <td width="329" valign="top"><p>Manajemen    Perubahan</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>KB53338</p></td>
                      <td width="329" valign="top"><p>Perilaku    Organisasi</p></td>
                      <td width="154" valign="top"><p align="right">3<br>
                              <strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p><strong>Semester VI</strong></p>
				  <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><br>
                        No </td>
                      <td width="100" valign="top"><p>Kode MK</p></td>
                      <td width="329" valign="top"><p>Nama Matakuliah</p></td>
                      <td width="154" valign="top"><p align="right">Sks</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>KB53336</p></td>
                      <td width="329" valign="top"><p>Metodologi    Penelitian</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>PB63419</p></td>
                      <td width="329" valign="top"><p>Manajemen    Strategic</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>PB73446</p></td>
                      <td width="329" valign="top"><p>Teori Protfolio    &amp; Analisa Investasi</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>KB63334</p></td>
                      <td width="329" valign="top"><p>Evaluasi Kinerja</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>BB73547</p></td>
                      <td width="329" valign="top"><p>Ekonomi    Internasional</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>KK22213</p></td>
                      <td width="329" valign="top"><p>Kewirausahaan</p></td>
                      <td width="154" valign="top"><p align="right">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>PB63420</p></td>
                      <td width="329" valign="top"><p>Manajemen Proyek</p></td>
                      <td width="154" valign="top"><p align="right">3<br>
                              <strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p><strong>Semester V</strong></p>
				  <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><br>
                        No </td>
                      <td width="100" valign="top"><p>Kode MK</p></td>
                      <td width="329" valign="top"><p>Nama Matakuliah</p></td>
                      <td width="154" valign="top"><p align="right">Sks</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>KK23230</p></td>
                      <td width="329" valign="top"><p>Teori Ekonomi    Mikro</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>PB43417</p></td>
                      <td width="329" valign="top"><p>Manajemen    Pemasaran</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>KK33214</p></td>
                      <td width="329" valign="top"><p>Lembaga Perbankan Syariah</p></td>
                      <td width="154" valign="top"><p align="right">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>KB33332</p></td>
                      <td width="329" valign="top"><p>Bank &amp; Lembaga    Keuangan Lainnya</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>KK53337</p></td>
                      <td width="329" valign="top"><p>Pengantar    Perusahaan</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>KK62222</p></td>
                      <td width="329" valign="top"><p>Manajemen    Perubahan</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>KB53338</p></td>
                      <td width="329" valign="top"><p>Perilaku    Organisasi</p></td>
                      <td width="154" valign="top"><p align="right">3<br>
                              <strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p>Semester VI</p>
				  <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><br>
                        No </td>
                      <td width="100" valign="top"><p>Kode MK</p></td>
                      <td width="329" valign="top"><p>Nama Matakuliah</p></td>
                      <td width="154" valign="top"><p align="right">Sks</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>KB53336</p></td>
                      <td width="329" valign="top"><p>Metodologi    Penelitian</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>PB63419</p></td>
                      <td width="329" valign="top"><p>Manajemen    Strategic</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>PB73446</p></td>
                      <td width="329" valign="top"><p>Teori Protfolio    &amp; Analisa Investasi</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>KB63334</p></td>
                      <td width="329" valign="top"><p>Evaluasi Kinerja</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>BB73547</p></td>
                      <td width="329" valign="top"><p>Ekonomi    Internasional</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>KK22213</p></td>
                      <td width="329" valign="top"><p>Kewirausahaan</p></td>
                      <td width="154" valign="top"><p align="right">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>PB63420</p></td>
                      <td width="329" valign="top"><p>Manajemen Proyek</p></td>
                      <td width="154" valign="top"><p align="right">3<br>
                              <strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p align="center" class="style10">&nbsp;</p>
				  <p><strong>Semester VII</strong></p>
				  <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><br>
                        No </td>
                      <td width="100" valign="top"><p>Kode MK</p></td>
                      <td width="329" valign="top"><p>Nama Matakuliah</p></td>
                      <td width="154" valign="top"><p align="right">Sks</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>KP73778</p></td>
                      <td width="329" valign="top"><p>Seminar Manajemen    Bisnis</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>BB73553</p></td>
                      <td width="329" valign="top"><p>Komunikasi    Pemasaran</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>BB73554</p></td>
                      <td width="329" valign="top"><p>Perilaku Konsumen</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>4.</p></td>
                      <td width="100" valign="top"><p>PB53444</p></td>
                      <td width="329" valign="top"><p>Pemasaran Retail</p></td>
                      <td width="154" valign="top"><p align="right">3</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>5.</p></td>
                      <td width="100" valign="top"><p>PB63441</p></td>
                      <td width="329" valign="top"><p>Pengantar    Komunikasi Bisnis &amp; Etika</p></td>
                      <td width="154" valign="top"><p align="right">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>6.</p></td>
                      <td width="100" valign="top"><p>KK42207</p></td>
                      <td width="329" valign="top"><p>Aspek Hukum Dalam    Bisnis</p></td>
                      <td width="154" valign="top"><p align="right">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>7.</p></td>
                      <td width="100" valign="top"><p>BB73556</p></td>
                      <td width="329" valign="top"><p>KKN/Kerja Praktek</p></td>
                      <td width="154" valign="top"><p align="right">4<br>
                              <strong>20</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  <p><strong>Semester VIII</strong></p>
				  <table border="1" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="34" valign="top"><br>
                        No </td>
                      <td width="100" valign="top"><p>Kode MK</p></td>
                      <td width="329" valign="top"><p>Nama Matakuliah</p></td>
                      <td width="154" valign="top"><p align="right">Sks</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>1.</p></td>
                      <td width="100" valign="top"><p>BB82101</p></td>
                      <td width="329" valign="top"><p>Manajemen Hubungan    Pelanggan </p></td>
                      <td width="154" valign="top"><p align="right">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>2.</p></td>
                      <td width="100" valign="top"><p>BB82102</p></td>
                      <td width="329" valign="top"><p>Manajemen    Pengetahuan</p></td>
                      <td width="154" valign="top"><p align="right">2</p></td>
                    </tr>
                    <tr>
                      <td width="34" valign="top"><p>3.</p></td>
                      <td width="100" valign="top"><p>TA86100</p></td>
                      <td width="329" valign="top"><p>Skripsi</p></td>
                      <td width="154" valign="top"><p align="right">6<br>
                              <strong>10</strong></p></td>
                    </tr>
                  </table>
				  <p>&nbsp;</p>
				  */
				  ?>
				  <!----------------------------------------------------------------------------------------------------------------------------------------- -->
				  <p><strong>Total  SKS 148     </strong>			      </p>
				  <p align="center" class="style10">&nbsp;</p>
				  <p></p>
			  </div>
				<p class="section-description style4">&nbsp;</p>
				<p class="section-description style4">&nbsp;</p>
			  <p class="section-description style4">&nbsp;</p>
				<div align="center">
				  <p>&nbsp;</p>
			      <p>&nbsp;</p>
			      <p>&nbsp;</p>
			      <p>&nbsp;</p>
				</div>
				<blockquote>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
				  <p>&nbsp;</p>
			  </blockquote>
				<!-- /.col-sm-4 -->
	  </div><!-- /.row -->
					
				</div><!-- /.team-container -->

				<div class="next-section">
					<a class="go-to-subscribe"><span></span></a>				</div><!-- /.next-section -->

			</div><!-- /.container -->
		</div><!-- /.pattern -->
	</section><!-- /#about -->
	<!-- About Us Section End -->



	<!-- Subscribe Section -->
	<section id="subscribe" class="section-style" data-background-image="images/background/newsletter.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h3 class="section-name">
					<span>
						Subscribe					</span>				</h3><!-- /.section-name -->
				<h2 class="section-title">
					Our Newsletter				</h2><!-- /.Section-title  -->
				<p class="section-description">
					Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.				</p><!-- /.section-description -->

				<form class="news-letter" method="post">
					<p class="alert-success"></p>
					<p class="alert-warning"></p>

					<div class="subscribe-hide">
						<input class="form-control" type="email" id="subscribe-email" name="subscribe-email" placeholder="Email Address"  required>
						<button  type="submit" id="subscribe-submit" class="btn"><i class="fa fa-envelope"></i></button>
						<span id="subscribe-loading" class="btn"> <i class="fa fa-refresh fa-spin"></i> </span>
						<div class="subscribe-error"></div>
					</div><!-- /.subscribe-hide -->
					<div class="subscribe-message"></div>
				</form><!-- /.news-letter -->

				<div class="social-btn-container">
					<span class="social-btn-box">
						<a href="#" class="facebook-btn">
							<i class="fa fa-facebook"></i></a>						</span><!-- /.social-btn-box -->

						<span class="social-btn-box">
							<a href="#" class="twitter-btn"><i class="fa fa-twitter"></i></a>						</span><!-- /.social-btn-box -->

						<span class="social-btn-box">
							<a href="#" class="linkedin-btn"><i class="fa fa-linkedin"></i></a>						</span><!-- /.social-btn-box -->

						<span class="social-btn-box">
							<a href="#" class="google-plus-btn"><i class="fa fa-google-plus"></i></a>						</span><!-- /.social-btn-box -->


						<span class="social-btn-box">
							<a href="#" class="youtube-btn"><i class="fa fa-youtube"></i></a>						</span><!-- /.social-btn-box -->
					</div><!-- /.social-btn-container -->

					<div class="next-section">
						<a class="go-to-contact"><span></span></a>					</div><!-- /.next-section -->
				</div><!-- /.container -->
			</div><!-- /.pattern -->
		</section><!-- /#subscribe -->
		<!-- Subscribe Section End -->



		<!-- Contact Section -->
		<section id="contact" class="section-style" data-background-image="images/background/contact.jpg">
			<div class="pattern height-resize">
				<div class="container">
					<h3 class="section-name">
						<span>
							Contact						</span>					</h3><!-- /.section-name -->
					<h2 class="section-title">
						Get in Touch					</h2><!-- /.Section-title  -->
					<p class="section-description">
						Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.					</p><!-- /.section-description -->

					<form id="contact-form" action="email.php" method="post" class="clearfix">
						<div class="contact-box-hide">
							<div class="col-sm-6">
								<input type="text"  class="form-control" id="first_name" name="first_name" required placeholder="First Name">
								<span class="first-name-error"></span>							</div>
							<div class="col-sm-6">
								<input type="text"  class="form-control" id="last_name" name="last_name" required placeholder="Last Name">
								<span class="last-name-error"></span>							</div>
							<div class="col-sm-6">
								<input type="email" class="form-control"  id="contact_email" name="contact_email" required placeholder="Email Address">
								<span class="contact-email-error"></span>							</div>
							<div class="col-sm-6">
								<input type="text"  class="form-control" id="subject" name="contact_subject" required placeholder="Subject">
								<span class="contact-subject-error"></span>							</div>
							<div class="col-sm-10">
								<textarea class="form-control" rows="5" id="message" name="message" required placeholder="Message"></textarea>
								<span class="contact-message-error"></span>							</div>
							<div class="col-sm-2">
								<button id="contact-submit" class="btn custom-btn col-xs-12" type="submit" name="submit"><i class="fa fa-rocket"></i></button>
								<span id="contact-loading" class="btn custom-btn col-xs-12"> <i class="fa fa-refresh fa-spin"></i> </span>							</div>
						</div><!-- /.contact-box-hide -->
						<div class="contact-message"></div>
					</form><!-- /#contact-form -->		

					<div class="next-section">
						<a class="go-to-page-top"><span></span></a>					</div><!-- /.next-section -->
				</div><!-- /.container -->
			</div><!-- /.pattern -->
		</section><!-- /#contact -->
		<!-- Contact Section End -->



		<!-- Footer Section -->
		<footer id="footer-section">
			<p class="copyright">
				&copy; <a href="http://jeweltheme.com/html/kite/">Kite</a> 2014-2015, All Rights Reserved. Designed by & Developed by <a href="http://jeweltheme.com">Jewel Theme</a>			</p>
		</footer>
		<!-- Footer Section End -->


		<!-- jQuery Library -->
		<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
		<!-- Modernizr js -->
		<script type="text/javascript" src="assets/js/modernizr-2.8.0.min.js"></script>
		<!-- Plugins -->
		<script type="text/javascript" src="assets/js/plugins.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="assets/js/functions.js"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="assets/js/jquery.ajaxchimp.min.js"></script>
	</body>
</html>
