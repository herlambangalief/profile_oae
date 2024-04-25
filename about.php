<!DOCTYPE html>
<html lang="en">

<head>
   <?php require 'part/header.php'; ?>
</head>

<body>

    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-md-12 col-lg-12">
                <div class="ms-lg-4 ps-lg-4">
                    <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                        <h1 class="mb-5">Product Sample</h1>
                    </div>
                    <div class="owl-carousel service-carousel position-relative wow fadeInU" data-wow-delay="0.1s">
                        <?php $no=0; 
                            while ($data_product_about=mysqli_fetch_array($query_product_about)) {
                              $no++;
                                $id=$data_product_about['id'];
                            ?>
                            <div class="bg-light p-4">
                                <center>
                                    <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 70%;">
                                        <img style="width:100%; height:25vh;" src="img/<?php echo $data_product_about['product_image'] ?>">
                                    </div>
                                    <h4 class="mb-3"><?php echo $data_product_about['product_name'] ?></h4>
                                </center>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <?php echo $data_about['vision']; ?>
                    <br><br>
                    <?php echo $data_about['mission']; ?>
                    <div class="bg-success d-flex align-items-center p-4 mt-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fa-2x text-success"></i>
                        </div>
                        <div class="ms-3">
                            <p class="fs-5 fw-medium mb-2 text-white">Our Contact</p>
                            <h3 class="m-0 text-secondary"><?php echo $data_contact['mobile']; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/<?php echo $data_about['vision_image']; ?>" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="img/<?php echo $data_about['mission_image']; ?>" style="object-fit: cover;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <div class="container-fluid fact bg-dark my-5 py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                    <h2 style="display: inline;" class="text-white mb-2" data-toggle="counter-up"><?php echo $data_about['customer']; ?></h2><h2 style="display: inline;" class="text-white mb-2">%</h2>
                    <p class="text-white mb-0">Customer Satisfaction</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                    <h2 style="display: inline;" class="text-white mb-2" data-toggle="counter-up"><?php echo $data_about['ontime']; ?></h2><h2 style="display: inline;" class="text-white mb-2">%</h2>
                    <p class="text-white mb-0">On time delivery</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                    <h2 class="text-white mb-2" data-toggle="counter-up"><?php echo $data_about['rejection_rate']; ?></h2>
                    <p class="text-white mb-0">Rejection Rate</p>
                </div>
                <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                    <h2 class="text-white mb-2" data-toggle="counter-up"><?php echo $data_about['accident']; ?></h2>
                    <p class="text-white mb-0">Accident</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Fact End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Our Tools Support</h1>
            </div>
            <div class="row g-4">
                <?php $no=0; 
                    while ($data_tools_about=mysqli_fetch_array($query_tools_about)) {
                        $no++;
                        $id=$data_tools_about['id'];
                    ?>
                     <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" style="width:100%; height:25vh;" src="img/<?php echo $data_tools_about['tools_image']; ?>" alt="">
                            </div>
                            <div class="team">
                                <div class="p-3 mb-2 bg-light text-white text-center">
                                    <h5 class="fw-bold mb-0"><?php echo $data_tools_about['tools_name']; ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Team End -->
        

    <!-- Footer Start -->
    <?php require 'part/footer.php'; ?>
    <!-- Footer End -->


    
</body>

</html>