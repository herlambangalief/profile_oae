<?php 
  include '../../koneksi.php';
  $id=$_GET['id'];

  $sql="SELECT * FROM services WHERE id=$id";
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
        <li class="breadcrumb-item active">Edit Services</li>
      </ol>
      <form action="../../component/handler.php?id=<?php echo $id;?>&image=<?php echo $data['file_path']; ?>" method="post" enctype="multipart/form-data">
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-address-card"></i>Edit Services Data</h2>
      </div>
      <div class="row"> 
        <div class="col-md-12 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="col-md-12 form-control" onchange="readURL(this);" />
              </div>
            </div>
            <div class="col-md-6">
                <img class="col-md-6" id="blah" src="../../uploads/<?php echo $data['file_path']; ?>" alt="your image" />
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Service Name</label>
                <input type="text" class="form-control" required name="service_name" value="<?php echo $data['title']; ?>">
              </div>
            </div>
          </div>
        </div>
      </div>
          <div class="row">
            <div class="col-md-12">
              <div class="form-group">
                <label>Service Description</label>
                <textarea name="description" style="width:100%; height: 300px;" ><?php echo $data['description']; ?></textarea>
              </div>
            </div>
          </div>
    </div>
    
    <!-- /box_general-->
    <p>
      <input type="submit" name="edit_service" class="btn btn-primary" value="Change">
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
    
    <!-- Bootstrap core JavaScript-->
	   <script type="text/javascript">
      bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
</body>
</html>
