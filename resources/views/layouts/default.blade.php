<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">

    <title>@yield('title')</title>

    <!-- load bootstrap from a cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    @include('includes.header')

    <div id="main">
        @yield('content')
    </div>

    <div class="row">
        @include('includes.footer')
    </div>
</div>
</body>
</html>