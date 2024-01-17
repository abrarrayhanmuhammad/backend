<!doctype html>
<html class="no-js" lang="zxx">
@include('template.css')
<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    {{-- <div class="wrapper">
        <!-- Newsletter Popup Start -->
        <div class="popup_wrapper">
            <div class="test">
                <span class="popup_off">Close</span>
                <div class="subscribe_area text-center mt-40">
                    <h2>Newsletter</h2>
                    <p>Subscribe to the Volga mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                    <div class="subscribe-form-group">
                        <form action="#">
                            <input autocomplete="off" type="text" name="message" id="message" placeholder="Enter your email address">
                            <button type="submit">subscribe</button>
                        </form>
                    </div>
                    <div class="subscribe-bottom mt-15">
                        <input type="checkbox" id="newsletter-permission">
                        <label for="newsletter-permission">Don't show this popup again</label>
                    </div>
                </div>
            </div>
        </div>
         --}}
         @include('template.header')
        <div class="support-area  ptb-30">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="single-support d-flex align-items-center">
                        <div class="support-icon">
                            <img src="img/support/s1.png" alt="support-icon">
                        </div>
                        <div class="support-desc">
                            <h6>Free shipping item</h6>
                            <span>For all orders over $500</span>
                        </div>
                    </div>
                    <div class="single-support d-flex align-items-center">
                        <div class="support-icon">
                            <img src="img/support/s2.png" alt="support-icon">
                        </div>
                        <div class="support-desc">
                            <h6>Money back guarantee</h6>
                            <span>100% money back guarante</span>
                        </div>
                    </div>
                    <div class="single-support d-flex align-items-center">
                        <div class="support-icon">
                            <img src="img/support/s3.png" alt="support-icon">
                        </div>
                        <div class="support-desc">
                            <h6>Cash on delivery</h6>
                            <span>Lorem ipsum dolor amet</span>
                        </div>
                    </div>
                    <div class="single-support d-flex align-items-center">
                        <div class="support-icon">
                            <img src="img/support/s4.png" alt="support-icon">
                        </div>
                        <div class="support-desc">
                            <h6>Help & Support</h6>
                            <span>Call us : + 0123.4567.89</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Support Area End Here -->

        <!-- Slider Area Start -->
        <div class="slider-area">
            <!-- Slider Area Start Here -->
            <div class="slider-activation owl-carousel">
                <!-- Start Single Slide -->
                <div class="slide align-center-left fullscreen animation-style-01 bg-image-1 ">
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slider-content">
                                    <h1>Armchair sale 25% Off</h1>
                                    <h2>Furniture Brand 2018</h2>
                                    <p>Everything Needs To Get Started With Furniture Design</p>
                                    <div class="slide-btn">
                                        <a href="{{url('shop')}}">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
                <!-- Start Single Slide -->
                <div class="slide align-center-left fullscreen animation-style-02 bg-image-2">
                    <div class="slider-progress"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="slider-content">
                                    <h1>scandinavian lighting</h1>
                                    <h2>For Your Family</h2>
                                    <p>Everything Needs To Get Started With Furniture Design</p>
                                    <div class="slide-btn">
                                        <a href="{{url('shop')}}">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Single Slide -->
            </div>
            <!-- Slider Area End Here -->
        </div>
        <!-- Slider Area End -->

        <!-- Our Product Area Start Here -->
        <div class="our-product pt-90">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2>our products</h2>
                    <p>Browse the collection of our products and top interresting products.ll definitely find what you are looking for.</p>
                </div>
                <!-- Section Title End -->
                <div class="main-product-tab-area">
                    <!-- Nav tabs -->
                    <ul class="nav tabs-area pro-tabs-area" role="tablist">
                        <li class="nav-item">
                            <a class="active" data-bs-toggle="tab" href="#furniture">funiture</a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#lighting">lighting</a>
                        </li>
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#rooms">rooms</a>
                        </li>
                    </ul>
                    <!-- Tab Contetn Start -->
                    <div class="tab-content">
                        <div id="furniture" class="tab-pane fade active show">
                            <!-- Furniture Product Activation Start Here -->
                            <div class="our-pro-active owl-carousel">
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="{{url('product-details')}}"><img src="img/products/p1.jpg" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="{{url('product-details')}}">Chaz Kangeroo Hoodie</a></h4>
                                        <p><span class="price">$45.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{url('cart')}}" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="{{url('compare')}}" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Furniture Product Activation End Here -->
                        </div>
                        <!-- #furniture End Here -->
                        <div id="lighting" class="tab-pane fade">
                            <!-- Lighting Product Activation Start Here -->
                            <div class="our-pro-active owl-carousel">
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="{{url('product-details')}}"><img src="img/products/p7.jpg" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="{{url('product-details')}}">Sprite Yoga Straps1</a></h4>
                                        <p><span class="price">$45.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{url('cart')}}" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="{{url('compare')}}" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Single Product End Here -->
                            </div>
                            <!-- Lighting Product Activation End Here -->
                        </div>
                        <!-- #lighting End Here -->
                        <div id="rooms" class="tab-pane fade">
                            <!-- Rooms Product Activation Start Here -->
                            <div class="our-pro-active owl-carousel">
                                <!-- Single Product Start Here -->
                                <div class="single-pander-product">
                                    <div class="pro-img">
                                        <a href="{{url('product-details')}}l"><img src="img/products/p4.jpg" alt="product-img"></a>
                                        <span class="sticker-new">new</span>
                                        <div class="quick-view-pro">
                                            <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                        </div>
                                    </div>
                                    <div class="pro-content">
                                        <div class="rating">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                        </div>
                                        <h4 class="pro-title"><a href="{{url('product-details')}}">Chaz Kangeroo Hoodie</a></h4>
                                        <p><span class="price">$45.50</span></p>
                                        <div class="pro-actions">
                                            <div class="actions-primary">
                                                <a href="{{url('cart')}}" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                            </div>
                                            <div class="actions-secondary">
                                                <a class="cart-wishlist" href="{{url('pwishlist')}}l" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                <a class="cart-compare" href="{{url('compare')}}" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Single Product End Here -->
                            </div>
                            <!-- Rooms Product Activation End Here -->
                        </div>
                        <!-- #rooms End Here -->
                    </div>
                    <!-- Tab Content End -->
                </div>
                <!-- main-product-tab-area-->
            </div>
        </div>
        <!-- Our Product Area End Here -->
        <!-- Big Banner Area Start Here -->
        <div class="big-banner pt-90">
            <div class="container">
                <div class="zoom">
                    <a href="{{url('shop')}}"><img src="img/banner/b1.jpg" alt="banner-img"></a>
                </div>
            </div>
        </div>
        <!-- Big Banner Area End Here -->
        <!-- Best Selling Area Start Here -->
        <div class="best-selling-pro pt-90">
            <div class="container">
                <div class="best-selling-inner">
                    <div class="row">
                        <div class="col-lg-8 mb-all-40">
                            <div class="best-selling-left">
                                <div class="best-selling-desc">
                                    <h6>Chair best selling</h6>
                                    <h2>Dining <span>Chairs</span></h2>
                                    <p class="pro-code">Use Code: <span>#00147 Pander</span></p>
                                    <p>Vestibulum porttitor iaculis gravida. Praesent vestibulum varius placerat. Cras tempor congue neque, id aliquam orci finibus sit amet. Fusce at facilisis arcu. Donec aliquet nulla id turpis semper, a bibendum metus
                                        vulputate. Suspendisse potenti.Cras tempor congue neque, id aliquam orci finibus sit amet. Fusce at facilisis arcu.</p>
                                </div>
                                <div class="best-selling-img">
                                    <img src="img/banner/b2.jpg" alt="banner-img">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="best-selling-active owl-carousel">
                                <!-- Dual Product Start Here -->
                                <div class="best-dual-pro">
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p7.jpg" alt="product-img"></a>
                                            <span class="sticker-new">new</span>
                                        </div>
                                        <div class="pro-content">
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="pro-title"><a href="{{url('product-details')}}">Sprite Yoga Straps1</a></h4>
                                            <p><span class="price">$45.50</span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p6.jpg" alt="product-img"></a>
                                            <span class="sticker-new">new</span>
                                            <span class="sticker-sale">-5%</span>
                                        </div>
                                        <div class="pro-content">
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="pro-title"><a href="{{url('product-details')}}">Chaz Kangeroo Hoodie </a></h4>
                                            <p><span class="price">$65.00</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Best Selling Area End Here -->
        <!-- New Arrival Products Start Here -->
        <div class="new-arrival no-border-style ptb-90">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2>new arrivals</h2>
                    <p>Browse the collection of our products and top interresting products.ll definitely find what you are looking for.</p>
                </div>
                <!-- Section Title End -->
                <div class="our-pro-active owl-carousel">
                    <!-- New Arrival Dual Products Start Here -->
                    <div class="dual-pro">
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="{{url('product-details')}}"><img src="img/products/p1.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <div class="quick-view-pro">
                                    <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="{{url('product-details')}}">Chaz Kangeroo Hoodie</a></h4>
                                <p><span class="price">$45.50</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="{{url('cart')}}" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="{{url('compare')}}" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                        <!-- Single Product Start Here -->
                        <div class="single-pander-product">
                            <div class="pro-img">
                                <a href="{{url('product-details')}}"><img src="img/products/p2.jpg" alt="product-img"></a>
                                <span class="sticker-new">new</span>
                                <span class="sticker-sale">-5%</span>
                                <div class="quick-view-pro">
                                    <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                </div>
                            </div>
                            <div class="pro-content">
                                <div class="rating">
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                    <i class="fa fa-star-o" aria-hidden="true"></i>
                                </div>
                                <h4 class="pro-title"><a href="{{url('product-details')}}">Sprite Yoga Straps1</a></h4>
                                <p><span class="price">$65.00</span></p>
                                <div class="pro-actions">
                                    <div class="actions-primary">
                                        <a href="{{url('cart')}}" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                    </div>
                                    <div class="actions-secondary">
                                        <a class="cart-wishlist" href="{{url('wishlist')}}" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                        <a class="cart-compare" href="{{url('compare')}}" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Product End Here -->
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- New Arrival Products End Here -->
        <!-- New Product Banner Start Here -->
        <div class="product-bannner bg-image-3 ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 mb-sm-30">
                        <div class="single-banner zoom">
                            <a href="{{url('shop')}}"><img src="img/banner/b4.jpg" alt="banner-img"></a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="single-banner zoom">
                            <a href="{{url('shop')}}"><img src="img/banner/b5.jpg" alt="banner-img"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- New Product Banner End Here -->
        <!-- Recent Featrued Product Start Here -->
        <div class="recent-featured-pro ptb-90">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 mb-all-40">
                        <div class="featured-inner-pro">
                            <h3 class="pro-inner-title">recent</h3>
                            <div class="featured-inner-active owl-carousel">
                                <!-- Tripple Product Start Here -->
                                <div class="tripple-pro">
                                    <!-- Single Product DESKTOP Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p5.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="pro-title"><a href="{{url('product-details')}}">Chaz Kangeroo Hoodie</a></h4>
                                            <p><span class="price">$45.50</span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                </div>
                                <!-- Tripple Product End Here -->
                                <!-- Tripple Product Start Here -->
                                <div class="tripple-pro">
                                    <!-- Single Product MOBILE Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p5.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="pro-title"><a href="{{url('product-details')}}">Impulse Duffle</a></h4>
                                            <p><span class="price">$45.50</span><span class="prev-price">$30.50</span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                </div>
                                <!-- Tripple Product End Here -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 mb-all-40">
                        <div class="featured-inner-pro">
                            <h3 class="pro-inner-title">featured </h3>
                            <div class="featured-inner-active owl-carousel">
                                <!-- Tripple Product Start Here -->
                                <div class="tripple-pro">
                                    <!-- Single Product DESKTOP Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p1.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="pro-title"><a href="{{url('product-details')}}">Chaz Kangeroo Hoodie</a></h4>
                                            <p><span class="price">$45.50</span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                </div>
                                <!-- Tripple Product End Here -->
                                <!-- Tripple Product Start Here -->
                                <div class="tripple-pro">
                                    <!-- Single Product MOBILE Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p4.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="pro-title"><a href="{{url('product-details')}}">Impulse Duffle</a></h4>
                                            <p><span class="price">$45.50</span><span class="prev-price">$30.50</span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                </div>
                                <!-- Tripple Product End Here -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 mb-all-40">
                        <div class="featured-inner-pro">
                            <h3 class="pro-inner-title">On Sale</h3>
                            <div class="featured-inner-active owl-carousel">
                                <!-- Tripple Product Start Here -->
                                <div class="tripple-pro">
                                    <!-- Single Product DESKTOP Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p7.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="pro-title"><a href="{{url('product-details')}}">Chaz Kangeroo Hoodie</a></h4>
                                            <p><span class="price">$45.50</span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                </div>
                                <!-- Tripple Product End Here -->
                                <!-- Tripple Product Start Here -->
                                <div class="tripple-pro">
                                    <!-- Single Product MOBILE Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p5.jpg" alt="product-img"></a>
                                        </div>
                                        <div class="pro-content">
                                            <div class="rating">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="pro-title"><a href="{{url('product-details')}}l">Impulse Duffle</a></h4>
                                            <p><span class="price">$45.50</span><span class="prev-price">$30.50</span></p>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                </div>
                                <!-- Tripple Product End Here -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3">
                        <div class="newsletter-option text-center bg-image-4">
                            <h3 class="nesletter-header">Sign up for send newsletter</h3>
                            <p>You can be always up to date with our company new!</p>
                            <div class="newsletter-box">
                                <form action="#">
                                    <input class="subscribe" placeholder="Enter your email address" name="email" id="subscribe" type="text">
                                    <button type="submit" class="submit">send email</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Recent Featrued Product End Here -->
        <!-- Testmonial Start Here -->
        <div class="testmonial bg-image-5 ptb-100 bg-opacity-black-50">
            <div class="container">
                <div class="testmonial-active owl-carousel">
                    <!-- Single Slide Testmonial Start -->
                    <div class="single-testmonial text-center">
                        <div class="testmonial-img"></div>
                        <div class="testmonial-content">
                            <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
                            <div class="info">
                                <p><a href="#" class="name">Stefano</a><span class="user">User</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slide Testmonial End -->
                    <!-- Single Slide Testmonial Start -->
                    <div class="single-testmonial text-center">
                        <div class="testmonial-img"></div>
                        <div class="testmonial-content">
                            <p>I'm so happy with all of the themes, great support, could not wish for more. These people are geniuses ! Kudo's from the Netherlands !</p>
                            <div class="info">
                                <p><a href="#" class="name">Sandy Wilcke</a><span class="user">User</span></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Slide Testmonial End -->
                </div>
            </div>
        </div>
        <!-- Testmonial End Here -->
        <!-- Blog Area Start Here -->
        <div class="blog-area ptb-90">
            <div class="container">
                <div class="main-blog-area">
                    <!-- Section Title Start -->
                    <div class="section-title text-center">
                        <h2>Recent blog</h2>
                        <p>Typi non habent claritatem insitam est usus legentis in iis qui facit eorum claritatem</p>
                    </div>
                    <!-- Section Title End -->
                    <!-- Blog Activation Start -->
                    <div class="blog-activation owl-carousel">
                        <!-- Single Blog Start -->
                        <div class="single-blog">
                            <div class="blog-img">
                                <a href="{{url('blog-details')}}"><img src="img/blog/blg1.jpg" alt="blog-img"></a>
                                <div class="entry-meta">
                                    <div class="date">
                                        <p>17</p>
                                        <span>dec</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h4><a href="{{url('blog-details')}}">The History and the Hype</a></h4>
                                <ul class="meta-box">
                                    <li class="meta-date"><span><i class="fa fa-calendar" aria-hidden="true"></i>dec 17, 2018</span></li>
                                    <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">By pander</a></li>
                                </ul>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since ...</p>
                                <a href="{{url('blog-details')}}" class="blg-readmore">Read More</a>
                            </div>
                        </div>
                        <!-- Single Blog End -->
                    </div>
                    <!-- Blog Activation End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
        @include('template.footer')
        <div class="main-product-thumbnail quick-thumb-content">
            <div class="container">
                <!-- The Modal -->
                <div class="modal fade" id="product-window">
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <button type="button" class="btn-close" data-bs-dismiss="modal">&times;</button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <div class="row">
                                    <!-- Main Thumbnail Image Start -->
                                    <div class="col-lg-6 col-md-6 mb-all-40">
                                        <!-- Thumbnail Large Image start -->
                                        <div class="tab-content">
                                            <div id="pro-1" class="tab-pane fade show active">
                                                <a data-fancybox="images" href="img/products/p2.jpg"><img src="img/products/p2.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="pro-2" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/products/p5.jpg"><img src="img/products/p5.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="pro-3" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/products/p3.jpg"><img src="img/products/p3.jpg" alt="product-view"></a>
                                            </div>
                                            <div id="pro-4" class="tab-pane fade">
                                                <a data-fancybox="images" href="img/products/p7.jpg"><img src="img/products/p7.jpg" alt="product-view"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail Large Image End -->
                                        <!-- Thumbnail Image End -->
                                        <div class="product-thumbnail">
                                            <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                                <a class="active" data-bs-toggle="tab" href="#pro-1"><img src="img/thumbnail/t1.jpg" alt="product-thumbnail"></a>
                                                <a data-bs-toggle="tab" href="#pro-2"><img src="img/thumbnail/t2.jpg" alt="product-thumbnail"></a>
                                                <a data-bs-toggle="tab" href="#pro-3"><img src="img/thumbnail/t3.jpg" alt="product-thumbnail"></a>
                                                <a data-bs-toggle="tab" href="#pro-4"><img src="img/thumbnail/t4.jpg" alt="product-thumbnail"></a>
                                            </div>
                                        </div>
                                        <!-- Thumbnail image end -->
                                    </div>
                                    <!-- Main Thumbnail Image End -->
                                    <!-- Thumbnail Description Start -->
                                    <div class="col-lg-6 col-md-6">
                                        <div class="thubnail-desc fix">
                                            <h3 class="product-header">Faded Short Sleeves T-shirt</h3>
                                            <ul class="rating-summary">
                                                <li class="rating-pro">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </li>
                                                <li class="read-review"><a href="#">read reviews (1)</a></li>
                                                <li class="write-review"><a href="#">write review</a></li>
                                            </ul>
                                            <div class="pro-thumb-price mt-10">
                                                <p class="d-flex align-items-center"><span class="prev-price">16.51</span><span class="price">$15.19</span><span class="saving-price">-5%</span></p>
                                            </div>
                                            <p class="pro-desc-details">Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                            <div class="product-size mtb-30 clearfix">
                                                <label>Size</label>
                                                <select class="">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                </select>
                                            </div>
                                            <div class="color clearfix mb-30">
                                                <label>color</label>
                                                <ul class="color-list">
                                                    <li>
                                                        <a class="white" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="orange active" href="#"></a>
                                                    </li>
                                                    <li>
                                                        <a class="paste" href="#"></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="quatity-stock">
                                                <label>Quantity</label>
                                                <ul class="d-flex flex-wrap  align-items-center">
                                                    <li class="box-quantity">
                                                        <form action="#">
                                                            <input class="quantity" type="number" min="1" value="1">
                                                        </form>
                                                    </li>
                                                    <li>
                                                        <button class="pro-cart">add to cart</button>
                                                    </li>
                                                    <li class="pro-ref">
                                                        <p><span class="in-stock"><i class="ion-checkmark-round"></i> in stock</span></p>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="social-sharing mt-30">
                                                <ul>
                                                    <li><label>share</label></li>
                                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Thumbnail Description End -->
                                </div>
                            </div>
                            <!-- Modal footer -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Quick View Content End -->
    </div>
    <!-- Main Wrapper End Here -->
    @include('template.jquery')
    
</body>


<!-- Mirrored from htmldemo.net/pander/pander-v3/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:32 GMT -->
</html>