<?php

include_once "../dph.php";


if (isset($_POST['add_student'])) {

    if (isset($_FILES['images']['name'])) {
        $file_name = $_FILES['images']['name'];
        $file_temp = $_FILES['images']['tmp_name'];
        $file_size = $_FILES['images']['size'];
        $file_error = $_FILES['images']['error'];
        $file_type = $_FILES['images']['type'];

        $fileext = explode('.', $file_name);
        $fileactualext = strtolower(end($fileext));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileactualext, $allowed)) {
            $GLOBALS['filenamenew'] = uniqid('', true) . "." . $fileactualext;
            $filedestination = '../student/uploads/' . $filenamenew;
            move_uploaded_file($file_temp, $filedestination);
            move_uploaded_file($file_temp, "../student/uploads/$filenamenew");
        }
    }
    $student_name_input = $_POST["student_name"];
    $student_email_input = $_POST["student_email"];
    $student_password_input = $_POST["student_password"];
    $student_phone_input = $_POST["student_phone"];
    $student_dob_input = $_POST["student_dob"];
    $student_address_input = $_POST["student_address"];
    $student_semester_input = $_POST["student_semester"];


    $sql = "INSERT INTO `student` (`student_id`, `student_name`, `student_address`, `student_dob`, `student_phone`, `student_image`, `semester`, `student_email`, `student_password`) VALUES (NULL, '$student_name_input', '$student_address_input', '$student_dob_input', '$student_phone_input', '$filenamenew', '$student_semester_input', '$student_email_input', '$student_password_input')";



    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header('Location: show-students.php');
    exit;
}


/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST['update_student'])) {
    $student_id_input = $_POST["student_id"];
    $student_name_input = $_POST["student_name"];
    $student_email_input = $_POST["student_email"];
    $student_password_input = $_POST["student_password"];
    $student_phone_input = $_POST["student_phone"];
    $student_dob_input = $_POST["student_dob"];
    $student_address_input = $_POST["student_address"];
    $student_semester_input = $_POST["student_semester"];

    if (isset($_FILES['images']['name'])) {
        $file_name = $_FILES['images']['name'];
        $file_temp = $_FILES['images']['tmp_name'];
        $file_size = $_FILES['images']['size'];
        $file_error = $_FILES['images']['error'];
        $file_type = $_FILES['images']['type'];

        $fileext = explode('.', $file_name);
        $fileactualext = strtolower(end($fileext));

        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileactualext, $allowed)) {
            $GLOBALS['filenamenew'] = uniqid('', true) . "." . $fileactualext;
            $filedestination = '../student/uploads/' . $filenamenew;
            move_uploaded_file($file_temp, $filedestination);
            move_uploaded_file($file_temp, "../student/uploads/$filenamenew");
        }
    }



    // $sql = "INSERT INTO `student` (`student_id`, `student_name`, `student_address`, `student_dob`, `student_phone`, `student_image`, `semester`, `student_email`, `student_password`) VALUES (NULL, '$student_name_input', '$student_address_input', '$student_dob_input', '$student_phone_input', '$filenamenew', '$student_semester_input', '$student_email_input', '$student_password_input')";
    if ($filenamenew != NULL) {
        $sql = "UPDATE `student` SET `student_name` = '$student_name_input', `student_address` = '$student_address_input', `student_dob` = '$student_dob_input', `student_phone` = '$student_phone_input', `student_image` = '$filenamenew', `semester` = '$student_semester_input', `student_email` = '$student_email_input', `student_password` = '$student_password_input' WHERE `student`.`student_id` = $student_id_input";
    } else {
        $sql = "UPDATE `student` SET `student_name` = '$student_name_input', `student_address` = '$student_address_input', `student_dob` = '$student_dob_input', `student_phone` = '$student_phone_input', `semester` = '$student_semester_input', `student_email` = '$student_email_input', `student_password` = '$student_password_input' WHERE `student`.`student_id` = $student_id_input";
    }
    if (mysqli_query($conn, $sql)) {
        echo "New record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header('Location: show-students.php');
    exit;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $sql = "DELETE FROM `attendence` WHERE `attendence`.`student_id` = $id";
    if (mysqli_query($conn, $sql)) {
        echo "attendence related data removed successfully";
    } else {
        echo "Error: " . $delete . "<br>" . mysqli_error($conn);
    }

    $delete = "DELETE FROM `student` WHERE `student`.`student_id` = $id";
    if (mysqli_query($conn, $delete)) {
        echo "student data removed successfully";
    } else {
        echo "Error: " . $delete . "<br>" . mysqli_error($conn);
    }
    header('Location: show-students.php');
    exit;
    // if ($delete) {
    //     echo "delete ";
    //     echo '<script>window.location="show-students.php"; </script>';
    //     echo "delete ";

    //     exit();
    // }
}
