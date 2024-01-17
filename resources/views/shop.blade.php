<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/pander/pander-v3/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:55 GMT -->
@include('template.css')

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
        <!-- Main Header Area Start Here -->
        @include('template.header')
        <!-- Main Header Area End Here -->
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item active">Shop</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Shop Page Start -->
        <div class="main-shop-page white-bg ptb-90">
            <div class="container">
                <!-- Row End -->
                <div class="row flex-row-reverse">
                    <!-- Product Categorie List Start -->
                    <div class="col-lg-9">
                        <div class="shop-banner mb-40">
                            <a href="{{url('shop')}}"><img src="img/banner/b18.jpg" alt="banner-img"></a>
                        </div>
                        <!-- Grid & List View Start -->
                        <div class="grid-list-top border-default universal-padding d-md-flex justify-content-md-between align-items-center mb-30">
                            <div class="grid-list-view d-flex align-items-center  mb-sm-15">
                                <ul class="nav tabs-area d-flex align-items-center">
                                    <li><a class="active" data-bs-toggle="tab" href="#grid-view"><i class="fa fa-th"></i></a></li>
                                    <li><a data-bs-toggle="tab" href="#list-view"><i class="fa fa-list-ul"></i></a></li>
                                </ul>
                                <span class="show-items">There are 8 products.</span>
                            </div>
                            <!-- Toolbar Short Area Start -->
                            <div class="main-toolbar-sorter clearfix">
                                <div class="toolbar-sorter d-md-flex align-items-center">
                                    <label>Sort By:</label>
                                    <select class="sorter wide">
                                        <option value="Position">Relevance</option>
                                        <option value="Product Name">Neme, A to Z</option>
                                        <option value="Product Name">Neme, Z to A</option>
                                        <option value="Price">Price low to heigh</option>
                                        <option value="Price">Price heigh to low</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Toolbar Short Area End -->
                        </div>
                        <!-- Grid & List View End -->
                        <div class="shop-area mb-all-40">
                            <!-- Grid & List Main Area End -->
                            <div class="tab-content">
                                <div id="grid-view" class="tab-pane fade show active">
                                    <div class="row border-hover-effect ">
                                        <div class="col-lg-4 col-md-4 col-sm-6 col-6">
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
                                        </div>
                                    </div>
                                    <!-- Row End -->
                                </div>
                                <!-- #grid view End -->
                                <div id="list-view" class="tab-pane fade">
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
                                            <p><span class="price">$55.50</span><span class="prev-price">$59.50</span></p>
                                            <p>Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!</p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                    <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
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
                                                    <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                    <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p3.jpg" alt="product-img"></a>
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
                                            <h4 class="pro-title"><a href="{{url('product-details')}}">Voyage Yoga Bag</a></h4>
                                            <p><span class="price">$61.21</span><span class="prev-price">$64.50</span></p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                    <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->

                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p4.jpg" alt="product-img"></a>
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
                                            <h4 class="pro-title"><a href="{{url('product-details')}}">Fusion Backpack</a></h4>
                                            <p><span class="price">$72.50</span></p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                    <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p5.jpg" alt="product-img"></a>
                                            <span class="sticker-new">new</span>
                                            <div class="quick-view-pro">
                                                <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                            </div>
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
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                    <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p6.jpg" alt="product-img"></a>
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
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="pro-title"><a href="{{url('product-details')}}">Field Messenger</a></h4>
                                            <p><span class="price">$55.50</span><span class="prev-price">$59.50</span></p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                    <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p12.jpg" alt="product-img"></a>
                                            <span class="sticker-new">new</span>
                                            <div class="quick-view-pro">
                                                <a data-bs-toggle="modal" data-bs-target="#product-window" class="quick-view" href="#"></a>
                                            </div>
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
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                    <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                    <!-- Single Product Start Here -->
                                    <div class="single-pander-product">
                                        <div class="pro-img">
                                            <a href="{{url('product-details')}}"><img src="img/products/p10.jpg" alt="product-img"></a>
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
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                            </div>
                                            <h4 class="pro-title"><a href="{{url('product-details')}}">Field Messenger</a></h4>
                                            <p><span class="price">$55.50</span><span class="prev-price">$59.50</span></p>
                                            <div class="pro-actions">
                                                <div class="actions-primary">
                                                    <a href="cart.html" class="add-to-cart" data-bs-toggle="tooltip" data-bs-title="Add to Cart">Add To Cart</a>
                                                </div>
                                                <div class="actions-secondary">
                                                    <a class="cart-wishlist" href="wishlist.html" data-bs-toggle="tooltip" data-bs-title="Add to Wishlist"></a>
                                                    <a class="cart-compare" href="compare.html" data-bs-toggle="tooltip" data-bs-title="Add to Compare"></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Product End Here -->
                                </div>
                                <!-- #list view End -->
                            </div>
                            <!-- Grid & List Main Area End -->
                        </div>
                        <!-- Shop Breadcrumb Area Start -->
                        <div class="shop-breadcrumb-area border-default mt-40">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-5">
                                    <span class="show-items">Showing 1-12 of 13 item(s) </span>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-7">
                                    <ul class="pfolio-breadcrumb-list text-center">
                                        <li class="float-left prev"><a href="#"><i class="fa fa-angle-left" aria-hidden="true"></i>Previous</a></li>
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li class="float-right next"><a href="#">Next<i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Shop Breadcrumb Area End -->
                    </div>
                    <!-- product Categorie List End -->
                    <!-- Sidebar Shopping Option Start -->
                    <div class="col-lg-3 mt-all-40">
                        <div class="sidebar">
                            <!-- Price Filter Options Start -->
                            <div class="search-filter mb-30">
                                <h3 class="sidebar-title">filter by price</h3>
                                <form action="#" class="slider-sidebar">
                                    <div id="slider-range"></div>
                                    <input type="text" id="amount" class="amount-range" readonly>
                                </form>
                            </div>
                            <!-- Price Filter Options End -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">categories</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="camera" type="checkbox">
                                        <label class="form-check-label" for="camera">Cameras (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="GamePad" type="checkbox">
                                        <label class="form-check-label" for="GamePad">GamePad (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Digital" type="checkbox">
                                        <label class="form-check-label" for="Digital">Digital Cameras (8)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" id="Virtual" type="checkbox">
                                        <label class="form-check-label" for="Virtual"> Virtual Reality (8) </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                            <!-- Product Size Start -->
                            <div class="size mb-30">
                                <h3 class="sidebar-title">size</h3>
                                <ul class="size-list sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="small" type="checkbox">
                                        <label class="form-check-label" for="small">S (6)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="medium" type="checkbox">
                                        <label class="form-check-label" for="medium">M (9)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="" id="large" type="checkbox">
                                        <label class="form-check-label" for="large">L (8)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Size End -->
                            <!-- Product Color Start -->
                            <div class="color mb-30">
                                <h3 class="sidebar-title">color</h3>
                                <ul class="color-option sidbar-style">
                                    <li>
                                        <span class="white"></span>
                                        <a href="#">white (4)</a>
                                    </li>
                                    <li>
                                        <span class="orange"></span>
                                        <a href="#">Orange (2)</a>
                                    </li>
                                    <li>
                                        <span class="blue"></span>
                                        <a href="#">Blue (6)</a>
                                    </li>
                                    <li>
                                        <span class="yellow"></span>
                                        <a href="#">Yellow (8)</a>
                                    </li>
                                    <li>
                                        <span class="black"></span>
                                        <a href="#">black (6)</a>
                                    </li>
                                    <li>
                                        <span class="biege"></span>
                                        <a href="#">biege (2)</a>
                                    </li>
                                    <li>
                                        <span class="green"></span>
                                        <a href="#">green (11)</a>
                                    </li>
                                    <li>
                                        <span class="pink"></span>
                                        <a href="#">pink (8)</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Product Color End -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">Components</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">cotton (4)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">polyester (4)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">Viscose (5)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie mb-30">
                                <h3 class="sidebar-title">Styles</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">casual (5)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">dressy (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">girly (8)</label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                            <!-- Sidebar Categorie Start -->
                            <div class="sidebar-categorie">
                                <h3 class="sidebar-title">Properties</h3>
                                <ul class="sidbar-style">
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">colorful dress (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">maxi dress (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">midi dress (2)</label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">short dress (4) </label>
                                    </li>
                                    <li class="form-check">
                                        <input class="form-check-input" value="#" type="checkbox">
                                        <label class="form-check-label">short sleve (3) </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Categorie Start -->
                        </div>
                        <!-- Single Banner Start -->
                        <div class="sidebar-banner mt-30">
                            <a href="shop.html"><img class="ful" src="img/banner/b14.jpg" alt="slider-banner"></a>
                        </div>
                        <!-- Single Banner End -->
                    </div>
                    <!-- Sidebar Shopping Option End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        @include('template.footer')
    <!-- Main Wrapper End Here -->

    @include('template.jquery')
</body>


<!-- Mirrored from htmldemo.net/pander/pander-v3/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:55 GMT -->
</html>