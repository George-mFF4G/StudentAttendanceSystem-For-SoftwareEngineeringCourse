<?php
include_once "../dph.php";



if (isset($_POST['semester']) && $_POST['semester'] != "none") {
    $semester = $_POST['semester'];
    $address_check = "SELECT * FROM student WHERE semester=$semester";
    $result = mysqli_query($conn, $address_check);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <?php $id = $row['student_id']; ?>
                <td><?php echo $row['student_name']; ?></td>
                <td><?php echo $row['student_email']; ?></td>
                <td><?php echo $row['student_dob']; ?></td>
                <td><?php echo $row['student_address']; ?></td>
                <td><?php echo $row['student_phone']; ?></td>
                <td> <img class="rounded-circle mx-auto d-block" src="../student/uploads/<?php echo $row['student_image']; ?>" alt="Card image cap" style="max-width:50px;"></td>
                <td><a href="students-registeration.php?id=<?php echo $id; ?>&&action=delete">Delete
                        <a href="update-students.php?id=<?php echo $id; ?>&&action=update">update</td>
            </tr>
<?php
        }
    } else {
        echo "0 results";
    }
}
?>