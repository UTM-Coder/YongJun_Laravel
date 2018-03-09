<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        @section('title')
        App: 
        @show
    </title>
    @yield('style')
</head>
<body>
    @yield('pre-content')
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum architecto consectetur, fugit tenetur optio vitae tempore a eligendi voluptatibus beatae, numquam dignissimos ex minus cupiditate laudantium totam, eaque asperiores minima.
    @yield('content')
</body>
@yield('script')
</html>