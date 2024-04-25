<?php 
 require '../koneksi.php';

//HOMEPAGE=========================================================================================
 if (isset($_POST['edit_homepage'])) {
      $image_1=$_GET['image1'];
      $image_2=$_GET['image2'];
      $image_3=$_GET['image3'];
      $image_4=$_GET['image4'];

      if ($image1 = $_FILES['filez']['name']=="") {
        $image1=$image_1;
      }
      else{
      $ukuran = $_FILES['filez']['size'];
      $file_tmp1 = $_FILES['filez']['tmp_name'];
      $image1 = $_FILES['filez']['name'];
      move_uploaded_file($file_tmp1, '../uploads/'.$image1);
      copy('../uploads/'.$image1,'../../img/'.$image1);
      }

      if ($image2 = $_FILES['filed']['name']=="") {
        $image2=$image_2;
      }
      else{
      $ukuran = $_FILES['filed']['size'];
      $file_tmp2 = $_FILES['filed']['tmp_name'];
      $image2 = $_FILES['filed']['name'];
      move_uploaded_file($file_tmp2, '../uploads/'.$image2);
      copy('../uploads/'.$image2,'../../img/'.$image2);
      }
      if ($image3 = $_FILES['filey']['name']=="") {
        $image3=$image_3;
      }
      else{
      $ukuran = $_FILES['filey']['size'];
      $file_tmp3 = $_FILES['filey']['tmp_name'];
      $image3 = $_FILES['filey']['name'];
      move_uploaded_file($file_tmp3, '../uploads/'.$image3);
      copy('../uploads/'.$image3,'../../img/'.$image3);
      }
      if ($image4 = $_FILES['logo']['name']=="") {
        $image4=$image_4;
      }
      else{
      $ukuran = $_FILES['logo']['size'];
      $file_tmp4 = $_FILES['logo']['tmp_name'];
      $image4 = $_FILES['logo']['name'];
      move_uploaded_file($file_tmp4, '../uploads/'.$image4);
      copy('../uploads/'.$image4,'../../img/'.$image4);
      }
      
      $website_name=$_POST['website_name'];
      $banner_text1=$_POST['banner_text1'];
      $banner_text2=$_POST['banner_text2'];
      $quality_policy=$_POST['quality_policy'];
      $edit=date("Y/m/d h:i:sa");

      $sql_update="UPDATE `homepage` SET `website_name` = '$website_name',`banner_1` = '$image1', `banner_2` = '$image2', `banner_text_1` = '$banner_text1', `banner_text_2` = '$banner_text2', `quality_policy` = '$quality_policy', `qp_image` = '$image3',`logo` = '$image4', `last_edited` = '$edit' WHERE `homepage`.`id` = 1;";
      mysqli_query($koneksi,$sql_update);
      header("location:../part/homepage/");
    }






 //PRODUCT=========================================================================================
 if (isset($_POST['save_product'])) {
    $size = $_FILES['product_image']['size'];
    $file_tmp = $_FILES['product_image']['tmp_name'];

    $product_image = $_FILES['product_image']['name'];
    $product_name=$_POST['product_names'];

    $sql="INSERT INTO `product` (`id`, `product_name`, `product_image`) VALUES (null, '$product_name', '$product_image')";

    mysqli_query($koneksi,$sql);
    move_uploaded_file($file_tmp, '../uploads/'.$product_image);
    copy('../uploads/'.$product_image,'../../img/'.$product_image);
    

    header("location:../part/about/#product_sample");
  }
 else if (isset($_POST['delete_product'])) {
    $id=$_GET['id'];
    $sql="DELETE FROM product WHERE id=$id";
    mysqli_query($koneksi,$sql);
    header("location:../part/about/#product_sample");
  }
  else if (isset($_POST['edit_product'])) {
    $id=$_GET['id'];
    $image=$_GET['image'];
    if ($product_image = $_FILES['product_image']['name']=="") {
        $product_image=$image;
      }
    else{
        $ukuran = $_FILES['product_image']['size'];
        $file_tmp = $_FILES['product_image']['tmp_name'];
        $product_image = $_FILES['product_image']['name'];
        move_uploaded_file($file_tmp, '../uploads/'.$product_image);
        copy('../uploads/'.$product_image,'../../img/'.$product_image);
      }

      $product_name=$_POST['product_name'];

      $sql_update="UPDATE `product` SET  `product_name` = '$product_name',`product_image` = '$product_image' WHERE `id` = '$id'";
      mysqli_query($koneksi,$sql_update);
      header("location:../part/about/#product_sample");
  }






  //TOOLS==============================================================================================
  if (isset($_POST['save_tools'])) {
    $size = $_FILES['tools_image']['size'];
    $file_tmp = $_FILES['tools_image']['tmp_name'];

    $tools_image = $_FILES['tools_image']['name'];
    $tools_name=$_POST['tools_name'];

    $sql="INSERT INTO `tools` (`id`, `tools_name`, `tools_image`) VALUES (null, '$tools_name', '$tools_image')";

    mysqli_query($koneksi,$sql);
    move_uploaded_file($file_tmp, '../uploads/'.$tools_image);
    copy('../uploads/'.$tools_image,'../../img/'.$tools_image);

    header("location:../part/about/#tools_table");
  }
  else if (isset($_POST['delete_tools'])) {
    $id=$_GET['id'];
    $sql="DELETE FROM tools WHERE id=$id";
    mysqli_query($koneksi,$sql);
    header("location:../part/about/#tools_table#tools_table");
  }
  else if (isset($_POST['edit_tools'])) {
    $id=$_GET['id'];
    $image=$_GET['image'];
    if ($tools_image = $_FILES['tools_image']['name']=="") {
        $tools_image=$image;
      }
    else{
        $ukuran = $_FILES['tools_image']['size'];
        $file_tmp = $_FILES['tools_image']['tmp_name'];
        $tools_image = $_FILES['tools_image']['name'];
        move_uploaded_file($file_tmp, '../uploads/'.$tools_image);
        copy('../uploads/'.$tools_image,'../../img/'.$tools_image);
      }

      $tools_name=$_POST['tools_name'];

      $sql_update="UPDATE `tools` SET  `tools_name` = '$tools_name',`tools_image` = '$tools_image' WHERE `id` = '$id'";
      mysqli_query($koneksi,$sql_update);
      header("location:../part/about/#tools_table");
  }






  //ABOUT==================================================================================================
  if (isset($_POST['edit_about'])) {
      $image1=$_GET['image1'];
      $image2=$_GET['image2'];
      if ($vision_image = $_FILES['vision_image']['name']=="") {
        $vision_image=$image1;
      }
      else{
        $ukuran = $_FILES['vision_image']['size'];
        $file_tmp1 = $_FILES['vision_image']['tmp_name'];
        $vision_image = $_FILES['vision_image']['name'];
        move_uploaded_file($file_tmp1, '../uploads/'.$vision_image);
        copy('../uploads/'.$vision_image,'../../img/'.$vision_image);
      }

      if ($mission_image = $_FILES['mission_image']['name']=="") {
        $mission_image=$image2;
      }
      else{
        $ukuran = $_FILES['mission_image']['size'];
        $file_tmp2 = $_FILES['mission_image']['tmp_name'];
        $mission_image = $_FILES['mission_image']['name'];
        move_uploaded_file($file_tmp2, '../uploads/'.$mission_image);
        copy('../uploads/'.$mission_image,'../../img/'.$mission_image);
      }
      

      $vision=$_POST['vision'];
      $mission=$_POST['mission'];
      $customer=$_POST['customer'];
      $ontime=$_POST['ontime'];
      $rejection_rate=$_POST['rejection_rate'];
      $accident=$_POST['accident'];


      $sql_update="UPDATE `about` SET `vision` = '$vision', `vision_image` = '$vision_image', `mission` = '$mission', `mission_image` = '$mission_image', `customer` = '$customer', `ontime` = '$ontime', `rejection_rate` = '$rejection_rate', `accident` = '$accident' WHERE `about`.`id` = 1;";
      mysqli_query($koneksi,$sql_update);
      header("location:../part/about/");
    }






    //ACCOUNT=============================================================================================
    if (isset($_POST['edit_account'])) {
     $id=$_GET['id'];
     $image=$_GET['image'];
     $pass=$_GET['pass'];

        if ($avatar = $_FILES['avatar']['name']=="") {
            $avatar=$image;
          }
        else{
            $ukuran = $_FILES['avatar']['size'];
            $file_tmp = $_FILES['avatar']['tmp_name'];
            $avatar = $_FILES['avatar']['name'];
            move_uploaded_file($file_tmp, '../uploads/'.$avatar);
            copy('../uploads/'.$avatar,'../../img/'.$avatar);
          }
        if ($password = $_POST['password']=="") {
            $password=$pass;
          }
        else{
            $password=md5($_POST['password']);
          }

        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
    

        $sql_update="UPDATE `users` SET `avatar` = '$avatar', `firstname` = '$firstname', `lastname` = '$lastname', `username` = '$username', `password` = '$password' WHERE `id` = '$id'";
        mysqli_query($koneksi,$sql_update);
        header("location:../part/account/");
    }

    else if (isset($_POST['add_account'])) {
        $size = $_FILES['avatar']['size'];
        $file_tmp = $_FILES['avatar']['tmp_name'];

        $avatar = $_FILES['avatar']['name'];
        $firstname=$_POST['firstname'];
        $lastname=$_POST['lastname'];
        $username=$_POST['username'];
        $password=md5($_POST['password']);

        $sql="INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `password`, `avatar`) VALUES (NULL, '$firstname', '$lastname', '$username', '$password', '$avatar')";

        mysqli_query($koneksi,$sql);
        move_uploaded_file($file_tmp, '../uploads/'.$avatar);
        copy('../uploads/'.$avatar,'../../img/'.$avatar);

        header("location:../part/account/");
    }

    else if (isset($_POST['delete_account'])) {
        $id=$_GET['id'];
        $sql="DELETE FROM users WHERE id=$id";
        mysqli_query($koneksi,$sql);
        header("location:../part/account/");
    }


    //MESSAGES=============================================================================================

    if (isset($_POST['delete_message'])) {
        $id=$_GET['id'];
        $sql="DELETE FROM messages WHERE id=$id";
        mysqli_query($koneksi,$sql);
        header("location:../part/message/");
    }








    //SERVICES==============================================================================================

    if (isset($_POST['edit_service'])) {
     $id=$_GET['id'];
     $images=$_GET['image'];

        if ($image = $_FILES['image']['name']=="") {
            $image=$images;
          }
        else{
            $ukuran = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $image = $_FILES['image']['name'];
            move_uploaded_file($file_tmp, '../uploads/'.$image);
            copy('../uploads/'.$image,'../../img/'.$image);
          }

        $service_name=$_POST['service_name'];
        $description=$_POST['description'];
    

        $sql_update="UPDATE `services` SET `title` = '$service_name', `description` = '$description', `file_path` = '$image', `date_updated` = CURRENT_TIMESTAMP WHERE `services`.`id` = '$id';";
        mysqli_query($koneksi,$sql_update);
        header("location:../part/services/");
    }

    else if (isset($_POST['add_service'])) {
        $size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $image = $_FILES['image']['name'];
        $service_name=$_POST['service_name'];
        $description=$_POST['description'];

        $sql="INSERT INTO `services` (`id`, `title`, `description`, `file_path`, `date_created`, `date_updated`) VALUES (NULL, '$service_name', '$description', '$image', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000')";

        mysqli_query($koneksi,$sql);
        move_uploaded_file($file_tmp, '../uploads/'.$image);
        copy('../uploads/'.$image,'../../img/'.$image);

        header("location:../part/services/");
    }

    else if (isset($_POST['delete_service'])) {
        $id=$_GET['id'];
        $sql="DELETE FROM services WHERE id=$id";
        mysqli_query($koneksi,$sql);
        header("location:../part/services/");
    }









    //CLIENT==============================================================================================

    if (isset($_POST['edit_client'])) {
     $id=$_GET['id'];
     $images=$_GET['image'];

        if ($image = $_FILES['image']['name']=="") {
            $image=$images;
          }
        else{
            $ukuran = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $image = $_FILES['image']['name'];
            move_uploaded_file($file_tmp, '../uploads/'.$image);
            copy('../uploads/'.$image,'../../img/'.$image);
          }

        $company_name=$_POST['company_name'];
        $description=$_POST['description'];
    

        $sql_update="UPDATE `clients` SET `company_name` = '$company_name', `description` = '$description', `file_path` = '$image', `date_updated` = CURRENT_TIMESTAMP WHERE `clients`.`id` = '$id';";
        mysqli_query($koneksi,$sql_update);
        header("location:../part/client/");
    }

    else if (isset($_POST['add_client'])) {
        $size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $image = $_FILES['image']['name'];
        $company_name=$_POST['company_name'];
        $description=$_POST['description'];

        $sql="INSERT INTO `clients` (`id`, `company_name`, `description`, `file_path`, `date_created`, `date_updated`) VALUES (NULL, '$company_name', '$description', '$image', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000')";

        mysqli_query($koneksi,$sql);
        move_uploaded_file($file_tmp, '../uploads/'.$image);
        copy('../uploads/'.$image,'../../img/'.$image);

        header("location:../part/client/");
    }

    else if (isset($_POST['delete_client'])) {
        $id=$_GET['id'];
        $sql="DELETE FROM clients WHERE id=$id";
        mysqli_query($koneksi,$sql);
        header("location:../part/client/");
    }







     //TESTIMONIAL==========================================================================================

    if (isset($_POST['edit_testimonial'])) {
     $id=$_GET['id'];
     $images=$_GET['image'];

        if ($image = $_FILES['image']['name']=="") {
            $image=$images;
          }
        else{
            $ukuran = $_FILES['image']['size'];
            $file_tmp = $_FILES['image']['tmp_name'];
            $image = $_FILES['image']['name'];
            move_uploaded_file($file_tmp, '../uploads/'.$image);
            copy('../uploads/'.$image,'../../img/'.$image);
          }

        $from=$_POST['from'];
        $testimony=$_POST['testimony'];
    

        $sql_update="UPDATE `testimonials` SET `message_from` = '$from', `message` = '$testimony', `file_path` = '$image', `date_updated` = CURRENT_TIMESTAMP WHERE `testimonials`.`id` = '$id';";
        mysqli_query($koneksi,$sql_update);
        header("location:../part/testimonial/");
    }

    else if (isset($_POST['add_testimonial'])) {
        $size = $_FILES['image']['size'];
        $file_tmp = $_FILES['image']['tmp_name'];

        $image = $_FILES['image']['name'];
        $from=$_POST['from'];
        $testimony=$_POST['testimony'];

        $sql="INSERT INTO `testimonials` (`id`, `message_from`, `message`, `file_path`, `date_created`, `date_updated`) VALUES (NULL, '$from', '$testimony', '$image', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000')";

        mysqli_query($koneksi,$sql);
        move_uploaded_file($file_tmp, '../uploads/'.$image);
        copy('../uploads/'.$image,'../../img/'.$image);

        header("location:../part/testimonial/");
    }

    else if (isset($_POST['delete_testimonial'])) {
        $id=$_GET['id'];
        $sql="DELETE FROM testimonials WHERE id=$id";
        mysqli_query($koneksi,$sql);
        header("location:../part/testimonial/");
    }






    //CONTACT============================================================================================

    if (isset($_POST['edit_contact'])) {

        $mobile=$_POST['mobile'];
        $facebook=$_POST['facebook'];
        $email=$_POST['email'];
        $twitter=$_POST['twitter'];
        $linkedin=$_POST['linkedin'];
        $address1=$_POST['address_1'];
        $address2=$_POST['address_2'];
    

        $sql_update="UPDATE `contacts` SET `mobile` = '$mobile', `email` = '$email', `facebook` = '$facebook', `twitter` = '$twitter', `linkin` = '$linkedin', `address_1` = '$address1', `address_2` = '$address2' WHERE `contacts`.`id` = 1;";
        mysqli_query($koneksi,$sql_update);
        header("location:../part/contact/");
    }


    
    
        
?>