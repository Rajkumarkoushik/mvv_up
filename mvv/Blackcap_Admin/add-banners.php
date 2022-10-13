<?php
include 'includes/header.php';
include "../includes/db_con.php";
if(isset($_GET['delId']))
{
    $delete_banner = mysqli_query($dbcon,"update tbl_banners set banner_status=0 where banner_id='".$_GET['delId']."'");
    echo "<script>window.alert('deleted successfully');</script>";
     echo "<script>window.location.href='add-banners.php';</script>";
}
if(isset($_POST['banner_submit']))
{
    $target = "../uploads/banners/";
    $banner_name = mysqli_real_escape_string($dbcon,$_POST['banner_name']);
    $alt = mysqli_real_escape_string($dbcon,$_POST['alt_text']);
    $banner_img = $_FILES['banner_img']['name'];
    $date = date("d-m-y");
    $imageFileType = strtolower(pathinfo($banner_img,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif") {
        echo "<script>window.alert('Not Supported format');</script>";
    }else{
    $imgrenamebanner = date('Ymd').rand(1,1000000).'.'.$imageFileType;
    $move_blog_img = move_uploaded_file($_FILES['banner_img']['tmp_name'],$target.$imgrenamebanner);

    $insertbanner = mysqli_query($dbcon,"insert into tbl_banners set banner_name='".$banner_name."',banner_alt_text='".$alt."',banner_img='".$imgrenamebanner."',date='".$date."',banner_status=1");

    if($insertbanner==true)
    {
        echo "<script>window.alert('Banner inserted successfully');</script>";
        echo "<script>window.location.href='add-banners.php';</script>";
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
                        <h4 class="card-title">Add Banners</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" enctype="multipart/form-data">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Banner Name</label>
                                        <input type="text" name="banner_name" class="form-control"
                                            placeholder="Enter Banner name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Alt Text</label>
                                        <input type="text" name="alt_text" class="form-control"
                                            placeholder="Enter Alt Text">
                                    </div>

                                    <div class="form-group col-md-12">
                                        <label>Upload Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="banner_img" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                                <div class="row justify-content-center">
                                    <input type="submit" name="banner_submit" value="submit" class="btn btn-primary">
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
                            <h4 class="card-title">Banners Data</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table id="example" class="display" style="min-width: 845px">
                                    <thead>
                                        <tr>
                                            <th>S.no</th>
                                            <th>Name</th>
                                            <th>Banner</th>
                                            <th>Alt text</th>
                                            <th>Added On</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                    $sel_banner = mysqli_query($dbcon,"select * from tbl_banners where banner_status=1");
                                    $i = 1;
                                    while($fetch_banner = mysqli_fetch_array($sel_banner))
                                    { ?>
                                        <tr>
                                            <td><?php echo $i; ?></th>
                                            <td><?php echo $fetch_banner['banner_name'];?></td>
                                            <td><img src="../uploads/banners/<?php echo $fetch_banner['banner_img'];?>"
                                                    width="200">
                                            </td>
                                            <td><?php echo $fetch_banner['banner_alt_text'];?></td>
                                            <td><?php echo $fetch_banner['date'];?></td>
                                            <td>
                                                <a href="edit-banner.php?banner_id=<?php echo $fetch_banner['banner_id'];?>"
                                                    class="del-btn"><i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </button>
                                            </td>
                                            <td>
                                                <a href="add-banners.php?delId=<?php echo $fetch_banner['banner_id'];?>"
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
                                            <th>Alt text</th>
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