<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php ob_start();
	$A1=$_POST['MailAdresi'];
	$A2=$_POST['MailSifresi'];
	$A3=$_POST['GidecekAdres'];
	$A4=$_POST['DomainAdresi'];

$Komut=mysql_query(
"UPDATE zcard_iletisimformu SET 

MailAdresi='$A1', 
MailSifresi='$A2', 
GidecekAdres='$A3', 
DomainAdresi='$A4'
					where No=1");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } ?>
<?
//İLK KAYIT
$B1	=	$imesa_001;
$B2	=	$imesa_002;
$B3	=	$imesa_003;
$B4	=	$imesa_004;
$B5	=	$imesa_005;
$B6	=	$imesa_006;
$kayit = '<?
$mail_adresiniz	= "'.$A1.'";
$mail_sifreniz	= "'.$A2.'";
$gidecek_adres	= "'.$A3.'";
$domain_adresi	= "'.$A4.'";
require("iletisim/include/class.php");
$mail = new PHPMail();
$mail->Host       = "smtp.".$domain_adresi;
$mail->SMTPAuth   = true;
$mail->Username   = $mail_adresiniz;
$mail->Password   = $mail_sifreniz;
$mail->IsSMTP();
$mail->AddAddress($gidecek_adres);
$mail->From       = $mail_adresiniz;
$mail->FromName   = $mail_adresiniz;
$mail->Subject    = "'.$B4.'";
$mail->Body       = 
"'.$B1.'	: ".$_POST["email"]."\n".
"'.$B2.'	: ".$_POST["konu"]."\n".
"'.$B3.'	: ".$_POST["mesaj"];
$mail->AltBody    = "";
if(!$mail->Send()){ echo "<center><b>'.$B5.'</b></center>"; exit; }
echo "<center><b>'.$B6.'</b></center>"; ?>';

$kaydet 	= fopen("../../../../dahil/gonder.php","w"); 	fputs($kaydet, 	$kayit); 	fclose($kaydet);?>
<?php ob_end_flush(); ?>   
<meta http-equiv="refresh" content="2;URL=iletisimformu.php"></p>