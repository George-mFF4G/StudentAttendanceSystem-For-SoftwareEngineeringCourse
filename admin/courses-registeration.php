<?php

include_once "../dph.php";


if (isset($_POST['add_course'])) {

    $course_name_input = $_POST["course_name"];
    $course_description_input = $_POST["course_description"];
    $course_semester_input = $_POST["course_semester"];



    $sql = "INSERT INTO `course` (`course_id`, `course_name`, `course_description`, `semster`) VALUES (NULL, '$course_name_input', '$course_description_input', '$course_semester_input')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header('Location: show-courses.php');
    exit;
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST['update_course'])) {

    $course_id_input = $_POST["course_id"];
    $course_name_input = $_POST["course_name"];
    $course_description_input = $_POST["course_description"];
    $course_semester_input = $_POST["course_semester"];



    $sql = "UPDATE `course` SET `course_name` = '$course_name_input', `semster` = '$course_semester_input', `course_description` = '$course_description_input' WHERE `course`.`course_id` = $course_id_input";

    if (mysqli_query($conn, $sql)) {
        echo "New record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header('Location: show-courses.php');
    exit;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $sql = "DELETE FROM `attendence` WHERE `attendence`.`course_id` = $id";
    if (mysqli_query($conn, $sql)) {
        echo "attendence related data removed successfully";
    } else {
        echo "Error: " . $delete . "<br>" . mysqli_error($conn);
    }

    $delete = "DELETE FROM `course` WHERE `course`.`course_id` = $id";
    if (mysqli_query($conn, $delete)) {
        echo "course data removed successfully";
    } else {
        echo "Error: " . $delete . "<br>" . mysqli_error($conn);
    }
    header('Location: show-courses.php');
    exit;
    // if ($delete) {
    //     echo "delete ";
    //     echo '<script>window.location="show-students.php"; </script>';
    //     echo "delete ";

    //     exit();
    // }
}
