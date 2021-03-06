@extends('layouts.admin')




@section('page-header')

    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Dashboard</span> - Leads</h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="" class="btn btn-link btn-float has-text">{{$total_leads}}<span>Total Leads</span></a>
                    <a href="" class="btn btn-link btn-float has-text">{{$total_new_leads}} <span>New Leads</span></a>
                    <a href="" class="btn btn-link btn-float has-text">{{$total_archived_leads}} <span>Archived Leads</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="{{route('admin.leads.index')}}">Leads</a></li>
                <li class="active">Edit</li>
            </ul>

            <ul class="breadcrumb-elements">
                <li><a href="mailto:tech@tindalegroup.com" target="_blank"><i class="icon-comment-discussion position-left"></i> Support</a></li>

            </ul>
        </div>
    </div>

@endsection





@section('content')


    <!-- content -->
    <div class="row">





        <div class="panel panel-flat">
            <div class="panel-heading">
                <h5 class="panel-title text-center">Edit Lead</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">


                <div class="col-lg-8 col-md-offset-2">

                    {!! Form::model($lead,['method'=>'PATCH' ,'action'=>['AdminLeadsController@update',$lead->id], 'files'=>true]) !!}

                    <fieldset class="content-group">

                        <legend class="text-bold"></legend>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name','Name') !!}
                            {!! Form::text('name', null,
                                array('class'=>'form-control border-teal border-lg')) !!}

                            @if ($errors->has('name'))
                                <span class="help-message">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            {!! Form::label('email','Email address') !!}
                            {!! Form::email('email', null,
                                array('class'=>'form-control border-teal border-lg')) !!}

                            @if ($errors->has('email'))
                                <span class="help-message">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            {!! Form::label('phone','Mobile phone number') !!}
                            {!! Form::text('phone', null,
                                array('class'=>'form-control border-teal border-lg')) !!}

                            @if ($errors->has('phone'))
                                <span class="help-message">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('babydob') ? ' has-error' : '' }}">
                            {!! Form::label('babydob','Baby\'s date of birth') !!}
                            <p>{{\Carbon\Carbon::parse($lead->babydob)->diff(\Carbon\Carbon::now())->format('%y year(s), %m month(s) and %d day(s)')}}</p>
                            {!! Form::text('babydob', null,
                                array('class'=>'form-control daterange-single border-teal border-lg')) !!}

                            @if ($errors->has('babydob'))
                                <span class="help-message">
                                        <strong>{{ $errors->first('babydob') }}</strong>
                                    </span>
                            @endif
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            {!! Form::label('message','Message') !!}
                            {!! Form::textarea('message', null,
                                array('class'=>'form-control border-teal border-lg','rows'=>3)) !!}

                            @if ($errors->has('message'))
                                <span class="help-message">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                            @endif
                        </div>




                    </fieldset>
                   <div class="col-md-12">
                       <div class="text-center">
                           {!! Form::submit('Update Lead',
                             array('class'=>'btn btn-success')) !!}
                       </div>
                   </div>





                    {!! Form::close() !!}

                </div>

            </div>
        </div>





    </div>
    <!-- / content -->


@endsection
