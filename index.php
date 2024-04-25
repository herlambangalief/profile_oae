
<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        require 'part/header.php';
        add_view();
    ?>

</head>

<body>
    
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/<?php echo $data_homepage['banner_1']; ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4" style="color:#ffffff;"><?php echo $data_homepage['banner_text_1']; ?></h1>
                                <a href="about.php" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid" src="img/<?php echo $data_homepage['banner_2']; ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center" style="background: rgba(0, 0, 0, .4);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-3 text-white animated slideInDown mb-4" style="color:#ffffff;"><?php echo $data_homepage['banner_text_2']; ?></h1>
                                <a href="about.php" class="btn btn-success py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <?php echo $data_homepage['quality_policy']; ?>
                </div>
                <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/<?php echo $data_homepage['qp_image']; ?>" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

   

    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-lg-3 d-none d-lg-flex">
                <div class="d-flex align-items-center justify-content-center bg-success w-100 h-200">
                    <h2 class="display-5 text-white m-0" style="transform: rotate(-90deg);"><?php echo $data_homepage['website_name']; ?></h2>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="ms-lg-5 ps-lg-5">
                    <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">Our Services</h6>
                        <h1 class="mb-5">Our Services</h1>
                    </div>
                    <div class="owl-carousel service-carousel position-relative wow fadeInU" data-wow-delay="0.1s">
                        <?php $no=0; 
                            while ($data_service_home=mysqli_fetch_array($query_service_home)) {
                              $no++;
                                $id=$data_service_home['id'];
                            ?>
                            <div class="bg-light p-4">
                                <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                    <img src="img/<?php echo $data_service_home['file_path'] ?>">
                                </div>
                                <h4 class="mb-3"><?php echo $data_service_home['title'] ?></h4>
                                <p><?php echo $data_service_home['description'] ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->





    


    <!-- Footer Start -->
    
    <?php require 'part/footer.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    
</body>

</html>