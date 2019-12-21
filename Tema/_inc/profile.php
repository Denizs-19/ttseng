            <div class="clearfix"></div>
            <div class="profile">
              <div class="profile_pic">
			  <?php $user_pic = mysql_fetch_array(mysql_query("select user_pic, name_surname, username, nesil, deneyim from c_users where id='$ciftlikid'")); ?>
                <img src="<?php echo $user_pic['user_pic']; ?>" alt="<?php echo $user_pic['username']; ?>" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span><?=$lang["hosgeldin"]; ?></span>
                <h2><?php echo $user_pic['name_surname']; ?></h2>
              </div>
            </div>
            <br />