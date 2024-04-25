<?php 
	require 'admin_section/koneksi.php';

	$sql_about="SELECT * FROM about";
  	$query_about=mysqli_query($koneksi,$sql_about);
  	$data_about=mysqli_fetch_array($query_about);

  	$sql_client="SELECT * FROM clients";
  	$query_client=mysqli_query($koneksi,$sql_client);

  	$sql_contact="SELECT * FROM contacts";
  	$query_contact=mysqli_query($koneksi,$sql_contact);
  	$data_contact=mysqli_fetch_array($query_contact);

  	$sql_homepage="SELECT * FROM homepage";
  	$query_homepage=mysqli_query($koneksi,$sql_homepage);
  	$data_homepage=mysqli_fetch_array($query_homepage);
    $name= explode(" ",$data_homepage['website_name']);

  	$sql_product="SELECT * FROM product";
  	$query_product=mysqli_query($koneksi,$sql_product);
  	$data_product=mysqli_fetch_array($query_product);

  	$sql_product_about="SELECT * FROM product";
  	$query_product_about=mysqli_query($koneksi,$sql_product_about);

  	$sql_service="SELECT * FROM services";
  	$query_service=mysqli_query($koneksi,$sql_service);

  	$sql_service_home="SELECT * FROM services";
  	$query_service_home=mysqli_query($koneksi,$sql_service_home);

  	$sql_service_footer="SELECT * FROM services LIMIT 5";
  	$query_service_footer=mysqli_query($koneksi,$sql_service_footer);

  	$sql_testimonial="SELECT * FROM testimonials";
  	$query_testimonial=mysqli_query($koneksi,$sql_testimonial);

  	$sql_tools="SELECT * FROM tools";
  	$query_tools=mysqli_query($koneksi,$sql_tools);
  	$data_tools=mysqli_fetch_array($query_tools);

  	$sql_tools_about="SELECT * FROM tools";
  	$query_tools_about=mysqli_query($koneksi,$sql_tools_about);

  	function add_view(){
    require 'admin_section/koneksi.php';
    $today_date=date("d-m-Y");
    $today_md=date("d-M");
    $sql_view="SELECT * FROM view WHERE view_date = '$today_date'";
    $query_view=mysqli_query($koneksi,$sql_view);
    $data_view=mysqli_fetch_array($query_view);
    
        if ($data_view['view_date']==$today_date) {
            $add_view=$data_view['view_total'];
            $new_view=$add_view+1;
            $sql_update_view="UPDATE `view` SET `view_total` = '$new_view' WHERE `view`.`view_total` = '$add_view';";
            mysqli_query($koneksi,$sql_update_view);

        }
        else{
            $sql_new_view="INSERT INTO `view` (`id`, `view_total`, `view_date`, `view_md`) VALUES (NULL, '1', '$today_date', '$today_md');";
            mysqli_query($koneksi,$sql_new_view);
        }
    }
?>