<?php
$uretimtuketim=mysql_fetch_array(mysql_query("SELECT SUM(a_uretim) as uretim, SUM(a_tuketim) as tuketim, yum_sat, ydepo from c_animals, c_user_ani, c_user_depo WHERE c_user_ani.ani_id=c_animals.id AND c_user_ani.user_id='$ciftlikid' AND c_user_depo.user_id='$ciftlikid' AND c_animals.cins='Tavuk' AND c_user_ani.tarih<c_user_depo.yum_sat"));
$uretimmiktari=$uretimtuketim['uretim'];
$tuketimmiktari=$uretimtuketim['tuketim'];
$satiszamani=$uretimtuketim['yum_sat'];
$yumurtadeposu=$uretimtuketim['ydepo'];
			$zaman1 = strtotime($satiszamani); 
			$zaman2 = strtotime('now'); 
			$saatfarki = ($zaman2-$zaman1)/3600 ; 
			$yumurtlama = $uretimmiktari * $saatfarki ;
			
			
			
			
$uretimtuketim1=mysql_fetch_array(mysql_query("SELECT SUM(a_uretim) as uretim, SUM(a_tuketim) as tuketim, tarih from c_animals, c_user_ani, c_user_depo WHERE c_user_ani.ani_id=c_animals.id AND c_user_ani.user_id='$ciftlikid' AND c_user_depo.user_id='$ciftlikid' AND c_animals.cins='Tavuk' AND c_user_ani.tarih>c_user_depo.yum_sat"));
$uretimmiktari1=$uretimtuketim1['uretim'];
$tuketimmiktari1=$uretimtuketim1['tuketim'];
$satiszamani1=$uretimtuketim1['tarih'];
			$zaman3 = strtotime($satiszamani1); 
			$zaman4 = strtotime('now'); 
			$saatfarki1 = ($zaman4-$zaman3)/3600 ; 
			$yumurtlama1 = $uretimmiktari1 * $saatfarki1 ;
			
			
$toplamyumurta=$yumurtlama + $yumurtlama1;
$toplamyumurta1 = round($toplamyumurta);

if ($toplamyumurta1 > $yumurtadeposu) {
			mysql_query("update c_user_depo set yumurta='$yumurtadeposu' where user_id='$ciftlikid'");
			}else {
			mysql_query("update c_user_depo set yumurta='$toplamyumurta1' where user_id='$ciftlikid'");
			}


$uretimtuketim2=mysql_fetch_array(mysql_query("SELECT SUM(a_uretim) as uretim, SUM(a_tuketim) as tuketim, sut_sat, sdepo from c_animals, c_user_ani, c_user_depo WHERE c_user_ani.ani_id=c_animals.id AND c_user_ani.user_id='$ciftlikid' AND c_user_depo.user_id='$ciftlikid' AND c_animals.cins!='Tavuk' AND c_user_ani.tarih<c_user_depo.sut_sat"));
$uretimmiktari2=$uretimtuketim2['uretim'];
$tuketimmiktari2=$uretimtuketim2['tuketim'];
$satiszamani2=$uretimtuketim2['sut_sat'];
$yumurtadeposu2=$uretimtuketim2['sdepo'];
			$zaman5 = strtotime($satiszamani2); 
			$zaman6 = strtotime('now'); 
			$saatfarki2 = ($zaman6-$zaman5)/3600 ; 
			$yumurtlama2 = $uretimmiktari2 * $saatfarki2 ;
			
			
			
			
$uretimtuketim3=mysql_fetch_array(mysql_query("SELECT SUM(a_uretim) as uretim, SUM(a_tuketim) as tuketim, tarih from c_animals, c_user_ani, c_user_depo WHERE c_user_ani.ani_id=c_animals.id AND c_user_ani.user_id='$ciftlikid' AND c_user_depo.user_id='$ciftlikid' AND c_animals.cins!='Tavuk' AND c_user_ani.tarih>c_user_depo.sut_sat"));
$uretimmiktari3=$uretimtuketim3['uretim'];
$tuketimmiktari3=$uretimtuketim3['tuketim'];
$satiszamani3=$uretimtuketim3['tarih'];
			$zaman7 = strtotime($satiszamani3); 
			$zaman8 = strtotime('now'); 
			$saatfarki3 = ($zaman8-$zaman7)/3600 ; 
			$yumurtlama3 = $uretimmiktari3 * $saatfarki3 ;
			
			
$toplamyumurta2=$yumurtlama2 + $yumurtlama3;
$toplamyumurta3 = round($toplamyumurta2);

if ($toplamyumurta3 > $yumurtadeposu2) {
			mysql_query("update c_user_depo set sut='$yumurtadeposu2' where user_id='$ciftlikid'");
			}else {
			mysql_query("update c_user_depo set sut='$toplamyumurta3' where user_id='$ciftlikid'");
			}



					$hayvanlar=mysql_query("select ani_id, tarih from c_user_ani where user_id='$ciftlikid'");
					 while ($hayvan=mysql_fetch_array($hayvanlar)) {
					$hyv=mysql_fetch_array(mysql_query("select a_yasam from c_animals where id='$hayvan[ani_id]'"));
				
					$tarih1 = strtotime($hayvan['tarih']); 
					$tarih2 = strtotime('now'); 
					$gunfarki = ($tarih2-$tarih1)/86400 ; 
					$gun_sayisi = round($gunfarki); 
					if ($hyv['a_yasam'] < $gun_sayisi) {
						mysql_query("delete from c_user_ani where ani_id='$hayvan[ani_id]' AND user_id='$ciftlikid'");
					}
					 }


?>