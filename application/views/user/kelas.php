<html>
  
<!-- Mirrored from www.sekolahkoding.com/kelas/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:11:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Daftar kelas sekolah koding</title>
		<meta charset="UTF-8">
		<meta name="description" content="Video tutorial  dalam bahasa Indonesia. Daftar kelas online di sekolah koding, tempat untuk belajar programming, web Design dan Development">
		<meta name="keywords" content="video, tutorial,,  programming, belajar,web,design, development, bahasa, indonesia">
		<meta name="author" content="SekolahKoding">
		<link rel="stylesheet" href="<?php echo base_url('assets/user/css/main-app.css');?>" charset="utf-8">	
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/font-awesome/css/font-awesome.css'); ?>">
		<link rel="stylesheet" href="<?php echo base_url('assets/user/css/hover-min.css') ?>">
<script src="<?php echo base_url('assets/user/js/jquery-2.1.3.min.js');?>"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
		<!-- for facebook graph--> 
		<meta property="og:title" content="Daftar kelas di SekolahKoding">
		<meta property="og:image" content="/asset/blue-logo.png">
		<meta property="og:description" content="Daftar kelas di SekolahKoding, tempat belajar Web Programming dan Design Online di SekolahKoding">
	</head>
	<body class="body-class">
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

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
  	<div id="main_wrapper" class="main_profil">

  		<div id="menu-top-profil">
<div class="dropdown button orange bubble-float-bottom notif"><div style="margin-top:-15%;">Notifikasi <span>3</span></div>
  <button class="dropbtn"></button>
  <div class="dropdown-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>
</div>


<ul>
</ul>
<!-- sweetalert-->
<script src="../../sekolahkoding.com/user/js/sweetalert-dev.js"></script>
<link rel="stylesheet" href="../../sekolahkoding.com/user/js/sweetalert.css">

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

               $url = '../index.html';
               $data = { args : 'logout' }

               $.post($url, $data).done(function(){
                 swal("Sampai jumpa!", "istirahat ya..");
                 setTimeout(keluar, 1500)
               });

               function keluar() {
                   window.location.href = "../user/login.html";
                 }
             }
         });
     return false;
 });


}); //end jquery doc ready
</script>
  		</div>

          <div class="title_content">
            <h1> Daftar Kelas
                         </h1>
         </div>

         <div id="daftar_materi">
           

<select name="daftar_pelajaran" id="select_daftar_pelajaran">
	        <option class="option_pelajaran" value="/kelas">Semua Topik</option>
	    	        <option class="option_pelajaran" value="/kelas/tag/html"
	          	          >
	          Html	        </option>
	    	        <option class="option_pelajaran" value="/kelas/tag/css"
	          	          >
	          Css	        </option>
	    	        <option class="option_pelajaran" value="/kelas/tag/javascript"
	          	          >
	          Javascript	        </option>
	    	        <option class="option_pelajaran" value="/kelas/tag/database"
	          	          >
	          Database	        </option>
	    	        <option class="option_pelajaran" value="/kelas/tag/php"
	          	          >
	          Php	        </option>
	    	        <option class="option_pelajaran" value="/kelas/tag/ruby"
	          	          >
	          Ruby	        </option>
	    	        <option class="option_pelajaran" value="/kelas/tag/design"
	          	          >
	          Design	        </option>
	    	        <option class="option_pelajaran" value="/kelas/tag/java"
	          	          >
	          Java	        </option>
	    	        <option class="option_pelajaran" value="/kelas/tag/tool"
	          	          >
	          Tool	        </option>
	    	        <option class="option_pelajaran" value="/kelas/tag/bebas"
	          	          >
	          Bebas	        </option>
	    	        <option class="option_pelajaran" value="/kelas/tag/laravel"
	          	          >
	          Laravel	        </option>
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

});

//dropdown change
$('select[name="daftar_pelajaran"]').change(function() {
	 window.location.replace($(this).val());
});
</script>
         </div>
         <div class="clear"></div>

          <div class="content content-materi">

                        <div class="each_playlist">
                  <a class="link_pl" href="video/Membuat-halaman-depan-facebook.html">
                    <img src="<?php echo base_url('assets/asset/cover/front-end_fb.png');?>" alt=" Membuat halaman depan facebook" />
                    <div class="playlist_nama"> Membuat halaman depan facebook </div>
                    <div class="playlist_desc"> Latihan html dan css dengan membuat halaman depan facebook </div>
                  </a>
              </div>
                      <div class="each_playlist">
                  <a class="link_pl" href="video/Mengamankan-website-php.html">
                    <img src="<?php echo base_url('assets/asset/cover/php-security.png'); ?>" alt=" Mengamankan website php" />
                    <div class="playlist_nama"> Mengamankan website php </div>
                    <div class="playlist_desc"> Belajar dasar-dasar kemanan pada website khususnya php, mencegah serangan hacker dari merusak website kita </div>
                  </a>
              </div>
                      <div class="each_playlist">
                  <a class="link_pl" href="video/Membuat-blog-dengan-laravel.html">
                    <img src="<?php echo base_url('assets/asset/cover/laravel-blog.png');?>" alt=" Membuat blog dengan laravel" />
                    <div class="playlist_nama"> Membuat blog dengan laravel </div>
                    <div class="playlist_desc"> Belajar sistem crud pada laravel dengan restful controller sambil membuat blog dengan berbagai fungsi yang menarik </div>
                  </a>
              </div>
                      <div class="each_playlist">
                  <a class="link_pl" href="video/Sistem-login-dan-register-di-laravel.html">
                    <img src="<?php echo base_url('assets/asset/cover/laravel-auth.png');?>" alt=" Sistem login dan register di laravel" />
                    <div class="playlist_nama"> Sistem login dan register di laravel </div>
                    <div class="playlist_desc"> Sistem autentikasi user atau register dan login pada laravel 5.2 </div>
                  </a>
              </div>
                      <div class="each_playlist">
                  <a class="link_pl" href="video/belajar-crud-dengan-ajax-dan-php.html">
                    <img src="<?php echo base_url('assets/asset/cover/laravel-auth.png');?>" alt=" belajar crud dengan ajax dan php" />
                    <div class="playlist_nama"> belajar crud dengan ajax dan php </div>
                    <div class="playlist_desc"> Belajar bagaimana cara mengimplementasikan crud dengan ajax dan php </div>
                  </a>
              </div>
                      <div class="each_playlist">
                  <a class="link_pl" href="video/Membuat-Pagination-dengan-php.html">
                    <img src="<?php echo base_url('assets/asset/cover/laravel-auth.png');?>" alt=" Membuat Pagination dengan php" />
                    <div class="playlist_nama"> Membuat Pagination dengan php </div>
                    <div class="playlist_desc"> bagaimana cara membuat sistem pagination di php dan mysql </div>
                  </a>
              </div>
                      <div class="each_playlist">
                  <a class="link_pl" href="video/Berkenalan-dengan-bootstrap.html">
                    <img src="<?php echo base_url('assets/asset/cover/bootstrap.png');?>" alt=" Berkenalan dengan bootstrap" />
                    <div class="playlist_nama"> Berkenalan dengan bootstrap </div>
                    <div class="playlist_desc"> Cara membuat website responsive dengan cepat, menggunakan salah satu framework frontend yang sangat populer yaitu bootstrap </div>
                  </a>
              </div>
         
          
          <!-- ______________________Pagination______________________ -->
                      <div class="pagination">

                               <a href="halaman/1.html" class="active_page">1</a>
                               <a href="halaman/2.html" class="">2</a>
                               <a href="halaman/3.html" class="">3</a>
              
            </div><!-- end pagination -->
                    <!-- ______________________Pagination______________________ -->

        </div>




			<div class="clear_h"></div>
        <div id="footer">
          
<span style="padding-left:10px;">&copy; 2016 <span>Media Pembelajaran</span></span>
        </div>

  	</div> <!-- end main wrapper -->
  	<div class="clear"></div>

  </div> <!-- end page wrapper -->

</body>

<!-- Mirrored from www.sekolahkoding.com/kelas/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:12:15 GMT -->
</html>
