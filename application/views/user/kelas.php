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
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
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
         <img src="<?php echo base_url('assets/web/images/c4.jpg');?>" width="150">
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
        <a href="<?php echo site_url('main/tambahkls');?>"> <button type="button" style="float:right;" class="btn btn-default">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Kelas</button> </a>
        <h1> Daftar Kelas</h1>
         </div>
      <div id="daftar_materi">
           


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

         <?php 
         $query = $this->db->get('kelas');
         foreach ($query->result() as $data) {
          ?>
                      <div class="each_playlist">
                  <a class="link_pl" href="#">
                    <img src="<?php echo base_url()."assets/photo/fotokelas/".$data->foto; ?>" alt=" Mengamankan website php" />
                    <div class="playlist_nama"> <?php echo $data->nama_kelas; ?> </div>
                    <div class="playlist_desc"> <?php echo $data->deskripsi; ?> </div>
                  </a>
              </div>

          <?php } ?>
          
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
