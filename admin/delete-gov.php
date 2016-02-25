<?php
require('../configuration/configuration.php');
$oGeneral = new GeneralClass();

  $id= $_REQUEST['id']; 

  

 $oGeneral->delete_record('tbl_gov_emp','fld_id',$id);


  header('location:'. $_SERVER['HTTP_REFERER']);

  
?>