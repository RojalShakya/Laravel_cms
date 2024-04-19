<!DOCTYPE html>
<html lang="en">
<head>
    @include('frontend.layouts.css')
</head>
<body>
    <header class="header_area">
        @include('frontend.layouts.header')
    </header>
    @yield('content')
    <footer class="footer_area p_120">
        @include('frontend.layouts.footer')
</footer>
@include('frontend.layouts.js')
</body>
</html>
