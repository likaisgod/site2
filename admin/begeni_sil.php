<?php require_once('dahil/veritabani/Connections/sqlbaglanti.php'); ?>
<?php
//initialize the session
if (!isset($_SESSION)) {
  session_start();
}

// ** Logout the current user. **
$logoutAction = $_SERVER['PHP_SELF']."?doLogout=true";
if ((isset($_SERVER['QUERY_STRING'])) && ($_SERVER['QUERY_STRING'] != "")){
  $logoutAction .="&". htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_GET['doLogout'])) &&($_GET['doLogout']=="true")){
  //to fully log out a visitor we need to clear the session varialbles
  $_SESSION['MM_Username'] = NULL;
  $_SESSION['MM_UserGroup'] = NULL;
  $_SESSION['PrevUrl'] = NULL;
  unset($_SESSION['MM_Username']);
  unset($_SESSION['MM_UserGroup']);
  unset($_SESSION['PrevUrl']);
	
  $logoutGoTo = "cikis.php";
  if ($logoutGoTo) {
    header("Location: $logoutGoTo");
    exit;
  }
}
?>
<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "yetki.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
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
<?php include('dahil/php/jokedr.php'); ?>
<?php include("dahil/veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("dahil/dil/dilayarlari.php"); ?>
<!DOCTYPE html>
<html>
<?php include('dahil/php/basksm.php'); ?>
	<body>
<?php include('dahil/php/ustksm.php'); ?>
		<div class="container wrapper">
<?php include('dahil/php/menu.php'); ?>
				<div class="span9 content">
					<div class="banner">
						<h2><? echo "$menul_008";?></h2>
						<p><? echo "$begen_001";?></p>
					</div>

					<h3><? echo "$menul_008";?>:</h3>
					<div class="well">
						<strong><? echo "$begen_001";?>:</strong>
						<br />
<?php ob_start(); ?>	</br>
<?php

$NO=$_GET["veridetay"];


$Komut=mysql_query("delete from zcard_egitim_begeniler where No=$NO");
					
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } ?>
<?php ob_end_flush(); ?>    
<meta http-equiv="refresh" content="2;URL=begeni.php"></p>

					

					</div>
				</div>
			</div>
<?php include('dahil/php/telif.php'); ?>
		</div>
<?php include('dahil/php/java.php'); ?>
	</body>
</html>