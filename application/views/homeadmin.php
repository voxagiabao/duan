
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap core CSS -->
  <!-- <link rel="stylesheet" href="../style/style.css"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  
  </head>
  <style>
  a{
    color:white;
  }
    a:hover{
      background-color: rgb(234, 105, 105);
    }
  </style>
  <body>
    
    <!-- <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="row">
            <a class="navbar-brand" href="#">AdminStrap</a>
             <ul class="nav navbar-nav">
            <li><a href="http://127.0.0.1:4001/duan/admin/index">Quản Lý Chung</a></li>
            <li><a href="pages.html">Dự án</a></li>
            <li><a href="posts.html">Tin tức</a></li>
            <li class="active"><a href="users.html">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, <?php echo $this->session->userdata('username');  ?></a></li>
            <li><a href="http://127.0.0.1:4001/duan/Page/index">Logout</a></li>
          </ul>
          </div>
          
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <div class="row">
            
         
          </div>
        </div>

      </div>
    </nav> -->
    <nav>
      <div class="container-fluid text-white" style="background-color: rgb(193, 56, 56);">
        <div class="container">
          <div class="row" style="line-height: 40px;">
            <a style="text-decoration: none;" href="">AdminStrap</a>&nbsp;
            
            <a  style="text-decoration: none;" href="http://127.0.0.1:4001/duan/admin/index">Trang Chủ</a>&nbsp;
            <a style="text-decoration: none;" href="pages.html">Slide</a>&nbsp;
            <a style="text-decoration: none;" href="pages.html">Dự án</a>&nbsp;
            <a style="text-decoration: none;" href="posts.html">Tin tức</a>&nbsp;
            
            <div class="col-xl-6"></div>
            <a class="text-white" style="text-decoration: none;" href="#">Welcome, <?php echo $this->session->userdata('username');  ?></a>&nbsp;
            <a class="text-white" style="text-decoration: none;" href="http://127.0.0.1:4001/duan/Page/index">Logout</a>
          </div>
        </div>
      </div>
    </nav>

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
                <li><a type="button" class="btn btn-primary" href="#">Thêm tin tức</a></li>
                <li><a type="button" class="btn btn-primary" href="#">Thêm Người dùng</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="http://127.0.0.1:4001/duan/admin/index">Dashboard</a></li>&nbsp;
          <li class="active">Users</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">12</span></a>
              <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge">33</span></a>
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">3</span></a>
            </div>

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Users</h3>
              </div>
              <div class="panel-body">
               <!--  <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Users...">
                      </div>
                </div> -->
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th>Tool</th>
                        <!-- <th></th> -->
                      </tr>
                      
                      <?php foreach ($manguser as $value): ?>
                       
                        <tr>
                          <td><?= $value->username ?></td>
                          <td><?= $value->password ?></td>
                          <td><?= $value->email ?></td>
                          <td><?= $value->level ?></td>
                          <td><a class="btn btn-warning" href="http://127.0.0.1:4001/duan/admin/edituser/<?php echo $value->id; ?>">Edit</a> <a class="btn btn-danger" href="http://127.0.0.1:4001/duan/admin/deleteUser/<?php echo $value->id; ?>">Delete</a></td>
                        </tr>
                      <?php endforeach ?>
                     
                     
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>
    <br>
    <div class="container">
      <footer id="footer" style="background-color: rgb(66, 44, 44)">
        <p style="color: white;">Copyright VÕ BẢO, &copy; 2018</p>
      </footer>
    </div>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
   
  </body>
</html>
