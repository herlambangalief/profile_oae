<!DOCTYPE html>
<html lang="en">

<head>
    <?php require 'part/header.php'; ?>
    <?php 
 if (isset($_POST['add_messages'])) {

        $fullname=$_POST['fullname'];
        $subject=$_POST['subject'];
        $contact=$_POST['contact'];
        $email=$_POST['email'];
        $message=$_POST['message'];

        if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

                // Google secret API
                $secretAPIkey = '6Lde5aEnAAAAAAPFAmZwy14M2KE5glIs95eSx5sD';

                // reCAPTCHA response verification
                $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretAPIkey.'&response='.$_POST['g-recaptcha-response']);

                // Decode JSON data
                $response = json_decode($verifyResponse);
                    if($response->success){

                      $sql_message="INSERT INTO `messages` (`id`, `full_name`, `subject`, `contact`, `email`, `message`, `status`, `date_created`, `date_updated`) VALUES (NULL, '$fullname', '$subject', '$contact', '$email', '$message', '0', CURRENT_TIMESTAMP, NULL)";
                      mysqli_query($koneksi,$sql_message);

                      $response = array(
                            "status" => "alert-success",
                            "message" => "Message has been send"
                        );
                        
                    } else {
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Robot verification failed, please try again."
                        );
                    }       
            }
            else{ 
                $response = array(
                    "status" => "alert-danger",
                    "message" => "Plese check on the reCAPTCHA box."
                );
            }

        
}

 
?>
</head>

<body>

    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-5">Contact Us</h1>
            </div>
            <div class="row g-4">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="" method="post" enctype="multipart/form-data">
                            <div class="row g-3">
                                <?php if(!empty($response)) {?>
                                    <div class="form-group col-12 text-center">
                                      <div class="alert text-center <?php echo $response['status']; ?>">
                                        <?php echo $response['message']; ?>
                                      </div>
                                    </div>
                                <?php }?>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="fullname" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="contact" id="contact" placeholder="Subject">
                                        <label for="subject">Contact</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" name="message"  id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <center>
                                        <div class="form-floating">
                                            <div class="g-recaptcha" data-sitekey="6Lde5aEnAAAAAArKNwDCJzfVDvA-0mYU5Ytbqs88"></div>
                                        </div>
                                    </center>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-success w-100 py-3" name="add_messages" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php require 'part/footer.php'; ?>
    <!-- Footer End -->


    
</body>

</html>