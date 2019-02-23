<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>@yield('title')</title>
    @stack('styles')
    <!-- load bootstrap from a cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/plug-ins/1.10.19/pagination/simple_incremental_bootstrap.js"></script>
    
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
@stack('scripts')
</html>