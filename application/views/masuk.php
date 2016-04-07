<!DOCTYPE html>
<html >
  <head>
  <meta charset="UTF-8">
  <title><?php echo ($data == "masuk") ? "Sign-in" : (($data == "daftar") ? "Sign-up" : "")?> Page</title>

  <link href='<?php echo base_url('/assets/login/css/titilium.css') ?>' rel='stylesheet' type='text/css'>    
  <link rel="stylesheet" href="<?php echo base_url('/assets/login/css/normalize.css') ?>">  
  <link rel="stylesheet" href="<?php echo base_url('/assets/login/css/style.css') ?>">
</head>
<body>

  <div class="form">
    <div class="logo"><img src="" alt="Logo"></div>
    <ul class="tab-group">
      <li class="tab <?php echo ($data == "masuk") ? "active" : ""?>"><a id="masuk" href="#login">Masuk</a></li>
      <li class="tab <?php echo ($data == "daftar") ? "active" : ""?>"><a id="daftar" href="#signup">Daftar</a></li>
    </ul> 

    <div class="tab-content">
      <div id="signup" style="display: <?php echo ($data == "masuk") ? "none" : '' ?>">   
        <h1>Sign Up for Free</h1>
      
        <!-- Form -->
        <form action="<?php echo site_url('main/masuk') ?>" method="post" onsubmit="return pwcf()">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" name="fname" required autocomplete="off" />
            </div>
          
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text" name="lname" required autocomplete="off"/>
            </div>
          </div>
  
          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="uname" required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password" name="pword" id="pass" required autocomplete="off" />
            </div>
          
            <div class="field-wrap">
              <label>
                Confirm Password<span class="req">*</span>
              </label>
              <input type="password" id="confpass" required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Contact Person<span class="req">*</span>
            </label>
            <input type="text" name="conpers" required autocomplete="off"/>
          </div>

          <div class="top-row">
            <div class="field-wrap">
              <select form="select" name="jekel">
                  <option value="laki-laki">laki-laki</option>
                  <option value="perempuan">perempuan</option>
              </select>
            </div>
          </div>

          <button type="submit" class="button button-block"/>Register</button>
        </form>
      </div>

      <div id="login"  style="display: <?php echo ($data == "daftar") ? "none" : '' ?>">
        <?php 
          if ($this->session->flashdata('login')) {
            echo "<h1>".$this->session->flashdata('login')."</h1>";
          }
        ?>

        <form action="<?php echo site_url('main/login'); ?>" method="post">
      
          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="text" name="username" required autocomplete="off"/>
          </div>
      
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
      
          <p class="forgot"><a href="<?php echo site_url('main/forgot'); ?>">Forgot Password?</a></p>
      
          <button class="button button-block"/>Log In</button>
      
         </form>
      </div>

    </div><!-- tab-content -->
  </div> <!-- /form -->

  <!-- script -->
  <script src="<?php echo base_url('/assets/login/js/jquery.min.js') ?>"></script>

<script type="text/javascript">
    $('.form').find('input, textarea').on('keyup blur focus', function (e) {
      
      var $this = $(this),
          label = $this.prev('label');

        if (e.type === 'keyup') {
            if ($this.val() === '') {
              label.removeClass('active highlight');
            } else {
              label.addClass('active highlight');
            }
        } else if (e.type === 'blur') {
            if( $this.val() === '' ) {
                label.removeClass('active highlight'); 
                } else {
                label.removeClass('highlight');   
                }   
        } else if (e.type === 'focus') {
          
          if( $this.val() === '' ) {
                label.removeClass('highlight'); 
                } 
          else if( $this.val() !== '' ) {
                label.addClass('highlight');
                }
        }

    });

    $('.tab a').on('click', function (e) {
          
      e.preventDefault();
      
      $(this).parent().addClass('active');
      $(this).parent().siblings().removeClass('active');
          
      target = $(this).attr('href');

     $('.tab-content > div').not(target).hide();
          
      $(target).fadeIn(600);
          
      var state = "";
      var title = "";
      var id = $(this).attr('id');
      var url = "<?php echo site_url('main/" + id + "') ?>";
      history.pushState(state, title, url);
      if (id === "masuk") {
        var title = "Sign-in"
      }else if(id === "daftar"){
        var title = "Sign-up"
      }
      $("title").html(title + " Page");
    });

    function pwcf() {
        var pass1 = document.getElementById("pass").value;
        var pass2 = document.getElementById("confpass").value;
        var match;
        if (pass1 != pass2) {
            //alert("Passwords Do not match");
            document.getElementById("pass").style.borderColor = "#E34234";
            document.getElementById("confpass").style.borderColor = "#E34234";
            match = false;
        }
        else {
            match = true;
        }
        return match;
    }
</script>

</body>
</html>
