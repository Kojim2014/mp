<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css');?>">
	<script src="<?php echo base_url('assets/user/js/jquery.min.js');?>"></script>
</head>
<body style="background-color:rgb(0, 150, 136);">

<div class="container" style="background-color:white;">
    <center><h1>Edit Profile</h1></center>
  	<hr>
	<div class="row" style="background-color:white;">
<div class="well well-sm">
  <p> <a href="<?php echo site_url('home') ?>">Back </a> / Edit Profile 
   </p>

</div>
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img src="<?php echo base_url('assets/web/images/c4.jpg');?>" class="avatar img-circle" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" class="form-control">
        </div>
      </div>
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
	  <div class="alert alert-success fade in">
	    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	    Silahkan Edit Profile Anda.!
	  </div>
        <h3>Info Pribadi</h3>
        <form class="form-horizontal" role="form">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama Lengkap:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text">
            </div>
          </div>
		<div class="form-group">
            <label class="col-lg-3 control-label">Contact Person:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="button" class="btn btn-primary" value="Save Changes">
              <span></span>
              <button onclick="goback()" class="btn btn-default">Cancel</button>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
</body>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js');?>"></script>

<script type="text/javascript">
  function goback() {
    window.history.go(-1);
  }
</script>
</html>