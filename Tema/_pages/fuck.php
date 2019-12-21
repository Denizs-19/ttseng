 <?php 
$nesilne = mysql_fetch_array(mysql_query("select nesil from c_users where id='$ciftlikid'")); 

 if ($nesilne['nesil'] == "0") { ?>

  <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Yönetim Sayfası</h3>
              </div>
			  
			  <div class="title_right">
                
              </div>
            </div>
			

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Site Ayarları</h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
				<?php  
				if (isset($_POST['title'])) {
				$title=htmlspecialchars($_POST['title']);
				$baslik=htmlspecialchars($_POST['baslik']);
				$sipali=htmlspecialchars($_POST['sipali']);
				mysql_query("update c_config set title='$title', baslik='$baslik', sipali='$sipali' where id='1'");
				}
				  
				?>
			   <?php $sitebilgileri=mysql_fetch_array(mysql_query("select * from c_config where id='1'")); ?>
                    <form action="index.php?page=fuck" method="post" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Ana Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="title"  class="form-control col-md-7 col-xs-12" value="<?php echo $sitebilgileri['title']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Başlık
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="baslik" class="form-control col-md-7 col-xs-12" value="<?php echo $sitebilgileri['baslik']; ?>">
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Sipali Stoğu</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="sipali" value="<?php echo $sitebilgileri['sipali']; ?>">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                         
                          <button type="submit" class="btn btn-success">Kaydet</button>
                        </div>
                      </div>

                    </form>
                
                
				  
                  </div>
                </div>
              </div>
            </div>
			
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Duyuru Ekle</h2>
                     <?php  
				if (isset($_POST['duyuru'])) {
					$duyuru=htmlspecialchars($_POST['duyuru']);
					$bugun = date("Y-m-j H:i:s");
					mysql_query("insert into c_notice (id, notice, zaman) values ('', '$duyuru', '$bugun')");
				}
				?>
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
				<div class="tile-stats">
                  <div class="icon"><i class="fa fa-exclamation-triangle"></i></div>
				  <form action="index.php?page=fuck" method="post">
                  <div class="count">Duyuru: <input type="text" name="duyuru"></div>
                  <h3>Duyuru Yapın</h3>
				  <p>Duyurunuz sağ üst köşede görünecek.</p>
                  <p><button type="submit"><i class="fa fa-exclamation-triangle"> </i> Kaydet</button></p>
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
                    <h2>Adres paylaşanlar</h2>
                    
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <?php  
				if (isset($_POST['odendi'])) {
					$odemeyap=htmlspecialchars($_POST['odendi']);
					$odemeyapid=htmlspecialchars($_POST['odendiid']);
					$id=htmlspecialchars($_POST['id']);
					mysql_query("update c_user_bank set gayme=gayme+$odemeyap where user_id='$odemeyapid'");
					mysql_query("update c_share set odendi='1' where id='$id'");
					mysql_query("update c_share set deger='$odemeyap' where id='$id'");
				}
				?>
					 <table class="table">
                      <thead>
                        <tr>
                          <th>Ödeme</th>
                          <th>Kullanıcı Adı</th>
                          <th>Adres</th>
                          <th>Zaman</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
					  $paylasimyapanlar=mysql_query("select * from c_share where odendi='0' order by tarih ASC");
					  while ($paylasim=mysql_fetch_array($paylasimyapanlar)) {
					  ?>
                        <tr>
                          <th scope="row">
						  <form action="index.php?page=fuck" method="post">
								<input type="text" name="odendi">
                                <input type="hidden" name="odendiid" value="<?php echo $paylasim['user_id']; ?>">
                                <input type="hidden" name="id" value="<?php echo $paylasim['id']; ?>">
                                <button type="submit"><?php echo $paylasim['id']; ?></button>
								</form>
                        </div>
						  </th>
                          <td>
						  <?php
						  $pkullanici=mysql_fetch_array(mysql_query("select username from c_users where id='$paylasim[user_id]'"));
						  echo $pkullanici['username']; ?>
						  </td>
                          <td><a href="<?php echo $paylasim['adres']; ?>" target="_blank"><?php echo $paylasim['adres']; ?></a></td>
                          <td><?php echo $paylasim['tarih']; ?></td>
                        </tr>
                        <?php
					  }
					  ?>
                      </tbody>
                    </table>
					 
                  </div>
                </div>
              </div>
            </div>
			
			
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ödeme İsteyenler</h2>
                    
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   <?php  
				if (isset($_POST['ode'])) {
					$odeme=htmlspecialchars($_POST['ode']);
					mysql_query("update c_money set odendi='1' where id='$odeme'");
				}
				?>
					 <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Kullanıcı Adı</th>
                          <th>İstediği Miktar</th>
                          <th>istediği Zaman</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
					  $odemeisteyenler=mysql_query("select * from c_money where odendi='0' order by zaman ASC");
					  while ($odemeisteyen=mysql_fetch_array($odemeisteyenler)) {
					  ?>
                        <tr>
                          <th scope="row">
						  <form action="index.php?page=fuck" method="post">
								<input type="hidden" name="ode" value="<?php echo $odemeisteyen['id']; ?>">
                                <button type="submit"><?php echo $odemeisteyen['id']; ?></button>
								</form>
                        </div>
						  </th>
                          <td>
						  <?php
						  $kullanici=mysql_fetch_array(mysql_query("select username from c_users where id='$odemeisteyen[user_id]'"));
						  echo $kullanici['username']; ?>
						  </td>
                          <td><?php echo $odemeisteyen['istek']; ?></td>
                          <td><?php echo $odemeisteyen['zaman']; ?></td>
                        </tr>
                        <?php
					  }
					  ?>
                      </tbody>
                    </table>
					 
                  </div>
                </div>
              </div>
            </div>
			
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>E-pin Ekle</h2>
                     <?php  
				if (isset($_POST['epin'])) {
					$epin=htmlspecialchars($_POST['epin']);
					$epindegeri=htmlspecialchars($_POST['epindegeri']);
					mysql_query("insert into c_epin (id, epin, degeri, kullanim) values ('', '$epin', '$epindegeri', '0')");
				}
				?>
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
				<div class="tile-stats">
                  <div class="icon"><i class="fa fa-key"></i></div>
				  <form action="index.php?page=fuck" method="post">
                  <div class="count">E-pin: <input type="text" name="epin"> <br>Değeri: <input type="text" name="epindegeri"></div>
                  <h3>E-pin Kodu Girin</h3>
				  <p>Girdiğiniz kodun değerini girmeyi ve kodu not almayı unutmayın.</p>
                  <p><button type="submit"><i class="fa fa-key"> </i> Kaydet</button></p>
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
                    <h2>Üye Loglarını Getir</h2>
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
				<div class="tile-stats">
                  <div class="icon"><i class="fa fa-user"></i></div>
				  <form action="index.php?page=fuck" method="post">
                  <div class="count">Üye: <input type="text" name="uye"></div>
                  <h3>Kullanıcı Adını Giriniz.</h3>
				  <p>Şüpheli hareketlerde banlayınız..</p>
                  <p><button type="submit"><i class="fa fa-user"> </i> Getir</button></p>
                </form>
				</div>
				
				 <?php  
				if (isset($_POST['uye'])) {
					$kimdir=htmlspecialchars($_POST['uye']);
					?>
				
				 <table class="table">
                      <thead>
                        <tr>
                          <th>İp</th>
                          <th>Kullanıcı Adı</th>
                          <th>Tarih</th>
                          <th>Açıklama</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
					  $kimki=mysql_fetch_array(mysql_query("select id from c_users where username='$kimdir'"));
					  $loggetir=mysql_query("select * from c_log where uye='$kimki[id]' order by tarih DESC");
					  while ($log1=mysql_fetch_array($loggetir)) {
					  ?>
                        <tr>
                          <th scope="row">
						  <?php echo $log1['ip']; ?>
						  </th>
                          <td>
						  <?php
						  echo $kimdir; ?>
						  </td>
                          <td><?php echo $log1['tarih']; ?></td>
                          <td><?php echo $log1['aciklama']; ?></td>
                        </tr>
                        <?php
					  }
					  ?>
                      </tbody>
                    </table>
					
					<?php
				} ?>
					 
                  </div>
                </div>
              </div>
            </div>
			
			
			
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Son Hareketlilik</h2>
                    
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
					 <table class="table">
                      <thead>
                        <tr>
                          <th>İp</th>
                          <th>Kullanıcı Adı</th>
                          <th>Tarih</th>
                          <th>Açıklama</th>
                        </tr>
                      </thead>
                      <tbody>
					  <?php
					  $loglar=mysql_query("select * from c_log order by tarih DESC limit 0,25");
					  while ($log=mysql_fetch_array($loglar)) {
					  ?>
                        <tr>
                          <th scope="row">
						  <?php echo $log['ip']; ?>
						  </th>
                          <td>
						  <?php
						  $kullanici1=mysql_fetch_array(mysql_query("select username from c_users where id='$log[uye]'"));
						  echo $kullanici1['username']; ?>
						  </td>
                          <td><?php echo $log['tarih']; ?></td>
                          <td><?php echo $log['aciklama']; ?></td>
                        </tr>
                        <?php
					  }
					  ?>
                      </tbody>
                    </table>
					 
                  </div>
                </div>
              </div>
            </div>
			
			
          </div>
        </div>
		<?php }else {
			header('Refresh: 0; url=index.php');	

		} ?>