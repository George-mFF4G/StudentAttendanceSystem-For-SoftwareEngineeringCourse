<?php
include_once "frame.php";
?>






<form method="post" action="courses-registeration.php">
    <div class="form-group">
        <label>Course Name</label>
        <input type="text" class="form-control" placeholder="Course Name" name="course_name">
    </div>
    <div class="form-group">
        <label>Course Description</label>
        <br>
        <textarea style="border-radius:20px; width:75%; height:100px;" placeholder="Course Description" name="course_description"></textarea>
    </div>
    <div class="form-group">
        <label>Course Semester</label>
        <!-- <input type="number" class="form-control" placeholder="Course Semester" name=""> -->
        <select name="course_semester" class="form-control">
            <!-- <option value="none" selected="selected">none</option> -->
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="add_course">ADD COURSE</button>
</form>