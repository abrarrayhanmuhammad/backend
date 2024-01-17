<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/pander/pander-v3/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:51 GMT -->
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
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="shop.html">Shop</a></li>
                    <li class="breadcrumb-item active">wishlist</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Wish List Start -->
        <div class="cart-main-area wish-list white-bg ptb-90">
            <div class="container">
                <!-- Form Start -->
                <form action="#">
                    <!-- Table Content Start -->
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-remove">Remove</th>
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Unit Price</th>
                                    <th class="product-quantity">Stock Status</th>
                                    <th class="product-subtotal">add to cart</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="product-remove"> <a href="#"><i class="fa fa-times" aria-hidden="true"></i></a></td>
                                    <td class="product-thumbnail">
                                        <a href="#"><img src="img/products/p2.jpg" alt="cart-image" /></a>
                                    </td>
                                    <td class="product-name"><a href="{{url('product-details')}}">Printed boxer cloth</a></td>
                                    <td class="product-price"><span class="amount">£165.00</span></td>
                                    <td class="product-stock-status"><span>in stock</span></td>
                                    <td class="product-add-to-cart"><a href="{{url('cart')}}">add to cart</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- Table Content Start -->
                </form>
                <!-- Form End -->
            </div>
        </div>
        @include('template.footer')
@include('template.jquery')
</body>


<!-- Mirrored from htmldemo.net/pander/pander-v3/wishlist.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:51 GMT -->
</html>