<!doctype html>
<html class="no-js" lang="en">
<?php
include_once "../dph.php";

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UPDATE ADMIN</title>
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

                if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'update') {
                    $id = $_GET['id'];
                    $update = "SELECT * FROM admin WHERE id = $id";
                    $update_query = mysqli_query($conn, $update);
                    $row = mysqli_fetch_assoc($update_query);
                    $row_id = $row['id'];
                    $row_email = $row['admin_email'];
                    $row_password = $row['admin_password'];
                }
                ?>
                <?php
                //////////////////////////////////////////////////////////////////////////////////////////
                if (isset($_POST['update'])) {
                    $input_id = $_POST['id'];
                    $input_email = $_POST['email'];
                    $input_password = $_POST['password'];
                    // $address_check = "SELECT * FROM admin WHERE admin_email='$input_email'LIMIT 1";
                    // $result = mysqli_query($conn, $address_check);
                    // $addres_c = mysqli_fetch_assoc($result);
                    // if ($addres_c['admin_email'] != $input_email) {
                    $sql = "UPDATE `admin` SET `admin_email` = '$input_email', `admin_password` = '$input_password' WHERE `admin`.`id` = $input_id";
                    if (mysqli_query($conn, $sql)) {
                        echo "updated successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                    header('Location:show-admins.php');
                    // } else {
                    //     echo "<h3 style='text-align:center; color:red; background-color:white;'>Error: This Email is used</h3>";
                    // }
                }
                ?>
                <div class="login-form">
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $row_id; ?>">
                        <div class="form-group">
                            <label>Email address</label>
                            <input type="email" class="form-control" name="email" value="<?php echo $row_email; ?>">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" value="<?php echo $row_password; ?>">
                        </div>
                        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="update">Update</button>
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
<?php
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $sql = "DELETE FROM `admin` WHERE `id` = $id";
    if (mysqli_query($conn, $sql)) {
        echo "admin data removed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header('Location: show-admins.php');
    exit;
}
?>