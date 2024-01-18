<!doctype html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/pander/pander-v3/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:14:02 GMT -->
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
                    <li class="breadcrumb-item active">contact us</li>
                </ol>
            </div>
        </div>
        <!-- Breadcrumb Area End Here -->
        <!-- Google Map Start -->
        <div class="goole-map">
            <div id="map"></div>
        </div>
        <!-- Google Map End -->
        <!-- Regester Page Start Here -->
        <div class="register-area white-bg ptb-90">
            <div class="container">
                <h3 class="login-header">Contact us</h3>
                <div class="register-contact  clearfix">
                    <form id="contact-form" class="contact-form" action="https://htmldemo.net/pander/pander-v3/mail.php" method="post">
                        <div class="address-wrapper row">
                            <div class="col-md-12">
                                <div class="address-fname">
                                    <input class="form-control" type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="address-email">
                                    <input class="form-control" type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="address-web">
                                    <input class="form-control" type="text" name="website" placeholder="Website">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="address-subject">
                                    <input class="form-control" type="text" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="address-textarea">
                                    <textarea name="message" class="form-control" placeholder="Write your message"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="footer-content mail-content clearfix">
                            <div class="send-email float-md-end">
                                <input value="Submit" class="return-customer-btn" type="submit">
                            </div>
                        </div>
                        <p class="form-message"></p>
                    </form>
                </div>
            </div>
        </div>
        @include('template.footer')
    <!-- Main Wrapper End Here -->

    <!-- jquery 3.3.1 -->
    <script src="js/vendor/jquery-3.3.1.min.js"></script>
    <script src="js/vendor/jquery-migrate-3.3.1.min.js"></script>
    <!-- Ajax Mail Js -->
    <script src="js/ajax-mail.js"></script>
    <!-- Countdown js -->
    <script src="js/jquery.countdown.min.js"></script>
    <!-- Mobile menu js -->
    <script src="js/jquery.meanmenu.min.js"></script>
    <!-- ScrollUp js -->
    <script src="js/jquery.scrollUp.js"></script>
    <!-- Fancybox js -->
    <script src="js/jquery.fancybox.min.js"></script>
    <!-- Jquery nice select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <!-- Jquery ui price slider js -->
    <script src="js/jquery-ui.min.js"></script>
    <!-- Owl carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Bootstrap popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin js -->
    <script src="/js/plugins.js"></script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAq7MrCR1A2qIShmjbtLHSKjcEIEBEEwM"></script>
    <script>
        // When the window has finished loading create our google map below
        google.maps.event.addDomListener(window, 'load', init);

        function init() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,

                scrollwheel: false,

                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(23.761226, 90.420766), // New York

                // How you would like to style the map. 
                // This is where you would paste any style found on Snazzy Maps.
                styles:

                    [{
                    "featureType": "landscape",
                    "stylers": [{
                        "hue": "#FFA800"
                    }, {
                        "saturation": 0
                    }, {
                        "lightness": 0
                    }, {
                        "gamma": 1
                    }]
                }, {
                    "featureType": "road.highway",
                    "stylers": [{
                        "hue": "#53FF00"
                    }, {
                        "saturation": -73
                    }, {
                        "lightness": 40
                    }, {
                        "gamma": 1
                    }]
                }, {
                    "featureType": "road.arterial",
                    "stylers": [{
                        "hue": "#FBFF00"
                    }, {
                        "saturation": 0
                    }, {
                        "lightness": 0
                    }, {
                        "gamma": 1
                    }]
                }, {
                    "featureType": "road.local",
                    "stylers": [{
                        "hue": "#00FFFD"
                    }, {
                        "saturation": 0
                    }, {
                        "lightness": 30
                    }, {
                        "gamma": 1
                    }]
                }, {
                    "featureType": "water",
                    "stylers": [{
                        "hue": "#c59340"
                    }, {
                        "saturation": 6
                    }, {
                        "lightness": 8
                    }, {
                        "gamma": 1
                    }]
                }, {
                    "featureType": "poi",
                    "stylers": [{
                        "hue": "#679714"
                    }, {
                        "saturation": 33.4
                    }, {
                        "lightness": -25.4
                    }, {
                        "gamma": 1
                    }]
                }]
            };

            // Get the HTML DOM element that will contain your map 
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(23.761226, 90.420766),
                map: map,
                title: 'Snazzy!'
            });
        }
    </script>
    <!-- Main activaion js -->
    <script src="js/main.js"></script>
</body>


<!-- Mirrored from htmldemo.net/pander/pander-v3/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 16 Jan 2024 02:14:02 GMT -->
</html>