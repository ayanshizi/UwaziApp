<?php
class AdminClass extends DBClass
{
	public $aAdmin = array();
	public $iAdmin = 0;
	public $sError = '';
	public $sResult = '';
			
	function __construct() 
   	{
		parent::__construct();
		$aAdmin = array();
		$iAdmin = 0;
		$sError = '';
		$sResult = '';
	}
	
	function __destruct() 
   	{
		parent::__destruct();
   	}
	
	function check_admin($_sAdminName='',$_sPassword='')
	{
		 
		//echo $_sAdminName;
	 	$sSqlCheckUser = "SELECT * from tbl_admin WHERE 1=1 ";
		
		if($_sAdminName !='')
		{
			$sSqlCheckUser.=" AND fld_name  = '".$_sAdminName."' ";
		}
		if($_sPassword !='')
		{
			$sSqlCheckUser.=" AND fld_password = '".$_sPassword."'";
		}
	 
		//echo $sSqlCheckUser;die;
		$this->execute_select_query($sSqlCheckUser); 
		$this->aAdmin = $this->aQueryData;
	    $this->iAdmin = $this->iTotalRecords;  
		$this->sError = $this->sQueryError;
		$this->sResult = $this->sQueryResult;
	}
	
	
	function get_users($_sAdminName='',$_sPassword='')
	{
		 
		//echo $_sAdminName;
	 	 $sSqlCheckUser = "SELECT * from tbl_user WHERE 1=1 "; 
		
		if($_sAdminName !='')
		{
			$sSqlCheckUser.=" AND fld_name  = '".$_sAdminName."' ";
		}
		if($_sPassword !='')
		{
			$sSqlCheckUser.=" AND fld_pwd = '".$_sPassword."'";
		}
	 
		//echo $sSqlCheckUser;die;
		$this->execute_select_query($sSqlCheckUser);  
		$this->aAdmin = $this->aQueryData;
	    $this->iAdmin = $this->iTotalRecords;  
		$this->sError = $this->sQueryError;
		$this->sResult = $this->sQueryResult;
	}
	
	
	
	
	function change_admin_password($_iAdminId, $_sPassword)
	{
		$sSqlChangePassword = "UPDATE tbl_admin SET fld_admin_login_password ='".$_sPassword."' WHERE fld_admin_id = ".$_iAdminId;
		$this->execute_update_query($sSqlChangePassword);
		$this->aUserDetails = $this->aQueryData;
		$this->iTotalUsers = $this->iTotalRecords;
		$this->sUserError = $this->sQueryError;
		$this->sUserResult = $this->sQueryResult;
	}
	
	  function getAllMessage($account='',$personEmail='',$messageID='')
	{
		$sSqlResults = "SELECT * from  tbl_message_box  WHERE 1=1 ";
		
		
		
		if($personEmail !='')
		{
			$sSqlResults		.=	"AND fld_email like '%".$personEmail."%' ";
		}
		
		if($account !='')
		{
			$sSqlResults		.=	"AND fld_account_type = '{$account}'  ";
		}
		if($messageID !='')
		{
			$sSqlResults		.=	"AND fld_message_id = '{$messageID}'  ";
		}
		$sSqlResults		.=	" ORDER BY fld_message_id DESC ";
		//echo $sSqlResults.'<br>';
		
		$this->execute_select_query($sSqlResults);
		$this->aResults = $this->aQueryData;
	
		$this->iResults = $this->iTotalRecords;
		$this->sError   = $this->sQueryError;
		$this->sResult  = $this->sQueryResult;
	}

	
		
	
	
	
	
}
?>