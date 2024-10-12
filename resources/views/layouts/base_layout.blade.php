<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GolfMatch - @yield('title')</title>

    {{-- CSS --}}
    <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    {{-- JS --}}
    <script type="text/javascript" src="{{ asset('/js/jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/golf-match-ajax.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/golf-match.js') }}"></script>
    @stack('pageJs')
</head>

<body>

    {{-- 画面内容 --}}
    @yield('content')

</body>

</html>
