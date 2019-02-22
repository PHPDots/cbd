<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>{{ isset($page_title) ? $page_title:"Chicago's Best Dentistry" }}</title>
	<link href="{{ asset('/images/favicon.ico') }}" rel="shortcut icon" type="image/x-icon" />
	<link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/style.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/responsive.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet" />
	<link href="{{ asset("css/fonts.css") }} rel="stylesheet" />
	@if(!\Request::is('/','index.html'))
			<link href="{{ asset("css/magnific-popup.css") }}" rel="stylesheet" type="text/css"/>
	@endif
	<link href="{{ asset("css/owl.carousel.min.css") }}" rel="stylesheet" type="text/css"/>
	@yield('styles')
</head>
<body>
	@include('includes.header')
    @yield('content')
    <div id="AjaxLoaderDiv">
        <div id="blank_part"></div>
        <div id="img_part">
        	<img src="{{ asset('images/ajax-loader.gif') }}" alt="Ajax Loader" />
        </div>
    </div>    
    @include('includes.footer')
	<script src="{{ asset('js/jquery.min.js') }}"></script>
	<script src="{{ asset('js/popper.min.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.bootstrap-growl.min.js') }}"></script>
	<script src="{{ asset('js/custom.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/jquery.magnific-popup.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('js/owl.carousel.cms.js') }}" type="text/javascript"></script>
	@yield('scripts')
</body>
</html>
