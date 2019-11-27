@extends('layouts/master')

@section('title', 'Update User')

@section('content')
    <form method="POST" action="{{route('user.store')}}">
        @csrf
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{$error}} <br>
            @endforeach"
        @endif
        User Name:<br>
        <input type="text" name="userName" value="{{ old('userName') }}"><br>
        Email: <br>
        <input type="email" name="email" value="{{ old('email') }}"><br>
        Password: <br>
        <input type="password" name="password" value="{{ old('password') }}"><br><br>
        <input type="submit" value="Update User">
    </form>
@endsection