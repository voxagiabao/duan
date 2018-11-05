<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Dang Nhap</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>		
<div class="container-fluid">
		<div class="container-fluid col-sm-4 bg-warning mt-2">
		<?php echo form_open('Page/process'); ?>
		<h3 class="text-center"><b>ADMINISTRATOR LOGIN</b></h3>

		<div class="input-group">
			<input id="username" type="text" class="form-control" name="username" placeholder="Username...">
		</div>
		<div class="input-group">
			<input id="password" type="password" class="form-control" name="password" placeholder="Password...">
		</div>
		
		<div class="row mt-2 ml-2">
			<input type="submit" name="submit" value="Login" class="btn btn-primary">
			<input type="reset" name="reset" value="Reset" class="btn btn-danger ml-2">
			<i class="ml-2 mt-2"><a href="">Quên mật khẩu ?</a></i>
			<?php 
					if(isset($loi))
					{
						echo $loi;
					} 
				?>
		</div>
		<?php echo form_close(); ?>

		<div class="row"><p></p></div>
	
</div>
<img src="../image/login.jpg" alt="background" class="img-fluid mr-4" style="margin-top: -200px;">
</div>

</body>
</html>