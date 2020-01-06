<?php
$gID=$_GET['id'];
$baglan=mysqli_connect("localhost","id12115800_motorsports","666666","id12115800_66");
$sonuc1=mysqli_query($baglan,"select * from haberler WHERE id=".$gID);
$satir = mysqli_fetch_array($sonuc1);
?>
    <form method="POST" action="guncelle2.php">
    <table border="1" align="center" width="50%">
<tr>
<td colspan="2" align="center"> Haber Güncelleme</td>
</tr>
<tr>
<td>Haber Başlığı</td>
<?php echo '<td><input type="text"style="width: 700px; height:50px;" name="baslik" value='.$satir['baslik'].'></td>';?>
</tr>
<tr>
<td>Haber Detayı</td>
<?php echo '<td><input type="text" style="width: 700px; height: 50px;" name="detay" value='.$satir['detay'].'></td>';?>
</tr>
<tr>
<td>ID</td>
<?php echo '<td><input type="text"style="width: 700px; height:50px;" name="id" value='.$satir['id'].'></td>';?>
</tr>

<tr>
<td></td>
<td><input type="submit" value="Kaydet"></td>
</tr>
</table>
</form>
