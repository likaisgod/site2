		<div class="navbar navbar-inverse navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
						<i class="icon icon-reorder"></i> <? echo "$menul_000";?>
					</a>
					<a class="brand" href="anasayfa.php"><?=$SITEAD['Adi'];?> | <? echo "$giris_010";?></a>
					<!--<div class="nav-collapse collapse">
						<ul class="nav">
							<li class="active"><a href="#"><? echo "$giris_011";?></a></li>
							<li><a href="#"><? echo "$giris_012";?></a></li>
							<li><a href="#"><? echo "$giris_013";?></a></li>
						</ul>
					</div>-->
				</div>
			</div>
			<div class="sub-navbar">
				<div class="container">
					<p><i class="icon icon-user"></i> <? echo "$giris_014";?>, <b><? echo $_SESSION['MM_Username'];?></b>.</p>
				</div>
			</div>
		</div>