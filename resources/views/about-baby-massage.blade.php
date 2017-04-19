@extends('layouts.common')




@section('header')

    @include('includes.website-header')

@endsection




@section('slider')

    <section id="top_header" class="bg-color2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bg-color2 section_break">
                    <h1 class="section_break_header">Baby Massage</h1>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('content')




    <section id="image_header" class="parallax image_header_massage">
        <div class="container">
            <div class="row to_fade">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6s">
                    <h2 class="white_text text-center">&nbsp;                    </h2>
                    <h2 class="white_text text-center">&nbsp;</h2>
                    <h2 class="white_text text-center">Baby Massage is a way of expressing love, care and respect through touch that has been shown to have many benefits to parent-child attachment and children’s development. Baby Massage is a touch that mothers and other caregivers do WITH their baby not TO their baby. It is an interaction that involves gentle strokes and caresses over the baby’s skin.</h2>
                    <p>&nbsp;</p>
                    <p>&nbsp;</p>
                </div>
                <div class="col-sm-3">
                </div>
            </div>
        </div>
    </section>

    <section id="about_header" class="bg-color2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bg-color2 section_break">
                    <h1 class="section_break_header">About</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="about" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/2.png')}}" alt="">
                        <h3 class="purple_text text-center">What is it?</h3>
                    </div>
                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <ul class="list2">
                            <li>I teach you the skill of Baby Massage, which is an in depth and detailed number of strokes with specific benefits to each stroke.  You learn to use the different strokes in a way and for what you and your baby need.  It is a skill that I believe you can use well into your child’s toddler years.</li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/1.png')}}" alt="">
                        <h3 class="purple_text text-center">Why Should You Learn To Massage Your Baby?</h3>
                    </div>

                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <ul class="list2">
                            <li>Improves bonding</li>
                            <li>Reduces prevalence of postnatal depression</li>
                            <li>Assists your baby's transition from the womb to the world</li>
                            <li>Supports you in developing your ‘baby handling skills’</li>
                            <li>Improves sleep, relieves colic and constipation</li>
                            <li>Helps with teething pain and calms/soothes fussy babies</li>
                            <li>Strengthens digestive & respiratory systems</li>
                            <li>Encourages overall physical and  cognitive development</li>
                        </ul>
                    </div>

                </div>
                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/3.png')}}" alt="">
                    </div>

                    <h3 class="purple_text text-center">How is the Baby Massage classes structured?</h3>

                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">

                        <ul class="list2">
                            <li>Each course consists of 5 classes, run over 5 weeks</li>
                            <li>Classes are approx. 1-1.5hrs long</li>
                            <li>Developmental age-appropriate classes are offered (newborn to pre-crawlers, and crawling babies to pre-walking babies)</li>
                            <li>Class sizes are limited to ensure you get personal attention</li>
                            <li>1:1 or small group sessions in the convenience of your own home can be arranged</li>
                        </ul>

                    </div>



                </div>



                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/1.png')}}" alt="">
                    </div>
                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <h3 class="purple_text text-center">How old should baby be?</h3>
                        <ul class="list2">
                            <li>Preferably 6 weeks old.  Babies younger than 6 weeks tend to sleep a lot and will miss most of the classes. Please contact me to discuss this if you would like to bring your baby who is younger than 6 weeks.</li>
                            <li>Older babies are welcome too, however, once they get to active crawling and walking age, they’re best suited to smaller or 1:1 classes – please contact me to arrange this!</li>
                        </ul>
                    </div>

                </div>


                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/2.png')}}" alt="">
                        <h3 class="purple_text text-center">What to Bring?</h3>
                    </div>

                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">

                        <ul class="list2">
                            <li>A towel / blanket for your baby to lie on</li>
                            <li>A blanket to cover your baby (those parts not being massaged)</li>
                            <li>Water for you to drink during the class (massaging can be thirsty work!)</li>
                            <li>Your nappy bag with everything you normally take along when going out with baby</li>
                            <li>Please wear loose comfortable clothing</li>
                            <li>I also ask that you don’t wear any strong perfume when attending the class.</li>
                            <li>If you would like to bring your partner / baby's grandparents etc. that's no problem at all, please just let me know in advance so I know to accommodate them</li>
                        </ul>
                    </div>

                </div>

                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/3.png')}}" alt="">
                        <h3 class="purple_text text-center">What Will Be Provided?</h3>
                    </div>

                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <ul class="list2">
                            <li>There will be baby yoga mats for you to lay your towel/blanket on</li>
                            <li>You will be provided with a small container of massage oil at the first class.  This will be enough to last throughout the course and for all the practicing you’ll be doing at home ;)  Please remember to bring it back to all classes.</li>
                            <li>There will be a pillow for you to sit on, but please note that we will be sitting on the floor for the duration of the class – if this may be a problem for you, please contact me to discuss.</li>

                        </ul>
                    </div>
                </div>


                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/1.png')}}" alt="">
                        <h3 class="purple_text text-center">Where is the venue?</h3>
                    </div>

                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <ul class="list2">
                            <li>There are regular courses throughout the year, they are normally held on Wednesday mornings with some afternoon courses from time to time.  Please contact me for dates of the next available course</li>
                            <li>Beacon Bay - 19 Pentlands Place, Beacon Bay</li>
                            <li>Southernwood - Little Life Clinic - On Request</li>

                        </ul>
                    </div>
                </div>



                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/2.png')}}" alt="">
                        <h3 class="purple_text text-center">How much does it cost and how do I pay?</h3>
                    </div>


                    <!--   <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                    <ul class="list2">
                        <p>The cost is R650 for the 5-week course</p>
                        <p>Once you’ve made a booking, using our online booking form, you will get an invoice with banking details.  You can pay by EFT or cash if you prefer.</p>
                    </ul>
                    </div> -->

                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">

                        <ul class="list2">
                            <li>The cost is R650 for the 5-week course</li>
                            <li>Once you’ve made a booking, using our online booking form, you will get an invoice with banking details.  You can pay by EFT or cash if you prefer.</li>

                            <li><strong>Please complete our online booking form</strong></li>
                            <li>Once you’ve completed your booking, you will receive an invoice reflecting our banking details for the cost.  You can pay by EFT or  if you prefer, you can pay cash before your first class. </li>

                        </ul>
                    </div>

                </div>





                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/2.png')}}" alt="">
                        <h3 class="purple_text text-center">How do I book my space on the next course?</h3>
                    </div>
                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <ul class="list2">
                            <li>Please use the booking-tab </li>
                            <li>There are basic registration information and health questions you need to answer AND safety guidelines and disclaimer information that you must read before your first class</li>
                            <li>You will receive an invoice once your booking has been received and a confirmation email once your booking and payment has been processed</li>
                        </ul>

                    </div>
                </div>




                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/3.png')}}" alt="">
                        <h3 class="purple_text  text-center">What are the current clients saying?</h3>
                    </div>

                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <ul class="list2">
                            <li>Michan said: “Loved every moment of the massaging classes, and so did my baba, so relaxed and you learn so much! Will do it again! Thanks to Janette Erasmus! Nice way to bond with your baby as well! Janette helped in so many ways!”</li>

                            <li>Heidi said: “I did a massage class with Janette and it was lovely! She was extremely accommodating, patient and generous with her knowledge. I was having such a difficult time getting my child to sleep and she talked and supported me through babysense sleep training. I can't wait to do another class with her. My little guy loves being massaged and is so much calmer these days”</li>
                        </ul>
                    </div>
                </div>




            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h1 class="green_text"><a href='/booking' class="theme_btn inverse big_button">Booking is essential</a></h1>
                </div>
            </div>
        </div>
    </section>



@endsection









@section('scripts')


@endsection

