<?php
include_once "dph.php";
session_start();
?>
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login Form</title>
  <meta name="description" content="" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="apple-touch-icon" href="apple-icon.png" />
  <link rel="shortcut icon" href="favicon.ico" />

  <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css" />
  <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css" />
  <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css" />

  <link rel="stylesheet" href="assets/css/style.css" />

  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" type="text/css" />
  <?php
  if (isset($_POST['sign_in'])) {
    $user_email = $_POST['email'];
    $user_password = $_POST['password'];

    $address_check_admin = "SELECT * FROM admin WHERE admin_email='$user_email' AND admin_password='$user_password' LIMIT 1";
    $result_admin = mysqli_query($conn, $address_check_admin);

    $address_check_student = "SELECT * FROM student WHERE student_email='$user_email' AND student_password='$user_password' LIMIT 1";
    $result_student = mysqli_query($conn, $address_check_student);

    $address_check_teacher = "SELECT * FROM teacher WHERE teacher_email='$user_email' AND teacher_password='$user_password' LIMIT 1";
    $result_teacher = mysqli_query($conn, $address_check_teacher);

    if (mysqli_num_rows($result_admin) > 0) {
      $addres_admin = mysqli_fetch_assoc($result_admin);
      if ($user_email == $addres_admin['admin_email']  && $user_password == $addres_admin['admin_password']) {
        header("location: admin/index.php");
      }
    } else if (mysqli_num_rows($result_student) > 0) {
      $addres_student = mysqli_fetch_assoc($result_student);
      if ($user_email == $addres_student['student_email']  && $user_password == $addres_student['student_password']) {
        $_SESSION['id'] = $addres_student['student_id'];
        $_SESSION['semester'] = $addres_student['semester'];
        header("location: student/index.php");
      }
    } else if (mysqli_num_rows($result_teacher) > 0) {
      $addres_teacher = mysqli_fetch_assoc($result_teacher);
      if ($user_email == $addres_teacher['teacher_email']  && $user_password == $addres_teacher['teacher_password']) {
        $_SESSION['id'] = $addres_teacher['teacher_id'];
        header("location: teacher/index.php");
      }
    }
  }
  ?>
</head>

<body class="bg-dark">
  <div class="d-flex align-content-center flex-wrap">
    <div class="container">
      <div class="login-content">
        <!-- <div class="login-logo">
          <img class="align-content" src="images/admin.jpg" alt="" />
        </div> -->
        <div class="login-form">
          <form method="post" enctype="multipart/form-data">
            <div class="form-group">
              <label>Email address</label>
              <input type="email" class="form-control" placeholder="Email" name="email" />
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password" name="password" />
            </div>
            <!-- <div class="checkbox">
              <label>
                <input type="checkbox" name="remember" value="remember"> Remember Me
              </label>

            </div> -->
            <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" name="sign_in">
              Sign in
            </button>

          </form>
        </div>
      </div>
    </div>
  </div>

  <script src="vendors/jquery/dist/jquery.min.js"></script>
  <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
  <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>
</body>

</html>