@extends('layouts/master')

@section('title', 'Menu users')

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
    <table style="width:60%; border: 2px solid black; text-align: center; transform:translate(-50%, -50%); position: absolute; top:50%; left:50%;  border-radius: 10px;">
        <tr>
            <th>ID</th>
            <th>USER NAME</th>
            <th>EMAIL</th>
            <th>PASSWORD</th>
            <th></th>
            <th>
                <form action="{{route('user.create')}}">
                    <input style="transform:translateY(25%); width: 105px;" type="submit" value="New user" />
                </form>
            </th>
        </tr>
        @foreach ($userList as $user)
        <tr>
            <td>{{$user->id}}</td> 
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
            <td>
                <form action="{{route('user.edit', $user->id)}}">
                    <input style="transform:translateY(25%)" type="submit" value="Update" />
                </form>
                </td>
            <td>
                <form action = "{{route('user.destroy', $user->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <input style="transform:translateY(25%)" type="submit" value="Delete"><br>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection