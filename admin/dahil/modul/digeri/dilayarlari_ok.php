<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php ob_start();
		$A1	= $_POST['Dil'];
		$Komut=mysql_query("UPDATE zcard_dil SET No='1', Dil='$A1' where No");
		if($Komut){ ?>
		<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
		<? } else { ?>
		<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
<?php } ob_end_flush(); ?>   
<meta http-equiv="refresh" content="2;URL=dilayarlari.php"></p>