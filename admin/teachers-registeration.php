<?php

include_once "../dph.php";


if (isset($_POST['add_teacher'])) {

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
            $filedestination = '../teacher/uploads/' . $filenamenew;
            move_uploaded_file($file_temp, $filedestination);
            move_uploaded_file($file_temp, "../teacher/uploads/$filenamenew");
        }
    }
    $teacher_name_input = $_POST["teacher_name"];
    $teacher_email_input = $_POST["teacher_email"];
    $teacher_password_input = $_POST["teacher_password"];
    $teacher_phone_input = $_POST["teacher_phone"];
    $teacher_dob_input = $_POST["teacher_dob"];
    $teacher_address_input = $_POST["teacher_address"];



    $sql = "INSERT INTO `teacher` (`teacher_id`, `teacher_name`, `teacher_address`, `teacher_phone`, `teacher_email`, `teacher_dob`, `teacher_image`, `teacher_password`) 
    VALUES (NULL, '$teacher_name_input', '$teacher_address_input', '$teacher_phone_input', '$teacher_email_input', '$teacher_dob_input', '$filenamenew', '$teacher_password_input')";


    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header('Location: show-teachers.php');
    exit;
}

/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST['update_teacher'])) {

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
            $filedestination = '../teacher/uploads/' . $filenamenew;
            move_uploaded_file($file_temp, $filedestination);
            move_uploaded_file($file_temp, "../teacher/uploads/$filenamenew");
        }
    }
    $teacher_id_input = $_POST["teacher_id"];
    $teacher_name_input = $_POST["teacher_name"];
    $teacher_email_input = $_POST["teacher_email"];
    $teacher_password_input = $_POST["teacher_password"];
    $teacher_phone_input = $_POST["teacher_phone"];
    $teacher_dob_input = $_POST["teacher_dob"];
    $teacher_address_input = $_POST["teacher_address"];


    // $sql = "INSERT INTO `student` (`student_id`, `student_name`, `student_address`, `student_dob`, `student_phone`, `student_image`, `semester`, `student_email`, `student_password`) VALUES (NULL, '$student_name_input', '$student_address_input', '$student_dob_input', '$student_phone_input', '$filenamenew', '$student_semester_input', '$student_email_input', '$student_password_input')";

    if ($filenamenew != NULL) {
        $sql = "UPDATE `teacher` SET `teacher_name` = '$teacher_name_input', `teacher_address` = '$teacher_address_input', `teacher_dob` = '$teacher_dob_input', `teacher_phone` = '$teacher_phone_input', `teacher_image` = '$filenamenew', `teacher_email` = '$teacher_email_input', `teacher_password` = '$teacher_password_input' WHERE `teacher`.`teacher_id` = $teacher_id_input";
    } else {
        $sql = "UPDATE `teacher` SET `teacher_name` = '$teacher_name_input', `teacher_address` = '$teacher_address_input', `teacher_dob` = '$teacher_dob_input', `teacher_phone` = '$teacher_phone_input', `teacher_email` = '$teacher_email_input', `teacher_password` = '$teacher_password_input' WHERE `teacher`.`teacher_id` = $teacher_id_input";
    }

    if (mysqli_query($conn, $sql)) {
        echo "New record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header('Location: show-teachers.php');
    exit;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $sql = "DELETE FROM `attendence` WHERE `attendence`.`teacher_id` = $id";
    if (mysqli_query($conn, $sql)) {
        echo "attendence related data removed successfully";
    } else {
        echo "Error: " . $delete . "<br>" . mysqli_error($conn);
    }

    $delete = "DELETE FROM `teacher` WHERE `teacher`.`teacher_id` = $id";
    if (mysqli_query($conn, $delete)) {
        echo "teacher data removed successfully";
    } else {
        echo "Error: " . $delete . "<br>" . mysqli_error($conn);
    }
    header('Location: show-teachers.php');
    exit;
    // if ($delete) {
    //     echo "delete ";
    //     echo '<script>window.location="show-students.php"; </script>';
    //     echo "delete ";

    //     exit();
    // }
}
