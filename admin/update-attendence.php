<?php
include_once "frame.php";
?>

<?php

if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'update') {
    $id = $_GET['id'];
    $update = "SELECT * FROM attendence WHERE attendence_id = $id";
    $update_query = mysqli_query($conn, $update);
    $row = mysqli_fetch_assoc($update_query);
    $row_id = $row['attendence_id'];
    $row_student = $row['student_id'];
    $row_teacher = $row['teacher_id'];
    $row_course = $row['course_id'];
    $row_date = $row['date'];
    $row_status = $row['status'];
    $row_semester = $row['semster'];




    $address_check_student = "SELECT student_name FROM student WHERE student_id=$row_student";
    $result_student = mysqli_query($conn, $address_check_student);
    $row_student_result = mysqli_fetch_assoc($result_student);

    $address_check_teacher = "SELECT teacher_name FROM teacher WHERE teacher_id=$row_teacher";
    $result_teacher = mysqli_query($conn, $address_check_teacher);
    $row_teacher_result = mysqli_fetch_assoc($result_teacher);


    $address_check_course = "SELECT course_name FROM course WHERE course_id=$row_course";
    $result_course = mysqli_query($conn, $address_check_course);
    $row_course_result = mysqli_fetch_assoc($result_course);
}
?>



<form method="post" action="attendence-registeration.php">
    <input type="hidden" name="id" value="<?php echo $row_id; ?>">
    <div class="form-group">
        <label>Student Name</label>
        <p type="text" class="form-control-static"><?php echo $row_student_result['student_name']; ?></p>
    </div>
    <div class="form-group">
        <label>Teacher Name</label>
        <p type="text" class="form-control-static"><?php echo $row_teacher_result['teacher_name']; ?></p>
    </div>
    <div class="form-group">
        <label>Course Name</label>
        <p type="text" class="form-control-static"><?php echo $row_course_result['course_name']; ?></p>
    </div>
    <div class="form-group">
        <label>Date</label>
        <p type="text" class="form-control-static"><?php echo $row_date; ?></p>
    </div>
    <div class="form-group">
        <label>Status</label>
        <?php if ($row_status == "presence") { ?>
            <input type="radio" name="<?php echo $row_id; ?>" value="presence" checked>
            <label><strong>presence</strong></label>
            <input type="radio" name="<?php echo $row_id; ?>" value="absence">
            <label><strong>absence</strong></label>
        <?php } else { ?>
            <input type="radio" name="<?php echo $row_id; ?>" value="presence">
            <label><strong>presence</strong></label>
            <input type="radio" name="<?php echo $row_id; ?>" value="absence" checked>
            <label><strong>absence</strong></label>
        <?php } ?>
    </div>
    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="update_attendence">Update ATTENDENCE</button>
</form>