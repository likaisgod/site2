<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php $sql=mysql_query("select * from zcard_egitim_begeniler ORDER BY No DESC LIMIT 1");while($oku=mysql_fetch_array($sql)){$EB= $oku['No'];} ?>
<?php ob_start(); ?>
<?php
	$A1		= $EB+1;
	$A2		= $_POST['Baslik'];
	$A3		= $_POST['Aciklama'];
	$A4		= $_POST['Web'];

$Komut=mysql_query("insert into zcard_egitim_begeniler values('$A1','$A2','$A3','$A4')");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } ?>
<?php ob_end_flush(); ?>    
<meta http-equiv="refresh" content="2;URL=begeni.php"></p>