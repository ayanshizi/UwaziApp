<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Uwazi | Create Budget</title>
    <link rel="stylesheet" href="../css_sidebar/foundation.css" />
    <link rel="stylesheet" href="../css_sidebar/foundation-icons.css" />
    <link href="../css_sidebar/simple-sidebar.css" rel="stylesheet">
    <link href="..css_sidebar/fixed-top-bar.css" rel="stylesheet">
    <script src="../js_sidebar/vendor/modernizr.js"></script>
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
                    <a href="budgets.html">Budget<span class="fi-dollar" alt="Budget"></a>
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
                    <a href="Uwazi.html">Logout<span class="fi-power" alt="Logout"></a>
                </li>
            </ul>
        </div>  
        <!-- /#sidebar-wrapper -->
        
        <!-- Page Content -->
        <div id="page-content-wrapper">
          <div class="">
      
            <!-- start search rep -->         
            <div class="large-12 columns">
                <div align="center" id="search_rep">
                  <h2>Create Budget </h2>
                  <form action="" method="post">
                    <div class="row">
                      <div class="medium-6 medium-centered columns"><input type="text" id="budget_name" name="budget_name" placeholder="Budget name"></div>
                    </div>

                    <div class="row">
                      <div class="medium-6 medium-centered columns">
                        <div class="row">
                          <div class="large-12 large-uncentered columns">
                            <select>
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
                        <textarea placeholder="Write a description about the budget."></textarea>
                      </div>
                    </div> 
                    
                    <div class="row">
                      <div class="medium-6 medium-centered columns">
                        <a style="width:100%;" class="button success" href="budgets.html">Create Budget</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>

    <!--END SEARCH BUDGET --> 
    
  
  </div>
        <!-- /#page-content-wrapper -->
      </div>
    </div>
    <script src="../js_sidebar/vendor/jquery.js"></script>
    <script src="../js_sidebar/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
    <script src="../js_sidebar/toggle-class.js"></script>
  </body>
</html>
