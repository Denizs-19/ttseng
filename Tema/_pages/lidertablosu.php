		<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$lang["bonus_kazan"]; ?></h3>
              </div>

              <div class="title_right">
                
              </div>
            </div>

            <div class="clearfix"></div>

		<div class="small-box bg-purple">
<div class="inner">
<center>
		<br><a href="/index.php?page=bonuskazan"><font color="white">Bonus Akçe Kazanmak için Tıkla ! </font></a> 		 <h4>Yarışmayı Kazan<b> 500 Akçe</b>yi Kap</h4>
</center>

 
</div>
</div>
	<style type="text/css">		
	#lot{
	background-color: #ffffff;
	width: 100%;
}
th{
	padding-left: 5px;
	padding-right: 5px;
	background-color: #eceff0;
	color: #8d8d8d;
	text-align: center;
}
#lot td{
	background:#fff;border:1px solid;border-color:#e5e6e9 #dfe0e4 #d0d1d5;
	outline-style: none;
	text-align: center;
	height: auto;
}
#lot{
	background-color: #e5e6e9;
}
#lot th{
	padding-left: 30px;

}
#lot td a:nth-child(1) i{
	padding: 5px;
	background-color: #F7CA18;
	border-bottom: 2px solid #cfab1c;
	border-radius: 3px;
	color: white;
}
#lot td a:nth-child(2) i{
	padding: 5px;
	background-color: #EF4836;
	border-bottom: 2px solid #c84133;
	border-radius: 3px;
	color: white;
}		
</style>
			<div class="row">
              <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10 col">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Lider Tablosu</h2>
                    
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
<table border="0" cellspacing="0" cellpadding="2" width="100%" class="table table-responsive table_noborder">

 


<table id="lot"> 
<th><b>Sıra</b></th><th><b>Kullanıcı Adı</b></th><th></th><b><th>Bonus Sayısı</th>
<font size="5">
<?php 
					  $bonus=mysql_query("select id, bonus from c_users order by bonus DESC limit 0,20");
					  $i=1;
					  while ($bonusr=mysql_fetch_array($bonus)) {
						  $bonusu=mysql_fetch_array(mysql_query("select username, bonus from c_users where id='$bonusr[id]'"));
					  ?>
<tr><td><?php echo $i; ?></td><td><?php echo $bonusu['username']; ?></td><td></td><td><?php echo $bonusu['bonus']; ?></td></tr>
<?php $i++; } ?>
</table>
 <?php
					$bonusbilgileri=mysql_fetch_array(mysql_query("select * from c_users where id='$ciftlikid'"));
					?>
Bonus Sayım :<font color='red'> <?php echo $bonusbilgileri['bonus']; ?> </font> </font>
 
<tbody>

<tr>
<td align="left" colspan="2"><br></td>
</tr>

</tbody></table>
					
                  </div>
                </div>
              </div>
			  
			  <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10 col">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Ödüller</h2>
                    
                     
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                   
					<div class="col-lg-7 col-md-12 col-sm-12 col-xs-12">
                


<center>

<h5>1. Olana  <font color="red"><img src="cod/star.png" width="20" height="20"><b> 500 Akçe </b>
<img src="cod/star.png" width="20" height="20"></font></h5><h5>2. Olana  <font color="red"><img src="cod/star.png" width="20" height="20"><b> 250 Akçe </b>
<img src="cod/star.png" width="20" height="20"></font></h5><h5>3. Olana  <font color="red"><img src="cod/star.png" width="20" height="20"><b> 100 Akçe </b>
<img src="cod/star.png" width="20" height="20"></font></h5>
 
	 
Ödüller günlük olarak verilmektedir. Her gün 23:59 da liste sıfırlanır ve ödüller verilir.
</center>



</div>
                  </div>
                </div>
              </div>
			  
            </div>
			
              
           
			
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
              
				   <div class="tile-stats">
                  <div class="icon"><i class="fa fa-facebook-square"></i></div>
			
				</div>
					 
					 
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>