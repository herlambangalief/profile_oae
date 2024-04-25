<?php  

	$sql_view_total="SELECT * FROM view LIMIT 5";
  	$query_view_total=mysqli_query($koneksi,$sql_view_total);

  	$sql_view_md="SELECT * FROM view LIMIT 5";
  	$query_view_md=mysqli_query($koneksi,$sql_view_md);

  	$sqli="SELECT status,COUNT(*) as count FROM messages WHERE status=1 GROUP BY status ORDER BY count DESC;";
    $queryi=mysqli_query($koneksi,$sqli);
    $messagei=mysqli_fetch_array($queryi);
    if ($messagei['count']!=0) {
      $count=0;
    }
    else{
      $count=$messagei['count'];
    }

    $date_view=date("d-m-Y");
    $sqlv="SELECT * FROM view WHERE view_date= '$date_view'";
    $queryv=mysqli_query($koneksi,$sqlv);
    $messagev=mysqli_fetch_array($queryv);
    if ($messagev['view_total']==0) {
      $total_v=0;
    }
    else{
      $total_v=$messagev['view_total'];
    }


?>