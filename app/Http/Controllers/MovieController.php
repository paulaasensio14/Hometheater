<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Pagination
use App\Movie;
use App\Genre;
use App\Person;

class MovieController extends Controller
{
    // Show All
    public function index() {
        $movies = Movie::simplePaginate(6);
        //$movies = DB::table('movies')->paginate(6);
        $genres = Genre::all();
        return view('movie.index', ['movieList'=>$movies, 'genreList'=>$genres]);
    }

    // Form create movie
    public function create(){
        $genres = Genre::all();
        $people = Person::all();
        return view('movie.form', ['genreList'=>$genres, 'personList'=>$people]);
    }

    // Create movie
    public function store(Request $r){
        
        $r->validate([
            'title' => 'required|max:255',
            //'synopsis' => 'required|max:1024',
            'year' => 'required|digits:4',
            'rating' => 'required|digits_between:1,10',
            'cover' => 'image|mimes:jpeg,jpg,png,gif,svg',
            'external_url' => 'url',
            'filepath' => 'required|max:255',
            'filename' => 'required|max:255',
            'actors' => 'array',
            'directors' => 'array',
            'genres' => 'array'
        ]);

        $movie = new Movie($r->all());
        
        /* Cover */
        if ($r->hasFile('cover')) {
            $r->file('cover')->move('covers', $r->file('cover')->getClientOriginalName());
            // save in DB
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
            File::delete(public_path('/covers/'.$movie->cover));
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
        return view('movie.form', array('movie' => $movie), ['genreList'=>$genres, 'personList'=>$people]);
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
