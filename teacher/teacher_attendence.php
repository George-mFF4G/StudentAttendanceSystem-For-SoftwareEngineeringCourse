<?php
include_once "frame.php";
?>
<div>
    <table align="center" width="100%" border="1" bgcolor="lightgray">
        <tr bgcolor="gray">
            <th>Student Name</th>
            <th>Teacher Name</th>
            <th>Course Name</th>
            <th>Date</th>
            <th>Semster</th>
        </tr>
        <?php
        $teacher_id = $_SESSION['id'];
        $address_check = "SELECT * FROM attendence WHERE teacher_id=$teacher_id";
        $result = mysqli_query($conn, $address_check);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <?php
                $teacher_id = $row['teacher_id'];
                $address_check_teacher = "SELECT teacher_name FROM teacher WHERE teacher_id=$teacher_id";
                $result_teacher = mysqli_query($conn, $address_check_teacher);
                $row_teacher = mysqli_fetch_assoc($result_teacher);
                /////////////////////////////////////////////////////////////////////////////////////////////
                $student_id = $row['student_id'];
                $address_check_student = "SELECT student_name FROM student WHERE student_id=$student_id";
                $result_student = mysqli_query($conn, $address_check_student);
                $row_student = mysqli_fetch_assoc($result_student);
                ///////////////////////////////////////////////////////////////////////////////////
                $course_id = $row['course_id'];
                $address_check_course = "SELECT course_name FROM course WHERE course_id=$course_id";
                $result_course = mysqli_query($conn, $address_check_course);
                $row_course = mysqli_fetch_assoc($result_course)
                ?>
                <tr>
                    <?php $id = $row['attendence_id']; ?>
                    <td><?php echo $row_student['student_name']; ?></td>
                    <td><?php echo $row_teacher['teacher_name']; ?></td>
                    <td><?php echo $row_course['course_name']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['semster']; ?></td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }

        ?>





    </table>
</div>