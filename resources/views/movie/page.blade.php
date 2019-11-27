@extends('layouts/master')

@section('title', 'Menu movies')

@section('sidebar')
    <form action="{{route('user.index')}}">
        <input style="transform:translateY(25%); width: 120px;" type="submit" value="Users" />
    </form>
    <form action="{{route('movie.index')}}">
        <input style="transform:translateY(25%); width: 120px;" type="submit" value="Movies" />
    </form>
    <form action="{{route('person.index')}}">
        <input style="transform:translateY(25%); width: 120px;" type="submit" value="People" />
    </form>
@endsection

@section('content')
    <table style="width:80%; border: 2px solid black; text-align: center; transform:translateX(-50%); position: absolute; left:50%;  border-radius: 10px;">
        <tr>
            <th>ID</th>
            <th>MOVIE TITLE</th>
            <th>COVER</th>
            <th>YEAR</th>
            <th>DURATION</th>
            <th>RATING</th>
            <th>EXTERNAL URL</th>
            <th>GENRES</th>
            <th>ACTORS</th>
            <th>DIRECTORS</th>
            <th></th>
            <th>
                <form action="{{route('movie.create')}}">
                    <input style="transform:translateY(25%)" type="submit" value="New movie" />
                </form>
            </th>
        </tr>

        @foreach ($movieList as $movie)
        <tr>
            <td>{{$movie->id}}</td> 
            <td><a href="{{route('movie.show', $movie->id)}}" >{{$movie->title}}</a></td>
            <td><img style="width:75px" src="{{url('covers/'.$movie->cover)}}" alt="{{$movie->title}}"></td>
            <td>{{$movie->year}}</td>
            <td>{{$movie->duration}}</td>
            <td>{{$movie->rating}}</td>
            <td>{{$movie->external_url}}</td>
            <td>
                @foreach($movie->genres as $genre)
                    {{$genre->description}}
                @endforeach
            </td>
            <td>
                @foreach($movie->actors as $people)
                    {{$people->name}}
                @endforeach
            </td>
            <td>
                @foreach($movie->directors as $people)
                    {{$people->name}}
                @endforeach
            </td>
            <td>
                <form action="{{route('movie.edit', $movie->id)}}">
                    <input style="transform:translateY(25%)" type="submit" value="Update" />
                </form>
                </td>
            <td>
                <form action = "{{route('movie.destroy', $movie->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input style="transform:translateY(25%)" type="submit" value="Delete"><br>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection