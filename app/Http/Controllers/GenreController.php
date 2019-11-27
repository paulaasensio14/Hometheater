<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
    // Show All
    public function index() {
        $genres = Genre::all();
        return view('genre.page', ['genreList'=>$genres]);
    }

    // Form create
    public function create(){
        return view('genre.create');
    }

    // Create
    public function store(Request $r){
        /*
        $r->validate([
            'name'=> 'required', 
            'email'=> 'required|email', 
            'password'=> 'required'
        ]);
        */

        $genre = new Genre($r->all());
        
        $genre->save();
        return redirect()->route('genre.index');
    }

    // Show one
    public function show($id){
        return view('genre.page', $id);
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
        return view('genre.create', array('genre' => $genre));
    }

    // Delete user
    public function destroy($id){
        $genre = Genre::find($id);
        $genre->delete();
        return redirect()->route('genre.index');
    }
}
