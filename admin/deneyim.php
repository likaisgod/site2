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
						<h2><? echo "$menul_010";?></h2>
						<p><? echo "$deney_001";?></p>
					</div>

					<h3><? echo "$menul_010";?>:</h3>
					<div class="well">
						<strong><? echo "$deney_001";?>:</strong>
						<br />
					<ul class="pager"><li class="next"><a class="btn-success" href="deneyim_ekle.php"><? echo "$menul_010";?> <? echo "$buton_004";?> &rarr;</a></li></ul>
					
					<table class="table table-bordered table-striped">
						<thead>
							<tr>
								<th class="optional"><? echo "$deney_003";?></th>
								<th><? echo "$deney_004";?></th>
								<th class="optional"><? echo "$deney_005";?></th>
								<th class="optional"><? echo "$deney_006";?></th>
								<th><? echo "$buton_007";?></th>
							</tr>
						</thead>
						<tbody>
<?php
$sql=mysql_query("select * from zcard_deneyim ORDER BY No");
while($oku=mysql_fetch_array($sql))
{
	$A1	= $oku['No']; 
	$A2	= $oku['Yil'];
	$A4	= $oku['Konum'];
	$A3	= $oku['Firma'];
	$A5 = $oku['Acikla'];
  echo '
  							<tr>
								<td class="optional">'.$A2 .'</td>
								<td>'.$A3 .'</td>
								<td class="optional">'.$A4 .'</td>
								<td class="optional">'.$A5 .'</td>
							
							<td>
							<div class="btn-group">'; ?>
							<button class="btn"><? echo "$buton_007";?></button><? echo '
							<button data-toggle="dropdown" class="btn dropdown-toggle"><span class="caret"></span>

							</button>
							<ul class="dropdown-menu">
								<li>
								<a href="deneyim_duzenle.php?veridetay='.$A1.'">'; ?><? echo "$buton_005";?></a><? echo '
								<li>
								<a href="deneyim_sil.php?veridetay='.$A1.'">'; ?><? echo "$buton_006";?></a><? echo '
								</li>
							</ul>
						</div>
                          </td></tr>';
	
	}?>
						</tbody>
					</table>
					</div>
				</div>
			</div>
<?php include('dahil/php/telif.php'); ?>
		</div>
<?php include('dahil/php/java.php'); ?>
	</body>
</html>