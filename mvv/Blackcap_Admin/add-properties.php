<?php
include 'includes/header.php';
$dbcon = mysqli_connect('localhost','root','','blackcap_db');
if(isset($_POST['property_submit']))
{
     
     $cat = mysqli_real_escape_string($dbcon,$_POST['cat']);
     $position = mysqli_real_escape_string($dbcon,$_POST['position']);
     $city = mysqli_real_escape_string($dbcon,$_POST['city']);
     $state = mysqli_real_escape_string($dbcon,$_POST['state']);
     $location = mysqli_real_escape_string($dbcon,$_POST['location']);
     $pname = mysqli_real_escape_string($dbcon,$_POST['pname']);
     $upload_image = $_FILES['upload_image']['name'];
     $upload_layout = $_FILES['upload_layout']['name'];
     $area = mysqli_real_escape_string($dbcon,$_POST['area']);
     $des = mysqli_real_escape_string($dbcon,$_POST['des']);
     $type = mysqli_real_escape_string($dbcon,$_POST['type']);
     $status = '1';
      $imageFileType = pathinfo($upload_image,PATHINFO_EXTENSION);
      $imageFileType2 = pathinfo($upload_layout,PATHINFO_EXTENSION);
     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "JPG" && $imageFileType != "jpeg" && $imageFileType != "gif" && $_FILES["upload_image"]["name"] && $imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "JPG" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif" && $_FILES["upload_layout"]["name"] ) {

    echo "<script>alert('only JPG, JPEG, PNG & GIF files are allowed.')</script>" ;
    echo "<script>window.location.href='add_brands.php';</script>" ;
  
  }
else
{
    $targeting1="../uploads/property_image/";
    $targeting2="../uploads/property_layouts/";
    $imgrename1 = date('Ymd').rand(1,1000000).'.'.$imageFileType1;
    $imgrename2 = date('Ymd').rand(1,1000000).'.'.$imageFileType2;
    $image1=move_uploaded_file($_FILES['upload_image']['tmp_name'],$targeting1.$imgrename1);
    $image2=move_uploaded_file($_FILES['upload_layout']['tmp_name'],$targeting2.$imgrename2);
    $insert=mysqli_query($dbcon,"INSERT INTO tbl_properties SET property_name='".$pname."',category='".$cat."',position='".$position."',state='".$state."', city='".$city."', location='".$location."',
    upload_img='".$imgrename1."', upload_layout='".$imgrename2."', description='".$des."', property_area='".$area."',property_type='".$type."',status='".$status."'");
     if($insert)
     {
         echo"<script>alert('Property Inserted Successfully');</script>";
     }
     else{
         echo"<script>alert('Something went wrong please try Again');</script>";
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
                        <h4 class="card-title">Add Property</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" autocomplete="off">

                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Property Category</label>

                                        <select class="form-control" name="cat">
                                            <option>Select Category</option>
                                            <?php
                                        $cat=mysqli_query($dbcon,"select * from tbl_category where status='1'");
                                        while($fetch_cat=mysqli_fetch_array($cat))
                                        {
                                        ?>
                                            <option value="<?php echo $fetch_cat['id']; ?>">
                                                <?php echo $fetch_cat['category_name']; ?></option>
                                            <?php
                                        }
                                        ?>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Property Name</label>
                                        <input type="text" class="form-control" placeholder="Property Name" name="pname"
                                            autocomplete="false">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>State</label>
                                        <select class="form-control" name="state">
                                            <option>---------Choose State------------</option>
                                            <option>Telangana</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>City</label>
                                        <select class="form-control" name="city">
                                            <option>---------Choose City------------</option>
                                            <option>Hyderabad</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Location</label>
                                        <input type="text" class="form-control" placeholder="Enter Location"
                                            name="location">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Upload Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="upload_image">
                                                <label class="custom-file-label">Choose file</label>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Upload Layout</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="upload_layout">
                                                <label class="custom-file-label">Choose file</label>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Product DESCRIPTION</label>
                                        <textarea id="editor1" name="des"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>SPECIFICATIONS</label>
                                        <textarea id="editor2" name="des"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>LOCATION</label>
                                        <textarea id="editor3" name="des"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>LAYOUTS</label>
                                        <textarea id="editor4" name="des"></textarea>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>VIDEO</label>
                                        <textarea id="editor5" name="des"></textarea>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Property Area (in sq.mts)</label>
                                        <input type="text" class="form-control"
                                            placeholder="Enter Property Area in Sq.mts" name="area">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label>Property type</label>
                                        <select class="form-control" name="type">
                                            <option>---------Choose Type------------</option>
                                            <option>On going</option>
                                            <option>Completed</option>
                                        </select>
                                    </div>
                                </div>

                        </div>
                        <div class="row justify-content-center">
                            <input type="submit" name="property_submit" class="btn btn-primary" value="Submit Property">
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