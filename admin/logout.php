<?php 
require('../configuration/configuration.php');
session_destroy();
session_unset($_SESSION['fld_username']);
 
header("location: index.php");	

?>