 <?php
include('_imp/cron.php');
?><div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$lang["depo_durumu"]; ?></h3>
              </div>

              
            </div>
			
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
				  <?php $malidurum=mysql_fetch_array(mysql_query("select * from c_user_bank where user_id='$ciftlikid'")); ?>
				  
                  <div class="x_content">
				  <div class="col-md-4 col-sm-4 col-xs-12">
				  <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
				  <div class="count"><?php echo $malidurum['gayme']; ?></div>
                  <h3><?=$lang["akceb"]; ?></h3>
				  </div>
				  </div>
				  <div class="col-md-4 col-sm-4 col-xs-12">
				  <div class="tile-stats">
                  <div class="icon"><i class="fa fa-try"></i></div>
				  <div class="count"><?php echo $malidurum['para']; ?></div>
                  <h3><?=$lang["para"]; ?></h3>
				  </div>
				  </div>
				  <div class="col-md-4 col-sm-4 col-xs-12">
				  <div class="tile-stats">
                  <div class="icon"><i class="fa fa-tint"></i></div>
				  <div class="count"><?php echo $malidurum['sipali']; ?></div>
                  <h3><?=$lang["sipali"]; ?></h3>
				  </div>
				  </div>
				  </div>
                </div>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["depo_genislet"]; ?></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <?php
							if (isset($_POST['urun'])) {
							$urun=htmlspecialchars($_POST['urun']);
								if($urun == "ahir") {
									$kacgaymevar=mysql_fetch_array(mysql_query("select gayme from c_user_bank where user_id='$ciftlikid'"));
										if($kacgaymevar['gayme'] >= "250") {
											mysql_query("update c_user_bank set gayme=gayme-1 where user_id='$ciftlikid'");
											mysql_query("update c_user_depo set adepo=adepo+1 where user_id='$ciftlikid'");
											$ip_adresi = GetIP();
											$aciklama=$lang["agen_aciklama"];
											$bugun = date("Y-m-j H:i:s");
											mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
			
											?><center>
				 <a href="index.php?page=store" class="btn btn-success btn-lg"><?=$lang["depo_genisledi"]; ?></a></center><?php
										}else {
											?><center>
				 <a href="index.php?page=gbuy" class="btn btn-success btn-lg"><?=$lang["gayme_yetersiz"]; ?></a></center><?php
										}
								}elseif($urun == "yumurta") {
									$kacgaymevar=mysql_fetch_array(mysql_query("select gayme from c_user_bank where user_id='$ciftlikid'"));
										if($kacgaymevar['gayme'] >= "250") {
											mysql_query("update c_user_bank set gayme=gayme-250 where user_id='$ciftlikid'");
											mysql_query("update c_user_depo set ydepo=ydepo+250 where user_id='$ciftlikid'");
											$ip_adresi = GetIP();
											$aciklama=$lang["ygen_aciklama"];
											$bugun = date("Y-m-j H:i:s");
											mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
											?><center>
				 <a href="index.php?page=store" class="btn btn-success btn-lg"><?=$lang["depo_genisledi"]; ?></a></center><?php
										}else {
											?><center>
				 <a href="index.php?page=gbuy" class="btn btn-success btn-lg"><?=$lang["gayme_yetersiz"]; ?></a></center><?php
										}
								}elseif($urun == "sut") {
									$kacgaymevar=mysql_fetch_array(mysql_query("select gayme from c_user_bank where user_id='$ciftlikid'"));
										if($kacgaymevar['gayme'] >= "1") {
											mysql_query("update c_user_bank set gayme=gayme-1 where user_id='$ciftlikid'");
											mysql_query("update c_user_depo set sdepo=sdepo+100 where user_id='$ciftlikid'");
											$ip_adresi = GetIP();
											$aciklama=$lang["sgen_aciklama"];
											$bugun = date("Y-m-j H:i:s");
											mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
											?><center>
				 <a href="index.php?page=store" class="btn btn-success btn-lg"><?=$lang["depo_genisledi"]; ?></a></center><?php
										}else {
											?><center>
				 <a href="index.php?page=gbuy" class="btn btn-success btn-lg"><?=$lang["gayme_yetersiz"]; ?></a></center><?php
										}
								}elseif($urun == "peynir") {
									$kacgaymevar=mysql_fetch_array(mysql_query("select gayme from c_user_bank where user_id='$ciftlikid'"));
										if($kacgaymevar['gayme'] >= "1") {
											mysql_query("update c_user_bank set gayme=gayme-1 where user_id='$ciftlikid'");
											mysql_query("update c_user_depo set pdepo=pdepo+100 where user_id='$ciftlikid'");
											$ip_adresi = GetIP();
											$aciklama=$lang["pgen_aciklama"];
											$bugun = date("Y-m-j H:i:s");
											mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
			?><center>
				 <a href="index.php?page=store" class="btn btn-success btn-lg"><?=$lang["depo_genisledi"]; ?></a></center><?php
										}else {
											?><center>
				 <a href="index.php?page=gbuy" class="btn btn-success btn-lg"><?=$lang["gayme_yetersiz"]; ?></a></center><?php
										}
								}
							}
						?> 
					  <div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel ui-ribbon-container fixed_height_390">
                          <div class="ui-ribbon-wrapper">
                          </div>
                          <div class="x_title">
                            <h2><?=$lang["hayvan_durum"]; ?></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
					<?php 
					$hayvan_sayisi=mysql_num_rows(mysql_query("select id from c_user_ani where user_id='$ciftlikid'"));
					$yumurta_sayisi=mysql_fetch_array(mysql_query("select yumurta, sut, peynir, ydepo, sdepo, pdepo, adepo from c_user_depo where user_id='$ciftlikid'"));
					$hayvan_sayisi1 = $hayvan_sayisi * 100 / $yumurta_sayisi['adepo'] ;
					?>
                            <div style="text-align: center; margin-bottom: 17px">
                              <span class="chart" data-percent="<?php echo $hayvan_sayisi1; ?>">
                                                  <span class="percent"></span>
                              </span>
							  <div class="divider"></div>

                            <p><?=$lang["ahir_limit"]; ?><?php echo $yumurta_sayisi['adepo']; ?></p>

                            </div>
                          </div>
						  <form action="index.php?page=store" method="post">
								<input type="hidden" name="urun" value="ahir">
                                <?=$lang["ahir_genislet"]; ?><button type="submit"><i class="fa fa-truck"> </i> <?=$lang["genislet"]; ?></button>
								</form>
                        </div>
                      </div>
				  
				   <div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel ui-ribbon-container fixed_height_390">
                          <div class="ui-ribbon-wrapper">
                          </div>
                          <div class="x_title">
                            <h2><?=$lang["yumurta_durum"]; ?></h2>
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">
					<?php 
					$yumurta=$yumurta_sayisi['yumurta'] * 100 / $yumurta_sayisi['ydepo'] ;
					?>
                            <div style="text-align: center; margin-bottom: 17px">
                              <span class="chart" data-percent="<?php echo $yumurta; ?>">
                                                  <span class="percent"></span>
                              </span>
							   <div class="divider"></div>

                            <p><?=$lang["yumurta_limit"]; ?><?php echo $yumurta_sayisi['ydepo']; ?></p>
                            </div>
                          </div>
						  <form action="index.php?page=store" method="post">
								<input type="hidden" name="urun" value="yumurta">
                                <?=$lang["yum_genislet"]; ?><button type="submit"><i class="fa fa-truck"> </i> <?=$lang["genislet"]; ?></button>
								</form>
                        </div>
                      </div>

                  </div>
                </div>
              </div>
            </div>
			 			
          </div>
        </div>