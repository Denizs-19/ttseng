<?php
ob_start();
session_start();
unset($_SESSION['ciftlikid']);
      include('_imp/dbcon.php');
	  include('_imp/dil.php');
	  include('_imp/functions.php');
	 
?>		  


<!DOCTYPE html>
<html lang="tr_TR">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php $title = mysql_fetch_array(mysql_query("select title from c_config")); echo $title['title']; ?></title>
	<meta name="description" content="Şirket kur üretime başla. Sermayeyi sat gerçek para kazan." />
    <meta name="keywords" content="Kazandıran Ticaret, Şifrket kur para kazan, oyun oyna para kazan" />


    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">

    <link href="css/custom.min.css" rel="stylesheet">
	<script src='https://www.google.com/recaptcha/api.js'></script>
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
		  
		   <?php
if(isset($_POST['username']) && isset($_POST['pass'])) {
		$username=htmlspecialchars($_POST['username']);
		$pass=htmlspecialchars($_POST['pass']);
		$pass1 = md5($pass);
		$varmi = mysql_fetch_array(mysql_query("select id from c_users where username='$username' AND password='$pass1'"));
		$kimvar=$varmi['id'];
		if ($kimvar == "") { 
					echo $lang["login_error"];

		}else {
			setcookie ("ciftlikusername", "$username", time() - 2592000);
			$_SESSION["ciftlikid"] = $kimvar;
			$ip_adresi = GetIP();
			$bugun = date("Y-m-j H:i:s");
			$aciklama=$lang["giris_aciklama"];
			mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$kimvar', '$bugun', '$aciklama')");
			echo $lang["inf_true"];
			header('Refresh: 1; url=index.php');
		}
		
}
	?><br>
            <form action ="login.php" method = "post">
              <h1><?=$lang["giris_formu"]; ?></h1>
              <img src="http://kralciftlik.net/img/analogo.jpg" alt="" height="90px"> <h2>Kral Çiftlik Giriş</h2><hr />

              <div>
                <input name="username" type="text" class="form-control" placeholder="<?=$lang["username"]; ?>" required="" />
              </div>
              <div>
                <input name="pass" type="password" class="form-control" placeholder="<?=$lang["password"]; ?>" required="" />
              </div>
              <div>
                <input type="submit" value="<?=$lang["login"]; ?>" >
              </div>
	
              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link"><?=$lang["yenimisin"]; ?>
                  <a href="#signup" class="to_register"> <?=$lang["kayit_ol"]; ?> </a>
                </p>

                <div class="clearfix"></div>
                <br />
                <div>
                  <h1><i class="fa fa-paw"></i> <?php $title = mysql_fetch_array(mysql_query("select title from c_config")); echo $title['title']; ?></h1>
                  <p>2016 Türk Yapımı Oyun Oynayarak Para Kazanma Sitesi</p>
                </div>
              </div>
            </form>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">  
		   <?php
		      $ref=htmlspecialchars($_GET['ref']);
		  if(isset($_POST['user']) && isset($_POST['password']) && isset($_POST['cep']) && isset($_POST['email'])) {
			  $username=htmlspecialchars($_POST['user']);
			  $pass=htmlspecialchars($_POST['password']);
			  $cep=htmlspecialchars($_POST['cep']);
			  $email=htmlspecialchars($_POST['email']);
			  $pass1 = md5($pass);
			  $uyeadi=mysql_num_rows(mysql_query("select id from c_users where username='$username' OR cep='$cep' OR email='$email'"));
			  if($uyeadi == "0") {  			  
			  mysql_query("insert into c_users (id, username, password, cep, email, nesil) values ('', '$username', '$pass1', '$cep', '$email', '1')");
			  $user_idne = mysql_insert_id();
			  mysql_query("insert into c_user_bank (id, user_id, gayme, para) values ('', '$user_idne', '1750', '0')");
			  mysql_query("insert into c_user_depo (id, user_id, yumurta, sut, peynir) values ('', '$user_idne', '0', '0', '0')");
			if ($ref != "") { 
						mysql_query("update c_users set deneyim=deneyim+1 where id='$ref'");
						mysql_query("update c_users set ref='$ref' where id='$user_idne'");
						$aciklama=$lang["deneyim_kazandin"];
						$bugun = date("Y-m-j H:i:s");
						mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '', '$user_idne', '$bugun', '$aciklama')");
				}
			echo$lang["inf_true"];
			  header('Refresh: 1; url=login.php');
		  }else {
			  echo $lang["inf_false"];
			  header('Refresh: 1; url=login.php?ref=$ref#signup');
		  }
		  }
		  ?>
            <form action ="login.php?ref=<?php echo $ref; ?>" method= "post">
              <h1><?=$lang["kayit_ol"]; ?></h1>
              <div>
                <input name= "user" type="text" class="form-control" placeholder="<?=$lang["username"]; ?>" required="" />
              </div>
              <div>
                <input name="email" type="email" class="form-control" placeholder="<?=$lang["email"]; ?>" required="" />
              </div>
              <div>
                <input name="password" type="password" class="form-control" placeholder="<?=$lang["password"]; ?>" required="" />
              </div>
			   <div>
                <input name="cep" type="text" class="form-control" placeholder="<?=$lang["cep"]; ?>" required="" />
              </div>
              <div>
                <input type="submit" value="<?=$lang["gonder"]; ?>" >
              </div>

              <div class="clearfix"></div>
<div id="">Sitemize üye olan tüm kullanıcılar<a href="http://kralciftlik.net/uyelik_sozlesmesi.php">Üyelik Sözleşmesini</a> okumuş ve onaylanmış sayılacaktır.</div>
              <div class="separator">
                <p class="change_link"><?=$lang["uyemisin"]; ?>
                  <a href="#signin" class="to_register"> <?=$lang["login"]; ?> </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> <?php $title = mysql_fetch_array(mysql_query("select title from c_config")); echo $title['title']; ?></h1>
                  <p>2016 Türk Yapımı Oyun Oynayarak Para Kazanma Sitesi</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
<?php ob_end_flush(); ?>