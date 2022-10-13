<?php
include "includes/header.php";
// include "includes/db_con.php";
?>
<!-- Banner start -->
<!-- <div class="banner">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
         Wrapper for slides 
        <div class="carousel-inner" role="listbox">

            <div class="item item-100vh">
                <img src="uploads/banners/banner-house.jpg" alt="">
                <div class="carousel-caption banner-slider-inner">
                    <div class="banner-content container banner-content-left">
                        <h1 data-animation="animated fadeInDown delay-05s"><span>
                        </h1>
                        <p data-animation="animated fadeInUp delay-1s">Lorem ipsum dolor sit amet, conconsectetuer
                            adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                    </div>
                </div>
            </div>

            <div class="item item-100vh">
                <img src="uploads/banners/banner-house.jpg" alt="banner-slider-2">
                <div class="carousel-caption banner-slider-inner">
                    <div class="banner-content container banner-content-left">
                        <h1 data-animation="animated fadeInDown delay-1s"><span>Sweet Home For</span> Small Family</h1>
                        <p data-animation="animated fadeInUp delay-05s">Lorem ipsum dolor sit amet, conconsectetuer
                            adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                    </div>
                </div>
            </div>
            <div class="item item-100vh">
                <img src="uploads/banners/banner-house.jpg" alt="banner-slider-3">
                <div class="carousel-caption banner-slider-inner">
                    <div class="banner-content container banner-content-left">
                        <h1 data-animation="animated fadeInLeft delay-05s"><span>Best Place To</span> Find Home</h1>
                        <p data-animation="animated fadeInLeft delay-1s">Lorem ipsum dolor sit amet, conconsectetuer
                            adipiscing elit Lorem ipsum dolor sit amet, conconsectetuer</p>
                    </div>
                </div>
            </div>
        </div>
        Controls -->
<div class="owl-carousel">
    <div>
        <img class="owl-img" src="uploads/banners/banner-house.jpg" alt="">
    </div>
    <div>
        <img class="owl-img" src="uploads/banners/banner-img-4.jpeg" alt="">
    </div>
    <div>
        <img class="owl-img" src="uploads/banners/villa-banner.jpeg" alt="">
    </div>
</div>
<!-- <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="slider-mover-left" aria-hidden="true">
        <i class="fa fa-angle-left"></i>
    </span>
    <span class="sr-only">Previous</span>
</a> -->
<!-- <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="slider-mover-right" aria-hidden="true">
        <i class="fa fa-angle-right"></i>
    </span>
    <span class="sr-only">Next</span>
</a> -->
<!-- </div> -->
<!-- </div> -->
<!-- Banner end -->

<!-- Search area start -->
<div class="search-area">
    <div class="container">
        <div class="search-area-inner">
            <div class="search-contents ">
                <form method="GET">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group mb-0">
                                <select class="selectpicker search-fields" name="location" data-live-search="true"
                                    data-live-search-placeholder="Search value">
                                    <option>Location</option>
                                    <option>United States</option>
                                    <option>United Kingdom</option>
                                    <option>American Samoa</option>
                                    <option>Belgium</option>
                                    <option>Cameroon</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group mb-0">
                                <select class="selectpicker search-fields" name="property-types" data-live-search="true"
                                    data-live-search-placeholder="Search value">
                                    <option>Property Types</option>
                                    <option>Residential</option>
                                    <option>Commercial</option>
                                    <option>Land</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
                            <div class="form-group mb-0">
                                <select class="selectpicker search-fields" name="bedrooms" data-live-search="true"
                                    data-live-search-placeholder="Search value">
                                    <option>Sq.ft</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                    <option>6</option>
                                    <option>7</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 ">
                            <div class="form-group mb-0">
                                <button class="search-button">Search</button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search area start -->
<!--about start-->
<div class="about-city-estate">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="properties-detail-slider simple-slider">
                    <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                        <div class="carousel-outer">
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <div class="item">
                                    <img src="img/properties/house-img-2.png"
                                        class="img-preview img-responsive welcome-img" alt="properties-1">
                                </div>
                                <div class="item">
                                    <img src="img/properties/house-img-1.jpg"
                                        class="img-preview img-responsive welcome-img" alt="properties-2">
                                </div>
                                <div class="item active left">
                                    <img src="img/properties/house-img-3.jpg"
                                        class="img-preview img-responsive welcome-img" alt="properties-3">
                                </div>
                                <div class="item next left">
                                    <img src="img/properties/house-img-5.jpg"
                                        class="img-preview img-responsive welcome-img" alt="properties-4">
                                </div>
                            </div>
                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                <span class="slider-mover-left no-bg t-slider-r pojison" aria-hidden="true">
                                    <i class="fa fa-angle-left"></i>
                                </span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                <span class="slider-mover-right no-bg t-slider-l pojison" aria-hidden="true">
                                    <i class="fa fa-angle-right"></i>
                                </span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="about-text">
                    <h3>Welcome to MVV Properties</h3>
                    <p text-align="justify">Welcome To MVV Private Limited Which Is Vast Growing Leading Real
                        Estate Property Developers In India With An Envisioned Success Path And Opulent Experience Over
                        20+ Years In Delivering Quality New Trend Land Development Projects Of Open Plots, Suit Rooms,
                        And Farmlands. At MVV, We Are Well Known For Focusing On Catering Best Real Estate
                        Requirements And Own A Premium Tag At Providing The Constant Endeavor Transparency And Core
                        Values To Our Customers.<br />
                        Our Team Is A Group Of Professionals With Supplemental Experience Over The Decades In the Real
                        Estate Ventures Field. We Lead Our Services With Core Values, Promise Of Excellence, Prosperity,
                        Large-Scale Development, And Growth To Our Customers. We Mark The Land Which Is Luxurious, More
                        Quality Living Spaced, Facilities Nearby And Thoughtful Amenities So That The Property’s Value
                        Will Be Enhanced More And Gives Our Customer A Bulk Returns On Their Investments.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <p class="text-justify">We Now Further Concentrating More On Open Plots Which Are At The Foothills Of Sri
                Yadagiri Lakshmi
                Narasimha Swamy Temple At Yadadri (Yadagirigutta), Suit Rooms And Farmlands At Aler (Warangal) Areas
                Which Are Future Happening Cities With Large Scope Of Developments Around. We Specifically Choose This
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
<!-- Featured properties start -->
<div class="content-area featured-properties">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Featured Properties</h1>
        </div>
        <ul class="list-inline-listing filters filters-listing-navigation">
            <li class="active btn filtr-button filtr" data-filter="all">All</li>
            <li data-filter="1" class="btn btn-inline filtr-button filtr">Open Plots</li>
            <li data-filter="2" class="btn btn-inline filtr-button filtr">Suit Rooms</li>
            <li data-filter="3" class="btn btn-inline filtr-button filtr">Farm Lands</li>
            <li data-filter="4" class="btn btn-inline filtr-button filtr">Others</li>
        </ul>
        <div class="row">
            <div class="filtr-container">
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 2, 3">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <!-- <div class="property-tag button sale">For Sale</div> -->
                            <!-- <div class="property-price"> 150,000</div> -->
                            <img src="img/properties/properties-1.jpg" alt="fp" class="img-responsive">
                            <div class="property-overlay">
                                <a href="#" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Lexus GS F">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="img/properties/properties-1.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>

                                    <a href="img/properties/properties-2.jpg" class="hidden"></a>
                                    <a href="img/properties/properties-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="#">Urbanized a niche Lifestyle</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Maheshwaram
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span>73 Acres</span>
                                </li>
                                <li>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left">1000000</span>

                                <span class="right">
                                    <i class="fa fa-calendar"></i>5 Days ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <!-- <div class="property-tag button sale">For Sale</div> -->
                            <!-- <div class="property-price"> 150,000</div> -->
                            <img src="img/properties/properties-5.jpg" alt="fp" class="img-responsive">
                            <div class="property-overlay">
                                <a href="#" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Lexus GS F">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="img/properties/properties-5.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="img/properties/properties-2.jpg" class="hidden"></a>
                                    <a href="img/properties/properties-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="#">Exceptional Lifestyle</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Vikarabad
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span>150 Acres</span>
                                </li>
                                <li>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left">1000000</span>

                                <span class="right">
                                    <i class="fa fa-calendar"></i>5 Days ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="2, 3">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <!-- <div class="property-tag button sale">For Sale</div> -->
                            <!-- <div class="property-price"> 150,000</div> -->
                            <img src="img/properties/properties-5.jpg" alt="fp" class="img-responsive">
                            <div class="property-overlay">
                                <a href="#" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Lexus GS F">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="img/properties/properties-5.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="img/properties/properties-2.jpg" class="hidden"></a>
                                    <a href="img/properties/properties-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="#">Exceptional Lifestyle</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Vikarabad
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span>150 Acres</span>
                                </li>
                                <li>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left">1000000</span>

                                <span class="right">
                                    <i class="fa fa-calendar"></i>5 Days ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 3, 4">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <!-- <div class="property-tag button sale">For Sale</div> -->
                            <!-- <div class="property-price"> 150,000</div> -->
                            <img src="img/properties/properties-1.jpg" alt="fp" class="img-responsive">
                            <div class="property-overlay">
                                <a href="#" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Lexus GS F">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="img/properties/properties-1.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>

                                    <a href="img/properties/properties-2.jpg" class="hidden"></a>
                                    <a href="img/properties/properties-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="#">Urbanized a niche Lifestyle</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Maheshwaram
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span>73 Acres</span>
                                </li>
                                <li>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left">1000000</span>

                                <span class="right">
                                    <i class="fa fa-calendar"></i>5 Days ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="4">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <!-- <div class="property-tag button sale">For Sale</div> -->
                            <!-- <div class="property-price"> 150,000</div> -->
                            <img src="img/properties/properties-5.jpg" alt="fp" class="img-responsive">
                            <div class="property-overlay">
                                <a href="#" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Lexus GS F">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="img/properties/properties-5.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>
                                    <a href="img/properties/properties-2.jpg" class="hidden"></a>
                                    <a href="img/properties/properties-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="#">Exceptional Lifestyle</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Vikarabad
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span>150 Acres</span>
                                </li>
                                <li>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left">1000000</span>

                                <span class="right">
                                    <i class="fa fa-calendar"></i>5 Days ago
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12  filtr-item" data-category="1, 3">
                    <div class="property">
                        <!-- Property img -->
                        <div class="property-img">
                            <div class="property-tag button alt featured">Featured</div>
                            <!-- <div class="property-tag button sale">For Sale</div> -->
                            <!-- <div class="property-price"> 150,000</div> -->
                            <img src="img/properties/properties-1.jpg" alt="fp" class="img-responsive">
                            <div class="property-overlay">
                                <a href="#" class="overlay-link">
                                    <i class="fa fa-link"></i>
                                </a>
                                <a class="overlay-link property-video" title="Lexus GS F">
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                </a>
                                <div class="property-magnify-gallery">
                                    <a href="img/properties/properties-1.jpg" class="overlay-link">
                                        <i class="fa fa-expand"></i>
                                    </a>

                                    <a href="img/properties/properties-2.jpg" class="hidden"></a>
                                    <a href="img/properties/properties-3.jpg" class="hidden"></a>
                                </div>
                            </div>
                        </div>
                        <!-- Property content -->
                        <div class="property-content text-center">
                            <!-- title -->
                            <h1 class="title">
                                <a href="#">Urbanized a niche Lifestyle</a>
                            </h1>
                            <!-- Property address -->
                            <h3 class="property-address">
                                <a href="#">
                                    <i class="fa fa-map-marker"></i>Maheshwaram
                                </a>
                            </h3>
                            <!-- Facilities List -->
                            <ul class="facilities-list clearfix">
                                <li>
                                    <span>73 Acres</span>
                                </li>
                                <li>
                                    <span>3 Beds</span>
                                </li>
                                <li>
                                    <span>TV </span>
                                </li>
                                <li>
                                    <span> 2 Baths</span>
                                </li>
                                <li>
                                    <span>1 Garage</span>
                                </li>
                                <li>
                                    <span> 3 Balcony</span>
                                </li>
                            </ul>
                            <!-- Property footer -->
                            <div class="property-footer">
                                <span class="left">1000000</span>
                                <span class="right">
                                    <i class="fa fa-calendar"></i>5 Days ago
                                </span>
                            </div>
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
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-tag"></i>
                    <h1 class="counter">967</h1>
                    <p>Listings For Sale</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-symbol-1"></i>
                    <h1 class="counter">1276</h1>
                    <p>Listings For Rent</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 bordered-right">
                <div class="counter-box">
                    <i class="flaticon-people"></i>
                    <h1 class="counter">396</h1>
                    <p>Agents</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 wow">
                <div class="counter-box">
                    <i class="flaticon-people-1"></i>
                    <h1 class="counter">177</h1>
                    <p>Brokers</p>
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
                    <h4 class="text-dark font-weight-bold">Farm Lands</h4>
                    <p align="justify" class="text-dark">Agricultural land, also referred to as "farmland", is typically land devoted to agriculture, the systematic and controlled use of other forms of life—particularly the rearing of livestock and production.
                    </P>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInLeft delay-04s">
                <div class="content">
                    <i class="flaticon-internet"></i>
                    <h4 class="text-dark font-weight-bold">Farm Lands</h4>
                    <p align="justify" class="text-dark">Agricultural land, also referred to as "farmland", is typically land devoted to agriculture, the systematic and controlled use of other forms of life—particularly the rearing of livestock and production.
                    </P>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 wow fadeInRight delay-04s">
                <div class="content">
                    <i class="flaticon-vehicle"></i>
                    <h4 class="text-dark font-weight-bold">Farm Lands</h4>
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