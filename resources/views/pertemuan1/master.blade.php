<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tugas Laravel</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <a class="navbar-brand" href="#">Halaman @yield('header')</a>
    </nav>
    <div class="container" style="height: 284px;">
        <!-- Content here -->
        @yield('konten')
    </div>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="margin-top: 338px;">
        <h3 class="navbar-brand" style="margin-left: 600px; font-size: 12px;">@Copyright @yield('footer')</h3>
    </nav>
</body>
</html>
