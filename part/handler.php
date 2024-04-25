<?php 
 require '../admin_section/koneksi.php';
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

                      header("location:../contact.php");

                        $response = array(
                            "status" => "alert-success",
                            "message" => "Your message have been sent."
                        );
                    } else {
                        header("location:../contact.php");
                        $response = array(
                            "status" => "alert-danger",
                            "message" => "Robot verification failed, please try again."
                        );
                    }       
            }
            else{ 
              header("location:../contact.php");
                $response = array(
                    "status" => "alert-danger",
                    "message" => "Plese check on the reCAPTCHA box."
                );
            }

        
}


 
 
?>