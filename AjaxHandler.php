<?php 
require('configuration/configuration.php');
$oGeneral = new GeneralClass();
 
$token= $_REQUEST['Token'];

switch($token)
{
	case'save-govemp': 
						$sEmail=$_REQUEST['fld_email'];
						  
						$oGeneral->check_duplicate_record('tbl_gov_emp','fld_email',$sEmail);
						
						$iCount=$oGeneral->icount;
						if($iCount=="")
						{	
							$bData=$_POST;
							$lastid = $oGeneral->insert_data('tbl_gov_emp',$bData);

							if($lastid>0){
							 
							echo $msg ="Your position will be verified shortly. A confirmation will be sent to your e-mail.";	 	
							}
							else{
							   echo $msg ="Please Try Again";
							}
						}
						else{
						  	
						 echo $msg ="You are Already Registered";
						}
		
	break;
	
	case'save-citizen': 
	
						$sEmail=$_REQUEST['fld_email'];
						  
						$oGeneral->check_duplicate_record('tbl_citizen','fld_email',$sEmail);
						
						$iCount=$oGeneral->icount;
						if($iCount=="")
						{	
	
	
							$bData=$_POST;
							$lastid = $oGeneral->insert_data('tbl_citizen',$bData);

							if($lastid>0){

							 echo $msg ="Citizen Added Successfully ";	 
							}
							else{
							echo $msg ="Please Try Again";
							}
					    }
						else{
						  	
						 echo $msg ="You are Already Registered";
						}

		
	break;
					
							
 
}

?>