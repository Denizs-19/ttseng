<?php
include('_imp/cron.php');
?>
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$lang["ahir"]; ?></h3>
              </div></div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["genel_durum"]; ?></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  
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

                            <p><?=$lang["ahir_limit"]; ?><?php echo $yumurta_sayisi['adepo']; ?><br><br></p>
							<p><?=$lang["ahirimdaki_hayvan"]; ?><?php echo $hayvan_sayisi; ?></p>
                            </div>
                          </div>
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
<?php $saatlik_yumurta=mysql_fetch_array(mysql_query("SELECT SUM(a_uretim) as uretim, SUM(a_tuketim) as tuketim from c_animals, c_user_ani WHERE c_user_ani.ani_id=c_animals.id AND c_user_ani.user_id='$ciftlikid' AND c_animals.cins='Tavuk'"));
?>
                            <p><?=$lang["yumurta_limit"]; ?><?php echo $yumurta_sayisi['ydepo']; ?><br><br></p>
							<p><?=$lang["saatlik_yumurta_uretimi"]; ?><?php echo $saatlik_yumurta['uretim']; ?></p>
							<p><?=$lang["saatlik_yumurta_tuketimi"]; ?><?php echo $saatlik_yumurta['tuketim']; ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
				  

                  </div>
			    </div>
              </div>
            </div>
			
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["hayvanlariniz"]; ?></h2>
                    
                    <div class="clearfix"></div>
                  </div>
				  <div class="x_content">			  
                     <?php 
					 $hayvanlarim=mysql_query("select ani_id from c_user_ani where user_id='$ciftlikid'");
					 while ($hayvanlar=mysql_fetch_array($hayvanlarim)) {
					$tavuk=mysql_fetch_array(mysql_query("select * from c_animals where id='$hayvanlar[ani_id]'"));
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
                                <a><i class="fa fa-money"></i><?php echo $tavuk['a_ucret']; ?> <?=$lang["gayme"]; ?></a>
                              </p>
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