<?php
include 'includes/header.php';
include "../includes/db_con.php";
?>
<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-xxl-12">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card height-110">
                            <div class="card-header media border-0 pb-0">
                                <div class="media-body d-flex">
                                    <?php
                                $sel_ban = mysqli_query($dbcon,"select * from tbl_banners");
                                $count_ban = mysqli_num_rows($sel_ban);
                                ?>
                                    <div>
                                        <h2 class="text-black fs-20 font-w600 mb-0"><?php echo $count_ban;?>
                                            <p class="mb-0 text-black font-w500">Banners</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card height-110">
                            <div class="card-header media border-0 pb-0">
                                <div class="media-body d-flex">
                                    <div>
                                        <?php
                                $sel_prop = mysqli_query($dbcon,"select * from tbl_properties");
                                $count_prop = mysqli_num_rows($sel_prop);
                                ?>
                                        <h2 class="text-black fs-20 font-w600 mb-0">
                                            <?php echo $count_prop; ?></h2>
                                        <p class="mb-0 text-black font-w500">Properties</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card height-110">
                            <div class="card-header media border-0 pb-0">
                                <div class="media-body d-flex">
                                    <div>
                                        <?php
                                $sel_enq = mysqli_query($dbcon,"select * from tbl_contact_enquiries");
                                $count_enq = mysqli_num_rows($sel_enq);
                                ?>
                                        <h2 class="text-black fs-20 font-w600 mb-0"><?php echo $count_enq; ?><span>
                                                <p class="mb-0 text-black font-w500">Enquiries</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card height-110">
                            <div class="card-header media border-0 pb-0">
                                <div class="media-body d-flex">
                                    <div>
                                        <?php
                                $sel_blog = mysqli_query($dbcon,"select * from tbl_blogs");
                                $count_blog = mysqli_num_rows($sel_blog);
                                ?>
                                        <h2 class="text-black fs-20 font-w600 mb-0"><?php echo $count_blog; ?><span>
                                                <p class="mb-0 text-black font-w500">Blogs</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card height-110">
                            <div class="card-header media border-0 pb-0">
                                <div class="media-body d-flex">
                                    <div>
                                        <?php
                                $sel_test = mysqli_query($dbcon,"select * from tbl_testimonials");
                                $count_test = mysqli_num_rows($sel_test);
                                ?>
                                        <h2 class="text-black fs-20 font-w600 mb-0"><?php echo $count_test; ?><span>
                                                <p class="mb-0 text-black font-w500">Testimonials</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card height-110">
                            <div class="card-header media border-0 pb-0">
                                <div class="media-body d-flex">
                                    <div>
                                        <h2 class="text-black fs-20 font-w600 mb-0">30<span>
                                                <p class="mb-0 text-black font-w500">Property requests</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Enquiries</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="example" class="display" style="min-width: 845px">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Mobile</th>
                                                <th>Message</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Sanjay Nalli</td>
                                                <td>sanjay.ns007@gmail.com</td>
                                                <td>9492146456</td>
                                                <td>hello ! I need Help</td>
                                                <td><a href="#">Delete</a></td>
                                            </tr>

                                            <tr>
                                                <td>Sanjay Nalli</td>
                                                <td>sanjay.ns007@gmail.com</td>
                                                <td>9492146456</td>
                                                <td>hello ! I need Help</td>
                                                <td><a href="#">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td>Sanjay Nalli</td>
                                                <td>sanjay.ns007@gmail.com</td>
                                                <td>9492146456</td>
                                                <td>hello ! I need Help</td>
                                                <td><a href="#">Delete</a></td>
                                            </tr>
                                            <tr>
                                                <td>Sanjay Nalli</td>
                                                <td>sanjay.ns007@gmail.com</td>
                                                <td>9492146456</td>
                                                <td>hello ! I need Help</td>
                                                <td><a href="#">Delete</a></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>E-mail</th>
                                                <th>Mobile Number</th>
                                                <th>Message</th>
                                                <th>Delete</th>
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

</div>
<!--**********************************
            Content body end
        ***********************************-->

<?php
include('includes/footer.php');
?>