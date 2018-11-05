<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Thêm tin tức</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>
	<h2 class="text-center">Thêm mới tin tức</h2>
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
			<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'Admin/addtintuc' ?>">
				<div class="form-group row">
					<label for="hinhanh" class="col-sm-4 form-control-label text-right">Hình ảnh</label>
					<div class="col-sm-6">
						<input name="hinhanh" type="file" class="form-control" id="hinhanh" placeholder="Upload ảnh">
					</div>
				</div>
				<div class="form-group row">
					<label for="tieude" class="col-sm-4 form-control-label text-right">Tiêu đề: </label>
					<div class="col-sm-8">
						<input name="tieude" type="text" class="form-control" id="tieude" placeholder="Tiêu đề...">
					</div>
				</div>
				<div class="form-group row">
					<label for="giaca" class="col-sm-4 form-control-label text-right">Giá cả: </label>
					<div class="col-sm-3">
						<input name="giaca" type="text" class="form-control" id="giaca" placeholder="Giá cả...">
					</div>
				</div>
				<div class="form-group row">
					<label for="noidung" class="col-sm-4 form-control-label text-right">Nội dung: </label>
					
					<textarea name="noidung" id="noidung" cols="50" rows="10"></textarea>
				</div>
				<div class="form-group row">
					<label for="ngaydang" class="col-sm-4 form-control-label text-right">Ngày đăng: </label>
					<div class="col-sm-3">
						<input name="ngaydang" type="date" class="form-control" id="ngaydang" placeholder="Ngày đăng...">
					</div>
				</div>
				<div class="container text-center">
					
						<div class="form-group row">
							<div class="col-sm-offset-2 col-sm-10">
								<button type="submit" class="nutxulyajax btn btn-outline-success">Thêm mới</button>
								<button type="reset" class="btn btn-outline-danger">Nhập lại</button>
							</div>
						</div>
						
				</div>		
			</form>

		</div>			
	</div>
</body>
</html>