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
	<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css"/>
	<link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css"/>
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
	.nav-tabs > li > a{
	  border: medium none;
	  color:#fff;
	}
	.nav-tabs > li > a:hover{
	  	background-color: rgba(0,0,0,.5) !important;
	    border: medium none;
	    border-radius: 0;	    
	}	
	.nav-tabs > li.active > a{
		background-color: rgba(0,0,0,.5) !important;
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
				<h4 class="section-description">
					LEMBAGA PENGEMBANGAN PENDIDIKAN SWASTA NASIONAL (LPPSN)
				</h4><!-- /.Section-title  -->
				<div>
				  <!-- Nav tabs -->
				  <ul class="nav nav-tabs" role="tablist">
				    <li role="presentation" class="active"><a href="#tentang" aria-controls="tentang" role="tab" data-toggle="tab">Tentang</a></li>
				    <li role="presentation"><a href="#jurusan-stmik" aria-controls="jurusan-stmik" role="tab" data-toggle="tab">STMIK</a></li>
				    <li role="presentation"><a href="#jurusan-stie" aria-controls="jurusan-stie" role="tab" data-toggle="tab">STIE</a></li>				    
				  </ul>

				  <!-- Tab panes -->
				  <div class="tab-content">
				    <div role="tabpanel" class="tab-pane active" id="tentang">				    
					    <div class="row">
						  <p align="justify"><strong>Sejarah</strong><br>
						    Lembaga Pengembangan Pendidikan  Swasta Nasional (LPPSN) berawal dari adanya dorongan untuk turut aktif berperan  dalam memajukan pendidikan di Indonesia. Berdiri pada bulan April 2014, memupuhkan  prinsip dan semangat management untuk menjadikan LPPSN sebagai salah satu  Insitusi Pendidikan Legal dan Formal terbaik di Indonesia.<br>
						    LPPSN menyelenggarakan program Strata  1 (S1) dengan dua Studi yaitu Program Studi Teknik Informatika dan Management  Bisnis, sekaligus Program Strata 2 (S2) Magister Management (MM) dan Magister  Sains (M.Si). Saat ini semua Program Studi yang diselenggarakan oleh LPPSN  telah mendapatkan peringkat TERAKREDITASI dari BAN-PT.</p>
	                      <p align="justify"><strong>Visi</strong><br>
	                        Agar pengolahan lebih terarah,  maka dirumuskan Visi LPPSN sebagai berikut :<br>
	                        Menjadi  penyelenggara pendidikan tinggi terbaik dengan kualitas lulusan yang mampu  bersaing di pasar global maupun nasional dengan mengutamakan cara berfikir yang  kritis, kreatif, patriotik, ahli dan berintegritas tinggi serta menghasilkan  produk penelitian dan pengabdian masyarakat yang dapat mendukung daya saing  bangsa Indonesia.</p>
	                      <p align="justify"><strong>Misi</strong><br>
	                        Adapun misi LPPSN dirumuskan  sebagai berikut :</p>
	                      <div align="justify">
	                        <ul>
	                          <li>Menyelenggarakan Pendidikan  Tinggi dan kajian ilmiah serta sosialisasinya berbasiskan nilai-nilai Pancasila  1 Juni 1945.</li>
	                          <li>Menyelenggarakan Pendidikan  Tinggi yang mengupayakan lulusannya untuk meningkatkan kualitas kehidupan  dirinya, keluarganya dan masyarakat Indonesia.</li>
	                          <li>Menyelenggarakan kegiatan  penelitian dan pengabdian masyarakat untuk menemukan, mengembangkan, dan  menyebarluaskan ilmu pengetahuan dan teknologi khususnya di bidang Industri  Maritim, Industri Teknologi Informasi, Industri Pertanian dan Industri Energi  yang berbasiskan energi primer berkelanjutan yang memiliki niali tambah bagi  bangsa Indonesia.</li>
	                          <li>Mengutamakan lahirnya para  wirausaha yang nasionalistik produktif, inovatif dan berwawasan global.</li>
	                          <li>Menyelenggarakan tata kelola  pendidikan tinggi yang baik, bersih, dan akuntabel dalam pelaksanaan otonomi  perguruan tinggi.</li>
	                        </ul>
	                      </div>
	                      <p align="justify"><strong>Tujuan</strong><br>
	                        Tujuan LPPSN dirumuskan sebagai  berikut :</p>
	                      <div align="justify">
	                        <ul>
	                          <li>Menghasilkan lulusan yang  menguasai ilmu pengetahuan dan teknologi yang menjunjung tinggi nilai-nilai  pancasila.</li>
	                          <li>Menciptakan produk-produk  penelitian dan pengabdian masyarakat yang mendukung pembangunan daerah dan nasional,  serta berkontribusi pada terwujudnya kesejahteraan masyarakat.</li>
	                          <li>Mewujudkan tata kelola perguruan  tinggi yang baik, bersih, dan akuntable dalam pelaksanaan otonomi perguruan  tinggi.</li>
	                        </ul>
	                      </div>
	                      <p align="justify"><strong>Budaya Organisasi</strong><br>
	                        Budaya organisasi yang  diterapkan pada LPPSN adalah budaya PIKIR, yaitu :</p>
	                      <div align="justify">
	                        <ul>
	                          <li><strong><em>P</em></strong><strong>rofesionalisme     </strong>: Meningkatkan kompetensi secara  berkelanjutan untuk memberikan pelayanan terbaik kepada pelanggan internal dan  bangsa Indonesia.<strong></strong></li>
	                          <li><strong><em>I</em></strong><strong>ntegritas           </strong>: Memiliki kepribadian yang jujur, tulus,  disiplin, konsisten, berani dan bertanggungjawab demi kepentingan mayoritas  rakyat.<strong></strong></li>
	                          <li><strong><em>K</em></strong><strong>erjasama          </strong>: Menjalin kemitraan yang harmonis baik  internal perguruan tinggi maupun masyarakat luas.<strong></strong></li>
	                          <li><strong><em>I</em></strong><strong>novasi                    </strong>: Berfikir kritis dan kreatif untuk proses bisnis yang  mengandalkan sumber daya manusia dan produk dalam negeri dan berorientasi pasar  global.<strong> </strong></li>
	                          <li><strong><em>R</em></strong><strong>espek                    </strong>: Saling menghargai dan mneghormati untuk  menjaga integritas keilmuan dan pengetahuan yang berdimensi lingkungan hidup.<strong></strong></li>
	                        </ul>
	                        <strong><br clear="all">
	                        </strong>
	                      </div>
	                      <p align="center"><strong>Struktur  Organisasi</strong><br>
	                        <strong>     </strong>Adapun struktur organisai LPPSN  dapat dilihat pada gambar berikut :<br>
	                        
	                      <img src="assets/images/struktur_lppsn.png" width="653" height="543">
	                      </p>
	                      <div align="justify"><!-- /.col-sm-4 -->	                 
	                        <br>
	                        <span class="social-btn-box facebook-btn-container">
	                          <a href="#" class="facebook-btn">
	                            <i class="fa fa-facebook"></i>
	                          </a><!-- /.facebook-btn -->
	                        </span><!-- /.social-btn-box -->
	                        
	                        <span class="social-btn-box twitter-btn-container">
	                          <a href="#" class="twitter-btn">
	                            <i class="fa fa-twitter"></i>
	                          </a><!-- /.twitter-btn -->
	                        </span><!-- /.social-btn-box -->
	                        
	                        <span class="social-btn-box linkedin-btn-container">
	                          <a href="#" class="linkedin-btn">
	                            <i class="fa fa-linkedin"></i>
	                          </a><!-- /.linkedin-btn -->
	                        </span><!-- /.social-btn-box -->
	                        
	                        <span class="social-btn-box github-btn-container">
	                          <a href="#" class="github-btn">
	                            <i class="fa fa-github-alt"></i>
	                          </a><!-- /.github-btn -->
	                        </span><!-- /.social-btn-box -->
	                      </div>
						</div>
				    </div>
				    <div role="tabpanel" class="tab-pane" id="jurusan-stmik">
						<h4 class="section-description"></h4>
						<p class="deskripsi"></p>
						<?php 					
								for($i=1; $i<=8;$i++){
									echo "<p class='text-center'>Semester $i</p>";
									echo "<table id='stmik_$i' style='width:100%' class='table-bordered'></table>";
								}
							?>
						
						Total SKS = 152					
				    </div>
				    <div role="tabpanel" class="tab-pane" id="jurusan-stie">
				    <h4 class="section-description"></h4>
						<p class="deskripsi"></p>
						<?php						
						for($i=1; $i<=8;$i++){
							echo "<p class='text-center'>Semester $i</p>";
							echo "<table id='stie_$i' style='width:100%' class='table-bordered'></table>";
						}
						?>
					</div>				   
				  </div>

				</div>
				<!-- /.Section-title  -->		
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
		<script src="assets/js/datatables.min.js" type="text/javascript"></script>
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
