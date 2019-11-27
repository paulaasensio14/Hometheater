@extends('layouts.master')

@section('title', 'Create movie')

@section('sidebar')
    
@endsection
@section('content')
    <!--
    @ if ($errors->any())
        @ foreach ($errors->all() as $error)
            { {$error}} <br>
        @ endforeach"
    @ end if
    -->
            
    @isset($movie)
        <form enctype="multipart/form-data" action="{{ route('movie.update', ['movie' => $movie->id]) }}" method="POST">
        @method("PUT")
    @else
        <form enctype="multipart/form-data" action="{{ route('movie.store') }} " method="POST">
    @endisset
                            
    @csrf <!-- Seguridad del formulario -->
    Movie title:<br>
    <input type="text" name="title" value="{{$movie->title ?? ''}}"><br>
    Year: <br>
    <input type="number" name="year" value="{{ $movie->year ?? '' }}"><br>
    Duration: <br>
    <input type="number" name="duration" value="{{ $movie->duration ?? '' }}"><br>
    Rating: <br>
    <input type="number" name="rating" value="{{ $movie->rating ?? '' }}"><br>
    Cover: <br>
    <input type="file" name="cover"><br>
    Filepath: <br>
    <input type="text" name="filepath" value="{{ $movie->filepath ?? '' }}"><br>
    Filename: <br>
    <input type="text" name="filename" value="{{ $movie->filename ?? '' }}"><br>
    External URL: <br>
    <input type="text" name="external_url" value="{{ $movie->external_url ?? '' }}"><br>
    Genres: <br>
    @foreach ($genreList as $genre)
        <input type="checkbox" name="genres[]" value="{{$genre->id ?? ''}}"
        @if(isset($movie) && in_array($genre->id, $movie->indexesList('genres')))
            checked
        @endif
        > {{$genre->description}} <br>
    @endforeach
    <br>
    Actors: <br>
    @foreach ($personList as $people)
        <input type="checkbox" name="actors[]" value="{{$people->id ?? ''}}"
        @if(isset($movie) && in_array($people->id, $movie->indexesList('actors')))
            checked
        @endif
        > {{$people->name}} <br>
    @endforeach
    <br>
    Directors: <br>
    @foreach ($personList as $people)
        <input type="checkbox" name="directors[]" value="{{$people->id ?? ''}}"
        @if(isset($movie) && in_array($people->id, $movie->indexesList('directors')))
            checked
        @endif
        > {{$people->name}} <br>
    @endforeach
    <br>
    <input type="submit" value="submit">
    </form>
@endsection