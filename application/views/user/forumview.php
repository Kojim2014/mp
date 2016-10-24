<?php
	$dafor = $this->db->where('id_forum', $this->uri->segment(3));
	$dafor = $this->db->get('forum')->result();
	foreach ($dafor as $tarum) {
?>
<div class="title_content">
	<h1> <?= $tarum->title ?> </h1>
</div>

<div class="content">

<?php
	$damem = $this->db->where('id_users', $tarum->creator);
	$damem = $this->db->get('users')->result();
	foreach ($damem as $taser) {
?>
<div class="col-40 penanya_info">
	<div class="pertanyaan_by_foto col-20">
		<img src="<?= base_url('assets/photo/fotoprofile/'.$taser->foto); ?>" width=50 />
	</div>

	<div class="pertanyaan_by">
	<a href="">@<?= $taser->username ?></a>
	</div>
	<br>
	<div class="waktu_pertanyaan">
		<?php
			$tgl = explode(' ', $tarum->created);
			$tanggal = explode('-', $tgl[0]);
			echo $tanggal[2]."-".$tanggal[1]."-".$tanggal[0];
		?>
	</div>
</div>
<?php } ?>

<div class="col-35">
	<div class="tag_pertanyaan">
		<?php
			$tag = explode(',', $tarum->tags);
			foreach ($tag as $tags) {
		?>
		<span><a href=""><?= $tags ?></a></span>
		<?php } ?>
	</div>
</div>

<div class="clear"></div>

<div id="isi_pertanyaan"><?= $tarum->content ?></div>
<?php } ?>