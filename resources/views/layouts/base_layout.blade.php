<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GolfMatch - @yield('title')</title>

    {{-- CSS --}}
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">

    {{-- JS --}}
    <script type="text/javascript" src="{{ asset('/js/jquery-3.7.1.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery-ui-1.14.0.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/jquery.ui.touch-punch-0.2.3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/golf-match.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/golf-match-ajax.js') }}"></script>
</head>

<body>
    {{-- ヘッダー --}}
    @yield('header')

    <div id="container">
        {{-- 画面内容 --}}
        @yield('content')
    </div>
</body>

<script></script>

</html>
