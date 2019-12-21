		<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3><?=$lang["bonus_kazan"]; ?></h3>
              </div>

            </div>

            <div class="clearfix"></div>




           <div class="small-box bg-red">
<div class="inner">

	<center><font size="5" color="white">Bonus Kazanmak İçin Doğrulama İşlemini Yapmanız Gerekmektedir.</font></center>
 
</div>
</div>   
           

		<div class="row">
              <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10 col">
                <div class="x_panel">
               
                  <div class="x_content">



  <div class="x_title">
                    <h2>Doğrulama İşlemi</h2>
                    
                     
                    <div class="clearfix"></div>
                  </div>



		  
		<center><form method='post' action='index.php?page=bonusver'>

	

	

<div id='resim' style='display:none'>Lütfen Doğrulama kodunu Giriniz<br>



<center><img src="cod/getimage.php"></center>
<br><input type='text' name='vercode' value='Örneğin : 5' onclick="this.value='';"><br><br>
<button>Bonus Akçe Kazan</button></form></div>

		
	
	
	



<div id="reklam">
<img src="cod/5-1.gif"><br>
Lütfen <b><span id="kalan"></span></b> saniye Bekleyiniz
<script>
var sure = 5; // kaç saniye bekletilecek
var saniye=document.getElementById("kalan").innerHTML = sure+ 1;

function showMe(blockId)  {    
    document.getElementById(blockId).style.display = "block";  }  
function hideMe(blockId)  {    
    document.getElementById(blockId).style.display = "none";  }
function goster() {
    showMe('resim');
    hideMe('reklam');  }

function final(){ 
  if (saniye!=1){ 
    saniye-=1; 
    document.getElementById("kalan").innerHTML  = saniye;   } 

  else{ 
    goster();
    return;   } 
  setTimeout("final()",1000);
} 
final();	
</script>

</div>




		
 
		





        </div>
              </div>
			  
		
			  
            </div>	
			

			
			

          </div>
        </div>
        </div>