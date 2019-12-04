<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Genre;

class GenreController extends Controller
{
    public function __construct() {
        $this->middleware("auth")->except("index", "show");
    }

    // Show All
    public function index() {
        $genres = Genre::simplePaginate(21);
        return view('genre.index', ['genreList'=>$genres]);
    }

    // Form create
    public function create(){
        return view('genre.form');
    }

    // Create
    public function store(Request $r){
        $r->validate([
            'description' => 'required|max:50',
        ]);

        $genre = new Genre($r->all());
        
        $genre->save();
        return redirect()->route('genre.index');
    }

    // Show one
    public function show($id){
        $genreList = Genre::all()->sortBy('description');
        //$movie = DB::select(DB::raw("SELECT DISTINCT movies.* FROM movies INNER JOIN genres_movies ON movies.id = genres_movies.id_movies WHERE genres_movies.id_genres = $id ORDER BY movies.year DESC"));
        //return view('movie.index', ['movieList'=>$movie, 'genreList'=>$genreList]);
        return view('genre.index', ['genreList'=>$genreList]);
    }

    // Update
    public function update($id, Request $r){
        $genre = Genre::find($id);
        $genre->fill($r->all());
        $genre->save();
        return redirect()->route('genre.index');
    }

    // Form update
    public function edit($id){
        $genre = Genre::find($id);
        return view('genre.form', array('genre' => $genre));
    }

    // Delete user
    public function destroy($id){
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->route('genre.index');
    }
}
