<!doctype html>
<html>

<head>
    @include('includes.main.head')
</head>

<body class="flex flex-col min-h-screen">
    <div class="container">
        {{-- <header>
            @include('includes.main.header')
        </header> --}}
        <div>
            @yield('content')
        </div>
    </div>
    @include('includes.main.footer')
</body>

</html>
