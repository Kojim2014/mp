<html>
  
<!-- Mirrored from www.sekolahkoding.com/kelas/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:11:49 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Daftar kelas sekolah koding</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/font-awesome/css/font-awesome.css'); ?>">
    <script src="<?php echo base_url('assets/user/js/jquery.js');?>"></script>
    <script src="<?php echo base_url('assets/user/js/select2.min.js');?>"></script>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/css/select2.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/main-app.css');?>" charset="utf-8"> 
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/hover-min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/font-awesome/css/font-awesome.css'); ?>">
    <link href="<?php echo base_url('assets/user/css/bootstrap.css');?>" rel="stylesheet">
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

      <p><i class="fa fa-clock-o"></i> Bergabung sejak Maret, 2016 </p>
                  <div id="biodata"> <p>  </p> </div>

     <a style="float:right;" href=""><i class="fa fa-pencil-square-o"></i>Edit Profile</a>
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

  <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Judul</h3>
      </div>
      <div class="panel-body">
<div class="input-group">
  <span class="input-group-addon" id="basic-addon1"><i class="fa fa-bookmark"></i></span>
  <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
</div>
      </div>
    </div>





  <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Pertanyaan</h3>
      </div>
      <div class="panel-body">
   <div id="summernote"></div>
      </div>




    </div>

  <div class="panel panel-success">
      <div class="panel-heading">
        <h3 class="panel-title">Tags</h3>
      </div>

  <select style="width:100%; height: 100%;" class="js-example-basic-multiple" multiple="multiple">
    <option value="AL">Alabama</option>

    <option value="WY">Wyoming</option>
  </select>
</div>

<button  type="button" class="btn btn-success btn-block">Posting Pertanyaan</button>
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

$(".js-example-basic-multiple").select2();
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
