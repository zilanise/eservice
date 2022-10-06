@extends('layouts.guest')
@section('title',__("Home"))
@section('content')
<link rel="stylesheet" href="{{ asset('assets/theme/css/main.css') }}" />
<!-- Start Hero Area -->
<section class="hero-area overlay">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                <div class="hero-text text-center">
                    <!-- Start Hero Text -->
                    <div class="section-heading">
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">Welcome to ClassiGrids</h2>
                        <p class="wow fadeInUp" data-wow-delay=".5s">Buy And Sell Everything From Used Cars To Mobile Phones And <br>Computers,
                            Or Search For Property, Jobs And More.</p>
                    </div>
                    <!-- End Search Form -->
                    <!-- Start Search Form -->
                    <div class="search-form wow fadeInUp" data-wow-delay=".7s">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-12 p-0">
                                <div class="search-input">
                                    <label for="keyword"><i class="lni lni-search-alt theme-color"></i></label>
                                    <input type="text" name="keyword" id="keyword" placeholder="Product keyword">
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 p-0">
                                <div class="search-input">
                                    <label for="category"><i class="lni lni-grid-alt theme-color"></i></label>
                                    <select name="category" id="category">
                                        <option value="none" selected disabled>Categories</option>
                                        <option value="none">Vehicle</option>
                                        <option value="none">Electronics</option>
                                        <option value="none">Mobiles</option>
                                        <option value="none">Furniture</option>
                                        <option value="none">Fashion</option>
                                        <option value="none">Jobs</option>
                                        <option value="none">Real Estate</option>
                                        <option value="none">Animals</option>
                                        <option value="none">Education</option>
                                        <option value="none">Matrimony</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-12 p-0">
                                <div class="search-input">
                                    <label for="location"><i class="lni lni-map-marker theme-color"></i></label>
                                    <select name="location" id="location">
                                        <option value="none" selected disabled>Locations</option>
                                        <option value="none">New York</option>
                                        <option value="none">California</option>
                                        <option value="none">Washington</option>
                                        <option value="none">Birmingham</option>
                                        <option value="none">Chicago</option>
                                        <option value="none">Phoenix</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-12 p-0">
                                <div class="search-btn button">
                                    <button class="btn"><i class="lni lni-search-alt"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Search Form -->
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- End Hero Area -->

<!-- Start Categories Area -->
<section class="categories">
    <div class="container">
        <div class="cat-inner">
            <div class="row">
                <div class="col-12 p-0">
                    <div class="category-slider">
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay=".2s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/car.svg') }}" alt="#">
                            </div>
                            <h3>Vehicle</h3>
                            <h5 class="total">35</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay=".4s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/laptop.svg') }}" alt="#">
                            </div>
                            <h3>Electronics</h3>
                            <h5 class="total">22</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay=".6s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/matrimony.svg') }}" alt="#">
                            </div>
                            <h3>Matrimony</h3>
                            <h5 class="total">55</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay=".8s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/furniture.svg') }}" alt="#">
                            </div>
                            <h3>Furnitures</h3>
                            <h5 class="total">21</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay="1s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/jobs.svg') }}" alt="#">
                            </div>
                            <h3>Jobs</h3>
                            <h5 class="total">44</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay="1.2s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/real-estate.svg') }}" alt="#">
                            </div>
                            <h3>Real Estate</h3>
                            <h5 class="total">65</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay="1.4s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/laptop.svg') }}" alt="#">
                            </div>
                            <h3>Education</h3>
                            <h5 class="total">35</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay="1.6s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/hospital.svg') }}" alt="#">
                            </div>
                            <h3>Health & Beauty</h3>
                            <h5 class="total">22</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay="1.8s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/tshirt.svg') }}" alt="#">
                            </div>
                            <h3>Fashion</h3>
                            <h5 class="total">25</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay="2s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/education.svg') }}" alt="#">
                            </div>
                            <h3>Education</h3>
                            <h5 class="total">42</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay="2.2s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/controller.svg') }}" alt="#">
                            </div>
                            <h3>Gadgets</h3>
                            <h5 class="total">32</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay=".2s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/travel.svg') }}" alt="#">
                            </div>
                            <h3>Backpacks</h3>
                            <h5 class="total">15</h5>
                        </a>
                        <!-- End Single Category -->
                        <!-- Start Single Category -->
                        <a href="category.html" class="single-cat wow fadeInUp" data-wow-delay=".2s">
                            <div class="icon">
                                <img src="{{ asset('assets/theme/images/categories/watch.svg') }}" alt="#">
                            </div>
                            <h3>Watches</h3>
                            <h5 class="total">65</h5>
                        </a>
                        <!-- End Single Category -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Categories Area -->

<!-- Start Ads Grid Area -->
<section class="ads-grid section custom-padding">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Latest Products</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="single-head">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Grid -->
                    <div class="single-grid wow fadeInUp" data-wow-delay=".2s">
                        <div class="image">
                            <a href="ads-details.html" class="thumbnail"><img src="{{ asset('assets/theme/images/advertiseGrid/img1.jpg') }}" alt="#"></a>
                            <div class="author">
                                <div class="author-image">
                                    <a href="#"><img src="{{ asset('assets/theme/images/advertiseGrid/author-1.jpg') }}" alt="#">
                                        <span>Smith jeko</span></a>
                                </div>
                                <p class="sale">For Sale</p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <a href="#" class="tag">Mobile Phones</a>
                                <h3 class="title">
                                    <a href="ads-details.html">Apple Iphone X</a>
                                </h3>
                                <p class="update-time">Last Updated: 1 hours ago</p>
                                <ul class="rating">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><a href="#">(35)</a></li>
                                </ul>
                                <ul class="info-list">
                                    <li><a href="#"><i class="lni lni-map-marker"></i> New York, US</a></li>
                                    <li><a href="#"><i class="lni lni-timer"></i> Feb 18, 2023</a></li>
                                </ul>
                            </div>
                            <div class="bottom-content">
                                <p class="price">Start From: <span>$200.00</span></p>
                                <a href="#" class="like"><i class="lni lni-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Grid -->
                    <div class="single-grid wow fadeInUp" data-wow-delay=".4s">
                        <div class="image">
                            <a href="ads-details.html" class="thumbnail"><img src="{{ asset('assets/theme/images/advertiseGrid/img2.jpg') }}" alt="#"></a>
                            <div class="author">
                                <div class="author-image">
                                    <a href="#"><img src="{{ asset('assets/theme/images/advertiseGrid/author-2.jpg') }}" alt="#">
                                        <span>Alex Jui</span></a>
                                </div>
                                <p class="sale">For Sale</p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <a href="#" class="tag">Real Estate</a>
                                <h3 class="title">
                                    <a href="ads-details.html">Amazing Room for Rent</a>
                                </h3>
                                <p class="update-time">Last Updated: 2 hours ago</p>
                                <ul class="rating">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><a href="#">(20)</a></li>
                                </ul>
                                <ul class="info-list">
                                    <li><a href="#"><i class="lni lni-map-marker"></i> Dallas, Washington</a></li>
                                    <li><a href="#"><i class="lni lni-timer"></i> Jan 7, 2023</a></li>
                                </ul>
                            </div>
                            <div class="bottom-content">
                                <p class="price">Start From: <span>$450.00</span></p>
                                <a href="#" class="like"><i class="lni lni-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Grid -->
                    <div class="single-grid wow fadeInUp" data-wow-delay=".6s">
                        <div class="image">
                            <a href="ads-details.html" class="thumbnail"><img src="{{ asset('assets/theme/images/advertiseGrid/img3.jpg') }}" alt="#"></a>
                            <div class="author">
                                <div class="author-image">
                                    <a href="#"><img src="{{ asset('assets/theme/images/advertiseGrid/author-3.jpg') }}" alt="#">
                                        <span>Devid Milan</span></a>
                                </div>
                                <p class="sale">For Sale</p>
                            </div>
                            <p class="item-position"><i class="lni lni-bolt"></i> Featured</p>
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <a href="#" class="tag">Mobile Phones</a>
                                <h3 class="title">
                                    <a href="ads-details.html">Canon SX Powershot D-SLR</a>
                                </h3>
                                <p class="update-time">Last Updated: 3 hours ago</p>
                                <ul class="rating">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><a href="#">(55)</a></li>
                                </ul>
                                <ul class="info-list">
                                    <li><a href="#"><i class="lni lni-map-marker"></i> New York, US</a></li>
                                    <li><a href="#"><i class="lni lni-timer"></i> Mar 18, 2023</a></li>
                                </ul>
                            </div>
                            <div class="bottom-content">
                                <p class="price">Start From: <span>$700.00</span></p>
                                <a href="#" class="like"><i class="lni lni-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Grid -->
                    <div class="single-grid wow fadeInUp" data-wow-delay=".2s">
                        <div class="image">
                            <a href="ads-details.html" class="thumbnail"><img src="{{ asset('assets/theme/images/advertiseGrid/img4.jpg') }}" alt="#"></a>
                            <div class="author">
                                <div class="author-image">
                                    <a href="#"><img src="{{ asset('assets/theme/images/advertiseGrid/author-4.jpg') }}" alt="#">
                                        <span>Jesia Jully</span></a>
                                </div>
                                <p class="sale">For Sale</p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <a href="#" class="tag">Vehicles</a>
                                <h3 class="title">
                                    <a href="ads-details.html">BMW 5 Series GT Car</a>
                                </h3>
                                <p class="update-time">Last Updated: 4 hours ago</p>
                                <ul class="rating">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><a href="#">(35)</a></li>
                                </ul>
                                <ul class="info-list">
                                    <li><a href="#"><i class="lni lni-map-marker"></i> New York, US</a></li>
                                    <li><a href="#"><i class="lni lni-timer"></i> Apr 12, 2023</a></li>
                                </ul>
                            </div>
                            <div class="bottom-content">
                                <p class="price">Start From: <span>$1000.00</span></p>
                                <a href="#" class="like"><i class="lni lni-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Grid -->
                    <div class="single-grid wow fadeInUp" data-wow-delay=".4s">
                        <div class="image">
                            <a href="ads-details.html" class="thumbnail"><img src="{{ asset('assets/theme/images/advertiseGrid/img5.jpg') }}" alt="#"></a>
                            <div class="author">
                                <div class="author-image">
                                    <a href="#"><img src="{{ asset('assets/theme/images/advertiseGrid/author-5.jpg') }}" alt="#">
                                        <span>Thomas Deco</span></a>
                                </div>
                                <p class="sale">For Sale</p>
                            </div>
                            <p class="item-position"><i class="lni lni-bolt"></i> Featured</p>
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <a href="#" class="tag">Apple</a>
                                <h3 class="title">
                                    <a href="ads-details.html">Apple Macbook Pro 13 Inch</a>
                                </h3>
                                <p class="update-time">Last Updated: 5 hours ago</p>
                                <ul class="rating">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><a href="#">(35)</a></li>
                                </ul>
                                <ul class="info-list">
                                    <li><a href="#"><i class="lni lni-map-marker"></i> Louis, Missouri, US</a></li>
                                    <li><a href="#"><i class="lni lni-timer"></i> May 25, 2023</a></li>
                                </ul>
                            </div>
                            <div class="bottom-content">
                                <p class="price">Start From: <span>$550.00</span></p>
                                <a href="#" class="like"><i class="lni lni-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Grid -->
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <!-- Start Single Grid -->
                    <div class="single-grid wow fadeInUp" data-wow-delay=".6s">
                        <div class="image">
                            <a href="ads-details.html" class="thumbnail"><img src="{{ asset('assets/theme/images/advertiseGrid/img6.jpg') }}" alt="#"></a>
                            <div class="author">
                                <div class="author-image">
                                    <a href="#"><img src="{{ asset('assets/theme/images/advertiseGrid/author-6.jpg') }}" alt="#">
                                        <span>Jonson zack</span></a>
                                </div>
                                <p class="sale">For Sale</p>
                            </div>
                        </div>
                        <div class="content">
                            <div class="top-content">
                                <a href="#" class="tag">Restaurant</a>
                                <h3 class="title">
                                    <a href="ads-details.html">Cream Restaurant</a>
                                </h3>
                                <p class="update-time">Last Updated: 7 hours ago</p>
                                <ul class="rating">
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><i class="lni lni-star-filled"></i></li>
                                    <li><a href="#">(20)</a></li>
                                </ul>
                                <ul class="info-list">
                                    <li><a href="#"><i class="lni lni-map-marker"></i> New York, US</a></li>
                                    <li><a href="#"><i class="lni lni-timer"></i> Feb 18, 2023</a></li>
                                </ul>
                            </div>
                            <div class="bottom-content">
                                <p class="price">Start From: <span>$500.00</span></p>
                                <a href="#" class="like"><i class="lni lni-heart"></i></a>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Grid -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Ads Grid Area -->

<!-- Start Why Choose Area -->
<section class="why-choose section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Why Choose Us</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="choose-content">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Single List -->
                            <div class="single-list wow fadeInUp" data-wow-delay=".2s">
                                <i class="lni lni-book"></i>
                                <h4>Fully Documented</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>
                            <!-- Start Single List -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Single List -->
                            <div class="single-list wow fadeInUp" data-wow-delay=".4s">
                                <i class="lni lni-leaf"></i>
                                <h4>Clean & Modern Design</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>
                            <!-- Start Single List -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Single List -->
                            <div class="single-list wow fadeInUp" data-wow-delay=".6s">
                                <i class="lni lni-cog"></i>
                                <h4>Completely Customizable</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>
                            <!-- Start Single List -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Single List -->
                            <div class="single-list wow fadeInUp" data-wow-delay=".2s">
                                <i class="lni lni-pointer-up"></i>
                                <h4>User Friendly</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>
                            <!-- Start Single List -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Single List -->
                            <div class="single-list wow fadeInUp" data-wow-delay=".4s">
                                <i class="lni lni-layout"></i>
                                <h4>Awesome Layout</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>
                            <!-- Start Single List -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Start Single List -->
                            <div class="single-list wow fadeInUp" data-wow-delay=".6s">
                                <i class="lni lni-laptop-phone"></i>
                                <h4>Fully Responsive</h4>
                                <p>Buy and sell everything from used cars to mobile phones and computer or search
                                    for property.</p>
                            </div>
                            <!-- Start Single List -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /End Why Choose Area -->

<!-- Start Call Action Area -->
<section class="call-action overlay section">
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 offset-lg-2 col-12">
                <div class="inner">
                    <div class="content">
                        <h2 class="wow fadeInUp" data-wow-delay=".4s">Currently You are using free<br>
                            Lite version of ClassiGrids</h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">Please, purchase full version of the template to get all pages,<br> features and commercial license.</p>
                        <div class="button wow fadeInUp" data-wow-delay=".8s">
                            <a href="#" class="btn">Purchase Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Call Action Area -->

<!-- Start Pricing Table Area -->
<section class="pricing-table section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">Pricing Plan</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".2s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="price">
                            <h2 class="amount">$00<span class="duration">/ Month</span></h2>
                        </div>
                        <h4 class="title">Free</h4>
                    </div>
                    <!-- End Table Head -->
                    <!-- Table List -->
                    <ul class="table-list">
                        <li>One Listing</li>
                        <li>Contact Display</li>
                        <li>Image Gallery</li>
                        <li>30 Days Availablity</li>
                        <li>Non-Featured</li>
                        <li>Business Tagline</li>
                    </ul>
                    <!-- End Table List -->
                    <!-- Table Bottom -->
                    <div class="button">
                        <a class="btn" href="#">Select Plan</a>
                    </div>
                    <!-- End Table Bottom -->
                </div>
                <!-- End Single Table-->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".4s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="price">
                            <h2 class="amount">$59<span class="duration">/ Month</span></h2>
                        </div>
                        <h4 class="title">Standard</h4>
                    </div>
                    <!-- End Table Head -->
                    <!-- Table List -->
                    <ul class="table-list">
                        <li>One Listing</li>
                        <li>Contact Display</li>
                        <li>Image Gallery</li>
                        <li>60 Days Availablity</li>
                        <li>Non-Featured</li>
                        <li>Business Tagline</li>
                    </ul>
                    <!-- End Table List -->
                    <!-- Table Bottom -->
                    <div class="button">
                        <a class="btn" href="#">Select Plan</a>
                    </div>
                    <!-- End Table Bottom -->
                </div>
                <!-- End Single Table-->
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <!-- Single Table -->
                <div class="single-table wow fadeInUp" data-wow-delay=".6s">
                    <!-- Table Head -->
                    <div class="table-head">
                        <div class="price">
                            <h2 class="amount">$99<span class="duration">/ Month</span></h2>
                        </div>
                        <h4 class="title">Premium</h4>
                    </div>
                    <!-- End Table Head -->
                    <!-- Table List -->
                    <ul class="table-list">
                        <li>One Listing</li>
                        <li>Contact Display</li>
                        <li>Image Gallery</li>
                        <li>90 Days Availablity</li>
                        <li>Non-Featured</li>
                        <li>Business Tagline</li>
                    </ul>
                    <!-- End Table List -->
                    <!-- Table Bottom -->
                    <div class="button">
                        <a class="btn" href="#">Select Plan</a>
                    </div>
                    <!-- End Table Bottom -->
                </div>
                <!-- End Single Table-->
            </div>
        </div>
    </div>
</section>
<!--/ End Pricing Table Area -->

<!-- Start How Works Area -->
<section class="how-works section" style="background-color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-title">
                    <h2 class="wow fadeInUp" data-wow-delay=".4s">How it Works</h2>
                    <p class="wow fadeInUp" data-wow-delay=".6s">There are many variations of passages of Lorem
                        Ipsum available, but the majority have suffered alteration in some form.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-12">
                <!-- Start Single Work -->
                <div class="single-work wow fadeInUp" data-wow-delay=".2s">
                    <span class="serial">01</span>
                    <h3>Create Account</h3>
                    <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                </div>
                <!-- End Single Work -->
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <!-- Start Single Work -->
                <div class="single-work wow fadeInUp" data-wow-delay=".4s">
                    <span class="serial">02</span>
                    <h3>Post Your Ads</h3>
                    <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                </div>
                <!-- End Single Work -->
            </div>
            <div class="col-lg-4 col-md-4 col-12">
                <!-- Start Single Work -->
                <div class="single-work wow fadeInUp" data-wow-delay=".6s">
                    <span class="serial">03</span>
                    <h3>Sell Your Item</h3>
                    <p>Lorem ipsum dolor sit amet constur adipisicing sed do eiusmod tempor incididunt labore.</p>
                </div>
                <!-- End Single Work -->
            </div>
        </div>
    </div>
</section>
<!-- End How Works Area -->

<!-- Start Newsletter Area -->
<div class="newsletter section">
    <div class="container">
        <div class="inner-content">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="title">
                        <i class="lni lni-alarm"></i>
                        <h2>Newsletter</h2>
                        <p>We don't send spam so don't worry.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="form">
                        <form action="#" method="get" target="_blank" class="newsletter-form">
                            <input name="EMAIL" placeholder="Your email address" type="email">
                            <div class="button">
                                <button class="btn">Subscribe<span class="dir-part"></span></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Newsletter Area -->
@endsection