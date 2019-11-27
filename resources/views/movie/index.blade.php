@extends('layouts/master')

@section('title', 'Menu movies')

@section('content')
    <div class="wrapper">
        <div class="side">
            <div class="bg"></div>
            <div>
                <h3>Cinema App</h3>
            </div>
            <input class="search" type="text" placeholder="Search">
            <ul class="menu">
                <li class="selected" title="">
                    <i class="zmdi zmdi-label-alt"></i>
                    Home
                </li>
                <li title="actors">
                    <i class="zmdi zmdi-male-female"></i>
                    Actors
                </li>
                <li title="directors">
                    <i class="zmdi zmdi-male-female"></i>
                Directors
            </li>
            <li title="users">
                <i class="zmdi zmdi-male-female"></i>
                Users
            </li>
        </ul>
    </div>
</div>
    <div class="main-wrap">
        <div class="main">
            <div class="list">
                <div class="scroll">
                    <button class="scrollTop">
                        <i class="zmdi zmdi-arrow-left"></i>
                    </button>
                    <button class="scrollDown">
                        <i class="zmdi zmdi-arrow-right"></i>
                    </button>
                </div>
                <header>
                    <ul class="filter">
                        <li class="selected" data-gid=",">
                            All
                        </li>
                        <li data-gid="28">
                            Aqui poner Array de generos
                        </li>
                    </ul>
                </header>
                <div class="content">
                    <ul class="covers">
                        @foreach ($movieList as $movie)
                            <li data-index="{{$movie->id}}" style="transform:translateY(0px);">
                                <img style="width:75px" src="{{url('covers/'.$movie->cover)}}" alt="{{$movie->title}}">
                                <span>{{$movie->title}}</span>
                                <small>{{$movie->duration}}</small>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection