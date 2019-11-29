<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
use App\Person;

class MovieController extends Controller
{
    // Show All
    public function index() {
        $movies = Movie::all();
        return view('movie.index', ['movieList'=>$movies]);
    }

    // Form create movie
    public function create(){
        $genres = Genre::all();
        $people = Person::all();
        return view('movie.create', ['genreList'=>$genres, 'personList'=>$people]);
    }

    // Create movie
    public function store(Request $r){
        /*
        $r->validate([
            'title'=> 'required', 
            'year'=> 'required|email', 
            'duration'=> 'required'
            'rating'=> 'required'
            'external_url'=> 'required'
        ]);
        */

        $movie = new Movie($r->all());
        /**
         * Cover
         * Storage::move('ruta donde vas a guardar el archivo en la carpeta publica', 'nombre del fichero');
         */
        
        if ($r->hasFile('cover')) {
            $r->file('cover')->move('covers', $r->file('cover')->getClientOriginalName());
            // Para guardarla en la base de datos
            $move->cover = $r->file('cover')->getClientOriginalName();
        }

        $movie->save();
        $movie->genres()->attach($r->genres);
        $movie->actors()->attach($r->actors);
        $movie->directors()->attach($r->directors);
        return redirect()->route('movie.index');
    }

    // Show one
    public function show($id){
        $movie = Movie::find($id);
        return view('movie.show', ['movie'=>$movie]);
    }

    // Update movie
    public function update($id, Request $r){
        $movie = Movie::find($id);
        $movie->fill($r->all());
        // Cover
        if($r->hasFile('cover')){
            File::delete(public_path('covers/'.$movie->cover));
            $r->file('cover')->move('covers', $r->file('cover')->getClientOriginalName());
            $movie->cover = $r->file('cover')->getClientOriginalName();
        }
        $movie->genres()->sync($r->genres);
        $movie->actors()->sync($r->actors);
        $movie->directors()->sync($r->directors);
        $movie->save();
        return redirect()->route('movie.index');
    }

    // Form update
    public function edit($id){
        $movie = Movie::find($id);
        $genres = Genre::all();
        $people = Person::all();
        return view('movie.create', array('movie' => $movie), ['genreList'=>$genres, 'personList'=>$people]);
    }

    // Delete user
    public function destroy($id){
        $movie = Movie::find($id);
        File::delete(public_path('covers/'.$movie->cover));
        $movie->genres()->detach();
        $movie->actors()->detach();
        $movie->directors()->detach();
        $movie->delete();
        return redirect()->route('movie.index');
    }
}
