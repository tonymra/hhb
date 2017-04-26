@extends('layouts.admin')




@section('page-header')

    <div class="page-header">
        <div class="page-header-content">
            <div class="page-title">
                <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">HHB</span> - Admin Dashboard</h4>
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
                <li><a href="{{ url('/admin') }}">Main</a></li>
                <li class="active">Dashboard</li>
            </ul>

            <ul class="breadcrumb-elements">
                <li><a href="mailto:tech@tindalegroup.com" target="_blank"><i class="icon-comment-discussion position-left"></i> Support</a></li>

            </ul>
        </div>
    </div>

@endsection





@section('content')


    <!-- Dashboard content -->
    <div class="row">





    </div>
    <!-- /dashboard content -->


@endsection
