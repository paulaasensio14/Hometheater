@extends('layouts/master')

@section('title', $movie->title)  

@section('content')
<div class="bodyShow">
<div class="card">
    <div class="card_left">
        <img src="{{url('covers/'.$movie->cover)}}" alt="{{$movie->title}}">
    </div>
        <div class="card_right">
            <h1>{{$movie->title}}</h1>
            <div class="card_right__details">
                <ul>
                    <li>{{$movie->year}}</li>
                    <li>{{$movie->duration}} min</li><br>
                    @foreach($movie->genres as $genre)
                        <li>{{$genre->description}}</li>
                    @endforeach
                    <br>
                    <li>Rating: &nbsp&nbsp{{$movie->rating}}</li>
                </ul>
                <div class="card_right__review">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vivamus ullamcorper, libero id iaculis ultrices, turpis mauris pretium augue, 
                        vitae scelerisque tortor purus nec tortor. Phasellus aliquet eu erat ac sagittis. 
                        Integer mattis ante urna, id vulputate lacus convallis id. Vivamus eu luctus leo, 
                        nec consequat sem.
                    </p>
                </div>
                <div class="people">
                    <li>Actors</li><br>
                    @foreach($movie->actors as $person)
                        <a href="{{route('person.show', $person->id)}}"><img src="{{url('photos/'.$person->photo)}}" alt="{{$person->name}}" title="{{$person->name}}"></a>
                    @endforeach
                    <br>
                    <li>Directors</li><br>
                    @foreach($movie->directors as $person)
                        <a href="{{route('person.show', $person->id)}}"><img src="{{url('photos/'.$person->photo)}}" alt="{{$person->name}}" title="{{$person->name}}"></a>
                    @endforeach
                </div>
                <div class="card_right__button">
                    <a class="red" href="{{url($movie->filepath.$movie->filename)}}">WATCH TRAILER</a>
                    <a class="green" href="{{route('movie.index')}}">BACK HOME</a>
                    @auth    
                        <form style="display:contents" action = "{{route('movie.destroy', $movie->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button title="Delete" class="red" type="submit"><i class="zmdi zmdi-delete"></i></button>
                        </form>
                        <form style="display:contents" action = "{{route('movie.edit', $movie->id)}}" method="GET">
                            @csrf
                            <button title="Edit" class="green" type="submit"><i class="zmdi zmdi-edit"></i></button>
                        </form>
                    @endauth
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection