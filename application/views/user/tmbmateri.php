          <div class="title_content"> <p> Tambah Materi </p></div>

          <div class="col-md-9 personal-info">
           <?=form_open_multipart('home/save_materi');?>
              <input  type="hidden" name="id_kelas" value="<?php echo $this->uri->segment(3) ?>">
          <div class="form-group">
            <label class="col-lg-3 control-label">title:</label>
            <div class="col-lg-8">
              <input type="text" class="form-control" name="title">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">content:</label>
            <div class="col-lg-8">
              <input class="form-control" type="file" name="userfile">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Creator:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="creator">
            </div>
          </div>          
          <div class="form-group">
            <label class="col-lg-3 control-label">Created:</label>
            <div class="col-lg-8">
              <input class="form-control" type="date" name="created">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">updated:</label>
            <div class="col-lg-8">
              <input class="form-control" type="date" name="updated">
            </div>
          </div>          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" value="submit" class="btn btn-success">Submit</button>
              <span></span>
              <button onclick="goback()" class="btn btn-default">Cancel</button>
            </div>
          </div>
          <?=form_close();?>
          </div> <!-- end daftar kelas-->