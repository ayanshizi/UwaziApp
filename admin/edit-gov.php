<?php
require('../configuration/configuration.php');
$oGeneral = new GeneralClass();
$oUser = new UserClass();
if(empty($_SESSION['fld_username'])){
header('location: ../index.php');	
}
if(isset($_POST['submit'])){
	

     

		    $aData=$_POST;
			//print_r($aData);die;
			$fid=$_POST['fld_id'];
			
			
		    $sTableName = 'tbl_gov_emp';
		    $sTblMatchField ='fld_id' ;
			  
			  
			$last_id = $oGeneral->update_data($sTableName,$sTblMatchField,$aData,$fid); 


		if($last_id>0){


		 
		  $_SESSION['msg'] =3;	 
		  header("location: gov.php");

		}
		else{
			
			$_SESSION['msg'] =4;	 
		  header("location: gov.php");
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
	    <!-- START SIGNUP FORM FOR GOVERNMENT -->
    <div class="row">
      <div class="large-12 columns">
        <div align="center" id="signup_citizen">
          <div class="row">
            <div class="medium-6 medium-centered columns">
              
                 <a class="button">Government</a>
               
            </div>
          </div>
          <h2>Signup For Government</h2>
          <form id="form-gov" action="" method="post">
		  
				<?php	if($_REQUEST['id']){
						$id=$_REQUEST['id'];
	$oGeneral->get_records('tbl_gov_emp','fld_id',$id);
    $aAdmin	= $oGeneral->aAdmin;
						
						
					} ?>
		  <input type="hidden" name="fld_id" value="<?=$aAdmin[0]['fld_id']?>"/>
            <div class="row">
				
              <div class="medium-6 medium-centered columns"><input type="text" id="name" name="fld_name" value="<?=$aAdmin[0]['fld_name']?>" placeholder="Full Name"><span id="errorName"></span></div>
            </div>
            <div class="row">
              <div class="medium-6 medium-centered columns"><input type="text" id="email" name="fld_email" value="<?=$aAdmin[0]['fld_email']?>" placeholder="Email" readonly ><span id="errorEmail"></span></div>
            </div>
            <div class="row">
              <div class="medium-6 medium-centered columns"><input type="text" id="username" name="fld_username" value="<?=$aAdmin[0]['fld_username']?>" placeholder="Username @"><span id="usernameError"></span></div>
            </div>
            <div class="row">
              <div class="medium-6 medium-centered columns"><input type="password" id="password" name="fld_password" value="<?=$aAdmin[0]['fld_password']?>" placeholder="Password"><span id="passwordError"></span></div>
            </div>
            <div class="row">
              <div class="medium-6 medium-centered columns">
                <select name="fld_position" id="position" >
                  <option value="" disabled selected>-- Select Position --</option>
                  <option value="M/kt Serikali Mitaa">M/kt Serikali Mitaa</option>
                  <option value="M/kt Seikali Kata">M/kt Seikali Kata</option>
                  <option value="Diwani">Diwani</option>
                  <option value="Mbunge">Mbunge</option>
                </select><span id="positionError"></span>
              </div>
            </div>
            <div class="row">
              <div class="medium-6 medium-centered columns">
                <select name="fld_location" id="location" >
                  <option value="" disabled selected>-- Select Location --</option>
                  <option value="Kigamboni">Kigamboni</option>
                  <option value="Kijitonyama">Kijitonyama</option>
                </select><span id="locationError"></span>
              </div>
            </div>
            <div class="row">
              <!-- <div class="medium-6 medium-centered columns"><input style="width:100%;" class="button" name="signup" type="submit" value="Signup"></div> -->
              <div class="medium-6 medium-centered columns"><input type="submit" style="width:100%;" name="submit" class="button" value="Signup"  ></div>
				<span id="succesdiv"></span>
		   </div>
          </form>
        </div>
      </div>
    </div>
    <!-- END SIGNUP FORM FOR GOVERNMENT -->
 
 
 
 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/vendor/what-input.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
