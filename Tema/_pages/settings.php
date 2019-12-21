        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$lang["ayarlar"]; ?></h3>
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
                    <h2><?=$lang["ayarlarim"]; ?> <small><?=$lang["tumunu_doldur"]; ?></small></h2>
                   
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
		<?php
		if(isset($_POST['password']) && isset($_POST['email'])) {
		$name=htmlspecialchars($_POST['name']);
		$email=htmlspecialchars($_POST['email']);
		$cepno=htmlspecialchars($_POST['phone']);
		$web=htmlspecialchars($_POST['website']);
		$job=htmlspecialchars($_POST['occupation']);
		$pass=htmlspecialchars($_POST['password']);
		$pass1=md5($pass);
		$city=htmlspecialchars($_POST['city']);
		$user_pic=htmlspecialchars($_POST['pic']);
		$iban=htmlspecialchars($_POST['iban']);
		mysql_query("update c_users set name_surname='$name', email='$email', cep='$cepno', web='$web', job='$job', password='$pass1', city='$city', user_pic='$user_pic', iban='$iban' where id='$ciftlikid'");
		}
		?>
				  <?php 
				  $uye_bilgileri=mysql_fetch_array(mysql_query("select * from c_users where id='$ciftlikid'"));				  
				  ?>
                    <form action="index.php?page=settings" method="post" class="form-horizontal form-label-left" novalidate>

                      <span class="section"><?=$lang["kisisel_bilgiler"]; ?></span>

                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><?=$lang["name"]; ?><span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="name" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="name" placeholder="<?=$lang["n_s_orn"]; ?>" required="required" type="text" value="<?php echo $uye_bilgileri['name_surname']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"><?=$lang["email"]; ?><span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $uye_bilgileri['email']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email"><?=$lang["email_tekrar"]; ?> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email2" name="confirm_email" data-validate-linked="email" required="required" class="form-control col-md-7 col-xs-12"  value="<?php echo $uye_bilgileri['email']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name"><?=$lang["yer"]; ?> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="name" id="text" name="city" required="required" data-validate-length-range="2,30" class="form-control col-md-7 col-xs-12"  value="<?php echo $uye_bilgileri['city']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="website"><?=$lang["web"]; ?> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="url" id="website" name="website" placeholder="http://siteniz.com" class="form-control col-md-7 col-xs-12" value="<?php echo $uye_bilgileri['web']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="occupation"><?=$lang["meslek"]; ?> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="occupation" type="text" name="occupation" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12"  value="<?php echo $uye_bilgileri['job']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password" class="control-label col-md-3"><?=$lang["password"]; ?> <span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password" type="password" name="password" required="required" data-validate-length-range="6,15" class="form-control col-md-7 col-xs-12" required="required" >
                        </div>
                      </div>
                      <div class="item form-group">
                        <label for="password2" class="control-label col-md-3 col-sm-3 col-xs-12"><?=$lang["sifre_tekrar"]; ?><span class="required">*</span></label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input id="password2" type="password" name="password2" required="required" data-validate-linked="password" class="form-control col-md-7 col-xs-12" required="required">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone"><?=$lang["cep_no"]; ?> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="tel" id="telephone" name="phone" required="required" data-validate-length-range="10,30" class="form-control col-md-7 col-xs-12"  value="<?php echo $uye_bilgileri['cep']; ?>">
                        </div>
                      </div>
                      <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="text"><?=$lang["user_pic"]; ?> 
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="user_pic" name="pic" class="form-control col-md-7 col-xs-12"  value="<?php echo $uye_bilgileri['user_pic']; ?>">
                        </div>
                      </div>
					  <div class="item form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone"><?=$lang["iban"]; ?> <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="iban" id="iban" name="iban" required="required" data-validate-length-range="25,30" class="form-control col-md-7 col-xs-12"  value="<?php echo $uye_bilgileri['iban']; ?>">
                        </div>
                      </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-md-offset-3">
                          <button type="submit" class="btn btn-primary"><?=$lang["iptal"]; ?></button>
                          <button id="send" type="submit" class="btn btn-success"><?=$lang["gonder"]; ?></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>