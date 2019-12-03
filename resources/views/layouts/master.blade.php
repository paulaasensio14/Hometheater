<html>
    <head>
        <title>
            @yield('title')
        </title>
        <link rel="stylesheet" type="text/css" href="{{url('css/styleShow.css')}}">
        <link rel="stylesheet" type="text/css" href="{{url('css/styleIndex.css')}}">
        <script type="script/stylesheet" src="{{url('js/scriptIndex.js')}}"></script>
        <link rel="shortcut icon" href="{{ url('https://cdn4.iconfinder.com/data/icons/planner-color/64/popcorn-movie-time-512.png') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
        
    </head>
    <body>
        @section('sidebar')
            
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>