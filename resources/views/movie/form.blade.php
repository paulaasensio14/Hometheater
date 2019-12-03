@extends('layouts/master')

@section('title', 'Form movie')

@section('content')
<div class="wrapper"> 
	<div class="side">
		<div class="bg"></div>
		<div>
			<h3>Hometheater</h3>
		</div>
		<input type="text" class="search" placeholder="Search" />
		<ul class="menu">
			<li><a href="{{route('movie.index')}}"><i class="zmdi zmdi-movie"></i> Movies </a></li>
			<li><a href="{{route('person.index')}}"><i class="zmdi zmdi-accounts-list"></i> People</a></li>
			<br><br>
			@guest
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				<li><a href="{{route('home')}}"><i class="zmdi zmdi-account-circle"></i> Login </a></li>
			@endguest

			@auth
				<br><br><br><br><br><br><br>
				<li><a href="{{route('user.index')}}"><i class="zmdi zmdi-accounts-alt"></i> Users </a></li>
				<li class="selected"><a href="{{route('movie.create')}}"><i class="zmdi zmdi-plus"></i> Add movie </a></li>
				<li><a href="{{route('user.create')}}"><i class="zmdi zmdi-plus"></i> Add user </a></li>
				<li><a href="{{route('person.create')}}"><i class="zmdi zmdi-plus"></i> Add person </a></li>
				<li><a href="{{route('genre.create')}}"><i class="zmdi zmdi-plus"></i> Add genre </a></li>
				<li>
					<form id="logout" action="{{url('/logout')}}" method="POST" >
						@csrf
						<a class="nav-link" href="javascript:{}" onclick="document.getElementById('logout').submit();"><i class="zmdi zmdi-account-circle"> Logout </i></a>
					</form>				
				</li>
			@endauth
		</ul>
	</div>
	<div class="main-wrap">
		<div class="main">
			<div class="listMovie">
                <div class="content">
					<ul class="covers">
						@isset($movie)
							<form enctype="multipart/form-data" action="{{ route('movie.update', ['movie' => $movie->id]) }}" method="POST">
							@method("PUT")
						@else
							<form enctype="multipart/form-data" action="{{ route('movie.store') }}" method="POST">
						@endisset
												
						@csrf
						Movie title:<br>
						<input type="text" name="title" value="{{$movie->title ?? ''}}"><br>
						@error('title'){{$message}}@enderror
						Year: <br>
						<input type="number" name="year" value="{{ $movie->year ?? '' }}"><br>
						@error('year'){{$message}}@enderror
						Duration: <br>
						<input type="number" name="duration" value="{{ $movie->duration ?? '' }}"><br>
						@error('duration'){{$message}}@enderror
						Rating: <br>
						<input type="number" name="rating" value="{{ $movie->rating ?? '' }}"><br>
						@error('rating'){{$message}}@enderror
						Cover: <br>
						<input type="file" name="cover"><br>
						@error('cover'){{$message}}@enderror
						Filepath: <br>
						<input type="text" name="filepath" value="{{ $movie->filepath ?? '' }}"><br>
						@error('filepath'){{$message}}@enderror
						Filename: <br>
						<input type="text" name="filename" value="{{ $movie->filename ?? '' }}"><br>
						@error('filename'){{$message}}@enderror
						External URL: <br>
						<input type="text" name="external_url" value="{{ $movie->external_url ?? '' }}"><br>
						@error('external_url'){{$message}}@enderror
						Genres: <br>
						@foreach ($genreList as $genre)
							<input type="checkbox" name="genres[]" value="{{$genre->id ?? ''}}"
							@if(isset($movie) && in_array($genre->id, $movie->indexesList('genres')))
								checked
							@endif
							> {{$genre->description}} <br>
						@endforeach
						@error('genres'){{$message}}@enderror
						<br>
						Actors: <br>
						@foreach ($personList as $people)
							<input type="checkbox" name="actors[]" value="{{$people->id ?? ''}}"
							@if(isset($movie) && in_array($people->id, $movie->indexesList('actors')))
								checked
							@endif
							> {{$people->name}} <br>
						@endforeach
						@error('actors'){{$message}}@enderror
						<br>
						Directors: <br>
						@foreach ($personList as $people)
							<input type="checkbox" name="directors[]" value="{{$people->id ?? ''}}"
							@if(isset($movie) && in_array($people->id, $movie->indexesList('directors')))
								checked
							@endif
							> {{$people->name}} <br>
						@endforeach
						@error('directors'){{$message}}@enderror
						<br>
						<input type="submit" value="submit">
						</form>
                    </ul>         
				</div>
			</div>
		</div>
	</div>
</div>
@endsection