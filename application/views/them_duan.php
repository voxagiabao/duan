<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Them du an</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../style/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

</head>
<body>
	<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">
		<form method="post" enctype="multipart/form-data" action="<?php echo base_url().'member/add' ?>">
					<div class="form-group row">
						<label for="anhavatar" class="col-sm-4 form-control-label text-right">Ảnh đại diện</label>
						<div class="col-sm-6">
							<input name="anhavatar" type="file" class="form-control" id="anhavatar" placeholder="Upload ảnh">
						</div>
					</div>
					<div class="form-group row">
						<label for="ten" class="col-sm-4 form-control-label text-right">Tên du an</label>
						<div class="col-sm-8">
							<input name="ten_duan" type="text" class="form-control" id="ten_duan" placeholder="Tên du an">
						</div>
					</div>
					<div class="form-group row">
						<label for="tuoi" class="col-sm-4 form-control-label text-right">Loai du an: </label>
						<div class="col-sm-3">
							<input name="loai_duan" type="text" class="form-control" id="loai_duan" placeholder="Loai du an">
						</div>
					</div>
					<div class="form-group row">
						<label for="sodonhang" class="col-sm-4 form-control-label text-right">Dien tich: </label>
						<div class="col-sm-3">
							<input name="dientich" type="text" class="form-control" id="sodonhang" placeholder="Dien tich">
						</div>
					</div>
					<div class="form-group row">
						<label for="linkfb" class="col-sm-4 form-control-label text-right">gia: </label>
						<div class="col-sm-3">
							<input name="gia" type="text" class="form-control" id="gia" placeholder="Gia">
						</div>
					</div>
					<div class="form-group row">
						<label for="sdt" class="col-sm-4 form-control-label text-right">Vi tri: </label>
						<div class="col-sm-3">
							<textarea name="vitri" id="vitri" cols="40" rows="2"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<label for="sdt" class="col-sm-4 form-control-label text-right">Mieu ta: </label>
						<div class="col-sm-3">	
							<textarea name="mieuta" id="mieuta" cols="40" rows="6"></textarea>
						</div>
					</div>

					<div class="form-group row text-center">
						<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="nutxulyajax btn btn-outline-success">Thêm mới</button>
							<button type="reset" class="btn btn-outline-danger">Nhập lại</button>
						</div>
					</div>
					</form>

				</div>			
 		</div>
</body>
</html>