<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php ob_start(); ?>
<?php

	$NO		= $_GET["veridetay"];
	$A2		= $_POST['Yil'];
	$A3		= $_POST['Konum'];
	$A4		= $_POST['Firma'];
	$A5		= $_POST['Acikla'];
$Komut=mysql_query(
"UPDATE zcard_egitim SET 

Yil='$A2', 
Konum='$A3', 
Firma='$A4', 
Acikla='$A5' 

					where No='$NO'");
					
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } ?>
<?php ob_end_flush(); ?>    
<meta http-equiv="refresh" content="2;URL=egitim.php"></p>