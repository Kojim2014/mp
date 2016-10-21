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
          $this->db->select('id_kelas');
          $followed_class = $this->db->get_where('gabung', ['id_user' => $this->session->userdata('uid')]);
         foreach ($query->result() as $data) { 
          $follow = "";$unfollow="none";
          if ($followed_class->num_rows() > 0) {
            foreach ($followed_class->result_array() as $key => $value) {
              if ($data->id_kelas == $value['id_kelas']) {
                $follow = 'none';
                $unfollow = '';
              }
            }
          }
          ?>
                <div class="each_playlist">
                  <a class="link_pl" href="<?php echo site_url("Home/mkelas/".$data->id_kelas); ?>">
                    <img style="widht:50%; height:35%;>" src="<?php echo base_url()."assets/photo/fotokelas/".$data->foto; ?>" 
                    alt=" Mengamankan website php"/>
                    <div class="playlist_nama"> <?php echo $data->nama_kelas; ?> </div>
                    <div class="playlist_desc"> <?php echo $data->deskripsi; ?> </div>
                  </a>
                  <div id="follow<?php echo $data->id_kelas; ?>" style="display: <?php echo $follow ?>">
                    <a href="#" class="follow" data-id="<?php echo $data->id_kelas; ?>">
                      <span class="follow_b"> Follow </span>
                    </a>
                  </div>
                  <div id="remove<?php echo $data->id_kelas; ?>" style="display: <?php echo $unfollow ?>">
                    <span class="youfollowing_b"> You Following </span>
                    <a href="" class="remove" data-id="<?php echo $data->id_kelas; ?>">
                      <span class="remove_b"> UnFollow </span>
                    </a>
                  </div>
              </div>

          <?php } ?>

</div>

<script type="text/javascript">
$(function() {
$(".follow*").click(function(){
var element = $(this);
var I = element.attr("data-id");
var info = 'id=' + I;

 $.ajax({
   type: "POST",
   url: "<?php echo site_url('Home/follow'); ?>",
   data: {id: I},
   success: function(){}
 });
 
    $("#follow"+I).hide();
       $("#remove"+I).show();
return false;

});
});



$(function() {
$(".remove*").click(function(){
var element = $(this);
var I = element.attr("data-id");
var info = 'id=' + I;

 $.ajax({
   type: "POST",
   url: "<?php echo site_url('Home/unfollow'); ?>",
   data: {id: I},
   success: function(){}
 });
 
    $("#remove"+I).hide();
       $("#follow"+I).show();
return false;

});
});

</script>