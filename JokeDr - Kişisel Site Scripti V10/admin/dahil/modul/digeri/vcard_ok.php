<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php ob_start();
$dizin = '../../../../dahil/dosya/';
$yuklenecek_dosya = $dizin . basename($_FILES['vcard']['name']);
if (move_uploaded_file($_FILES['vcard']['tmp_name'], $yuklenecek_dosya))
{ ?>
<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
<? } else { ?>
<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
<? } ?>
<? $Komut=mysql_query(
"UPDATE zcard_dosya SET Vcard='$yuklenecek_dosya' where No=1");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } ?>
<?php ob_end_flush(); ?>   
<meta http-equiv="refresh" content="2;URL=vcard.php"></p>