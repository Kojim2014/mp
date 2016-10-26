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
		<span><a href="<?= site_url('home/forum') ?>?tag=<?= $tags ?>"><?= $tags ?></a></span>
		<?php } ?>
	</div>
</div>

<div class="clear"></div>

<div id="isi_pertanyaan"><?= $tarum->content ?></div>
<?php } ?>
</div>

<!-- Jawaban -->
<div id="jawaban_wrapper">
	<h4>Jawaban</h4>
	<?php
		$this->db->where('id_forum', $this->uri->segment(3));
		$this->db->where('status', '1');
		$jwb = $this->db->get('forum_comments')->result();
		foreach ($jwb as $jwbn) {
	?>
	<div class="each_jawaban " id="each_jawaban__2845" >
		<div class="col-15 vote-wrapper">
			<div class="col-30">
				<div class="vote-jawaban" id="vote_jawaban__1" data-reply-id="2845">
					<img src="<?= base_url('assets/asset/icon/vote-up.png') ?>" alt="icon vote up" />
				</div>
				<div class="vote-jawaban" id="vote_jawaban__0" data-reply-id="2845">
					<img src="<?= base_url('assets/asset/icon/vote-down.png') ?>" alt="icon vote down" />
				</div>
			</div>

			<div class="col-30" id="total-vote-jawaban"> 0 </div>
			<div class="clear"></div>
			<div id="flash-vote-jawaban"></div>
		</div>

		<div class="col-85">
			<div id="isi_jawaban2845" class="isi_jawaban">
				<?= $jwbn->comment ?>
			</div>

			<!-- <script type="text/javascript">
				 var replyId = "<?= $jwb->id_comment ?>";
				 var strs = $('#isi_jawaban'+replyId).html();
				 var regexs = /(?:\s|^)(?:@(?!\d+(?:\s|$)))(\w+)(?=\s|$)/gi;

				 function replacers(hash){
					 var replacementString = $.trim(hash);
					 var replacementStringNoAt = replacementString.substring(1);
					 return ' <a style="color:blue" href="/user/profile/'+ replacementStringNoAt +'">' + replacementString + '</a>';
				 }
				 $('#isi_jawaban'+replyId).html( strs.replace( regexs , replacers ) );
			</script> -->

			<div class="col-60">
				<?php
					$this->db->where('id_users', $jwbn->id_user);
					$daser = $this->db->get('users')->result();
					foreach ($daser as $key) {
				?>
				<div class="jawaban_by_foto">
					<img src="<?= base_url('assets/photo/fotoprofile/'.$key->foto) ?>" width=50 />
				</div>
				<div class="jawaban_by">
					<a href="<?=site_url('user');?>?id=<?=$jwbn->id_user;?>">@<?= $key->username ?> </a>
				</div>
				<?php } ?>
				<div class="waktu_jawaban">
					<?php
						$tgl = explode(' ', $jwbn->time);
						$date = explode('-', $tgl[0]);
						echo $date[2]."-".$date[1]."-".$date[0]." ".$tgl[1];
					?>
				</div>
			</div>
		</div>

		<div class="clear"></div>
	</div>
	<?php } ?>
	<h4>Jawab</h4>
	<form action="<?= site_url('home/comment') ?>?forum=<?= $this->uri->segment(3) ?>" method="POST">
		<textarea class="form-control" name="komentar" rows="3" style="resize: none;" required=""></textarea>
		<button class="btn btn-default pull-right" type="submit" value="Jawab!" style="margin-top:2%;">Jawab!</button>
	</form>
</div>