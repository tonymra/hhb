@extends('layouts.common')




@section('header')

    @include('includes.website-header')

@endsection




@section('slider')

    @include('includes.website-slider')

@endsection


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
                    <img src="{{asset('assets/public/img/about_2.jpg')}}" >
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
                            <img src="{{asset('assets/public/img/1.png')}}" alt="">
                        </div>
                        <h3><a href='/'>Baby Yoga</a></h3>
                        <p>Join a weekly class and learn to use a series of gentle movements and stretches to help baby’s physical, social and mental development as well as helping you as Mom recover your core strength and flexibility; get time to truly relax; and get advice and positive encouragement</p>


                    </div>
                </div>

                <div class="block col-sm-4">
                    <div class="single_teaser intro_images">
                        <div class="introimg">
                            <img src="{{asset('assets/public/img/2.png')}}" alt="">
                        </div>
                        <h3><a href='/'>Baby Massage</a></h3>
                        <p>Learn a skill that will improve the bonding between you and your baby whilst at the same time benefiting your baby’s overall physical, sensory and cognitive development.</p>

                    </div>
                </div>

                <div class="block col-sm-4">
                    <div class="single_teaser intro_images">
                        <div class="introimg">
                            <img src="{{asset('assets/public/img/3.png')}}" alt="">
                        </div>
                        <h3><a href="#">Occupational Therapy</a></h3>
                        <p>Contact Janette directly on 083 256 9826 for Occupational Therapy services</p>

                    </div>
                </div>
            </div>
        </div>
    </section>






@endsection









@section('scripts')


@endsection

