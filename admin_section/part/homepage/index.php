<?php 
  require '../../koneksi.php';
  $sql="SELECT * FROM homepage";
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
        <li class="breadcrumb-item active">Homepage</li>
      </ol>
      <form action="../../component/handler.php?image1=<?php echo $data['banner_1']; ?>&image2=<?php echo $data['banner_2'] ?>&image3=<?php echo $data['qp_image'] ?>&image4=<?php echo $data['logo'] ?>" method="post" enctype="multipart/form-data">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-home "></i>Homepage</h2>
			</div>
      <h3>Website Name</h3>
      <center>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" name="website_name" class="form-control" value="<?php echo $data['website_name']; ?>" />
            </div>
          </div>
        </div>
      </center>
      <br>
      <h3>Website Logo</h3>
      <center>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <input type="file" name="logo" class="form-control" onchange="readURL4(this);" />
              <br><br>
              <img class="form-control" style="width:15%;" id="product" src="../../uploads/<?php echo $data['logo'] ?>" alt="your image" />
            </div>
          </div>
        </div>
      </center>
      <hr>
      <h3>Banner</h3>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
					<label>Banner 1</label>
						<input type="file" name="filez" class="form-control" class="col-md-12" onchange="readURL(this);" />
						<br><br><br>
						<img class="col-md-12" style="width:70%;" id="blah" src="../../uploads/<?php echo $data['banner_1'] ?>" alt="your image" />
				    </div>
				</div>
        <div class="col-md-6">
          <div class="form-group">
          <label>Banner 2</label>
            <input type="file" name="filed" class="form-control" class="col-md-12" onchange="readURL2(this);" />
            <br><br><br>
            <img class="col-md-12" style="width:70%;" id="blas" src="../../uploads/<?php echo $data['banner_2'] ?>" alt="your image" />
            </div>
        </div>
			</div><br>
      <div class="row">
        <div class="col-md-12 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Banner Text 1</label>
                <textarea class="form-control" rows="5" name="banner_text1"><?php echo $data['banner_text_1'];?></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Banner Text 2</label>
                <textarea class="form-control" rows="5" name="banner_text2"><?php echo $data['banner_text_2'];?></textarea>
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>
      </div>
      <hr>
      <h3>Quality Policy</h3>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label>Quality Policy</label>
						<textarea class="form-control" rows="15" name="quality_policy"><?php echo $data['quality_policy'];?></textarea>
					</div>
				</div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Quality Banner </label>
            <input type="file" name="filey" class="form-control" onchange="readURL3(this);" />
            <br><br><br>
            <img class="col-md-12" style="width:70%;" id="blaa" src="../../uploads/<?php echo $data['qp_image'] ?>" alt="your image" />
          </div>
        </div>
			</div>
		</div>
		
		<!-- /box_general-->
		<p><input type="submit" name="edit_homepage" class="btn btn-primary btn-lg" value="Change"></p>
		</form>
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <?php include '../../component/footer.php' ?>
    <script type="text/javascript">
      bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
    

	
</body>
</html>
