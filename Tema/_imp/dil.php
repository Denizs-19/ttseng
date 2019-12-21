<?php
session_start();
$lang = $_SESSION["lang"];
if( empty($lang) ){
	 $lang = $_SERVER["HTTP_ACCEPT_LANGUAGE"];
		if( !file_exists("_lang/".$lang.".php") ){
			$lang = 'tr';
				}
				$_SESSION['lang']=$lang;
			}

include("_lang/".$lang.".php");
?>