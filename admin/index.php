<?php
include_once "frame.php";
?>
<?php

$address_check_admin = "SELECT COUNT(id) FROM admin";
$result_admin = mysqli_query($conn, $address_check_admin);
$addres_admin = mysqli_fetch_assoc($result_admin);


$address_check_student = "SELECT COUNT(student_id) FROM student";
$result_student = mysqli_query($conn, $address_check_student);
$addres_student = mysqli_fetch_assoc($result_student);


$address_check_teacher = "SELECT COUNT(teacher_id) FROM teacher";
$result_teacher = mysqli_query($conn, $address_check_teacher);
$addres_teacher = mysqli_fetch_assoc($result_teacher);



$address_check_course = "SELECT COUNT(course_id) FROM course";
$result_course = mysqli_query($conn, $address_check_course);
$addres_course = mysqli_fetch_assoc($result_course);

$address_check_attendence = "SELECT COUNT(attendence_id) FROM attendence"; 
$result_attendence = mysqli_query($conn, $address_check_attendence);
$addres_attendence = mysqli_fetch_assoc($result_attendence);

// print_r($addres_admin);

?>




<div style="display:block;" class="content">
<h3 >Persons</h3> 
<hr>
<div class="col-lg-3 col-md-6">
<div class="card">
<div class="card-body">
<div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-muted"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Admins</div>
                        <div class="stat-digit"><?php echo $addres_admin['COUNT(id)'];   ?></div>
                    </div>
                </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="card">
<div class="card-body">
<div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Students</div>
                        <div class="stat-digit"><?php echo $addres_student['COUNT(student_id)'];   ?></div>
                    </div>
                </div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-6">
<div class="card">
<div class="card-body">
<div class="stat-widget-one">
                    <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                    <div class="stat-content dib">
                        <div class="stat-text">Teachers</div>
                        <div class="stat-digit"><?php echo $addres_teacher['COUNT(teacher_id)'];   ?></div>
                    </div>
                </div>
</div>
</div>
</div>



</div>

<div style="display:block;"class="content">
<h3 >Courses</h3> 
<hr>
<div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="stat-widget-four">
                    <div class="stat-icon dib">
                        <i class="ti-server text-muted"></i>
                    </div>
                    <div class="stat-content">
                        <div class="text-left dib">
                            <div class="stat-heading">Courses</div>
                            <div class="stat-text"><?php echo $addres_course['COUNT(course_id)']; ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</div>
<div style="display:block;"class="content">
<h3 >Attendence</h3> 
<hr>
<div class="card col-lg-8 col-md-8 no-padding no-shadow">
                <div class="card-body bg-flat-color-1">
                    <div class="h1 text-light text-right mb-4">
                        <i class="fa fa-clock-o"></i>
                    </div>
                    <div class="h4 mb-0 text-light"><?php echo $addres_attendence['COUNT(attendence_id)'];?></div>
                    <small class="text-light text-uppercase font-weight-bold">Attendence</small>
                </div>
            </div>



</div>