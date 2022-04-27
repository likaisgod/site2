<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php ob_start();
	$A1=$_POST['Adi'];
	$A2=$_POST['Slogan'];
	$A3=$_POST['Aciklama'];
	$A4=$_POST['Etiket'];

$Komut=mysql_query(
"UPDATE zcard_sitebilgileri SET 

Adi='$A1', 
Slogan='$A2', 
Aciklama='$A3', 
Etiket='$A4'
					where No=1");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } ?>
<?php ob_end_flush(); ?>   
<meta http-equiv="refresh" content="2;URL=sitebilgileri.php"></p>