<?php
session_start();
include_once "../dph.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>admin frame</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="apple-touch-icon" href="apple-icon.png" />
  <link rel="shortcut icon" href="favicon.ico" />

  <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css" />
  <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" type="text/css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</head>

<body>
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="index.php">
              <i class="menu-icon fa fa-dashboard"></i>Dashboard
            </a>
          </li>
          <h3 class="menu-title">Persons</h3>
          <!-- /.menu-title -->
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa fa-laptop"></i>Students</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="fa fa-puzzle-piece"></i><a href="show-students.php">Show</a>
              </li>
              <li>
                <i class="fa fa-id-badge"></i><a href="add-students.php">ADD</a>
              </li>

            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa fa-table"></i>Teachers</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="fa fa-table"></i><a href="show-teachers.php">Show</a>
              </li>
              <li>
                <i class="fa fa-table"></i><a href="add-teachers.php">Add</a>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa fa-th"></i>Admins</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="menu-icon fa fa-th"></i><a href="show-admins.php">Show</a>
              </li>
              <li>
                <i class="menu-icon fa fa-th"></i><a href="add-admin.php">Add</a>
              </li>
            </ul>
          </li>

          <h3 class="menu-title">Courses</h3>
          <!-- /.menu-title -->
          <li>
            <a href="show-courses.php">
              <i class="menu-icon fa fa-tasks"></i>Show</a>
          </li>
          <li>
            <a href="add-courses.php">
              <i class="menu-icon ti-email"></i>Add
            </a>
          </li>
          <h3 class="menu-title">Attendence</h3>
          <!-- /.menu-title -->
          <li>
            <a href="show-attendence.php">
              <i class="menu-icon fa fa-glass"></i>Show</a>
          </li>
          <li>
            <a href="add-attendence.php">
              <i class="menu-icon fa fa-glass"></i>ADD</a>
          </li>
        </ul>
        </ul>

      </div>
      <!-- /.navbar-collapse -->
    </nav>
  </aside>
  <!-- /#left-panel -->

  <!-- Left Panel -->

  <!-- Right Panel -->

  <div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
      <div class="header-menu">
        <div class="col-sm-7">
        </div>
        <div class="col-sm-5">
          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar" />
            </a>

            <div class="user-menu dropdown-menu">
              <a class="nav-link" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Dashboard</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li class="active">Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="content mt-3">
        <iframe src="/" style="height: 90vh; width: 100%"></iframe
        >
      </div>
      .content
    </div> -->
    <!-- /#right-panel -->

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>