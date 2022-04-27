<section class="education wrap-content off display-none">
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <div class="big-box scroll">
                    <div class="box-text">
                        <h4><? echo "$wmenu_004";?><span class="glyphicon glyphicon-book icon-title"></span></h4>
                        <hr class="hr2">
<?	$sql ="select * from zcard_egitim order by No DESC"; $exec = mysql_query($sql); $i = 0 ; 
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
                <div class="big-box scroll">
                    <div class="box-text">
                        <h4><? echo "$wbege_001";?></h4>
                        <hr class="hr2">
<?	$sql ="select * from zcard_egitim_begeniler order by No DESC"; $exec = mysql_query($sql); $i = 0 ; 
	while($fetch = mysql_fetch_array($exec))
	{	$A1   = $fetch['Baslik'];	$A2 = $fetch['Aciklama'];	$A3 = $fetch['Web'];
       echo'<p><strong>'.$A1.'</strong></p><p>'.$A2.'</p><p><a href="'.$A3.'">';?><? echo "$wbege_002";?><? echo '</a></p><hr>';
       $i++;  
	} 
?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>