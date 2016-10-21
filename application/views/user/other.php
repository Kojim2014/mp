<html>
<?php
	$this->db->where('id_users', $this->input->get('id'));
	$this->db->limit(1);
	$data = $this->db->get('users');
	foreach ($data->result() as $row) {
		$ultah = explode(" ", $row->create_date);
	    $date = explode("-", $ultah[0]);
	    $tgl = new DateTime();
	    $tgl->setDate($date[0], $date[1], $date[2]);
	    $birthday = $tgl->format('M').", ".$date[0];

?>
<head>
  <title><?php echo $row->nama_lengkap; ?> | Member Belajar</title>
  <meta charset="UTF-8">
  <meta name="author" content="SekolahKoding">
  <link rel="stylesheet" href="<?php echo base_url('assets/user/css/main-app.css');?>" charset="utf-8">
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
		  <img src="<?php echo base_url('assets/asset/homepage/guru.png'); ?>" width="150">
		  <div id="fullname"><p> <?php echo $row->nama_lengkap; ?></p></div>
		  <p>@<?php echo $row->username; ?></p>
		</div>
		<p> <img src="<?php echo base_url('assets/asset/time-icon.png');?>" alt="" />
		  Bergabung sejak <?php echo $birthday; ?>
		</p>
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
  		  <a href="../../user.html"><img src="<?php echo base_url('/assets/asset/atom-bg.png') ?>" alt=""/></a>
		</div>
		<a rel='bubble-float-left' class='button orange bubble-float-left notif'>Notifikasi</a>
		<script src="<?php echo base_url('assets/user/js/sweetalert-dev.js'); ?>"></script>
		<link rel="stylesheet" href="<?php echo base_url('assets/user/css/sweetalert.css'); ?>">
	  </div>
	  
	  <div class="clear"></div>
	  
	  <div id="daftar_kelas">
	    <div class="title_content"><p> Data <?php echo $row->nama_lengkap; ?> </p></div>
	    <div class="content content_profil">
	 	  <li class="cover-wrapper">
		    <a href="../../kelas/video/Belajar-Codeigniter-untuk-pemula.html">
		 	  <div class="bg_transparent"></div>
			  <p>Belajar Codeigniter untuk pemula</p>
			  <img src="<?php echo base_url('assets/asset/cover/codeigniter.png');?>" alt="" />
		    </a>
		  </li>
		  <div class="clear"></div>
	    </div>
	  </div>

	  <div class="clear_h"></div>
	  <div id="footer">
		<span style="padding-left:10px;">&copy; 2016 <span>SekolahKoding</span></span>
	  </div>
	</div>
	
	<div class="clear"></div>

  </div>

</body>
<?php } ?>
</html>