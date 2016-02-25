<?php
require('../configuration/configuration.php');
if(empty($_SESSION['fld_username'])){
header('location: ../index.php');	
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

    <div class="wrap"></div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="../js/vendor/jquery.min.js"></script>
    <script src="../js/vendor/what-input.min.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/app.js"></script>
  </body>
</html>
