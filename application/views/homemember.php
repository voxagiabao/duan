<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dự Án Nhà Đất</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="../style/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>
<body>
	<?php $this->load->view('header'); ?>
	<?php $this->load->view('menu');  ?>	
	<?php $this->load->view('slide'); ?>
	<?php $this->load->view('duanhot', Array('duanhot'=>$data['mangketqua'])) ?>

	<?php $this->load->view('timkiemduan')?>
	
	<?php $this->load->view('doanhnghieptieubieu')?>
	
	<?php $this->load->view('tintuc', Array('tintuc'=>$data['mangtintuc'])) ?>

<!-- 	<div class="socials-share text-right">
    	<a class="bg-facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/Nh%C3%A0-%C4%90%E1%BA%A5t-24h-161404224811634/?modal=admin_todo_tour" target="_blank"><span class="fa fa-facebook"></span> Share</a>
    	<a class="bg-email" href="https://mail.google.com/mail/u/0/?view=cm&fs=1&to&su=guibantoi&body=https://mail.google.com/mail/u/0/#inbox" target="_blank"><span class="fa fa-envelope"></span> Gmail</a>
	</div> -->
	
</body>
</html>