{{-- html head section inclusive of opening body tag --}}
@include('coreui-static::partials.header')

	<!-- container for all content -->
	<div id="app">

		{{-- Admin Bar --}}
		@include('coreui-static::partials.admin-bar')

	    {{-- Sidebar --}}
	    @include('coreui-static::partials.sidebar')

	    <!-- Main content -->
	    @include('coreui-static::partials.main-content')

	    {{-- Aside --}}
	    @include('coreui-static::partials.aside')

		{{-- Footer Bar --}}
		@include('coreui-static::partials.footer-bar')
	</div> <!-- #app -->

{{-- html foot section inclusive of closing body & html tag --}}
@include('coreui-static::partials.footer')
