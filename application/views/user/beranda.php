<div id="daftar_kelas">
  <div class="title_content"><p> Kelas yang di ikuti </p></div>
  
  <?php 
  // $this->db->select('id_gabung, id_kelas');
  $this->db->from('gabung g');
  $this->db->join('kelas k', 'g.id_kelas = k.id_kelas', 'left');
  $this->db->where('g.id_user', $this->session->userdata('uid'));
  $kelas = $this->db->get();
  ?>
	  <div class="content content_profil">
	  <?php foreach ($kelas->result() as $key => $value) { ?>
		<li class="cover-wrapper">
		  <a href="<?php echo base_url('home/mkelas/' . $value->id_kelas) ?>">
			<div class="bg_transparent"></div>
			<p><?php echo $value->nama_kelas ?></p>
			<img src="<?php echo base_url('assets/photo/fotokelas/'.$value->foto);?>" />
		  </a>
		</li>
	  <?php } ?>
	  </div>






</div>