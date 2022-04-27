<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php ob_start();
$sql=mysql_query("select * from jokedr_yoneticigirisi where No='1'");
while($oku=mysql_fetch_array($sql)){
	$A1	=$_POST['Eposta'];
	$A2	=$_POST['Sifre'];
	$A3	= $oku['Sifre'];}
	$A4=md5('jd783m'.$_POST['Sifre'].'73jg');
	IF ($A2 == $A3){ 
	$Komut=mysql_query("UPDATE jokedr_yoneticigirisi SET No='1', Eposta='$A1', Sifre='$A2' where No");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? }} ELSE { 
	$Komut=mysql_query("UPDATE jokedr_yoneticigirisi SET No='1', Eposta='$A1', Sifre='$A4' where No");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? }} ?>
<?php ob_end_flush(); ?>   
<meta http-equiv="refresh" content="2;URL=yoneticiayarlari.php"></p>