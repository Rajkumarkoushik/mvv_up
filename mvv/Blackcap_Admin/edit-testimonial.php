<?php
include 'includes/header.php';
include "../includes/db_con.php";
if(isset($_GET['delId']))
{
    $delete_banner = mysqli_query($dbcon,"update tbl_testimonials set testimonial_status=0 where testimonial_id='".$_GET['delId']."'");
    echo "<script>window.alert('deleted successfully');</script>";
     echo "<script>window.location.href='add-testimonials.php';</script>";
}
if(isset($_POST['test_submit']))
{
    $target = "../uploads/testimonials/";
    $full_name = mysqli_real_escape_string($dbcon,$_POST['full_name']);
    $testimonial = mysqli_real_escape_string($dbcon,$_POST['testimonial']);
    $testimonial_img = $_FILES['test_img']['name'];
    $date = date("d-m-y");
    $imageFileType = strtolower(pathinfo($testimonial_img,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
        echo "<script>window.alert('Not Supported format');</script>";
    }else{
    $imgrenametestimonial = date('Ymd').rand(1,1000000).'.'.$imageFileType;
    $move_test_img = move_uploaded_file($_FILES['test_img']['tmp_name'],$target.$imgrenametestimonial);

    $insertbanner = mysqli_query($dbcon,"update tbl_testimonials set testimonial_name='".$full_name."',testimonial_description='".$testimonial."',testimonial_image='".$imgrenametestimonial."',date='".$date."',testimonial_status=1 where testimonial_id='".$_GET['test_id']."'");

    if($insertbanner==true)
    {
        echo "<script>window.alert('Testimonials inserted successfully');</script>";
        echo "<script>window.location.href='add-testimonials.php';</script>";
    }
    }
}
?>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10" id="step-1">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Add Testimonials</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" enctype="multipart/form-data">
                                <?php
                                $sel_testimonial = mysqli_query($dbcon,"select * from tbl_testimonials where testimonial_id='".$_GET['test_id']."'");
                                $fetch_test=mysqli_fetch_array($sel_testimonial);
                                ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Full Name</label>
                                        <input type="text" value="<?php echo $fetch_test['testimonial_name'];?>"
                                            name="full_name" class="form-control" placeholder="Enter Full Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tetsimonial</label>
                                        <input type="text" value="<?php echo $fetch_test['testimonial_description'];?>"
                                            name="testimonial" class="form-control" placeholder="Enter Testimonial">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Upload Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="test_img" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="row justify-content-center">
                                    <input type="submit" name="test_submit" class="btn btn-primary" value="submit">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'includes/footer.php';
?>