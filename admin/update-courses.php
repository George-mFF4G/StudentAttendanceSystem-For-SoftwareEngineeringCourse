<?php
include_once "frame.php";
?>


<?php

if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'update') {
    $id = $_GET['id'];
    $update = "SELECT * FROM course WHERE course_id = $id";
    $update_query = mysqli_query($conn, $update);
    $row = mysqli_fetch_assoc($update_query);
    $row_id = $row['course_id'];
    $row_name = $row['course_name'];
    $row_description = $row['course_description'];
    $row_semester = $row['semster'];
}
?>


<form method="post" action="courses-registeration.php">
    <input type="hidden" name="course_id" value="<?php echo $row_id; ?>">
    <div class="form-group">
        <label>Course Name</label>
        <input type="text" class="form-control" name="course_name" value="<?php echo $row_name; ?>">
    </div>
    <div class="form-group">
        <label>Course Description</label>
        <br>
        <textarea style="border-radius:20px; width:75%; height:100px;" name="course_description"><?php echo $row_description; ?></textarea>
    </div>
    <div class="form-group">
        <label>Course Semester</label>
        <input type="number" class="form-control" value="<?php echo $row_semester; ?>" name="course_semester">
    </div>
    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="update_course">UPDATE COURSE</button>
</form>