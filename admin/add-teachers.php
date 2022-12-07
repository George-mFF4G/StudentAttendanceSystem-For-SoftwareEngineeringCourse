<?php
include_once "frame.php";
?>






<form method="post" enctype="multipart/form-data" action="teachers-registeration.php">
    <div class="form-group">
        <label>Teacher Name</label>
        <input type="text" class="form-control" placeholder="Teacher Name" name="teacher_name">
    </div>
    <div class="form-group">
        <label>Teacher Email</label>
        <input type="email" class="form-control" placeholder="Teacher Email" name="teacher_email">
    </div>
    <div class="form-group">
        <label>Teacher Password</label>
        <input type="text" class="form-control" placeholder="Teacher Password" name="teacher_password">
    </div>
    <div class="form-group">
        <label>Teacher Phone</label>
        <input type="number" class="form-control" placeholder="Teacher Phone" name="teacher_phone">
    </div>
    <div class="form-group">
        <label>Teacher Date of birth</label>
        <input type="date" class="form-control" placeholder="Teacher Date of birth" name="teacher_dob">
    </div>
    <div class="form-group">
        <label>Teacher Address</label>
        <input type="text" class="form-control" placeholder="Teacher Address" name="teacher_address">
    </div>
    <div>
        <label>Teacher Image</label>
        <input type="file" alt="image" name="images">
    </div>
    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="add_teacher">ADD TEACHER</button>
</form>