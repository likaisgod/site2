<section class="portfolio wrap-content off display-none">
    <div class="container">
        <div class="row">
            <div id="devam" class="carousel slide" data-ride="devam">
			<?	$bilgi=mysql_query("SELECT COUNT(No) FROM zcard_portfoy "); if($bilgi){$tek=mysql_fetch_array($bilgi);}$ET=$tek[0]; ?>
<!--------------------------------------------------------------------------->
				<? IF ($ET == 49 || $ET == 50 || $ET == 51 || $ET == 52 || $ET == 53 || $ET == 54 || $ET == 55 || $ET == 56 || $ET == 57 || $ET == 58 || $ET == 59 || $ET == 60) {?>
				<ol class="carousel-indicators hidden-xs">
				<li data-target="#devam" data-slide-to="0" class="active" data-toggle="tooltip" data-placement="top" title="" data-original-title="1"></li>
				<li data-target="#devam" data-slide-to="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="2"></li>
				<li data-target="#devam" data-slide-to="2" data-toggle="tooltip" data-placement="top" title="" data-original-title="3"></li>
				<li data-target="#devam" data-slide-to="3" data-toggle="tooltip" data-placement="top" title="" data-original-title="4"></li>
				<li data-target="#devam" data-slide-to="4" data-toggle="tooltip" data-placement="top" title="" data-original-title="5"></li>
				<a class="next hidden-xs" href="#devam" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="<? echo "$buton_008";?>"></span></a>
				</ol></br>
				<div class="carousel-inner">
				<div class="item active"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 0, 12"; $exec = mysql_query($sql); $i = 0 ; 
				while($fetch = mysql_fetch_array($exec))
				{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
				echo'<div class="col-xs-3"><div class="big-box">
				<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
				<img width="289" height="160" src="dahil/portfoy/'.$A2.'"/></a>
				</div></div>'; $i++; } ?></div>
				<div class="item"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 12, 12"; $exec = mysql_query($sql); $i = 0 ; 
				while($fetch = mysql_fetch_array($exec))
				{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
				echo'<div class="col-xs-3"><div class="big-box">
				<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
				<img width="289" height="160"  src="dahil/portfoy/'.$A2.'"/></a>
				</div></div>'; $i++; } ?></div>
				<div class="item"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 24, 12"; $exec = mysql_query($sql); $i = 0 ; 
				while($fetch = mysql_fetch_array($exec))
				{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
				echo'<div class="col-xs-3"><div class="big-box">
				<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
				<img width="289" height="160"  src="dahil/portfoy/'.$A2.'"/></a>
				</div></div>'; $i++; } ?></div>
				<div class="item"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 36, 12"; $exec = mysql_query($sql); $i = 0 ; 
				while($fetch = mysql_fetch_array($exec))
				{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
				echo'<div class="col-xs-3"><div class="big-box">
				<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
				<img width="289" height="160"  src="dahil/portfoy/'.$A2.'"/></a>
				</div></div>'; $i++; } ?></div>
				<div class="item"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 48, 12"; $exec = mysql_query($sql); $i = 0 ; 
				while($fetch = mysql_fetch_array($exec))
				{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
				echo'<div class="col-xs-3"><div class="big-box">
				<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
				<img width="289" height="160"  src="dahil/portfoy/'.$A2.'"/></a>
				</div></div>'; $i++; } ?></div>
				</div>
			<? } ELSE { ?>
<!--------------------------------------------------------------------------->
			<? IF ($ET == 37 || $ET == 38 || $ET == 39 || $ET == 40 || $ET == 41 || $ET == 42 || $ET == 43 || $ET == 44 || $ET == 45 || $ET == 46 || $ET == 47 || $ET == 48) {?>
			<ol class="carousel-indicators hidden-xs">
			<li data-target="#devam" data-slide-to="0" class="active" data-toggle="tooltip" data-placement="top" title="" data-original-title="1"></li>
			<li data-target="#devam" data-slide-to="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="2"></li>
			<li data-target="#devam" data-slide-to="2" data-toggle="tooltip" data-placement="top" title="" data-original-title="3"></li>
			<li data-target="#devam" data-slide-to="3" data-toggle="tooltip" data-placement="top" title="" data-original-title="4"></li>
			<a class="next hidden-xs" href="#devam" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="<? echo "$buton_008";?>"></span></a>
			</ol></br>
			<div class="carousel-inner">
			<div class="item active"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 0, 12"; $exec = mysql_query($sql); $i = 0 ; 
			while($fetch = mysql_fetch_array($exec))
			{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
			echo'<div class="col-xs-3"><div class="big-box">
			<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
			<img width="289" height="160" src="dahil/portfoy/'.$A2.'"/></a>
			</div></div>'; $i++; } ?></div>
			<div class="item"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 12, 12"; $exec = mysql_query($sql); $i = 0 ; 
			while($fetch = mysql_fetch_array($exec))
			{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
			echo'<div class="col-xs-3"><div class="big-box">
			<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
			<img width="289" height="160"  src="dahil/portfoy/'.$A2.'"/></a>
			</div></div>'; $i++; } ?></div>
			<div class="item"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 24, 12"; $exec = mysql_query($sql); $i = 0 ; 
			while($fetch = mysql_fetch_array($exec))
			{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
			echo'<div class="col-xs-3"><div class="big-box">
			<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
			<img width="289" height="160"  src="dahil/portfoy/'.$A2.'"/></a>
			</div></div>'; $i++; } ?></div>
			<div class="item"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 36, 12"; $exec = mysql_query($sql); $i = 0 ; 
			while($fetch = mysql_fetch_array($exec))
			{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
			echo'<div class="col-xs-3"><div class="big-box">
			<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
			<img width="289" height="160"  src="dahil/portfoy/'.$A2.'"/></a>
			</div></div>'; $i++; } ?></div>
			</div>
		<? } ELSE { ?>
<!--------------------------------------------------------------------------->
		<? IF ($ET == 25 || $ET == 26 || $ET == 27 || $ET == 28 || $ET == 29 || $ET == 30 || $ET == 31 || $ET == 32 || $ET == 33 || $ET == 34 || $ET == 35 || $ET == 36) {?>
		<ol class="carousel-indicators hidden-xs">
		<li data-target="#devam" data-slide-to="0" class="active" data-toggle="tooltip" data-placement="top" title="" data-original-title="1"></li>
		<li data-target="#devam" data-slide-to="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="2"></li>
		<li data-target="#devam" data-slide-to="2" data-toggle="tooltip" data-placement="top" title="" data-original-title="3"></li>
		<a class="next hidden-xs" href="#devam" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="<? echo "$buton_008";?>"></span></a>
		</ol></br>
		<div class="carousel-inner">
		<div class="item active"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 0, 12"; $exec = mysql_query($sql); $i = 0 ; 
		while($fetch = mysql_fetch_array($exec))
		{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
		echo'<div class="col-xs-3"><div class="big-box">
		<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
		<img width="289" height="160" src="dahil/portfoy/'.$A2.'"/></a>
		</div></div>'; $i++; } ?></div>
		<div class="item"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 12, 12"; $exec = mysql_query($sql); $i = 0 ; 
		while($fetch = mysql_fetch_array($exec))
		{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
		echo'<div class="col-xs-3"><div class="big-box">
		<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
		<img width="289" height="160"  src="dahil/portfoy/'.$A2.'"/></a>
		</div></div>'; $i++; } ?></div>
		<div class="item"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 24, 12"; $exec = mysql_query($sql); $i = 0 ; 
		while($fetch = mysql_fetch_array($exec))
		{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
		echo'<div class="col-xs-3"><div class="big-box">
		<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
		<img width="289" height="160"  src="dahil/portfoy/'.$A2.'"/></a>
		</div></div>'; $i++; } ?></div>
		</div>
	<? } ELSE { ?>
<!--------------------------------------------------------------------------->
	<? IF ($ET == 13 || $ET == 14 || $ET == 15 || $ET == 16 || $ET == 17 || $ET == 18 || $ET == 19 || $ET == 20 || $ET == 21 || $ET == 22 || $ET == 23 || $ET == 24) {?>
	<ol class="carousel-indicators hidden-xs">
	<li data-target="#devam" data-slide-to="0" class="active" data-toggle="tooltip" data-placement="top" title="" data-original-title="1"></li>
	<li data-target="#devam" data-slide-to="1" data-toggle="tooltip" data-placement="top" title="" data-original-title="2"></li>
	<a class="next hidden-xs" href="#devam" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right" data-toggle="tooltip" data-placement="top" title="" data-original-title="<? echo "$buton_008";?>"></span></a>
	</ol></br>
	<div class="carousel-inner">
	<div class="item active"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 0, 12"; $exec = mysql_query($sql); $i = 0 ; 
	while($fetch = mysql_fetch_array($exec))
	{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
	echo'<div class="col-xs-3"><div class="big-box">
	<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
	<img width="289" height="160" src="dahil/portfoy/'.$A2.'"/></a>
	</div></div>'; $i++; } ?></div>
	<div class="item"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 12, 12"; $exec = mysql_query($sql); $i = 0 ; 
	while($fetch = mysql_fetch_array($exec))
	{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
	echo'<div class="col-xs-3"><div class="big-box">
	<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
	<img width="289" height="160"  src="dahil/portfoy/'.$A2.'"/></a>
	</div></div>'; $i++; } ?></div>
	</div>
<? } ELSE { ?>
<!--------------------------------------------------------------------------->
<? IF ($ET == 1 || $ET == 2 || $ET == 3 || $ET == 4 || $ET == 5 || $ET == 6 || $ET == 7 || $ET == 8 || $ET == 9 || $ET == 10 || $ET == 11 || $ET == 12) {?></br>
<div class="carousel-inner">
<div class="item active"><?	$sql ="select * from zcard_portfoy order by No ASC LIMIT 0, 12"; $exec = mysql_query($sql); $i = 0 ; 
while($fetch = mysql_fetch_array($exec)){	$A1   = $fetch['Baslik'];	$A2 = $fetch['Resim'];
echo'<div class="col-xs-3"><div class="big-box">
<a class="example-image-link" href="dahil/portfoy/'.$A2.'" data-lightbox="example-1">
<img width="289" height="160"  src="dahil/portfoy/'.$A2.'"/>
</a></div></div>'; $i++; } ?>
</div></div>
<? } ?>
<? } ?>
<? } ?>
<? } ?>
<? } ?>
            </div>
        </div>  
    </div>
</section>