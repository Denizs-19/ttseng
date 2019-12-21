<?php

	// The PHP code below demostrates how to determine whether the 
	// request paramter for the verification code field matches the 
	// last security image that was displayed.  Your PHP code must 
	// pass the request parameter value to the isChallengeAccepted() 
	// method, which will return TRUE or FALSE based on whether 
	// the match was successful or not.
	
	// This will be the request parameter name.  When we create the form,  
	// this name will be used for the "name" attribute of the input tag.
	$CHALLENGE_FIELD_PARAM_NAME = "vercode"; 
	
	// The following include is required in order to call 
	// the isChallengeAccepted() function.
	require_once('cod/includes/challenge.php');

	// If there was a form post, handle it 
	if(isset($_POST[$CHALLENGE_FIELD_PARAM_NAME])) {

		// Check challenge string
		if(isChallengeAccepted($_POST[$CHALLENGE_FIELD_PARAM_NAME]) === FALSE) {
		    $resultMessage = "0";
		} else {
			$resultMessage = "1";
		}
		
	} else {
		
		$resultMessage = "";
		
	}

?>
<?php

	// If there is a result message from the form post, display it 
	if(!empty($resultMessage)) {
		echo "<p class=\"resultMessage\">{$resultMessage}</p>\n";
	}

	// The HTML below demonstrates how to include the challenge image in 
	// a form.  Modify the "src" attribute to correspond to the path where 
	// the script was installed.

?>
		<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$lang["bonus_kazan"]; ?></h3>
              </div>

            </div>

            <div class="clearfix"></div>




         
           

		<div class="row">
              <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10 col">
                <div class="x_panel">
               
                  <div class="x_content">



  <div class="x_title">
                    <h2>Bonus</h2>
                    
                     
                    <div class="clearfix"></div>
                  </div>
				  <? if ($resultMessage=="1") { ?>
				  <?php 
						$yumurtak="0.075";  
						$bonus= "1";
						$bugun1 = date("Y-m-j");
						mysql_query("update c_user_bank set gayme=gayme+$yumurtak where user_id='$ciftlikid'");
						mysql_query("update c_users set bonus=bonus+$bonus where id='$ciftlikid'");
						
						$ip_adresi = GetIP();
						$aciklama="bonus yumurta kazandı";
						$bugun = date("Y-m-j H:i:s");
						mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$ciftlikid', '$bugun', '$aciklama')");
					 ?>
<center>
<font size="9" color="red">Bonus olarak <? echo $yumurtak; ?> Akçe kazandın</font>
</br>
<a href="/index.php?page=bonuskazan">Bonus sayfasına geri dönmek için tıklayın...</a>
</center>

<? } 
if ($resultMessage=="0") { ?>
<center>
<font size="9" color="red">Hatalı Kod Girdiniz</font>
</br>
<a href="/index.php?page=bonuskazan">Bonus sayfasına geri dönmek için tıklayın...</a>
</center>
<? } ?>

        </div>
              </div>
			  
		
			  
            </div>	
			

			
			

          </div>
        </div>
        </div>