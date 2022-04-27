<section class="contact wrap-content off display-none">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <div class="big-box">
                    <iframe class="map" src='<?=$KI['Maps'];?>'></iframe>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="big-box scroll">
                    <div class="box-text">
						<h4><? echo "$wmenu_006";?><span class="glyphicon glyphicon-send icon-title"></span></h4></br>
						<h4><? echo "$wilet_000";?></h4>
                        <hr>
						<form name="MailGonder"  id="durum" method="post" class="form-horizontal" enctype="multipart/form-data" action="dahil/gonder.php">
                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input name="email" type="email" class="form-control" id="inputemail" placeholder="<? echo "$wilet_003";?>">
                            </div>
                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-bold"></span></span>
                                <input name="konu" type="text" class="form-control" id="inputsubject" placeholder="<? echo "$wilet_004";?>">
                            </div>
                            
                            <div class="form-group input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-comment"></span></span>
                                <textarea name="mesaj" class="form-control" id="inputmessage" rows="3" placeholder="<? echo "$wilet_005";?>"></textarea>
                            </div>
                            <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-send"></span> <? echo "$wilet_006";?></button>
                        </form>
                        <hr class="empty">
						<h4><? echo "$wilet_001";?><span class="glyphicon glyphicon-send icon-title"></span></h4>
                        <hr class="hr2">
                        <dl class="dl-horizontal">
                            <dt><span class="glyphicon glyphicon-map-marker"></span></dt>
                            <dd><?=$KI['Adres1'];?></dd>
                            <dd><?=$KI['Adres2'];?></dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt><span class="glyphicon glyphicon-envelope"></span></dt>
                            <dd><?=$KI['Mail'];?></dd>
                        </dl>
                        <dl class="dl-horizontal">
                            <dt><span class="glyphicon glyphicon-phone-alt"></span></dt>
                            <dd><?=$KI['Tel'];?></dd>
                        </dl>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>