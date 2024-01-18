<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/pander/pander-v3/compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:51 GMT -->
@include('template.css')

<body>
    <div class="wrapper">
        @include('template.header')
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{url('shop')}}">Shop</a></li>
                    <li class="breadcrumb-item active">Compare</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Compare Product Start Here -->
        <div class="compare-product ptb-90">
            <div class="container">
                <div class="table-responsive-sm">
                    <table class="table text-center compare-content">
                        <tbody>
                            <tr>
                                <td class="product-title">Product</td>
                                <td class="product-description">
                                    <div class="compare-details">
                                        <div class="compare-detail-img">
                                            <a href="#"><img src="img/products/p1.jpg" alt="compare-product"></a>
                                        </div>
                                        <div class="compare-detail-content">
                                            <span>bedroom</span>
                                            <h4><a href="{{url('product-details')}}">new bedroom furniture</a></h4>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-title">Description</td>
                                <td class="product-description">
                                    <p>Impressively thin and light, the HP EliteBook 840 empowers users to create, connect, and collaborate, using enterprise-class performance</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-title">Price</td>
                                <td class="product-description">$235</td>
                            </tr>
                            <tr>
                                <td class="product-title">Color</td>
                                <td class="product-description">Black</td>
                            </tr>
                            <tr>
                                <td class="product-title">Stock</td>
                                <td class="product-description">In Stock</td>
                            </tr>
                            <tr>
                                <td class="product-title">Add to cart</td>
                                <td class="product-description">
                                    <a class="compare-cart text-uppercase" href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i>add to cart</a>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-title">Delete</td>
                                <td class="product-description"><i class="fa fa-trash-o"></i></td>
                            </tr>
                            <tr>
                                <td class="product-title">Rating</td>
                                <td class="product-description">
                                    <div class="product-rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Compare Product End Here -->
        <!-- Social Link Area Start -->
        @include('template.footer')
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.3.1 -->
    @include('template.jquery')
</body>


<!-- Mirrored from htmldemo.net/pander/pander-v3/compare.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:51 GMT -->
</html>