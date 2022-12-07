<!doctype html>
<html class="no-js" lang="en">
<?php
include_once "../dph.php";

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ADD ADMIN</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">

            <div class="login-content">
                <?php

                if (isset($_POST['register'])) {
                    $password_input = $_POST['password'];
                    $email_input = $_POST["email"];
                    $address_check = "SELECT * FROM admin WHERE admin_email='$email_input'LIMIT 1";
                    $result = mysqli_query($conn, $address_check);
                    $addres_c = mysqli_fetch_assoc($result);
                    if ($addres_c['admin_email'] != $email_input) {
                        $sql = "INSERT INTO `admin` (`id`,`admin_email`, `admin_password`) VALUES (NULL, '$email_input', '$password_input')";
                        if (mysqli_query($conn, $sql)) {
                            echo "New record created successfully";
                        } else {
                            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                        }
                        header('Location:../index.php');
                    } else {
                        echo "<h3 style='text-align:center; color:red; background-color:white;'>Error: This Email is used</h3>";
                    }
                }



                ?>
                <div class="login-form">
                    <form method="post">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" placeholder="Email" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="register">Register</button>
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