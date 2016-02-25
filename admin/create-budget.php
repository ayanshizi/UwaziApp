<?php
require('../configuration/configuration.php');
if(empty($_SESSION['fld_username'])){
header('location: ../index.php');	
}
$oGeneral = new GeneralClass();
if(isset($_POST['submit'])){
	$bData=$_POST;

	$lastid = $oGeneral->insert_data('tbl_budget',$bData);



	if($lastid>0){



     $msg ="Budget Created Successfully ";	 

	}

	else{

	    $msg ="Please Try Again";

	}

}
?>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="../css/foundation.css" />
    <link rel="stylesheet" href="../css/app.css" />
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
      <!-- start search rep -->   
	  
	     <div class="large-12 columns">
                <div align="center" id="search_rep">
                  <h2>Create Budget </h2>
				  
                  <form action="" method="post">
                    <div class="row">
                      <div class="medium-6 medium-centered columns">
					  <input type="text" id="budget_name" name="fld_budgetname" placeholder="Budget name" required></div>
                    </div>

                    <div class="row">
                      <div class="medium-6 medium-centered columns">
                        <div class="row">
                          <div class="large-12 large-uncentered columns">
                            <select name="fld_year" required>
                              <option value="" disabled selected>-- Select Year --</option>
                              <option value="2016_2017">2016-2017</option>
                              <option value="2017_2018">2017-2018</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div> 

                    <div class="row">
                      <div class="medium-centered medium-6 small-12 columns">
                        <label> </label>
                        <textarea placeholder="Write a description about the budget." name="fld_description" required></textarea>
                      </div>
                    </div> 
                    
                    <div class="row">
                      <div class="medium-6 medium-centered columns">
                        <input type="submit" style="width:100%;" class="button success" name="submit" value="Create Budget"> 
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
			<span><?=$msg?></span>
    <!--END SEARCH BUDGET --> 
    
  
  </div>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/vendor/what-input.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
