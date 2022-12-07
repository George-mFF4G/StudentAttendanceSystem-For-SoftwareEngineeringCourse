<?php
include_once "frame.php";
?>
<?php
$student_id=$_SESSION['id'];
 $address_check = "SELECT * FROM student WHERE student_id=$student_id  LIMIT 1";
 $result = mysqli_query($conn, $address_check);
$addres_f = mysqli_fetch_assoc($result);

?>
<div class="col-md-4" style="text-align:center;">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title mb-3">Profile Card</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                                    <img class="rounded-circle mx-auto d-block" src="uploads/<?php echo $addres_f['student_image'];?>" alt="Card image cap" style="max-width:150px;">
                                    <h5 class="text-sm-center mt-2 mb-1"><?php echo $addres_f['student_name'];  ?></h5>
                                    <p style="text-align:left;padding:0;margin:0; "><i ><?php echo $addres_f['student_dob'];  ?></i></p>
                                    <p style="text-align:right;padding:0;margin:0;"><i> semester:<?php echo $addres_f['semester'];?></i></P>
                                    <div class="location text-sm-center"><i class="fa fa-map-marker"></i><?php echo $addres_f['student_address'];  ?> </div>
                                </div>
                                <hr>
                                <div class="card-text text-sm-center">
                                <p> <strong> Email:<?php echo $addres_f['student_email'];?></strong></p>
                                <p> <strong>Phone:<?php echo $addres_f['student_phone'];?></strong></p>
                                </div>
                            </div>
                        </div>
                    </div>

</div>