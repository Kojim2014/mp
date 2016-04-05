<html>
  
<!-- Mirrored from www.sekolahkoding.com/kelas/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:11:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Daftar kelas sekolah koding</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="<?php echo base_url('assets/user/css/main-app.css');?>" charset="utf-8">	
		<link rel="stylesheet" href="<?php echo base_url('assets/user/css/hover-min.css') ?>">
    <link href="<?php echo base_url('assets/user/css/bootstrap.css');?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/user/css/summernote.css');?>" rel="stylesheet">
    <script src="<?php echo base_url('assets/user/js/jquery-2.1.3.min.js');?>"></script>
    <script src="<?php echo base_url('assets/user/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/user/js/bootstrap.js');?>"></script> 
    <script src="<?php echo base_url('assets/user/js/summernote.js');?>"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="../favicon.ico" type="image/x-icon" />
		<!-- for facebook graph-->
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

      <p> <img src="<?php echo base_url('assets/asset/time-icon.png');?>" alt="" /> Bergabung sejak Maret, 2016 </p>
                  <div id="biodata"> <p>  </p> </div>

     <a style="float:right;" href="">Edit Profile</a>
  </div>

    <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
    <div id="menu_left_bottom">
      <a href="<?php echo site_url('home');?>"><li> <img src="<?php echo base_url('assets/asset/upacara-icon.png');?>" alt="" /> Home</li> </a>
      <a href="<?php echo site_url('main/kelaspel') ?>">  <li> <img src="<?php echo base_url('assets/asset/forum-icon.png');?>" alt="" />  Kelas </li></a>
      <a href="<?php echo site_url('main/diskusi');?>"> <li> <img src="<?php echo base_url('assets/asset/perpus-icon.png');?>" alt="" /> Forum  </li></a>
      <a href="<?php echo site_url('main/user');?>"> <li> <img src="<?php echo base_url('assets/asset/member-icon.png'); ?>" alt="" /> Member  </li></a>
      <a href="../../syarat.html"> <li> <img src="<?php echo base_url('assets/asset/donasi-icon.png');?>" alt="" /> Keluar  </li></a>
          </div>
   <!-- ++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
   <div class="clear"></div>
</div>
  	<div id="main_wrapper" class="main_profil">

  		<div id="menu-top-profil">
  			<div id="blue-logo">
  <a href="../user.html"><img src="../../sekolahkoding.com/asset/blue-logo.png" alt=""/></a>
  <a rel='bubble-float-left' class='button orange bubble-float-left notif'>Notifikasi</a>
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
            <h1> Tanya Forum</h1>
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
  <div id="summernote"><p>Hello Summernote</p></div>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });


    $('#summernote').summernote({
  height: 300,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
});
  </script>

			<div class="clear_h">
      
      </div>
	    <div id="footer">
				
<span style="padding-left:10px;">&copy; 2016 <span>SekolahKoding</span></span>

	    </div>

  	</div> <!-- end main wrapper -->
  	<div class="clear"></div>

  </div> <!-- end page wrapper -->

</body>
<!-- Mirrored from www.sekolahkoding.com/kelas/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:12:15 GMT -->
</html>
