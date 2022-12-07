<?php
include_once "../dph.php";



if (isset($_POST['semester']) && $_POST['semester'] != "none") {
    $semester = $_POST['semester'];
    $address_check = "SELECT * FROM course WHERE semster=$semester";
    $result = mysqli_query($conn, $address_check);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <?php $id = $row['course_id']; ?>
                <td><?php echo $row['course_name']; ?></td>
                <td><?php echo $row['course_description']; ?></td>
                <td><a href="courses-registeration.php?id=<?php echo $id; ?>&&action=delete">Delete
                        <a href="update-courses.php?id=<?php echo $id; ?>&&action=update">update</td>
            </tr>
<?php
        }
    } else {
        echo "0 results";
    }
}
?>