 
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from www.sekolahkoding.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:11:22 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>Sekolah Koding - Belajar web design, web development dan programming</title>
		<meta charset="UTF-8">
		<meta name="description" content="Sekolah Koding - Belajar web design, web development dan programming online dalam bahasa Indonesia. Belajar sekarang dan mulai berkarya">
		<meta name="keywords" content="belajar, webdesign, web development, tutorial, bahasa, indonesia, sekolah, koding">
    <!-- for facebook graph-->
		<meta property="og:title" content="SekolahKoding">
    <meta property="og:type" content="Website">
		<meta property="og:image" content="<?php echo base_url();?>assets/asset/blue-logo.png">
		<meta property="og:description" content="Tutorial online belajar Web Programming dan Design dalam bahasa Indonesia di SekolahKoding">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" href="<?php echo base_url('assets/user/css/homepage.css') ?>">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/user/css/animate.css">
    <script src="<?php echo base_url();?>assets/user/js/wow.min.js"></script>
    <script src="<?php echo base_url();?>assets/user/js/jquery-2.1.4.min.js"></script>
    <link rel='stylesheet' href='<?php echo base_url();?>assets/user/css/hover-min.css'/>
<!--     <link rel='stylesheet' href='https://mas-andes.googlecode.com/svn/trunk/hover-min.css' media='all'/>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=PT+Mono' rel='stylesheet' type='text/css'> -->
    <style media="screen">
    h1{ font-family: 'Nunito', sans-serif; }
    h2, h3 {font-family: 'PT Mono', cursive;}

    .section_partner a, .section_media a{
      display: block;
      float: left;
      width: 22%;
      margin: 0 1.5%;
      text-align: center;
    }

    .section_media a{
      width: 18%;
      margin: 0 1%;
    }

     .media_cp, .media_ds{ margin-top: 15px !important }
      .media_ds img{ width: 200px; }
      .media_m img{ width: 190px; }

      .partner_cp, .partner_pp{
        padding-top: 20px;
      }
    /*---------------------------------*/
    /*------ smartphone size  ---------*/
    /*---------------------------------*/
    @media only screen and (max-width : 768px){

    }
    @media only screen and (max-width : 480px){
        .section_partner a, .section_media a{
            float: none;
            width: 80%;
            margin: 8px auto;
        }

        .partner_cp, .partner_pp{
          padding-top: 0px;
        }
    }

    </style>
</head>
<body>
  <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '389996164532722',
      xfbml      : true,
      version    : 'v2.4'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "../connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
  </script>

  <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59878621-1', 'auto');
  ga('send', 'pageview');

</script>

  <div class="section section_landing">
    <div class="wrapper">
        <header class="clearfix">
          <div id="logo"><img src="<?php echo base_url();?>assets/asset/homepage/sk_white_transparent.png" alt="logo-sekolahkoding"></div>
          <nav>
            <div id="toggle_menu">Menu</div>
            <div id="menu_wrap">
             <a  href="#tentang" onclick="gotoo($(''+$(this).attr('href')+''));"><b>Tentang</b></a>
             <a  href="#testi" onclick="gotoo($(''+$(this).attr('href')+''));"><b>Testimoni</b></a>
             <a  href="#panduan" onclick="gotoo($(''+$(this).attr('href')+''));"><b>Panduan</b></a>
            </div>
          </nav>
        </header>
        <div id="main_text">
           <h2>WEB Media Pembelajaran</h2> 
           <h2>Belajar Lebih Modern dan Interaktif Dengan Media Pembelajaran Berbasis WEB</h2> 
           <h3>Sebar Ilmu = Sebar Kebaikan</h3>
        </div>

        <div id="tombol_wrapper">
          <center>
          <div class="wow fadeIn">
            
            <a rel='hover-shadow' class='btn button turqoise hover-shadow'>Masuk</a>
            <a rel='hover-shadow' class='btn button turqoise hover-shadow'>Daftar</a>
</div>
          </center>
        </div>

        <div id="back-top">
          <a href="#top"><img class="gtop" src="<?php echo base_url();?>assets/asset/homepage/top.png" alt=""> </a>
        </div>
        <div class="gmb1" id="gmb" style="display:none;"><img src="<?php echo base_url();?>assets/asset/homepage/buk.png" alt=""></div>
        <div class="gmb2" id="gmb" style="display:none;"><img src="<?php echo base_url();?>assets/asset/homepage/kal.png" alt=""></div>
        <div class="gmb3" id="gmb" style="display:none;"><img src="<?php echo base_url();?>assets/asset/homepage/kom.png" alt=""></div>
        <div class="gmb4" id="gmb" style="display:none;"><img src="<?php echo base_url();?>assets/asset/homepage/ner.png" alt=""></div>
        <div class="gmb5" id="gmb" style="display:none;"><img src="<?php echo base_url();?>assets/asset/homepage/diskusi.png" alt=""></div>
        <div class="gmb6" id="gmb" style="display:none;"><img src="<?php echo base_url();?>assets/asset/homepage/guru.png" alt=""></div>
    </div>
  </div>
 <div class="wow rollIn">
  <div class="section section_donasi" id="tentang">
    <div class="wrapper">
    <h4><span>Tentang WEB Media Pembelajaran</span></h4>
        <h5 align="left">Apa Itu Web Media Pembelajaran? </h5>
        <p style="padding-left:3%" align="left"><b>-</b> Web media Pembelajaran Adalah sebuah Situs yang Memuat Tentang Berbagai Macam Mata Pelajarn Yang berbasis WEB.</p>
        <br>
        <h5 align="left">Kenapa Harus Menggunakan WEB Media Pembelajaran? </h5>
        <p style="padding-left:3%" align="left"><b>-</b> WEB Media Pembelajaran Berfungsi Sebagai Media Shareing Berbagai Macam Pelajaran, Antara Pendidik Dan Peserta Didik,Content Yang Dapat Di shareing Antara Lain Artikel,Video dan Diskusi Forum.</p>
        <br>
        <h5 align="left">Apa Tujuan WEB Media Pembelajaran? </h5>
        <p style="padding-left:3%" align="left"><b>-</b> Tujuan WEB MEdia Pembelajaran Adalah Peserta Didik Tidak hanya Aktif Belajar Disekolah saja Tetapi Bisa Aktif Belajar Lewat WEB Media Pembelajaran, Sehingga Belajar Bisa Lebih Efektif dan Efisien.</p>
    </div>
  </div>
  </div>
  <div class="section section_testimoni" id="testi">
    <div class="wrapper">
          <h4><span> Testimonial </span></h4>
          <div class="each_testimoni clearfix wow flipInX">
            <img  src=" <?php echo base_url();?>assets/asset/homepage/peter_jack.jpg" alt="">
            <p>"Sebagai sebuah komunitas programming terbesar di indonesia, PHP Indonesia memiliki kewajiban moral untuk bersinergi dengan organisasi manapun yang memiliki tujuan yang sama yakni pengembangan SDM TI yang berkualitas bagi Indonesia. Setelah berdiskusi panjang lebar dengan Founder Sekolah Koding, saya sangat yakin Sekolah Koding adalah sebuah institusi pengembangan skill programming yang memiliki visi dan misi yang hebat untuk kemajuan TI di Indonesia dan dunia, oleh karena itu menjalin hubungan yang baik dengan Sekolah Koding adalah sebuah aliansi strategis demi mencapai tujuan bersama. Sukses untuk Sekolah Koding, mari BERSAMA kita BERKARYA, dan bersama kita BERJAYA!!!!.... "</p>
            <div id="testimoni_oleh"><a href="http://phpindonesia.or.id/">Peter J. Kambey, <span>Head of Executive | PHP Indonesia Community</span></a></div>
          </div>
          <div class="each_testimoni clearfix wow flipInX">
            <img src="<?php echo base_url();?>assets/asset/homepage/oriza.jpg" alt="foto ahmad oriza co founder codepolita">
            <p class="testimoni_mini">"Penyampaian materi yang lugas disertai semangat berbagi menjadi hal yang sangat luar biasa. Good job Sekolah Koding."</p>
            <div id="testimoni_oleh"><a href="http://codepolitan.com/">Ahmad Oriza, <span>Co-Founder Codepolitan</span></a></div>
          </div>
          <div class="each_testimoni clearfix wow flipInX">
            <img src="<?php echo base_url();?>assets/asset/homepage/fajar.jpg" alt="foto fajar founder startupmengajar">
            <p class="testimoni_mini">"Sekolah Koding tempat yang tepat untuk belajar programming. Tutorial yang banyak & lengkap serta berbahasa Indonesia loh! Buruan belajar bersama-sama dengan pelajar lainnya di seluruh penjuru Indonesia hanya di SekolahKoding.com"</p>
            <div id="testimoni_oleh"><a href="http://leanskill.com/"> Fajar, <span>Founder leanskill.com</span></a></div>
          </div>
      </div>
    </div>

  <div class="section section_highlight" id="panduan">
    <div class="wrapper">
        <div id="col_video" class="wow rollIn">
          <iframe width="420" height="315" src="https://www.youtube.com/embed/Y7oZU3T867M" frameborder="0" allowfullscreen></iframe>
        </div>
        <div id="short_menu" class="wow slideInRight">
        <h4><span>Panduan</span></h4>
          <p>Panduan Penggunaan WEB Media Pembelajaran.</p>
          <a href="kelas/index.html"><img src="<?php echo base_url();?>assets/asset/homepage/sm_perpus.png" alt="belajar web development logo">Panduan Register Akun</a>
          <a href="forum.html" class="short_menu_child"><img src="<?php echo base_url();?>assets/asset/homepage/sm_perpus.png" alt="forum web developer indonesia logo">Cara Bergabung Dengan Kelas</a>
          <a href="perpustakaan.html" class="short_menu_child"><img src="<?php echo base_url();?>assets/asset/homepage/sm_perpus.png" alt="belajar membuat website logo">Interaksi DI Forum</a>
        </div>
    </div>
  </div>

  <div class="section section_perjalanan">
    <div class="wrapper">
        <h4><span>Ringkasan</span></h4>

<div class="each_perjalanan each_perjalanan_java wow slideInDown">
        <div class="perjalanan_wrapper">
            <div class="each_perjalanan_title"> Kelas </div>
            <img src="<?php echo base_url();?>assets/asset/cover/css3.png" alt="cara menjadi web developer">
            <div class="each_perjalanan_desc">
            Kelas berfungsi sebagai tempat untuk guru memberikan materi berdasarkan kelas tersebut.<a href="#popup"class="popup-link">Detail</a>
            </div>
          </div>
          <div id="closed"></div>
              <div class="popup-wrapper" id="popup">
                <div class="popup-container">
    
                    <h2>Ikuti Update !!</h2>
                    <p>Daripada hanya melihat demo untuk popup-nya saja, lebih baik masukkan juga email anda agar mendapatkan pemberitahuan saat ada update posting menarik lain seperti ini.<br/>
                    <strong>Percayalah, saya hanya akan mengirim sesuatu yang bermanfaat untuk anda :)</strong></p>
                    <a class="popup-close" href="#akdmik">X</a>
                  
                </div>
              </div>
        </div>

<div class="each_perjalanan each_perjalanan_folio wow slideInDown">
        <div class="perjalanan_wrapper">
            <div class="each_perjalanan_title"> Kelas </div>
            <img src="<?php echo base_url();?>assets/asset/cover/css3.png" alt="cara menjadi web developer">
            <div class="each_perjalanan_desc">
            Kelas berfungsi sebagai tempat untuk guru memberikan materi berdasarkan kelas tersebut.<a href="#popup"class="popup-link">Detail</a>
            </div>
          </div>
          <div id="closed"></div>
              <div class="popup-wrapper" id="popup">
                <div class="popup-container">
    
                    <h2>Ikuti Update !!</h2>
                    <p>Daripada hanya melihat demo untuk popup-nya saja, lebih baik masukkan juga email anda agar mendapatkan pemberitahuan saat ada update posting menarik lain seperti ini.<br/>
                    <strong>Percayalah, saya hanya akan mengirim sesuatu yang bermanfaat untuk anda :)</strong></p>
                    <a class="popup-close" href="#akdmik">X</a>
                  
                </div>
              </div>
        </div>

<div class="each_perjalanan each_perjalanan_js wow slideInDown">
        <div class="perjalanan_wrapper">
            <div class="each_perjalanan_title"> Kelas </div>
            <img src="<?php echo base_url();?>assets/asset/cover/css3.png" alt="cara menjadi web developer">
            <div class="each_perjalanan_desc">
            Kelas berfungsi sebagai tempat untuk guru memberikan materi berdasarkan kelas tersebut.<a href="#popup"class="popup-link">Detail</a>
            </div>
          </div>
          <div id="closed"></div>
              <div class="popup-wrapper" id="popup">
                <div class="popup-container">
    
                    <h2>Ikuti Update !!</h2>
                    <p>Daripada hanya melihat demo untuk popup-nya saja, lebih baik masukkan juga email anda agar mendapatkan pemberitahuan saat ada update posting menarik lain seperti ini.<br/>
                    <strong>Percayalah, saya hanya akan mengirim sesuatu yang bermanfaat untuk anda :)</strong></p>
                    <a class="popup-close" href="#akdmik">X</a>
                  
                </div>
              </div>
        </div>



    </div> 
  </div>


  <div class="wow slideInUp">
<!--   <div class="section section_partner">
    <div class="wrapper">
        <h4><span>Partner Kami</span></h4>
        <a class="partner_cs" target="_blank" href="http://codesaya.com/"><img id="ri" src="<?php echo base_url();?>assets/asset/homepage/codesaya_logo_blue.png" alt=""></a>
        <a class="partner_cp" target="_blank" href="http://codepolitan.com/"><img id="ri" src="<?php echo base_url();?>assets/asset/homepage/codepolitan-logo_small.png" alt=""></a>
        <a class="partner_php" target="_blank" href="http://www.phpindonesia.or.id/"><img id="ri" src="<?php echo base_url();?>assets/asset/homepage/php_indonesia.png" alt=""></a>
        <a class="partner_pp" target="_blank" href="http://pondokprogrammer.com/"><img id="ri" src="<?php echo base_url();?>assets/asset/homepage/Logo-PP1.png" alt=""></a>
    </div>
  </div> -->
</div>
  <div class="section section_action">
    <div class="wrapper">
        <p class="wow bounceInDown">Ayo Bergabung Sekarang Juga Untuk Belajar Lebih Seru dan Interaktif!</p>
        <div id="tombol_wrapper_action" class="clearfix">
          <a style="background-color:orange;" rel='curl-top-left' class='button purple curl-top-left'>Daftar Sekarang Juga</a>
        </div>
    </div>
  </div>

  <div class="section section_footer">
    <div class="wrapper">
        <div id="footer_main_info">
        <div id="logo_foot"><img src="<?php echo base_url();?>assets/asset/homepage/sk_white_transparent.png"></div>
          <p>Video tutorial web development dan programming dalam bahasa Indonesia.
Luaskan ilmu, luaskan manfaat.</p>
        </div>

        <div id="footer_extra_info" class="clearfix">
          <div class="col_3_footer">
            <h6>Informasi</h6>
            <ul>

              <li><a href="#tentang" onclick="gotoo($(''+$(this).attr('href')+''));"><b>Tentang</b></a></li>
              <li><a href="#testi" onclick="gotoo($(''+$(this).attr('href')+''));"><b>Testimoni</b></a></li>
              <li><a href="#panduan" onclick="gotoo($(''+$(this).attr('href')+''));"><b>Panduan</b></a></li>
            </ul>

          </div>
        </div><!-- end footer extra info-->

        <div id="footer_social_media">
          <a target="_blank" href="https://facebook.com/sekolahkoding"><img src="<?php echo base_url();?>assets/asset/homepage/f_l.png" alt="facebook sekolahkoding"></a>
          <a target="_blank" href="https://twitter.com/sekolahkoding"><img src="<?php echo base_url();?>assets/asset/homepage/t_l.png" alt="twitter sekolahkoding"></a>
          <a target="_blank" href="https://youtube.com/sekolahkoding"><img src="<?php echo base_url();?>assets/asset/homepage/u_l.png" alt="youtube sekolahkoding"></a>
        </div>

        <div id="footer_last">
          <div id="copyright">&copy;SekolahKoding 2016</div>
        </div>

    </div>
  </div>
  <script>
new WOW().init();

  jQuery(function($){
      //main nav toggle menu
      $('#toggle_menu').on('click', function(e) {
        $('#menu_wrap').toggleClass('show');
        e.preventDefault();
      });

  });

    function gotoo(element){
      $('html, body').animate({scrollTop:element.offset().top}, 1500);
    }


  //  new WOW().init();
$(document).ready(function(){
        // $("#div1").fadeIn();
        $(".gmb1").fadeIn("4000");
        $(".gmb2").fadeIn("7000");
        $(".gmb3").fadeIn("9000");
        $(".gmb4").fadeIn("10000");
        $(".gmb5").fadeIn("12000");
        $(".gmb6").fadeIn("13000");
        //$("#div3").fadeIn(3000);
        //$("#div4").fadeIn(6000);

});

$(document).ready(function(){

  // hide #back-top first
  $("#back-top").hide();
  
  // fade in #back-top
  $(function () {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        $('#back-top').fadeIn();
      } else {
        $('#back-top').fadeOut();
      }
    });

    // scroll body to 0px on click
    $('#back-top a').click(function () {
      $('body,html').animate({
        scrollTop: 0
      }, 800);
      return false;
    });
  });

});

</script>
</body>
<!-- Mirrored from www.sekolahkoding.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 18 Mar 2016 10:11:47 GMT -->
</html>
