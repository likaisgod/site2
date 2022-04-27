<?php require_once('dahil/veritabani/Connections/sqlbaglanti.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

mysql_select_db($database_sqlbaglanti, $sqlbaglanti);
$query_YoneticiSistemi = "SELECT Eposta, Sifre FROM jokedr_yoneticigirisi";
$YoneticiSistemi = mysql_query($query_YoneticiSistemi, $sqlbaglanti) or die(mysql_error());
$row_YoneticiSistemi = mysql_fetch_assoc($YoneticiSistemi);
$totalRows_YoneticiSistemi = mysql_num_rows($YoneticiSistemi);
?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['Eposta'])) {
  $loginUsername=$_POST['Eposta'];
  $password=md5('jd783m'.$_POST['Sifre'].'73jg');
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "anasayfa.php";
  $MM_redirectLoginFailed = "hataligiris.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_sqlbaglanti, $sqlbaglanti);
  
  $LoginRS__query=sprintf("SELECT Eposta, Sifre FROM jokedr_yoneticigirisi WHERE Eposta=%s AND Sifre=%s",
    GetSQLValueString($loginUsername, "text"), GetSQLValueString($password, "text")); 
   
  $LoginRS = mysql_query($LoginRS__query, $sqlbaglanti) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<?php
IF (empty($_SESSION['MM_Username'])){
} ELSE{
header('Location: anasayfa.php');}
?>
<?php include('dahil/php/jokedr.php'); ?>
<?php include("dahil/veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("dahil/dil/dilayarlari.php"); ?>
<!DOCTYPE html>
<html>
<?php include('dahil/php/basksm.php'); ?>
	<body>
<?php include('dahil/php/ustksm.php'); ?>

		<div class="container wrapper">
			<div class="row">
				<br /><br />
				<div class="span4 offset4 well">
					<center><img src="dahil/resim/<? echo "$giris_000";?>" alt="logo" /></center>
					<hr />
					<h3><? echo "$giris_001";?>:</h3>
					<form ACTION="<?php echo $loginFormAction; ?>" METHOD="POST" class="form login-form" name="YoneticiGirisi">
					  <label for="Email"><? echo "$giris_002";?>:</label>
						<input name="Eposta" type="text" class="span4" id="Email" placeholder="<? echo "$giris_002";?>" />

						<label for="Password"><? echo "$giris_003";?>:</label>
						<input name="Sifre" type="password" class="span4" id="Password" placeholder="<? echo "$giris_003";?>" />

						<label class="checkbox">
							<input type="checkbox" checked /> <? echo "$giris_004";?>
						</label>
						<button type="submit" class="btn btn-success"><? echo "$giris_005";?></button>
						<hr />
					</form>
				</div>
			</div>
<?php include('dahil/php/telif.php'); ?>
		</div>
<?php include('dahil/php/java.php'); ?>
	</body>
</html>
<?php
mysql_free_result($YoneticiSistemi);
?>
