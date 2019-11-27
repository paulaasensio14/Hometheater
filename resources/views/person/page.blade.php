@extends('layouts/master')

@section('title', 'Menu people')

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
            <th>NAME</th>
            <th>PHOTO</th>
            <th>EXTERNAL URL</th>
            <th></th>
            <th>
                <form action="{{route('person.create')}}">
                    <input style="transform:translateY(25%)" type="submit" value="New person" />
                </form>
            </th>
        </tr>

        @foreach ($peopleList as $person)
        <tr>
            <td>{{$person->id}}</td> 
            <td>{{$person->name}}</td>
            <td><img style="width:75px" src="{{url('photos/'.$person->photo)}}" alt="{{$person->name}}"></td>
            <td>{{$person->external_url}}</td>
            <!--<td>
                @ foreach($person->genres as $genre)
                    { {$genre->description}}
                @ endforeach
            </td>-->
            <td>
                <form action="{{route('person.edit', $person->id)}}">
                    <input style="transform:translateY(25%)" type="submit" value="Update" />
                </form>
                </td>
            <td>
                <form action = "{{route('person.destroy', $person->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input style="transform:translateY(25%)" type="submit" value="Delete"><br>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection