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
$con=mysqli_connect("$SV","$DK","$DS");
// Check connection
if (mysqli_connect_errno())
  {
  echo '  <p align="center"><b><font color="#FF0000">';?>!  <? echo "$krlm_014";?> !</font><br>
';?><? echo "$krlm_013";?><? echo ': </b><hr /><h3> ' . mysqli_connect_error();
  }

// Create database
$sql="CREATE DATABASE $DN";
if (mysqli_query($con,$sql))
  {
  echo '
<center><b><font color="#FF0000"><h2>'.$DN.'</h2></font><br>
';?><? echo "$krlm_012";?><? echo ' </b></p><hr /><h3>
<a href="adimiki.php" type="submit" class="btn btn-success">';?><? echo "$buton_008"; ?><? echo '</a></center>';
  }
else
  {
  echo '
<center><b><font color="#FF0000"><h2>';?>!  <? echo "$krlm_014";?> !</h2></font><br>
<? echo "$krlm_013";?><? echo ': </b><hr /><h3> '.mysqli_error($con).'<hr />
<a href="javascript:history.back(-1)" type="button" class="btn btn-success">';?><? echo "$krlm_015"; ?><? echo '</a></center>';
  }
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

?></p>
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