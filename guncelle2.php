<?php
$ogrID=$_POST['id'];

$baslik = $_POST['baslik'];
$detay = $_POST['detay'];
$baglan=mysqli_connect("localhost","id12115800_motorsports","666666","id12115800_66"); 
$sql="UPDATE haberler SET baslik='$baslik',  detay='$detay' WHERE id='$ogrID'";
$sonuc= mysqli_query($baglan,$sql);

header('Location: /admin.php');

?>
