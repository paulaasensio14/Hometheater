<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;
use App\Movie;

class PersonController extends Controller
{
    // Show All
    public function index() {
        $people = Person::all();
        return view('person.page', ['peopleList'=>$people]);
    }

    // Form create
    public function create(){
        //$people = Person::all();
        return view('person.create');
        //return view('person.create', ['peopleList'=>$people]);
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

        $person = new Person($r->all());
        // Photos
        
        if ($r->hasFile('photo')) {
            $r->file('photo')->move('photos', $r->file('photo')->getClientOriginalName());
            // Para guardarla en la base de datos
            $person->photo = $r->file('photo')->getClientOriginalName();
        }
        $person->save();
        //$person->genres()->attach($r->genres);
        return redirect()->route('person.index');
    }

    // Show one
    public function show($id){
        $person = Person::find($id);
        return view('person.show', ['person'=>$person]);
    }

    // Update movie
    public function update($id, Request $r){
        $person = Person::find($id);
        $person->fill($r->all());
        // Photos
        if($r->hasFile('photo')){
            File::delete(public_path('photos/'.$person->photo));
            $r->file('photo')->move('photos', $r->file('photo')->getClientOriginalName());
            $person->photo = $r->file('photo')->getClientOriginalName();
        }
        //$person->genres()->sync($r->genres);
        $person->save();
        return redirect()->route('person.index');
    }

    // Form update
    public function edit($id){
        $person = Person::find($id);
        //$genres = Genre::all();
        return view('person.create', array('person' => $person));
        //return view('person.create', array('person' => $person), ['genreList'=>$genres]);
    }

    // Delete user
    public function destroy($id){
        $person = Person::find($id);
        File::delete(public_path('photos/'.$person->photo));
        //$person->genres()->detach();
        $person->delete();
        return redirect()->route('person.index');
    }
}
