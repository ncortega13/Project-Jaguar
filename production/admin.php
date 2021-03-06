<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admins Configuration</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
   <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <link href="css.css" rel="stylesheet">
    <link rel="icon" href="images/imgal.jpg">
  </head>

   <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">

              <a class="site_title"><img src="images/imga.jpg"width="50" height="50" style="border-radius: 55px"> <span>Barangay XYZ</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Admin!</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br>

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href="index.php"><i class="fa fa-desktop"></i>Dashboard</a>
                  </li>
                  <li><a href="form_wizards.html"><i class="fa fa-edit"></i> Registration</a>
                  </li>
                  <li><a href="residents.php"><i class="fa fa-table"></i> Residents Information</a>
                  </li>
                  <li><a><i class="fa fa-certificate"></i>Certificate Issuance <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="chartjs.php">Certificate of Residency</a></li>
                      <li><a href="chartjs2.php">Barangay Clearance</a></li>

                    </ul>
                  </li>
                <li><a href="tables.html"><i class="fa fa-user"></i>Admins Configuration</a>
                  </li>
                </div>
              </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
               <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">Admin
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Administrator Configuration</h3>
              </div>

            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Barangay Officials Registration </h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a  class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
						<form action="" method="POST" class="form-horizontal form-label-left">
						<table>
                          <div class="row">
                            <div class="column">
						<div class="row">
                            <div class="column">
							<tr><div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Resident ID: </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="residentid" name="residentid" class="form-control col-md-7 col-xs-12" onkeyup ="GetDetail(this.value)"><br>
                            </div>
                          </div></tr>
 
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="last-name">Last Name: </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="lastname" name="lastname" class="form-control col-md-7 col-xs-12" ><br>
                            </div>
                          </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">First Name: </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input type="text" id="firstname" name="firstname" class="form-control col-md-7 col-xs-12" ><br>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Middle Name / Initial: </label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                              <input id="middlename" name="middlename" class="form-control col-md-7 col-xs-12" type="text" > <br>
                            </div>
                          </div>     
</table>						  
                    </form>
                  </div>
                </div>
              </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            BARANGAY XYZ INFORMATION SYSTEM MANAGEMENT</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
<script type="text/javascript"></script>
<script>
    function GetDetail(str){
		if (str.length == 0){
			document.getElementById("lastname").value = "";
			document.getElementById("firstname").value = "";
			document.getElementById("middlename").value = "";
		return;
		}
		else{
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200){
					var myObj = JSON.parse(this.responseText);
					document.getElementById("lastname").value = myObj[0];
					document.getElementById("firstname").value = myObj[1];					
					document.getElementById("middlename").value = myObj[2];
				}
			};				
			xmlhttp.open("GET", "search.php?residentid=" + str, true);
			xmlhttp.send();
		}
	}
</script>
  </body>
</html>