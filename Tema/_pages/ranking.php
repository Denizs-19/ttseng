    <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$lang["siralamalar"]; ?> <small><?=$lang["kim_kimdir"]; ?></small></h3>
              </div>

              <div class="title_right">
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
             <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["en_cok_yumurta"]; ?><small><?=$lang["saatlik"]; ?></small> </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
					   <tr>
                          <th>#</th>
                          <th><?=$lang["kullanici_adi"]; ?></th>
                          <th><?=$lang["nesil"]; ?></th>
                          <th><?=$lang["yumurta"]; ?></th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
					  $yumurta=mysql_query("SELECT c_user_ani.user_id, sum(c_animals.a_uretim) as uretim from c_user_ani, c_animals where c_user_ani.ani_id=c_animals.id AND c_animals.cins='Tavuk' GROUP by user_id order by uretim DESC limit 15");
					  $i=1;
					  while ($yumurtar=mysql_fetch_array($yumurta)) {
						  $yumurtau=mysql_fetch_array(mysql_query("select username, nesil from c_users where id='$yumurtar[user_id]'"));
					  ?>
                        <tr>
                          <th scope="row"><?php echo $i; ?></th>
                          <td><?php echo $yumurtau['username']; ?></td>
                          <td><?php echo $yumurtau['nesil']; ?></td>
                          <td><?php echo $yumurtar['uretim']; ?></td>
                        </tr>
						<?php $i++; } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>




              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["en_cok_gayme"]; ?> </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
					   <tr>
                          <th>#</th>
                          <th><?=$lang["kullanici_adi"]; ?></th>
                          <th><?=$lang["nesil"]; ?></th>
                          <th><?=$lang["gayme"]; ?></th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
					  $gayme=mysql_query("select user_id, gayme from c_user_bank order by gayme DESC limit 15");
					  $i=1;
					  while ($gaymer=mysql_fetch_array($gayme)) {
						  $gaymeu=mysql_fetch_array(mysql_query("select username, nesil from c_users where id='$gaymer[user_id]'"));
					  ?>
                        <tr>
                          <th scope="row"><?php echo $i; ?></th>
                          <td><?php echo $gaymeu['username']; ?></td>
                          <td><?php echo $gaymeu['nesil']; ?></td>
                          <td><?php echo $gaymer['gayme']; ?></td>
                        </tr>
						<?php $i++; } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["en_cok_tl"]; ?> </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
					   <tr>
                          <th>#</th>
                          <th><?=$lang["kullanici_adi"]; ?></th>
                          <th><?=$lang["nesil"]; ?></th>
                          <th><?=$lang["para"]; ?></th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
					  $para=mysql_query("select user_id, para from c_user_bank order by para DESC limit 15");
					  $i=1;
					  while ($parar=mysql_fetch_array($para)) {
						  $parau=mysql_fetch_array(mysql_query("select username, nesil from c_users where id='$parar[user_id]'"));
					  ?>
                        <tr>
                          <th scope="row"><?php echo $i; ?></th>
                          <td><?php echo $parau['username']; ?></td>
                          <td><?php echo $parau['nesil']; ?></td>
                          <td><?php echo $parar['para']; ?></td>
                        </tr>
						<?php $i++; } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>




              
              <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["en_cok_hayvan"]; ?> </h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <table class="table table-hover">
                      <thead>
					   <tr>
                          <th>#</th>
                          <th><?=$lang["kullanici_adi"]; ?></th>
                          <th><?=$lang["nesil"]; ?></th>
                          <th><?=$lang["hayvanlarim"]; ?></th>
                        </tr>
                      </thead>
                      <tbody>
                       <?php 
					  $hayvan=mysql_query("SELECT user_id, count(ani_id) as hayvan from c_user_ani GROUP by user_id order by hayvan DESC limit 15");
					  $i=1;
					  while ($hayvanr=mysql_fetch_array($hayvan)) {
						  $hayvanu=mysql_fetch_array(mysql_query("select username, nesil from c_users where id='$hayvanr[user_id]'"));
					  ?>
                        <tr>
                          <th scope="row"><?php echo $i; ?></th>
                          <td><?php echo $hayvanu['username']; ?></td>
                          <td><?php echo $hayvanu['nesil']; ?></td>
                          <td><?php echo $hayvanr['hayvan']; ?></td>
                        </tr>
						<?php $i++; } ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
			  </div>

            <div class="clearfix"></div>

          
              <div class="clearfix"></div>
			<div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?=$lang["son_odemeler"]; ?> </h2>
                    
                    <div class="clearfix"></div>
                  </div>

                  <div class="x_content">

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title"># </th>
                            <th class="column-title"><?=$lang["kullanici_adi"]; ?> </th>
                            <th class="column-title"><?=$lang["nesil"]; ?> </th>
                            <th class="column-title"><?=$lang["odeme"]; ?> </th>
                            <th class="column-title"><?=$lang["zaman"]; ?> </th>
                            <th class="column-title"><?=$lang["durum"]; ?> </th>
                         
                          </tr>
                        </thead>

                        <tbody>
						<?php 
						$odemeler=mysql_query("select * from c_money order by id DESC limit 0,20 ");
						$i=1;
						while($odm=mysql_fetch_array($odemeler)) {
						$user=mysql_fetch_array(mysql_query("select username, nesil from c_users where id='$odm[user_id]'"));
						?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $i; ?> </td>
                            <td class=" "><?php echo $user['username']; ?> </td>
                            <td class=" "><?php echo $user['nesil']; ?> </td>
                            <td class=" "><?php echo $odm['istek']; ?></td>
                            <td class=" "><?php echo $odm['zaman']; ?></td>
                            <td class="a-right a-right "><?php if($odm['odendi'] == "1") { echo "Ödendi"; }elseif($odm['odendi'] == "0") { echo "Beklemede"; } ?></td>
                            
                          </tr>
                         <?php
						$i++; }
						?>						
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>