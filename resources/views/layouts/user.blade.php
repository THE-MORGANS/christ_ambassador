<!DOCTYPE HTML>
<html lang="en">

<head>
    @include('partials.user.head')
</head>

<body>

    <div class="preloader-wrap" id="preloader-wrap">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header -->
    @include('partials.user.header')
    <!-- /Header -->

    @yield('content')

    <!-- Footer -->
    @include('partials.user.footer')
    <!-- /End Footer -->


    <!-- Scripts -->
    @include('partials.user.scripts')
</body>
</html>