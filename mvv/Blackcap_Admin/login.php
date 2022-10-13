<?php
session_start();
include "../includes/db_con.php";
if(isset($_POST['submit']))
{
    $user = mysqli_real_escape_string($dbcon,$_POST['user_name']);
    $pass = mysqli_real_escape_string($dbcon,$_POST['password']);
    $query = mysqli_query($dbcon,"select * from tbl_admin where username='".$user."' and password='".$pass."'");
    $fetch = mysqli_fetch_array($query);
    $count = mysqli_num_rows($query);
    
    if($fetch)
    {
    $_SESSION['user']=$fetch['username'];
    echo "<script>window.location.href='index.php';</script>";
    }else
    {
        echo"failed";
    }

}
?>
<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Black Cap Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
    <link href="vendor/sweetalert2/dist/sweetalert2.min.css" rel="stylesheet">
    <link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body>
    <div class="authincation d-flex flex-column flex-lg-row flex-column-fluid">
        <div class="login-aside text-center  d-flex flex-column flex-row-auto">
            <div class="d-flex flex-column-auto flex-column pt-lg-40 pt-15">
                <div class="text-center mb-4 pt-5">
                    <img src="images/logo.png" alt="">
                </div>
                <h3 class="mb-2">Welcome back!</h3>

            </div>
            <div class="aside-image" style="background-image:url('images/background/pic1.svg');"></div>
        </div>
        <div
            class="container flex-row-fluid d-flex flex-column justify-content-center position-relative overflow-hidden p-7 mx-auto">
            <div class="d-flex justify-content-center h-100 align-items-center">
                <div class="authincation-content style-2">
                    <div class="row no-gutters">
                        <div class="col-xl-12 tab-content">

                            <div id="sign-in" class="auth-form tab-pane fade show active  form-validation">
                                <form method="post" class="form-validate">
                                    <h3 class="text-center mb-4 text-black">Sign in your account</h3>
                                    <div class="form-group">
                                        <label class="mb-1" for="val-email"><strong>Username</strong></label>
                                        <div>
                                            <input type="text" class="form-control" id="val-email" name="user_name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" class="form-control" name="password" value="Password">
                                    </div>
                                    <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox ml-1">
                                                <input type="checkbox" class="custom-control-input"
                                                    id="basic_checkbox_1">
                                                <label class="custom-control-label" for="basic_checkbox_1">Remember my
                                                    preference</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="#forgot-password" data-toggle="tab">Forgot Password?</a>
                                        </div>
                                    </div>
                                    <div class="text-center form-group">
                                        <input type="submit" class="btn btn-primary btn-block" name="submit"
                                            value="Sign In">
                                    </div>
                                </form>
                                <!-- <div class="new-account mt-3">
									<p>Don't have an account? <a class="text-primary" href="#sign-up"
											data-toggle="tab">Sign up</a></p>
								</div> -->
                            </div>
                            <div id="forgot-password" class="auth-form tab-pane fade form-validation">
                                <form id="dz_login_forgot_form">
                                    <h3 class="text-center mb-4 text-black">Forgot Password</h3>
                                    <div class="form-group">
                                        <label class="mb-1" for="val-password"><strong>Enter Password</strong></label>
                                        <div>
                                            <input type="password" class="form-control" id="val-password"
                                                name="val-password">
                                        </div>
                                    </div>
                                    <div class="text-center form-group">
                                        <button type="submit" class="btn btn-primary btn-block">SUBMIT</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
	Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="vendor/global/global.min.js"></script>
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="js/custom.min.js"></script>
    <script src="vendor/sweetalert2/dist/sweetalert2.min.js"></script>
    <!-- Jquery Validation -->
    <script src="vendor/jquery-validation/jquery.validate.min.js"></script>

    <script src="js/login-form.js"></script>
    <script src="js/deznav-init.js"></script>
</body>


</html>