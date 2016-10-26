<div class="title_content">
<p><?php echo $title['title'] ?></p>
</div>

<?php 
$this->db->where('id_materi', $this->uri->segment(3));
$get = $this->db->get('materi');
foreach ($get->result() as $data) { ?>
<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Daftar Materi</div>

  <!-- Table -->
  <table class="table">
  <thead>
  <tr>
    <th>Nama File</th>
    <th>Ukuran File</th>
    <th>Download</th>
  </tr>
  </thead>
  <tbody>
  	<tr>
  		<td><?php echo $data->content; ?></td>
  		<td><?php echo $data->ukuranfile."KB";?></td>
  		<td><a href="<?php echo base_url('assets/file/filemateri/'.$data->content); ?>"> Buka File</a></td>
  	</tr>
  </tbody>
  </table>
</div>
<?php } ?>