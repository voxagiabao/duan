<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tìm kiếm</title>
	<link rel="stylesheet" href="../style/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>
<body>
	<?php include 'header.php'; ?>
	<div class="container">
		<hr>
		<div class="card-deck-wrapper">
			<h4 class="text-danger">DỰ ÁN HOT</h4>
			<div class="row">
				<!-- <?php 
				echo "<pre>";
				print_r($mangdl);
				echo "</pre>";
				?> -->
			<?php foreach ($mangdl as $value): ?>
			<div class="col-sm-3">
				<div class="card border-0" style="position: relative;">
					<a href=""><img style="height: 185px;" class="card-img-top 1" src="<?php echo $value->anhavatar; ?>" alt="Card image cap"></a>
					<div class="card-block">
						<a style="text-decoration: none;" href="" class="text-primary"><h4 class="card-title"><?php echo $value->ten_duan; ?></h4></a>
						<p class="card-text"><small class="text-danger">Loại dự án: <?php echo $value->loai_duan; ?></small><br>
						<p class="card-text"><small class="text-danger">Diện tích: <?php echo $value->dientich; ?></small><br>
						<small class="text-danger">Giá: <?php echo $value->gia; ?></small></p>
						<p class="card-text"> <?php echo $value->mieuta; ?> </p>
					</div>
				</div>

							
			</div>
			<?php endforeach ?>
			</div>
			<br>		
			<h4 class="text-danger">BẤT ĐỘNG SẢN NỔI BẬT</h4>
				
		</div>
	</div>
	
</body>
</html>