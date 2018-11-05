<div class="container">
		<hr>
		<div class="card-deck-wrapper">
			<h4 class="text-danger">DỰ ÁN HOT</h4>
			<div class="row">

			<?php foreach ($duanhot as $value): ?>
			<div class="col-sm-3">
				<div class="card border-0" style="position: relative;">
					<a href=""><img style="height: 185px;" class="card-img-top 1" src="<?= $value->anhavatar ?>" alt="Card image cap"></a>
					<div class="card-block">
						<a style="text-decoration: none;" href="http://127.0.0.1:4001/duan/member/<?php echo $value->url_duan; ?>" class="text-primary"><h4 class="card-title"><?= $value->ten_duan ?></h4></a>
						<p class="card-text"><small class="text-danger">Loại dự án: <?= $value->loai_duan ?></small><br>
						<p class="card-text"><small class="text-danger">Diện tích: <?= $value->dientich ?></small><br>
						<small class="text-danger">Giá: <?= $value->gia ?></small></p>
						<p class="card-text"> <?= $value->mieuta ?> </p>
					</div>
				</div>			
			</div>
			<?php endforeach ?>
			</div>
			<a href="http://127.0.0.1:4001/duan/member/xemthem" target="
			_blank">Xem thêm</a>
			<br>		
			<h4 class="text-danger">BẤT ĐỘNG SẢN NỔI BẬT</h4>
				
		</div>
	</div>
