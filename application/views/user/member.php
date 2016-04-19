<html> 
  
<!-- Mirrored from www.sekolahkoding.com/member by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:14:14 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Daftar member di Sekolah Koding</title>
		<meta charset="UTF-8">
		<meta name="description" content="daftar user di sekolah koding. Sekolah koding adalah website untuk belajar web development dan programming secara online">
		<meta name="keywords" content="daftar, user, member, sekolah, koding, tutorial, web, development, dan, programming, online">
		<meta name="author" content="SekolahKoding">
		<link rel="stylesheet" href="<?php echo base_url('assets/user/css/main-app.css');?>" charset="utf-8">
<script src="<?php echo base_url('assets/user/js/jquery-2.1.3.min.js');?>"></script>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="icon" href="favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo base_url('assets/user/css/hover-min.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/font-awesome/css/font-awesome.css'); ?>">
		<!-- for facebook graph-->
		<meta property="og:title" content="SekolahKoding">
		<meta property="og:image" content="/asset/blue-logo.png">
		<meta property="og:description" content="Belajar Web Programming dan Design Online di SekolahKoding">
	</head>
	<body class="body-class"> 
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','<?php echo base_url('assets/user/js/analytics.js');?>','ga');

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
<div class="dropdown button orange bubble-float-bottom notif"> <div style="margin-top:-15%;">Notifikasi <span>3</span></div>
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

		</div>



   <div class="title_content"> <p> Daftar User: </p> </div>
      <div class="content content-userlist">
<?php 
$query = $this->db->get('users');
foreach ($query->result() as $hasil) {
 ?>
                  <div class="each_user col-33" id="13434">
            <a href="user/profile/maulana20.html">
              <img class="col-40"	src="<?php echo base_url('assets/asset/homepage/fajar.jpg');?>">
              <div class="userlist-info col-45">
               <p class="nama"><?php echo $hasil->username; ?></p>
               <p><?=$hasil->nama_lengkap;?></p>
               <p></p>
              </div>
            </a>
          </div>
 <?php } ?>
                <!--   <div class="each_user col-33" id="13433">
            <a href="user/profile/mimzy92.html">
              <img class="col-40"	src="user/foto/ups.png">
              <div class="userlist-info col-45">
               <p class="nama">@mimzy92</p>
               <p>maulida rahmi</p>
               <p></p>
              </div>
            </a>
          </div>
                  <div class="each_user col-33" id="13432">
            <a href="user/profile/inuy.html">
              <img class="col-40"	src="user/foto/12573929_664847950284341_2547901618217060376_n.jpg">
              <div class="userlist-info col-45">
               <p class="nama">@inuy</p>
               <p>yuni hariati</p>
               <p>malang </p>
              </div>
            </a>
          </div> -->
                 
        
        <div class="clear"></div>
        <div class="pagination">
    			<a href='member/halaman/1.html'> << </a>
    			<a href='member/halaman/1.html'>1</a><a href='member/halaman/2.html'>2</a><a href='member/halaman/3.html'>3</a><a href='member/halaman/4.html'>4</a><a href='member/halaman/5.html'>5</a><a href='member/halaman/6.html'>6</a><a href='member/halaman/7.html'>7</a>    			<a href='member/halaman/734.html'> >> </a>
    		</div><!-- end pagination -->

      </div>



      <!-- <div class="load_more load_more_user">Lihat User Lainnya</div>
      <div id="load_more_info_wrapper"></div> -->

				<div class="clear_h"></div>
        <div id="footer">
          
<span style="padding-left:10px;">&copy; 2016 <span>Media Pembelajaran</span></span>
        </div>

	</div> <!-- end main wrapper -->
	<div class="clear"></div>

</div> <!-- end page wrapper -->

<script type="text/javascript">
$(document).ready(function(){

	//if something wrong, use document.on +tablet touchstart
	$('.load_more').on('click', function(){

		$last_id = $('.each_user:last').attr('id');
		console.log($last_id);
		$.ajax({
			type: "POST",
			url : "/user/ajax_req/loadmore.php",
			data: {
							last_id: $last_id,
							 page: "member"
						},
			beforeSend: function(){
										//bagusan gambar gif
										$('.load_more').text('load..');
								},
			success: function(data){
								if(data.indexOf("|x||x|empty|x||x|") > -1){

									data = data.replace("|x||x|empty|x||x|", "");
									$(".content-userlist").append(data);

									$(".load_more_info_wrapper").append("<div id='topic_habis'>Maaf, ngga ada lagi</div>");
									$('.load_more').fadeOut();
                  console.log("1");
								}else{
									$(".content-userlist").append(data);
									$('.load_more').text('Lihat User Lainnya');
                  console.log("2");
							  }
							}
		}); //end ajax

		return false;
 });
});
</script>

</body>

<!-- Mirrored from www.sekolahkoding.com/member by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:14:30 GMT -->
</html>
