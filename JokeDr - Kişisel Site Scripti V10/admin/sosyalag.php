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
<?php $AB1 = mysql_query("select * from zcard_anabilgiler where No in ('1')");$AB = mysql_fetch_assoc($AB1);?>
					<div class="banner">
						<h2><? echo "$menul_002";?></h2>
						<p><? echo "$sosya_001";?></p>
					</div>
					<h3><? echo "$menul_002";?>:</h3>
					<div class="well">
						<strong><? echo "$sosya_001";?>:</strong>
<form name="Duzenle" id="durum" method="post" class="form-horizontal" enctype="multipart/form-data" action="dahil/modul/digeri/sosyalag_ok.php">   
		<hr />
		<div class="control-group"><label class="control-label" for="Adsoyad"><? echo "$sosya_002";?></label>
		<div class="controls"><input type="text" name="Adsoyad" id="Adsoyad" value="<?=$AB['Adsoyad'];?>" /></div></div>
		<div class="control-group"><label class="control-label" for="Unvan"><? echo "$sosya_003";?></label>
		<div class="controls"><input type="text" name="Unvan" id="Unvan" value="<?=$AB['Unvan'];?>" /></div></div>
		<div class="control-group"><label class="control-label" for="Mail"><? echo "$sosya_004";?></label>
		<div class="controls"><input type="text" name="Mail" id="Mail" value="<?=$AB['Mail'];?>" /></div></div>
		<div class="control-group"><label class="control-label" for="Tel"><? echo "$sosya_005";?></label>
		<div class="controls"><input type="text" name="Tel" id="Tel" value="<?=$AB['Tel'];?>" /></div></div>
		<div class="control-group"><label class="control-label" for="Web"><? echo "$sosya_006";?></label>
		<div class="controls"><input type="text" name="Web" id="Web" value="<?=$AB['Web'];?>" /></div></div>		
		<hr />
		<div class="alert alert-info"><h4><? echo "$panel_orn";?>!</h4><p><? echo "$sosya_009";?></p></div>
		<hr />
		<div class="control-group"><label class="control-label" for="Facebook">Facebook</label>
		<div class="controls"><input type="text" name="Facebook" id="Facebook" value="<?=$AB['Facebook'];?>" /></div></div>
		<div class="control-group"><label class="control-label" for="Twitter">Twitter</label>
		<div class="controls"><input type="text" name="Twitter" id="Twitter" value="<?=$AB['Twitter'];?>" /></div></div>
		<div class="control-group"><label class="control-label" for="Googleplus">Google Plus</label>
		<div class="controls"><input type="text" name="Googleplus" id="Googleplus" value="<?=$AB['Googleplus'];?>" /></div></div>
		<div class="control-group"><label class="control-label" for="Tumblr">Tumblr</label>
		<div class="controls"><input type="text" name="Tumblr" id="Tumblr" value="<?=$AB['Tumblr'];?>" /></div></div>
		<div class="control-group"><label class="control-label" for="Youtube">Youtube</label>
		<div class="controls"><input type="text" name="Youtube" id="Youtube" value="<?=$AB['Youtube'];?>" /></div></div>
		<div class="control-group"><label class="control-label" for="Deviantart">Deviantart</label>
		<div class="controls"><input type="text" name="Deviantart" id="Deviantart" value="<?=$AB['Deviantart'];?>" /></div></div>
		<div class="control-group"><label class="control-label" for="Skype">Skype</label>
		<div class="controls"><input type="text" name="Skype" id="Skype" value="<?=$AB['Skype'];?>" /></div></div>
		<div class="control-group"><label class="control-label" for="Instagram">Instagram</label>
		<div class="controls"><input type="text" name="Instagram" id="Instagram" value="<?=$AB['Instagram'];?>" /></div></div>
		<hr />
		<div class="control-group"><label class="control-label" for="user-avatar"><? echo "$sosya_007";?></label>
		<div class="controls"><img class="avatar" src="../dahil/resim/qrkod.jpg" alt="user" />
		</div><div class="controls"><input type="file" name="qrkod" /></div></div>
		<div class="control-group"><label class="control-label" for="user-avatar"><? echo "$sosya_008";?></label>
		<div class="controls"><img class="avatar" src="../dahil/resim/profil.jpg" alt="user" />
		</div><div class="controls"><input type="file" name="profil" /></div></div>
		<button type="submit" class="btn btn-success"><? echo "$buton_001";?></button>
		</form>
					</div>
				</div>
			</div>
<?php include('dahil/php/telif.php'); ?>
		</div>
<?php include('dahil/php/java.php'); ?>
	</body>
</html>