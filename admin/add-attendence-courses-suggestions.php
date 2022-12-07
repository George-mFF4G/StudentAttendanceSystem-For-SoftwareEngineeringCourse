<?php
include_once "../dph.php";



if (isset($_POST['semester']) && $_POST['semester'] != "none") {
    $semester = $_POST['semester'];
    $address_check = "SELECT * FROM course WHERE semster=$semester";
    $result = mysqli_query($conn, $address_check);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <option value="<?php echo $row['course_id']; ?>"><?php echo $row['course_name']; ?></option>
<?php
        }
    } else {
        echo "0 results";
    }
}
?>