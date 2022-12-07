<?php
session_start();
include_once "../dph.php";
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Student Frame</title>
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
</head>

<body>
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">


      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active">
            <a href="index.php">
              <i class="menu-icon fa fa-dashboard"></i>Student Data
            </a>
          </li>
          <h3 class="menu-title">Your Data</h3>
          <!-- /.menu-title -->
          <li>
            <a href="index.php">
              <i class="menu-icon fa fa-laptop"></i>Student</a>

          </li>
          <li>
            <a href="student_courses.php">
              <i class="menu-icon fa fa-table"></i>Courses</a>
          </li>
          <li>
            <a href="student_attendence.php">
              <i class="menu-icon fa fa-th"></i>Attendence</a>
          </li>
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
          <div class="header-left">
          </div>
        </div>
        <?php $student_id = $_SESSION['id'];
        $address_check = "SELECT student_image FROM student WHERE student_id=$student_id";
        $result = mysqli_query($conn, $address_check);
        $row = mysqli_fetch_assoc($result) ?>
        <div class="col-sm-5">
          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="user-avatar rounded-circle" src="uploads/<?php echo $row['student_image']; ?>" alt="User Avatar" />
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
            <h1>Student Dashboard</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li class="active">Student Dashboard</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="content mt-3">
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