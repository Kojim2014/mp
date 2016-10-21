


    <center><h1>Edit Profile</h1></center>
  	<hr>
    <?=form_open_multipart('home/save_editp')?>
      <!-- left column -->
      <div class="col-md-3">
        <div class="text-center">
          <img id="output" style="object-fit: fill; " src="<?php echo base_url('assets/photo/fotoprofile/'.$this->session->userdata('foto'));?>" class="avatar img-square" alt="avatar">
          <h6>Upload a different photo...</h6>
          
          <input type="file" onchange="loadFile(event)" name="userfile" class="form-control">
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
        <input type="hidden" value="<?php echo $this->session->userdata('uid'); ?>">
          <div class="form-group">
            <label class="col-lg-3 control-label">Nama Lengkap:</label>
            <div class="col-lg-8">
              <input class="form-control" name="nama_lengkap" type="text" value="<?php echo $this->session->userdata('nama'); ?>">
            </div>
          </div>
		<div class="form-group">
            <label class="col-lg-3 control-label">Contact Person:</label>
            <div class="col-lg-8">
              <input class="form-control" name="cp" type="text" value="<?php echo $this->session->userdata('contact'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" name="email" type="text" value="<?php echo $this->session->userdata('email'); ?>" >
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name="username" value="<?php echo $this->session->userdata('username'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" name="password" type="password" value="<?php echo $this->session->userdata('password'); ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" name="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <button onclick="goback()" class="btn btn-default">Cancel</button>
            </div>
          </div>
<?php echo form_close(); ?>
      </div>
  

<hr>


<script type="text/javascript">
  function goback() {
    window.history.go(-1);
  }

  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
  };

  
</script>