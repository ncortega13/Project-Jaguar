<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dashboard | BIMS</title>

    <style>
    p{
      font-size: 15px;
    }
 
    </style>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
    <link rel="icon" href="images/seal.jpg">
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
      </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <!-- top tiles -->
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Residents</span>
              <div class="count green">
<?php
$con=mysqli_connect("localhost", "root", "", "jaguar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM resident";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
</div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count">
<?php
$con=mysqli_connect("localhost", "root", "", "jaguar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM resident WHERE sex = 'Male'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
			  </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count">
<?php
$con=mysqli_connect("localhost", "root", "", "jaguar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM resident WHERE sex = 'Female'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>			  
			  </div>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Voters</span>
              <div class="count">
<?php
$con=mysqli_connect("localhost", "root", "", "jaguar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM resident WHERE voter_status = 'Yes'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>	</div>
            </div>
<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Minors</span>
              <div class="count">
<?php
$con=mysqli_connect("localhost", "root", "", "jaguar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM resident WHERE birth_date > '12-15-2002'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>  </div>
            </div>

<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Active Residents</span>
              <div class="count">
<?php
$con=mysqli_connect("localhost", "root", "", "jaguar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM resident WHERE resident_status = 'Active'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }?>
</div></div>
          </div>
          <!-- /top tiles -->


          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="dashboard_graph">

                <div class="row x_title">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <h3 style="font-size: 30px"><strong>CURRENT BARANGAY OFFICIALS</strong></h3>
                  </div>

                  </div>
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title">Last Name </th>
                            <th class="column-title">First Name </th>
                            <th class="column-title">Middle Initial </th>
                            <th class="column-title">Position </th>
                            <th class="column-title">Purok </th>
                            <th class="column-title no-link last"><span class="nobr">Action</span>
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                    <tbody>
                          <tr class="even pointer">
                            <td class=" ">Abrenica</td>
                            <td class=" ">Fortunato</i></td>
                            <td class=" ">L</td>
                            <td class=" ">Captain</td>
                            <td class="a-right a-right ">1</td>
                            <td class=" last"><a href="viewresident.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class=" ">Robredo</td>
                            <td class=" ">Leni</i>
                            </td>
                            <td class=" ">K</td>
                            <td class=" ">Kagawad</td>
                            <td class="a-right a-right ">2</td>
                            <td class=" last"><a href="viewresident.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class=" ">Mortera</td>
                            <td class=" ">Darryl Edison
                            </td>
                            <td class=" ">B</td>
                            <td class=" ">Kagawad</td>
                            <td class="a-right a-right ">1</td>
                            <td class=" last"><a href="viewresident.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class=" ">Villa</td>
                            <td class=" ">Conrado</td>
                            <td class=" ">T</td>
                            <td class=" ">Kagawad</td>
                            <td class="a-right a-right ">1</td>
                            <td class=" last"><a href="viewresident.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class=" ">Sakay</td>
                            <td class=" ">Daniel</td>
                            <td class=" ">C</td>
                            <td class=" ">Kagawad</td>
                            <td class="a-right a-right ">3</td>
                            <td class=" last"><a href="viewresident.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class=" ">Ortega</td>
                            <td class=" ">Nicolle Clarisse
                            </td>
                            <td class=" ">S</td>
                            <td class=" ">Kagawad</td>
                            <td class="a-right a-right ">2</td>
                            <td class=" last"><a href="viewresident.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            </td>
                          </tr>
                          <tr class="even pointer">
                            <td class=" ">Olidan</td>
                            <td class=" ">Marko</td>
                            <td class=" ">L</td>
                            <td class=" ">Kagawad</td>
                            <td class="a-right a-right ">3</td>
                            <td class=" last"><a href="viewresident.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class=" ">Dela Cruz</td>
                            <td class=" ">Juan</td>
                            <td class=" ">S</td>
                            <td class=" ">Kagawad</td>
                            <td class="a-right a-right ">1</td>
                            <td class=" last"><a href="viewresident.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            </td>
                          </tr>

                          <tr class="even pointer">
                            <td class=" ">Obejo</td>
                            <td class=" ">Clark</td>
                            <td class=" ">M</td>
                            <td class=" ">SK Chairman</td>
                            <td class="a-right a-right ">1</td>
                            <td class=" last"><a href="viewresident.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            </td>
                          </tr>
                          <tr class="odd pointer">
                            <td class=" ">Marzan</td>
                            <td class=" ">Jeraldine</td>
                            <td class=" ">M</td>
                            <td class=" ">Secretary</td>
                            <td class="a-right a-right ">2</td>
                            <td class=" last"><a href="viewresident.php" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                  </div>
                  </div>
                </div>
                <br>

                <div class="col-md-15 col-sm-15 col-xs-12 bg-white">
                  <div class="x_title">
                    <h2 style="font-size: 30px; margin-top: 10px"><strong>PUROK</strong></h2>
                    <div class="clearfix">
                  </div>
                    
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count">
                      <p style="font-size: 15px"><b>Purok 1 (Zone I)</b></p>
                      
                      <br>
                        <div class="count">

<?php
$con=mysqli_connect("localhost", "root", "", "jaguar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM resident WHERE purok = '1'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<p>Total Resident:</p>";
  printf($rowcount);
  // Free result set

  mysqli_free_result($result);
  }


  $sql="SELECT * FROM resident WHERE sex = 'male' and purok = '1'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<p>Total Male: </p>";
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }


  $sql="SELECT * FROM resident WHERE sex = 'female' and purok = '1'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<p>Total Female: </p>";
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>
          </div>
                    </div>
                    <div class="clearfix">
                    <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count">
                      <p style="font-size: 15px"><b>Purok 2 (Zone II)</b></p>
                      <br>
            <div class="count">
<?php
$con=mysqli_connect("localhost", "root", "", "jaguar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM resident WHERE purok = '2'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<p>Total Resident: </p>";
  printf($rowcount);
  // Free result set

  mysqli_free_result($result);
  }


  $sql="SELECT * FROM resident WHERE sex = 'male' and purok = '2' ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<p>Total Male: </p>";
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }


  $sql="SELECT * FROM resident WHERE sex = 'female' and purok = '2'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<p>Total Female: </p>";
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?>          </div>
                    </div>
                    <div class="clearfix">
                    <div class="col-md-4 col-sm-4 col-xs-12 tile_stats_count">
                      <p style="font-size: 15px"><b>Purok 3 (Poblacion)</b></p>
                      <br>
            <div class="count">
<?php
$con=mysqli_connect("localhost", "root", "", "jaguar");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="SELECT * FROM resident WHERE purok = '3'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<p>Total Resident: </p>";
  printf($rowcount);
  // Free result set

  mysqli_free_result($result);
  }


  $sql="SELECT * FROM resident WHERE sex = 'male' and purok = '3' ";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<p>Total Male: </p>";
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }


  $sql="SELECT * FROM resident WHERE sex = 'female' and purok = '3'";

if ($result=mysqli_query($con,$sql))
  {
  // Return the number of rows in result set
  $rowcount=mysqli_num_rows($result);
  echo "<p>Total Female: </p>";
  printf($rowcount);
  // Free result set
  mysqli_free_result($result);
  }

mysqli_close($con);
?></div>

                    </div>

                    </div>
          </div>
          </div>
          </div>
        <!-- footer content -->
        <footer>
          <div class="pull-right">
            BARANGAY XYZ INFORMATION SYSTEM MANAGEMENT</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>


    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="../vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="../vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../vendors/Flot/jquery.flot.js"></script>
    <script src="../vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../vendors/Flot/jquery.flot.time.js"></script>
    <script src="../vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
	
  </body>
</html>
