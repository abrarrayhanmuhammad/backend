<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/pander/pander-v3/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:51 GMT -->
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
                    <li class="breadcrumb-item active">register</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Regester Page Start Here -->
        <div class="register-area ptb-90">
            <div class="container">
                <h3 class="login-header">Create an account </h3>
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="register-form login-form clearfix">
                            <form action="#">
                                <p>Already have an account? <a href="login.html">Log in instead!</a></p>
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-3 col-md-3 col-form-label">Social title</label>
                                    <div class="col-lg-6 col-md-6">
                                        <span class="custom-radio"><input name="id_gender" value="1" type="radio"> Mr.</span>
                                        <span class="custom-radio"><input name="id_gender" value="1" type="radio"> Mrs.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="f-name" class="col-lg-3 col-md-3 col-form-label">First Name</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" id="f-name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="l-name" class="col-lg-3 col-md-3 col-form-label">Last Name</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" id="l-name">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-lg-3 col-md-3 col-form-label">Email</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" id="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-lg-3 col-md-3 col-form-label">Password</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="password" class="form-control" id="inputPassword">
                                        <button class="btn show-btn" type="button">Show</button>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="birth" class="col-lg-3 col-md-3 col-form-label">Birthdate</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" id="birth" placeholder="MM/DD/YYYY">
                                    </div>
                                    <span class="col-sm-3 form-control-comment">optional</span>
                                </div>
                                <div class="form-check row p-0 mt-20">
                                    <div class="col-md-6 offset-md-3">
                                        <input class="form-check-input" value="#" id="offer" type="checkbox">
                                        <label class="form-check-label" for="offer">Receive offers from our partners</label>
                                    </div>
                                </div>
                                <div class="form-check row p-0 mt-20">
                                    <div class="col-md-8 offset-md-3">
                                        <input class="form-check-input" value="#" id="subscribe" type="checkbox">
                                        <label class="form-check-label" for="subscribe">Sign up for our newsletter<br>Subscribe to our newsletters now and stay up-to-date with new collections, the latest lookbooks and exclusive offers..</label>
                                    </div>
                                </div>
                                <div class="register-box mt-40">
                                    <button type="submit" class="login-btn float-right">Register</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Register Page End Here -->
        @include('template.footer')
    @include('template.jquery')
</body>


<!-- Mirrored from htmldemo.net/pander/pander-v3/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:13:51 GMT -->
</html>