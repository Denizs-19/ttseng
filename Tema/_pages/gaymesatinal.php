        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$lang["yardim2"]; ?></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["oyun_bilgileri2"]; ?></h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <h2><?=$lang["dort_asama2"]; ?></h2>
                   
                    <div id="wizard_verticle" class="form_wizard wizard_verticle">
                    

                      <div id="step-11">
                        <h2 class="StepTitle"><?=$lang["bir2"]; ?></h2>
                        <p><?=$lang["birinci_aciklama2"]; ?></p>
                        
                      </div>
                      <div id="step-22">
                        <h2 class="StepTitle"><?=$lang["iki2"]; ?></h2>
                        <p><?=$lang["ikinci_aciklama2"]; ?></p>
                      </div>
                      <div id="step-33">
                       <h2 class="StepTitle"><?=$lang["uc2"]; ?></h2>
                        <p><?=$lang["ucuncu_aciklama2"]; ?></p>
                      </div>
                      <div id="step-44">
                        <h2 class="StepTitle"><?=$lang["dort2"]; ?></h2>
                        <p><?=$lang["dorduncu_aciklama2"]; ?></p>
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
                    <h2>Kredi Kartı</h2>
                    
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

<center>

<font color="red" size="3">Akçe Fiyatları aşağıdaki gibidir. Ödemeyi yaptıktan sonra ödeme bildirimi yapmayı unutmayınız.</font></br>
<font color="red" size="3">Lakatrop sitesinden E-Pin alan kullanıcılarımız. Ticaret sekmesinden E-Pin'i aktif ediniz.</font></br>
<font size="5">2500 Akçe - 5 TL </font> <a href="Epin site adresi" target="_blank"><img src="http://i.hizliresim.com/bkO3Zn.png"></a><br>
<font size="5">5500 Akçe - 10 TL </font> <a href="Epin site adresi" target="_blank"><img src="http://i.hizliresim.com/bkO3Zn.png"></a><br>
<font size="5">12000 Akçe - 20 TL </font> <a href="Epin site adresi" target="_blank"><img src="http://i.hizliresim.com/bkO3Zn.png"></a><br>
<font size="5">25000 Akçe - 40 TL </font> <a href="Epin site adresi" target="_blank"><img src="http://i.hizliresim.com/bkO3Zn.png"></a><br>
<font size="5">52500 Akçe - 80 TL </font> <a href="Epin site adresi" target="_blank"><img src="http://i.hizliresim.com/bkO3Zn.png"></a>


</center>                   
                  
                  </div>
                </div>
			</div>
            </div>
			
            <div class="clearfix"></div>
			
		            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["paylasarak_kazan"]; ?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <?php
				   if (isset($_POST['share'])) {
					   $adres=strip_tags($_POST['share']);
						$bugun = date("Y-m-j H:i:s");
						mysql_query("insert into c_share (id, user_id, adres, tarih) values ('', '$ciftlikid', '$adres', '$bugun')");
						$ip_adresi = GetIP();
						$aciklama=$lang["paylasim_aciklama"];
						mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
				echo "<center><big>"; echo $lang["paylas_ok"] ; echo "</center></big>"; 
				   }
				   ?>
				   <div class="tile-stats">
				  <form action="index.php?page=gaymesatinal" method="post">
                  <div class="count"><input type="text" name="share"></div>
                  <h3><?=$lang["paylasarak"]; ?></h3>
				  <p><?=$lang["pay_aciklama"]; ?></p>
                  <p><button type="submit"><i class="fa fa-twitter"> </i> <?=$lang["paylas_gonder"]; ?></button></p>
                </form>
				</div>
					 
					 
                  </div>
                </div>
              </div>
            </div>
				
              </div>
            </div>
          </div>
        </div>