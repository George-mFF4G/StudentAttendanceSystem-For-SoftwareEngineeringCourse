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
                <td>
                    <input type="radio" name="<?php echo $id ?>" value="presence">
                    <label><strong>presence</strong></label>
                    <input type="radio" name="<?php echo $id ?>" value="absence" checked>
                    <label><strong>absence</strong></label>
                </td>
            </tr>
<?php
        }
    } else {
        echo "0 results";
    }
}
?>