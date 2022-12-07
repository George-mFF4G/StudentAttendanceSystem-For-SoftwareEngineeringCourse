<?php
include_once "frame.php";
?>

<form method="post" action="attendence-registeration.php">
    <!-- <form method="get"> -->
    <div class="container">
        <h2>CHOOSE THE SEMESTER YOU WANT TO SEE</h2>
        <div class="page-header">
            <h3>
                <select id="semesters" name="semsters" class="form-control">
                    <option value="none" selected="selected">none</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </h3>
        </div>
        <div class="form-group">
            <label>Date</label>
            <input type="date" class="form-control" placeholder="Date" name="date">
        </div>
        <div class="form-group">
            <label>Teacher Name</label>
            <select id="teacher" class="form-control" name="teacher">
                <?php
                $address_check = "SELECT * FROM teacher ";
                $result = mysqli_query($conn, $address_check);
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <option value="<?php echo $row['teacher_id']; ?>"><?php echo $row['teacher_name']; ?></option>
                <?php
                    }
                } else {
                    echo "0 results";
                }

                ?>
            </select>
        </div>
        <div class="form-group">
            <label>Course Name</label>
            <select id="course" class="form-control" name="course">

            </select>
        </div>
        <table class="table table-striped hidden" id="recordListing">
            <thead>
                <tr>
                    <th>Student Name</th>
                    <th>status</th>
                </tr>
            </thead>
            <tbody id="table">
            </tbody>
        </table>
        <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30" name="add_attendence">ADD ATTENDENCE</button>

    </div>
</form>

<script>
    document.getElementById("semesters").onchange = changeListener;

    function changeListener() {
        var value = this.value
        $.post("add-attendence-courses-suggestions.php", {
            semester: value
        }, function(data, status) {
            $("#course").html(data);
        });
        $.post("add-attendence-suggestions.php", {
            semester: value
        }, function(data, status) {
            $("#table").html(data);
        });
    }
</script>