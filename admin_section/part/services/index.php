<?php 
  require '../../koneksi.php';
  $sql="SELECT * FROM services";
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
          <a href="">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Services</li>
      </ol>
		<!-- Example DataTables Card-->
      <div class="card mb-3">
        <div class="card-header">
          <div style="float: left;"><h4><i class="fa fa-wrench"></i> Services</h4></div>
          <div style="float: right;"><button onclick="add()" class="btn btn-sm btn-success">Add Services</button></div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>No</th>
                  <th class="col-md-2">Image</th>
                  <th class="col-md-2">Service Name</th>
                  <th class="col-md-4">Description</th>
                  <th class="col-md-2">Date Added</th>
                  <th class="col-md-2">Last Edited</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Image</th>
                  <th>Service Name</th>
                  <th>Description</th>
                  <th>Date Added</th>
                  <th>Last Edited</th>
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
                  <td><img style="width:50%;" src="../../uploads/<?php echo $data['file_path']; ?>"></td>
                  <td><?php echo $data['title']; ?></td>
                  <td><small class="truncate"><?php echo $data['description']; ?></small></td>
                  <td><?php echo $data['date_created']; ?></td>
                  <td><?php echo $data['date_updated']; ?></td>
                  <td class="text-center">
                      <form action="../../component/handler.php?id=<?php echo $data['id'] ?>" method="post" enctype="multipart/form-data">
                        <a style="margin: 2%;" href="service_update.php?id=<?php echo $data['id'] ?>" class="btn btn-warning  btn-flat btn-md text-white">
                          <i class="fa fa-pencil"></i>
                        </a>
                        <button type="submit" name="delete_service" class="btn btn-danger  btn-flat btn-md text-white">
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

    <!-- /container-wrapper-->

  <div class="content-wrapper" id="add_account">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../../#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Services</li>
      </ol>
      <form action="../../component/handler.php" method="post" enctype="multipart/form-data">
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-wrench"></i>Add Data Services</h2>
      </div>
      <div class="row"> 
        <div class="col-md-12 add_top_30">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Image</label>
                <input type="file" name="image" class="col-md-12 form-control" required onchange="readURL(this);" />
              </div>
            </div>
            <div class="col-md-6">
                <img class="col-md-6" id="blah" src="" alt="your image" />
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label>Service Name</label>
                <input type="text" class="form-control" required name="service_name">
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label>Service Description</label>
            <textarea name="description" style="width:1000%; height: 300px;" ></textarea>
          </div>
        </div>
      </div>
    </div>
    
    <!-- /box_general-->
    <p>
      <input type="submit" name="add_service" class="btn btn-primary" value="Save">
      <button onclick="redisplay()" class="btn btn-warning">Back</button>
    </p>
    </form>
    </div>
    <!-- /.container-fluid-->
    </div>
    <!-- /.container-wrapper-->
    <?php include '../../component/footer.php' ?>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="../../#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <script type="text/javascript">
      bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
    </script>
    <!-- Logout Modal-->
    <!-- Bootstrap core JavaScript-->
    
	
</body>
</html>
