<?
$Dil	=	$_POST[Dil];
// TÜRKÇE
IF ($Dil == 'TR'){
$TR = '<? define("SYSTEM_LANG", "TR");
		switch(SYSTEM_LANG){
		case "TR":include "turkce.php";break;
		case "EN":include "ingilizce.php";break;
		case "DE":include "almanca.php";break;
		case "FR":include "fransizca.php";break;
		default:include "turkce.php";}?>';
$TRK=fopen("../admin/dahil/dil/dilayarlari.php","w");fputs($TRK,$TR);fclose($TRK);}
// TÜRKÇE
IF ($Dil == 'EN'){
$EN = '<? define("SYSTEM_LANG", "EN");
		switch(SYSTEM_LANG){
		case "TR":include "turkce.php";break;
		case "EN":include "ingilizce.php";break;
		case "DE":include "almanca.php";break;
		case "FR":include "fransizca.php";break;
		default:include "ingilizce.php";}?>';
$ENK=fopen("../admin/dahil/dil/dilayarlari.php","w");fputs($ENK,$EN);fclose($ENK);}
// TÜRKÇE
IF ($Dil == 'DE'){
$DE = '<? define("SYSTEM_LANG", "DE");
		switch(SYSTEM_LANG){
		case "TR":include "turkce.php";break;
		case "EN":include "ingilizce.php";break;
		case "DE":include "almanca.php";break;
		case "FR":include "fransizca.php";break;
		default:include "almanca.php";}?>';
$DEK=fopen("../admin/dahil/dil/dilayarlari.php","w");fputs($DEK,$DE);fclose($DEK);}
// TÜRKÇE
IF ($Dil == 'FR'){
$FR = '<? define("SYSTEM_LANG", "FR");
		switch(SYSTEM_LANG){
		case "TR":include "turkce.php";break;
		case "EN":include "ingilizce.php";break;
		case "DE":include "almanca.php";break;
		case "FR":include "fransizca.php";break;
		default:include "fransizca.php";}?>';
$FRK=fopen("../admin/dahil/dil/dilayarlari.php","w");fputs($FRK,$FR);fclose($FRK);}

?>
<?php include("../admin/dahil/dil/dilayarlari.php"); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="description" content="" />
		<meta name="keywords" content=""/>
		<meta name="author" content="Murat SAGLAM" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<title><? echo "$krlm_001";?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="../admin/dahil/css/bootstrap.min.css" />
		<link rel="stylesheet" href="../admin/dahil/css/style.css" />
		<link rel="stylesheet" href="../admin/dahil/css/font-awesome.css" />
		<link rel="shortcut icon" href="../admin/dahil/resim/favicon.ico">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>
		<body>
		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="brand" href="#"><? echo "$krlm_002";?></a>
					<div class="nav-collapse collapse">
					</div>
				</div>
			</div>
			<div class="sub-navbar">
				<div class="container">
					<p><i class="icon icon-user"></i> <? echo "$krlm_003";?></p>
				</div>
			</div>
		</div>

		<div class="container wrapper">
			<div class="row">
				<br /><br />
				<div class="span4 offset4 well">
					<center><img class="text-center" src="../admin/dahil/resim/<? echo "$giris_000";?>" /></center>
					<hr /><center>
					<h3><? echo "$krlm_004";?>;</br>
					<font color="#FF0000">1. <? echo "$krlm_006";?></font></br>
					<? echo "$krlm_005";?>;</br>
					<font color="#FF0000">2. <? echo "$krlm_006";?></font>
					</h3>
					<hr />
					<a href="adimbir.php" type="submit" class="btn btn-success">1.<? echo "$krlm_006";?></a>
					<a href="adimiki.php" type="submit" class="btn btn-success">2.<? echo "$krlm_006";?></a></center>
					<hr />
				</div>
			</div>
</br></br></br></br></br></br></br></br></br></br><hr />

			<footer>
				<p><? echo "$telif_001";?> <? $yil= date("Y"); echo $yil; ?>. <? echo "$telif_002";?><?=$ZPcard['ZSadi'];?> <? echo "$telif_003";?>. <? echo "$telif_004";?> <a href="http://jokedr.net">JoKedR</a></p>
			</footer>

		</div> <!-- /container -->

		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../admin/dahil/js/jquery-1.8.0.min.js"><\/script>')</script>
		<script src="../admin/dahil/js/bootstrap.min.js"></script>
	</body>
</html>