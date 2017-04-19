
@include('includes.website-html-header')


<body><div id="top"></div>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->

@yield('header')


@yield('slider')


@yield('content')



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

                    <form class="" method="post" action="leads/add_pro/" accept-charset="utf-8" >



                        <div  id="name-group" class="col-md-6 col-md-offset-3">
                            <label for="cell">Name <span class="required">*</span></label>
                            <input type="text" aria-required="true" value="" name="name" id="name" class="form-control" placeholder="">
                        </div>


                        <div  id="email-group" class="col-md-6 col-md-offset-3">
                            <label for="email">Email <span class="required">*</span></label>
                            <input type="email" aria-required="true" size="30" value="" name="email" id="email" class="form-control" placeholder="">
                        </div>


                        <div id="cell-group"  class="col-md-6 col-md-offset-3">
                            <label for="cell">Mobile Number <span class="required">*</span></label>
                            <input type="text" aria-required="true" value="" name="cell" id="cell" class="form-control" placeholder="">
                        </div>



                        <div id="babydob-group" class="col-md-6 col-md-offset-3">
                            <label for="cell">Baby's Date of Birth <span class="required">*</span></label>
                            <input type="text" aria-required="true" size="30" value="" name="baby_dob" id="babydob" class="form-control" placeholder="">
                        </div>


                        <div  id="message-group" class="col-md-6 col-md-offset-3 ">
                            <label for="message">Message</label>
                            <textarea aria-required="true" rows="5" name="message" id="message" class="form-control" placeholder=""></textarea>
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




@include('includes.website-footer')


@include('includes.website-html-footer')


@yield('scripts')


</body>
</html>