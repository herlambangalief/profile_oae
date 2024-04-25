<?php 
  require '../../koneksi.php';
  $id=$_GET['id'];
  $sql="SELECT * FROM `messages` WHERE id=$id";
  $query=mysqli_query($koneksi,$sql);
  $message=mysqli_fetch_array($query);

  if ($message['status']==0) {
  	$sql_update="UPDATE `messages` SET  `status` = 1 WHERE `id` = '$id'";
      mysqli_query($koneksi,$sql_update);
  }
?>

<html lang="en">

<head>
  <?php include '../../component/header.php'; ?>
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  

  <div class="content-wrapper">
    <div class="container-fluid">

      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Message</li>
      </ol>
    <div class="box_general padding_bottom">
      <div class="row">
      	<p class="col-md-12">
      		<a href="index.php" class="btn btn-secondary col-md-2"><i class="fa fa-sign-in"></i> Back</a>
    	</p>
      </div>
      <div class="row"> 
        <div class="col-md-12 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Fullname</label>
                <input type="" readonly class="form-control" value="<?php echo $message['full_name'] ;?> ">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Subject</label>
                <input type="" readonly class="form-control" value="<?php echo $message['subject'] ;?> ">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Contact</label>
            <input type="" readonly class="form-control" value="<?php echo $message['contact'] ;?> ">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Email</label>
            <input type="" readonly class="form-control"  value="<?php echo $message['email'] ;?> ">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Message</label>
            <textarea cols="30" rows="50" class="form-control" readonly>
               <?php echo $message['message'] ;?>
            </textarea>
          </div>
        </div>
      </div>
    </div>
    
    <!-- /box_general-->
    
    </div>
    <!-- /.container-fluid-->
    </div>

    
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <!-- Bootstrap core JavaScript-->
    <?php include '../../component/footer.php' ?>
	
</body>
</html>

