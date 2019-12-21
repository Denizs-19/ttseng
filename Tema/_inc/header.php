<?php
ob_start();
      include('_imp/dbcon.php');
	  
      include('_imp/functions.php');
$ciftlikid = $_SESSION['ciftlikid'];
$page=strip_tags($_GET['page']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php $title = mysql_fetch_array(mysql_query("select title from c_config")); echo $title['title']; ?></title>
	<meta name="description" content="Çiftliğini kur üretime başla. Yumurtaları ve sütleri sat gerçek para kazan." />
    <meta name="keywords" content="Kral Çiftlik, çılgın tavuklar, çiftlik oyunu, oyun oyna para kazan" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/nprogress.css" rel="stylesheet">
    <link href="css/custom.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>