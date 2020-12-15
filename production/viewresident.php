<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="images/imgal.jpg">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>View Residents Information | BIMS</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="icon" href="images/seal.jpg">
    <style>
     .column {
  float: left;
  width: 50%;
  }
  .row:after {
  content: "";
  display: table;
  clear: both;
</style>
  </head>

 <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a class="site_title"><img src="images/seal.jpg"width="50" height="50"> <span>Barangay XYZ</span></a>
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
                  <li><a href="dashboard.php"><i class="fa fa-desktop"></i>Dashboard</a>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="index.html">
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
                    <li><a href="index.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
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
                <h3>View Residents Information</h3>
              </div>
            </div>

            <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12 col-xs-12 ">
                
                <div class="x_panel">
                  <div class="x_title">
                    <h2>View Resident</h2>
                    
                    <div class="clearfix"></div>
                  </div>

<?php
$mysqli = new mysqli("localhost","root","","jaguar");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM resident";

if ($result = $mysqli -> query($sql)) {
  // Get field information for all fields
  while ($fieldinfo = $result -> fetch_field()) {

  }
  $result -> free_result();
}

$mysqli -> close();
?>
          <div class="x_content">
                  <h2 class="StepTitle">Personal Information</h2>
                  <br><br>
                    <div class="row">
                      <div class="column">
                  <p style="margin-left: 100px"><b>Resident ID</b></p>
                  <p style="margin-left: 100px"><b>Last Name</b>
                  <p style="margin-left: 100px"><b>First Name</b></p>
                  <p style="margin-left: 100px"><b>Middle Name / Initial</b></p>
                  <p style="margin-left: 100px"><b>Alias</b></p>
                  <p style="margin-left: 100px"><b>Face Marks</b></p>
                  <p style="margin-left: 100px"><b>Date of Birth</b></p>
                  <p style="margin-left: 100px"><b>Birth Place</b></p>
                  <p style="margin-left: 100px"><b>Sex</b></p>
                      </div>
                      <div class="column">
                  <br>
                  <p style="margin-left: 100px"><b>Civil Status</b></p>
                  <p style="margin-left: 100px"><b>Nationality</b></p>
                  <p style="margin-left: 100px"><b>Religion / Belief</b></p>
                  <p style="margin-left: 100px"><b>Occupation</b></p>
                  <p style="margin-left: 100px"><b>Sector</b></p>
                  <p style="margin-left: 100px"><b>Spouse's Name</b></p>
                  <p style="margin-left: 100px"><b>Spouse's Occupation</b></p>
                  <p style="margin-left: 100px"><b>Voter Status</b></p>
                      </div>
                    </div>
                    <br>
                    <h2 class="StepTitle">Contact Information</h2>
                  <br>
                    <div class="row">
                      <div class="column">
                  <p style="margin-left: 100px"><b>City Address</b></p>
                  <p style="margin-left: 100px"><b>Provincial Address</b></p>
                  <p style="margin-left: 100px"><b>Purok</b></p>
                  <p style="margin-left: 100px"><b>Home Number 1</b></p>
                      </div>
                      <div class="column">
                  <p style="margin-left: 100px"><b>Home Number 2</b></p>
                  <p style="margin-left: 100px"><b>Mobile Number 1</b></p>
                  <p style="margin-left: 100px"><b>Mobile Number 2</b></p>
                  <p style="margin-left: 100px"><b>Email Address</b></p>
                      </div>
                    </div>
                    <br>
                    <h2 class="StepTitle">Registration Details</h2>
                  <br>
                    <div class="row">
                      <div class="column">
                  <p style="margin-left: 100px"><b>Resident Type</b></p>
                  <p style="margin-left: 100px"><b>Date & Time Registered</b></p>
                  <p style="margin-left: 100px"><b>Transaction ID</b></p>
                      </div>
                      <div class="column">
                  <p style="margin-left: 100px"><b>Resident Status</b></p>
                  <p style="margin-left: 100px"><b>Processed by</b></p>
                      </div>
                    </div>
                    <br>

                    <center><td><a href="residents.php" class="btn btn-primary"><i class="fa fa-chevron-left"></i> Back </a></td></center>




                  </div>
                </div>
              </div>
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

    
    </div>
                  </div>
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
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>