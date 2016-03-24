<!DOCTYPE html>
<html >
  <head>
  <meta charset="UTF-8">
  <title>Sign-Up/Login Form</title>

  <link href='<?php echo base_url('/assets/login/css/titilium.css') ?>' rel='stylesheet' type='text/css'>    
  <link rel="stylesheet" href="<?php echo base_url('/assets/login/css/normalize.css') ?>">  
  <link rel="stylesheet" href="<?php echo base_url('/assets/login/css/style.css') ?>">
</head>
<body>

  <div class="form">
    <div class="logo"><img src="" alt="Logo"></div>
    <ul class="tab-group">
      <li class="tab active"><a href="#login">Masuk</a></li>
      <li class="tab"><a href="#signup">Daftar</a></li>
    </ul>
  
    <div class="tab-content">
      <div id="login">   
        <h1>Log In to Start Study!</h1>
      
        <form action="" method="post">
      
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
      
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>
      
          <p class="forgot"><a href="#">Forgot Password?</a></p>
      
          <button class="button button-block"/>Log In</button>
      
         </form>
      </div>

      <div id="signup">   
        <h1>Sign Up for Free</h1>
      
        <!-- Form -->
        <form action="" method="post">
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>
          
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>
  
          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                Password<span class="req">*</span>
              </label>
              <input type="password" required autocomplete="off" />
            </div>
          
            <div class="field-wrap">
              <label>
                Confirm Password<span class="req">*</span>
              </label>
              <input type="password"required autocomplete="off"/>
            </div>
          </div>
          <button type="submit" class="button button-block"/>Register</button>
        </form>
      </div>
    </div><!-- tab-content -->
  </div> <!-- /form -->

  <!-- script -->
  <script src="<?php echo base_url('/assets/login/js/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('/assets/login/js/index.js') ?>"></script>

</body>
</html>
