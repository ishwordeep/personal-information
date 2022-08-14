<html>

@include('common.head')

<body class="bg-dark">

    @include('common.header')
    <div class="container">
        @yield('content')
    </div>
    @include('common.footer')
</body>

</html>
