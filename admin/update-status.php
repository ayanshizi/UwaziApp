<?php
require_once('../configuration/configuration.php');
$user= new UserClass();
$oGeneral = new GeneralClass();

$id=$_GET['id'];

$status=$_GET['status'];

 $a=array_reverse(explode('/',$_SERVER['HTTP_REFERER']));

  if($a[0]=='citizen.php'){
	
   $tableName='`tbl_citizen`';
   $fldName='`fld_id`';
   
   $page=$_SERVER['HTTP_REFERER'];
   
   $user->changeUserStatus($tableName , $id , $fldName , $status);


  header('location:'. $page);
   
   
   
 }
   if($a[0]=='gov.php'){
	
   $tableName='`tbl_gov_emp`';
   $fldName='`fld_id`';
   
   if($status==1){
		
		$oGeneral->check_duplicate_record($tableName,$fldName,$id); 
		$icount=$oGeneral->icount;
		if($icount>0){
			$_SESSION['msg']=1;
			header('location: gov.php');
		}
		
	}
   else{
       $oGeneral->get_records($tableName,$fldName,$id); 
       $aUserDetails = $oGeneral->aAdmin;
         
     $name=  $aUserDetails[0]['fld_name'];
	 $toemail=$aUserDetails[0]['fld_email'];
	 $pass=$aUserDetails[0]['fld_password'];
   		
   //mail function 
	date_default_timezone_set("Asia/Kolkata");
	//$toemail = "vishalchowdhary.ce@gmail.com";
	//$toemail = "abhishek.apweb@gmail.com";
	$description ="You are now verified Please click no link below to login";
	$link="http://uwaziapp.com/dashboard.php?govid=$id&pass=$pass"; 
	 
$strMessage    .='<table width="80%" border="1" align="center" cellpadding="8" cellspacing="0" bordercolor="#E8E8E8" bgcolor="#FBFBFB" style="border-collapse:collapse" class="formtxt">
     <tr>
      <td height="50" colspan="2" bgcolor="#EEEEEE" align="center"><strong style="font-size:15px; color:#000000">Uwasi</strong></td>
    </tr>
    <tr>
      <td width="26%"><strong>Welcome</strong></td>
      <td width="74%">'.$name.'</td>
     
    </tr>    
    <tr>
      <td width="26%"><strong>Message</strong></td>
      <td>'.$description.'</td>
    </tr>
	<tr>
      <td width="26%"><strong>Click on  Link</strong></td>
      <td>'.$link.'</td>
    </tr>
    <tr>
      <td width="26%"><strong>Date</strong></td>
      <td>'.date('d-m-Y h:i:s').'</td>
    </tr>

   </table>';

$strSubject    =    "Account Verification";
$email = "info@uwaziapp.com";
// To send HTML mail, the Content-type header must be set
$header = "From: ". $name. " <" . $email . ">\r\n";

$header .= 'Content-type: text/html; charset=UTF-8'."\r\n";

mail($toemail, $strSubject, $strMessage, $header) or die('not working');

$_SESSION['msg']=2;
 $user->changeUserStatus($tableName , $id , $fldName , $status);
header('location: gov.php');
   
   
   //close mail
   }
 }
?>