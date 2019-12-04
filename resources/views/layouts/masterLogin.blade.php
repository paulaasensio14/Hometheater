<html>
    <head>
        <title>
            @yield('title')
        </title>
        <link rel="shortcut icon" href="{{ url('https://cdn4.iconfinder.com/data/icons/planner-color/64/popcorn-movie-time-512.png') }}">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css" integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
        
    </head>
    <body>
        @section('sidebar')
            
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>