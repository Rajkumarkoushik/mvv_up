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

    $insertbanner = mysqli_query($dbcon,"insert into tbl_testimonials set testimonial_name='".$full_name."',testimonial_description='".$testimonial."',testimonial_image='".$imgrenametestimonial."',date='".$date."',testimonial_status=1");

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

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Full Name</label>
                                        <input type="text" name="full_name" class="form-control"
                                            placeholder="Enter Full Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Tetsimonial</label>
                                        <input type="text" name="testimonial" class="form-control"
                                            placeholder="Enter Testimonial">
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
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Testimonial Data</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Testimonial</th>
                                            <th>Added On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                    $sel_testimonial = mysqli_query($dbcon,"select * from tbl_testimonials where testimonial_status=1");
                                    $i = 1;
                                    while($fetch_testimonial = mysqli_fetch_array($sel_testimonial))
                                    { ?>
                                        <tr>
                                            <td><?php echo $i; ?></th>
                                            <td><?php echo $fetch_testimonial['testimonial_name'];?></td>
                                            <td><img src="../uploads/testimonials/<?php echo $fetch_testimonial['testimonial_image'];?>"
                                                    width="200">
                                            </td>
                                            <td><?php echo substr($fetch_testimonial['testimonial_description'],0,200).'...';?>
                                            </td>
                                            <td><?php echo $fetch_testimonial['date'];?></td>
                                            <td>
                                                <a href="edit-testimonial.php?test_id=<?php echo $fetch_testimonial['testimonial_id'];?>"
                                                    class="del-btn"><i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </button>
                                            </td>
                                            <td>
                                                <a href="add-testimonials.php?delId=<?php echo $fetch_testimonial['testimonial_id'];?>"
                                                    class="del-btn"><i class="fa fa-trash-o font-weight-bold del-icon"
                                                        aria-hidden="true"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <?php $i++; } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Name</th>
                                            <th>Image</th>
                                            <th>Testimonial</th>
                                            <th>Added On</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
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