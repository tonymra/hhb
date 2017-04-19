@extends('layouts.common')




@section('header')

    @include('includes.website-header')

@endsection




@section('slider')

    <section id="top_header" class="bg-color2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bg-color2 section_break">
                    <h1 class="section_break_header">Baby Yoga</h1>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('content')



    <section id="image_header" class="parallax image_header_yoga">
        <div class="container">
            <div class="row to_fade">
                <div class="col-sm-3">
                </div>
                <div class="col-sm-6s">
                    <h2 class="white_text">&nbsp;</h2>
                    <p>&nbsp;</p>
                    <p>&nbsp; </p>
                    <h2 class="white_text text-center">Baby Yoga uses a series of gentle movements and stretches in a fun way to help stimulate your baby’s physical, social, sensory and mental development.  At the same time, you will have a chance to do some gentle exercises and stretches to help improve your posture, flexibility and core strength, get time to truly relax and receive advice and positive encouragement. </h2>
                    <p>&nbsp;</p>
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
                    <div class="introimg text-center">
                        <img src="{{asset('assets/public/img/2.png')}}" alt="">
                        <h3 class="text-center purple_text">What happens at a Baby yoga class?</h3>
                    </div>
                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <ul class="list2">
                            <li>A baby yoga class normally lasts for an hour with additional time allocated afterwards for Moms to chat and ask questions.  During the class, you and baby will both go through a series of movements and stretches, incl. seated and standing poses with lots of movement and proprioceptive stimulation for your baby.  Every session finishes with a short relaxation therapy for the Moms and sensory stimulation for the babies.</li>

                        </ul>
                    </div>
                </div>



                <div class="col-sm-12 text-center">
                    <div class="introimg text-center">
                        <img src="{{asset('assets/public/img/1.png')}}" alt="">
                        <h3 class="text-center purple_text">Why should I go to Baby Yoga classes?</h3>
                    </div>
                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <ul class="list2">
                            <li>It will help you and baby to relax</li>
                            <li>The movements and poses we use will help your baby’s physical, social and cognitive development</li>
                            <li>It will help your baby sleep better</li>
                            <li>You will gain tools to use to alleviate specific ailments such as tummy problems</li>
                            <li>The gentle stretches and exercises we do will help you recover from childbirth by improving your own core strength and flexibility</li>
                            <li>The classes provide you with a safe and comfortable place to interact with other Moms and babies- you’ll make new friends </li>
                            <li>The class will give you an hour every week where you get away from everything else and really bond with your baby</li>
                            <li>Improves circulation</li>
                            <li>You will benefit from having weekly relaxation therapy as part of each session – the benefits of being in a true relaxed state for even a short while has untold health benefits and can really help you if you are suffering from a lack of sleep</li>
                            <li>You and baby will have fun!</li>
                            <li>The classes are run on a “drop-in” basis, which means you choose the number of classes you want to purchase and then use them when you’re available – you don’t lose a paid class if you or baby are unwell</li>
                        </ul>
                    </div>
                </div>


                <div class="col-sm-12 text-center">
                    <div class="introimg text-center">
                        <img src="{{asset('assets/public/img/1.png')}}" alt="">
                        <h3 class="text-center purple_text">How old should my baby be to go to Baby Yoga?</h3>
                    </div>
                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <ul class="list2">
                            <li>Babies should be at least 6-8weeks old before coming to Baby yoga</li>
                            <li>Classes can be attended with babies up to the age of 18months.  IF your child is older than 9 months and very active, you may have to move to another class for older babies.</li>
                        </ul>
                    </div>
                </div>


                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/3.png')}}" alt="">
                        <h3 class="purple_text text-center ">When and where are the Baby yoga classes?</h3>
                    </div>
                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <ul class="list2">
                            <li>Baby yoga classes happen weekly. You choose the venue and time of class that suits you and come to that class weekly. </li>
                            <li>Beacon Bay - 19 Pentlands Place, Beacon Bay - Weekly, Tues @ 10h00</li>
                            <li>Southernwood - Little Life Clinic - On Request</li>

                        </ul>
                    </div>
                </div>


                <div class="col-sm-12 text-center">
                    <div class="introimg">
                        <img src="{{asset('assets/public/img/1.png')}}" alt="">
                        <h3 class="purple_text text-center">How much does it cost and how do I pay?</h3>
                    </div>
                    <div class="col-md-8 col-md-offset-2" style="text-align:justify !important">
                        <p>You can purchase either a 5-class or a 10-class Baby Yoga card and utilise the classes whenever you are available</p>
                        <ul class="list2">
                            <li>5-class card – R600 (valid for 3 months)</li>
                            <li>10-class card – R1000 (valid for 6 months)</li>
                        </ul>
                        <p><strong>Please complete our online booking form</strong></p>
                        <p>Once you’ve completed your booking, you will receive an invoice reflecting our banking details for the cost.  You can pay by EFT or  if you prefer, you can pay cash before your first class. </p>
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

