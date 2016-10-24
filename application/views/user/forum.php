<div class="title_content">
  <p>Forum</p>
</div>

<div class="content">
	<div id="create_forum">
		<a href="<?php echo site_url('home/tanya');?>"><span>Tanya ✎</span></a>
	</div>

	<select name="daftar_pelajaran" id="select_daftar_pelajaran">
	<option class="option_pelajaran" value="/forum">Semua Topik</option>
	<option class="option_pelajaran" value="/forum">1</option>
	</select>

	<div class="clear"></div>

	<?php
		$this->db->order_by('created', 'DESC');
		$this->db->limit(10);
		$data = $this->db->get('forum');
		foreach ($data->result() as $row) {
	?>
	<div id="topic_wrapper">
		<div class="each_topic" id="1063" last_activity="2016-03-18 10:54:57" last_activity_by ="" judul="pemrograman-java-mobille">
			<div class="col-15">
				<div class="pertanyaan_by_foto">
					<?php
						$user = $this->db->where('id_users', $row->creator);
						$user = $this->db->get('users')->result();
						foreach ($user as $pict) {
					?>
					<img src="<?php echo base_url('assets/photo/fotoprofile/'.$pict->foto) ?>" width=50 />
					<?php } ?>
				</div>
			</div>

			<div class="col-65">
				<div class="pertanyaan">
					<a href="<?= site_url('home/forum/'.$row->id_forum) ?>"> <?php echo $row->title; ?> </a>
				</div>

				<div class="pertanyaan_by">
					oleh @<a href="user/profile/kazuna018.html">
						<?php
							$this->db->select('username');
							$this->db->where('id_users', $row->creator);
							$uname = $this->db->get('users');
							echo $uname->result()[0]->username;
						?>
					</a>
				</div>

				<div class="waktu_pertanyaan">
		        	<?php $tgl = explode(' ', $row->created); echo $tgl[0]; ?>
		        </div>

				<div class="tag_pertanyaan">
				  <?php $tag = explode(',', $row->tags); foreach ($tag as $tags) {?>
					<span><a href="forum/tag/index.html"><?php echo $tags; ?></a></span>
				  <?php } ?>
				</div>
			</div>

	    	<div class="clear"></div>
		</div>
	</div>
	<?php } ?>
	<div class="pagination">
	<a href='forum/halaman/1.html'> << </a>
	<a href='forum/halaman/1.html'>1</a>
    <a href='forum/halaman/2.html'>2</a>
    <a href='forum/halaman/3.html'>3</a>
    <a href='forum/halaman/4.html'>4</a>
    <a href='forum/halaman/5.html'>5</a>
    <a href='forum/halaman/6.html'>6</a>
    <a href='forum/halaman/7.html'>7</a>
    <a href='forum/halaman/61.html'> >> </a>
	</div>
</div>
