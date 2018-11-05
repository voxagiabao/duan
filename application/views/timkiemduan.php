<div class="container">
		<div class="row" style="position: relative;">
			<div class="col-sm-9 d-inline-block">
				<img style="margin-left: -15px;" class="img-fluid" src="../image/1.gif" alt="anhmaudep">
			</div>
	
			<div class="card" style="position:relative;width: 24%;background-color: rgb(242, 242, 242);">
				<form action="<?php echo base_url(); ?>member/timkiem" class="d-inline-block" style="margin-left: 5px;">
					<p class="text-center font-italic font-weight-bold">Tìm kiếm dự án</p>

					<input style="position: absolute; width: 90%;" name="ten_duan" class="rounded border-light" type="text" placeholder=" Nhập tên dự án">
					
					 <br>
					<hr>
					<div class="form-group">
						<select class="form-control" id="sel2" name="chon_loaiduan">
							<option value="1">--Chọn loại dự án--</option>
							<option value="NHÀ PHỐ">NHÀ PHỐ</option>
							<option value="BIỆT THƯ">BIỆT THƯ</option>
							<option value="NHÀ ĐẤT CHÍNH CHỦ">NHÀ ĐẤT CHÍNH CHỦ</option>
							<option value="CHUNG CƯ">CHUNG CƯ</option>
						</select>
					</div>
					<div class="form-group">
						<select class="form-control" id="sel3" name="chon_gia">
							<option value="0">--Giá--</option>
							<option value="1 TỶ">1 TỶ</option>
							<option value="2 TỶ">2 TỶ</option>
							<option value="3 TỶ">3 TỶ</option>
							<option value="4 TỶ">4 TỶ</option>
						</select>
					</div><br>
					<input type="submit" name="timkiem" value="Search" class="btn btn-danger w-100">
				</form>
			</div>
		</div> 
	</div>

	<br>