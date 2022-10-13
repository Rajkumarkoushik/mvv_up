<?php
include 'includes/header.php';
include "../includes/db_con.php";
if(isset($_POST['s_blog']))
{
    $targetblogimg = "../uploads/blog/blogimg/";
    $targetblogauthorimg = "../uploads/blog/blogauthor/";
    $blog_title = mysqli_real_escape_string($dbcon,$_POST['blog_title']);
    $blog_introduction = mysqli_real_escape_string($dbcon,$_POST['blog_intro']);
    $blog_author = mysqli_real_escape_string($dbcon,$_POST['blog_author']);
    $blog_description = mysqli_real_escape_string($dbcon,$_POST['blog_description']);
    $blog_img = $_FILES['blog_img']['name'];
    $blog_author_img = $_FILES['blog_author_img']['name'];
    $blogdate = date("Y-m-d");
    $imageFileType = strtolower(pathinfo($blog_img,PATHINFO_EXTENSION));
    $imageFileType2 = strtolower(pathinfo($blog_author_img,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" && $imageFileType2 != "jpg" && $imageFileType2 != "png" && $imageFileType2 != "jpeg" && $imageFileType2 != "gif" ) {
        echo "<script>window.alert('Not Supported format');</script>";
    }else{
    $imgrenameblog = date('Ymd').rand(1,1000000).'.'.$imageFileType;
    $imgrenameauthor = date('Ymd').rand(1,1000000).'.'.$imageFileType2;
    $move_blog_img = move_uploaded_file($_FILES['blog_img']['tmp_name'],$targetblogimg.$imgrenameblog);
     $move_author_img = move_uploaded_file($_FILES['blog_author_img']['tmp_name'],$targetblogauthorimg.$imgrenameauthor);
    $insert_blog = mysqli_query($dbcon,"update tbl_blogs set blog_title='".$blog_title."',blog_description='".$blog_description."',blog_author='".$blog_author."',blog_introduction='".$blog_introduction."',blog_img='".$imgrenameblog."',blog_author_img='".$imgrenameauthor."',date='".$blogdate."',status=1 where blog_id='".$_GET['blog_id']."'");

    if($insert_blog==true)
    {
        echo "<script>window.alert('Blog updated successfully');</script>";
        echo "<script>window.location.href='add-blog.php';</script>";
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
                        <h4 class="card-title">Add Blog</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">
                            <form method="post" enctype="multipart/form-data">
                                <?php
                            $sel_blog = mysqli_query($dbcon,"select * from tbl_blogs where blog_id='".$_GET['blog_id']."'");
                            $fetch_blog = mysqli_fetch_array($sel_blog);
                            ?>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Blog Title</label>
                                        <input type="text" value="<?php echo $fetch_blog['blog_title'];?>"
                                            name="blog_title" class="form-control" placeholder="Enter Blog Title">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Author</label>
                                        <input type="text" value="<?php echo $fetch_blog['blog_author'];?>"
                                            name="blog_author" class="form-control" placeholder="Enter Blog Author">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label>Upload Blog Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="blog_img" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Upload Author Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" name="blog_author_img" class="custom-file-input">
                                                <label class="custom-file-label">Choose file</label>

                                            </div>

                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Blog Introduction</label>
                                        <input type="text" value="<?php echo $fetch_blog['blog_introduction'];?>"
                                            name="blog_intro" class="form-control"
                                            placeholder="Enter Blog Introduction">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Blog Full Contentn</label>
                                        <textarea id="editor1"
                                            name="blog_description"><?php echo $fetch_blog['blog_description'];?></textarea>
                                    </div>
                                </div>

                        </div>
                        <div class="row justify-content-center">
                            <input type="submit" class="btn btn-primary" name="s_blog" value="Submit blog">
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