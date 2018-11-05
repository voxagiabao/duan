<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit User</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    	<!-- Bootstrap core CSS -->
	  <!-- <link rel="stylesheet" href="../style/style.css"> -->
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	  <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  
</head>
<body>
	<!-- menu -->
	<nav>
      <div class="container-fluid text-white" style="background-color: rgb(193, 56, 56);">
        <div class="container">
          <div class="row" style="line-height: 40px;">
            <a style="text-decoration: none;" href="">AdminStrap</a>&nbsp;
            
            <a  style="text-decoration: none;" href="http://127.0.0.1:4001/duan/admin/index">Trang Chủ</a>&nbsp;
            <a style="text-decoration: none;" href="pages.html">Slide</a>&nbsp;
            <a style="text-decoration: none;" href="pages.html">Dự án</a>&nbsp;
            <a style="text-decoration: none;" href="posts.html">Tin tức</a>&nbsp;
            <a style="text-decoration: none;" href="users.html">Người dùng</a>&nbsp;
            <div class="col-xl-6"></div>
            <a class="text-white" style="text-decoration: none;" href="#">Welcome, <?php echo $this->session->userdata('username');  ?></a>&nbsp;
            <a class="text-white" style="text-decoration: none;" href="http://127.0.0.1:4001/duan/Page/index">Logout</a>
          </div>
        </div>
      </div>
    </nav>
	<!-- header -->
	<header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> <?php echo $this->session->userdata('username');  ?> <small>Manage Site Users</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" class="btn btn-primary text-white" data-toggle="modal" data-target="#addPage">Thêm Slide</a></li>
                <li><a type="button" class="btn btn-primary" href="pages.html">Thêm tin tức</a></li>
                <li><a type="button" class="btn btn-primary" href="#">Thêm Người dùng</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
	<!-- section -->
    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="http://127.0.0.1:4001/duan/admin/index">Dashboard</a></li>&nbsp;
          <li class="active">Users</li>
        </ol>
      </div>
    </section>
	<div class="container-fluid">
		<h2 class="text-center">Edit User</h2>
		<div class="row">
			<div class="col-sm-5"></div>
			<form method="post" enctype="multidata/form-data">
			
	        <div class="row">
	        	<div class="col-sm-3"><b>Username:</b></div>
				<div class="col-lg-7">
					<div class="input-group">
						
						<input value="<?=$dulieukq[0]['username']?>" type="text" class="form-control" placeholder="Username...">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3"><b>Password:</b></div>
				<div class="col-lg-7">
					<div class="input-group">
						
						<input value="<?=$dulieukq[0]['password']?>" type="text" class="form-control" placeholder="Password...">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3"><b>Email:</b></div>
				<div class="col-lg-7">
					<div class="input-group">
						
						<input value="<?=$dulieukq[0]['email']?>" type="text" class="form-control" placeholder="Email...">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3"><b>Level:</b></div>
				<div class="col-lg-7">
					<div class="input-group">
						
						<input value="<?=$dulieukq[0]['level']?>" type="text" class="form-control" placeholder="Level...">
					</div>
				</div>
			</div>
			
		</div> <br>
	
		<div class="row"><div class="col-md-6"></div>

		<button type="submit" class="btn btn-outline-success text-center">Save</button>
		
		</form>

		</div>
	</div>
	
	
	
	
	
</body>
</html>