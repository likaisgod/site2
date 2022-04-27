<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php ob_start();
$POF1='profil.jpg';
$POF2='qrkod.jpg';
		if($_POST){
			if ($_FILES["qrkod"]["size"]<1024*9128){
				if ($_FILES["qrkod"]["type"]=="image/jpeg"){
					$RES1="../../../../dahil/resim/".$POF2.$buzanti;
					if (move_uploaded_file($_FILES["qrkod"]["tmp_name"],$RES1)){ ?>
<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$sosya_007";?> <? echo "$panel_rsm";?></p></div>
					<?	}}}};
						
		if($_POST){
			if ($_FILES["profil"]["size"]<1024*9128){
				if ($_FILES["profil"]["type"]=="image/jpeg"){
					$RES2="../../../../dahil/resim/".$POF1.$kuzanti;
					if (move_uploaded_file($_FILES["profil"]["tmp_name"],$RES2)){ ?>
<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$sosya_008";?> <? echo "$panel_rsm";?></p></div>
					<?	}}}};
	$A1=$_POST['No'];
	$A2=$_POST['Adsoyad'];
	$A3=$_POST['Unvan'];
	$A4=$_POST['Mail'];
	$A5=$_POST['Tel'];
	$A6=$_POST['Web'];
	$A7=$_POST['Facebook'];
	$A8=$_POST['Twitter'];
	$A9=$_POST['Googleplus'];
	$A10=$_POST['Tumblr'];
	$A11=$_POST['Youtube'];
	$A12=$_POST['Deviantart'];
	$A13=$_POST['Skype'];
	$A14=$_POST['Instagram'];

$Komut=mysql_query(
"UPDATE zcard_anabilgiler SET 

Adsoyad='$A2', 
Unvan='$A3', 
Mail='$A4', 
Tel='$A5', 
Web='$A6', 
Facebook='$A7', 
Twitter='$A8', 
Googleplus='$A9', 
Tumblr='$A10', 
Youtube='$A11', 
Deviantart='$A12', 
Skype='$A13', 
Instagram='$A14'
					where No=1");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } ?>
<?php ob_end_flush(); ?>   
<meta http-equiv="refresh" content="2;URL=sosyalag.php"></p>