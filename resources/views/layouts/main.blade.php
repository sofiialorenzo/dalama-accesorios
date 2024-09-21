<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        @yield('title', 'Main')
    </title>
    <!-- <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet"> -->
</head>

<body>
    
    @if (session()->has('feedback.message'))
        <div class="alert alert-success">
            {!! session()->get('feedback.message') !!}
        </div>
    @endif

    @yield('content')

    <script src="{{ url('js/tailwind.js') }}"></script>
</body>

</html>
