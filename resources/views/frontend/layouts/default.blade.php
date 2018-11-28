<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Sample Project</title>
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
    @include('frontend.includes.nav')
    @yield('content')

</div>

<script src="{{ asset('js/jquery.min.js') }}" ></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>