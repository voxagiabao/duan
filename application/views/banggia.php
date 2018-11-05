<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bảng giá</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
	<style>
		thead,tr{
			border-bottom: 1px solid #0000003b;
		}
		table tr:last-child{
			border-bottom:none;
		}
	</style>
<body>
	<?php include 'header.php'; ?>
	<div class="container-fluid" style="background-color: rgb(245, 245, 245);">
		<div class="container"><br>
			<h2><img style="height: 70px;width: 70px;" src="../image/tindang.png" alt="banggia"> Bảng giá đăng tin</h2> <br>
		
		<table>
			<thead >
				<th class="bold-style border-0" width="40%">Loại tin </th>
				<th class="bold-style" width="40%">Mô tả </th>
				<th class="bold-style" width="20%">Giá (VND) 15 ngày </th>
			</thead>
			<tbody>

				<tr >
					<td>
						<span>
						<h4>Basic</h4>
						Đăng tin miễn phí để trải nghiệm dịch vụ</span>
					</td>

					<td>
						<span>
						• Không có hình đại diện <br>
						• 1 hình ảnh minh họa bất động sản tại trang chi tiết </span>

					</td>
					<td class="text-center">
						<b>Miễn phí</b>
					</td>

				</tr>
				
				<tr>
					<td>
						<span>
						<h4>Express</h4>
						Nổi bật & dễ tìm kiếm so với tin Basic. <br>
						Vị trí hiển thị nằm trên tin Basic, dưới tin Premium. 
						<br>Duyệt tin nhanh</span>
					</td>
					<td>
						• Không có hình đại diện <br>
						• Hiển thị tới 20 hình ảnh minh họa tại trang chi tiết 
					</td>
					<td class="text-center">
						<b>50.000</b>
					</td>

				</tr>
				
				<tr>
					<td>
						<span>
						<h4>Premium</h4>
						Nổi bật & dễ tìm kiếm so với tin Express.
						</span>
					</td>
					<td>
						• Không có hình đại diện <br>
						• Hiển thị tới 20 hình ảnh minh họa tại trang chi tiết 
					</td>
					<td class="text-center">
						<b>110.000</b>
					</td>
				</tr>
				<tr>
					<td>
						<span>
						<h4>Top</h4>
						Không trôi khi có tin đăng thường mới.
						</span>
					</td>
					<td>
						• Xuất hiện tại vị trí đầu trang search <br>
						• Có hình đại diện & hình ảnh minh họa bất động sản 
					</td>
					<td class="text-center">
						<b>550.000</b>
					</td>
				</tr>
				<tr>
					<td>
						<span>
						<h4>Featured 1</h4>
						Thu hút 15 lần so với tin đăng thường.
						</span>
					</td>
					<td>
						• Có hình đại diện & hình ảnh minh họa bất động sản <br>
						• Đặt tại vị trí "Bất động sản nổi bật" đầu trang - chia sẻ 3
						• Áp dụng tại 5 categories: Nhà bán, Căn hộ bán, Nhà cho thuê, Căn hộ cho thuê, Đất bán.

					</td>
					<td class="text-center">
						<b>1.650.000</b>
					</td>
				</tr>
				<tr>
					<td>
						<span>
						<h4>Featured 2</h4>
						Thu hút 10 lần so với tin đăng thường.
						</span>
					</td>
					<td>
						• Có hình đại diện & hình ảnh minh họa bất động sản <br>
						• Đặt tại vị trí "Bất động sản nổi bật" đầu trang - chia sẻ 3
						• Áp dụng tại các categories còn lại ngoài Featured 1
					</td>
					<td class="text-center">
						<b>1.100.000</b>
					</td>
				</tr>
				<tr>
					<td>
						<span>
						<h4>VIP Home</h4>
						Nổi bật tại vị trí xuất hiện với độ thu hút cao nhất. <br>
						Tiếp cận người xem ngay tại trang chủ.
						</span>
					</td>
					<td>
						• Đặt tại Trang chủ <br>
						• Hình đại diện kích thước lớn hơn các loại tin khác 
						• Chia sẻ 3 - gồm 12 tin đăng
					</td>
					<td class="text-center">
						<b>2.640.000</b>
					</td>
				</tr>
				<tr>
					<td>
						<span>
						<h4>Hot listing</h4>
						Xuất hiện đầu danh sách, trên tất cả các trang tìm kiếm. <br>
						Không trôi, không bị thay thế bởi bất kì tin đăng nào khác trong suốt thời gian đăng tin.
						</span>
					</td>
					<td>
						• Vị trí đầu tiên - tất cả trang tìm kiếm <br>
						• Đầy đủ hình ảnh đại diện và hình ảnh minh họa bất động sản <br>
						•  Duy nhất, không chia sẻ <br>
						• Áp dụng theo danh mục và quận. 
					</td>
					<td class="text-center">
						<b>3.300.000</b>
					</td>
				</tr>
			
			</tbody>
		</table>
		</div> <br>
	</div>
	<?php include 'footer.php'; ?>
</body>
</html>