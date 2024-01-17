
<header>
    <!-- Header Top Start Here -->
    <div class="header-top off-white-bg">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-md-between justify-content-center">
                <!-- Header Top Left Start -->
                <div class="header-top-left">
                    <ul>
                        <li>
                            <a href="#"><img src="img/header/1.jpg" alt="language-selector">English<i class="fa fa-angle-down"></i></a>
                            <!-- Dropdown Start -->
                            <ul class="ht-dropdown">
                                <li>
                                    <a href="#"><img src="img/header/1.jpg" alt="language-selector">English</a>
                                </li>
                                <li>
                                    <a href="#"><img src="img/header/2.jpg" alt="language-selector">Francis</a>
                                </li>
                            </ul>
                            <!-- Dropdown End -->
                        </li>
                        <li><a href="#">USD $<i class="fa fa-angle-down"></i></a>
                            <!-- Dropdown Start -->
                            <ul class="ht-dropdown">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Français</a></li>
                            </ul>
                            <!-- Dropdown End -->
                        </li>
                    </ul>
                </div>
                <!-- Header Top Left End -->
                <!-- Header Top Right Start -->
                <div class="header-top-right">
                    <ul>
                        <li><a href="#">My Account<i class="fa fa-angle-down"></i></a>
                            <!-- Dropdown Start -->
                            <ul class="ht-dropdown">
                                <li><a href="{{url('compare')}}">compare products</a></li>
                                <li><a href="{{url('account')}}">my account</a></li>
                                <li><a href="{{url('wishlist')}}">my wishlist</a></li>
                                <li><a href="{{url('login')}}">sign in</a></li>
                            </ul>
                            <!-- Dropdown End -->
                        </li>
                        <li><a href="{{url('register')}}">create an account</a></li>
                    </ul>
                </div>
                <!-- Header Top Right End -->
            </div>
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Top End Here -->
    <!-- Header Middle Start Here -->
    <div class="header-middle white-bg">
        <div class="container">
            <div class="row align-items-center">
                <!-- Categorie Search Box Start Here -->
                <div class="col-xl-3 col-lg-4 col-md-12 order-3 order-lg-1">
                    <div class="categorie-search-box">
                        <form action="#">
                            <input type="text" name="search" placeholder="Search entire store here...">
                            <button><span class="pe-7s-search"></span></button>
                        </form>
                    </div>
                </div>
                <!-- Categorie Search Box End Here -->
                <!-- Logo Start -->
                <div class="col-xl-6 col-lg-4 col-md-5 col-sm-12 order-1 order-lg-2">
                    <div class="logo text-center text-md-start text-lg-center mt-sm-35 mt-sm-35">
                        <a href="{{url('/')}}"><img src="img/logo/logo.png" alt="logo-image"></a>
                    </div>
                </div>
                <!-- Logo End -->
                <!-- Cart Box Start Here -->
                <div class="col-xl-3 col-lg-4 col-md-5  col-sm-7 order-2 order-lg-3">
                    <div class="cart-box">
                        <ul class="d-flex justify-content-sm-between  align-items-center">
                            <li>
                                <ul class="wish-compare-items">
                                    <li><a class="wishlist" href="{{url('wishlist')}}">my wishlist</a></li>
                                    <li><a class="compare" href="{{url('compare')}}">my compare</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><img src="img/vertical-menu/icon_cart.png" alt="cart-icon"><span class="total-pro">2</span><span class="my-cart"><span>my cart</span></span>
                                </a>
                                <ul class="ht-dropdown cart-box-width">
                                    <li>
                                        <!-- Cart Box Start -->
                                        <div class="single-cart-box">
                                            <div class="cart-img">
                                                <a href="#"><img src="img/products/p1.jpg" alt="cart-image"></a>
                                                <span class="pro-quantity">1X</span>
                                            </div>
                                            <div class="cart-content">
                                                <h6><a href="{{url('product-details')}}">Printed Summer Red </a></h6>
                                                <span class="cart-price">27.45</span>
                                                <span>Size: S</span>
                                                <span>Color: Yellow</span>
                                            </div>
                                            <a class="del-icone" href="#"><i class="ion-close"></i></a>
                                        </div>
                                        <!-- Cart Box End -->
                                        <!-- Cart Footer Inner Start -->
                                        <div class="cart-footer">
                                            <ul class="price-content">
                                                <li>Subtotal <span>$57.95</span></li>
                                                <li>Shipping <span>$7.00</span></li>
                                                <li>Taxes <span>$0.00</span></li>
                                                <li>Total <span>$64.95</span></li>
                                            </ul>
                                            <div class="cart-actions text-center">
                                                <a class="cart-checkout" href="{{url('checkout')}}">Checkout</a>
                                            </div>
                                        </div>
                                        <!-- Cart Footer Inner End -->
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Cart Box End Here -->
            </div>
            <!-- Row End -->
            <!-- Mobile Menu Start Here -->
            <div class="mobile-menu d-block d-lg-none">
                <nav>
                    <ul>
                        <li><a href="{{url('index')}}">home</a>
                        <!-- Home Version Dropdown End -->
                        </li>
                        <li><a href="#">furniture</a>
                            <!-- Men Accessories Dropdown Start -->
                            <ul class="submobile-mega-dropdown">
                                <li><a href="#">living</a>
                                    <!-- Watches Dropdown Start -->
                                    <ul>
                                        <li><a href="{{url('shop')}}">sofa set</a></li>
                                        <li><a href="{{url('shop')}}">corner table</a></li>
                                        <li><a href="{{url('shop')}}">center table</a></li>
                                        <li><a href="{{url('shop')}}">tv cabine</a></li>
                                    </ul>
                                    <!-- Watches Dropdown End -->
                                </li>
                                <li><a href="#">bedroom</a>
                                    <!-- Shoes Dropdown Start -->
                                    <ul>
                                        <li><a href="{{url('shop')}}">bed room sofa</a></li>
                                        <li><a href="{{url('shop')}}">bed drawer</a></li>
                                        <li><a href="{{url('shop')}}">bed side table</a></li>
                                        <li><a href="{{url('shop')}}">dressing table</a></li>
                                    </ul>
                                    <!-- Shoes Dropdown End -->
                                </li>
                                <li><a href="#">dining</a>
                                    <!-- Bags Dropdown Start -->
                                    <ul>
                                        <li><a href="{{url('shop')}}">Dining set</a></li>
                                        <li><a href="{{url('shop')}}">chair</a></li>
                                        <li><a href="{{url('shop')}}">showcase</a></li>
                                        <li><a href="{{url('shop')}}">dinner wagon</a></li>
                                    </ul>
                                    <!-- Bags Dropdown End -->
                                </li>
                                <li><a href="#">office</a>
                                    <!-- Bags Dropdown Start -->
                                    <ul>
                                        <li><a href="{{url('shop')}}">meeting table</a></li>
                                        <li><a href="{{url('shop')}}">conference table</a></li>
                                        <li><a href="{{url('shop')}}">mobile drawer</a></li>
                                        <li><a href="{{url('shop')}}">group chair</a></li>
                                    </ul>
                                    <!-- Bags Dropdown End -->
                                </li>
                            </ul>
                            <!-- Men Accessories Dropdown End -->
                        </li>
                        <li><a href="#">lighting</a>
                            <!-- Women Accessories Dropdown Start -->
                            <ul class="submobile-mega-dropdown">
                                <!-- Dress Dropdown Start -->
                                <li><a href="#">lamp</a>
                                    <ul>
                                        <li><a href="{{url('shop')}}">Cords and Cables</a></li>
                                        <li><a href="{{url('shop')}}">gps accessories</a></li>
                                        <li><a href="{{url('shop')}}">Microphones</a></li>
                                        <li><a href="{{url('shop')}}l">Wireless Transmitters</a></li>
                                    </ul>
                                </li>
                                <!-- Dress Dropdown End -->
                                <!-- shoes Dropdown Start -->
                                <li><a href="#">wall</a>
                                    <ul>
                                        <li><a href="{{url('shop')}}">Bathroom Lighting</a></li>
                                        <li><a href="{{url('shop')}}">Wall Torchieres</a></li>
                                        <li><a href="{{url('shop')}}">Picture Lights</a></li>
                                        <li><a href="{{url('shop')}}">Pharmacy - Wall</a></li>
                                    </ul>
                                </li>
                                <!-- shoes Dropdown End -->
                                <!-- Bags Dropdown Start -->
                                <li><a href="#">outdoor</a>
                                    <ul>
                                        <li><a href="{{url('shop')}}">ceiling mount</a></li>
                                        <li><a href="{{url('shop')}}">Fountains</a></li>
                                        <li><a href="{{url('shop')}}">Gas Lanterns</a></li>
                                        <li><a href="{{url('shop')}}">Hanging</a></li>
                                    </ul>
                                </li>
                                <!-- Bags Dropdown End -->
                                <!-- swimwear Dropdown Start -->
                                <li><a href="#">decor</a>
                                    <ul>
                                        <li><a href="{{url('shop')}}">mirrors</a></li>
                                        <li><a href="{{url('shop')}}">clocks</a></li>
                                        <li><a href="{{url('shop')}}">coat racks</a></li>
                                        <li><a href="{{url('shop')}}">plumbing</a></li>
                                    </ul>
                                </li>
                                <!-- swimwear Dropdown End -->
                            </ul>
                            <!-- Women Accessories Dropdown Start -->
                        </li>
                        <li><a href="#">shop</a>
                            <!-- Mobile Menu Dropdown Start -->
                            <ul>
                                <li><a href="{{url('shop')}}">Shop</a></li>
                                <li><a href="{{url('product-details')}}">product details</a></li>
                                <li><a href="{{url('compare')}}">compare</a></li>
                                <li><a href="{{url('cart')}}">cart</a></li>
                                <li><a href="{{url('chechout')}}">checkout</a></li>
                                <li><a href="{{url('wishlist')}}">wishlist</a></li>
                            </ul>
                            <!-- Mobile Menu Dropdown End -->
                        </li>
                        <li><a href="#">Blog</a>
                            <!-- Mobile Menu Dropdown Start -->
                            <ul>
                                <li><a href="blog.html">3 column</a></li>
                                <li><a href="blog-3-column-fullwidth.html">3 column full width</a></li>
                                <li><a href="blog-4-column-fullwidth.html">4 column full width</a></li>
                                <li><a href="blog-left-sidebar.html">Left Sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">Right Sidebar</a></li>
                                <li><a href="blog-details-left-sidebar.html">Blog Details Left Sidebar</a></li>
                                <li><a href="blog-details.html">Blog Details Right Sidebar</a></li>
                            </ul>
                            <!-- Mobile Menu Dropdown End -->
                        </li>
                        <li><a href="#">pages</a>
                            <!-- Mobile Menu Dropdown Start -->
                            <ul>
                                <li><a href="about.html">about us</a></li>
                                <li><a href="account.html">My account</a></li>
                                <li><a href="register.html">register</a></li>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="forgot-password.html">forgot password</a></li>
                            </ul>
                            <!-- Mobile Menu Dropdown End -->
                        </li>
                        <li><a href="contact.html">contact us</a></li>
                    </ul>
                </nav>
            </div>
            <!-- Mobile Menu End Here -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Middle End Here -->
    <!-- Header Bottom Start Here -->
    <div class="header-bottom black-bg header-sticky d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-12 ">
                    <nav>
                        <ul class="header-bottom-list d-flex">
                            <li class="active"><a href="{{url('/')}}">home</a></li>
                            <li><a class="drop-icon" href="{{url('shop')}}">furniture</a>
                                <!--  Mega-Menu Start -->
                                <ul class="ht-dropdown megamenu big-megamneu">
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">living</li>
                                            <li><a href="{{url('shop')}}">sofa set</a></li>
                                            <li><a href="{{url('shop')}}">corner table</a></li>
                                            <li><a href="{{url('shop')}}">center table</a></li>
                                            <li><a href="{{url('shop')}}">tv cabine</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">bedroom</li>
                                            <li><a href="{{url('shop')}}">bed room sofa</a></li>
                                            <li><a href="{{url('shop')}}">bed drawer</a></li>
                                            <li><a href="{{url('shop')}}">bed side table</a></li>
                                            <li><a href="{{url('shop')}}">dressing table</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">Dining</li>
                                            <li><a href="{{url('shop')}}">Dining set</a></li>
                                            <li><a href="{{url('shop')}}">chair</a></li>
                                            <li><a href="{{url('shop')}}">showcase</a></li>
                                            <li><a href="{{url('shop')}}">dinner wagon</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">office</li>
                                            <li><a href="{{url('shop')}}">meeting table</a></li>
                                            <li><a href="{{url('shop')}}">conference table</a></li>
                                            <li><a href="{{url('shop')}}">mobile drawer</a></li>
                                            <li><a href="{{url('shop')}}">group chair</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->

                                </ul>
                                <!-- Mega-Menu End -->
                            </li>
                            <li><a class="drop-icon" href="shop.html">lighting</a>
                                <!--  Mega-Menu Start -->
                                <ul class="ht-dropdown megamenu big-megamneu">
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">lamp</li>
                                            <li><a href="{{url('shop')}}">Cords and Cables</a></li>
                                            <li><a href="{{url('shop')}}">gps accessories</a></li>
                                            <li><a href="{{url('shop')}}">Microphones</a></li>
                                            <li><a href="{{url('shop')}}">Wireless Transmitters</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">wall</li>
                                            <li><a href="{{url('shop')}}">Bathroom Lighting</a></li>
                                            <li><a href="{{url('shop')}}l">Wall Torchieres</a></li>
                                            <li><a href="{{url('shop')}}">Picture Lights</a></li>
                                            <li><a href="{{url('shop')}}">Pharmacy - Wall</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">outdoor</li>
                                            <li><a href="{{url('shop')}}">ceiling mount</a></li>
                                            <li><a href="{{url('shop')}}">Fountains</a></li>
                                            <li><a href="{{url('shop')}}">Gas Lanterns</a></li>
                                            <li><a href="{{url('shop')}}">Hanging</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">decor</li>
                                            <li><a href="{{url('shop')}}l">mirrors</a></li>
                                            <li><a href="{{url('shop')}}">clocks</a></li>
                                            <li><a href="{{url('shop')}}">coat racks</a></li>
                                            <li><a href="{{url('shop')}}">plumbing</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->

                                </ul>
                                <!-- Mega-Menu End -->
                            </li>
                            <li><a class="drop-icon" href="{{url('shop')}}">room</a>
                                <!--  Mega-Menu Start -->
                                <ul class="ht-dropdown megamenu megamenu-three">
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">Large Appliances</li>
                                            <li><a href="{{url('shop')}}">Armchairs</a></li>
                                            <li><a href="{{url('shop')}}">Bunk Bed</a></li>
                                            <li><a href="{{url('shop')}}">Mattress</a></li>
                                            <li><a href="{{url('shop')}}">Sideboard</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">Medium Appliances</li>
                                            <li><a href="{{url('shop')}}">Bootees Bags</a></li>
                                            <li><a href="{{url('shop')}}">Jackets</a></li>
                                            <li><a href="{{url('shop')}}">Shelf</a></li>
                                            <li><a href="{{url('shop')}}">Shoes</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">Small Appliances</li>
                                            <li><a href="{{url('shop')}}">Bootees Bags</a></li>
                                            <li><a href="{{url('shop')}}">Jackets</a></li>
                                            <li><a href="{{url('shop')}}">Shelf</a></li>
                                            <li><a href="{{url('shop')}}">Shoes</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                </ul>
                                <!-- Mega-Menu End -->
                            </li>
                            <li><a class="drop-icon" href="{{url('shop')}}">new collections</a>
                                <!--  Mega-Menu Start -->
                                <ul class="ht-dropdown megamenu megamenu-two">
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">Large Appliances</li>
                                            <li><a href="{{url('shop')}}">Armchairs</a></li>
                                            <li><a href="{{url('shop')}}">Bunk Bed</a></li>
                                            <li><a href="{{url('shop')}}">Mattress</a></li>
                                            <li><a href="{{url('shop')}}">Sideboard</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->
                                    <!-- Single Column Start -->
                                    <li>
                                        <ul>
                                            <li class="menu-tile">Small Appliances</li>
                                            <li><a href="{{url('shop')}}">Bootees Bags</a></li>
                                            <li><a href="{{url('shop')}}">Jackets</a></li>
                                            <li><a href="{{url('shop')}}">Shelf</a></li>
                                            <li><a href="{{url('shop')}}">Shoes</a></li>
                                        </ul>
                                    </li>
                                    <!-- Single Column End -->

                                </ul>
                                <!-- Mega-Menu End -->
                            </li>
                            <li><a class="drop-icon" href="{{url('shop')}}">shop</a>
                                <!-- Home Version Dropdown Start -->
                                <ul class="ht-dropdown">
                                    <li><a href="{{url('shop')}}">Shop</a></li>
                                    <li><a href="{{url('product-details')}}">product details</a></li>
                                    <li><a href="{{url('cart')}}">cart</a></li>
                                    <li><a href="{{url('checkout')}}">checkout</a></li>
                                </ul>
                                <!-- Home Version Dropdown End -->
                            </li>
                            <li><a href="{{url('blog')}}">blog</a>
                            </li>
                            <li><a class="drop-icon" href="#">pages</a>
                                <!-- Home Version Dropdown Start -->
                                <ul class="ht-dropdown">
                                    <li><a href="{{url('contact')}}">contact us</a></li>
                                    <li><a href="{{url('about')}}">about us</a></li>
                                    <li><a href="{{url('forgot-password')}}">forgot password</a></li>
                                </ul>
                                <!-- Home Version Dropdown End -->
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <!-- Row End -->
        </div>
        <!-- Container End -->
    </div>
    <!-- Header Bottom End Here -->
</header>