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
					
<?php
$SV = $_POST['server'];
$DN = $_POST['verad'];
$DK = $_POST['verkul'];
$DS = $_POST['versif'];
$con=mysqli_connect("$SV","$DK","$DS","$DN");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create table
$sql01="CREATE TABLE IF NOT EXISTS jokedr_yoneticigirisi (No int(11) NOT NULL DEFAULT '0',Eposta char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Sifre longtext COLLATE utf8_turkish_ci,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql02="CREATE TABLE IF NOT EXISTS zcard_anabilgiler (No int(11) NOT NULL DEFAULT '0',Adsoyad char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Unvan char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Mail char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Tel char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Web char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Facebook char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Twitter char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Googleplus char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Tumblr char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Youtube char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Deviantart char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Skype char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Instagram char(255) COLLATE utf8_turkish_ci DEFAULT NULL,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql03="CREATE TABLE IF NOT EXISTS zcard_deneyim (No int(11) NOT NULL DEFAULT '0',Yil char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Konum char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Firma char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Acikla longtext COLLATE utf8_turkish_ci,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql04="CREATE TABLE IF NOT EXISTS zcard_deneyim_beceri (No int(11) NOT NULL DEFAULT '0',Adi char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Yuz char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Tur char(255) COLLATE utf8_turkish_ci DEFAULT NULL,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql05="CREATE TABLE IF NOT EXISTS zcard_dil (No int(11) NOT NULL DEFAULT '0',Dil char(255) COLLATE utf8_turkish_ci DEFAULT NULL,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql06="CREATE TABLE IF NOT EXISTS zcard_dosya (No int(11) NOT NULL DEFAULT '0',Vcard longtext COLLATE utf8_turkish_ci,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql07="CREATE TABLE IF NOT EXISTS zcard_egitim (No int(11) NOT NULL DEFAULT '0',Yil char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Konum char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Firma char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Acikla longtext COLLATE utf8_turkish_ci,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql08="CREATE TABLE IF NOT EXISTS zcard_egitim_begeniler (No int(11) NOT NULL DEFAULT '0',Baslik char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Aciklama char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Web char(255) COLLATE utf8_turkish_ci DEFAULT NULL,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql09="CREATE TABLE IF NOT EXISTS zcard_iletisim (No int(11) NOT NULL DEFAULT '0',Maps longtext COLLATE utf8_turkish_ci,Adres1 char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Adres2 char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Mail char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Tel char(255) COLLATE utf8_turkish_ci DEFAULT NULL,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql10="CREATE TABLE IF NOT EXISTS zcard_iletisimformu (No int(11) NOT NULL DEFAULT '0',MailAdresi longtext COLLATE utf8_turkish_ci,MailSifresi char(255) COLLATE utf8_turkish_ci DEFAULT NULL,GidecekAdres char(255) COLLATE utf8_turkish_ci DEFAULT NULL,DomainAdresi char(255) COLLATE utf8_turkish_ci DEFAULT NULL,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql11="CREATE TABLE IF NOT EXISTS zcard_portfoy (No int(11) NOT NULL DEFAULT '0',Baslik char(200) COLLATE utf8_turkish_ci DEFAULT NULL,Resim char(200) COLLATE utf8_turkish_ci DEFAULT NULL,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql12="CREATE TABLE IF NOT EXISTS zcard_profil (No int(11) NOT NULL DEFAULT '0',Adsoyad char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Dogumt char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Dogumy char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Unvan char(255) COLLATE utf8_turkish_ci DEFAULT NULL,Biyografi longtext COLLATE utf8_turkish_ci,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql13="CREATE TABLE IF NOT EXISTS zcard_sitebilgileri (No int(11) NOT NULL DEFAULT '0',Adi char(200) COLLATE utf8_turkish_ci DEFAULT NULL,Slogan char(200) COLLATE utf8_turkish_ci DEFAULT NULL,Aciklama longtext COLLATE utf8_turkish_ci,Etiket longtext COLLATE utf8_turkish_ci,Yazar char(255) COLLATE utf8_turkish_ci DEFAULT NULL,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";
$sql14="CREATE TABLE IF NOT EXISTS zcard_twitter (No int(11) NOT NULL DEFAULT '0',Api char(255) COLLATE utf8_turkish_ci DEFAULT NULL,PRIMARY KEY (No)) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_turkish_ci";

// Execute query
echo "<center>";
if (mysqli_query($con,$sql01))	{echo 'jokedr_yoneticigirisi	 OK.';}		else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql02))	{echo 'zcard_anabilgiler		 OK.';}			else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql03))	{echo 'zcard_deneyim OK.';}	else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql04))	{echo 'zcard_deneyim_beceri OK.';}				else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql05))	{echo 'zcard_dil OK.';}			else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql06))	{echo 'zcard_dosya OK.';}	else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql07))	{echo 'zcard_egitim OK.';}			else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql08))	{echo 'zcard_egitim_begeniler OK.';}			else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql09))	{echo 'zcard_iletisim OK.';}			else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql10))	{echo 'zcard_iletisimformu OK.';}		else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql11))	{echo 'zcard_portfoy OK.';}			else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql12))	{echo 'zcard_profil OK.<meta http-equiv="refresh" content="2;URL=tamamlandi.php">';}	else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql13))	{echo 'zcard_sitebilgileri OK.<meta http-equiv="refresh" content="2;URL=tamamlandi.php">';}	else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";
if (mysqli_query($con,$sql14))	{echo 'zcard_twitter OK.<meta http-equiv="refresh" content="2;URL=tamamlandi.php">';}	else {echo '';?><? echo "$krlm_013"; ?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a>';}echo "</br><hr />";

//İLK KAYIT
$kayıt = '<?php 
$host="'.$SV.'";
$kullanici="'.$DK.'";
$sifre="'.$DS.'";
$veritabanı="'.$DN.'";
$bag= mysql_connect($host,$kullanici,$sifre);
$vbag=mysql_select_db("$veritabanı", $bag);
mysql_select_db("$veritabanı", $bag);
if (!$bag)  {  die("Mysql ba&#287;lant&#305;s&#305; sa&#287;lan&#305;lamad&#305;.");}
if (!$vbag) {  die("Veritaban&#305;na ba&#287;lan&#305;lamad&#305;");}
?>';

$kaydet 	= fopen("../admin/dahil/veritabani/baglan.php","w"); 	fputs($kaydet, 	$kayıt); 	fclose($kaydet);
//İKİNCİ KAYIT
$kayıt2 = '<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_sqlbaglanti = "'.$SV.'";
$database_sqlbaglanti = "'.$DN.'";
$username_sqlbaglanti = "'.$DK.'";
$password_sqlbaglanti = "'.$DS.'";
$sqlbaglanti = mysql_pconnect($hostname_sqlbaglanti, $username_sqlbaglanti, $password_sqlbaglanti) or trigger_error(mysql_error(),E_USER_ERROR); 
?>';

$kaydet2 	= fopen("../admin/dahil/veritabani/Connections/sqlbaglanti.php","w"); 	fputs($kaydet2, 	$kayıt2); 	fclose($kaydet2);

?>
<a href="tamamlandi.php" type="button" class="btn btn-success"><? echo "$krlm_016"; ?></a>
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