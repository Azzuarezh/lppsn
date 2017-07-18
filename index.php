<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>	Kampus LPPSN </title>
	<meta name="description" content="LPPSN" >
	<meta name="author" content="Azzuarezh">

	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

	<!-- Bootstrap  -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!-- icon fonts font Awesome -->
	<link href="assets/css/font-awesome.min.css" rel="stylesheet">
	<link rel='stylesheet' id='camera-css'  href='assets/css/camera.css' type='text/css' media='all'>
	<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css">
	<link rel="stylesheet" href="assets/css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />

	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700|Open+Sans:700' rel='stylesheet' type='text/css'>
	<!-- Custom Styles -->
	<link href="assets/css/style.css" rel="stylesheet">

	<style>
       #map {
        height: 400px;
        width: 100%;
       }
       #camera{
		margin-bottom:0 !important;
		margin-top: 10px;
	}
	
    </style>
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<![endif]-->

</head>
<body>


	<!-- Preloader -->
	<div id="preloader">
		<div id="loader">
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
	</div><!-- /#preloader -->
	<!-- Preloader End-->


	<!-- Main Menu -->
	<div id="main-menu" class="navbar navbar-default navbar-fixed-top" role="navigation">

		<div class="navbar-header">
			<!-- responsive navigation -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<i class="fa fa-bars"></i>
			</button> <!-- /.navbar-toggle -->

		</div> <!-- /.navbar-header -->

		<nav class="collapse navbar-collapse">
			<!-- Main navigation -->
			<ul id="headernavigation" class="nav navbar-nav">
				<li class="active"><a href="#page-top">Home</a></li>	
				<li><a href="#about">About</a></li>	
				<li><a href="#subscribe">Event</a></li>
                <li><a href="#gallery">Gallery</a></li>	
				<li><a href="#contact">Contact</a></li>		
			</ul> <!-- /.nav .navbar-nav -->
		</nav> <!-- /.navbar-collapse  -->
	</div><!-- /#main-menu -->
	<!-- Main Menu End -->
	

	<!-- Page Top Section -->
	<section id="page-top" class="section-style" data-background-image="images/background/page-top.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h1 class="site-title">
					Kampus Lppsn
				</h1><!-- /.site-title -->
				<h3 class="section-name">
					<span>
						We Are
					</span>
				</h3><!-- /.section-name -->
				<h1 id="fadeout-text" class="section-title"><strong></strong></h1>
				<!-- CAMERA PLUGIN -->
				
				<div id="time_countdown" class="time-count-container">

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash days_dash animated" data-animation="rollIn" data-animation-delay="300">
								<span class="time-number" id="date"></span>
								<span class="time-name" id="day-locale-text"></span>									
							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash hours_dash animated" data-animation="rollIn" data-animation-delay="600">														
								<span class="time-number" id="years"></span>
								<span class="time-name" id="month-locale-text"></span>							
							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash minutes_dash animated" data-animation="rollIn" data-animation-delay="900">
								<span class="time-number" id="hours"></span>								
							</div>
						</div>
					</div>

					<div class="col-sm-3">
						<div class="time-box">
							<div class="time-box-inner dash seconds_dash animated" data-animation="rollIn" data-animation-delay="1200">
								<span class="time-number" id="seconds"></span>															
							</div>
						</div>
					</div>
				</div> <!-- /.time-count-container

				<p class="time-until">
					<span>Time Until Launch</span>
				</p><!-- /.time-until -->



				<div class="next-section">
					<a class="go-to-about"><span></span></a>
				</div><!-- /.next-section -->
				
			</div><!-- /.container -->
		</div><!-- /.pattern -->		
	</section><!-- /#page-top -->
	<!-- Page Top Section  End -->


	<!-- About Us Section -->
	<section id="about" class="section-style" data-background-image="images/background/about-us.jpg">
		<div class="pattern height-resize"> 
			<div class="container">
				<h3 class="section-name">
					<span>
						About Us
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title style8">
					JURUSAN<br/>KAMPUS LPPSN</h2>
				<!-- /.Section-title  -->
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
        ?>		
		
	</section><!-- /#about -->
	<!-- About Us Section End -->



	<!-- Subscribe Section -->
	<section id="subscribe" class="section-style" data-background-image="images/background/newsletter.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h3 class="section-name">
					<span>
						Event
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					coming soon 
				</h2><!-- /.Section-title  -->
				<p class="section-description">
					
                    
                    
                    
                     <!--  Untuk isi konten event di sini ya -->
                    
                    
                    
                    
				</p><!-- /.section-description -->

			<!--	<form class="news-letter" method="post">
					<p class="alert-success"></p>
					<p class="alert-warning"></p>

					<div class="subscribe-hide">
						<input class="form-control" type="email" id="subscribe-email" name="subscribe-email" placeholder="Email Address"  required>
						<button  type="submit" id="subscribe-submit" class="btn"><i class="fa fa-envelope"></i></button>
						<span id="subscribe-loading" class="btn"> <i class="fa fa-refresh fa-spin"></i> </span>
						<div class="subscribe-error"></div>
					</div><!-- /.subscribe-hide -->
				<!--	<div class="subscribe-message"></div> -->
				</form><!-- /.news-letter -->

				<div class="social-btn-container">
					<span class="social-btn-box">
						<a href="http://facebook.com/lppsncinere/" class="facebook-btn">
							<i class="fa fa-facebook"></i></a>
						</span><!-- /.social-btn-box -->

						<span class="social-btn-box">
							<a href="https://www.instagram.com/lppsn_cinere/" class="twitter-btn"><i class="fa fa-instagram" aria-hidden="true"></i></a>
						</span><!-- /.social-btn-box -->

						<span class="social-btn-box">
							<a href="https://plus.google.com/113761310654805668711" class="google-plus-btn"><i class="fa fa-google-plus"></i></a>
						</span><!-- /.social-btn-box -->


						<span class="social-btn-box">
							<a href="https://www.youtube.com/channel/UCDy-C1Bi1oXjBlFI8JYI_JQ" class="youtube-btn"><i class="fa fa-youtube"></i></a>
						</span><!-- /.social-btn-box -->



					</div><!-- /.social-btn-container -->

					<div class="next-section">
						<a class="go-to-contact"><span></span></a>
					</div><!-- /.next-section -->

				</div><!-- /.container -->
			</div><!-- /.pattern -->

		</section><!-- /#subscribe -->
		<!-- Subscribe Section End -->

<!-- gallery -->

<!-- Subscribe Section -->
	<section id="gallery" class="section-style" data-background-image="images/background/newsletter.jpg">
		<div class="pattern height-resize">
			<div class="container">
				<h3 class="section-name">
					<span>
						Gallery
					</span>
				</h3><!-- /.section-name -->
				<h2 class="section-title">
					coming soon 
				</h2><!-- /.Section-title  -->
				<p class="section-description">
					
                    
                    
                    
                     <!--  Untuk isi konten event di sini ya -->
                    
                    
                    
                    
				</p>

				</div><!-- /.container -->
			</div><!-- /.pattern -->

		</section><!-- /#subscribe -->
		<!-- Subscribe Section End -->





<!-- gallery -->

		<!-- Contact Section -->
		<section id="contact" class="section-style" data-background-image="images/background/contact.jpg">
			<div class="pattern height-resize">
				<div class="container">
					<h3 class="section-name">
						<span>
							Contact
						</span>
					</h3><!-- /.section-name -->
					<!--<h2 class="section-title">
						Tinggalkan Pesan  
					</h2><!-- /.Section-title  -->
					<p class="section-description" align="center">
						<br>Untuk keterangan lebih lanjut silahkan kunjungi kampus kami <b> LPPSN CINERE </b> </br>
                        Jl. Limo Raya No.26, Cinere, Limo, depok 16515<br>
                        <b>Tlp		: 021 - 7549341 Fax. 021 - 7549339</b><br>
                        <b>Email	: akademik.lppsn@gmail.com</b>
                        
					</p>
                     
                    <!-- /.section-description -->
					<form id="contact-form" action="email.php" method="post" class="clearfix">
						<div class="contact-box-hide">
							<div class="col-sm-6">
								<input type="text"  class="form-control" id="first_name" name="first_name" required placeholder="First Name">
								<span class="first-name-error"></span>
							</div>
							<div class="col-sm-6">
								<input type="text"  class="form-control" id="last_name" name="last_name" required placeholder="Last Name">
								<span class="last-name-error"></span>
							</div>
							<div class="col-sm-6">
								<input type="email" class="form-control"  id="contact_email" name="contact_email" required placeholder="Email Address">
								<span class="contact-email-error"></span>
							</div>
							<div class="col-sm-6">
								<input type="text"  class="form-control" id="subject" name="contact_subject" required placeholder="Subject">
								<span class="contact-subject-error"></span>
							</div>
							<div class="col-sm-10">
								<textarea class="form-control" rows="5" id="message" name="message" required placeholder="Message"></textarea>
								<span class="contact-message-error"></span>
							</div>
							<div class="col-sm-2">
								<button id="contact-submit" class="btn custom-btn col-xs-12" type="submit" name="submit"><i class="fa fa-rocket"></i></button>
								<span id="contact-loading" class="btn custom-btn col-xs-12"> <i class="fa fa-refresh fa-spin"></i> </span>
							</div>
						</div><!-- /.contact-box-hide -->
						<div class="contact-message"></div>

					</form><!-- /#contact-form -->	
                     <div id="map"> 
                     fakdisihit
                     </div>
               
						

					<div class="next-section">
						<a class="go-to-page-top"><span></span></a>
					</div><!-- /.next-section -->

				</div><!-- /.container -->
			</div><!-- /.pattern -->

		</section><!-- /#contact -->
		<!-- Contact Section End -->



		<!-- Footer Section -->
		<footer id="footer-section">
			<!-- Copyright --><p style="background-color:#000000" align="center"> Copyright © 2013 Rumah Anak Mandiri Karim - All rights reserved . | <a href="#about">About Us</a> | <a href="#event">Event</a> | <a href="#gallery">Gallery</a>
		</footer>
		<!-- Footer Section End -->


		<!-- jQuery Library -->
		<script type="text/javascript" src="assets/js/jquery-2.1.0.min.js"></script>
		<!-- Modernizr js -->
		<script type="text/javascript" src="assets/js/modernizr-2.8.0.min.js"></script>
		<!-- Plugins -->
		<script type="text/javascript" src="assets/js/plugins.js"></script>
		<script type="text/javascript" src="assets/js/jquery.ajaxchimp.min.js"></script>
		<script type="text/javascript" src="assets/js/jquery.easing.1.3.js"></script> 
		<script type="text/javascript" src="assets/js/camera.min.js"></script>
		<script src="assets/js/sorting.js" type="text/javascript"></script>
		<script src="assets/js/moment-with-locales.js" type="text/javascript"></script>
		<script src="assets/js/jquery.isotope.js" type="text/javascript"></script>
        <script async defer src="http://maps.google.com/maps/api/js?key=AIzaSyAMcdNoKweM7d8GF4Lorkqs66c9knwiQDs&callback=initMap"></script>
		<!-- Custom JavaScript Functions -->
		<script type="text/javascript" src="assets/js/functions.js"></script>
		<!-- Custom JavaScript Functions -->
		
        <script>
	    	function initMap() {
		    var titikKampus = {lat: -6.3541137, lng: 106.7762207};
		    var map = new google.maps.Map(document.getElementById('map'), {
		      zoom: 20,
		      center: titikKampus
		    });
		    var marker = new google.maps.Marker({
		      position: titikKampus,
		      map: map
		    });
		  }
        </script>
	</body>
	</html>
