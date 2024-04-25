<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'part/header.php'; ?>
</head>

<body>

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="text-secondary text-uppercase">Testimonial</h6>
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                 <?php $no=0; 
                    while ($data_testimonial=mysqli_fetch_array($query_testimonial)) {
                        $no++;
                        $id=$data_testimonial['id'];
                    ?>
                     <div class="testimonial-item text-center">
                        <div class="testimonial-text bg-light text-center p-4 mb-4">
                            <p class="mb-0"><?php echo $data_testimonial['message']; ?></p>
                        </div>
                        <img class="bg-light rounded-circle p-2 mx-auto mb-2" src="img/<?php echo $data_testimonial['file_path']; ?>" style="width: 80px; height: 80px;">
                        <div class="mb-2">
                            <small class="fa fa-star text-secondary"></small>
                            <small class="fa fa-star text-secondary"></small>
                            <small class="fa fa-star text-secondary"></small>
                            <small class="fa fa-star text-secondary"></small>
                            <small class="fa fa-star text-secondary"></small>
                        </div>
                        <h5 class="mb-1"><?php echo $data_testimonial['message_from']; ?></h5>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
        

    <!-- Footer Start -->
    <?php require 'part/footer.php'; ?>
    <!-- Footer End -->


    <!-- Back to Top -->
    
</body>

</html>