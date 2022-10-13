<?php
include "includes/header.php";
// include "includes/db_con.php";
?>


<!-- Enquiry form starts -->
<section class="ftco-section img bg-hero about-enquiry-form" style="background-image:url(img/contact-us-bg.jpg)">
        <div class="container">
            <div class="row justify-content-center">
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="wrapper">
                    <div class="row no-gutters justify-content-between">
                        <div class="col-lg-5 col-md-5 col-sm-6 d-flex align-items-stretch form-contactus">
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
                                        <a href="mailto:mvvbuilders.sales@gmail.com">MVVbuilders.sales@gmail.com</span></a>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-start">
                                    <div class="icon d-flex align-items-center justify-content-center">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-1"></div>
                <div class="col-lg-6 col-md-6  form-reachus">
                    <div class="contact-wrap w-100 p-md-5 p-4 contact-icon">
                        <h3 class="mb-4 contact-get">Get in touch</h3>
                        <i class="fa-solid fa-xmark icon-contact"></i>
                        <div id="form-message-warning" class="mb-4"></div>
                            <div id="form-message-success" class="mb-4">
                                Your message was sent, thank you!
                            </div>
                            <form id="myform" action="main.php" method="post">
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
                                            <input type="phone" class="form-control" name="subject" id="subject" placeholder="Phone" required>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="5" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 check-box">
                                            <input type="checkbox" class="contact-check" name="agree" id="agree_checkbox" value="yes">
                                            <p>I authorize MVV Builders and its representatives to Call, SMS, Email or WhatsApp me about its products and offers. This consent overrides any registration for DND / NDNC.</p>
                                        
                                    </div>
                                    <div class="ml-4" style="display:none; color:red" id="agree_chk_error">
  Can't proceed as you didn't agree to the terms!
  </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                         <input type="submit" name="submit" value="Send Message" class="btn btn-primary">
                                        
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
<!-- Enquriry form ends -->

<!-- Carousels section starts  -->

<div class="carousel_sec">
  <div class="progress-bar progress-bar--primary hide-on-desktop">
    <div class="progress-bar__fill"></div>
  </div>

<header class="main-post-wrapper">
  
  <div class="slides_sec">
    <article class="main-post main-post--active">
      <div class="main-post__image">
        <img src="./img/banner/2.png" alt="New McLaren wind tunnel 'critical' to future performance, says Tech Director Key" />
      </div>
      <div class="main-post__content">
        <div class="main-post__tag-wrapper">
          <!-- <span class="main-post__tag">News</span> -->
        </div>
        <h1 class="main-post__title">MVV GV GRAND - ONGOING PROJECT</h1>
        <!-- <a class="main-post__link" href="#">
              <span class="main-post__link-text">find out more</span>
              <svg
                class="main-post__link-icon main-post__link-icon--arrow"
                width="37"
                height="12"
                viewBox="0 0 37 12"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M0 6H36.0001M36.0001 6L31.0001 1M36.0001 6L31.0001 11"
                  stroke="white"
                />
              </svg>
            </a> -->
      </div>
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-2.jpg"/>
      </div>
      <div class="main-post__content">
        <h1 class="main-post__title">OUR WINNING STREAKS CONTINUES</h1>
      </div>
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-3.jpg" alt="Hamilton wants harder championship fight from Leclerc and
            Verstappen" />
      </div>
      <div class="main-post__content">
        <!-- <div class="main-post__tag-wrapper">
          <span class="main-post__tag">News</span>
        </div>
        <h1 class="main-post__title">Hamilton wants harder championship fight from Leclerc and Verstappen
        </h1> -->
      </div>
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-4.jpg" alt="Hamilton wants harder championship fight from Leclerc and
            Verstappen" />
      </div>
      
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-5.jpg"/>
      </div>
      <div class="main-post__content">
        <h1 class="main-post__title">Our constant endeavour is always to provide the best for our customers.</h1>
      </div>
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-6.jpg"/>
      </div>
      <div class="main-post__content">
        <h1 class="main-post__title">We Build On Faith</h1>
      </div>
    </article>
    <article class="main-post main-post--not-active">
      <div class="main-post__image">
        <img src="img/bans/BANNER-7.jpg" alt="Hamilton wants harder championship fight from Leclerc and
            Verstappen" />
      </div>
      <div class="main-post__content">
        <div class="main-post__tag-wrapper">
          <a href="https://MVVcity.com/" target ="_blank"><span class="main-post__tag">Take me on Tour</span></a>
        </div>
        <h1 class="main-post__title">
        </h1>
      </div>
    </article>  
  </div>
</header>

<div class="posts-wrapper hide-on-mobile">
  <article class="post post--active">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title"></h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title"></h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title">
    </h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title">
    </h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title"></h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title"></h2>
  </article>
  <article class="post">
    <div class="progress-bar">
      <div class="progress-bar__fill"></div>
    </div>
    <h2 class="post__title"></h2>
  </article>
</div>
</div>

<main style="min-height: 2vh;"></main>

<!-- Carousels section ends -->



<!--about start-->
<div class="about-city-estate">
    <div class="container">
         <div class="row mb-20 about-founder-secz">
             <div class="col-md-7">
                <div class="about-text about-founder-text">
                    <h3>Our Founder</h3>
                    <span class="animate-border mr-auto ml-auto mb-4"></span>
                    <p align="justify">MVV Builders, Visakhapatnam, Andhra Pradesh,India started its operations in the 90’s headed by Young Dynamic & Innovative Self-driven Entrepreneur MR . MULLAPUDI VEERA VENKATA SATYANARAYANA Well Known, Reputed and Leading Promoter & Builder in the industry . Over a period of more than two decades it has grown exponentially based in Visakhapatnam.Today, the company enjoys a strong presence in Visakhapatnam real estate and extending its prevalence to Hyderabad.  </p>
                    <p>It has taken large strides to attain a name for itself both in the industry and in the market, equipped with the latest State-of-the–Art Infrastructure facilities and trained Qualified Professionals & Skilled Manpower to cater to the dominant changing housing needs of the society.</p>
                    <p>MVV Builders has always Promoted & Designed Quality Living Spaces/Accommodation and Rendered Quality Services and also believes in Quality work leading to optimum customer satisfaction.
                    The company has established more than 50 Ventures and each Venture a landmark in the city setting competitive standards in the market & in the industry.</p>
                  
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-md-4 about-founder-img">
               <img src="img/MVV.jpg" class="br" />
            </div>
            
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
               <img src="img/banner/91414-city-building-construction.gif" style="    width: 100%;height: 466px;border-radius: 10px;"/>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="about-text about-founder-text">
                    <h3>Welcome to <span class="founder-title">MVV Properties</span></h3>
                    <p align="justify">Welcome To MVV Private Limited Which Is Vast Growing Leading Real
                        Estate Property Developers In India With An Envisioned Success Path And Opulent Experience Over
                        20+ Years In Delivering Quality New Trend Land Development Projects Of Open Plots, Suit Rooms,
                        And Farmlands. At MVV, We Are Well Known For Focusing On Catering Best Real Estate
                        Requirements And Own A Premium Tag At Providing The Constant Endeavor Transparency And Core
                        Values To Our Customers. </p>
                        <p>
                        Our Team Is A Group Of Professionals With Supplemental Experience Over The Decades In the Real
                        Estate Ventures Field. We Lead Our Services With Core Values, Promise Of Excellence, Prosperity,
                        Large-Scale Development, And Growth To Our Customers. We Mark The Land Which Is Luxurious, More
                        Quality Living Spaced, Facilities Nearby And Thoughtful Amenities So That The Property’s Value
                        Will Be Enhanced More And Gives Our Customer A Bulk Returns On Their Investments.We Now Further Concentrating More On Open Plots Which Are At The Foothills Of Sri
                Yadagiri Lakshmi
                Narasimha Swamy Temple At Yadadri (Yadagirigutta), Suit Rooms And Farmlands At Aler (Warangal) Areas
                Which Are Future Happening Cities With Large Scope Of Developments Around.</p>
                   
                </div>
            </div>
        </div>
        <div class="row about-founder-text founder-para">
            <p class="text-justify"> We Specifically Choose This
                Type Of Areas, Which Are On High Demand, So That Our Customers Should Benefit More With Returns On Their
                Investment. We Carefully Structure Our Properties with DTCP Approved Layouts And Stick To HMDA
                Guidelines. We Developed and Enlarged Our Domain Into Individual Ventures, Open Plots, Suit Rooms,
                Farmlands, And Similar Type Of Properties. We Render All the Filtered Best Advice Regarding the Real
                Estate Briefs and Needs Which Keeps On Value And Appreciations All The Time For Your Investments.<br />

                Our Main Goal Is Not Only to Sell the Properties But Also Strive To Develop Real Estate Properties With
                Keeping A Major Focus On Environmental Sustainability Projects And Carefully Crafted With Utmost
                Following All The Priority Rules, Sustainable Living Resources.
            </p>
        </div>
    </div>
</div>
<!--about end-->

<!-- Enquiry section starts here -->
 <button class = "enquiry-button">E<br>N<br>Q<br>U<br>I<br>R<br>Y</button>
<!-- Enquiry section ends here -->



<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Featured Properties</h1>
        </div>
        <ul class="list-inline-listing filters filters-listing-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">All</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">on going projectss</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">Comppleted projects</li>
            <!--<li data-filter="3" class="btn btn-inline filtr-button filtr">Farm Lands</li>-->
            <!--<li data-filter="4" class="btn btn-inline filtr-button filtr">Others</li>-->
        </ul>
        <div class="row">
            <div class="filtr-container">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Completed</div>
                            <a href="completed-projects.php"><img src=".\img\mvv-city.webp" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="completed-projects.php">MVV City</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Madurawada
                                </a>
                            </h3>
                
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Ongoing</div>
                            <a href="ongoing-projects.php"><img src="img/on/MVV-GREEN-FIELD.jpg" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="ongoing-projects.php">MVV The Grand</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Madurawada
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Completed</div>
                            <a href="completed-projects.php"><img src="img/on/MVV-GREEN-GARDENS.jpg" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="completed-projects.php">MVV & MK Park</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Kurmannapalem
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Completed</div>
                            <a href="completed-projects.php"><img src=".\img\mvv-highway.webp" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="completed-projects.php">MVV HighWay Homes</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Madurawada
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Completed</div>
                            <a href="completed-projects.php"><img src=".\img\mvv-hillvalley.jpg" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="#">MVV Hill Valley</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>MVP Colony
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Ongoing</div>
                            <a href="ongoing-projects.php"><img src="img/on/MVV-PINNACLE-HOMES.jpg" alt="fp" class="img-responsive"></a>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="ongoing-projects.php">MVV PINNACLE HOMES</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Madurawada
                                </a>
                            </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Featured properties end -->
<!-- Counters strat -->
<div class="counters overview-bgi mb-70">
    <div class="container">

        <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">967</h1>
                    <p>Constructed buildings</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-symbol-1"></i>
                    <h1 class="counter">1276</h1>
                    <p>Total Builders</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6  bordered-right">
                <div class="counter-box col-xs-6">
                    <i class="flaticon-people"></i>
                    <h1 class="counter">396</h1>
                    <p>Schools</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-6 wow">
                <div class="counter-box">
                    <i class="flaticon-people-1"></i>
                    <h1 class="counter">177</h1>
                    <p>Apartments</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->
<!-- Our service start -->
<div class="mb-100 our-service">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>What are you</span> looking for?</h1>
        </div>

        <div class="row mgn-btm wow">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="content">
                    <i class="flaticon-apartment"></i>
                    <h4 class="text-dark font-weight-bold">Ongoing Constructions</h4>
                    <p align="justify" class="text-dark">Agricultural land, also referred to as "farmland", is typically land devoted to agriculture, the systematic and controlled use of other forms of life—particularly the rearing of livestock and production.
                    </P>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="content">
                    <i class="flaticon-internet"></i>
                    <h4 class="text-dark font-weight-bold">Pinnacle Constructions</h4>
                    <p align="justify" class="text-dark">Agricultural land, also referred to as "farmland", is typically land devoted to agriculture, the systematic and controlled use of other forms of life—particularly the rearing of livestock and production.
                    </P>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                <div class="content">
                    <i class="flaticon-vehicle"></i>
                    <h4 class="text-dark font-weight-bold">Apartments</h4>
                    <p align="justify" class="text-dark">Agricultural land, also referred to as "farmland", is typically land devoted to agriculture, the systematic and controlled use of other forms of life—particularly the rearing of livestock and production.
                    </P>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Our service end -->
<!-- Partners block end -->

<div class="clearfix"></div>

<!-- Testimonial section start-->
<div class="testimonials-3 overview-bgi">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div id="carouse3-example-generic" class="carousel slide" data-ride="carousel">
                    <h1>Our Testimonial</h1>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item content clearfix active">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src="img/avatar/avatar-1.jpg" alt="avatar-1" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec
                                            vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa
                                            eu porta ultricies.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            John Antony
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item content clearfix">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src="img/avatar/avatar-2.jpg" alt="avatar-2" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec
                                            vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa
                                            eu porta ultricies.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            John Mery
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item content clearfix">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src="img/avatar/avatar-4.jpg" alt="avatar-4" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec
                                            vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa
                                            eu porta ultricies.
                                            <sub>
                                                <i class="fa fa-quote-right"></i>
                                            </sub>
                                        </div>
                                        <div class="author-name">
                                            John Top
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item content clearfix">
                            <div class="row">
                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                    <div class="avatar">
                                        <img src="img/avatar/avatar-3.jpg" alt="avatar-3" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 ">
                                    <div class="testimonials-info">
                                        <div class="text">
                                            <sup>
                                                <i class="fa fa-quote-left"></i>
                                            </sup>
                                            Aliquam dictum elit vitae mauris facilisis, at dictum urna dignissim. Donec
                                            vel lectus vel felis lacinia luctus vitae iaculis arcu. Mauris mattis, massa
                                            eu porta ultricies.
                                            <sup>
                                                <i class="fa fa-quote-right"></i>
                                            </sup>
                                        </div>
                                        <div class="author-name">
                                            John Pitarshon
                                        </div>
                                        <ul class="rating">
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li>
                                                <i class="fa fa-star-half-full"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Controls -->
                    <a class="left carousel-control" href="#carouse3-example-generic" role="button" data-slide="prev">
                        <span class="slider-mover-left t-slider-l" aria-hidden="true">
                            <i class="fa fa-angle-left"></i>
                        </span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#carouse3-example-generic" role="button" data-slide="next">
                        <span class="slider-mover-right t-slider-r" aria-hidden="true">
                            <i class="fa fa-angle-right"></i>
                        </span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial  end -->
<div class="clearfix"></div>

<!-- Blog start -->
<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1><span>Our</span> Blog</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInLeft delay-04s">
                <div class="thumbnail blog-box-2 clearfix">
                    <div class="blog-photo">
                        <img src="img/blog/blog-1.jpg" alt="blog-1" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="img/avatar/avatar-1.jpg" alt="user-blog">
                            </li>
                            <li><span>John Doe</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <!-- Detail -->
                    <div class="caption detail">
                        <h4><a href="#">Urbanized a niche Lifestyle</a></h4>
                        <!-- paragraph -->
                        <p class="blog-content">Real estate is real property that consists of land and improvements,
                            which include buildings,
                            plants
                            and equipment.</p>
                        <div class="clearfix"></div>
                        <!-- Btn -->
                        <a href="#" class="read-more">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 hidden-sm wow fadeInUp delay-04s">
                <div class="thumbnail blog-box-2 clearfix">
                    <div class="blog-photo">
                        <img src="img/blog/blog-2.jpg" alt="blog-2" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="img/avatar/avatar-4.jpg" alt="user-blog">
                            </li>
                            <li><span>Karen Paran</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <!-- Detail -->
                    <div class="caption detail">
                        <h4><a href="#">Exceptional Lifestyle </a></h4>
                        <!-- paragraph -->
                        <p class="blog-content">Tangible assets are, fixtures, roads, structures, and utility systems.
                            Property rights give a
                            title of ownership to the land, improvements, </p>
                        <div class="clearfix"></div>
                        <!-- Btn -->
                        <a href="#" class="read-more">Read More...</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 wow fadeInRight delay-04s">
                <div class="thumbnail blog-box-2 clearfix">
                    <div class="blog-photo">
                        <img src="img/blog/blog-3.jpg" alt="blog-3" class="img-responsive">
                    </div>
                    <div class="post-meta">
                        <ul>
                            <li class="profile-user">
                                <img src="img/avatar/avatar-3.jpg" alt="user-blog">
                            </li>
                            <li><span>John Antony</span></li>
                            <li><i class="fa fa-calendar"></i></li>
                            <li><i class="fa fa-comments"></i></li>
                        </ul>
                    </div>
                    <!-- Detail -->
                    <div class="caption detail">
                        <h4><a href="#">Residential - Luxury Towers</a></h4>
                        <!-- paragraph -->
                        <p class="blog-content">Real estate is real property that consists of land and improvements,
                            which include buildings,
                            plants
                            and equipment. </p>
                        <div class="clearfix"></div>
                        <!-- Btn -->
                        <a href="#" class="read-more">Read More...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog end -->

<!-- Partners block start -->
<!-- <div class="partners-block">
    <div class="container">
        <h3>Brands & Partners</h3>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel our-partners slide" id="ourPartners">
                    <div class="carousel-inner">
                        <div class="item active">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="img/brand/partner.png" alt="partner">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="img/brand/partner-2.png" alt="partner-2">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="img/brand/partner-3.png" alt="partner-3">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="img/brand/partner-4.png" alt="partner-4">
                                </a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="col-xs-12 col-sm-6 col-md-3 partner-box">
                                <a href="#">
                                    <img src="img/brand/partner-5.png" alt="partner-5">
                                </a>
                            </div>
                        </div>
                    </div>
                    <a class="left carousel-control" href="#ourPartners" data-slide="prev"><i
                            class="fa fa-chevron-left icon-prev"></i></a>
                    <a class="right carousel-control" href="#ourPartners" data-slide="next"><i
                            class="fa fa-chevron-right icon-next"></i></a>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Partners block end -->
<?php
include"includes/footer.php";
?>
<script>
    $("#myform").on("submit",function(form)
{
    if(!$("#agree_checkbox").prop("checked"))
    {
        $("#agree_chk_error").show();
    }
    else
    {
        $("#agree_chk_error").hide();
    }
    return false;
})
</script>