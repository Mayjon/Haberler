<?php
$baglan=mysqli_connect("localhost","id12115800_motorsports","666666","id12115800_66");
$aramasorgusu= $_GET['aramasorgusu'];

$sonucsorgu =mysqli_query($baglan,"SELECT * FROM haberler WHERE baslik LIKE '%$aramasorgusu%'" );
if(mysqli_num_rows($sonucsorgu)>0){
 while($sorguoku=mysqli_fetch_array($sonucsorgu))
 {
     $id=$sorguoku["id"];
     $baslik=$sorguoku["baslik"];
     echo "$id -> $baslik      ";
     echo '<a href="/Haberler/haberdetay.php?id='.$sorguoku['id'].'">Habere Git</a><br>';
 
 }
}
else
 echo 'Aradığınız İçerik Bulunamadı';$sorguoku

?>
