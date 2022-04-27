<?php include("../../veritabani/baglan.php"); mysql_query("SET NAMES 'utf8'"); ?>
<?php include("../../dil/dilayarlari.php"); ?>
<?php $sql=mysql_query("select * from zcard_portfoy ORDER BY No DESC LIMIT 1");while($oku=mysql_fetch_array($sql)){$PF= $oku['No'];} ?>
<?php ob_start();
	$A1		= $PF+1;
	$A2		= $_POST['Baslik'];
	$A3		= "portfoy.jpg";
	
$ISIM = "portfoy_$A1.jpg";
		$KNTRL=$_FILES["Resim"]["name"];
		if($_POST){
			if ($_FILES["Resim"]["size"]<1024*9128){
				if ($_FILES["Resim"]["type"]=="image/jpeg"){
					$RES1="../../../../dahil/portfoy/".$ISIM.$buzanti;
					if (move_uploaded_file($_FILES["Resim"]["tmp_name"],$RES1)){ ?>
<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$menul_005";?> <? echo "$panel_rsm";?></p></div>
					<?	}}}};
					
	IF (EMPTY($KNTRL)){
	$Komut=mysql_query("insert into zcard_portfoy values('$A1','$A2','$A3')");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? }
	} ELSE {
	$Komut=mysql_query("insert into zcard_portfoy values('$A1','$A2','$ISIM')");
	if($Komut){ ?>
	<div class="alert alert-success"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_ok";?></p></div>
	<? } else { ?>
	<div class="alert alert-danger"><h4><? echo "$panel_drm";?>!</h4><p><? echo "$panel_hata";?></p></div>
	<? } } ?>

<?php ob_end_flush(); ?>    
<meta http-equiv="refresh" content="2;URL=portfoy.php"></p>