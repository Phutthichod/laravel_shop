
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
</head>
<body>
<div id="container" style="width: 70%; margin:auto">
    <div id="header">
        @include('templates.header')
    </div>
    <div id="content" style="text-align: center">
        @yield('content')
    </div>
    <div id="footer">
        @include('templates.footer')
    </div>
</div>
</body></html>
