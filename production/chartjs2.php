<!DOCTYPE html>
<html lang="en">
  <head>
    <style>
    h4{
      margin-top: -1px;
      margin-bottom: -1px;
      }
    h3{
        margin-top: -1px;
        margin-bottom: -1px;
      }
    h5{
      margin-top: -1px;
      margin-bottom: -1px;
    }
    p{
      margin-top: -1px;
      margin-bottom: -1px;
      }
      .main{
        float:right;
        width:60%;
        height: 100%;
      }
    .text{
      font-size: 20px;
    }
    .lcont{
      float:left;
      width:20%;
      height:100%;
    }
    .rcont{
      float:right;
      width:80%;
      height:100%;
    }
    .leftbar{
      margin-left: 50px
    }
    .tright{
      margin-top: 100px;
      text-align: right;
      margin-right: 100px;
    }
    .sig{
      font-weight: 400;
      margin-right: 50px;
    }
    .indent{
      text-indent: 50px;
      font-size: 20px;
    }
    .sigcont{
      font-weight: 400;
      margin-top:450px;
    }
    .sig2{
      font-weight: 400;
    }
    .right{
      text-align: right;
      margin-right: 100px
    }
    .button4 {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin-bottom: 4px;
      cursor: pointer;
      width: 15%;
      justify-content: center;
      margin-top: 20px;
      border-radius: 12px;
    }
    .login-container input[type=text],
    .login-container input[type=password],
    .login-container input[type=date],
    select
    {
      width: 30%;
      border-radius: 5px;
      height: 30px;
      border:1px solid black;
    }

    </style>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Barangay Clearance</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <body>
    </body>
<!---->
   <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">

              <a class="site_title"><i class="fa fa-building"></i> <span>Baranggay XYZ</span></a>
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
                      <li><a href="chartjs2.php">Baranggay Clearance</a></li>

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
                    <li><a href="index.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- footer content-->
		<div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h1>Barangay Clearance</h1>
              </div>
            </div>
			      <form id="certification" action="chartjs2.php" method="post">  
                <div><br><br><br>
					<center><h3>Input Resident ID</h3><br></center>
                        <center><input type="text" id="id" name="id" class="form-control" style="width:500px"><br></center>
                  <center><button id="search" name="search" class="btn btn-success">Search</button></center>
                </div>
            </form><br><br>
            <?php
         $connection = mysqli_connect("localhost","root","");
         $db = mysqli_select_db($connection,'jaguar');

         if(isset($_POST['search']))
         {
           $id = $_POST['id'];

           $query = "SELECT * FROM resident where resident_id='$id' ";
           $query_run = mysqli_query($connection,$query);

           while($row = mysqli_fetch_array($query_run))
           {
             ?>
             <center>
              <form action="clearance.php" method="POST">
              <input type="text" name="last_name" class="form-control" style="width:500px" value="<?php echo $row['last_name']; ?>"/><br><br>
              <input type="text" name="first_name" class="form-control" style="width:500px" value="<?php echo $row['first_name']; ?>"/><br><br>
              <input type="text" name="middle_name" class="form-control" style="width:500px" value="<?php echo $row['middle_name']; ?>"/><br><br>
              <input type="text" name="city_address" class="form-control" style="width:500px" value="<?php echo $row['city_address']; ?>"/><br><br>
              <input type="text" id="purpose" name="purpose" class="form-control" style="width:500px" placeholder="State Purpose"/><br><br>
              <button id="generate" class="btn btn-success" name="generate">Generate Certificate</button>
              </center>
             <?php
           }

         }
        ?>
		</div>
          </div>
        <footer>
          <div class="pull-right">
            BARANGGAY XYZ INFORMATION SYSTEM MANAGEMENT</a>
          </div>
          <div class="clearfix"></div>
        </footer>        <!-- footer content -->
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

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>

}