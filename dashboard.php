<?php
require('configuration/configuration.php');
$oGeneral = new GeneralClass();

if(isset($_REQUEST['govid']) and isset($_REQUEST['pass']))
{
	
	
	$id=$_REQUEST['govid'];
	$pass=$_REQUEST['pass'];
		$oGeneral = new GeneralClass();
	    $oUser = new UserClass();
        $oUser->check_user('tbl_gov_emp','',$pass,$id,1); 
	    $res = $oUser->iResults;
		$aUserDetails	=$oUser->aResults;
		//print_r($aUserDetails);die;
		$aUserDetails[0]['fld_email'];
	   	if($res<0){
		 header('location: login.php?govid=$id');
		}
		$_SESSION['fld_email']= $aUserDetails[0]['fld_email'];
		
}
if(empty($_SESSION['fld_username'])){
header('location: ../index.php');	
}
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uwazi | Search Budgets</title>
    <link rel="stylesheet" href="css_sidebar/foundation.css" />
    <link rel="stylesheet" href="css_sidebar/foundation-icons.css" />
    <link href="css_sidebar/simple-sidebar.css" rel="stylesheet">
    <link href="css_sidebar/fixed-top-bar.css" rel="stylesheet">
    <script src="js_sidebar/vendor/modernizr.js"></script>
  </head>
  <body>
      <nav class="tab-bar">
      <section class="left-small">
        <a class="menu-icon" id="menu-toggle"><span></span></a>
      </section>

      <section class="middle tab-bar-section">
        <h1 class="title">UWAZI</h1>
      </section>

    </nav>

    <div id="wrapper">
            <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="Uwazi.html">
                        <b>UWAZI</b>
                    <span class="fi-home" alt="Uwazi"></span></a>
                </li>

                <li>
                    <a href="discussion.html" alt="Discussion">Discussion<span class="fi-comments" alt="Discussion"></span></a>
                </li>
                <li>
                    <a href="priorities.html">Priorities<span class="fi-clipboard-notes" alt="Priorities"></a>
                </li>
                <li>
                    <a href="dashboard.php">Budget<span class="fi-dollar" alt="Budget"></a>
                </li>
                <li>
                    <a href="search_budgets.html">Search Budgets<span class="fi-magnifying-glass" alt="SearchBudgets"></a>
                </li>
                <li>
                    <a href="search_rep.html">Search for Representative<span class="fi-torsos" alt="SearchRepresentative"></a>
                </li>
                <li>
                    <a href="#">About<span class="fi-info" alt="About"></a>
                </li>
                <li>
                    <a href="#">Contact<span class="fi-address-book" alt="Contact"></a>
                </li>
                <li>
                    <a href="logout.php">Logout<span class="fi-power" alt="Logout"></a>
                </li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        
        <!-- Page Content -->
        <div id="page-content-wrapper" align="center">
          <div class=""  >
      
            <!-- start search budgets -->         
            <div   class="large-6 columns">
                <div align="center" id="search_budgets">
                  <h2>Budgets</h2>
				       <table class="hover">
                    <!-- <thead>
                      <tr>
                        <th width="10"></th>
                        <th><center>Posts</center></th>
                      </tr>
                    </thead> -->
                    <tbody>
						<?php
				$oGeneral->get_records('tbl_budget'); 
       
			   $aUserDetails = $oGeneral->aAdmin;
			   $iUserDetails = $oGeneral->iAdmin;
			   
			   if($iUserDetails> 0){
			 
				
				for($i=0;$i<$iUserDetails;$i++) {
				
				?>
				  	
					
                      <tr>
                        <td>
						
                          <h3><?=$aUserDetails[$i]['fld_budgetname']?></h3> 
                          <h5><?=$aUserDetails[$i]['fld_year']?></h5> <br>
                          <?=$aUserDetails[$i]['fld_description']?>
                          <br>
                           <p><center><a href="discussion.html?id=<?php echo $aUserDetails[$i]['fld_id']; ?>&status=<?php echo $aUserDetails[$i]['fld_status']; ?>">View Discussions</a></center></p>
                          <div class="row">
                            <div class="large-12 columns">
                              <a style="width:100%;" class="button success" href="">Vote For</a>
                              <a style="width:100%;" class="button alert" href="">Against</a>
                            </div>
                          </div>
                        </td>
                      </tr>
			   <?php }} ?>
					  
                    </tbody>
                  </table> 
		   
		   
		   
                </div>
              </div>
            </div>

    <!--END SEARCH BUDGET --> 
    
  
  </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>
    <script src="js_sidebar/vendor/jquery.js"></script>
    <script src="js_sidebar/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="js_sidebar/toggle-class.js"></script>
  </body>
</html>
