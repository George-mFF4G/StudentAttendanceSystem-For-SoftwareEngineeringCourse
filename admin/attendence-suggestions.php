<?php
include_once "../dph.php";



if (isset($_POST['semester']) && $_POST['semester'] != "none") {
    $semester = $_POST['semester'];
    $address_check = "SELECT * FROM attendence WHERE semster=$semester";
    $result = mysqli_query($conn, $address_check);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <?php $id = $row['attendence_id']; ?>
                <?php
                $course_id = $row['course_id'];
                $address_check_course = "SELECT course_name FROM course WHERE course_id=$course_id";
                $result_course = mysqli_query($conn, $address_check_course);
                $row_course = mysqli_fetch_assoc($result_course)
                ?>
                <td><?php echo $row_course['course_name']; ?></td>
                <?php
                $teacher_id = $row['teacher_id'];
                $address_check_teacher = "SELECT teacher_name FROM teacher WHERE teacher_id=$teacher_id";
                $result_teacher = mysqli_query($conn, $address_check_teacher);
                $row_teacher = mysqli_fetch_assoc($result_teacher);
                ?>
                <td><?php echo $row_teacher['teacher_name']; ?></td>
                <?php
                $student_id = $row['student_id'];
                $address_check_student = "SELECT student_name FROM student WHERE student_id=$student_id";
                $result_student = mysqli_query($conn, $address_check_student);
                $row_student = mysqli_fetch_assoc($result_student);
                ?>
                <td><?php echo $row_student['student_name']; ?></td>
                <td><?php echo $row['date']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td><a href="attendence-registeration.php?id=<?php echo $id; ?>&&action=delete">Delete
                        <a href="update-attendence.php?id=<?php echo $id; ?>&&action=update">update</td>
            </tr>
<?php
        }
    } else {
        echo "0 results";
    }
}
?>