<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title', 'Main')
    </title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <x-nav></x-nav>
    @if (session()->has('feedback.message'))
        <div class="alert alert-success">
            {!! session()->get('feedback.message') !!}
        </div>
    @endif

    @yield('content')

    <script src="{{ url('js/tailwind.js') }}"></script>
</body>

</html>
