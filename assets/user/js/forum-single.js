$( document ).ready(function() {
		/*----------------- mark as answered -------------*/
		$(document).on('click', '.check_jawaban', function(){
			var self = $(this);
			var id_komen = self.attr("id");
			var topicId = self.attr("data-id");

			//nomer topic
			var real_id     = id_komen.split('__');
			var nomer_komen = real_id[1];

			$.ajax({
				type: "POST",
				url : "/user/ajax_req/forum_ajax.php",
				data: {
								topic_id: topicId,
								comment_id: nomer_komen,
								aktivitas : "pilih-jawaban"
							},
				success: function(data){
					console.log(data);
									switch(data){
									  case "0":
								      $('.jawaban_terpilih').removeClass('jawaban_terpilih');
											self.addClass("jawaban_terpilih");
								      break;
									  case "1":
									    self.addClass("jawaban_terpilih");
									    break;
									  case "2":
									    self.removeClass("jawaban_terpilih");
									    break;
									}
								}
			}); //end ajax

			return false;
		});

		/*-----------------------------------------------*/
		/*----------------- vote pertanyaan -------------*/
		/*-----------------------------------------------*/
		$(document).on('click', '.vote-pertanyaan', function(){
      console.log('test');
			var self = $(this);
			var id_vote_pertanyaan = self.attr("id");
			var topicId = self.attr("data-id");

			//nilai vote 0==down , 1==up
			var nilai_vote  = id_vote_pertanyaan.split('__');
			var nilai_vote  = nilai_vote[1];

			//post ke backend
			$.ajax({
				type: "POST",
				url : "/user/ajax_req/forum_ajax.php",
				data: {
								topic_id: topicId,
								nilai: nilai_vote,
								aktivitas : "vote-pertanyaan"
							},
				success: function(data){
					switch(data){
						case "-3":
							flash_vote('Anda belum Login');
							break;
						case "-2":
							flash_vote('Tidak bisa vote pertanyaan sendiri');
							break;
						case "-1":
							flash_vote('Anda sudah vote pertanyaan ini');
							break;
						case "0":
							add_vote('--');
							break;
						case "00":
							add_vote('++');
							break;
						case "1":
							add_vote('-');
							break;
						case "2":
							add_vote('+');
							break;
					}

					function flash_vote($flash_param){
							$('#flash-vote').text($flash_param).delay(2000).fadeOut()
					}

					function add_vote($param){
						var voteNow = parseInt($('#total-vote-pertanyaan').text());
						switch ($param) {
							case "-":
								voteNow--;
								$('#vote_pertanyaan__0 img').attr("src","/asset/icon/vote-down-green.png");
								break;
							case "--":
								voteNow = voteNow - 2;
								$('#vote_pertanyaan__1 img').attr("src","/asset/icon/vote-up.png");
								$('#vote_pertanyaan__0 img').attr("src","/asset/icon/vote-down-green.png");
								break;
							case "+":
								voteNow++;
								$('#vote_pertanyaan__1 img').attr("src","/asset/icon/vote-up-green.png");
								break;
							case "++":
								voteNow = voteNow + 2;
								$('#vote_pertanyaan__0 img').attr("src","/asset/icon/vote-down.png");
								$('#vote_pertanyaan__1 img').attr("src","/asset/icon/vote-up-green.png");
								break;
						}
						$('#total-vote-pertanyaan').text(voteNow);
					}

				}
			});

			return false;
		});//end vote pertanyaan

		/*-----------------------------------------------*/
		/*----------------- vote jawaban ---------------*/
		/*-----------------------------------------------*/
		$(document).on('click', '.vote-jawaban', function(){
			var self = $(this);
			var id_vote_jawaban = self.attr("id");
			var data_reply_id = self.attr("data-reply-id");

			var parent_el = "each_jawaban__" + data_reply_id;

			//nilai vote 0==down , 1==up
			var nilai_vote  = id_vote_jawaban.split('__');
			var nilai_vote  = nilai_vote[1];

			//post ke backend
			$.ajax({
				type: "POST",
				url : "/user/ajax_req/forum_ajax.php",
				data: {
								reply_id: data_reply_id,
								nilai: nilai_vote,
								aktivitas : "vote-jawaban"
							},
				success: function(data){
					console.log("hasil " + data);
					switch(data){
						case "-3":
							flash_vote('Anda belum Login');
							break;
						case "-2":
							flash_vote('Tidak bisa vote jawaban sendiri');
							break;
						case "-1":
							flash_vote('Anda sudah vote jawaban ini');
							break;
						case "0":
							add_vote('--');
							break;
						case "00":
							add_vote('++');
							break;
						case "1":
							add_vote('-');
							break;
						case "2":
							add_vote('+');
							break;
					}

					function flash_vote($flash_param){
							$('#'+ parent_el +' #flash-vote-jawaban').text($flash_param).delay(2000).fadeOut();
					}

					function add_vote($param){
						var voteNow = parseInt($('#'+ parent_el +' #total-vote-jawaban').text());
						switch ($param) {
							case "-":
								voteNow--;
								$('#'+ parent_el +' #vote_jawaban__0 img').attr("src","/asset/icon/vote-down-green.png");
								break;
							case "--":
								voteNow = voteNow - 2;
								$('#'+ parent_el +' #vote_jawaban__1 img').attr("src","/asset/icon/vote-up.png");
								$('#'+ parent_el +' #vote_jawaban__0 img').attr("src","/asset/icon/vote-down-green.png");
								break;
							case "+":
								voteNow++;
								$('#'+ parent_el +' #vote_jawaban__1 img').attr("src","/asset/icon/vote-up-green.png");
								break;
							case "++":
								voteNow = voteNow + 2;
								$('#'+ parent_el +' #vote_jawaban__0 img').attr("src","/asset/icon/vote-down.png");
								$('#'+ parent_el +' #vote_jawaban__1 img').attr("src","/asset/icon/vote-up-green.png");
								break;
						}
						$('#'+ parent_el +' #total-vote-jawaban').text(voteNow);
					}

				}
			});

			return false;
		});//end vote jawaban
    
});
