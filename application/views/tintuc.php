<style>
	a.xemthem:hover{
		background-color: red;
	}

</style>
<div class="container" style="background-color: rgb(242, 242, 242);">
		<h4>TIN ĐĂNG BĐS MỚI NHẤT</h4>

	
	<div class="panel-body">
		<?php foreach ($tintuc as $value): ?>
			
		<div class="col-xs-12">
			<div class="row">
				<img style="height: 70px;width: 100px;" class="img-fluid" src="<?= $value->hinhanh ?>" alt="tintuc1">
				<div class="col-md-8"> 
					<a style="text-decoration: none; color:black;" href=""><?= $value->tieude ?></a> <br> <?= $value->ngaydang ?>
				</div>
				<div class="col-md-2 text-right"><?= $value->giaca ?></div>
			</div>
		</div><hr>
		<?php endforeach ?>

	</div>
		<a class="xemthem" style="text-decoration: none; color:black;" href="">Xem thêm</a>
		
</div>
