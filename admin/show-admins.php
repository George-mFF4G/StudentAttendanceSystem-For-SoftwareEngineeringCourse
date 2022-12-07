<?php
include_once "frame.php";
?>
<table class="table table-striped hidden" id="recordListing">
    <thead>
        <tr>
            <th>Admin email</th>
            <th>Admin Password</th>
            <th>Options</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $address_check = "SELECT * FROM admin";
        $result = mysqli_query($conn, $address_check);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <?php $id = $row['id']; ?>
                    <td><?php echo $row['admin_email']; ?></td>
                    <td><?php echo $row['admin_password']; ?></td>
                    <td><a href="update-admin.php?id=<?php echo $id; ?>&&action=delete">Delete
                            <a href="update-admin.php?id=<?php echo $id; ?>&&action=update">update</td>
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