@extends('layouts/master')

@section('title', 'Menu movies')

@section('content')
<div class="wrapper"> 
	<div class="side">
		<div class="bg"></div>
		<div>
			<h3>Hometheater</h3>
		</div>
		<input type="text" class="search" placeholder="Search" />
		<ul class="menu">
			<li title="" class="selected"><i class="zmdi zmdi-movie"></i> Movies</li>
			<li title="Ladies Night"><i class="zmdi zmdi-female"></i> People</li>
            <li title="Family Friday">
                <i class="zmdi zmdi-accounts-alt"></i> Users</li>
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			<li class="divider">
				<i class="zmdi zmdi-account-circle"></i> Login
			</li>
		</ul>
	</div>
	<div class="main-wrap">
		<div class="main">
			<div class="list">
				<div class="scroll">
					<button class="scrollTop"><i class="zmdi zmdi-arrow-left"></i></button>
					<button class="scrollDown"><i class="zmdi zmdi-arrow-right"></i></button>
				</div>
				<header>
					<ul class="filter">
                        <li data-gid="," class="selected">All</li>
                        @foreach ($movieList as $movie)
                            @foreach ($movie->genres as $genre)
                                <li>{{$genre->description}}</li>
                            @endforeach
                        @endforeach
					</ul>
				</header>
				<div class="content">
					<ul class="covers">
                        @foreach ($movieList as $movie)
                        <li>
                            <a href="{{route('movie.show', $movie->id)}}"><img src="{{url('covers/'.$movie->cover)}}" alt="{{$movie->title}}"></a>
                            <span>{{$movie->title}}</span>
                            <small>{{$movie->duration}} min</small>
                        </li>
                        @endforeach
                    </ul>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection