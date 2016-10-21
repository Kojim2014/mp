<script src="<?php echo base_url('assets/user/js/select2.min.js');?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/user/css/select2.min.css');?>">
<link href="<?php echo base_url('/assets/user/css/summernote.css') ?>" rel="stylesheet">
<link href="<?php echo base_url('assets/user/css/bootstrap.css');?>" rel="stylesheet">
<script src="<?php echo base_url('assets/user/js/bootstrap.js');?>"></script> 
<script src="<?php echo base_url('assets/user/js/summernote.js');?>"></script>

<div class="title_content">
  <p> Tanya Forum</p>
</div>

<form action="<?php echo site_url('home/tanyaforum') ?>" enctype="multipart/form-data" method="POST" onsubmit="return postForm()">
  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Judul</h3> 
    </div>
    <div class="panel-body">
      <div class="input-group">
        <span class="input-group-addon" id="basic-addon1"><i class="fa fa-bookmark"></i></span>
        <input type="text" name="title" class="form-control" aria-describedby="basic-addon1" required>
      </div>
    </div>
  </div>

  <input id="valkonten" type="hidden" name="konten">

  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Pertanyaan</h3>
    </div>
    <div class="panel-body">
          <textarea class="input-block-level" id="summernote" name="content" rows="8">
          </textarea>
    </div>
  </div>

  <div class="panel panel-success">
    <div class="panel-heading">
      <h3 class="panel-title">Tags</h3>
    </div>

    <select style="width:100%; height: 100%;" name="tag" class="js-example-basic-multiple" multiple="multiple">
      <option value="AL">Alabama</option>
      <option value="WY">Wyoming</option>
      <option value="AA">AHAHA</option>
    </select>
  </div>

  <button  type="submit" class="btn btn-success btn-block">Posting Pertanyaan</button>
</form>
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

  function kon () {
    $('#valkonten').val($('#summernote').text());
    var ret;
    if ($('#valkonten').val() != $('#summernote').text()) {
      ret = false;
      return ret;
    }else {
      ret = true;
      return ret;
    }
  }

  $('.summernote').summernote({
  airMode: true
});
var postForm = function() {
  var content = $('textarea[name="content"]').html($('#summernote').code());
}
</script>