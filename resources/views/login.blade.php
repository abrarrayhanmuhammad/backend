<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/pander/pander-v3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:51 GMT -->
@include('template.css')

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Main Wrapper Start Here -->
    <div class="wrapper">
        @include('template.header')
        <!-- Main Header Area End Here -->
        <!-- Breadcrumb Area Start Here -->
        <div class="breadcrumb-area">
            <div class="container">
                <ol class="breadcrumb breadcrumb-list">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">login</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Login Page Start Here -->
        <div class="login ptb-90">
            <div class="container">
                <h3 class="login-header">Log in to your account </h3>
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="login-form">
                            <form>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label">Email</label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control" id="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                        <button class="btn show-btn" type="button">Show</button>
                                    </div>
                                </div>
                                <div class="login-details text-center mb-25">
                                    <a href="{{url('forgot-password')}}">Forgot your password? </a>
                                    <button type="submit" class="login-btn">Sign in</button>
                                </div>
                                <div class="login-footer text-center">
                                    <p>No account? <a href="{{url('register')}}">Create one here</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('template.footer')
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.3.1 -->
    @include('template.jquery')
</body>


<!-- Mirrored from htmldemo.net/pander/pander-v3/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:51 GMT -->
</html>