<?php
include('_imp/cron.php');
?>
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$lang["pazar_yeri"]; ?></h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="clearfix"></div>
				<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["depo_aciklama"]; ?></h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  <div id="x-sayisi">Sitemizde Şuan 1X Mevcuttur</div>
				  <?php
						if (isset($_POST['urun'])) {
					$urun=htmlspecialchars($_POST['urun']);
					if ($urun == "yumurta") {
					$depodanevar=mysql_fetch_array(mysql_query("select yumurta, ykat from c_user_depo where user_id='$ciftlikid'"));
					$son_gayme = $depodanevar['yumurta'] * $depodanevar['ykat'] * 3000;
					$son_tl = $depodanevar['yumurta'] * $depodanevar['ykat'];
					$bugun = date("Y-m-j H:i:s");
					mysql_query("update c_user_bank set gayme=gayme+'$son_gayme', para=para+'$son_tl' where user_id='$ciftlikid'");
					mysql_query("update c_user_depo set yumurta='0', yum_sat='$bugun' where user_id='$ciftlikid'");
						$ip_adresi = GetIP();
						$aciklama=$lang["yum_sat_aciklama"];
						$bugun = date("Y-m-j H:i:s");
						mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
				?><center>
				 <a href="index.php?page=barn" class="btn btn-success btn-lg"><?=$lang["urun_satildi"]; ?></a></center>
			
				
				<?php

				}
						}
							?><center>
                   
                  <div class="x_content">
                    <br />
                    <?php
					$depo_bilgileri=mysql_fetch_array(mysql_query("select * from c_user_depo where user_id='$ciftlikid'"));
					?>
					<div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-money"></i>
                          </div>
                          <div class="count"><?php echo $depo_bilgileri['yumurta']; ?></div>
<?php
$son_gayme = $depo_bilgileri['yumurta'] * $depo_bilgileri['ykat'] * 3000;
$son_tl = $depo_bilgileri['yumurta'] * $depo_bilgileri['ykat'];
?>
                          <h3><?=$lang["kazanciniz"]; ?></h3>
                          <p><?=$lang["kac_gayme"]; ?> <?php echo $son_gayme;  ?></p>
						  <p><?=$lang["kac_tl"]; ?> <?php echo $son_tl;  ?></p>
						  <form action="index.php?page=buy" method="post">
								<input type="hidden" name="urun" value="yumurta">
                                <button type="submit"><i class="fa fa-truck"> </i> <?=$lang["yum_sat"]; ?></button>
								</form>
                        </div>
                      </div>
					  
                </div>
              </div>
            </div>
			
           
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["pazar_yeri_aciklama"]; ?></h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  		<?php
						if (isset($_POST['ani_id'])) {
					$ani_id=htmlspecialchars($_POST['ani_id']);
					$ani_price=mysql_fetch_array(mysql_query("select a_ucret from c_animals where id='$ani_id'"));
					$user_gayme=mysql_fetch_array(mysql_query("select gayme from c_user_bank where user_id='$ciftlikid'"));
					
					if($ani_price['a_ucret'] <= $user_gayme['gayme']) {
						$yeni_user_gayme=$user_gayme['gayme'] - $ani_price['a_ucret'];
						mysql_query("update c_user_bank set gayme='$yeni_user_gayme' where user_id='$ciftlikid'");
						$tarih = date("Y-m-j H:i:s");
						mysql_query("insert into c_user_ani (id, user_id, ani_id, tarih) values ('', '$ciftlikid', '$ani_id', '$tarih')");
						$ip_adresi = GetIP();
						$aciklama=$lang["ani_al_aciklama"];
						$bugun = date("Y-m-j H:i:s");
						$bugunilk = date("Y-m-j H:i:s", time()+10);
						$ilkmi=mysql_num_rows(mysql_query("select c_user_ani.id from c_user_ani, c_animals where c_user_ani.user_id='$ciftlikid' AND c_animals.cins='Tavuk' AND c_user_ani.ani_id=c_animals.id"));
						if($ilkmi == "1") {
						mysql_query("update c_user_depo set yum_sat='$bugunilk' where user_id='$ciftlikid'");	
						}
						$ilkmiki=mysql_num_rows(mysql_query("select c_user_ani.id from c_user_ani, c_animals where c_user_ani.user_id='$ciftlikid' AND c_animals.cins!='Tavuk' AND c_user_ani.ani_id=c_animals.id"));
						if($ilkmiki == "1") {
						mysql_query("update c_user_depo set sut_sat='$bugunilk' where user_id='$ciftlikid'");	
						}
						mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
			
						?><center>
                    <a href="index.php?page=barn" class="btn btn-success btn-lg"><?=$lang["animal_ekle"]; ?></a></center>
					<?php }else { ?>
						<center>
                    <a href="index.php?page=barn" class="btn btn-success btn-lg"><?=$lang["animal_eklenemedi"]; ?></a></center>
					<?php }
						}
						?>
							  
                  <div class="x_content">			  
                     <?php 
					 $tavuklar=mysql_query("select * from c_animals order by id ASC");
					 while ($tavuk=mysql_fetch_array($tavuklar)) {
					 ?>
					  <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                        <div class="well profile_view">
                          <div class="col-sm-12">
                            <h4 class="brief"><i><?php echo $tavuk['a_name']; ?></i></h4>
                            <div class="left col-xs-7">
                              <h2><?=$lang["cins"]; ?><?php echo $tavuk['cins']; ?></h2>
                              <ul class="list-unstyled">
                                <li><i class="fa fa-hand-o-up"></i><?=$lang["uretim"]; ?> <?php echo $tavuk['a_uretim']; ?> <?=$lang["adet"]; ?></li>
                                <li><i class="fa fa-hand-o-down"></i><?=$lang["tuketim"]; ?> <?php echo $tavuk['a_tuketim']; ?> <?=$lang["adet"]; ?></li>
                                <li><i class="fa fa-thumps-o-up"></i><?=$lang["yasam"]; ?> <?php echo $tavuk['a_yasam']; ?> <?=$lang["gun"]; ?></li>
                              </ul>
                            </div>
                            <div class="right col-xs-5 text-center">
                              <img src="<?php echo $tavuk['a_pic']; ?>" alt="<?php echo $tavuk['a_name']; ?>" class="img-circle img-responsive">
                            </div>
                          </div>
                          <div class="col-xs-12 bottom text-center">
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <p class="ratings">
                                <a><i class="fa fa-money"></i> <?php echo $tavuk['a_ucret']; ?> <?=$lang["akçe"]; ?></a><br>
								<a></i><?php echo $tavuk['a_ucrets']; ?> <?=$lang["tl"]; ?></a>
                              </p>
                            </div>
                            <div class="col-xs-12 col-sm-6 emphasis">
                              <form action="index.php?page=buy" method="post">
								<input type="hidden" name="ani_id" value="<?php echo $tavuk['id']; ?>">
                                <button type="submit"><i class="fa fa-truck"> </i> <?=$lang["satin_al"]; ?></button>
								</form>
                              </div>
                          </div>
                        </div>
                      </div>
					 <?php } ?>
                </div>
				
				
			
				
				
				
              </div>
            </div>
          </div>
        </div>
		 </div>