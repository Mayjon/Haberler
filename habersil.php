<?php
 
$silinecekID= $_GET['id'];
 
$baglan=mysqli_connect("localhost","id12115800_motorsports","666666","id12115800_66");
$sonuc=mysqli_query($baglan,"DELETE from haberler  where id=".$silinecekID);
header('Location: /admin.php');

?>
