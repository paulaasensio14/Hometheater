@extends('layouts.master')

@section('title', 'Create person')

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
            
    @isset($person)
        <form enctype="multipart/form-data" action="{{ route('person.update', ['person' => $person->id]) }}" method="POST">
        @method("PUT")
    @else
        <form enctype="multipart/form-data" action="{{ route('person.store') }} " method="POST">
    @endisset
                            
    @csrf
    Name:<br>
    <input type="text" name="name" value="{{$person->name ?? ''}}"><br>
    Photo: <br>
    <input type="file" name="photo"><br>
    External URL: <br>
    <input type="text" name="external_url" value="{{ $person->external_url ?? '' }}"><br>
    <br>
    <input type="submit" value="submit">
    </form>
@endsection