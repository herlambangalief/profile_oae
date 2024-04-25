<?php 
  include '../../koneksi.php';
  $id=$_GET['id'];

  $sql="SELECT * FROM users WHERE id=$id";
  $query=mysqli_query($koneksi,$sql);
  $data=mysqli_fetch_array($query);
  
?>

<html lang="en">
<head>
  
	<?php include '../../component/header.php'; ?>


  <script type="text/javascript">
	     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
   </script>
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  
  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Edit Account</li>
      </ol>
      <form action="../../component/handler.php?id=<?php echo $id;?>&image=<?php echo $data['avatar']; ?>&pass=<?php echo $data['password']; ?>" method="post" enctype="multipart/form-data">
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-address-card"></i>Edit Account Data</h2>
      </div>
      <div class="row"> 
        <div class="col-md-12 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Avatar</label>
                <input type="file" name="avatar" class="col-md-12 form-control" onchange="readURL(this);" />
              </div>
            </div>
            <div class="col-md-6">
                <img class="col-md-6" id="blah" src="../../uploads/<?php echo $data['avatar']; ?>" alt="your image" />
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>First Name</label>
                <input type="text" class="form-control" required name="firstname" value="<?php echo $data['firstname']; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Last Name</label>
                <input type="text" class="form-control" required name="lastname" value="<?php echo $data['lastname']; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Username</label>
                <input type="" required class="form-control" name="username" value="<?php echo $data['username']; ?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="password" placeholder="">
                <label style="font-size:80%;">Leave this blank if you dont want to change the password.</label>
              </div>
            </div>
          </div>
    </div>>
    
    <!-- /box_general-->
    <p>
      <input type="submit" name="edit_account" class="btn btn-primary" value="Change">
      <a href="index.php" class="btn btn-warning">Back</a>
    </p>

    </form>
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
    <?php include '../../component/footer.php' ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Bootstrap core JavaScript-->
	
</body>
</html>
