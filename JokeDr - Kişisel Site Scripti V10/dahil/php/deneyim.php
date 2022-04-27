<section class="experience wrap-content off display-none">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="big-box scroll">
                    <div class="box-text">
                        <h4><? echo "$wmenu_005";?><span class="glyphicon glyphicon-briefcase icon-title"></span></h4>
<?	$sql ="select * from zcard_deneyim order by No DESC"; $exec = mysql_query($sql); $i = 0 ; 
	while($fetch = mysql_fetch_array($exec))
	{	$A1   = $fetch['Yil'];	$A2 = $fetch['Konum'];	$A3 = $fetch['Firma'];	$A4 = $fetch['Acikla'];
       echo'<dl class="dl-horizontal"><dt>'.$A1.'</dt><dd><strong>'.$A2.'</strong></dd><dd>'.$A3.'</dd><dd>'.$A4.'</dd></dl><hr>';
       $i++;  
	} 
?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="big-box bg-color-1 scroll">
                    <div class="box-text">
                        <h4><? echo "$wbecer_000";?></h4>
                        <hr class="hr2">
						<p><strong><? echo "$wbecer_001";?></strong></p><hr>
<?	$sql ="select * from zcard_deneyim_beceri where Tur in ('grafik')"; $exec = mysql_query($sql); $i = 0 ; 
	while($fetch = mysql_fetch_array($exec))
	{	$A1   = $fetch['Adi'];	$A2 = $fetch['Yuz'];	$A3 = $fetch['Tur'];
       echo'<div class="progress"><div class="progress-bar RENK'.$A2.'"><p>'.$A1.'<span>'.$A2.'%</span></p></div></div>';
       $i++;  
	} 
?>
						<p><strong><? echo "$wbecer_002";?></strong></p><hr>
<?	$sql ="select * from zcard_deneyim_beceri where Tur in ('web')"; $exec = mysql_query($sql); $i = 0 ; 
	while($fetch = mysql_fetch_array($exec))
	{	$A1   = $fetch['Adi'];	$A2 = $fetch['Yuz'];	$A3 = $fetch['Tur'];
       echo'<div class="progress"><div class="progress-bar RENK'.$A2.'"><p>'.$A1.'<span>'.$A2.'%</span></p></div></div>';
       $i++;  
	} 
?>
						<p><strong><? echo "$wbecer_003";?></strong></p><hr>
<?	$sql ="select * from zcard_deneyim_beceri where Tur in ('diger')"; $exec = mysql_query($sql); $i = 0 ; 
	while($fetch = mysql_fetch_array($exec))
	{	$A1   = $fetch['Adi'];	$A2 = $fetch['Yuz'];	$A3 = $fetch['Tur'];
       echo'<div class="progress"><div class="progress-bar RENK'.$A2.'"><p>'.$A1.'<span>'.$A2.'%</span></p></div></div>';
       $i++;  
	} 
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>