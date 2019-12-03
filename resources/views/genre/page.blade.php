@extends('layouts/master')

@section('title', 'Menu genre')

@section('content')
    <table style="width:40%; border: 2px solid black; text-align: center; transform:translate(-50%, -50%); position: absolute; top:50%; left:50%;  border-radius: 10px;">
        <tr>
            <th>ID</th>
            <th>DESCRIPTION</th>
            <th></th>
            <th>
                <form action="{{route('genre.create')}}">
                    <input style="transform:translateY(25%)" type="submit" value="New genre" />
                </form>
            </th>
        </tr>
        @foreach ($genreList as $genre)
        <tr>
            <td>{{$genre->id}}</td> 
            <td>{{$genre->description}}</td>
            <td>
                <form action="{{route('genre.edit', $genre->id)}}">
                    <input style="transform:translateY(25%)" type="submit" value="Update" />
                </form>
                </td>
            <td>
                <form action = "{{route('genre.destroy', $genre->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input style="transform:translateY(25%)" type="submit" value="Delete"><br>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection