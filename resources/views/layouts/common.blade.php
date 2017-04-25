
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
                <h2 >Get in touch</h2>
                <p class="lead">Feel free to contact us at any time</p>
                <p id="social" class="text-center">
                    <a class="socialico-facebook" href="https://www.facebook.com/happyhealthybaby/" target="_blank" title="Facebook">£</a>
                    <a class="socialico-google" href="#"  target="_blank"  title="Google">#</a>
                </p>

            </div>
        </div>
        <div class="row">


            <div class="col-lg-8 col-lg-offset-2">


                {!! Form::open(['method'=>'POST' ,'action'=>'WebsiteLeadsController@store', 'files'=>true]) !!}

                    <div class="messages">

                        @if(Session::has('created_enquiry'))

                            <div class="alert alert-success alert-white rounded ">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <p>{{session('created_enquiry')}}</p>
                            </div>

                        @endif


                    </div>

                    <div class="controls">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    {!! Form::label('name','Your name *') !!}
                                    {!! Form::text('name', null,
                                        array('class'=>'form-control')) !!}
                                    <div class="help-block with-errors">
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                       <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('baby_dob') ? ' has-error' : '' }}">
                                    {!! Form::label('baby_dob','Baby\'s date of birth *') !!}
                                    {!! Form::text('baby_dob', null,
                                        array('class'=>'form-control')) !!}
                                    <div class="help-block with-errors">
                                        @if ($errors->has('baby_dob'))
                                            <span class="help-block">
                                                       <strong>{{ $errors->first('baby_dob') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    {!! Form::label('email','Email address *') !!}
                                    {!! Form::email('email', null,
                                        array('class'=>'form-control')) !!}
                                    <div class="help-block with-errors">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                       <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {!! Form::label('phone','Mobile phone number *') !!}
                                    {!! Form::text('phone', null,
                                        array('class'=>'form-control')) !!}
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                              <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                                    {!! Form::label('message','Message *') !!}
                                    {!! Form::textarea('message', null,
                                        array('class'=>'form-control')) !!}
                                    <div class="help-block with-errors">
                                        @if ($errors->has('message'))
                                            <span class="help-message">
                                                       <strong>{{ $errors->first('message') }}</strong>
                                                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12 text-center">
                              <div class="form-group">
                                {!! Form::submit('Send message',
                                  array('class'=>'btn btn-success btn-lg')) !!}
                              </div>
                            </div>


                        </div>

                    </div>

                {!! Form::close() !!}

            </div><!-- /.8 -->





        </div>
    </div>
</section>




@include('includes.website-footer')


@include('includes.website-html-footer')


@yield('scripts')


</body>
</html>