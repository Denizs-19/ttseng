        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$lang["doviz_burosu"]; ?></h3>
              </div>

            </div>

            <div class="clearfix"></div>

			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["hesabim"]; ?></h2>
                    <div class="clearfix"></div>
                  </div>
				  <?php $malidurum=mysql_fetch_array(mysql_query("select * from c_user_bank where user_id='$ciftlikid'")); ?>
				  
                  <div class="x_content">
				  <div class="col-md-4 col-sm-4 col-xs-12">
				  <div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
				  <div class="count"><?php echo $malidurum['gayme']; ?></div>
                  <h3><?=$lang["gayme"]; ?></h3>
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
			
			
			
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["gayme_al"]; ?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				  
					<?php
					if (isset($_POST['epin'])) {
						$epin=htmlspecialchars($_POST['epin']);
						$epinvarmi=mysql_num_rows(mysql_query("select degeri from c_epin where epin='$epin' AND kullanim='0'"));
						if ($epinvarmi == "0") {
							?>
									<center>
				 <a href="index.php?page=gbuy" class="btn btn-success btn-lg"><?=$lang["epin_gecersiz"]; ?></a></center><?php
							
						}else {
							$epindegeri=mysql_fetch_array(mysql_query("select degeri from c_epin where epin='$epin' AND kullanim='0'"));
							mysql_query("update c_user_bank set gayme=gayme+$epindegeri[degeri] where user_id='$ciftlikid'");
							mysql_query("update c_epin set kullanim='1' where epin='$epin'");
											$ip_adresi = GetIP();
											$aciklama=$lang["epin_aciklama"];
											$bugun = date("Y-m-j H:i:s");
											mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
								?>
									<center>
				 <a href="index.php?page=gbuy" class="btn btn-success btn-lg"><?=$lang["epin_ok"]; ?></a></center><?php
						}
					}
						?>

					<div class="tile-stats">
                  <div class="icon"><i class="fa fa-money"></i></div>
				  <form action="index.php?page=gbuy" method="post">
                  <div class="count"><input type="text" name="epin"></div>
                  <h3><?=$lang["kac_gayme_alacak"]; ?></h3>
                  <p><button type="submit"><i class="fa fa-money"> </i> <?=$lang["hesaba_aktar"]; ?></button> &nbsp; &nbsp; <button><a  href="index.php"><?=$lang["gayme_al"]; ?></a></button></p>
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
                    <h2><?=$lang["tl_cek"]; ?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
						<?php
						if (isset($_POST['para_cek'])) {
							$para=htmlspecialchars($_POST['para_cek']);
							if($para > $malidurum['sipali']) {
								?>
									<center>
				 <a href="index.php?page=gbuy" class="btn btn-success btn-lg"><?=$lang["sipali_yetersiz"]; ?></a></center><?php
							}elseif($para > $malidurum['para']) {
								?>
									<center>
				 <a href="index.php?page=gbuy" class="btn btn-success btn-lg"><?=$lang["para_yetersiz"]; ?></a></center><?php
							}else {
								mysql_query("update c_user_bank set sipali=sipali-$para where user_id='$ciftlikid'");
								mysql_query("update c_user_bank set para=para-$para where user_id='$ciftlikid'");
											$ip_adresi = GetIP();
											$aciklama=$lang["para_cek_aciklama"];
											$bugun = date("Y-m-j H:i:s");
											mysql_query("insert into c_money (id, user_id, istek, zaman) values ('', '$ciftlikid', '$para', '$bugun')");
											mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
								?>
									<center>
				 <a href="index.php?page=gbuy" class="btn btn-success btn-lg"><?=$lang["para_cek_ok"]; ?></a></center><?php
							}
							
						}
						?>
						
					<div class="tile-stats">
                  <div class="icon"><i class="fa fa-try"></i></div>
				  <form action="index.php?page=gbuy" method="post">
                  <div class="count"><input type="text" name="para_cek"></div>
                  <h3><?=$lang["kac_tl_alacak"]; ?></h3>
                  <p><button type="submit"><i class="fa fa-try"> </i> <?=$lang["para_cek_simdi"]; ?></button></p>
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
                    <h2><?=$lang["sipali_al"]; ?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
						<?php
							$sipalistogu=mysql_fetch_array(mysql_query("select sipali from c_config where id='1'"));
						if (isset($_POST['sipali'])) {
							$sipali=htmlspecialchars($_POST['sipali']);
							if($malidurum['gayme'] < 1000) {
								?>
									<center>
				 <a href="index.php?page=gbuy" class="btn btn-success btn-lg"><?=$lang["gayme_yetersiz"]; ?></a></center><?php
							}elseif($sipali < 1) {
									echo $lang["sipali_duzgun_degil"];
							}elseif ($sipali > $sipalistogu['sipali']) {
									echo $lang["sipali_stok_yetersiz"];
							}else {
								mysql_query("update c_user_bank set gayme=gayme-(".($sipali*1000).") where user_id='$ciftlikid'");
								mysql_query("update c_user_bank set sipali=sipali+$sipali where user_id='$ciftlikid'");
								mysql_query("update c_config set sipali=sipali-$sipali where id='1'");
											$ip_adresi = GetIP();
											$aciklama=$lang["sipali_al_aciklama"];
											$bugun = date("Y-m-j H:i:s");
											mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
								?>
									<center>
				 <a href="index.php?page=gbuy" class="btn btn-success btn-lg"><?=$lang["sipali_al_aciklama"]; ?></a></center><?php
							}
							
						}
						?>
				  
				  
					<?=$lang["sipali_durumu"]; ?><?php echo $sipalistogu['sipali']; ?>
					<br><br><?=$lang["sipali_aciklama"]; ?>
					<br><br>
					<div class="tile-stats">
                  <div class="icon"><i class="fa fa-tint"></i></div>
				  <form action="index.php?page=gbuy" method="post">
                  <div class="count"><input type="text" name="sipali"></div>
                  <h3><?=$lang["kac_sipali_alacak"]; ?></h3>
				  <p><?=$lang["sipali_cevirme"]; ?></p>
                  <p><button type="submit"><i class="fa fa-tint"> </i> <?=$lang["satin_al"]; ?></button></p>
                </form>
				</div>
             

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>