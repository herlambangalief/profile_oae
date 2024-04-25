<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'part/header.php'; ?>
</head>

<body>
    

    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-lg-3 d-none d-lg-flex">
                <div class="d-flex align-items-center justify-content-center bg-success w-100 h-100">
                    <h1 class="display-5 text-white m-0" style="transform: rotate(-90deg);"><?php echo $data_homepage['website_name']; ?></h1>
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
                            while ($data_service=mysqli_fetch_array($query_service)) {
                              $no++;
                                $id=$data_service['id'];
                            ?>
                            <div class="bg-light p-4">
                                <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4" style="width: 75px; height: 75px;">
                                    <img style="width: 75px; height: 75px;" src="img/<?php echo $data_service['file_path'] ?>">
                                </div>
                                <h4 class="mb-3"><?php echo $data_service['title'] ?></h4>
                                <p><?php echo $data_service['description'] ?></p>
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


    
</body>

</html>