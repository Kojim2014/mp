<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Web Media | Sign in</title>

    <!-- Style -->
    <link href='<?php echo base_url('/assets/login/css/open-sans.css') ?>' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php echo base_url('/assets/login/font-awesome/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/login/css/style.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/login/css/normalize.css') ?>">
    
    <!-- Javascript -->
    <script src="<?php echo base_url('/assets/login/js/prefixfree.min.js') ?>"></script>

    <style type="text/css">
      .form-footer{
        width: 100%;
      }
      .register{
        display: none;
      }
    </style>

</head>
<body>
  <div class="wrapper">
      <form class="login">
        <p class="title">Sign in</p>
        <input type="text" placeholder="Username" required autofocus/>
        <i class="fa fa-user"></i>
        <input type="password" placeholder="Password" required />
        <i class="fa fa-key"></i>
        <footer class="message">Belum mendaftar?<a href="#daftar">Daftar</a></footer>
        <button>
          <i class="spinner"></i>
          <span class="state">Masuk</span>
        </button>
      </form>
      <form class="register">
        <p class="title">Register</p>
        <input type="text" placeholder="Username" required />
        <i class="fa fa-user"></i>
        <input type="email" placeholder="E-mail" required />
        <i class="fa fa-at"></i>
        <input type="password" placeholder="Password" required />
        <i class="fa fa-key"></i>
        <footer class="message">Sudah mendaftar?<a href="#masuk">Masuk</a></footer>
        <button>
          <i class="spinner"></i>
          <span class="state">Daftar</span>
        </button>
      </form>
    <footer>&copy;Copyright 2016 - <em><a href="">Fakhrurrozi</a></em></footer>
  </div>
    
  <!-- Javascript -->
  <script src='<?php echo base_url('/assets/login/js/jquery.min.js') ?>'></script>
  <script src="<?php echo base_url('/assets/login/js/index.js') ?>"></script>

  <script type="text/javascript">
      $('.message a').click(function(){
        $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
      });
  </script>
</body>
</html>