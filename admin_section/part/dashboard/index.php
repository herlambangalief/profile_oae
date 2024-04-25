<?php 
  require '../../koneksi.php';
  require '../../component/function.php';
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
      </ol>
	  <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-eye"></i>
              </div>
              <div class="mr-5"><h5>Total View Today : <?php echo $total_v ?></h5></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-envelope"></i>
              </div>
				      <div class="mr-5"><h5>Unread Message : <?php echo $count; ?></h5></div>
            </div>    
          </div>
        </div>
        <input type="" hidden id="jumlah" name="" value="<?php  
                while ($data_view_total=mysqli_fetch_array($query_view_total)) {
                  echo $data_view_total['view_total'].",";
                }
                ?>">
        <input type="" hidden id="tanggal" name="" value="<?php  
                while ($data_view_md=mysqli_fetch_array($query_view_md)) {
                  echo $data_view_md['view_md'].",";
                }
                ?>">
		</div>
		<!-- /cards -->
		<h2></h2>
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-bar-chart"></i>Statistik Pengunjung</h2>
			</div>
		 <canvas id="myAreaChart" width="100%" height="30" style="margin:45px 0 15px 0;"></canvas>
		</div>
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
    <!-- Bootstrap core JavaScript-->
    
	
</body>
</html>
