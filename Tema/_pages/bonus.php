		<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Akçe Kazan</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="clearfix"></div>

			
			
			
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["gunluk_bonus"]; ?></h2>
                    
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
					<?php 
					if (isset($_POST['bonus'])) {
						$bonus= "0";
						$bugun1 = date("Y-m-j");
						mysql_query("update c_user_bank set gayme=gayme+$bonus where user_id='$ciftlikid'");
						mysql_query("insert into c_daily_bonus (id, user_id, tarih) values ('', '$ciftlikid', '$bugun1')");
						$ip_adresi = GetIP();
						$aciklama=$lang["bonus_alindi_aciklama"];
						$bugun = date("Y-m-j H:i:s");
						mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
				
					}
					$bugun = date("Y-m-j");
					$almismi=mysql_num_rows(mysql_query("select id from c_daily_bonus where user_id='$ciftlikid' AND tarih='$bugun'"));
					if ($almismi == "0") { ?>
					<form action="index.php?page=bonus" method="post">
								<input type="hidden" name="bonus">
                                <button type="submit" class="btn btn-round btn-success"><i class="fa fa-money"> </i> <?=$lang["gunluk_bonus_al"]; ?></button>
								</form>
					<?php }else { ?>
						<?=$lang["gunluk_bonus_alindi"]; ?>						
					<?php }
					 ?>
                  </div>
                </div>
              </div>
            </div>
			
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["yazi_tura"]; ?></h2>
                    
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  <?php if (isset($_POST['para'])) {
					  $para=htmlspecialchars($_POST['para']);
					  $sec=mt_rand(0,5);
					  if ($para == $sec) {
						 mysql_query("update c_user_bank set gayme=gayme+0.5 where user_id='$ciftlikid'"); 
						 $ip_adresi = GetIP();
						$aciklama=$lang["yt_k_aciklama"];
						$bugun = date("Y-m-j H:i:s");
						mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
					  echo"<center><big> $aciklama </big></center>";
					  }else {
						 mysql_query("update c_user_bank set gayme=gayme-0.5 where user_id='$ciftlikid'"); 
						 $ip_adresi = GetIP();
						$aciklama=$lang["yt_aciklama"];
						$bugun = date("Y-m-j H:i:s");
						mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");  
					  echo"<center><big> $aciklama </big></center>";
					  }
				  }
				   $hayvan_sayisi=mysql_num_rows(mysql_query("select id from c_user_ani where user_id='$ciftlikid'"));
					if($hayvan_sayisi > "2") { ?>
					<form action="index.php?page=bonus" method="post">
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"><?=$lang["yazimi_turami"]; ?></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
						<input type="radio" class="flat" name="para" id="genderM" value="3" checked="" /> <?=$lang["yazi"]; ?>
                        <input type="radio" class="flat" name="para" id="genderF" value="4" /><?=$lang["tura"]; ?></div>
                      </div>
					  <p><button type="submit"><i class="fa fa-spinner"> </i> <?=$lang["firlat"]; ?></button></p>
					</form>
					<p><?=$lang["ytacikla"]; ?></p>
					<?php }else {
						echo $lang["hayvan_al"];
					}
					?> 
                  </div>
                </div>
              </div>
            </div>
			
			
          </div>
        </div>