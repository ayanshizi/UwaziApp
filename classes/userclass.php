<?php
class UserClass extends DBClass
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
	
	
	function getsalaryAll()
	{
		$sSqlCheckUser="select u.fld_name ,s.fld_id, s.fld_salary, s.fld_commision ,s.fld_totalsalary ,s.fld_date from tbl_salary s left join tbl_user u on u.fld_id=s.fld_userid";
		
		$this->execute_select_query($sSqlCheckUser);
	    $this->aResults = $this->aQueryData;
		  
		$this->iResults = $this->iTotalRecords;
		$this->sError = $this->sQueryError;
		$this->sResult = $this->sQueryResult;
		
	}
    function duplicatesalarycheck($userid)
	{
		$sSqlCheckUser="select fld_date from tbl_salary where fld_userid=$userid";
		
		$this->execute_select_query($sSqlCheckUser);
	    $this->aResults = $this->aQueryData;
		  
		$this->iResults = $this->iTotalRecords;
		$this->sError = $this->sQueryError;
		$this->sResult = $this->sQueryResult;
		
	}
	
	
	
	
	function check_user($_tablName,$_sEmailName='',$_sPassword='', $_iUserId='', $_sStatus='' )
	{
		$sSqlCheckUser = "SELECT * from $_tablName WHERE 1=1 ";
		if($_sUserName !='')
		{
			$sSqlCheckUser.=" AND fld_email  = '".$_sEmailName."' ";
		}
		 
		if($_sPassword !='')
		{
			$sSqlCheckUser.=" AND fld_password = '".$_sPassword."'";
		}
		 
		if($_iUserId !='')
		{
			$sSqlCheckUser.=" AND fld_id = '".$_iUserId."'";
		}
		if($_sStatus !='')
		{
			$sSqlCheckUser.=" AND fld_status = '".$_sStatus."'";
		}
		 //echo $sSqlCheckUser;die;
		
		$this->execute_select_query($sSqlCheckUser);
		$this->aResults = $this->aQueryData;
		$this->iResults = $this->iTotalRecords;
		$this->sError = $this->sQueryError;
		$this->sResult = $this->sQueryResult;
	}
		function check_admin($_sAdminName='',$_sPassword='', $_iAdminId='', $_sStatus='')
	{
		$sSqlCheckUser = "SELECT * from tbl_admin WHERE 1=1 ";
		if($_sAdminName !='')
		{
			$sSqlCheckUser.=" AND fld_email  = '".$_sAdminName."' ";
		}

		if($_sPassword !='')
		{
			$sSqlCheckUser.=" AND fld_password = '".$_sPassword."'";
		}
		if($_iAdminId !='')
		{
			$sSqlCheckUser.=" AND fld_id = '".$_iAdminId."'";
		}
		if($_sStatus !='')
		{
			$sSqlCheckUser.=" AND fld_status = '".$_sStatus."'";
		}
		//echo $sSqlCheckUser;die;
		
		$this->execute_select_query($sSqlCheckUser);
		$this->aResults = $this->aQueryData;
		$this->iResults = $this->iTotalRecords;
		$this->sError = $this->sQueryError;
		$this->sResult = $this->sQueryResult;
	}
	function getAll($id='', $iStatus = '' ,$iOrderBy = '' ,$_sOrderType = '' ,$_iStart = '', $iLimit = '' , $searchresult = '', $options = '' )
	{
		$sSqlResults = "SELECT * FROM  tbl_user   WHERE 1=1  ";		
		
		
		
		if($id != '' ) 
		{
			$sSqlResults 		.=	"AND fld_id = '{$id}' ";
		
		}
	
		
		if($iOrderBy != '')
		{			
			$sSqlResults 		.=	" ORDER BY ".$iOrderBy; 
		}
		if($_sOrderType !='')
		{
			$sSqlResults		.= " ".$_sOrderType;
		}
		if($iLimit !='')
		{
			$sSqlResults		.= " LIMIT ".$_iStart. "," .$iLimit;
		}
			
		//echo $sSqlResults.'<br>';
		
		$this->execute_select_query($sSqlResults);
		$this->aResults = $this->aQueryData;
		$this->iResults = $this->iTotalRecords;
		$this->sError   = $this->sQueryError;
		$this->sResult  = $this->sQueryResult;
	}
		 	function getAllPermission($id='',$roleId = '')
	{
		$sSqlResults = "SELECT * FROM  users_has_roles   WHERE 1=1  ";		
		
		if($id != '' ) 
		{
			$sSqlResults 		.=	"AND users_id = '{$id}' ";
		
		}
		
		if($roleId != '' ) 
		{
			$sSqlResults 		.=	"AND roles_id = '{$roleId}' ";
		
		}
			
		//echo $sSqlResults.'<br>';
		
		$this->execute_select_query($sSqlResults);
		$this->aResults = $this->aQueryData;
		$this->iResults = $this->iTotalRecords;
		$this->sError   = $this->sQueryError;
		$this->sResult  = $this->sQueryResult;
	}
	
    function changeUserStatus($tableName ,$id , $fldName , $status){

    if($status==1){
      $sSqlResults="UPDATE $tableName SET `fld_status`= '0' WHERE $fldName=$id";
	  //echo $sSqlResults;
	  	$this->execute_update_query($sSqlResults);
	}
	else{
      $sSqlResults="UPDATE $tableName SET `fld_status`= '1' WHERE $fldName=$id";
        $sSqlResults;  
	  	$this->execute_update_query($sSqlResults);
	}
	
	}
}
?>