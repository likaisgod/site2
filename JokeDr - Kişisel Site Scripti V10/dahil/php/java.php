<script src="dahil/lightbox/js/jquery-1.10.2.min.js"></script>
<script src="dahil/lightbox/js/lightbox-2.6.min.js"></script>
<script src="dahil/js/bootstrap.min.js"></script>
<script src="dahil/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="dahil/js/scripts.js"></script>
<script src="dahil/lightbox/js/modernizr.custom.js"></script>
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript" ></script>
<script src="dahil/js/modernizr.js" type="text/javascript"></script>
<script src="dahil/js/twitterFetcher_v10_min.js" type="text/javascript"></script>
<script type="text/javascript" src="admin/dahil/easyui/jquery.easyui.min.js"></script>
<script type="text/javascript">
		$(function(){
		$('#durum').form({
		success:function(data){
		$.messager.alert('<? echo "$panel_drm";?>', data, 'info');
		}
		});
		});
</script>
<script>
twitterFetcher.fetch('<?=$KT['Api'];?>', 'tweet-feed', 5, true);
</script>