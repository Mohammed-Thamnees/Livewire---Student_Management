<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@hasSection('title')
		<title>@yield('title') - {{ config('app.name') }}</title>
	@else
		<title>{{ config('app.name') }}</title>
	@endif

	<!-- Favicon -->
	<link rel="shortcut icon" href="{{ url(asset('favicon.ico')) }}">

	<!-- Fonts -->
	<link rel="stylesheet" href="https://rsms.me/inter/inter.css">

	<!-- Styles -->
	<link rel="stylesheet" href="{{ url(mix('css/app.css')) . '?v=' . filemtime(public_path('css/app.css')) }}">

	<!-- Admin panel Template Css Start-->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/app.min.css') }}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/magnific-popup/magnific-popup.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/libs/toastr/build/toastr.min.css') }}">
    <link href="{{ asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset('js/jquery.min.js') }}"></script>
	<!-- Admin panel Template Css End -->


	@stack('styles')
	@livewireStyles

	<!-- Scripts -->
	<script src="{{ url(mix('js/app.js')) }}" defer></script>

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<style>
		.sidebar-nav-custom::-webkit-scrollbar {
			width: 18px;
			height: 16px;
		}

		/* Track */
		.sidebar-nav-custom::-webkit-scrollbar-track {
			background: rgba(31, 41, 51, 1);
		}

		/* Handle */
		.sidebar-nav-custom::-webkit-scrollbar-thumb {
			background: #cbd5e0;
			border-radius: 100vh;
			border: 3px solid #edf2f7;
		}

		/* Handle on hover */
		.sidebar-nav-custom::-webkit-scrollbar-thumb:hover {
			background: #a0aec0;
		}
	</style>
</head>

<body data-topbar="dark" data-layout="horizontal">
	@yield('body')
	@livewireScripts
	@livewire('livewire-ui-modal')
	@stack('scripts')
	@livewire('notifications')

	<!-- Admin panel Template JS Start -->
	<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
	<script src="{{ asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('assets/libs/metismenu/metisMenu.min.js') }}"></script>
	<script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
	<script src="{{ asset('assets/libs/node-waves/waves.min.js') }}"></script>
	<script src="{{ asset('assets/libs/select2/js/select2.min.js') }}"></script>
	<script src="{{ asset('assets/js/pages/form-advanced.init.js') }}"></script>
	<script src="{{ asset('assets/libs/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
	<script src="{{ asset('assets/js/pages/lightbox.init.js') }}"></script>
	<script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
	<script src="{{ asset('assets/js/pages/dashboard.init.js') }}"></script>
	<script src="{{ asset('assets/js/app.js') }}"></script>
	<script src="{{ asset('assets/libs/toastr/build/toastr.min.js') }}"></script>
	<script src="{{ asset('assets/js/pages/toastr.init.js') }}"></script>
	<script src="{{ asset('assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
	<script src="{{ asset('assets/js/pages/datatables.init.js') }}"></script> 
	<script src="{{ asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
	<script src="{{ asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
	{{-- {!! Toastr::message() !!} --}}
	<!-- Admin panel Template JS End -->

</body>

</html>
