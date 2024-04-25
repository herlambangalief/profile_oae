<?php 
    require '../koneksi.php';

        error_reporting(0);
 
        session_start();
         
        if (isset($_SESSION['username'])) {
            header("Location:../part/dashboard/");
             echo "Username or Password Incorect. Please Try Again";
        }
         
        if (isset($_POST['login'])) {
            $username = $_POST['txt'];
            $password = md5($_POST['pswd']);
            $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
            $result = mysqli_query($koneksi, $sql);
            if ($result->num_rows > 0) {
                $row = mysqli_fetch_assoc($result);
                $_SESSION['username'] = $row['username'];
                header("Location:../part/dashboard/");
            } else {
                header("Location:../");
            }
        }
    
?>