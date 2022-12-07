<?php
include_once "frame.php";
?>
<div>
    <table align="center" width="100%" border="1" bgcolor="lightgray">
        <tr bgcolor="gray">
            <th>Course Name</th>
            <th>Course Description</th>
            <th>Semester</th>
        </tr>
        <?php
        // $student_semester = $_SESSION['semester'];
        $address_check = "SELECT * FROM course"; // WHERE  semster=$student_semester 
        $result = mysqli_query($conn, $address_check);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <?php $id = $row['course_id']; ?>
                    <td><?php echo $row['course_name']; ?></td>
                    <td><?php echo $row['course_description']; ?></td>
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