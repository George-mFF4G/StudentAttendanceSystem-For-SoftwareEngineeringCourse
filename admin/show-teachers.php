<?php
include_once "frame.php";
?>
<table class="table table-striped hidden" id="recordListing">
    <thead>
        <tr>
            <th>Name</th>
            <th>email</th>
            <th>Date of birth</th>
            <th>address</th>
            <th>Phone</th>
            <th>image</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $address_check = "SELECT * FROM teacher ";
        $result = mysqli_query($conn, $address_check);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <?php $id = $row['teacher_id']; ?>
                    <td><?php echo $row['teacher_name']; ?></td>
                    <td><?php echo $row['teacher_email']; ?></td>
                    <td><?php echo $row['teacher_dob']; ?></td>
                    <td><?php echo $row['teacher_address']; ?></td>
                    <td><?php echo $row['teacher_phone']; ?></td>
                    <td> <img class="rounded-circle mx-auto d-block" src="../teacher/uploads/<?php echo $row['teacher_image']; ?>" alt="Card image cap" style="max-width:50px;"></td>
                    <td><a href="teachers-registeration.php?id=<?php echo $id; ?>&&action=delete">Delete
                            <a href="update-teachers.php?id=<?php echo $id; ?>&&action=update">update</td>
                </tr>
        <?php
            }
        } else {
            echo "0 results";
        }

        ?>
    </tbody>
</table>
</div>