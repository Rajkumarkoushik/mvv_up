<?php
include "includes/header.php";
?>
<!-- Sub banner start -->
<div class="sub-banner overview-bgi">
    <div class="overlay">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Contact Us</h1>
                <ul class="breadcrumbs">
                    <li><a href="#">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Contact body start -->
<div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Contact Us</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                <!-- Contact form start -->
                <div class="contact-form">
                    <form id="contact_form" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group fullname">
                                    <input type="text" name="full_name" class="input-text" placeholder="Full Name"
                                        required />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group enter-email">
                                    <input type="email" name="email" class="input-text" placeholder="Enter email"
                                        required />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group subject">
                                    <input type="text" name="subject" class="input-text" placeholder="Subject"
                                        required />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group number">
                                    <input type="text" name="phone" class="input-text" placeholder="Phone Number"
                                        required />
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group message">
                                    <textarea class="input-text" name="message" placeholder="Write message"
                                        required /></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group send-btn mb-0">
                                    <button type="button" id="contact_submit" class="button-md button-theme text-dark"
                                        required>Send
                                        Message</button>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group send-btn mb-0">
                                    <p id="contact-response"></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- Contact form end -->
            </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                <!-- Contact details start -->
                <div class="contact-details">
                    <div class="main-title-2">
                        <h3 class="text-dark">Our Address</h3>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="text-dark">Office Address</h4>
                            <p>Address: Do.No 2-152/2, Opposite Toyota Showroom Rayudupalem Junction, Kakinada, Andhra
                                Pradesh 533005</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="text-dark">Phone Number</h4>
                            <p>
                                <a href="#">office: +91 9492146456</a>
                            </p>
                            <p>
                                <a href="#">Mobile: +91 9912415474</a>
                            </p>
                        </div>
                    </div>
                    <div class="media mb-0">
                        <div class="media-left">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="text-dark">Email Address</h4>
                            <p>
                                <a href="mailto:info@themevessel.com">info@mvvproperties</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- Contact details end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact body end -->

<!-- Google map start -->
<div class="section">
    <div class="container-fluid map">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3815.2000743815906!2d82.24611081384221!3d17.013853488303457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a38297863fe2d99%3A0x8b2fdced7d314fb4!2sMakers%20Mind%20Soft%20Solutions%20%7C%20Best%20Web%20Development%20%26%20Digital%20Marketing%20Company%20in%20Kakinada%20%7C%20APP%20Development%20%7C%20Graphic%20Designing%20%7C%20Game%20Development%20%7C%20AR%2FVR!5e0!3m2!1sen!2sin!4v1642505010847!5m2!1sen!2sin"
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>
<!-- Google map end -->
<?php
include "includes/footer.php";
?>
<script>
$(document).ready(function() {
    $("#contact_submit").click(function() {
        $.ajax({
            method: "post",
            url: "ajax/contact_enquiries.php",
            data: $("#contact_form").serialize(),
            success: function(contact_enquiry_status) {
                $("#contact-response").html(contact_enquiry_status);
                $("#contact-response").show();
                $("#contact_form")[0].reset();
            }
        })
    })
})
</script>