{{-- Header --}}
@include('coreui-static::partials.header')

{{-- Admin Bar --}}
@include('coreui-static::partials.admin-bar')

<!-- Body -->
<div class="app-body">

    {{-- Sidebar --}}
    @include('coreui-static::partials.sidebar')
    
    <!-- Main content -->
    @include('coreui-static::partials.main-content')

    {{-- Aside --}}
    @include('coreui-static::partials.aside')
</div> <!-- .app-body -->

{{-- Footer Bar --}}
@include('coreui-static::partials.footer-bar')

{{-- Footer --}}
@include('coreui-static::partials.footer')
