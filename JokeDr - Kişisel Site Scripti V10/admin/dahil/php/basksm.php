<?php $SITEAD1 = mysql_query("select * from zcard_sitebilgileri where No in ('1')");$SITEAD = mysql_fetch_assoc($SITEAD1);?>
<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta name="description" content="<?=$SITEAD['Aciklama'];?>" />
		<meta name="keywords" content="<?=$SITEAD['Etiket'];?>"/>
		<meta name="author" content="<?=$SITEAD['Yazar'];?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<title><?=$SITEAD['Adi'];?> | <? echo "$giris_010";?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<link rel="stylesheet" href="dahil/css/bootstrap.min.css" />
		<link rel="stylesheet" href="dahil/css/style.css" />
		<link rel="stylesheet" href="dahil/css/font-awesome.css" />
		<link rel="shortcut icon" href="dahil/resim/favicon.ico">
		<link rel="stylesheet" type="text/css" href="dahil/easyui/themes/metro/easyui.css">
		<link rel="stylesheet" type="text/css" href="dahil/easyui/themes/icon.css">
		<script type="text/javascript" src="dahil/easyui/jquery.min.js"></script>
		<script type="text/javascript" src="dahil/easyui/jquery.easyui.min.js"></script>
		<script type="text/javascript">
		$(function(){
		$('#durum').form({
		success:function(data){
		$.messager.alert('<? echo "$panel_drm";?>', data, 'info');
		}
		});
		});
		</script>
		<script src="dahil/ckeditor/ckeditor.js"></script>
		<script>

		var editor;

		// The instanceReady event is fired, when an instance of CKEditor has finished
		// its initialization.
		CKEDITOR.on( 'instanceReady', function( ev ) {
			editor = ev.editor;

			// Show this "on" button.
			document.getElementById( 'readOnlyOn' ).style.display = '';

			// Event fired when the readOnly property changes.
			editor.on( 'readOnly', function() {
				document.getElementById( 'readOnlyOn' ).style.display = this.readOnly ? 'none' : '';
				document.getElementById( 'readOnlyOff' ).style.display = this.readOnly ? '' : 'none';
			});
		});

		function toggleReadOnly( isReadOnly ) {
			// Change the read-only state of the editor.
			// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-setReadOnly
			editor.setReadOnly( isReadOnly );
		}

	</script>
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>