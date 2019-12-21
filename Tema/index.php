<?php
session_start();
ob_start();
if(isset($_SESSION['ciftlikid'])){
	error_reporting(0);
include("_imp/dil.php");
include("_inc/header.php");
include("_inc/logo.php");
include("_inc/profile.php");
include("_inc/sidebar.php");
include("_inc/foot_buttons.php");
include("_inc/top_nav.php");
include("_inc/content.php");

$page=strip_tags($_GET[page]);
$hacker="/";
$hacker1 =".";
if (strpos($page, $hacker) !== false) {
header('Refresh: 0; url=login.php');	
}elseif (strpos($page, $hacker1) !== false) {
header('Refresh: 0; url=login.php');		
}elseif(!empty($page)) {
include("_pages/$page.php");
}else {
include('_pages/index.php');
}
include('_inc/footer.php');
}else {
header('Refresh: 0; url=login.php');
}
ob_end_flush();
?>

<!-- OnDestek Kod Baþlangýcý -->

<!-- OnDestek Kod Bitiþi -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-86368300-1', 'auto');
  ga('send', 'pageview');

</script>
							

<!-- say.ac istatistik kodu -->

<!-- say.ac istatistik kodu son -->