<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php ob_start(); ?>
<?php

	$NO		= $_GET["veridetay"];
	$A2		= $_POST['Adi'];
	$A3		= $_POST['Yuz'];
	$A4		= $_POST['Tur'];
$Komut=mysql_query(
"UPDATE zcard_deneyim_beceri SET 

Adi='$A2', 
Yuz='$A3', 
Tur='$A4'

					where No='$NO'");
					
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } ?>
<?php ob_end_flush(); ?>    
<meta http-equiv="refresh" content="2;URL=beceri.php"></p>