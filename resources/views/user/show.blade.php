@extends('layouts/master')

@section('title', $user->name)  

@section('content')
<div class="bodyShow">
<div class="card">
    <div class="card_left">
        <img src="{{url('photos/perfileIcon.png')}}" alt="{{$user->name}}">
    </div>
        <div class="card_right">
            <h1>{{$user->name}}</h1>
            <div class="card_right__details">
                <ul>
                    <li>Password: &nbsp; {{$user->password}}</li><br><br>
                    <li>Email: &nbsp; {{$user->email}}</li><br>
                    <br>
                </ul>
                <div class="card_right__review">
                    <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Vivamus ullamcorper, libero id iaculis ultrices, turpis mauris pretium augue, 
                        vitae scelerisque tortor purus nec tortor. Phasellus aliquet eu erat ac sagittis. 
                        Integer mattis ante urna, id vulputate lacus convallis id. Vivamus eu luctus leo, 
                        nec consequat sem.
                    </p>
                </div>
                <div class="card_right__button">
                    <br><br><br><br><br><br><br>
                    <a class="green" href="{{route('movie.index')}}">BACK HOME</a>
                    @auth    
                        <form style="display:contents" action = "{{route('user.destroy', $user->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button title="Delete" class="red" type="submit"><i class="zmdi zmdi-delete"></i></button>
                        </form>
                        <form style="display:contents" action = "{{route('user.edit', $user->id)}}" method="GET">
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