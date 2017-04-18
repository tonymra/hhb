
@include('includes.website-html-header')


<body><div id="top"></div>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
<![endif]-->


@include('includes.website-header')


@include('includes.website-slider')


@yield('content')


@include('includes.website-footer')


@include('includes.website-html-footer')


@yield('scripts')


</body>
</html>