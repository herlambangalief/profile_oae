<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
 <!-- Footer Start -->
    <div class="container-fluid bg-success text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $data_contact['address_1']; ?></p>
                    <br>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i><?php echo $data_contact['address_2']; ?></p>
                </div>
               <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Contact Info</h4>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i><?php echo $data_contact['mobile']; ?></p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i><?php echo $data_contact['email']; ?></p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="<?php echo $data_contact['facebook'] ?>"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?php echo $data_contact['twitter'] ?>"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social" href="<?php echo $data_contact['linkin'] ?>"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <?php $no=0; 
                        while ($data_service_footer=mysqli_fetch_array($query_service_footer)) {
                            $no++;
                            $id=$data_service_footer['id'];
                        ?>
                        <a class="btn btn-link" href="service.php"><?php echo $data_service_footer['title'] ?></a>
                    <?php } ?>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#"><?php echo $data_homepage['website_name'] ?></a>, All Right Reserved.
                    </div>
                </div>
            </div>
        </div>
    </div>

    


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>