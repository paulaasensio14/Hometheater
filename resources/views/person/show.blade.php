@extends('layouts/master')

@section('title', 'Show person')

@section('content')
<div class="bodyShow">
<div class="card">
    <div class="card_left">
        <img src="{{url('photos/'.$person->photo)}}" alt="{{$person->name}}">
    </div>
        <div class="card_right">
            <h1>{{$person->name}}</h1>
            <div class="card_right__details">
                <ul>
                    <li>{{$person->external_url}}</li>
                    <br>
                </ul>
                <div class="card_right__review">
                    <p> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vivamus ullamcorper, libero id iaculis ultrices, turpis mauris pretium augue, 
                        vitae scelerisque tortor purus nec tortor. Phasellus aliquet eu erat ac sagittis. 
                        Integer mattis ante urna, id vulputate lacus convallis id. Vivamus eu luctus leo, 
                        nec consequat sem.
                    </p>
                </div>
                <div class="movies">
                    <li>Movies</li><br>
                    @foreach($person->act as $movie)
                        <a href="{{route('movie.show', $movie->id)}}"><img src="{{url('covers/'.$movie->cover)}}" alt="{{$movie->title}}" title="{{$movie->title}}"></a>
                    @endforeach
                    <br>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection