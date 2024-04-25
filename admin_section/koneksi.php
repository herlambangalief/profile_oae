<?php 
	$koneksi=mysqli_connect("localhost","root","","company_website_db");

	if ($koneksi) {
		
	}
	else{
		echo "<script>alert('Koneksi ke database gagal')</script>";
	}
?>