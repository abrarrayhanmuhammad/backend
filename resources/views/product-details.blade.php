<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/pander/pander-v3/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:55 GMT -->
<head>
    @include('template.css')
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
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
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('shop')}}">Shop</a></li>
                    <li class="breadcrumb-item active">Product Details</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Product Thumbnail Start -->
        <div class="main-product-thumbnail white-bg ptb-90">
            <div class="container">
                <div class="row">
                    <!-- Main Thumbnail Image Start -->
                    <div class="col-lg-5 col-md-6 mb-all-40">
                        <!-- Thumbnail Large Image start -->
                        <div class="tab-content">
                            <div id="thumb1" class="tab-pane fade show active">
                                <a data-fancybox="images" href="img/products/p2.jpg"><img src="img/products/p2.jpg" alt="product-view"></a>
                            </div>
                            <div id="thumb2" class="tab-pane fade">
                                <a data-fancybox="images" href="img/products/p5.jpg"><img src="img/products/p5.jpg" alt="product-view"></a>
                            </div>
                            <div id="thumb3" class="tab-pane fade">
                                <a data-fancybox="images" href="img/products/p3.jpg"><img src="img/products/p3.jpg" alt="product-view"></a>
                            </div>
                            <div id="thumb4" class="tab-pane fade">
                                <a data-fancybox="images" href="img/products/p7.jpg"><img src="img/products/p7.jpg" alt="product-view"></a>
                            </div>
                        </div>
                        <!-- Thumbnail Large Image End -->
                        <!-- Thumbnail Image End -->
                        <div class="product-thumbnail">
                            <div class="thumb-menu owl-carousel nav tabs-area" role="tablist">
                                <a class="active" data-bs-toggle="tab" href="#thumb1"><img src="img/products/p2.jpg" alt="product-thumbnail"></a>
                                <a data-bs-toggle="tab" href="#thumb2"><img src="img/products/p5.jpg" alt="product-thumbnail"></a>
                                <a data-bs-toggle="tab" href="#thumb3"><img src="img/products/p3.jpg" alt="product-thumbnail"></a>
                                <a data-bs-toggle="tab" href="#thumb4"><img src="img/products/p7.jpg" alt="product-thumbnail"></a>
                            </div>
                        </div>
                        <!-- Thumbnail image end -->
                    </div>
                    <!-- Main Thumbnail Image End -->
                    <!-- Thumbnail Description Start -->
                    <div class="col-lg-7 col-md-6">
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
                            <div class="product-policy mt-40">
                                <p><i class="fa fa-check-square-o" aria-hidden="true"></i>Security policy (edit with Customer reassurance module)
                                </p>
                                <p><i class="fa fa-truck" aria-hidden="true"></i>Delivery policy (edit with Customer reassurance module)
                                </p>
                                <p><i class="fa fa-exchange" aria-hidden="true"></i>Return policy (edit with Customer reassurance module)
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Thumbnail Description End -->
                </div>
                <!-- Row End -->
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail End -->
        <!-- Product Thumbnail Description Start -->
        <div class="thumnail-desc">
            <div class="container">
                <div class="thumb-desc-inner">
                    <ul class="main-thumb-desc nav tabs-area" role="tablist">
                        <li><a class="active" data-bs-toggle="tab" href="#dtail">Description</a></li>
                        <li><a data-bs-toggle="tab" href="#review">Reviews 1</a></li>
                    </ul>
                    <!-- Product Thumbnail Tab Content Start -->
                    <div class="tab-content thumb-content">
                        <div id="dtail" class="tab-pane fade show active">
                            <p>Fashion has been creating well-designed collections since 2010. The brand offers feminine designs delivering stylish separates and statement dresses which have since evolved into a full ready-to-wear collection in which every
                                item is a vital part of a woman's wardrobe. The result? Cool, easy, chic looks with youthful elegance and unmistakable signature style. All the beautiful pieces are made in Italy and manufactured with the greatest attention.
                                Now Fashion extends to a range of accessories including shoes, hats, belts and more!</p>
                        </div>
                        <div id="review" class="tab-pane fade">
                            <!-- Reviews Start -->
                            <div class="review">
                                <div class="group-title">
                                    <h2>customer review</h2>
                                </div>
                                <h4 class="review-mini-title">pander</h4>
                                <ul class="review-list">
                                    <!-- Single Review List Start -->
                                    <li>
                                        <span>Quality</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <label>pander</label>
                                    </li>
                                    <!-- Single Review List End -->
                                    <!-- Single Review List Start -->
                                    <li>
                                        <span>price</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <label>Review by <a href="https://themeforest.net/user/pander">pander</a></label>
                                    </li>
                                    <!-- Single Review List End -->
                                    <!-- Single Review List Start -->
                                    <li>
                                        <span>value</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <label>Posted on 12/20/18</label>
                                    </li>
                                    <!-- Single Review List End -->
                                </ul>
                            </div>
                            <!-- Reviews End -->
                            <!-- Reviews Start -->
                            <div class="review mt-10">
                                <h2 class="review-title mb-30">You're reviewing: <br><span>Faded Short Sleeves T-shirt</span></h2>
                                <p class="review-mini-title">your rating</p>
                                <ul class="review-list">
                                    <!-- Single Review List Start -->
                                    <li class="rating-item" data-rating="3">
                                        <span>Quality</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                    <!-- Single Review List End -->
                                    <!-- Single Review List Start -->
                                    <li class="rating-item" data-rating="2">
                                        <span>Price</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                    <!-- Single Review List End -->
                                    <!-- Single Review List Start -->
                                    <li class="rating-item" data-rating="4">
                                        <span>Value</span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </li>
                                    <!-- Single Review List End -->
                                </ul>
                                <script>
                                    $(document).ready(function() {
                                        // Handle star rating click
                                        $('.rating-item i').click(function() {
                                            // Reset all stars
                                            $(this).siblings('i').removeClass('fa-star').addClass('fa-star-o');
                                
                                            // Set stars up to the clicked one
                                            $(this).removeClass('fa-star-o').addClass('fa-star');
                                            $(this).prevAll('i').removeClass('fa-star-o').addClass('fa-star');
                                
                                            // Set the rating value in the data-rating attribute
                                            var rating = $(this).index() + 1;
                                            $(this).parent('.rating-item').attr('data-rating', rating);
                                        });
                                    });
                                </script>
                                <!-- Reviews Field Start -->
                                <div class="riview-field mt-40">
                                    <form autocomplete="off" action="#">
                                        <div class="form-group">
                                            <label class="req" for="sure-name">Name</label>
                                            <input type="text" class="form-control" id="sure-name" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="req" for="subject">Title of review</label>
                                            <input type="text" class="form-control" id="subject" required="required">
                                        </div>
                                        <div class="form-group">
                                            <label class="req" for="comments">Your Review</label>
                                            <textarea class="form-control" rows="5" id="comments" required="required"></textarea>
                                        </div>
                                        <button type="submit" class="customer-btn">Submit</button>
                                    </form>
                                </div>
                                <!-- Reviews Field Start -->
                            </div>
                            <!-- Reviews End -->
                        </div>
                    </div>
                    <!-- Product Thumbnail Tab Content End -->
                </div>
            </div>
            <!-- Container End -->
        </div>
        <!-- Product Thumbnail Description End -->
        <!-- New Arrival Products Start Here -->
        <div class="related-product ptb-90">
            <div class="container">
                <!-- Section Title Start -->
                <div class="section-title text-center">
                    <h2>related products</h2>
                </div>
                <!-- Section Title End -->
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
                    <!-- Single Product End Here -->
                </div>
            </div>
        </div>
        @include('template.footer')

    @include('template.jquery')
</body>


<!-- Mirrored from htmldemo.net/pander/pander-v3/product-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:55 GMT -->
</html>