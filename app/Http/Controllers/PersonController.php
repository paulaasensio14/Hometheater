<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Pagination
use App\Person;
use App\Movie;

class PersonController extends Controller
{
    // Show All
    public function index() {
        $people = Person::simplePaginate(6);
        return view('person.index', ['peopleList'=>$people]);
    }

    // Form create
    public function create(){
        return view('person.form');
    }

    // Create
    public function store(Request $r){
        
        $r->validate([
            'name' => 'required|max:255',
            'photo' => 'image|mimes:jpeg,jpg,png,gif,svg',
            'external_url' => 'url',
            'act' => 'array',
            'direct' => 'array'
        ]);

        $person = new Person($r->all());
        // Photos
        
        if ($r->hasFile('photo')) {
            $r->file('photo')->move('photos', $r->file('photo')->getClientOriginalName());
            // Para guardarla en la base de datos
            $person->photo = $r->file('photo')->getClientOriginalName();
        }
        $person->save();
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
        $person->save();
        return redirect()->route('person.index');
    }

    // Form update
    public function edit($id){
        $person = Person::find($id);
        return view('person.form', array('person' => $person));
    }

    // Delete user
    public function destroy($id){
        $person = Person::find($id);
        File::delete(public_path('photos/'.$person->photo));
        $person->delete();
        return redirect()->route('person.index');
    }
}
