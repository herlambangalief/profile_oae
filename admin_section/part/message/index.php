<?php 
  require '../../koneksi.php';
  $sql="SELECT * FROM `messages` order by unix_timestamp(`date_created`) desc";
  $query=mysqli_query($koneksi,$sql);
  

?>

<html lang="en">

<head>
  <?php include '../../component/header.php'; ?>
</head>

<body class="fixed-nav sticky-footer" id="page-top">
  <!-- Navigation-->
  

  <!-- /Navigation-->
  <div class="content-wrapper" id="display_account">
    <div class="container-fluid" >
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Message</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div style="float: left;"><h4><i class="fa fa-envelope"></i> Message</h4></div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th class="col-md-2">Date Time</th>
                  <th>From</th>
                  <th>Message</th>
                  <th class="col-md-1">Status</th>
                  <th class="col-md-2">Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Date Time</th>
                  <th>From</th>
                  <th>Message</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </tfoot>
              <tbody>
                <?php $no=0; 
                while ($data=mysqli_fetch_array($query)) {
                  $no++;
                    $id=$data['id'];
                ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><small><?php echo date("M d, Y h:i A",strtotime($data['date_created'])) ?></small></td>
                  <td><?php echo ucwords($data['full_name']) ?></td>
                  <td>
                  	<small class=""><b>Subject:</b> <?php echo $data['subject'] ?></small><br>
					<small class="truncate"><b>Message:</b><?php echo $data['message'] ?></small>
                  </td>
                  <td >
                  	<?php if($data['status'] == 0): ?>
						<span class="badge badge-primary badge-status">New</span>
					<?php else: ?>
						<span class="badge badge-success badge-status">Read</span>
					<?php endif; ?>
                  </td>
                  <td>
                    <form action="../../component/handler.php?id=<?php echo $data['id'] ?>" method="post" enctype="multipart/form-data">
                      <a href="message_view.php?id=<?php echo $data['id'] ?>" class="btn btn-primary  btn-flat btn-md text-white"><i class="fa fa-eye"></i>
                      </a>
                      <button type="submit" name="delete_message" class="btn btn-danger  btn-flat btn-md text-white">
                          <i class="fa fa-trash"></i>
                        </button>
                    </form>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
	  <!-- /tables-->
	  </div>
	  <!-- /container-fluid-->
   	</div>

    <?php include '../../component/footer.php' ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
	
</body>
</html>

