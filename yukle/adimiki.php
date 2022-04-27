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
					<hr />
					<h3>1. <? echo "$krlm_006";?>:</h3>
					<form name="giris" method="post" class="form-horizontal" enctype="multipart/form-data" action="tablolar.php">  
   
					<div class="control-group">
                    <label for="server"><? echo "$krlm_007";?>:</label>
                    <input name="server" type="text" class="server" id="server" placeholder="" value="localhost" /></div>
					<div class="control-group">
					<label for="verad"><? echo "$krlm_008";?>:</label>
                    <input name="verad" type="text" class="verad" id="verad" placeholder="" /></div>
					<div class="control-group">
					<label for="verkul"><? echo "$krlm_009";?>:</label>
                    <input name="verkul" type="text" class="verkul" id="verkul" placeholder="" /></div>
					<div class="control-group">
					<label for="versif"><? echo "$krlm_010";?>:</label>
                    <input name="versif" type="text" class="versif" id="versif" placeholder="" /></div>
					<hr />
					<? echo "$krlm_011";?>.
					<hr />
					<button type="submit" class="btn btn-success"><? echo "$buton_008";?></button>
</center>
					</form>
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