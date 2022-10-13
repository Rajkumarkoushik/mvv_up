<?php
include 'includes/header.php';
include "../includes/db_con.php";
if(isset($_GET['delId']))
{
    $delete_banner = mysqli_query($dbcon,"update tbl_banners set banner_status=0 where banner_id='".$_GET['delId']."'");
    echo "<script>window.alert('deleted successfully');</script>";
     echo "<script>window.location.href='add-banners.php';</script>";
}
if(isset($_POST['category_submit']))
{
    $category_name = mysqli_real_escape_string($dbcon,$_POST['cat_name']);
    $Cat_stat = mysqli_real_escape_string($dbcon,$_POST['cat_stat']);
   
    $insert_category = mysqli_query($dbcon,"insert into tbl_banners set banner_name='".$banner_name."',banner_alt_text='".$alt."',banner_img='".$imgrenamebanner."',date='".$date."',banner_status=1");

    if($insertbanner==true)
    {
        echo "<script>window.alert('Banner inserted successfully');</script>";
        echo "<script>window.location.href='add-banners.php';</script>";
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
                        <h4 class="card-title">Add Property Category</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" enctype="multipart/form-data">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Category Name</label>
                                        <input type="text" name="cat_name" class="form-control"
                                            placeholder="Enter Banner name">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Status</label>
                                        <select class="form-control" name="cat_stat">
                                            <option value="1">Enable</option>
                                            <option value="0">Disable</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="row justify-content-center">
                                    <input type="submit" name="category_submit" value="submit" class="btn btn-primary">
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