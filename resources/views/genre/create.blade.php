@extends('layouts.master')

@section('title', 'Create genre')

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
            
    @isset($genre)
        <form action="{{ route('genre.update', ['genre' => $genre->id]) }}" method="POST">
        @method("PUT")
    @else
        <form action="{{ route('genre.store') }} " method="POST">
    @endisset
                            
    @csrf <!-- Seguridad del formulario -->
    Genre:<br>
    <input type="text" name="description" value="{{$genre->description ?? ''}}"><br><br>
    <input type="submit" value="submit">
    </form>
@endsection