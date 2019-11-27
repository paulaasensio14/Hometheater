<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller {

    // Show All
    public function index() {
        $users = User::all();
        return view('user.page', ['userList'=>$users]);
    }

    // Form create user
    public function create(){
        return view('user.create');
    }

    // Create user
    public function store(Request $r){
        /*
        $r->validate([
            'name'=> 'required', 
            'email'=> 'required|email', 
            'password'=> 'required'
        ]);
        */

        $user = new User($r->all());
        
        $user->save();
        return redirect()->route('user.index');
    }

    // Show one user
    public function show($id){
        return view('user.page', $id);
    }

    // Update user
    public function update($id, Request $r){
        $user = User::find($id);
        $user->fill($r->all());
        $user->save();
        return redirect()->route('user.index');
    }

    // Form update user
    public function edit($id){
        $user = User::find($id);
        return view('user.create', array('user' => $user));
    }

    // Delete user
    public function destroy($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
