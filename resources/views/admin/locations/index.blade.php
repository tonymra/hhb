@extends('layouts.admin')




@section('page-header')

    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Dashboard</span> - Locations</h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="" class="btn btn-link btn-float has-text">{{$total_locations}}<span>Total Locations</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="{{route('admin.locations.index')}}">Locations</a></li>
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
                <h5 class="panel-title">Locations</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>




            <div class="panel-body">

            @if(Session::has('created_location'))
                <div class="panel-body">
                    <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                        {{session('created_location')}}
                    </div>
                </div>
            @endif

            @if(Session::has('updated_location'))
                <div class="panel-body">
                    <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                        {{session('updated_location')}}
                    </div>
                </div>
            @endif

            @if(Session::has('deleted_location'))
                <div class="panel-body">
                    <div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
                        <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                        {{session('deleted_location')}}
                    </div>
                </div>
            @endif





           <div class="col-md-6">

               {!! Form::open(['method'=>'POST' ,'action'=>'AdminLocationsController@store', 'files'=>true]) !!}

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




                   <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                       {!! Form::label('address','Address') !!}
                       {!! Form::textarea('address', null,
                           array('class'=>'form-control border-teal border-lg','rows'=>2)) !!}

                       @if ($errors->has('address'))
                           <span class="help-message">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                       @endif
                   </div>




               </fieldset>

               <div class="text-center">
                   {!! Form::submit('Submit',
                     array('class'=>'btn btn-primary')) !!}
               </div>


               {!! Form::close() !!}



           </div>






            <div class="col-md-6">

            <table class="table datatable-basic">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Created</th>
                    <th>Action </th>

                </tr>
                </thead>
                <tbody>

                @if($locations)

                    @foreach($locations as $location)

                        <tr>
                            <td><a href="{{route('admin.locations.edit',$location->slug)}}">{{$location->name}}</a></td>
                            <td>{{$location->created_at->diffforHumans()}}</td>
                            <td>

                                    {!! Form::open(['method'=>'DELETE' ,'action'=>['AdminLocationsController@destroy',$location->id]]) !!}


                                    <div class="form-group">
                                        {!! Form::submit('DELETE',
                                          array('class'=>'btn border-danger text-warning-600 btn-flat btn-icon')) !!}
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
        </div>


    </div>
    <!-- / content -->


@endsection
