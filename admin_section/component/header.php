  <?php 
    require '../../koneksi.php';
    session_start();
 
    if (!isset($_SESSION['username'])) {
    header("Location: ../../index.php");
    }

    $sqli="SELECT status,COUNT(*) as count FROM messages WHERE status=1 GROUP BY status ORDER BY count DESC;";
    $queryi=mysqli_query($koneksi,$sqli);
    $messagei=mysqli_fetch_array($queryi);
    if ($messagei['count']!=0) {
      $count=0;
    }
    else{
      $count=$messagei['count'];
    }

    $sqls="SELECT * FROM homepage";
    $querys=mysqli_query($koneksi,$sqls);
    $logo=mysqli_fetch_array($querys);

    $username=$_SESSION['username'];
    $sqla="SELECT * FROM users WHERE username='$username'";
    $querya=mysqli_query($koneksi,$sqla);
    $account=mysqli_fetch_array($querya);
  ?>
  <head>
  <style type="text/css">
    .truncate{
      line-height: 1rem;
      max-height: 2rem;
      display: -webkit-box;
      overflow: hidden !important;
    }
  </style>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Ansonika">
  <link rel="apple-touch-icon" type="image/x-icon" href="../../img/apple-touch-icon-57x57-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="../../img/apple-touch-icon-72x72-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="../../img/apple-touch-icon-114x114-precomposed.png">
  <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="../../img/apple-touch-icon-144x144-precomposed.png">
  
  <!-- GOOGLE WEB FONT -->
  <link href="../../https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">
  
  <!-- Bootstrap core CSS-->
  <link href="../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Icon fonts-->
  <link href="../../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Plugin styles -->
  <link href="../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Main styles -->
  <link href="../../css/admin.css" rel="stylesheet">
  <!-- Your custom styles -->
  <link href="../../css/admin.css" rel="stylesheet">
  <title>OAE Company</title>
  
  <!-- Favicons-->
  <link rel="shortcut icon" href="../../uploads/<?php echo $logo['logo']; ?>" type="image/x-icon">
  </head>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="index.php"><img class="rounded-circle" src="../../uploads/<?php echo $logo['logo']; ?>" data-retina="true" alt="" width="40" height="36"> <?php echo $logo['website_name']; ?></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav bg-default" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="../dashboard/">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Artikel">
          <a class="nav-link" href="../account/">
            <i class="fa fa-fw fa-address-card "></i>
            <span class="nav-link-text">Account</span>
          </a>
        </li>
    <?php if ($count==0) {?>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Artikel">
          <a class="nav-link" href="../message/">
            <i class="fa fa-fw fa-envelope "></i>
            <span class="nav-link-text">Message</span>
          </a>
        </li>
    <?php } ?>
    <?php if ($count>=1) {?>
      <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Artikel">
          <a class="nav-link" href="../message/">
            <i class="fa fa-fw fa-envelope "></i>
            <span class="nav-link-text">Message <button class="btn btn-sm btn-warning"><?php echo $count; ?></button></span>
          </a>
        </li>
    <?php } ?>

    
        <hr>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Obat">
          <a class="nav-link" href="../homepage/">
            <i class="fa fa-fw fa-home"></i>
            <span class="nav-link-text">Homepage</span>
          </a>
        </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Artikel">
          <a class="nav-link" href="../about/">
            <i class="fa fa-fw fa-file-text "></i>
            <span class="nav-link-text">About</span>
          </a>
        </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Rumah Sakit">
          <a class="nav-link" href="../services/">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">Services</span>
          </a>
        </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Penyakit">
          <a class="nav-link" href="../client/">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Client</span>
          </a>
        </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Penyakit">
          <a class="nav-link" href="../testimonial/">
            <i class="fa fa-fw fa-tag"></i>
            <span class="nav-link-text">Testimonial</span>
          </a>
        </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Penyakit">
          <a class="nav-link" href="../contact/">
            <i class="fa fa-fw fa-phone"></i>
            <span class="nav-link-text">Contact Us</span>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <form class="form-inline my-2 my-lg-0 mr-lg-2">
            <div class="input-group col-md-2">
              <span class="input-group-btn">
                <button class="btn btn-primary" type="button" disabled="">
                  <i class="fa fa-user"></i>
                </button>
              </span>
              <input class="form-control search-top" type="text" value="<?php echo $account['firstname'].' '.$account['lastname']; ?>" disabled="">
            </div>
          </form>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>Logout</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Are You Sure ?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Press "Logout" if you want to exit</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Back</button>
            <a class="btn btn-danger" href="../../component/logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>