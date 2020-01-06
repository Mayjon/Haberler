<?php
$baglan=mysqli_connect("localhost","id12115800_motorsports","666666","id12115800_66"); 
$id=$_GET['id'];
$habersor=mysqli_query($baglan,"select * from haberler where id='$id'");
$habercek=mysqli_fetch_assoc($habersor); 
$hit=$habercek['hit'];
$hit++;
$hit = "UPDATE haberler SET hit='$hit' WHERE id='$id'";
$sonuc= mysqli_query($baglan,$hit);

?>

<html>
<head>
<meta charset="utf-8">
<title>Haberler Sayfası</title>
<link rel="stylesheet" type="text/css" href="Stil/style.css">
</head>
<body>
	
<div class="banner">
		
	<div class="banner-binlik">
		
	<div class="banner-sol">Motorsports.life</div>
	
	
	
	<div class="temizle"></div>	
		
		</div>
	
	
	</div>

<div class="menu">
<div class="menu-binlik">	
<a href="Haberler.php"><div class="menu-tab">HABERLER</div></a>
<div class="menu-tab">Formula1</div>
<div class="menu-tab">MotoGP</div>
<div class="menu-tab">Nascar</div>
<div class="menu-tab">GT Serileri</div>
<div class="menu-tab">Ralli</div>
<a href="/index.php"><div class="menu-tab">Anasayfa</div></a>
</div>
</div>

<div class="icerik">
	
<div class="icerik-sol">

<div class="makale">
<img src="Resimler/damaged-car-of-charles-leclerc.jpg" class="makale-resim">
<div class="makale-baslik"><?php echo $habercek['baslik']; ?></div>
<div class="makale-yazi"><?php echo ($habercek['detay']);  ?></div>
<div class="temizle"></div>
</div>



</div>

<div class="icerik-sag">

<div class="en-cok-okunanlar-kapsul">
<div class="en-cok-okunanlar-baslik">En Çok Okunanlar</div>	</div>
<?php

$baglan=mysqli_connect("localhost","id12115800_motorsports","666666","id12115800_66"); 

$habersor=mysqli_query($baglan,"select * from haberler order by hit DESC limit 5");


while ($habercek=mysqli_fetch_assoc($habersor)) { ?>
<div class="en-cok-okunanlar-kapsul">
<div class="en-cok-okunanlar">
<div class="numaralandirma"><?php echo $habercek['hit']; ?></div>
<img src="Resimler/alexander-albon-red-bull-rb15-.jpg" width="100%">
<div class="makale-baslik sag-makale-baslik"><?php echo $habercek['baslik']; ?></div>
</div>
</div>
<?php } ?>



</div>

<div class="temizle"></div>

</div>
</body>
</html>
