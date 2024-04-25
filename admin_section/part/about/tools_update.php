<?php 
  include '../../koneksi.php';
  $id=$_GET['id'];

  $sql="SELECT * FROM tools WHERE id=$id";
  $query=mysqli_query($koneksi,$sql);
  $data=mysqli_fetch_array($query);
  
?>

<html lang="en">
<head>
  
	<?php include '../../component/header.php'; ?>

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
        <li class="breadcrumb-item active">Edit tools</li>
      </ol>
      <form action="../../component/handler.php?id=<?php echo $id; ?>&image=<?php echo $data['tools_image']; ?>" method="post" enctype="multipart/form-data">
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-address-card"></i>Edit Tools Data</h2>
      </div>
      <div class="row"> 
        <div class="col-md-12 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Tools Image</label>
                <input type="file" name="tools_image" class="col-md-12 form-control" onchange="readURL(this);" />
              </div>
            </div>
            <div class="col-md-6">
                <img class="col-md-6" id="blah" src="../../uploads/<?php echo $data['tools_image']; ?>" alt="your image" />
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Tools Name</label>
                <input type="text" class="form-control" required name="tools_name" value="<?php echo $data['tools_name']; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- /box_general-->
    <p>
      <input type="submit" name="edit_tools" class="btn btn-primary" value="Change">
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
	
</body>
</html>
