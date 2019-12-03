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
                <div class="card_right__review">
                    <p> 
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vivamus ullamcorper, libero id iaculis ultrices, turpis mauris pretium augue, 
                        vitae scelerisque tortor purus nec tortor. Phasellus aliquet eu erat ac sagittis. 
                        Integer mattis ante urna, id vulputate lacus convallis id. Vivamus eu luctus leo, 
                        nec consequat sem.
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vivamus ullamcorper, libero id iaculis ultrices, turpis mauris pretium augue, 
                        vitae scelerisque tortor purus nec tortor. Phasellus aliquet eu erat ac sagittis. 
                        Integer mattis ante urna, id vulputate lacus convallis id. Vivamus eu luctus leo, 
                        nec consequat sem...
                    </p>
                </div>
                <ul>
                    <li><a href="{{$person->external_url}}">Read more...</a></li>
                    <br><br>
                </ul>
                <div class="movies">
                    <li>Movies</li><br>
                    @foreach($person->act as $movie)
                        <a href="{{route('movie.show', $movie->id)}}"><img src="{{url('covers/'.$movie->cover)}}" alt="{{$movie->title}}" title="{{$movie->title}}"></a>
                    @endforeach
                    <br>
                </div>
                <div class="card_right__button">
                    <a class="green" href="{{route('movie.index')}}">BACK HOME</a>
                    @auth    
                        <form style="display:contents" action = "{{route('person.destroy', $person->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button title="Delete" class="red" type="submit"><i class="zmdi zmdi-delete"></i></button>
                        </form>
                        <form style="display:contents" action = "{{route('person.edit', $person->id)}}" method="GET">
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