<!doctype html>
<html lang="en">
<head>

    @include('includes.head')

</head>
<body>


<!-- TOP HEADER Start
    ================================================== -->

    @include('includes.header')


    @yield('content')




<!-- CALL TO ACTION Start
================================================== -->

    @include('includes.footer')

    @include('includes.script')

</body>
</html>