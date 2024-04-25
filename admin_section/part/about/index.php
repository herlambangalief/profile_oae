<?php 
  require '../../koneksi.php';
  $sql="SELECT * FROM about";
  $query=mysqli_query($koneksi,$sql);
  $data=mysqli_fetch_array($query);

  $sql1="SELECT * FROM product";
  $query1=mysqli_query($koneksi,$sql1);

  $sql2="SELECT * FROM tools";
  $query2=mysqli_query($koneksi,$sql2);

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
        <li class="breadcrumb-item active">About</li>
      </ol>
      <form action="../../component/handler.php?image1=<?php echo $data['vision_image'] ?>&image2=<?php echo $data['mission_image'] ?>" method="post" enctype="multipart/form-data">
    <div class="box_general padding_bottom">
      <div class="header_box version_2">
        <h2><i class="fa fa-home "></i>About</h2>
      </div>
      <h3>Vision & Mission</h3>
      
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label>Vision</label>
            <textarea required class="form-control" rows="6" name="vision"><?php echo $data['vision']; ?></textarea>
          </div>
          <div class="form-group">
            <label>Mission</label>
            <textarea required class="form-control" rows="6" name="mission"><?php echo $data['mission']; ?></textarea>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label>Vision Image</label>
            <input type="file" name="vision_image" class="form-control" onchange="readURL2(this);" />
            <br>
            <img class="col-md-4" style="width:70%;" id="blas" src="../../uploads/<?php echo $data['vision_image'] ?>" alt="your image" />
          </div>
          <div class="form-group">
            <label>Mission Image</label>
            <input type="file" name="mission_image" class="form-control" onchange="readURL3(this);" />
            <br>
            <img class="col-md-4" style="width:70%;" id="blaa" src="../../uploads/<?php echo $data['mission_image'] ?>" alt="your image" />
          </div>
        </div>
      </div>
      <hr>
      
      <h3>Quality Objectives</h3>
      
      <div class="row">
        <div class="col-md-12 add_top_30">
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label>Customer Satisfaction</label>
                <input type="text" class="form-control"  name="customer" value="<?php echo $data['customer'] ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>On time Delivery</label>
                <input type="text" class="form-control"  name="ontime" value="<?php echo $data['ontime'] ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Rejection rate</label>
                <input type="text" class="form-control"  name="rejection_rate" value="<?php echo $data['rejection_rate'] ?>">
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <label>Accident</label>
                <input type="text" class="form-control"  name="accident" value="<?php echo $data['accident'] ?>">
              </div>
            </div>
          </div>
          <!-- /row-->
        </div>
      </div>
      <hr>
      <p><input type="submit" name="edit_about" class="btn btn-primary btn-lg" value="Change"></p>
    </div>
    </form>
    <div class="box_general padding_bottom">
      <!-- Example DataTables Card-->
      <h3>Product Sample</h3>
          <div id="display_product">
            <div class="card mb-3" >
              <div class="card-header">
                <div style="float: right;"><button onclick="add1()" class="btn btn-md btn-success">Add Product Sampel</button></div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table id="product_sample" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th class="col-md-2">Product Image</th>
                        <th>Product Name</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tfoot>
                      <tr>
                        <th>No</th>
                        <th>Product Image</th>
                        <th>Product Name</th>
                        <th>Action</th>
                      </tr>
                    </tfoot>
                    <tbody>
                      <?php $no=0; 
                      while ($data1=mysqli_fetch_array($query1)) {
                        $no++;
                          $id=$data1['id'];
                      ?>
                      <tr>
                        <td><?php echo $no; ?></td>
                        <td><img style="width:50%;" src="../../uploads/<?php echo $data1['product_image']; ?>"></td>
                        <td><?php echo $data1['product_name']; ?></td>
                        <td class="text-center">
                          <form action="../../component/handler.php?id=<?php echo $data1['id'] ?>" method="post" enctype="multipart/form-data">
                            <a style="margin: 2%;" href="product_update.php?id=<?php echo $data1['id'] ?>" class="btn btn-warning  btn-flat btn-md text-white">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <button type="submit" name="delete_product" class="btn btn-danger  btn-flat btn-md text-white">
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
          </div>
        <form action="../../component/handler.php" method="post" enctype="multipart/form-data">
          <div class="col-md-12 add_top_30" id="add_product">
            <div class="row" >
              <div class="col-md-6">
                <div class="form-group">
                  <label>Product Image</label>
                  <input type="file" name="product_image" class="col-md-12 form-control" required onchange="readURL4(this);" />
                </div>
              </div>
              <div class="col-md-6">
                  <img class="col-md-6" id="product" src="" alt="your image" />
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Product Name</label>
                  <input type="text" class="form-control" required name="product_names" placeholder="First Name">
                </div>
              </div>
            </div>
            <p>
              <input type="submit" name="save_product" class="btn btn-primary" value="Save">
              <button onclick="redisplay1()" class="btn btn-warning">Back</button>
            </p>
        </div><hr>
        </form>
      <!-- /tables-->
      <h3>Production Support Tools</h3>
      <!-- Example DataTables Card-->
      <div id="display_tools">
        <div class="card mb-3" >
          <div class="card-header">
            <div style="float: right;"><button onclick="add2()" class="btn btn-md btn-success">Add Support Tools</button></div>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table id="tools_table" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th class="col-md-2">Tools Image</th>
                    <th>Tools Name</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Tools Image</th>
                    <th>Tools Name</th>
                    <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                  <?php $no=0; 
                  while ($data2=mysqli_fetch_array($query2)) {
                    $no++;
                      $id=$data2['id'];
                  ?>
                  <tr>
                    <td><?php echo $no; ?></td>
                    <td><img style="width:50%;" src="../../uploads/<?php echo $data2['tools_image']; ?>"></td>
                    <td><?php echo $data2['tools_name']; ?></td>
                    <td class="text-center">
                        <form action="../../component/handler.php?id=<?php echo $data2['id'] ?>" method="post" enctype="multipart/form-data">
                            <a style="margin: 2%;" href="tools_update.php?id=<?php echo $data2['id'] ?>" class="btn btn-warning  btn-flat btn-md text-white">
                              <i class="fa fa-pencil"></i>
                            </a>
                            <button type="submit" name="delete_tools" class="btn btn-danger  btn-flat btn-md text-white">
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
      </div>
      <form action="../../component/handler.php" method="post" enctype="multipart/form-data">
        <div class="col-md-12 add_top_30" id="add_tools">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label>Tools Image</label>
                  <input type="file" name="tools_image" class="col-md-12 form-control" required onchange="readURL(this);" />
                </div>
              </div>
              <div class="col-md-6">
                  <img class="col-md-6" id="blah" src="" alt="your image" />
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label>Tools Name</label>
                  <input type="text" class="form-control" required name="tools_name" placeholder="First Name">
                </div>
              </div>
            </div>
            <p>
              <input type="submit" name="save_tools" class="btn btn-primary" value="Save">
              <button onclick="redisplay2()" class="btn btn-warning">Back</button>
            </p>
        </div>
      </form>
    <!-- /tables-->
    </div>
    <!-- /.container-wrapper-->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fa fa-angle-up"></i>
    </a>
    <?php include '../../component/footer.php' ?>
    <script type="text/javascript">
      bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });
      document.getElementById("add_product").style.display = "none";
      document.getElementById("display_product").style.display = "block";

      function add1() {
        document.getElementById("add_product").style.display = "block";
        document.getElementById("display_product").style.display = "none";
      }
      function redisplay1() {
        document.getElementById("add_product").style.display = "none";
        document.getElementById("display_product").style.display = "block";
      }
      
      document.getElementById("add_tools").style.display = "none";
      document.getElementById("display_tools").style.display = "block";
      
      function add2() {
        document.getElementById("add_tools").style.display = "block";
        document.getElementById("display_tools").style.display = "none";
      }
      function redisplay2() {
        document.getElementById("add_tools").style.display = "none";
        document.getElementById("display_tools").style.display = "block";
      }
    </script>
    

  
</body>
</html>
