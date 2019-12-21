            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <center> <?php 
				  if ($user_pic['nesil'] == "0") { ?>
				<i class="fa fa-star" aria-hidden="true"></i>
				<?php }elseif ($user_pic['nesil'] == "1") { ?>
				<i class="fa fa-star-half-o" aria-hidden="true"></i>
				<?php }elseif ($user_pic['nesil'] == "2") { ?>
				<i class="fa fa-paper-plane-o" aria-hidden="true"></i>
				<?php } ?>
				- &nbsp;
				<?php 
				  if ($user_pic['deneyim'] < "100") { ?>
				<i class="fa fa-sun-o" aria-hidden="true"></i>
				<?php }elseif ($user_pic['deneyim'] < "200") { ?>
				<i class="fa fa-sun-o" aria-hidden="true"></i><i class="fa fa-sun-o" aria-hidden="true"></i>
				<?php }elseif ($user_pic['nesil'] < "300") { ?>
				<i class="fa fa-sun-o" aria-hidden="true"></i><i class="fa fa-sun-o" aria-hidden="true"></i><i class="fa fa-sun-o" aria-hidden="true"></i>
				<?php }elseif ($user_pic['deneyim'] < "400") { ?>
				<i class="fa fa-sun-o" aria-hidden="true"></i><i class="fa fa-sun-o" aria-hidden="true"></i><i class="fa fa-sun-o" aria-hidden="true"></i><i class="fa fa-sun-o" aria-hidden="true"></i>
				<?php } ?>
				</center>
                <ul class="nav side-menu">
                  <li><a href="index.php?page=barn"><i class="fa fa-home"></i> <?=$lang["ahirim"]; ?> </span></a>
             
                  </li>
                  <li><a href="index.php?page=buy"><i class="fa fa-truck"></i><?=$lang["pazar"]; ?></span></a>
                    
                  </li>
                  <li><a href="index.php?page=store"><i class="fa fa-server"></i> <?=$lang["depo"]; ?> </span></a>
                    
                  </li>
                  <li><a href="index.php?page=gbuy"><i class="fa fa-money"></i> <?=$lang["doviz_burosu"]; ?> </span></a>
                    
                  </li>
                  <li><a href="index.php?page=ranking"><i class="fa fa-globe"></i> <?=$lang["dunya"]; ?> </span></a>
                   
                  </li>
                  <li><a href="index.php?page=bonus"><i class="fa fa-child"></i>Akçe Kazan</span></a>
                   
                  </li>
                  <li><a href="index.php?page=lidertablosu"><i class="fa fa-money"></i> Bonus Kazan</span></a>
                    
                  </li>
				  <li><a href="index.php?page=gaymesatinal"><i class="fa fa-server"></i> Akçe Satın Al </span></a>
				  
				  </li>
                  <li><a href="index.php?page=referans"><i class="fa fa-child"></i> Referans Profili</span></a>
				  
                  </li>
				  <li><a href="index.php?page=yardim"><i class="fa fa-truck"></i> <?=$lang["yardim"]; ?> </span></a>

				  </li>

				  <?php 
				  if ($user_pic['nesil'] == "0") { ?>
				  <li><a href="index.php?page=fuck"><i class="fa fa-try"></i><?=$lang["yonetim"]; ?></span></a>
                   
                  </li>
				  <?php } ?>
                </ul>
              </div>
              
            </div>