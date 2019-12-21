		
		<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Referans Sayfanız</h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="clearfix"></div>

			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                     <b>100 Referans Size Extra Yumurta Fiyatında Artış Sağlar Yani Her 100 Üyeden Sonra Yumurta Satma Oranınız Artar.</b>
											 
											  <font color="red"> <b>Unutmadan Söyleyeyim Multi Üyelik Yasaktır.Aynı İpten Açılan Hesaplar Banlanır.</b></p> </font>
											  Referans Linkini Kopyalayıp Her Yerde Paylaşabilirsiniz. Her referansınızın sattığı yumurtadan %10'u size gelsin!<br>
											 <font color="red"> Not : Referans sistemi 100 Referans'tan sonra açılmamaktadır. 100 Referansa ulaşan kullanıcılarımızın tavukları ekstradan yumurta üretmektedir.</font> 
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
					 <?php   
					 $uyebilgileri=mysql_fetch_array(mysql_query("select * from c_users where id='$ciftlikid'"));
					 ?>
					<div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                     <div class="flex">
                              <ul class="list-inline widget_profile_box">
                                <li>
                                  <a>
                                    <i class="fa fa-money"></i>
                                  </a>
                                </li>
                                <li>
                                  <img src="<?php echo $uyebilgileri['user_pic']; ?>" alt="<?php echo $uyebilgileri['username']; ?>" class="img-circle profile_img">
                                </li>
                                <li>
                                  <a>
                                    <i class="fa fa-try"></i>
                                  </a>
                                </li>
                              </ul>
                            </div>
<center>
                            <h3 class="name"><?php echo $uyebilgileri['name_surname']; ?></h3>
</center>
                            <div class="flex">
                              <ul class="list-inline count2">
                                <li>
                                  <h3><?php echo $uyebilgileri['nesil']; ?></h3>
                                  <span><?=$lang["nesil"]; ?></span>
                                </li>
                                <li>
                                  <h3><?php echo $uyebilgileri['deneyim']; ?></h3>
                                  <span><?=$lang["deneyim"]; ?></span>
                                </li>
                                <li>
                                  <h3><?php echo $ciftlikid; ?></h3>
                                  <span><?=$lang["refid"]; ?></span>
                                </li>
                              </ul>
                            </div>
                            <p>
                             <font color="red">Referans Linkiniz : <?=$lang["refacikla"]; ?><?php echo $ciftlikid; ?><?=$lang["refacikla1"]; ?> </p> </font>
							</div>  
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				
                  </div>
			
                </div>
			
              </div>
			 
            </div>
			
				  <div id="ref-duyuru"><b>Not :</b> İlk 50 Referans sayısına ulaşan üyemize <b>Sarı Tavuk</b> hediye edilecektir.<br>
				  <div id="ref-duyuru"><b>Not :</b> İlk 100 Referans sayısına ulaşan üyemize <b>Renkli Tavuk</b> hediye edilecektir.<br>
									   <b>Not :</b> Getirdiğiniz her referans başına <b>20</b> Akçe gün sonunda hesabınıza yüklenecektir.
				  </div>
				   <div id="Referans-cizgi"></div>
			<div id="referans-isim"><b><?=$lang["reflerim"]; ?></b></div><br>
				<div id="ref"><b>
						<?php 
						$reflerim=mysql_query("select username, name_surname from c_users where ref='$ciftlikid' order by id DESC");
						while($refler=mysql_fetch_array($reflerim)) {
							echo"$refler[username]   &nbsp;&nbsp;&nbsp;  /    &nbsp;&nbsp;&nbsp;   $srefler[name_surname] ";
						}
						?></b></div>
			
			
			
			
          </div>
        </div>