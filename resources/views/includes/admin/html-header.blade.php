<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>HHB | {{$pagetitle}}</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/icons/icomoon/styles.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/minified/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/minified/core.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/minified/components.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('assets/admin/css/minified/colors.min.css')}}" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="{{asset('assets/admin/js/plugins/loaders/pace.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/js/core/libraries/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/js/core/libraries/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/js/plugins/loaders/blockui.min.js')}}"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="{{asset('assets/admin/js/plugins/visualization/d3/d3.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/js/plugins/visualization/d3/d3_tooltip.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/js/plugins/forms/styling/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/js/plugins/forms/styling/uniform.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/js/plugins/forms/selects/bootstrap_multiselect.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/js/plugins/ui/moment/moment.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/js/plugins/pickers/daterangepicker.js')}}"></script>

    <script type="text/javascript" src="{{asset('assets/admin/js/core/app.js')}}"></script>
    <script type="text/javascript" src="{{asset('assets/admin/js/pages/dashboard.js')}}"></script>
    <!-- /theme JS files -->

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>