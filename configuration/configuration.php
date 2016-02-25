<?php
@ob_start();
@session_start();

error_reporting(2);
 
$sLive = false;

if($sLive == true)
{
	define('sDBHOST','localhost');
	define('sDBUSERNAME','user_uwazi');
	define('sDBPASSWORD','admin@123');
	define('sDBNAME','ayanshiz_uwazi');	
	define('sHOST','http://uwaziapp.com');  			// for site url
	
}
else
{
   define('sDBHOST','localhost');
	define('sDBUSERNAME','root'); 
	define('sDBPASSWORD','');
	define('sDBNAME','ayanshiz_uwazi');	
	define('sHOST','http://127.0.0.1/uwazi/');	// for localhost  url
	
	
}


$aTmpUri = explode("/", trim($_SERVER['REQUEST_URI']));
$allowed = array();
$sALLOWED_FLE = array('jpg','txt','pdf','xls','doc','docx','xlsx','ppt','pptx');

$_aAllowedExtension = array('jpg', 'gif', 'png' ,'doc','docx','jpeg');

if(in_array("admin", $aTmpUri))
{
	
	function __autoload($class_name) 
	{
		 
		require_once "../classes/".strtolower($class_name).'.php';
	}	
}

else {
	function __autoload($class_name) 
	{
		 
		require_once "classes/".strtolower($class_name).'.php';
	}	
	}



?>