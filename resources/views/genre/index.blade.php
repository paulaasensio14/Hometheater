@extends('layouts/master')

@section('title', 'Menu genres')

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
				<li><a href="{{route('login')}}"><i class="zmdi zmdi-account-circle"></i> Login </a></li>
			@endguest

			@auth
				<br><br><br><br><br><br><br>
				<li><a href="{{route('user.index')}}"><i class="zmdi zmdi-accounts-alt"></i> Users </a></li>
				<li><a href="{{route('movie.create')}}"><i class="zmdi zmdi-plus"></i> Add movie </a></li>
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
			<div class="list">
                <div class="content">
                    {{$genreList->links()}}
					<ul class="covers">
					@foreach ($genreList as $genre)
                        <li>
							<span style="font-weight: bold"><a href="{{route('genre.show', $genre->id)}}">{{$genre->description}}</a></span>
							<span>Id: {{$genre->id}}</span>
							<small>
								@auth    
									<form style="display:contents" action = "{{route('genre.destroy', $genre->id)}}" method="POST">
										@csrf
										@method("DELETE")
										<button title="Delete" class="red" type="submit"><i class="zmdi zmdi-delete"></i></button>
									</form>
									<form style="display:contents" action = "{{route('genre.edit', $genre->id)}}" method="GET">
										@csrf
										<button title="Edit" class="green" type="submit"><i class="zmdi zmdi-edit"></i></button>
									</form>
								@endauth
							</small>
                        </li>
                    @endforeach
                    </ul>         
				</div>
			</div>
		</div>
	</div>
</div>
@endsection