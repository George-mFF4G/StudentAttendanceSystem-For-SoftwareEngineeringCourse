<?php
include_once "frame.php";
?>






<form method="post" enctype="multipart/form-data" action="students-registeration.php">
    <div class="form-group">
        <label>Student Name</label>
        <input type="text" class="form-control" placeholder="Student Name" name="student_name">
    </div>
    <div class="form-group">
        <label>Student Email</label>
        <input type="email" class="form-control" placeholder="Student Email" name="student_email">
    </div>
    <div class="form-group">
        <label>Student Password</label>
        <input type="text" class="form-control" placeholder="Student Password" name="student_password">
    </div>
    <div class="form-group">
        <label>Student Phone</label>
        <input type="number" class="form-control" placeholder="Student Phone" name="student_phone">
    </div>
    <div class="form-group">
        <label>Student Date of birth</label>
        <input type="date" class="form-control" placeholder="Student Date of birth" name="student_dob">
    </div>
    <div class="form-group">
        <label>Student Address</label>
        <input type="text" class="form-control" placeholder="Student Address" name="student_address">
    </div>
    <div class="form-group">
        <label>Student Semester</label>
        <!-- <input type="number" class="form-control" placeholder="Student Semester" name=""> -->
        <div class="form-group">
            <!-- <input type="number" class="form-control" placeholder="Course Semester" name=""> -->
            <select name="student_semester" class="form-control">
                <!-- <option value="none" selected="selected">none</option> -->
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
    </div>
    <div>
        <label>Student Image</label>
        <input type="file" alt="image" name="images">
    </div>
    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="add_student">ADD STUDENT</button>
</form>