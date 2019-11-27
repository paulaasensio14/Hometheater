<html>
    <head>
        <title>
            @if (isset($movie->title))
                {{$movie->title}}
                @else
                @yield('title')
                @endif
            </title>
        <link rel="stylesheet" type="text/css" href="{{url('css/styleShow.css')}}">
        
        <script src="{{url('js/scriptIndex.js')}}"></script> 
        <link rel="shortcut icon" href="{{ url('https://cdn4.iconfinder.com/data/icons/planner-color/64/popcorn-movie-time-512.png') }}">
    </head>
    <body>
        @section('sidebar')
            
        @show
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>