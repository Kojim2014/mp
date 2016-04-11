
<html>
  
<!-- Mirrored from www.sekolahkoding.com/forum by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:12:15 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Forum programmer indonesia - Sekolah Koding  </title>
		<meta charset="UTF-8">
		<meta name="description" content="Forum web developer dan programmer indonesia, diskusi seputar web development, programming dan design di sini. SekolahKoding, tempat belajar web development online">
		<meta name="keywords" content="forum,programmer,web,developer,diskusi,development,website,indonesia,web,designer,html,bahasa,belajar,tutorial,css,javascript,java,photshop,illustrator">
		<meta name="author" content="SekolahKoding">
    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/main-app.css');?>" charset="utf-8">

<script src="<?php echo base_url('assets/user/js/jquery-2.1.3.min.js');?>"></script>
<link rel="stylesheet" href="<?php echo base_url('assets/user/css/hover-min.css') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/font-awesome/css/font-awesome.css'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<!-- for facebook graph-->
		<meta property="og:title" content="Forum Sekolah Koding">
		<meta property="og:image" content="/asset/blue-logo.png">
		<meta property="og:description" content="Forum web developer dan programmer indonesia, diskusi seputar web development, programming dan design di sini. SekolahKoding, tempat belajar web development online">
	</head> 
	<body class="body-class">
		<script> 
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59878621-1', 'auto');
  ga('send', 'pageview');

</script>
<div id="page-wrapper">

	
	<div id="menu_left_back"></div>
	<div id="menu_left" class="menu_profil">
    
  <div id="data_diri">
      <div id="data_diri_main">
         <img src="<?php echo base_url('assets/asset/homepage/guru.png'); ?>" width="150">
        <div id="fullname"> <p> dimasferianto</p> </div>
        <p> @dimdf </p>
      </div>

      <p><i class="fa fa-clock-o"></i> Bergabung sejak Maret, 2016 </p>
                  <div id="biodata"> <p>  </p> </div>

     <a style="float:right;" href="<?php echo site_url('main/edit_profile');?>"><i class="fa fa-pencil-square-o"></i>Edit Profile</a>
  </div>

    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div id="menu_left_bottom"> 
      <a href="<?php echo site_url('home');?>"><li> <i class="fa fa-home"></i> Home</li> </a>
      <a href="<?php echo site_url('main/kelaspel');?>">  <li> <i class="fa fa-book"></i>  Kelas </li></a>
      <a href="<?php echo site_url('main/diskusi');?>"> <li> <i class="fa fa-forumbee"></i> Forum  </li></a>
      <a href="<?php echo site_url('main/user');?>"> <li> <i class="fa fa-users"></i> Member  </li></a>
      <a href="../../syarat.html"> <li> <i class="fa fa-sign-out"></i> Keluar  </li></a>
          </div>
   <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
   <div class="clear"></div>
</div><!-- end menu_left -->
	<div id="main_wrapper" class="main_forum">

		<div id="menu-top-profil">
<div class="dropdown button orange bubble-float-bottom notif"><div style="margin-top:-15%;">Notifikasi <span>3</span></div>
  <button class="dropbtn"></button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>


<!-- sweetalert-->
<script src="../sekolahkoding.com/user/js/sweetalert-dev.js"></script>
<link rel="stylesheet" href="../sekolahkoding.com/user/js/sweetalert.css">

<script>
$(document).ready(function() {

 $(".logout").on('click',function(){
   swal({  title: "Yakin mau keluar?",
           type: "warning",
           showCancelButton: true,
           confirmButtonColor: "#DD6B55",
           confirmButtonText: "Keluar",
           cancelButtonText: "Batal",
           closeOnConfirm: false
         },function(response){
             if(response == true){

               $url = 'index.html';
               $data = { args : 'logout' }

               $.post($url, $data).done(function(){
                 swal("Sampai jumpa!", "istirahat ya..");
                 setTimeout(keluar, 1500)
               });

               function keluar() {
                   window.location.href = "user/login.html";
                 }
             }
         });
     return false;
 });


}); //end jquery doc ready
</script>
		</div>

	<div class="title_content"> <h1> Forum
	  			</h1>
	 </div>

	<div class="content">

		<div id="create_forum">
			<a href="<?php echo site_url('main/ftanya');?>"><span>Tanya ✎</span></a>
		</div>


		<!-- <div class="clear_on_sp"></div> -->

		
<!--
<a href="#" class="toggle"> Topik Forum</a>

<div id="forum_cat_list" class="daftar_umum">
</div>
-->


<select name="daftar_pelajaran" id="select_daftar_pelajaran">
        <option class="option_pelajaran" value="/forum">Semua Topik</option>
            
    </select>


<script type="text/javascript">
$(document).ready(function(){

	//toggle for menu left
  var pull 		= $('.toggle');
  menu 				= $('.daftar_umum');
  menuHeight	= menu.height();

  $(pull).on('click', function(e) {
    e.preventDefault();
    menu.slideToggle();
  });

 //dropdown change
 $('select[name="daftar_pelajaran"]').change(function() {
    window.location.replace($(this).val());
});

//oncklick
$('#filter_populer').on('click', function(){
  window.location.replace('forum/filter/populer.html');
});

//oncklick
$('#filter_noanswer').on('click', function(){
  window.location.replace('forum/filter/belum-terjawab.html');
});

//oncklick
$('#filter_terupdate').on('click', function(){
  window.location.replace('forum/filter/terupdate.html');
});

});
</script>

		<div class="clear"></div>

	<div id="topic_wrapper">
		<!-- _________________________ pengumuman di forum _________________________ -->
				<!-- _________________________ pengumuman di forum _________________________ -->

			
			<div class="each_topic" id="1063" last_activity="2016-03-18 10:54:57" last_activity_by ="" judul="pemrograman-java-mobille">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/ea.jpg" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/pemrograman-java-mobille.html"> pemrograman java mobille </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/kazuna018.html">kazuna018</a>
				      <!-- | 2 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Diposting
						16 menit yang lalu											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/index.html">index.html</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban jumlah_jawaban_kosong">
												0 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						0 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1062" last_activity="2016-03-18 10:37:15" last_activity_by ="" judul="permasalahan-browser">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/ea.jpg" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/permasalahan-browser.html"> permasalahan browser </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/kazuna018.html">kazuna018</a>
				      <!-- | 2 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Diposting
						34 menit yang lalu											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/browser.html">browser</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban jumlah_jawaban_kosong">
												0 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						2 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1056" last_activity="2016-03-18 10:14:24" last_activity_by ="13267" judul="Bagaimana-cara-untuk-membuat-tabel-looping-ke-samping(kolom)?">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/ups.png" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/Bagaimana-cara-untuk-membuat-tabel-looping-ke-sampingkolom.html"> Bagaimana cara untuk membuat tabel looping ke samping(kolom)? </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/Laillyqolby.html">Laillyqolby</a>
				      <!-- | 2 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Aktivitas terakhir
						56 menit yang lalu						oleh @<a href="user/profile/rajamobilbekas.html" style="color:#928A8A;font-weight:bold;">rajamobilbekas</a>
											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/php.html">php</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban ">
												3 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						27 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1061" last_activity="2016-03-18 09:46:23" last_activity_by ="" judul="Saya-sedang-belajar-simpan-dengan-php,tetapi-kenapa-tidak-bisa-nyimpan-y?">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/ups.png" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/Saya-sedang-belajar-simpan-dengan-phptetapi-kenapa-tidak-bisa-nyimpan-y.html"> Saya sedang belajar simpan dengan php,tetapi kenapa tidak bisa nyimpan y? </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/adi354.html">adi354</a>
				      <!-- | 2 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Diposting
						1 jam yang lalu											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/php.html">php</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban jumlah_jawaban_kosong">
												0 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						5 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1052" last_activity="2016-03-18 09:34:07" last_activity_by ="2385" judul="Berbagi-pengetahuan-tentang-konsep-dan-contoh-kasus-smartcity">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/20160302_140457_new.jpg" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/Berbagi-pengetahuan-tentang-konsep-dan-contoh-kasus-smartcity.html"> Berbagi pengetahuan tentang konsep dan contoh kasus smartcity </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/kresna6295.html">kresna6295</a>
				      <!-- | 28 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Aktivitas terakhir
						1 jam yang lalu						oleh @<a href="user/profile/kresna6295.html" style="color:#928A8A;font-weight:bold;">kresna6295</a>
											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/bebas.html">bebas</a></span>
					  					    <span><a href="forum/tag/smartcity.html">smartcity</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban ">
												2 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						10 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1057" last_activity="2016-03-18 09:33:38" last_activity_by ="2385" judul="Bagaimana-cara-root-path-directory-di-php?">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/20160302_140457_new.jpg" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/Bagaimana-cara-root-path-directory-di-php.html"> Bagaimana cara root path directory di php? </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/kresna6295.html">kresna6295</a>
				      <!-- | 28 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Aktivitas terakhir
						1 jam yang lalu						oleh @<a href="user/profile/kresna6295.html" style="color:#928A8A;font-weight:bold;">kresna6295</a>
											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/php.html">php</a></span>
					  					    <span><a href="forum/tag/root.html">root</a></span>
					  					    <span><a href="forum/tag/routingsystem.html">routingsystem</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban ">
												2 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						7 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1060" last_activity="2016-03-18 08:35:04" last_activity_by ="" judul="Bagaimana-cara-penulisan-Session-jika-hanya-dipakai-single-user?">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/webcam-toy-foto53_1453445525.jpg" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/Bagaimana-cara-penulisan-Session-jika-hanya-dipakai-single-user.html"> Bagaimana cara penulisan Session jika hanya dipakai single user? </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/faraokha.html">faraokha</a>
				      <!-- | 3 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Diposting
						2 jam yang lalu											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/php.html">php</a></span>
					  					    <span><a href="forum/tag/session.html">session</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban jumlah_jawaban_kosong">
												0 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						4 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1053" last_activity="2016-03-18 06:55:16" last_activity_by ="1768" judul="bagaimana-cara-upload-image-ke-database-dan-directory-menggunakan-laravel?">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/ups.png" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/bagaimana-cara-upload-image-ke-database-dan-directory-menggunakan-laravel.html"> bagaimana cara upload image ke database dan directory menggunakan laravel? </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/eriakbar.html">eriakbar</a>
				      <!-- | 2 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Aktivitas terakhir
						4 jam yang lalu						oleh @<a href="user/profile/paulpogba.html" style="color:#928A8A;font-weight:bold;">paulpogba</a>
											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/laravel.html">laravel</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban ">
												1 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						9 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1055" last_activity="2016-03-18 06:51:57" last_activity_by ="1768" judul="bagaimana-caranya-membuat-aplikasi-seperti-imacros?">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/ilmu.jpg" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/bagaimana-caranya-membuat-aplikasi-seperti-imacros.html"> bagaimana caranya membuat aplikasi seperti imacros? </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/itmam.html">itmam</a>
				      <!-- | 1 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Aktivitas terakhir
						4 jam yang lalu						oleh @<a href="user/profile/paulpogba.html" style="color:#928A8A;font-weight:bold;">paulpogba</a>
											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/bebas.html">bebas</a></span>
					  					    <span><a href="forum/tag/javascript.html">javascript</a></span>
					  					    <span><a href="forum/tag/php.html">php</a></span>
					  					    <span><a href="forum/tag/imacros.html">imacros</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban ">
												1 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						19 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1059" last_activity="2016-03-18 06:37:02" last_activity_by ="" judul="cara-menampilkan-new-guide-layout-di-Photoshop-yang-bukan-CC">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/ups.png" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/cara-menampilkan-new-guide-layout-di-Photoshop-yang-bukan-CC.html"> cara menampilkan new guide layout di Photoshop yang bukan CC </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/Khanad.html">Khanad</a>
				      <!-- | 1 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Diposting
						4 jam yang lalu											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/photoshop.html">photoshop</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban jumlah_jawaban_kosong">
												0 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						1 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1058" last_activity="2016-03-18 05:36:25" last_activity_by ="" judul="Link-vidio-tidak-hanya-ke-You-tube">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/ups.png" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/Link-vidio-tidak-hanya-ke-You-tube.html"> Link vidio tidak hanya ke You tube </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/mado354.html">mado354</a>
				      <!-- | 1 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Diposting
						5 jam yang lalu											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/videoturorial.html">videoturorial</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban jumlah_jawaban_kosong">
												0 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						3 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1054" last_activity="2016-03-17 16:09:38" last_activity_by ="" judul="setText-not-working-in-Fragment">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/trickster.jpg" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/setText-not-working-in-Fragment.html"> setText not working in Fragment </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/OutAttacker.html">OutAttacker</a>
				      <!-- | 29 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Diposting
						19 jam yang lalu											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/android.html">android</a></span>
					  					    <span><a href="forum/tag/androidprogramming.html">androidprogramming</a></span>
					  					    <span><a href="forum/tag/java.html">java</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban jumlah_jawaban_kosong">
												0 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						3 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1051" last_activity="2016-03-17 11:27:31" last_activity_by ="3950" judul="bagaimana-cara-memanggil-css-dengan-ci?">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/ups.png" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/bagaimana-cara-memanggil-css-dengan-ci.html"> bagaimana cara memanggil css dengan ci? </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/anggaFantiya.html">anggaFantiya</a>
				      <!-- | 1 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Aktivitas terakhir
						23 jam yang lalu						oleh @<a href="user/profile/aidilweb.html" style="color:#928A8A;font-weight:bold;">aidilweb</a>
											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/html.html">html</a></span>
					  					    <span><a href="forum/tag/css.html">css</a></span>
					  					    <span><a href="forum/tag/codeigniter.html">codeigniter</a></span>
					  					    <span><a href="forum/tag/boostrap.html">boostrap</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban ">
												1 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						10 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1049" last_activity="2016-03-17 10:28:15" last_activity_by ="26" judul="Bagaimana-cara-mengirim-variable-yang-diambil-dari-metode-GET-menggunakan-AJAX">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/febrizal-asnawi.jpg" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/Bagaimana-cara-mengirim-variable-yang-diambil-dari-metode-GET-menggunakan-AJAX.html"> Bagaimana cara mengirim variable yang diambil dari metode GET menggunakan AJAX </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/febrizalasnawi.html">febrizalasnawi</a>
				      <!-- | 3 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Aktivitas terakhir
						1 hari yang lalu						oleh @<a href="user/profile/ardyhim.html" style="color:#928A8A;font-weight:bold;">ardyhim</a>
											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/ajax.html">ajax</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban ">
												1 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						23 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1050" last_activity="2016-03-17 08:33:40" last_activity_by ="" judul="ada-tutorial-tentang-web-servis?">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/IMG_4796.jpg" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/ada-tutorial-tentang-web-servis.html"> ada tutorial tentang web servis? </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/arif90.html">arif90</a>
				      <!-- | 48 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Diposting
						1 hari yang lalu											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/html.html">html</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban jumlah_jawaban_kosong">
												0 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						6 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
			<div class="each_topic" id="1035" last_activity="2016-03-17 03:50:49" last_activity_by ="12387" judul="cara-install-emmet">

				<div class="col-15">
					<div class="pertanyaan_by_foto">
						<img src="user/foto/ups.png" width=50 />
					</div>
				</div>

				<div class="col-65">
					<div class="pertanyaan">
						<a href="forum/pertanyaan/cara-install-emmet.html"> cara install emmet </a>
					</div>

					<div class="pertanyaan_by">
					  oleh @<a href="user/profile/arif02.html">arif02</a>
				      <!-- | 7 kontribusi | -->
					</div>

					<div class="waktu_pertanyaan">||
												Aktivitas terakhir
						1 hari yang lalu						oleh @<a href="user/profile/arif02.html" style="color:#928A8A;font-weight:bold;">arif02</a>
											</div>

					<div class="tag_pertanyaan">
					  					    <span><a href="forum/tag/html.html">html</a></span>
					  					    <span><a href="forum/tag/css.html">css</a></span>
					  					    <span><a href="forum/tag/php.html">php</a></span>
					  					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban jumlah_jawaban_terjawab">
						 <div class='check_on_forum'>✔</div> 						2 <span>Jawaban</span>
					</div>
				</div>

				<div class="col-10">
					<div class="jumlah_jawaban">
						23 <span>kali dilihat</span>
					</div>
				</div>

			<div class="clear"></div>
			</div> <!-- end each_topic -->

			
	</div><!-- end topic wrapper -->


	<!-- ______________________Pagination______________________ -->
			<div class="pagination">
			<a href='forum/halaman/1.html'> << </a>
			<a href='forum/halaman/1.html'>1</a><a href='forum/halaman/2.html'>2</a><a href='forum/halaman/3.html'>3</a><a href='forum/halaman/4.html'>4</a><a href='forum/halaman/5.html'>5</a><a href='forum/halaman/6.html'>6</a><a href='forum/halaman/7.html'>7</a>			<a href='forum/halaman/61.html'> >> </a>
		</div><!-- end pagination -->
		<!-- ______________________Pagination______________________ -->


	
	</div><!-- end content-->

	<div class="clear_h"></div>
		    <div id="footer">
					
<span style="padding-left:10px;">&copy; 2016 <span>Media Pembelajaran</span></span>
		    </div>

	</div> <!-- end main wrapper -->
	<div class="clear"></div>

</div> <!-- end page wrapper -->

<script type="text/javascript">
$(document).ready(function(){

	
 function load_forum(){
	 $last_id = $('.each_topic:last').attr('id');
	 $last_activity_at = $('.each_topic:last').attr('last_activity');
	 $last_judul = $('.each_topic:last').attr('judul');

	 $.ajax({
		 type: "POST",
		 url : "/user/ajax_req/loadmore.php",
		 data: {
						 last_id: $last_id,
						 last_activity_at : $last_activity_at,
							page: "forum"
						 					 },
		 beforeSend: function(){
									 //bagusan gambar gif
									 $('.load_more').text('load..');
							 },
		 success: function(data){
							 if(data.indexOf("|x||x|empty|x||x|") > -1){

								 data = data.replace("|x||x|empty|x||x|", "");
								 $("#topic_wrapper").append(data);
								 $('.load_more').fadeOut();
							 }else{
								 $("#topic_wrapper").append(data);
								 $('.load_more').text('Lihat Pertanyaan Sebelumnya');
							 }
						 }
	 }); //end ajax

	 return false;
 }

});

</script>
