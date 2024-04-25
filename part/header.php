<?php 
    require 'part/function.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title><?php echo $data_homepage['website_name'] ?></title>

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <style type="text/css">
        .background{
            background: #c0ffc0;
        }
    </style>

    <link rel="icon" type="image/x-icon" href="admin_section/uploads/<?php echo $data_homepage['logo'] ?>">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

	<!-- Topbar Start -->
    <div class="container-fluidd-none d-lg-block background">
        <div class="row align-items-center top-bar">
            <div class="col-lg-3 col-md-12 text-center text-lg-start">
                <a href="" class="navbar-brand m-0 p-0">

                    <h2 class="text-primary m-0">
                        <img style="width: 20%;" src="img/<?php echo $data_homepage['logo'] ?>"> 
                        <span style="color:green;"><?php echo $name[0].$name[1]." "; ?></span>
                        <span style="color:black;"><?php echo $name[2]." ".$name[3] ?></span>
                        <img style="width: 20%;" src="img/iso.png">
                    </h2>
                </a>
            </div>
            <div class="col-lg-9 col-md-12 text-end">
                
                <div class="h-100 d-inline-flex align-items-center me-4">
                    <i class="far fa-envelope-open text-success me-2"></i>
                    <p class="m-0"><?php echo $data_contact['email'] ?></p>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-success me-1" href="<?php echo $data_contact['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-success me-1" href="<?php echo $data_contact['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-success me-1" href="<?php echo $data_contact['linkin'] ?>"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar background">
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
            <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <h1 class="text-primary m-0"></h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="index.php" class="nav-item nav-link">Home</a>
                    <a href="about.php" class="nav-item nav-link">About</a>
                    <a href="service.php" class="nav-item nav-link">Services</a>
                    <a href="client.php" class="nav-item nav-link">Clients</a>
                    <a href="testimonial.php" class="nav-item nav-link">Testimonial</a>
                    <a href="contact.php" class="nav-item nav-link">Contact Us</a>
                </div>
                <div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-success d-flex align-items-center">
                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
                        <i class="fa fa-phone-alt text-success"></i>
                    </div>
                    <div class="ms-3">
                        <p class="mb-1 text-white ">Celular</p>
                        <h5 class="m-0 text-secondary"><?php echo $data_contact['mobile']; ?></h5>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
</body>
</html>