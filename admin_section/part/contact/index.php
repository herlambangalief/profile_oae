<?php 
  require '../../koneksi.php';
  $sql="SELECT * FROM contacts";
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
        <li class="breadcrumb-item active">Contact</li>
      </ol>
      <form action="../../component/handler.php" method="post" enctype="multipart/form-data">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-phone "></i>Contact</h2>
			</div>
      <div class="row">
        <div class="col-md-12 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label><b>Mobile</b></label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-mobile"></i>
                  </div>
                  <input class="form-control" name="mobile" type="text" value="<?php echo $data['mobile'] ?>" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label><b>Facebook Link</b></label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-facebook"></i>
                  </div>
                  <input class="form-control" name="facebook" type="text" value="<?php echo $data['facebook'] ?>" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label><b>Email</b></label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-envelope"></i>
                  </div>
                  <input class="form-control" name="email" type="text" value="<?php echo $data['email'] ?>" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label><b>Twitter Link</b></label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-twitter"></i>
                  </div>
                  <input class="form-control" name="twitter" type="text" value="<?php echo $data['twitter'] ?>" />
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label><b>Linkedin Link</b></label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-linkedin"></i>
                  </div>
                  <input class="form-control" name="linkedin" type="text" value="<?php echo $data['linkin'] ?>" />
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label><b>Address 1</b></label>
                <textarea required class="form-control" rows="5" name="address_1"><?php echo $data['address_1'];?></textarea>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label><b>Address 2</b></label>
                <textarea required class="form-control" rows="5" name="address_2"><?php echo $data['address_2'];?></textarea>
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>
      </div>
		</div>
		
		<!-- /box_general-->
		<p><input type="submit" name="edit_contact" class="btn btn-primary btn-lg" value="Change"></p>
		</form>
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
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
    <?php include '../../component/footer.php' ?>
    <script type="text/javascript">
      bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
    

	
</body>
</html>
