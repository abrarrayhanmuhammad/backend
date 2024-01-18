<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/pander/pander-v3/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:59 GMT -->
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
                    <li class="breadcrumb-item active">about us</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- About Us Area Start -->
        <div class="skill-area white-bg ptb-90">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="about-content mb-all-40">
                            <!-- Section Title Start -->
                            <div class="section-title section-heading">
                                <h2>about our mission</h2>
                            </div>
                            <!-- Section Title End -->
                            <p class="mb-15">{{$about->about}}</p>
                            <p>{{$about->mission}}</p>
                            <a class="login-btn" href="#">Read more</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="skill-content">
                            <div class="skill">
                                <div class="progress">
                                    <div class="lead">UI & UX DESIGN</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: {{$about->uiux}}%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="90%" class="progress-bar wow fadeInLeft animated"><span>{{$about->uiux}}%</span></div>
                                </div>
                                <div class="progress">
                                    <div class="lead">WEB DESIGN</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: {{$about->webdesign}}%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="70%" class="progress-bar wow fadeInLeft animated"><span>{{$about->webdesign}}%</span></div>
                                </div>
                                <div class="progress">
                                    <div class="lead">APPS DESIGN</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 75%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="{{$about->appdesign}}%" class="progress-bar wow fadeInLeft animated"><span>{{$about->appsdesign}}%</span></div>
                                </div>
                                <div class="progress">
                                    <div class="lead">SKETCH DESIGN</div>
                                    <div data-wow-delay="1.2s" data-wow-duration="1.5s" style="width: 68%; visibility: visible; animation-duration: 1.5s; animation-delay: 1.2s; animation-name: fadeInLeft;" data-progress="{{$about->sketchdesign}}%" class="progress-bar wow fadeInLeft animated"><span>{{$about->sketchdesign}}%</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Us Area End -->
        <!-- Our Team Star Here -->
        <div class="our-team dark-white-bg ptb-90">
            <div class="container">
                <div class="section-title default-title">
                    <h2>our team</h2>
                </div>
                <div class="row text-center">
                    <!-- Single Team Start Here -->
                    @foreach ($team as $t)
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-all-30">
                            <div class="team-img sidebar-img sidebar-banner">
                                <a href="#"><img src="{{asset('storage/team/'.$t->image)}}" alt="team-image"></a>
                                <div class="team-link">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>{{$t->name}}</h4>
                                <p>{{$t->position}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Single Team End Here -->
                    <!-- Single Team Start Here -->                              
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-all-30">
                            <div class="team-img sidebar-img sidebar-banner">
                                <a href="#"><img src="{{assets('storage/team/')}}" alt="team-image"></a>
                                <div class="team-link">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Luis Aragones</h4>
                                <p>web developer</p>
                            </div>
                        </div>
                    </div> --}}
                    
                    <!-- Single Team End Here -->
                    <!-- Single Team Start Here -->
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team mb-xxs-30">
                            <div class="team-img sidebar-img sidebar-banner">
                                <a href="#"><img src="img/team/3.jpg" alt="team-image"></a>
                                <div class="team-link">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>Maria Alessis</h4>
                                <p>Graphic Designer</p>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Single Team End Here -->
                    <!-- Single Team Start Here -->
                    {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="single-team">
                            <div class="team-img sidebar-img sidebar-banner">
                                <a href="#"><img src="img/team/4.jpg" alt="team-image"></a>
                                <div class="team-link">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="team-info">
                                <h4>John Doe</h4>
                                <p>php developer</p>
                            </div>
                        </div>
                    </div> --}}
                    <!-- Single Team End Here -->
                </div>
            </div>
        </div>
        <!-- Our Team End Here -->
        <!-- Brand Area Start Here -->
        <div class="brand-area white-bg ptb-90">
            <div class="container">
                <!-- Brand Logo Active Start Here -->
                <div class="brand-logo-active owl-carousel">
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/b1.jpg" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/b2.jpg" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/b3.jpg" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/b4.jpg" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/b5.jpg" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/b1.jpg" alt="brand-image"></a>
                    </div>
                    <div class="single-brand">
                        <a href="#"><img src="img/brand/b2.jpg" alt="brand-image"></a>
                    </div>
                </div>
                <!-- Brand Logo Active End Here -->
            </div>
        </div>
        <!-- Brand Area End Here -->
        <!-- Social Link Area Start -->
        @include('template.footer')
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.3.1 -->
    @include('template.jquery')
</body>


<!-- Mirrored from htmldemo.net/pander/pander-v3/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:14:02 GMT -->
</html>