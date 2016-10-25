<html>
<head>
  <title><?php echo $this->session->userdata('nama'); ?> | Member Belajar</title>
  <meta charset="UTF-8">
  <meta name="author" content="SekolahKoding">
  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/main-app.css');?>" charset="utf-8">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/font-awesome/css/font-awesome.css'); ?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/user/css/hover-min.css') ?>">
  <script src="<?php echo base_url('assets/user/js/jquery-2.1.4.min.js'); ?>"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <link rel="icon" href="<?php echo base_url('assets/favicon.ico'); ?>" type="image/x-icon" />
  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/hover-min.css') ?>">
  <!-- for facebook graph-->
  <meta property="og:title" content="SekolahKoding">
  <meta property="og:image" content="<?php echo base_url('assets/asset/homepage/sk_white_transparent.png');?>">
  <meta property="og:description" content="Belajar Web Programming dan Design Online di SekolahKoding">
</head> 
<body class="body-class" oncontextmenu="return false">
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','../../../www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-59878621-1', 'auto');
    ga('send', 'pageview');
  </script>

  <div id="page-wrapper">
    <div id="menu_left_back"></div>
	<div id="menu_left" class="menu_profil">
	  <div id="data_diri">
		<div id="data_diri_main">
		  <img src="<?php echo base_url('assets/photo/fotoprofile/'.$this->session->userdata('foto')); ?>" width="150">
		  <div id="fullname"><p> <?php echo $this->session->userdata('nama'); ?></p></div>
		  <p>@<?php echo $this->session->userdata('username'); ?></p>
		</div>

		<p> <img src="<?php echo base_url('assets/asset/time-icon.png');?>" alt="" />
		  Bergabung sejak <?php echo $this->session->userdata('birthday'); ?>
		</p>
		<div id="biodata"><p>  </p></div>

		<a style="float:right;" href="<?php echo site_url('home/edit_profile');?>">Edit Profile</a>
	  </div>
	  <hr>
	  <div id="menu_left_bottom">
		<a href="<?php echo site_url('home');?>">
		  <li><img src="<?php echo base_url('assets/asset/upacara-icon.png');?>" alt="" /> Home</li>
		</a>
		<a href="<?php echo site_url('home/kelas');?>">
		  <li><img src="<?php echo base_url('assets/asset/forum-icon.png');?>" alt="" /> Kelas</li>
		</a>
		<a href="<?php echo site_url('home/forum');?>">
		  <li><img src="<?php echo base_url('assets/asset/perpus-icon.png');?>" alt="" /> Forum</li>
		</a>
		<a href="<?php echo site_url('home/user');?>">
		  <li><img src="<?php echo base_url('assets/asset/member-icon.png'); ?>" alt="" /> Member</li>
		</a>
		<a href="<?php echo site_url('home/logout'); ?>">
		  <li> <img src="<?php echo base_url('assets/asset/jejak-icon.png');?>" alt="" /> Keluar</li>
		</a>
	  </div>
	  
	  <div class="clear"></div>
	</div>

	<div id="main_wrapper" class="main_profil">
	  <div id="menu-top-profil">
		<div id="blue-logo">
  		  <!-- <a href="../../user.html"><img src="<?php echo base_url('/assets/asset/atom-bg.png') ?>" alt=""/></a> -->
		</div>
		<div class="dropdown button orange bubble-float-bottom notif"><div style="margin-top:-15%;">Notifikasi <span>3</span></div>
		  <button class="dropbtn"></button>
		  <div class="dropdown-content">
		    <a href="#">Linhgvgjvcvhvhvhjvk 1</a>
		    <a href="#">Link 2</a>
		    <a href="#">Link 3</a>
		  </div>
		</div>
	  </div>
	  
	  <div class="clear"></div>
	  
	  <?php
	  	if ($this->uri->segment(2) == "kelas") {
	  	  $this->load->view('user/kelas');
	  	}elseif ($this->uri->segment(2) == "forum") {
	  	  if ($this->uri->segment(3) != null) {
	  	  	$this->load->view('user/forumview');
	  	  }else {
		  	$this->load->view('user/forum');
		  }
	  	}elseif ($this->uri->segment(2) == "user") {
	  	  $this->load->view('user/member');
	  	}elseif ($this->uri->segment(2) == "tambahkls") {
	  	  $this->load->view('user/addkelas');
	  	}elseif ($this->uri->segment(2) == "tanya") {
	  	  $this->load->view('user/tanya');
	  	}elseif ($this->uri->segment(2) == "edit_profile") {
	  	  $this->load->view('user/edit');
	  	}elseif ($this->uri->segment(2) == "mkelas") {
	  	  $this->load->view('user/masukkelas');
	  	}elseif ($this->uri->segment(2) == "addmateri") {
	  	  $this->load->view('user/tmbmateri');
	  	}elseif ($this->uri->segment(2) == "vmateri") {
	  	  $this->load->view('user/viewmateri');
	  	}else {
	  	  $this->load->view('user/beranda');
	  	}
	  ?>

	  <div class="clear_h"></div>
	  <div id="footer">
		<span style="padding-left:10px;">&copy; 2016 <span>SekolahKoding</span></span>
	  </div>
	</div>
	<div class="clear"></div>

  </div>

</body>
</html>
