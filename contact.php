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
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub Banner end -->

<!-- Conatct section starts -->

<!-- <script nonce="4e52feda-0075-4887-91c2-a4f97e07edfe">(function(w,d){!function(a,e,t,r){a.zarazData=a.zarazData||{};a.zarazData.executed=[];a.zaraz={deferred:[],listeners:[]};a.zaraz.q=[];a.zaraz.f=function(e){return function(){var t=Array.prototype.slice.call(arguments);a.zaraz.q.push({m:e,a:t})}};for(const e of["track","set","debug"])a.zaraz[e]=a.zaraz._f(e);a.zaraz.init=()=>{var t=e.getElementsByTagName(r)[0],z=e.createElement(r),n=e.getElementsByTagName("title")[0];n&&(a.zarazData.t=e.getElementsByTagName("title")[0].text);a.zarazData.x=Math.random();a.zarazData.w=a.screen.width;a.zarazData.h=a.screen.height;a.zarazData.j=a.innerHeight;a.zarazData.e=a.innerWidth;a.zarazData.l=a.location.href;a.zarazData.r=e.referrer;a.zarazData.k=a.screen.colorDepth;a.zarazData.n=e.characterSet;a.zarazData.o=(new Date).getTimezoneOffset();a.zarazData.q=[];for(;a.zaraz.q.length;){const e=a.zaraz.q.shift();a.zarazData.q.push(e)}z.defer=!0;for(const e of[localStorage,sessionStorage])Object.keys(e||{}).filter((a=>a.startsWith("_zaraz"))).forEach((t=>{try{a.zarazData["z_"+t.slice(7)]=JSON.parse(e.getItem(t))}catch{a.zarazData["z_"+t.slice(7)]=e.getItem(t)}}));z.referrerPolicy="origin";z.src="/cdn-cgi/zaraz/s.js?z="+btoa(encodeURIComponent(JSON.stringify(a.zarazData)));t.parentNode.insertBefore(z,t)};["complete","interactive"].includes(e.readyState)?zaraz.init():a.addEventListener("DOMContentLoaded",zaraz.init)}(w,d,0,"script");})(window,document);</script></head> -->

    <section class="ftco-section img bg-hero" style="background-image:url(img/contact-us-bg.jpg)">
        <div class="container">
            <div class="row justify-content-center">
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="wrapper">
                    <div class="row no-gutters justify-content-between">
                        <div class="col-lg-5 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap w-100 p-5">
                                <h3 class="mb-4 contact-title">Contact us</h3>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="text pl-4 contact-con">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-map-marker"></span>
                                            <span class="contact-span">Address:</span>
                                        </div>
                                        <p> Plot No-27, L.P No-2/91, Madhurawada (Post) Visakhapatnam – 530048</p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="text pl-4 contact-con">
                                        <div class="icon d-flex align-items-center justify-content-center">
                                            <span class="fa fa-phone"></span>
                                            <span class="contact-span">Phone:</span> 
                                        </div>
                                        <a href="tel://+919848916600">+91 9848916600</a><br>
                                        <a href="tel://+919848916600">+91 9912936600</a><br>
                                        <a href="tel://+919848916600">+91 9071332233</a><br>
                                        <a href="tel://+919848916600">+91 9071330033</a> <br>
                                        <a href="tel://+919848916600">+91 9948661600</a> <br>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="text pl-4 contact-con">
                                        <div class="icon d-flex align-items-center justify-content-center contact-icons">
                                            <span class="fa fa-paper-plane"></span>
                                            <span class="contact-span">Email:</span>
                                        </div>
                                        <a href="mailto:mvvbuilders.sales@gmail.com">mvvbuilders.sales@gmail.com</span></a>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-6 col-md-6">
                    <div class="contact-wrap w-100 p-md-5 p-4">
                        <h3 class="mb-4 contact-get">Get in touch</h3>
                        <div id="form-message-warning" class="mb-4"></div>
                            <div id="form-message-success" class="mb-4">
                                Your message was sent, thank you!
                            </div>
                            <form method="POST" id="contactForm" name="contactForm">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 check-box">
                                            <input type="checkbox" class="contact-check" name="subject">
                                            <p>I authorize MVV Builders and its representatives to Call, SMS, Email or WhatsApp me about its products and offers. This consent overrides any registration for DND / NDNC.</p>
                                        
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                         <input type="submit" value="Send Message" class="btn btn-primary">
                                        <div class="submitting"></div>
                                    </div>
                                   
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
            </div>
    </section>



<!-- Contact section ends -->

<!-- Contact body start -->
<!-- <div class="contact-1 content-area-7">
    <div class="container">
        <div class="main-title">
            <h1>Contact Us</h1>
        </div>
        <div class="row">
            <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12"> -->
                <!-- Contact form start -->
                <!-- <div class="contact-form">
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
                            <<div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <div class="form-group send-btn mb-0">
                                    <p id="contact-response"></p>
                                </div>
                            </div>
                        </div>
                    </form>
                </div> -->
                <!-- Contact form end -->
            <!-- </div>
            <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">  -->
                <!-- Contact details start -->
                <!-- <div class="contact-details">
                    <div class="main-title-2">
                        <h3 class="text-dark">Our Address</h3>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-map-marker"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="text-dark">Office Address</h4>
                            <p>Plot No-27, L.P No-2/91, Madhurawada (Post) Visakhapatnam – 530048</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="media-body">
                            <h4 class="text-dark">Phone Number</h4>
                            <p>
                                <a href="#">office: +91 9848916600</a>
                            </p>
                            <p>
                                <a href="#">Mobile: +91 9912936600</a>
                            </p>
                            <p>
                                <a href="#">Mobile: +91 9071332233</a>
                            </p>
                            <p>
                                <a href="#">Mobile: +91 9071330033</a>
                            </p>
                            <p>
                                <a href="#">Mobile: +91 9948661600</a>
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
                                <a href="mailto:info@themevessel.com">mvvbuilders.sales@gmail.com</a>
                            </p>
                        </div>
                    </div>
                </div>  -->
                 <!-- Contact details end -->
             <!-- </div>
        </div>
    </div>
</div>  -->
<!-- Contact body end -->

<!-- Contact us page starts -->
<!-- <section class="section-bg" style="background-image: url(https://i.ibb.co/9p3Cnk9/slider-2.jpg);"  data-scroll-index="7">
          <div class="overlay pt-100 pb-100 ">
            <div class="container">
               <div class="row">
                    <div class="col-lg-6 d-flex align-items-center">
                        <div class="contact-info">

                            <h2 class="contact-title">Have Any Questions?</h2>
                            <ul class="contact-info">
                                <li>
                                  <div class="info-left">
                                      <i class="fas fa-mobile-alt"></i>
                                  </div>
                                  <div class="info-right">
                                      <h4>+11223344550</h4>
                                  </div>
                                </li>
                                <li>
                                  <div class="info-left">
                                      <i class="fas fa-at"></i>
                                  </div>
                                  <div class="info-right">
                                      <h4>info@example.com</h4>
                                  </div>
                                </li>
                                <li>
                                  <div class="info-left">
                                      <i class="fas fa-map-marker-alt"></i>
                                  </div>
                                  <div class="info-right">
                                      <h4>1243 Stree New Chandigarh, INDIA</h4>
                                  </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 d-flex align-items-center">
                            <div class="contact-form"> -->
                                        <!--Contact Form-->
                                        <!-- <form id='contact-form' method='POST'><input type='hidden' name='form-name' value='contactForm' /> -->
                                            
<!--                                             
                                                  <div class="form-group">
                                                     <input type="text" name="name" class="form-control" id="first-name" placeholder="Enter Your Name *" required="required">
                                                  </div> -->
                                        
<!--                                         
                                                  <div class="form-group">
                                                     <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your Email *" required="required">
                                                  </div> -->
                                               

                                              
                                                  <!-- <div class="form-group">
                                                       <textarea rows="4" name="message" class="form-control" id="description" placeholder="Enter Your Message *" required="required"></textarea>
                                                  </div> -->
                                            
                                                
                                                    <!--contact button-->
                                                    <!-- <button  class="btn-big btn btn-bg">
                                                        Send Us <i class="fas fa-arrow-right"></i>
                                                    </button>
                                                
                                        
                                        </form>
                                    </div>
                    </div>
               </div>
           </div>
              </div>
        </section> -->

<!-- Contact us page ends -->




<!-- Google map start -->
<div class="section">
    <div class="container-fluid map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1918.9147235304195!2d83.36237466784856!3d17.774965029831673!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a395be8abcd5399%3A0xf9942190966ed12!2sMVV%20GREEN%20FIELD!5e0!3m2!1sen!2sin!4v1664942294112!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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