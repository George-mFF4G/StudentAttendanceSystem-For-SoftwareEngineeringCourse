<?php
include_once "frame.php";
?>
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
    <table class="table table-striped hidden" id="recordListing">
        <thead>
            <tr>
                <th>Name</th>
                <th>Course Description</th>
            </tr>
        </thead>
        <tbody id="table">
        </tbody>
    </table>
</div>
<script>
    document.getElementById("semesters").onchange = changeListener;

    function changeListener() {
        var value = this.value
        $.post("courses-suggestions.php", {
            semester: value
        }, function(data, status) {
            $("#table").html(data);
        });

    }
</script>