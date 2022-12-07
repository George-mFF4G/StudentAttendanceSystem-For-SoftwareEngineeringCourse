<?php
include_once "frame.php";
?>

<?php

if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'update') {
    $id = $_GET['id'];
    $update = "SELECT * FROM teacher WHERE teacher_id = $id";
    $update_query = mysqli_query($conn, $update);
    $row = mysqli_fetch_assoc($update_query);
    $row_id = $row['teacher_id'];
    $row_name = $row['teacher_name'];
    $row_phone = $row['teacher_phone'];
    $row_address = $row['teacher_address'];
    $row_email = $row['teacher_email'];
    $row_password = $row['teacher_password'];
    $row_dob = $row['teacher_dob'];
    $row_img = $row['teacher_image'];
}
?>




<form method="post" enctype="multipart/form-data" action="teachers-registeration.php">
    <input type="hidden" name="teacher_id" value="<?php echo $row_id; ?>">
    <div class="form-group">
        <label>Teacher Name</label>
        <input type="text" class="form-control" name="teacher_name" value="<?php echo $row_name; ?>">
    </div>
    <div class="form-group">
        <label>Teacher Email</label>
        <input type="email" class="form-control" value="<?php echo $row_email; ?>" name="teacher_email">
    </div>
    <div class="form-group">
        <label>Teacher Password</label>
        <input type="text" class="form-control" value="<?php echo $row_password; ?>" name="teacher_password">
    </div>
    <div class="form-group">
        <label>Teacher Phone</label>
        <input type="number" class="form-control" value="<?php echo $row_phone; ?>" name="teacher_phone">
    </div>
    <div class="form-group">
        <label>Teacher Date of birth</label>
        <input type="date" class="form-control" value="<?php echo $row_dob; ?>" name="teacher_dob">
    </div>
    <div class="form-group">
        <label>Teacher Address</label>
        <input type="text" class="form-control" value="<?php echo $row_address; ?>" name="teacher_address">
    </div>
    <img class="rounded-circle mx-auto " src="../teacher/uploads/<?php echo $row_img; ?>" alt="Card image cap" style="max-width:100px; float:left; display:block; margin:0;">
    <br><br><br><br><br>
    <div>
        <label>Change Teacher Image</label>
        <input type="file" alt="image" name="images">
    </div>
    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="update_teacher">UPDATE TEACHER</button>
</form>