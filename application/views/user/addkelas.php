          <div class="title_content"> <p> Tambah Kelas </p></div>

          <div class="col-md-9 personal-info">
           <?=form_open_multipart('home/savekls');?>
           <div class="form-group">
            <label class="col-lg-3 control-label">Nama Kelas:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="nama">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Foto Kelas:</label>
            <div class="col-lg-8">
              <input type="file" class="form-control" name="userfile">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Deskripsi:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="deskripsi">
            </div>
          </div>
          
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit" value="submit" class="btn btn-success">Submit</button>
              <span></span>
              <button onclick="goback()" name="action" type="submit" class="btn btn-default">Cancel</button>
            </div>
          </div>
          <?=form_close();?>
          </div> <!-- end daftar kelas--> 
          <script>
function goBack() {
    window.history.go(-1);
}
</script>