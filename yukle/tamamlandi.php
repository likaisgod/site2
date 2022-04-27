<?
//İKİNCİ KAYIT
$kayıt2 = '<?php 	$DILAYAR1 = mysql_query("select * from zcard_dil"); 
		$DILAYAR = mysql_fetch_assoc($DILAYAR1);
		$DIL=$DILAYAR["Dil"];
	define("SYSTEM_LANG", "$DIL");
	switch(SYSTEM_LANG){
		case "TR":include "turkce.php";break;
		case "EN":include "ingilizce.php";break;
		case "DE":include "almanca.php";break;
		case "FR":include "fransizca.php";break;
		default:include "turkce.php"; } ?>';
$kaydet2 	= fopen("../admin/dahil/dil/dilayarlari.php","w"); 	fputs($kaydet2, 	$kayıt2); 	fclose($kaydet2);
?>
<?php 
include("../admin/dahil/veritabani/baglan.php"); 
mysql_query("SET NAMES 'utf8'");
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
					<hr />
<?php $Komut001=mysql_query("INSERT INTO `jokedr_yoneticigirisi` VALUES (1, 'jokedr@hotmail.com', 'e6566481aa12aaca1520893faca285df');");?>
<?php $Komut002=mysql_query("INSERT INTO `zcard_anabilgiler` VALUES (1, 'Murat SAĞLAM', 'Web/Grafik Tasarımcı', 'jokedr@icloud.com', '+90 (530) 036 9888', 'www.jokedr.net', 'JoKedR.s', 'JoKedRm', '113163755799627914671', 'jokedr', 'jokedrm', 'jokedr', 'muratsaglam77', 'jokedr');");?>
<?php $Komut003=mysql_query("INSERT INTO `zcard_deneyim` VALUES (1, '2014', 'Lorem Ipsum', 'Lorem Ipsum', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n');");?>
<?php $Komut004=mysql_query("INSERT INTO `zcard_deneyim` VALUES (2, '2014', 'Lorem Ipsum', 'Lorem Ipsum', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n');");?>
<?php $Komut005=mysql_query("INSERT INTO `zcard_deneyim` VALUES (3, '2014', 'Lorem Ipsum', 'Lorem Ipsum', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n');");?>
<?php $Komut006=mysql_query("INSERT INTO `zcard_deneyim_beceri` VALUES (1, 'Lorem Ipsum', '100', 'grafik');");?>
<?php $Komut007=mysql_query("INSERT INTO `zcard_deneyim_beceri` VALUES (2, 'Lorem Ipsum', '84', 'grafik');");?>
<?php $Komut008=mysql_query("INSERT INTO `zcard_deneyim_beceri` VALUES (3, 'Lorem Ipsum', '72', 'web');");?>
<?php $Komut009=mysql_query("INSERT INTO `zcard_deneyim_beceri` VALUES (4, 'Lorem Ipsum', '70', 'web');");?>
<?php $Komut010=mysql_query("INSERT INTO `zcard_deneyim_beceri` VALUES (5, 'Lorem Ipsum', '68', 'diger');");?>
<?php $Komut011=mysql_query("INSERT INTO `zcard_deneyim_beceri` VALUES (6, 'Lorem Ipsum', '56', 'diger');");?>
<?php $Komut012=mysql_query("INSERT INTO `zcard_dil` VALUES (1, 'TR');");?>
<?php $Komut013=mysql_query("INSERT INTO `zcard_dosya` VALUES (1, 'yoneticipaneli.rar');");?>
<?php $Komut014=mysql_query("INSERT INTO `zcard_egitim` VALUES (1, '2014', 'Lorem Ipsum', 'Lorem Ipsum', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n');");?>
<?php $Komut015=mysql_query("INSERT INTO `zcard_egitim` VALUES (2, '2014', 'Lorem Ipsum', 'Lorem Ipsum', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n');");?>
<?php $Komut016=mysql_query("INSERT INTO `zcard_egitim` VALUES (3, '2014', 'Lorem Ipsum', 'Lorem Ipsum', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n');");?>
<?php $Komut017=mysql_query("INSERT INTO `zcard_egitim_begeniler` VALUES (1, 'Lorem Ipsum', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standard', 'Lorem Ipsum');");?>
<?php $Komut018=mysql_query("INSERT INTO `zcard_egitim_begeniler` VALUES (2, 'Lorem Ipsum', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standard', 'Lorem Ipsum');");?>
<?php $Komut019=mysql_query("INSERT INTO `zcard_egitim_begeniler` VALUES (3, 'Lorem Ipsum', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standard', 'Lorem Ipsum');");?>
<?php $Komut020=mysql_query("INSERT INTO `zcard_iletisim` VALUES (1, 'https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=tr&amp;geocode=&amp;q=Yalova,+T%C3%BCrkiye&amp;aq=0&amp;oq=t%C3%BCrkiye+ya&amp;sll=37.0625,-95.677068&amp;sspn=67.67529,66.09375&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=Yalova,+T%C3%BCrkiye&amp;z=13&amp;ll=40.65,29.266667&amp;output=embed', 'Bayrak Tepe Mahallesi', 'YALOVA', 'jokedr@icloud.com', '+90 (530) 036 9888');");?>
<?php $Komut021=mysql_query("INSERT INTO `zcard_iletisimformu` VALUES (1, 'info@jokedr.net', '123456', 'info@jokedr.net', 'yazınız.');");?>
<?php $Komut022=mysql_query("INSERT INTO `zcard_portfoy` VALUES (1, 'Lorem Ipsum', 'portfoy_1.jpg');");?>
<?php $Komut023=mysql_query("INSERT INTO `zcard_portfoy` VALUES (2, 'Lorem Ipsum', 'portfoy_2.jpg');");?>
<?php $Komut024=mysql_query("INSERT INTO `zcard_portfoy` VALUES (3, 'Lorem Ipsum', 'portfoy_3.jpg');");?>
<?php $Komut025=mysql_query("INSERT INTO `zcard_portfoy` VALUES (4, 'Lorem Ipsum', 'portfoy_4.jpg');");?>
<?php $Komut026=mysql_query("INSERT INTO `zcard_profil` VALUES (1, 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', 'Lorem Ipsum', '<p>Lorem Ipsum, dizgi ve baskı end&uuml;strisinde kullanılan mıgır metinlerdir. Lorem Ipsum, adı bilinmeyen bir matbaacının bir hurufat numune kitabı oluşturmak &uuml;zere bir yazı galerisini alarak karıştırdığı 1500&#39;lerden beri end&uuml;stri standardı sahte metinler olarak kullanılmıştır. Beşy&uuml;z yıl boyunca varlığını s&uuml;rd&uuml;rmekle kalmamış, aynı zamanda pek değişmeden elektronik dizgiye de sı&ccedil;ramıştır. 1960&#39;larda Lorem Ipsum pasajları da i&ccedil;eren Letraset yapraklarının yayınlanması ile ve yakın zamanda Aldus PageMaker gibi Lorem Ipsum s&uuml;r&uuml;mleri i&ccedil;eren masa&uuml;st&uuml; yayıncılık yazılımları ile pop&uuml;ler olmuştur.</p>\r\n');");?>
<?php $Komut027=mysql_query("INSERT INTO `zcard_sitebilgileri` VALUES (1, 'Murat SAĞLAM', 'Kişisel Web Sitesi', 'Murat SAĞLAM - vCard (Elektronik Kart)', 'murat, saglam, mrt, sglm, sağlam, net, jokedr, jkdr, 05300369888, 5300369888, yalova, bilecik, endüstri, meslek, lisesi, bilecik, universitesi,', 'Murat SAGLAM');");?>
<?php $Komut028=mysql_query("INSERT INTO `zcard_twitter` VALUES (1, '424210539321905152');");?>
	<center><b><font color="#FF0000"><h2><? echo "$krlm_022"; ?> !</h2></font><br>
<? echo "$krlm_021"; ?></b><hr />
<?php
function KlasorSil($dir) {
if (substr($dir, strlen($dir)-1, 1)!= '/')
$dir .= '/';
//echo $dir; //silinen klasörün adı
if ($handle = opendir($dir)) {
	while ($obj = readdir($handle)) {
		if ($obj!= '.' && $obj!= '..') {
			if (is_dir($dir.$obj)) {
				if (!KlasorSil($dir.$obj))
					return false;
				} elseif (is_file($dir.$obj)) {
					if (!unlink($dir.$obj))
						return false;
					}
			}
	}
		closedir($handle);
		if (!@rmdir($dir))
		return false;
		return true;
	}
return false;
} 
 
$silinecekklasor="../yukle";//silinecek klasörün adı
 
echo KlasorSil($silinecekklasor)?'<b><font color="#FF0000"><h2>!!! UYARI <> WARNING <> WARNUNG <> AVERTISSEMENT !!!</h2><br>
yukle/ SİLİNDİ! <> GELÖSCHT! <> DELETED! <> SÉGOLÈNE!</br></font><hr /><hr />':'<b><font color="#FF0000"><h2>!!! UYARI <> WARNING <> WARNUNG <> AVERTISSEMENT !!!</h2><br>
yukle/ SİLİNEMEDİ! <> NOT DELETED! <> NICHT GELÖSCHT! <> PAS SUPPRIMÉ!</b></font><hr /><hr />';
?>
<?php
$dosyaadi="../error_log";
echo unlink($dosyaadi)?"":"";
?>
<a href="../" type="button" class="btn btn-success"><? echo "$krlm_017"; ?></a>
<a href="../admin/" type="button" class="btn btn-success"><? echo "$krlm_018"; ?></a>
</center>
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