<?php 
require('../configuration/configuration.php');
if(empty($_SESSION['fld_username'])){
header('location: ../index.php');	
}
$oGeneral = new GeneralClass();

?>
<html class="no-js" lang="en">
   <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uwazi | Budgets</title>
    <link rel="stylesheet" href="../css_sidebar/foundation.css" />
    <link rel="stylesheet" href="../css_sidebar/foundation-icons.css" />
    <link href="../css_sidebar/simple-sidebar.css" rel="stylesheet">
    <link href="../css_sidebar/fixed-top-bar.css" rel="stylesheet">
		
	
	 <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/app.css" />
	
    <script src="../js_sidebar/vendor/modernizr.js"></script>
  </head>
  
  
  
  
  <body>

    <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      <div class="title-bar-title">Menu</div>
    </div>
    
    <div class="top-bar" id="example-menu">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="menu-text"><a href="../index.php">Visit Site</a></li>
           
          <li><a href="create-budget.php">Create Budget</a></li>
         
		  <li>
            <a href="">Show List</a>
            <ul class="menu vertical">
              <li><a class="msg" href="citizen.php">Citizen</a></li>
              <li><a class="msg" href="gov.php">Government Citizen</a></li>
			  <li><a class="msg" href="allbudget.php">Budgets</a></li>
            </ul>
          </li>		  
           
		  <li><input type="search" placeholder="Search"></li>
          <li><button type="button" class="button">Search</button></li>
        
          <!-- <li>
            <a href="#">One</a>
            <ul class="menu vertical">
              <li><a href="#">One</a></li>
              <li><a href="#">Two</a></li>
              <li><a href="#">Three</a></li>
            </ul>
          </li> -->
        </ul>
      </div>
        <div class="top-bar-right">
        <ul class="menu">
       
          <li><a href="logout.php">Logout</a></li>
        </ul>
      </div> 
    <!--  <div class="top-bar-right">
          <ul class="menu">
            <li><input type="search" placeholder="Search"></li>
            <li><button type="button" class="button">Search</button></li>
          </ul>
        </div> -->
    </div>
	
	
	
	
	       <!-- Page Content -->
      
          <div class="">

            <div  class="row">
             
            </div>
      
            <div align="center" class="row">
              <div align="center" class="large-4 columns">
                <div  id="discussions">
					 <h2 align="center"> Budgets </h2>
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
          </div>
 
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	


  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/vendor/what-input.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
	
	