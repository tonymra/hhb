@extends('layouts.admin')




@section('page-header')

    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Dashboard</span> - Class Cards</h4>
            </div>

            <div class="heading-elements">
                <div class="heading-btn-group">
                    <a href="" class="btn btn-link btn-float has-text">{{$total_cards}}<span>Total Records</span></a>
                </div>
            </div>
        </div>

        <div class="breadcrumb-line">
            <ul class="breadcrumb">
                <li><a href="{{ url('/admin') }}"><i class="icon-home2 position-left"></i> Home</a></li>
                <li><a href="{{route('admin.cards.index')}}">Class Cards</a></li>
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
                <h5 class="panel-title">Class Cards</h5>
                <div class="heading-elements">
                    <ul class="icons-list">
                        <li><a data-action="collapse"></a></li>
                        <li><a data-action="close"></a></li>
                    </ul>
                </div>
            </div>




            <div class="panel-body">

                @if(Session::has('created_card'))
                    <div class="panel-body">
                        <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            {{session('created_card')}}
                        </div>
                    </div>
                @endif

                @if(Session::has('updated_card'))
                    <div class="panel-body">
                        <div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            {{session('updated_card')}}
                        </div>
                    </div>
                @endif

                @if(Session::has('deleted_card'))
                    <div class="panel-body">
                        <div class="alert alert-danger alert-styled-left alert-arrow-left alert-bordered">
                            <button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
                            {{session('deleted_card')}}
                        </div>
                    </div>
                @endif





                <div class="col-md-6">

                    {!! Form::open(['method'=>'POST' ,'action'=>'AdminCardsController@store', 'files'=>true]) !!}

                    <fieldset class="content-group">

                        <legend class="text-bold"></legend>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name','Name of card') !!}
                            {!! Form::text('name', null,
                                array('class'=>'form-control border-teal border-lg')) !!}

                            @if ($errors->has('name'))
                                <span class="help-message">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                            @endif
                        </div>



                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            {!! Form::label('price','Price') !!}
                            {!! Form::text('price', null,
                                array('class'=>'form-control border-teal border-lg')) !!}

                            @if ($errors->has('price'))
                                <span class="help-message">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                            @endif
                        </div>



                        <div class="form-group{{ $errors->has('quantity') ? ' has-error' : '' }}">
                            {!! Form::label('quantity','Number of credits') !!}
                            {!! Form::text('quantity', null,
                                array('class'=>'form-control border-teal border-lg')) !!}

                            @if ($errors->has('quantity'))
                                <span class="help-message">
                                        <strong>{{ $errors->first('quantity') }}</strong>
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
                            <th>Price</th>
                            <th>Credits</th>
                            <th>Created</th>
                            <th>Action </th>

                        </tr>
                        </thead>
                        <tbody>

                        @if($cards)

                            @foreach($cards as $card)

                                <tr>

                                    <td><a href="{{route('admin.cards.edit',$card->slug)}}">{{$card->name}}</a></td>
                                    <td>{{$card->price}}</td>
                                    <td>{{$card->quantity}}</td>
                                    <td>{{$card->created_at->diffforHumans()}}</td>
                                    <td>

                                        {!! Form::open(['method'=>'DELETE' ,'action'=>['AdminCardsController@destroy',$card->id]]) !!}


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
