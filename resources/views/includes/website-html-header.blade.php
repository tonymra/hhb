<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">

    <title>{{config('app.title','Happy Healthy Baby')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="57x57" href="assets/public/img/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/public/img/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/public/img/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/public/img/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/public/img/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/public/img/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/public/img/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/public/img/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/public/img/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="assets/public/img/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/public/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/public/img/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/public/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/public/img/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content=" assets/public/img/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


    <!-- Assets -->
    <link rel="stylesheet" href="{{asset('assets/public/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('assets/public/css/animations.css')}}">
    <link rel="stylesheet" href="{{asset('assets/public/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/public/css/datepicker.css')}}">
    <script src="{{asset('assets/public/assets/public/js/vendor/modernizr-2.6.2.min.js')}}"></script>



    <!--Form Preloader-->


    <style>

        .loader {
            position: fixed;
            left: 0px;
            top: 0px;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background: url('assets/public/img/page-loader.gif') 50% 50% no-repeat rgb(249,249,249);
            opacity: 0.5;
        }
    </style>







    <script type="text/javascript">
        function selectcourses()
        {
            var course_type=$('#course_type').val();

            $.post('booking/coursestypes/',
                {
                    course_type:course_type

                },
                function(data)
                {

                    $('#course_id').html(data);

                });

        }
    </script>

</head>
