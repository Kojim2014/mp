<div class="title_content">
<p><?php echo $title['title'] ?></p>
</div>

<?php 
$this->db->where('id_materi', $this->uri->segment(3));
$get = $this->db->get('materi');
foreach ($get->result() as $data) { ?>
             <h3> <?php echo $data->content; ?></h3>
<?php } ?>