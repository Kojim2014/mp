<div class="title_content"> <p> Daftar User: </p> </div>
<div class="content content-userlist">
  <?php
    $query = $this->db->get('users');
    foreach ($query->result() as $hasil) {
  ?>
    <div class="each_user col-33" id="13434">
      <a href="<?=site_url('user');?>?id=<?=$hasil->id_users;?>">
        <img class="col-40"	src="<?php echo base_url('assets/asset/homepage/fajar.jpg');?>">
        <div class="userlist-info col-45">
         <p class="nama"><?=$hasil->username;?></p>
         <p><?=$hasil->nama_lengkap;?></p>
         <p></p>
        </div>
      </a>
    </div>
  <?php } ?>

  <div class="clear"></div>
  <div class="pagination">
		<a href='member/halaman/1.html'> << </a>
		<a href='member/halaman/1.html'>1</a><a href='member/halaman/2.html'>2</a><a href='member/halaman/3.html'>3</a><a href='member/halaman/4.html'>4</a><a href='member/halaman/5.html'>5</a><a href='member/halaman/6.html'>6</a><a href='member/halaman/7.html'>7</a>    			<a href='member/halaman/734.html'> >> </a>
	</div><!-- end pagination -->

</div>