<?php
include_once "frame.php";
?>

<?php

if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'update') {
    $id = $_GET['id'];
    $update = "SELECT * FROM student WHERE student_id = $id";
    $update_query = mysqli_query($conn, $update);
    $row = mysqli_fetch_assoc($update_query);
    $row_id = $row['student_id'];
    $row_name = $row['student_name'];
    $row_phone = $row['student_phone'];
    $row_address = $row['student_address'];
    $row_email = $row['student_email'];
    $row_password = $row['student_password'];
    $row_dob = $row['student_dob'];
    $row_semester = $row['semester'];
    $row_img = $row['student_image'];
}
?>
<form method="post" enctype="multipart/form-data" action="students-registeration.php">
    <input type="hidden" name="student_id" value="<?php echo $row_id; ?>">
    <div class="form-group">
        <label>Student Name</label>
        <input type="text" class="form-control" placeholder="Student Name" name="student_name" value="<?php echo $row_name; ?>">
    </div>
    <div class="form-group">
        <label>Student Email</label>
        <input type="email" class="form-control" placeholder="Student Email" name="student_email" value="<?php echo $row_email; ?>">
    </div>
    <div class="form-group">
        <label>Student Password</label>
        <input type="text" class="form-control" placeholder="Student Password" name="student_password" value="<?php echo $row_password; ?>">
    </div>
    <div class="form-group">
        <label>Student Phone</label>
        <input type="number" class="form-control" placeholder="Student Phone" name="student_phone" value="<?php echo $row_phone; ?>">
    </div>
    <div class="form-group">
        <label>Student Date of birth</label>
        <input type="date" class="form-control" placeholder="Student Date of birth" name="student_dob" value="<?php echo $row_dob; ?>">
    </div>
    <div class="form-group">
        <label>Student Address</label>
        <input type="text" class="form-control" placeholder="Student Address" name="student_address" value="<?php echo $row_address; ?>">
    </div>
    <div class="form-group">
        <label>Student Semester</label>
        <input type="number" class="form-control" placeholder="Student Semester" name="student_semester" value="<?php echo $row_semester; ?>">
    </div>
    <img class="rounded-circle mx-auto " src="../student/uploads/<?php echo $row_img; ?>" alt="Card image cap" style="max-width:100px; float:left; display:block; margin:0;">
    <br><br><br><br><br>
    <div>
        <label>Change Student Image</label>
        <input type="file" alt="image" name="images">
    </div>
    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="update_student">UPDATE STUDENT</button>
</form>