        <div class="top_nav">
          <div class="nav_menu">
		  
			<nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
			  <li class="">
                 				   <a href="http://www.facebook.com/" target=new><img src="http://icons.iconarchive.com/icons/yootheme/social-bookmark/32/social-facebook-button-blue-icon.png" border="0"></a>

                </li>
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
				  <?php $user_pic = mysql_fetch_array(mysql_query("select user_pic, name_surname, username from c_users where id='$ciftlikid'")); ?>
                    <img src="<?php echo $user_pic['user_pic']; ?>" alt="<?php echo $user_pic['username']; ?>"><?php echo $user_pic['name_surname']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="index.php?page=profile"> <?=$lang["profilim"]; ?></a></li>
                    <li>
                      <a href="index.php?page=settings">
                        <span><?=$lang["ayarlar"]; ?></span>
                      </a>
                    </li>
                    <li><a href="index.php?page=help"><?=$lang["yardim"]; ?></a></li>
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> <?=$lang["cikis_yap"]; ?></a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <?php
					$son_giris=mysql_fetch_array(mysql_query("select tarih from c_log where uye='$ciftlikid' order by id DESC limit 0,1"));
					$son_duyuru=mysql_fetch_array(mysql_query("select zaman from c_notice order by id DESC limit 0,1"));
					if ($son_duyuru['zaman'] > $son_giris['tarih']) { ?> <span class="badge bg-green">*</span> <?php }
					?>
					
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
						<?php
						$notice=mysql_query("select * from c_notice order by id DESC limit 0,5");
						while ($annon=mysql_fetch_array($notice)) {
					?>
				   <li>
                      <a>
                        <span class="image"> <i class="fa fa-paw"></i></span>
                        <span>
                          
                          <span class="time"><?php echo $annon['zaman']; ?></span>
                        </span>
                        <span class="message">
                          <?php echo $annon['notice']; ?>
                        </span>
                      </a>
                    </li>
					
						<?php } ?>
                      <div class="text-center">
                        <a>
                          <strong><?=$lang["bildirimler"]; ?></strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
