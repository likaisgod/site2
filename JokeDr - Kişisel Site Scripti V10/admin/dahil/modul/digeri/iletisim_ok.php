<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php ob_start();
	$A1=$_POST['Maps'];
	$A2=$_POST['Adres1'];
	$A3=$_POST['Adres2'];
	$A4=$_POST['Mail'];
	$A5=$_POST['Tel'];

$Komut=mysql_query(
"UPDATE zcard_iletisim SET 

Maps='$A1', 
Adres1='$A2', 
Adres2='$A3', 
Mail='$A4',
Tel='$A5'
					where No=1");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } ?>
<?php ob_end_flush(); ?>   
<meta http-equiv="refresh" content="2;URL=iletisim.php"></p>