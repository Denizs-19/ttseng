<?php

      include('_imp/dbcon.php');
	  
      include('_imp/functions.php');

	$bonus=mysql_query("select id, bonus from c_users order by bonus DESC limit 0,2");
	$bonusr=mysql_fetch_array($bonus);
	echo $bonusr['bonus'];

	
	
	$bonus2=mysql_query("select id, bonus from c_users order by bonus DESC limit 1,2");
	$bonusr2=mysql_fetch_array($bonus2);
	echo $bonusr2['bonus'];

	$bonus3=mysql_query("select id, bonus from c_users order by bonus DESC limit 2,2");
	$bonusr3=mysql_fetch_array($bonus3);
	echo $bonusr3['bonus'];
	
	$aciklama="bonus lider ödülü aldý";
	$bugun = date("Y-m-j H:i:s");
	
	mysql_query("update c_user_bank set gayme=gayme+150 where user_id='$bonusr[id]'");
	mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$bonusr[id]', '$bugun', '$aciklama')");
	mysql_query("update c_user_bank set gayme=gayme+100 where user_id='$bonusr2[id]'");
	mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$bonusr2[id]', '$bugun', '$aciklama')");
	mysql_query("update c_user_bank set gayme=gayme+50 where user_id='$bonusr3[id]'");
	mysql_query("insert into c_log (id, ip, uye, tarih, aciklama) values ('', '$ip_adresi', '$bonusr3[id]', '$bugun', '$aciklama')");
	
	mysql_query("update c_users set bonus=''");
