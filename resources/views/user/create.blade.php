@extends('layouts.master')

@section('title', 'Create User')

@section('sidebar')
    
@endsection
@section('content')
    <!--
    @ if ($errors->any())
        @ foreach ($errors->all() as $error)
            { {$error}} <br>
        @ endforeach"
    @ endif
    -->
            
    @isset($user)
        <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('user.store') }} " method="POST">
    @endisset
                            
    @csrf <!-- Seguridad del formulario -->
    User Name:<br>
    <input type="text" name="name" value="{{$user->name ?? ''}}"><br>
    Email: <br>
    <input type="email" name="email" value="{{$user->email ?? ''}}"><br>
    Password: <br>
    <input type="password" name="password" value="{{$user->password ?? ''}}"><br><br>
    <input type="submit" value="Submit">
    </form>

@endsection