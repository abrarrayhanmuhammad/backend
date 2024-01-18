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
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
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
                            <form action="{{route('register')}}" method="POST">
                                @csrf
                                <p>Already have an account? <a href="login.html">Log in instead!</a></p>
                                <form action="">
                                <div class="form-group row align-items-center">
                                    <label class="col-lg-3 col-md-3 col-form-label">Social title</label>
                                    <div class="col-lg-6 col-md-6">
                                        <span class="custom-radio"><input name="id_gender" value="Mr." type="radio"> Mr.</span>
                                        <span class="custom-radio"><input name="id_gender" value="Mrs." type="radio"> Mrs.</span>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="f-name" class="col-lg-3 col-md-3 col-form-label">First Name</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" id="f-name" name="firstname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="l-name" class="col-lg-3 col-md-3 col-form-label">Last Name</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" id="l-name" name="lastname">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-lg-3 col-md-3 col-form-label">Email</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-lg-3 col-md-3 col-form-label">Password</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="password" class="form-control" id="inputPassword" name="password">
                                        {{-- <button class="btn show-btn" type="button">Show</button> --}}
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="inputPassword" class="col-lg-3 col-md-3 col-form-label">Password Confirm</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="password" class="form-control" id="inputPassword" name="password_confirmation">
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label for="birth" class="col-lg-3 col-md-3 col-form-label">Birthdate</label>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" name="birthdate" class="form-control" id="birth" placeholder="MM/DD/YYYY">
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
                                {{-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                 <x-label for="terms">
                                 <div class="flex items-center">
                                 <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif --}}
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