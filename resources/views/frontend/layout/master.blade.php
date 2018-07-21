@include('frontend.header')
@if(\Request::is('/*'))
@include('frontend.slider')
@endif
@yield('content')
@include('frontend.footer')