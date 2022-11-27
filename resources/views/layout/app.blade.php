<!DOCTYPE html>

<head>
    @include('layout.css')

    @yield('styles')
</head>

<body>
    <div id="custom-wrapper">
        <div id="custom-page">
            @include('layout.header')

            @yield('content')

            @include('layout.footer')

            @include('layout.script')

            @yield('scripts')
        </div>
    </div>
</body>

</html>