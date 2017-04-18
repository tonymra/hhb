@extends('layouts.common')





@section('content')


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
                    <img src="assets/public/img/about_2.jpg" >
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
                            <img src="assets/public/img/1.png" alt="">
                        </div>
                        <h3><a href='/'>Baby Yoga</a></h3>
                        <p>Join a weekly class and learn to use a series of gentle movements and stretches to help baby’s physical, social and mental development as well as helping you as Mom recover your core strength and flexibility; get time to truly relax; and get advice and positive encouragement</p>


                    </div>
                </div>

                <div class="block col-sm-4">
                    <div class="single_teaser intro_images">
                        <div class="introimg">
                            <img src="assets/public/img/2.png" alt="">
                        </div>
                        <h3><a href='/'>Baby Massage</a></h3>
                        <p>Learn a skill that will improve the bonding between you and your baby whilst at the same time benefiting your baby’s overall physical, sensory and cognitive development.</p>

                    </div>
                </div>

                <div class="block col-sm-4">
                    <div class="single_teaser intro_images">
                        <div class="introimg">
                            <img src="assets/public/img/3.png" alt="">
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




@endsection



@section('scripts')


@endsection

