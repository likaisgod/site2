<?php $AB1 = mysql_query("select * from zcard_anabilgiler where No in ('1')"); $AB = mysql_fetch_assoc($AB1);?>
<?php $DD1 = mysql_query("select * from zcard_dosya where No in ('1')"); $DD = mysql_fetch_assoc($DD1);?>
<?php $KI1 = mysql_query("select * from zcard_iletisim where No in ('1')"); $KI = mysql_fetch_assoc($KI1);?>
<?php $KP1 = mysql_query("select * from zcard_profil where No in ('1')"); $KP = mysql_fetch_assoc($KP1);?>
<?php $SB1 = mysql_query("select * from zcard_sitebilgileri where No in ('1')"); $SB = mysql_fetch_assoc($SB1);?>
<?php $KT1 = mysql_query("select * from zcard_twitter where No in ('1')"); $KT = mysql_fetch_assoc($KT1);?>
<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="description" content="<?=$SB['Aciklama'];?>" />
		<meta name="keywords" content="<?=$SB['Etiket'];?>"/>
		<meta name="author" content="<?=$SB['Yazar'];?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<title><?=$SB['Adi'];?> | <?=$SB['Slogan'];?></title>

<link rel="shortcut icon" href="dahil/resim/favicon.ico">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,300,600,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" media="screen" href="dahil/css/bootstrap.min.css" type="text/css"/>
<link rel="stylesheet" media="screen" href="dahil/css/custom.css" type="text/css"/>
<link rel="stylesheet" media="screen" href="dahil/css/jquery.mCustomScrollbar.css" type="text/css" />
<link rel="stylesheet" media="screen" href="dahil/css/style.css" type="text/css"/>
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">
<link rel="stylesheet" href="dahil/lightbox/css/lightbox.css" media="screen"/>
<link rel="stylesheet" type="text/css" href="admin/dahil/easyui/themes/metro/easyui2.css">
</head>
