<?php
class DBClass
{
	private $sDatabaseServer;
	public $sDatabaseName;
	private $sDatabaseUser;
	private $sDatabasePassword;
	private $oConn;
	
	protected $aQueryData = array();
	protected $iTotalRecords = 0;
	protected $iNewInsertedId = '';
	protected $sQueryError = '';
	protected $sQueryResult = '';
	
	function __construct() 
   	{
		$this->sDatabaseServer = sDBHOST;
		$this->sDatabaseUser = sDBUSERNAME;
		$this->sDatabasePassword = sDBPASSWORD;
		$this->sDatabaseName = sDBNAME;
		
		$this->oConn = mysql_connect($this->sDatabaseServer,$this->sDatabaseUser,$this->sDatabasePassword) or die(mysql_error());
		mysql_select_db($this->sDatabaseName)or die(mysql_error());
		
		$this->aQueryData = array();
		$this->iTotalRecords = 0;
		$this->iNewInsertedId = '';
		$this->sQueryError = '';
		$this->sQueryResult = '';
   	}
	
	function __destruct()
	{
		//mysql_close($this->oConn);
	}
	
	protected function execute_select_query($_sQuery)
	{
		 //die('here');
		$this->aQueryData = array();
		$this->iTotalRecords = 0;
		$this->iNewInsertedId = '';
		$this->sQueryError = '';
		$this->sQueryResult = '';
		  $oQueryResult = mysql_query($_sQuery);  
		if ($oQueryResult)
		{
			$this->iTotalRecords = @mysql_num_rows($oQueryResult);
			if ($this->iTotalRecords > 0)
			{
				
				while ($aData = mysql_fetch_assoc($oQueryResult))
				{
				
				foreach($aData as $kd=>$kv)
				{
					
					if(is_array($kv))
					{
						foreach($kv as $kd1=>$kv1)
						{
							$kvdata[$kd1]=stripslashes($kv1);
						}
						$aData1[$kd]=$kvdata;
					}
				else{
						$aData1[$kd]=stripslashes($kv);
					}
				}
				
					$this->aQueryData[] = $aData1;
					
				}
				$this->sQueryResult = "Records Found";
			}
			else
			{
				$this->sQueryResult = "Records Not Found";
			}
			@mysql_free_result($oQueryResult);
		}
		else
		{
			$this->sQueryError = $_sQuery." <br> ".mysql_error();
		}
	}
	
	protected function execute_insert_query($_sQuery)
	{			
		$this->aQueryData = array();
		$this->iTotalRecords = 0;
		$this->iNewInsertedId = '';
		$this->sQueryError = '';
		$this->sQueryResult = '';
		$oQueryResult = mysql_query($_sQuery);
		if ($oQueryResult)
		{
			$this->iNewInsertedId = mysql_insert_id();
			$this->sQueryResult = 'Record(s) Inserted';
		}
		else
		{
			$this->sQueryError = $_sQuery." <br> ".mysql_error();
		}
	}
	
	protected function execute_delete_query($_sQuery)
	{			
		$this->aQueryData = array();
		$this->iTotalRecords = 0;
		$this->iNewInsertedId = '';
		$this->sQueryError = '';
		$this->sQueryResult = '';
		$oQueryResult = mysql_query($_sQuery);
		if ($oQueryResult)
		{
			$this->sQueryResult = "Record(s) Deleted";
		}
		else
		{
			$this->sQueryError = $_sQuery." <br> ".mysql_error();
		}
	}
	
	protected function execute_update_query($_sQuery)
	{			
		$this->aQueryData = array();
		$this->iTotalRecords = 0;
		$this->iNewInsertedId = '';
		$this->sQueryError = '';
		$this->sQueryResult = '';
		$oQueryResult = mysql_query($_sQuery);
		if ($oQueryResult)
		{
			$this->sQueryResult = "Record(s) Updated";
		}
		else
		{
			$this->sQueryError = $_sQuery." <br> ".mysql_error();
		}
	}
}
?>
