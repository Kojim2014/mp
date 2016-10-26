<div class="title_content">
  <p>Forum</p>
</div>

<div class="content">
	<div id="create_forum">
		<a href="<?php echo site_url('home/tanya');?>"><span>Tanya ✎</span></a>
	</div>

	<!-- <select name="daftar_pelajaran" id="select_daftar_pelajaran" onclick="tag()" onchange="tag()">
		<option id="tagas" class="option_pelajaran"> -- Tags -- </option>
		<?php
			$tag = $this->db->get('forum_tag')->result();
			foreach ($tag as $tags) {
		?>
		<option class="option_pelajaran" value="<?= $tags->tag ?>"><?= $tags->tag ?></option>
		<?php } ?>
	</select> -->

	<div class="clear"></div>

	<div class="tag_pertanyaan" style="padding-top: 10px;">
		<span><a href="<?= site_url('home/forum') ?>">ALL</a></span>
	  <?php
		$tag = $this->db->get('forum_tag')->result();
		  foreach ($tag as $tags) {
	  ?>
		<span><a href="<?= site_url('home/forum') ?>?tag=<?= $tags->tag ?>"><?php echo $tags->tag; ?></a></span>
	  <?php } ?>
	</div>

	<div class="clear"></div>

	<?php
		
		if (is_null($this->input->get('tag')) == false) {
			$spectag = $this->input->get('tag');
			$this->db->from('forum');
			$data = $this->db->query("SELECT * FROM forum WHERE tags Like '%{$spectag}%' ORDER BY forum.created DESC")->result();
			// $this->db->limit(10);
			// $data = $this->db->get('forum')->result();
		}else {
			$this->db->order_by('created', 'DESC');
			// $this->db->limit(10);
			$data = $this->db->get('forum')->result();
		}
		foreach ($data as $row) {

	?>
	<div id="topic_wrapper">
		<div class="each_topic" id="1063" last_activity="2016-03-18 10:54:57" last_activity_by ="" judul="pemrograman-java-mobille">
			<div class="col-15">
				<div class="pertanyaan_by_foto">
					<?php
						$user = $this->db->where('id_users', $row->creator);
						$user = $this->db->limit(1);
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
					oleh @<a href="<?=site_url('user');?>?id=<?=$row->creator;?>">
						<?php
							$this->db->select('username');
							$this->db->where('id_users', $row->creator);
							$uname = $this->db->get('users')->result();
							foreach ($uname as $name) {
								echo $name->username;
							}
						?>
					</a>
				</div>

				<div class="waktu_pertanyaan">
		        	<?php $tgl = explode(' ', $row->created); echo $tgl[0]; ?>
		        </div>

				<div class="tag_pertanyaan">
				  <?php $tag = explode(',', $row->tags); foreach ($tag as $tags) {?>
					<span><a href="<?= site_url('home/forum') ?>?tag=<?= $tags ?>"><?php echo $tags; ?></a></span>
				  <?php } ?>
				</div>
			</div>

	    	<div class="clear"></div>
		</div>
	</div>
	<?php } ?>
</div>
<script type="text/javascript">
	function tag() {
		$("#tagas").attr('disabled', '');
		document.getElementsByTagName('option')[1].setAttribute('selected', '');
	}
</script>