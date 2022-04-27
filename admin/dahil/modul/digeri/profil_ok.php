<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php ob_start();
$POF1='profilresmi.jpg';
$POF2='profilresmi2.jpg';
		if($_POST){
			if ($_FILES["profilresmi1"]["size"]<1024*9128){
				if ($_FILES["profilresmi1"]["type"]=="image/jpeg"){
					$RES1="../../../../dahil/resim/".$POF1.$buzanti;
					if (move_uploaded_file($_FILES["profilresmi1"]["tmp_name"],$RES1)){ ?>
<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p>1. <? echo "$profi_007";?> <? echo "$panel_rsm";?></p></div>
					<?	}}}};
						
		if($_POST){
			if ($_FILES["profilresmi2"]["size"]<1024*9128){
				if ($_FILES["profilresmi2"]["type"]=="image/jpeg"){
					$RES2="../../../../dahil/resim/".$POF2.$kuzanti;
					if (move_uploaded_file($_FILES["profilresmi2"]["tmp_name"],$RES2)){ ?>
<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p>2. <? echo "$profi_007";?> <? echo "$panel_rsm";?></p></div>
					<?	}}}};
	$A1=$_POST['Adsoyad'];
	$A2=$_POST['Dogumt'];
	$A3=$_POST['Dogumy'];
	$A4=$_POST['Unvan'];
	$A5=$_POST['Biyografi'];

$Komut=mysql_query(
"UPDATE zcard_profil SET 

Adsoyad='$A1', 
Dogumt='$A2', 
Dogumy='$A3', 
Unvan='$A4', 
Biyografi='$A5'
					where No=1");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } ?>
<?php ob_end_flush(); ?>   
<meta http-equiv="refresh" content="2;URL=profil.php"></p>