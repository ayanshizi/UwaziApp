<?php
require('configuration/configuration.php');
$oGeneral = new GeneralClass();
$oUser = new UserClass();
$_SESSION['fld_email']=$_POST['fld_email'];
if(isset($_POST['submit'])){
 	$_sUserEmail  = $_POST['fld_email'];
	 $_sPassword  = $_POST['fld_password'];
	 $Usertype  = $_POST['fld_type'];
	 
	   
	 
	if($Usertype==0){	 
        $oUser->check_user('tbl_citizen',$_sUserEmail,$_sPassword,'',1); 
	    $res = $oUser->iResults;		
	     	
    }
	if($Usertype==1){	 
        $oUser->check_user('tbl_gov_emp',$_sUserEmail,$_sPassword,'',1); 
	    $res = $oUser->iResults;		
	     	
    }
	
	
		if($res>0){
		 header('location: dashboard.php');
		}
		else{
			 
		$msg ="Wrong Username or Password or inactive";	 
		}
}
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Foundation | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
  </head>
  <body>

    <!-- START NAVBAR -->
    <div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium">
      <button class="menu-icon" type="button" data-toggle></button>
      <div class="title-bar-title">Menu</div>
    </div>
    
    <div class="top-bar" id="example-menu">
      <div class="top-bar-left">
        <ul class="dropdown menu" data-dropdown-menu>
          <li class="menu-text"><a href="index.php">Uwazi</a></li>
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
          <li><a href="login.html">Login</a></li>
          <li><a href="signup_citizen.html">Signup</a></li>
        </ul>
      </div>
    </div>
    <!-- END NAVBAR -->

    <!-- START LOGIN FORM -->
    <div class="row">
      <div class="large-12 columns">
        <div align="center" id="login">
          <h2>Login</h2>
		 
          <form action="" method="post">
		    <div class="row">
              <div class="medium-6 medium-centered columns">
                <select name="fld_type" id="type" required >
                  <option value="" disabled selected>-- Select User Type --</option>
                  <option value="0">Citizen</option>
                  <option value="1">Government </option>
                </select>
              </div>
            </div>	  
		  
            <div class="row">
              <div class="medium-6 medium-centered columns"><input type="text" id="username" name="fld_email" placeholder="useremail" required></div>
            </div>
            <div class="row">
              <div class="medium-6 medium-centered columns"><input type="password" id="password" name="fld_password" placeholder="password" required></div>
            </div>
            <div class="row">
              <div class="medium-6 medium-centered columns">
                <div class="row">
                  <!-- <div class="large-6 large-uncentered columns"><input style="width:100%;" class="button" name="login" type="submit" value="Login"></div> -->
                  <div class="large-6 large-uncentered columns"><input type="submit" style="width:100%;" name="submit" class="button"   value="Login" /></div>
                  <div class="large-6 large-uncentered columns"><a style="width:100%;" class="button secondary" href="signup_citizen.html">Sign Up</a></div>
                </div>
              </div>
            </div>
          </form>
		  <span><?php echo $msg; ?></span>
        </div>
      </div>
    </div>
    <!-- END LOGIN FORM -->

    <script src="js/vendor/jquery.min.js"></script>
    <script src="js/vendor/what-input.min.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>