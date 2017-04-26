@extends('layouts.admin')




@section('page-header')

    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Dashboard</span> - Leads</h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="{{ url('/admin') }}" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Baby Massage</span></a>
                    <a href="{{ url('/admin') }}" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Baby Yoga</span></a>
                    <a href="{{ url('/admin') }}" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Yoga Attendance</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="{{route('admin.leads.index')}}">Leads</a></li>
                <li class="active">Records List</li>
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
                <h5 class="panel-title">Leads</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>

            <div class="panel-body">
                <a href="{{route('admin.leads.create')}}"><button type="button" class="btn btn-primary">Create New Lead</button></a>
            </div>

                @if(Session::has('created_lead'))
                <div class="panel-body">
                    <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                         {{session('created_lead')}}
                    </div>
                </div>
                @endif

            @if(Session::has('updated_lead'))
                <div class="panel-body">
                    <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                        {{session('updated_lead')}}
                    </div>
                </div>
            @endif

            @if(Session::has('deleted_lead'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                        {{session('deleted_lead')}}
                    </div>
                </div>
            @endif



            <table class="table datatable-basic">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Created</th>
                    <th>Attended? </th>

                </tr>
                </thead>
                <tbody>

                @if($leads)

                    @foreach($leads as $lead)

                <tr>
                    <td>{{$lead->id}}</td>
                    <td><a href="{{route('admin.leads.edit',$lead->slug)}}">{{$lead->name}}</a></td>
                    <td><a href="mailto:{{$lead->email}}" target="_blank">{{$lead->email}}</a></td>
                    <td>{{$lead->status}}</td>
                    <td>{{$lead->created_at->diffforHumans()}}</td>
                    <td>
                            {!! Form::model($leads,['method'=>'PATCH' ,'action'=>['AdminLeadsController@update',$lead->id]]) !!}

                            <input type="hidden" name="status" value="ATTENDED">


                            <div class="form-group">
                                {!! Form::submit('Attended',
                                  array('class'=>'btn border-success text-warning-600 btn-flat btn-icon')) !!}
                            </div>
                            {!! Form::close() !!}

                          </td>

                </tr>

                    @endforeach

                @endif

                </tbody>
            </table>
        </div>


    </div>
    <!-- / content -->


@endsection
