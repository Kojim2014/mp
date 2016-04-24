        <div class="title_content">
          <a href="<?php echo site_url('home/tambahkls');?>"> 
            <button type="button" style="float:right;" class="btn btn-default">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Kelas
            </button>
          </a>
          <p>Daftar Kelas</p>
        </div>

          <div class="content content-materi">

         <?php 
         $query = $this->db->get('kelas');
         foreach ($query->result() as $data) {
          ?>
                      <div class="each_playlist">
                  <a class="link_pl" href="#">
                    <img src="<?php echo base_url()."assets/photo/fotokelas/".$data->foto; ?>" alt=" Mengamankan website php" />
                    <div class="playlist_nama"> <?php echo $data->nama_kelas; ?> </div>
                    <div class="playlist_desc"> <?php echo $data->deskripsi; ?> </div>
                  </a>
              </div>

          <?php } ?>

  <div class="pagination">
    <a href="halaman/1.html" class="active_page">1</a>
    <a href="halaman/2.html" class="">2</a>
    <a href="halaman/3.html" class="">3</a>
  </div>
</div>
