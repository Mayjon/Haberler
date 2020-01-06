<?php
 $baslik = $_POST['baslik'];
 $detay = $_POST['detay'];
 
$baglan=mysqli_connect("localhost","id12115800_motorsports","666666","id12115800_66"); 

$sqlekle="INSERT INTO haberler(baslik, detay, hit) 
VALUES ('$baslik','$detay' ,0)";
 
$sonuc=mysqli_query($baglan,$sqlekle);
 header('Location: /admin.php');

?>
