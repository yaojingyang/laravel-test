<html>
<head>
    <title>@yield('title')</title>
</head>
<body>
@section('sidebar')
@show

<div class="container">
    @yield('content')
</div>
<div class="container">
    @yield('content_login')
</div>
</body>
</html>