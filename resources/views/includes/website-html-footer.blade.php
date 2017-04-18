<div class="preloader">
    <div class="preloaderimg"></div>
</div>

<script src="{{asset('assets/public/assets/public/js/vendor/respond.min.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/placeholders.min.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/jquery-1.10.2.min.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/hoverIntent.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/superfish.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/jquery.actual.min.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/jquery.elastislide.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/jquery.flexslider-min.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/jquery.prettyPhoto.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/jquery.ui.totop.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/jquery.isotope.min.js')}}"></script>
<script src="{{asset('assets/public/js/vendor/jquery.easypiechart.min.js')}}"></script>
<script src='{{asset('assets/public/js/vendor/jflickrfeed.min.js')}}'></script>
<script src="{{asset('assets/public/js/vendor/jquery.sticky.js')}}"></script>
<script src='{{asset('assets/public/js/vendor/jquery.scrollTo-min.js')}}'></script>
<script src='{{asset('assets/public/js/vendor/jquery.localscroll-min.js')}}'></script>
<script src='{{asset('assets/public/twitter/jquery.tweet.min.js')}}'></script>
<script src="{{asset('assets/public/js/plugins.js')}}"></script>
<script src="{{asset('assets/public/js/main.js')}}"></script>

<script src="{{asset('assets/public/js/bootstrap-datepicker.js')}}"></script>



<script type="text/javascript">
    $(window).load(function() {
        $(".loader").fadeOut("slow");
    });
</script>

<!-- Map Scripts -->

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCYNnN3l3C3QIP2SiWntxiiHGF8i5ryADA"></script>



<script type="text/javascript">
    var lat;
    var lng;
    var map;

    //type your address after "address="
    jQuery.getJSON('http://maps.googleapis.com/maps/api/geocode/json?address=19 pentlands place, east london, eastern cape, south africa&sensor=false', function(data) {
        lat = data.results[0].geometry.location.lat;
        lng = data.results[0].geometry.location.lng;
    }).complete(function(){
        dxmapLoadMap();
    });

    function attachSecretMessage(marker, message)
    {
        var infowindow = new google.maps.InfoWindow(
            { content: message
            });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map,marker);
        });
    }

    window.dxmapLoadMap = function()
    {
        var center = new google.maps.LatLng(lat, lng);
        var settings = {
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            zoom: 16,
            draggable: false,
            scrollwheel: false,
            center: center
        };
        map = new google.maps.Map(document.getElementById('map'), settings);

        var marker = new google.maps.Marker({
            position: center,
            title: 'Map title',
            map: map
        });
        marker.setTitle('Map title'.toString());
        //type your map title and description here
        attachSecretMessage(marker, '<h3>Map title</h3>Map HTML description');
    }
</script>

<script type="text/javascript"> var base_url = ""; </script>



<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {

        $('#babydob').datepicker({
            format: "yyyy-mm-dd"
        });

    });
</script>



