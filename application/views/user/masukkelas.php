        <div class="title_content">
          <a href="<?php echo site_url('home/addmateri/'.$kelas['id_kelas']);?>"> 
            <button type="button" style="float:right;" class="btn btn-default">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>Tambah Materi
            </button>
          </a>
          <p><?php echo $kelas['nama_kelas'] ?></p>
        </div>
        

<?php 
$this->db->where('id_kelas', $this->uri->segment(3));
$get = $this->db->get('kelas');
foreach ($get->result() as $data) { ?>
 	<div class="content">
              <div id="gambar_kelas">
                <img src="<?php echo base_url()."assets/photo/fotokelas/".$data->foto; ?>" alt="" />
              </div>

<?php } ?>
            <div id="daftar_episode">
              <h4>Daftar Materi</h4>
          	   <!--List Kategori-->

<!-- <div id="video-lists-wrapper">
  
<?php 
$this->db->where('id_kelas', $this->uri->segment(3));
$get = $this->db->get('materi');
foreach ($get->result() as $data) {
 ?>
<div class="video-lists">
        <a href="<?php echo site_url("Home/vmateri/".$data->id_materi); ?>"> <?=$data->title;?></a>
  </div>
    <?php } ?>
</div>
 -->
 <?php 
$this->db->where('id_kelas', $this->uri->segment(3));
$get = $this->db->get('materi');
foreach ($get->result() as $data) {
 ?>
<table>
  <tr>
 <td><div class="list-group">
  
  </div>
  <td width="700"><div class="list-group">
  <a href="<?php echo site_url("Home/vmateri/".$data->id_materi); ?>" class="list-group-item list-group-item-success"><?=$data->title;?></a></div></td>
  <td><div class="list-group">
  <a onclick="return confirm('Apakah anda yakin akan menghapus Kelas ini?')" href="<?php echo site_url('Home/delmateri/'.$data->id_materi);?>" class="list-group-item list-group-item-success">Hapus</a></div></td></td>
  </tr>
</table>
<?php } ?>
</div>
 </div>