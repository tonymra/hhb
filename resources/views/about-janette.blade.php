@extends('layouts.common')




@section('header')

    @include('includes.website-header')

@endsection




@section('slider')

    <section id="top_header" class="bg-color2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bg-color2 section_break">
                    <h1 class="section_break_header">Janette Erasmus</h1>
                </div>
            </div>
        </div>
    </section>

@endsection


@section('content')




    <section id="about" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="block-header">Hi Moms</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 text-center">
                    <img src="{{asset('assets/public/img/about_2.jpg')}}" >
                </div>
                <div class="col-sm-8" style="text-align:justify !important">
                    <p>I’m Janette Erasmus, an Occupational Therapist and Mom of two awesome little girls.  I’ve been practising as an Occupational Therapist since 2002 and have worked in South Africa and the UK in a variety of fields.   I have chosen to specialise in Paediatrics and adore working with babies, toddlers and young children.  </p>
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





@endsection









@section('scripts')


@endsection

