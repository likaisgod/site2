<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php $sql=mysql_query("select * from zcard_egitim ORDER BY No DESC LIMIT 1");while($oku=mysql_fetch_array($sql)){$EG= $oku['No'];} ?>
<?php ob_start(); ?>
<?php
	$A1		= $EG+1;
	$A2		= $_POST['Yil'];
	$A3		= $_POST['Konum'];
	$A4		= $_POST['Firma'];
	$A5		= $_POST['Acikla'];

$Komut=mysql_query("insert into zcard_egitim values('$A1','$A2','$A3','$A4','$A5')");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } ?>
<?php ob_end_flush(); ?>    
<meta http-equiv="refresh" content="2;URL=egitim.php"></p>