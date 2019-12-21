		<div class="right_col" role="main">
          <div class="">

            <div class="clearfix"></div>
			<?php
			$user=htmlspecialchars($_GET['user']);
			if ($user == "") { $userid = $ciftlikid; }else {$userid = $user; }
			$uyebilgileri = mysql_fetch_array(mysql_query("select * from c_users where id='$userid'"));
			
			?>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["uye_bilgileri"]; ?></h2>
                    
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

				   <div class="col-md-3 col-sm-3 col-xs-12 profile_left">
                      <div class="profile_img">
                        <div id="crop-avatar">
                          <img class="img-responsive avatar-view" src="<?php echo $uyebilgileri['user_pic']; ?>" alt="Avatar" title="Change the avatar">
                        </div>
                      </div>
                      <h3><?php echo $uyebilgileri['name_surname']; ?></h3>

                      <ul class="list-unstyled user_data">
                        <li><i class="fa fa-map-marker user-profile-icon"></i> <?php echo $uyebilgileri['city']; ?>
                        </li>

                        <li>
                          <i class="fa fa-briefcase user-profile-icon"></i> <?php echo $uyebilgileri['job']; ?>
                        </li>

                        <li class="m-top-xs">
                          <i class="fa fa-external-link user-profile-icon"></i>
                          <a href="<?php echo $uyebilgileri['web']; ?>" target="_blank"><?php echo $uyebilgileri['web']; ?></a>
                        </li>
                      </ul>

                      <a href="index.php?page=settings" class="btn btn-success"><i class="fa fa-edit m-right-xs"></i><?=$lang["ayarlar"]; ?></a>
                      <br /><br>
						<?=$lang["reflerim"]; ?>
						<?php 
						$reflerim=mysql_query("select username, name_surname from c_users where ref='$ciftlikid' order by id DESC");
						while($refler=mysql_fetch_array($reflerim)) {
							echo"$refler[username] - $refler[name_surname] <br>";
						}
						?>
                    </div>
                    <div class="col-md-9 col-sm-9 col-xs-12">

                      <div class="" role="tabpanel" data-example-id="togglable-tabs">
                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                          <li role="presentation" class="active"><a id="home-tab" role="tab" data-toggle="tab" aria-expanded="true"><?=$lang["son_aktivite"]; ?></a>
                          </li>
                          
                        </ul>
                        <div id="myTabContent" class="tab-content">
                          <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">

						  <?php 
						  $log=mysql_query("select * from c_log where uye='$userid' order by id DESC limit 0,25");
						  ?>
                            <!-- start recent activity -->
                            <ul class="messages">
                              <?php
							  while ($logla=mysql_fetch_array($log)) { 
							  $gun = date_create($logla['tarih']);
							  ?>
							  <li>
                                <img src="<?php echo $uyebilgileri['user_pic']; ?>" class="avatar" alt="<?php echo $uyebilgileri['username']; ?>">
                                <div class="message_date">
                                  <h3 class="date text-info"><?php echo date_format($gun, 'd'); ?></h3>
                                  <p class="month"><?php echo date_format($gun, 'm'); ?></p>
                                </div>
                                <div class="message_wrapper">
                                  <h4 class="heading"><?php echo $uyebilgileri['name_surname']; ?></h4>
                                  <blockquote class="message"><?php echo $logla['aciklama']; ?></blockquote>
                                  <br />
                                  <p class="url">
                                    <span class="fs1 text-info" aria-hidden="true" data-icon=""></span>
                                    <a><i class="fa fa-paperclip"></i> <?php echo $logla['ip']; ?> - <?php echo $logla['tarih']; ?></a>
                                  </p>
                                </div>
                              </li>
                              <?php } ?>
                            </ul>
                            <!-- end recent activity -->

                          </div>
                         
                        </div>
                      </div>
                    </div>
 
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 



