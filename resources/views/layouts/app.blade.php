@extends('layouts.base')

@section('body')
	<div id="layout-wrapper" x-data="setup()" x-init="$refs.loading.classList.add('hidden')">

		@include('layouts.app.header')

		@include('layouts.app.nav')

		<div class="main-content">
            <div class="page-content">
                <div class="container-fluid">

                	@yield('content')
                        
                </div>
            </div>
            <!-- End Page-content -->

            @include('layouts.app.footer')
        </div>

		@isset($slot)
			{{ $slot }}
		@endisset
	</div>

	<script>
		const setup = () => {
			// Create a media condition that targets viewports at least 768px wide
			const sm = window.matchMedia('(min-width: 768px)')
			// Check if the media query is true

			return {
				loading: true,
				isSidebarOpen: sm.matches ? true : false,
				toggleSidbarMenu() {
					this.isSidebarOpen = !this.isSidebarOpen
				},
				isSettingsPanelOpen: false,
				isSearchBoxOpen: false,
			}
		}
	</script>
@endsection
