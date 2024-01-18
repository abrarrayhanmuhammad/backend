<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from htmldemo.net/pander/pander-v3/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:14:02 GMT -->
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
                    <li class="breadcrumb-item active">Forgot Password</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Forgot Password Start Here -->
        <div class="lost-pass white-bg ptb-90">
            <div class="container">
                <div class="register-title">
                    <h3 class="login-header">Register Account</h3>
                </div>
                <form class="password-forgot clearfix" action="https://htmldemo.net/pander/pander-v3/mail.php">
                    <fieldset>
                        <legend>Your Personal Details</legend>
                        <div class="form-group row">
                            <label class="control-label col-lg-2 col-md-3" for="email"><span class="require">*</span>Enter you email address here...</label>
                            <div class="col-lg-10 col-md-9">
                                <input type="email" class="form-control" id="email" placeholder="Enter you email address here...">
                            </div>
                        </div>
                    </fieldset>
                    <div class="buttons newsletter-input">
                        <div class="float-left float-lg-start">
                            <a class="customer-btn mr-20" href="{{url('login')}}">Back</a>
                        </div>
                        <div class="float-right float-sm-end">
                            <input type="submit" value="Continue" class="return-customer-btn">
                        </div>
                    </div>
                </form>
            </div>
            <!-- Container End -->
        </div>
        <!-- Forgot Password End Here -->
        <!-- Social Link Area Start -->
        @include('template.footer')
        <!-- Footer Area End Here -->
    </div>
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.3.1 -->
    @include('template.jquery')
</body>


<!-- Mirrored from htmldemo.net/pander/pander-v3/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:14:02 GMT -->
</html>