<?php

include_once "../dph.php";


if (isset($_POST['add_attendence']) && isset($_POST['semsters']) && isset($_POST['teacher']) && isset($_POST['course']) && isset($_POST['date'])) {

    $attendence_semester_input = $_POST["semsters"];
    $attendence_teacher_input = $_POST["teacher"];
    $attendence_course_input = $_POST["course"];
    $attendence_date_input = $_POST["date"];


    $address_check = "SELECT * FROM student WHERE semester=$attendence_semester_input";
    $result = mysqli_query($conn, $address_check);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['student_id'];
            $attendence_status_input = $_POST[$id];
            $sql =  "INSERT INTO `attendence` (`attendence_id`, `student_id`, `teacher_id`, `course_id`, `date`, `semster`, `status`)
       VALUES (NULL, '$id', '$attendence_teacher_input', '$attendence_course_input', '$attendence_date_input', '$attendence_semester_input', '$attendence_status_input')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
    header('Location: show-attendence.php');
} else {
    echo "there some thing wrong";
}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (isset($_POST['update_attendence'])) {


    $id_input = $_POST["id"];
    $status_input = $_POST["$id_input"];

    // echo $status_input;
    // $sql = "INSERT INTO `student` (`student_id`, `student_name`, `student_address`, `student_dob`, `student_phone`, `student_image`, `semester`, `student_email`, `student_password`) VALUES (NULL, '$student_name_input', '$student_address_input', '$student_dob_input', '$student_phone_input', '$filenamenew', '$student_semester_input', '$student_email_input', '$student_password_input')";

    $sql = "UPDATE `attendence` SET `status` = '$status_input' WHERE `attendence`.`attendence_id` = $id_input";

    if (mysqli_query($conn, $sql)) {
        echo "New record updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    header('Location: show-attendence.php');
    exit;
}
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $delete = "DELETE FROM `attendence` WHERE `attendence`.`attendence_id` = $id";
    if (mysqli_query($conn, $delete)) {
        echo "student data removed successfully";
    } else {
        echo "Error: " . $delete . "<br>" . mysqli_error($conn);
    }
    header('Location: show-attendence.php');
    exit;
    // if ($delete) {
    //     echo "delete ";
    //     echo '<script>window.location="show-students.php"; </script>';
    //     echo "delete ";

    //     exit();
    // }
}
