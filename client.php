<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'part/header.php'; ?>
</head>

<body>

    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Our Client</h1>
            </div>
            <div class="row g-4">
                <?php $no=0; 
                    while ($data_client=mysqli_fetch_array($query_client)) {
                        $no++;
                        $id=$data_client['id'];
                    ?>
                     <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid" style="width: 100%; height: 25vh;" src="img/<?php echo $data_client['file_path']; ?>" alt="">
                            </div>
                            <div class="team">
                                <div class="p-3 mb-2 bg-light text-white text-center">
                                    <h5 class="fw-bold mb-0"><?php echo $data_client['company_name']; ?></h5>
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