
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>{{config('app.title')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content=" /img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!-- Assets -->
    <link href="{{asset('css/libs.css')}}" rel="stylesheet">

    <link href="{{asset('css/app.css')}}" rel="stylesheet">


    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>










    <script type="text/javascript">
        function selectcourses()
        {
            var course_type=$('#course_type').val();

            $.post('/booking/coursestypes/',
                {
                    course_type:course_type

                },
                function(data)
                {

                    $('#course_id').html(data);

                });

        }
    </script>

</head>



<body><div id="top"></div>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->



<section id="header" class="bg-color0">
    <div class="container"><div class="row">

            <a class="navbar-brand" href='/'><img src="/img/example/logo.png" alt=""></a>

            <div class="col-sm-12 mainmenu_wrap"><div class="main-menu-icon visible-xs"><span></span><span></span><span></span></div>
                <ul id="mainmenu" class="nav menu sf-menu responsive-menu superfish">

                    <li class="">
                        <a href="/">Home</a>
                    </li>

                    <li class="dropdown">
                        <a href="#">About</a>
                        <ul class="nav dropdown-menu">

                            <li class="">
                                <a href='/about/janette'>About Janette</a>
                            </li>

                            <li class="">
                                <a href='/about/massage'>About Baby Massage</a>
                            </li>

                            <li class="">
                                <a href='/about/yoga'>About Baby Yoga</a>
                            </li>



                        </ul>
                    </li>


                    <li class="">
                        <a href="#contact_header">Contact</a>
                    </li>

                    <li class="">
                        <a href="#enquiry_header">Enquiry</a>
                    </li>

                    <li class="">
                        <a href='/booking'>Booking</a>
                    </li>

                </ul>
            </div>

        </div></div>
</section>






<section id="top-header" class="bg-color0">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 text-center">
                <img src="/img/header_slider.jpg">
            </div>
            <div class="col-sm-6 text-center">
                <img src="/img/header.jpg" >
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2>Relaxing &amp; fun-filled ways of spending time with AND helping your little one be as Happy and Healthy as possible</h2>
            </div>
        </div>
    </div>
</section>





<section id="about_header" class="bg-color2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bg-color2 section_break">
                <h1 class="section_break_header">Welcome</h1>
            </div>
        </div>
    </div>
</section>

<section id="about" >
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="block-header">HI MOMS</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="/img/about_2.jpg" >
            </div>
            <div class="col-sm-8" style="text-align:justify !important">
                <p>I’m Janette Erasmus, an Occupational Therapist and Mom of two awesome little girls.  I’ve been practising as an Occupational Therapist since 2002 and have worked in South Africa and the UK in a variety of fields. I have chosen to specialise in Paediatrics and adore working with babies, toddlers and young children.  </p>
                <p>

                <p>In 2015 I started “Happy Healthy Baby” because I wanted to create a safe space where Moms can meet and learn the valuable skill of Baby Massage or participate in Baby Yoga.   I used to constantly get asked for general developmental advice and I wanted to develop a forum where Moms can get information about their baby’s sleeping, eating, fussiness, general developmental milestones etc. and learn about stimulating their child (all of which are areas I deal with as an OT in my practice) AND/OR get time to and learn how to do some gentle exercises for yourself and learn valuable relaxation techniques.</p>
                <p>Some of the benefits of attending a Happy Healthy Baby class or course are:</p>


                <ol class="list3">
                    <li>Stimulate your baby’s social, mental and physical development</li>
                    <li>Bond with your baby and develop a deeper connection with your little one</li>
                    <li>Increase your baby’s general health and wellbeing</li>
                    <li>Baby Massage has been proven to reduce the effects and prevalence of Post-natal depression</li>
                    <li>Help with general ailments (i.e. constipation, winds, colic)</li>
                    <li>Baby Yoga will help you to regain and maintain a good posture and core strength following childbirth</li>
                    <li>Socialize with other Moms, sharing experiences and learning together in a safe environment</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section id="services_header" class="bg-color2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bg-color2 section_break">
                <h1 class="section_break_header">Services</h1>
            </div>
        </div>
    </div>
</section>

<section id="services" >
    <div class="container">
        <div class="row">
            <div class="block col-sm-4">
                <div class="single_teaser intro_images">
                    <div class="introimg">
                        <img src="/img/1.png" alt="">
                    </div>
                    <h3><a href='/services/yoga'>Baby Yoga</a></h3>
                    <p>Join a weekly class and learn to use a series of gentle movements and stretches to help baby’s physical, social and mental development as well as helping you as Mom recover your core strength and flexibility; get time to truly relax; and get advice and positive encouragement</p>


                </div>
            </div>

            <div class="block col-sm-4">
                <div class="single_teaser intro_images">
                    <div class="introimg">
                        <img src="/img/2.png" alt="">
                    </div>
                    <h3><a href='/services/massage'>Baby Massage</a></h3>
                    <p>Learn a skill that will improve the bonding between you and your baby whilst at the same time benefiting your baby’s overall physical, sensory and cognitive development.</p>

                </div>
            </div>

            <div class="block col-sm-4">
                <div class="single_teaser intro_images">
                    <div class="introimg">
                        <img src="/img/3.png" alt="">
                    </div>
                    <h3><a href="#">Occupational Therapy</a></h3>
                    <p>Contact Janette directly on 083 256 9826 for Occupational Therapy services</p>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact_header" class="bg-color2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bg-color2 section_break">
                <h1 class="section_break_header">Contact</h1>
            </div>
        </div>
    </div>
</section>

<section id="info" class="">
    <div class="container"><div class="row">
            <div class="col-sm-12 text-center">
                <h5 class="contact-phone">083 256 9826</h5>
                <h4 class="contact-email"><span><a href="mailto:janette@happyhealthybaby.co.za">janette@happyhealthybaby.co.za</a></span></h4>
                <p class="contact-address">19 Pentlands Place, Beacon Bay, East London</p>
            </div>
        </div></div>
</section>

<section id="map_wrap">
    <div id="map"></div>
</section>

<section id="enquiry_header" class="bg-color2">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center bg-color2 section_break">
                <h1 class="section_break_header">Enquiry</h1>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="block-header">Get In Touch</h2>
                <p>Feel free to contact us at any time</p>
                <p id="social" class="text-center">
                    <a class="socialico-facebook" href="https://www.facebook.com/happyhealthybaby/" target="_blank" title="Facebook">£</a>
                    <a class="socialico-google" href="#"  target="_blank"  title="Google">#</a>
                </p>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="contact-form">





                    <div id="errormsgaddlead" class="alert alert-danger hidden col-md-6 col-md-offset-3 alert-error-addlead ">	</div>

                    <form class="" method="post" action="/leads/add_pro/" accept-charset="utf-8" >



                        <div  id="name-group" class="col-md-6 col-md-offset-3">
                            <label for="cell">Name <span class="required">*</span></label>
                            <input type="text" aria-required="true" name="name" id="name" class="form-control" placeholder="">
                        </div>


                        <div  id="email-group" class="col-md-6 col-md-offset-3">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" aria-required="true" size="30"  id="email" class="form-control" placeholder="">
                        </div>


                        <div id="cell-group"  class="col-md-6 col-md-offset-3">
                            <label for="cell">Mobile Number <span class="required">*</span></label>
                            <input type="text" aria-required="true"  name="cell" id="cell" class="form-control" placeholder="">
                        </div>



                        <div id="babydob-group" class="col-md-6 col-md-offset-3">
                            <label for="cell">Baby's Date of Birth <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30"  name="baby_dob" id="babydob" class="form-control" placeholder="">
                        </div>


                        <div  id="message-group" class="col-md-6 col-md-offset-3 ">
                            <label for="message">Message</label>
                            <textarea aria-required="true" rows="5" name="message" id="message" class="form-control" ></textarea>
                        </div>


                        <div class=" text-center col-md-6 col-md-offset-3">

                            <button  type="submit" class="theme_btn btn-add-lead"> Submit</button>
                        </div>

                    </form>


                </div>
            </div>

        </div>
    </div>
</section>



<section id="copyright" class="bg-color4">
    <div class="container"><div class="row">

            <div class="col-sm-12"><p class="text-center white_text">&copy; Copyright {{date('Y')}}. Developed by <a href="http://www.tindaletech.co.za" target="_blank">Tindale (Software Development)</a></p></div>

        </div></div>
</section>





<script src="{{asset('js/libs.js')}}"></script>




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





<script type="text/javascript">
    // When the document is ready
    $(document).ready(function () {

        $('#babydob').datepicker({
            format: "yyyy-mm-dd"
        });

    });
</script>




</body>
</html>